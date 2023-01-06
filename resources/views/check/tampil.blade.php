@extends('layouts.admin.app')

@section('title')
Check-In
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Data</h3>
            <div class="table-responsive">
                <table class="table text-nowrap">
                    <thead>
                        <tr>
                            <th class="border-top-0">#</th>
                            <th class="border-top-0">ID</th>
                            <th class="border-top-0">Nama tiket</th>
                            <th class="border-top-0">Nama Pemesan</th>
                            <th class="border-top-0">Email</th>
                            <th class="border-top-0">Status</th>
                            <th class="border-top-0">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($data)
                        <tr>
                            <td></td>
                            <td>{{ $data->id_uniq }}</td>
                            <td>{{ $data->nama_tiket }}</td>
                            <td>{{ $data->nama_pemesan }}</td>
                            <td>{{ $data->email }}</td>
                            <td><span class="badge rounded bg-danger">{{ $data->status }}</span></td>
                            <td class="d-flex">
                                <form action="{{ route('check.update', $data->id) }}" method="post">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-primary btn-icon-split">
                                        Update Status
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @else
                        <tr>
                            <p>Data yang anda cari mungkin sudah check-in atau tidak di temukan, Kembali lakukan <a href="{{ route('check') }}" class="btn btn-primary btn-icon-split">check in</a>
                            </p>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection