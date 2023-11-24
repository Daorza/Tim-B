<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obat;

class ObatController extends Controller
{

    public function index()
    {
        $obats = Obat::all();
        return view('obat.index', ['obats' =>$obats]);
    }


    public function create()
    {
        return view('obat.create');
    }


    public function store(Request $request)
    {
        $obat = new Obat;
        $obat->nama_obat = $request->nama_obat;
        $obat->harga = $request->harga;
        $obat->stok = $request->stok;
        $obat->save();

        return redirect()->route('obat.index')->with('success', 'Data Obat Berhasil Ditambahkan.');
    }


    public function show($id)
    {
        $obat = Obat::find($id);
        return view('obat.show', compact('obat'));
    }


    public function edit($id)
    {
        $obat = Obat::find($id);
        return view('obat.edit', ['obat' => $obat]);
    }


    public function update(Request $request, $id)
    {
        $obat = Obat::find($id);
        $obat->nama_obat = $request->nama_obat;
        $obat->harga = $request->harga;
        $obat->stok = $request->stok;
        $obat->save();

        $obat = Obat::find($id);
        $obat->update($request->all());
        return redirect()->route('obat.index')->with('success', 'Data Obat Berhasil Diperbaharui.');
    }


    public function destroy($id)
    {
        $obat = Obat::find($id)->delete();
        return redirect()->route('obat.index')->with('successs', 'Data Obat Berhasil Dihapus.');
    }
}
