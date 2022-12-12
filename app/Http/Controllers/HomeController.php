<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PKL;
use Auth;
use App\Models\Jurnal;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // dd(PKL::all());
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jurnal = Jurnal::where('id_user','=',auth::user()->id)->orderBy('tanggal','DESC')->get();

        if (!auth::user()->npm) {
            return redirect('/datadiri');
        }
        return view('home',compact('jurnal'));
        
        
    }
    
}
