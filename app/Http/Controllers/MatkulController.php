<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
        return view('matkul.index');
    }
    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request,Matkul $matkul)
    {
        return redirect()->route('matkul.index')->with('success','Todo created successfully!');
    }


    public function edit($id)
    {
        $matkul = Matkul::find($id);
        return view('matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kode' => 'required|unique:matkuls,kode,' . $id,
            'sks' => 'required|numeric|min:1'
        ]);

        $matkul = Matkul::find($id);
        $matkul->nama = $request->nama;
        $matkul->kode = $request->kode;
        $matkul->sks = $request->sks;
        $matkul->save();

        return redirect()->route('matkul.index')->with('success', 'Mata kuliah berhasil diperbarui');
    }

    public function destroy($id)
    {
        $matkul = Matkul::find($id);
        $matkul->delete();

        return redirect()->route('matkul.index')->with('success', 'Mata kuliah berhasil dihapus');
    }
}
