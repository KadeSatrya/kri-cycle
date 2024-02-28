<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kerajinan;
use Illuminate\Support\Facades\Auth;

class KerajinanController extends Controller
{
    public function index(){
        return view('kerajinanIndex');
    }

    public function show(){
        return view('kerajinanDetail');
    }

    public function create(){
        return view('kerajinanCreate');
    }

    public function edit(){
        return view('kerajinanEdit');
    }

    public function store() {
        #TODO: Validate input
        $user_id = Auth::id();
        $nama = request()->input('nama');
        $stock = request()->input('stock');
        $harga = request()->input('harga');

        $kerajinan = Kerajinan::create(
            [
                'user_id' => $user_id,
                'nama' => $nama,
                'stock' => $stock,
                'harga' => $harga,
            ]
        );
        return redirect()->route('kerajinan.index');
    }

    public function update($id){
        #TODO: Validate input
        $nama = request()->input('nama');
        $stock = request()->input('stock');
        $harga = request()->input('harga');
        $kerajinan = Kerajinan::find($id);
        $kerajinan->update(
            [
                'nama' => $nama,
                'stock' => $stock,
                'harga' => $harga,
            ]
        );
        return redirect()->route('kerajinan.index');
    }

    public function destroy($id){
        $kerajinan = Kerajinan::find($id);
        $kerajinan->delete();
        return redirect()->route('kerajinan.index');
    }
}
