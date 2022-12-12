<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TbhkelompokController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }
    
    public function index()
    {
        
        return view('tbhkelompok');
    }

    public function tambahkelompok(Request $request)
    {
         dd($request->all());

        $request->validate([
            'univ'                                  => 'required',
            'tahun_ajaran'                          => 'required',
            'addMoreInputFields[0][email]'          => 'required',
        ]);

        Kelompok::create([
        'tahun_ajaran' => $request->input('tahun_ajaran'),
        'univ' => $request->input('univ'),
        'users' => $request->input('users'),
        ]);
    }
}
