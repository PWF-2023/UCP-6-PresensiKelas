<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
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
}
