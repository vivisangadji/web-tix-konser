<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pesanan;
use App\Models\Tiket;
use PDF;

class PesanTiketController extends Controller
{
    public function index(){
        $tiket = Tiket::all();
        return view('pesan_tiket', compact('tiket'));
    }

    public function store(Request $request){
        $randomid = mt_rand(100000,999999); 

        $validator = Validator::make($request->all(), [ 
            'nama_pemesan' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'nama_tiket' => 'required',
            'alamat' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('pesan-tiket')
            ->withErrors($validator)
            ->withInput();
        }

        $data = Pesanan::create([
            'id_uniq' => $randomid.'_ID', 
            'nama_tiket' => $request->nama_tiket, 
            'nama_pemesan' => $request->nama_pemesan, 
            'email' => $request->email, 
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        $pdf = PDF::loadView('cetak-ticket', ['tiket' => $data]);
        return $pdf->stream('ticket.pdf');
    }

}
