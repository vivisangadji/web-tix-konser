@extends('layouts.admin.app')

@section('title')
Pesanan
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="white-box">
            <h3 class="box-title">Daftar Pesanan</h3>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Nama pemesan</th>
                            <th class="border-top-0">Tiket Konser</th>
                            <th class="border-top-0">Email</th>
                            <th class="border-top-0">No Telp</th>
                            <th class="border-top-0">Alamat</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pesanan as $data)
                        <tr>
                            <td></td>
                            <td>{{ $data->nama_pemesan }}</td>
                            <td>{{ $data->nama_tiket }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td>{{ $data->status }}</td>
                            <td class="d-flex">
                                <a href="{{ route('pesanan.edit', $data->id) }}" class="btn btn-info btn-circle btn-sm text-white me-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('pesanan.destroy', $data->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-circle btn-sm text-white"><i class="fas fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection