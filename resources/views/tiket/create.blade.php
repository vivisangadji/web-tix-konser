@extends('layouts.admin.app')

@section('title')
Input Tiket
@endsection

@section('content')
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('tiket.store') }}" class="form-horizontal form-material">
                    @csrf
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Nama Tiket</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="nama_tiket" type="text" placeholder="Isi nama tiket..."
                                class="form-control p-0 border-0"> </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Harga Tiket</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="harga_tiket" type="text" placeholder="Isi harga..."
                                class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Tanggal Konser</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="tanggal_konser" type="date"
                                class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <label class="col-md-12 p-0">Isi Jam</label>
                        <div class="col-md-12 border-bottom p-0">
                            <input name="jam" type="text" placeholder="Contoh 19:00-00:00"
                                class="form-control p-0 border-0">
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">
                                Simpan
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