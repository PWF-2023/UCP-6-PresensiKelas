<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matkul;

class MatkulController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('matkul.index');
    }
    // public function create()
    // {

    //     return view('matkul.create');
    // }
    // public function store(Request $request,Matkul $matkul)
    // {


    //     return redirect()->route('matkul.index')->with('success','Todo created successfully!');
    // }
=======
        $matkuls = Matkul::all();
        return view('matkul.index', compact('matkuls'));
    }

    public function create()
    {
        return view('matkul.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'kode' => 'required|unique:matkuls',
            'sks' => 'required|numeric|min:1'
        ]);

        Matkul::create([
            'nama' => $request->nama,
            'kode' => $request->kode,
            'sks' => $request->sks
        ]);

        return redirect()->route('matkul.index')->with('success', 'Mata kuliah berhasil ditambahkan');
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
>>>>>>> 2a3dfa1fb690c7bc2aa7634274e17aed5ee47262
}
