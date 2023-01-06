@extends('layouts.admin.app')

@section('title')
Laporan
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Daftar Laporan Selesai Check In</h3>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pesananSelesai as $data)
                        <tr>
                            <td></td>
                            <td>{{ $data->nama_pemesan }}</td>
                            <td>{{ $data->nama_tiket }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td><span class="badge rounded bg-success">{{ $data->status }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="white-box">
            <h3 class="box-title">Daftar Laporan Belum Check In</h3>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pesananPending as $data)
                        <tr>
                            <td></td>
                            <td>{{ $data->nama_pemesan }}</td>
                            <td>{{ $data->nama_tiket }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->no_telp }}</td>
                            <td>{{ $data->alamat }}</td>
                            <td><span class="badge rounded bg-danger">{{ $data->status }}</span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection