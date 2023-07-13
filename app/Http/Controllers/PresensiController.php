<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresensiController extends Controller
{
    //index , create, store , edit , update, destroy
    public function index()
    {
        return view('presensi.index');
    }

}
