<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\User;

class PresensiController extends Controller
{
    public function index()
    {
        // $users = User::with('presensi')->get();

        // $presensis = Presensi::join('users', 'presensis.user_id', '=', 'users.id')
        //     ->with('matkul','kelas')
        //     ->select('presensis.*')
        //     ->get();
        $presensis = Presensi::with('user', 'matkul', 'kelas')->get();
        // dd($presensis->toArray());
        return view('presensi.index', compact('presensis'));
    }

    public function create()
    {
        return view('presensi.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required',
            'pertemuan' => 'required',
            'matkul' => 'required',
            'kelas' => 'required',
            'action' => 'required'
        ]);

        $presensi = new Presensi();
        $presensi->nama = $request->nama;
        $presensi->keterangan = $request->keterangan;
        $presensi->pertemuan = $request->pertemuan;
        $presensi->matkul = $request->matkul;
        $presensi->kelas = $request->kelas;
        $presensi->action = $request->action;
        $presensi->save();

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $presensi = Presensi::find($id);
        return view('presensi.edit', compact('presensi'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'keterangan' => 'required',
            'pertemuan' => 'required',
            'matkul' => 'required',
            'kelas' => 'required',
            'action' => 'required'
        ]);

        $presensi = Presensi::find($id);
        $presensi->nama = $request->nama;
        $presensi->keterangan = $request->keterangan;
        $presensi->pertemuan = $request->pertemuan;
        $presensi->matkul = $request->matkul;
        $presensi->kelas = $request->kelas;
        $presensi->action = $request->action;
        $presensi->save();

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $presensi = Presensi::find($id);
        $presensi->delete();

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil dihapus');
    }
}
