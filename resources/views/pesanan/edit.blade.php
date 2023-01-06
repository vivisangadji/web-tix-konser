@extends('layouts.admin.app')

@section('title')
Edit Pesanan
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('pesanan.update', $data->id) }}" class="form-horizontal form-material">
                    @csrf
                    @method('PATCH')
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Nama Tiket</label>
                        <div class="col-md-12 border-bottom p-0">
                            <select class="form-select shadow-none p-0 border-0 form-control-line">
                                @foreach($tiket as $row)
                                    <option {{ $data->nama_tiket == $row->nama_tiket ? 'selected' : '' }} value="{{ $row->nama_tiket }}">{{ $row->nama_tiket }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Nama Pemesan</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="nama_pemesan" type="text" placeholder="Nama pemesan..."
                                class="form-control p-0 border-0" value="{{ old('nama_pemesan', $data->nama_pemesan) }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Email</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="email" type="email" placeholder="Isi email"
                                class="form-control p-0 border-0" value="{{ old('email', $data->email) }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">No Telp</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="no_telp" type="number" placeholder="Isi nomor telp"
                                class="form-control p-0 border-0" value="{{ old('no_telp', $data->no_telp) }}">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Alamat</label>
                        <div class="col-md-12 border-bottom p-0">
                            <textarea name="alamat" cols="30" rows="10" class="form-control p-0 border-0">{{ old('no_telp', $data->no_telp) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">
                                Update
                                <i class="fas fa-save"></i>
                            </button>
                            <a href="{{ route('tiket.index') }}" class="btn btn-danger btn-icon-split">
                                <span class="icon text-white">
                                    <span class="text">Batal</span>
                                    <i class="fas fa-window-close"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
@endsection