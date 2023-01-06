<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class CheckInController extends Controller
{
    public function index(){
        return view('check.index');
    }

    public function check(Request $request){
        $data = Pesanan::where([['id_uniq','=' ,$request->cari], ['status', '=', 'pending']])->first();
        return view('check.tampil', compact('data'));
    }

    public function update($id){
        $data = Pesanan::FindOrFail($id);

        $data->update([
            'status' => 'selesai',
        ]);

        return redirect()->route('check')
                ->with(['success' => 'Update status berhasil']);
    }
}
