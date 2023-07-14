<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
<<<<<<< HEAD
        return view('kelas.index');
=======
        $kelas = Kelas::all();
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ruangan' => 'required',
            'kapasitas' => 'required|numeric|min:1'
        ]);

        Kelas::create([
            'nama' => $request->nama,
            'ruangan' => $request->ruangan,
            'kapasitas' => $request->kapasitas
        ]);

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kelas = Kelas::find($id);
        return view('kelas.edit', compact('kelas'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'ruangan' => 'required',
            'kapasitas' => 'required|numeric|min:1'
        ]);

        $kelas = Kelas::find($id);
        $kelas->nama = $request->nama;
        $kelas->ruangan = $request->ruangan;
        $kelas->kapasitas = $request->kapasitas;
        $kelas->save();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Kelas berhasil dihapus');
>>>>>>> 2a3dfa1fb690c7bc2aa7634274e17aed5ee47262
    }
}
