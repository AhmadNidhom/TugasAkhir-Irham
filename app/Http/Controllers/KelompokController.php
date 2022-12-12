<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;
use App\Models\User;
use App\Models\kelompok;

class KelompokController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        $jurnal = \DB::table('jurnal as a')->join('users as b','a.id_user','=','b.id')->orderBy('b.name','DESC')->get();
        return view('kelompok',compact('jurnal'));
    }
}
