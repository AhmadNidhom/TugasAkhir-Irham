<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PKL;
use Auth;
use App\Models\Jurnal;
use App\Models\Kelompok;
use App\Models\User;
use App\Models\Tugas;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LapangController extends Controller
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
        
        $data = [
            'kelompok' => Kelompok::all(),
        ];

        // $mahasiswa = User::where('id','=',auth::user()->id)->orderBy('name','DESC')->get();
        // $jurnal = Jurnal::orderBy('tanggal','DESC')->get();
        // $jurnal = DB::table('kelompok as a')->join('users as b','a.id_user','=','b.id')->orderBy('b.name','DESC')->get();
        return view('lapang', $data);
    }

    public function tbhkelompok()
    {
        $data = [
            'users' => user::all(),
        ];

        return view('tbhkelompok', $data);
    }

    public function tambahkelompok(Request $request)
    {
        $request->validate([
            'univ'            => 'required',
            'tahun_ajaran'    => 'required',
            'tgl_mulai'       => 'required',
            'tgl_berakhir'    => 'required',
            'addMoreInputFields.*.email' => 'exists:users,email'
        ]);

            $arr  = $request->addMoreInputFields;

            // dd($request->input());
            

            $kelompok = [];

            for ($i = 1; $i <= count($arr); $i++) {
                $users = DB::table('users')
                    ->where('email', '=', $arr[$i - 1]['email'])
                    ->first();

                // dd($users);

                array_push($kelompok, $users->id);
            }

            // dd($users);

            $k = serialize($kelompok);
            // $unser = unserialize($team);

            Kelompok::create([
            'tahun_ajaran' => $request->input('tahun_ajaran'),
            'univ' => $request->input('univ'),
            'tgl_mulai' => $request->input('tgl_mulai'),
            'tgl_berakhir' => $request->input('tgl_berakhir'),
            'users' => $k,
            ]);

        return redirect('/lapang');
    }

    public function mskklmpk($kluniv)
    {
        $data = [
            'kelompok' => kelompok::all()->where('id', $kluniv)->first(),
        ];
        return view('kelompok', $data);
    }

    public function tugas($klmhs)
    {
        $data = [
            'jurnal' => jurnal::all()->where('id_user', $klmhs),
            'user'  => user::all()->where('id', $klmhs)->first(),
        ];

        return view('tugas', $data);
    }

    public function tbhjurnal($idkl)
    {
        $kel = Kelompok::all()->where('id', $idkl)->first();
        $uk = unserialize($kel->users);

        $data = [
            'users' => DB::table('users')->whereIn('id', $uk)->get(),
        ];

        return view('jurnal', $data);
    }

    public function insertjurnal(Request $request)
    {
        $request->validate([
            'capaian'               => 'required',
            'sub_capaian'           => 'required',
            'tgl_berakhir'          => 'required',
            'user'                  => 'required',
        ]);

        for ($i=0; $i < count($request->input('user')); $i++) { 
            Jurnal::create([
                'capaian'     => $request->input('capaian'),
                'sub_capaian' => $request->input('sub_capaian'),
                'alat_bahan'  => null,
                'tanggal'     => date('Y-m-d'),
                'tgl_berakhir'=> $request->input('tgl_berakhir'),
                'prosedur'    => null,
                'id_user'     => $request->input('user')[$i],
                'status'      => 'Request'
                ]);
        }
        return redirect('/lapang/kelompok/' . $request->input('idkel'));

    }

    public function tbhtugas($tbhtugas)
    {
        $data = [
            'jurnal' => jurnal::all()->where('id',$tbhtugas)->first(),
        ];
        
        return view('tbhtugas', $data);
    }

    public function acctugas($id)
    {
        $jurnal = [
            'status' => 'working',
        ];
        Jurnal::where('id', '=', $id)->update($jurnal);
        return redirect('/home');
    }
    

    public function updatetugas(Request $request)
    {
        $jurnal = [
            'alat_bahan' => $request->input('alat_bahan'),
            'prosedur' => $request->input('prosedur'),
            'status' => 'done',
        ];        
        
        Jurnal::where('id', '=', $request->input('id'))->update($jurnal);
        return redirect('/home');
    }

    public function nilai($tgs)
    {
        $data = [
            'jurnal' => jurnal::all()->where('id', $tgs)->first(),            
        ];
        return view('nilai', $data);
    }

    public function updatenilai($tugas, $status)
    {
        $t = Jurnal::all()->where('id', $tugas)->first();
        $diff = abs(strtotime($t['tgl_berakhir']) - strtotime($t['updated_at']));

        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
       
        if ($status == 1) {
            if ($days<1) {
                $nilai = 50;
            } else {
                $nilai = 100;
            }
            Jurnal::where('id', '=', $tugas)->update(
                [
                    'status' => 'end',
                    'nilai'  => $nilai
                ]
            );
        } else if ($status == 2) {
            Jurnal::where('id', '=', $tugas)->update(['status' => 'working']);
        }
        return redirect('/kelompok/tugas/'.$tugas);

    }

    public function report()
    {
        $jurnal = Jurnal::where('id_user','=',auth::user()->id)->orderBy('tanggal','DESC')->get();
        $nilai = Jurnal::where('nilai','=',auth::user()->id)->orderBy('tanggal','DESC')->get();
        $user = User::all()->where('id')->first();

   return view('myreport', ['user' => $user],compact('jurnal'),compact('nilai') );
    }
}
