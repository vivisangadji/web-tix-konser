<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tiket;

class TiketController extends Controller
{

    public function index()
    {
        $tiket = Tiket::all();
        return view('tiket.index', compact('tiket'));
    }

    public function create()
    {
        return view('tiket.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [ 
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'tanggal_konser' => 'required',
            'jam' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('tiket/create')
            ->withErrors($validator)
            ->withInput();
        }

        Tiket::create([
            'nama_tiket' => $request->nama_tiket, 
            'harga_tiket' => $request->harga_tiket, 
            'tanggal_konser' => $request->tanggal_konser, 
            'jam' => $request->jam
        ]);

        return redirect()->route('tiket.index')
                ->with(['success' => 'Data tiket berhasil ditambah']);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $tiket = Tiket::FindOrFail($id);
        return view('tiket.edit', compact('tiket'));
    }

    public function update(Request $request, $id)
    {
        $tiket = Tiket::FindOrFail($id);
        $validator = Validator::make($request->all(), [ 
            'nama_tiket' => 'required',
            'harga_tiket' => 'required',
            'tanggal_konser' => 'required',
            'jam' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('tiket/create')
            ->withErrors($validator)
            ->withInput();
        }

        $tiket->update([
            'nama_tiket' => $request->nama_tiket, 
            'harga_tiket' => $request->harga_tiket, 
            'tanggal_konser' => $request->tanggal_konser, 
            'jam' => $request->jam
        ]);

        return redirect()->route('tiket.index')
                ->with(['success' => 'Edit data tiket berhasil']);
    }

    public function destroy($id)
    {
        Tiket::where('id', $id)->delete();
        return redirect()->route('tiket.index')->with(['success' => 'Berhasil menghapus tiket!']);
    }
}
