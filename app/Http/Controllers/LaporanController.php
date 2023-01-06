<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class LaporanController extends Controller
{
    public function index(){
        $pesananSelesai = Pesanan::where('status','selesai')->get();
        $pesananPending = Pesanan::where('status','pending')->get();

        return view('laporan.index', compact('pesananSelesai','pesananPending'));
    }
}
