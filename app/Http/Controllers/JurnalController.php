<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurnal;
use App\Models\User;
use Auth;
use PDF;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class JurnalController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }


    public function index()
    {
        
        return view('jurnal');
    }

    public function asd($slug)
    {
        $selectdata = Jurnal::all()->where('id',$slug)->first();
        dd($selectdata);
    }
    public function insertjurnal(Request $request)
    {
        // dd($request->input('capaianPembelajaran'));

        $request->validate([
            'capaianPembelajaran'        => 'required',
            'datepicker'                 => 'required',
            'subCapaianPembelajaran'     => 'required',
            'alatdanBahan'               => 'required',
            'prosedur'                   => 'required',
        ]);

        Jurnal::create([
        'capaian' => $request->input('capaianPembelajaran'),
        'sub_capaian' => $request->input('subCapaianPembelajaran'),
        'alat_bahan' => $request->input('alatdanBahan'),
        'tanggal' => Carbon::now(),
        'prosedur' => $request->input('prosedur'),
        'id_user' => Auth::user()->id,
        ]);

                // dd('berhasil');
         
        
                $data["email"] = "ahmadnidhom13@gmail.com";
                $data["title"] = $request->input('subCapaianPembelajaran');
                $data["body"] = ucwords(auth::user()->name);
          
                Mail::send('isiemail', $data, function($message)use($data) {
                    $message->to($data["email"], $data["email"])
                            ->subject($data["title"]);
                });

                $jurnal = Jurnal::where('id_user','=',auth::user()->id)->orderBy('tanggal','DESC')->get();

                return view('home',compact('jurnal'));

    }

    public function addcoment(Request $request)
    {
        $jurnal = [
            'comment' => $request->input('comment')
        ];

        Jurnal::where('id', '=', auth::user()->id)->update($jurnal);
    }
}
