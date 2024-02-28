<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sampah;
use Illuminate\Support\Facades\Auth;

class SampahController extends Controller
{
    public function index(){
        return view('sampah.index');
    }

    public function show(){
        return view('sampah.detail');
    }

    public function create(){
        return view('sampah.create');
    }

    public function edit(){
        return view('sampah.edit');
    }

    public function store() {
        #TODO: Validate input
        $user_id = Auth::id();
        $nama = request()->input('nama');
        $kategori = request()->input('kategori');
        $berat = request()->input('berat');

        $sampah = Sampah::create(
            [
                'user_id' => $user_id,
                'nama' => $nama,
                'kategori' => $kategori,
                'berat' => $berat,
            ]
        );
        return redirect()->route('sampah.index');
    }

    public function update($id){
        #TODO: Validate input
        $nama = request()->input('nama');
        $kategori = request()->input('kategori');
        $berat = request()->input('berat');
        $sampah = Sampah::find($id);
        $sampah->update(
            [
                'nama' => $nama,
                'kategori' => $kategori,
                'berat' => $berat,
            ]
        );
        return redirect()->route('sampah.index');
    }

    public function destroy($id){
        $sampah = Sampah::find($id);
        $sampah->delete();
        return redirect()->route('sampah.index');
    }
}
