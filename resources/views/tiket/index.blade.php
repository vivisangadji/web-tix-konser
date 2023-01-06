@extends('layouts.admin.app')

@section('title')
Tiket
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
            <h3 class="box-title">Daftar Tiket</h3>
            <a href="{{ route('tiket.create') }}" class="btn btn-primary">
                <i class="fas fa-plus-square"></i>
                Input Tiket
            </a>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">Nama tiket</th>
                            <th class="border-top-0">Tanggal Konser</th>
                            <th class="border-top-0">Harga</th>
                            <th class="border-top-0">Jam</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tiket as $data)
                        <tr>
                            <td></td>
                            <td>{{ $data->nama_tiket }}</td>
                            <td>{{ $data->tanggal_konser }}</td>
                            <td>{{ rupiah($data->harga_tiket) }}</td>
                            <td>{{ $data->jam }}</td>
                            <td class="d-flex">
                                <a href="{{ route('tiket.edit', $data->id) }}" class="btn btn-info btn-circle btn-sm text-white me-1">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('tiket.destroy', $data->id) }}" method="POST">
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