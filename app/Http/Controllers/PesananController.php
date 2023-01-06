<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pesanan;
use App\Models\Tiket;

class PesananController extends Controller
{

    public function index()
    {
        $pesanan = Pesanan::all();
        return view('pesanan.index', compact('pesanan'));
    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = Pesanan::FindOrFail($id);
        $tiket = Tiket::all();
        return view('pesanan.edit', compact('data','tiket'));
    }

    public function update(Request $request, $id)
    {
        $data = Pesanan::FindOrFail($id);
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

        $data->update([
            'nama_tiket' => $request->nama_tiket, 
            'nama_pemesan' => $request->nama_pemesan, 
            'email' => $request->email, 
            'no_telp' => $request->no_telp,
            'alamat' => $request->alamat
        ]);

        return redirect()->route('pesanan.index')->with(['success' => 'Edit data berhasil']);
    }

    public function destroy($id)
    {
        Pesanan::where('id',$id)->delete();
        return redirect()->route('pesanan.index')->with(['success' => 'Hapus data berhasil']);
    }
}
