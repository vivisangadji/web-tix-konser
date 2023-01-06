@extends('layouts.admin.app')

@section('title')
Check-In
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
            <h3 class="box-title">Check ID</h3>
            <form method="GET" action="{{ route('check.id') }}" class="form-horizontal form-material">
                <div class="form-group mb-4">
                    <label class="col-md-12 p-0">ID Ticket</label>
                    <div class="col-md-12 border-bottom p-0">
                        <input name="cari" type="text" placeholder="Masukan ID..."
                            class="form-control p-0 border-0">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    Cari
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</div>
@endsection