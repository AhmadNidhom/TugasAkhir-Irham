<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata_dosen;
use App\Models\Biodata_lapang;
use App\Models\Perusahaan;
use App\Models\User;
use Auth;


class NewuserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        // $data['user'] = User::all()->where('id', Auth::user()->id)->first();
        $data = \DB::table('users')->where('id',Auth::user()->id)->first();
        // $data2 = \DB::table('biodata_lapang')->where('id',Auth::user()->id)->first();
        // $data3 = \DB::table('perusahaan')->where('id',Auth::user()->id)->first();

        // $data['pembimbingLapang'] = Biodata_lapang::all()->where('id', Auth::user()->id)->first();
        // $data['dosenPembimbing'] = Biodata_dosen::all()->where('id', Auth::user()->id)->first();

        // if ($data['user']->semester) {
        //     return view('myprofile', $data);
        // } else {
        //     return view('newuser', $data);
        // }
            // return view('newuser', $data);
            return view('datadiri',compact('data'));
    }
    public function insertbiodata(Request $request)
    {

        // dd($request->input());

        $request->validate([
            // Mahasiswa
            'perguruanTinggi'        => 'required',
            'npm'                    => 'required',
            'jurusan'                => 'required',
            'programStudi'           => 'required',
            'semester'               => 'required',            

            // Dosen Pembimbing
            'namaLengkapDosenPembimbing'    => 'required',
            'emailDosenPembimbing'          => 'required',
            'pendidikanDosenPembimbing'     => 'required',
            'nip'                           => 'required',

            // Pembimbing Lapang
            // 'namaLengkapPembimbingLapang'   => 'required',
            // 'pendidikanPembimbingLapang'    => 'required',
            // 'emailPembimbingLapang'         => 'required',
            // 'jabatanPembimbingLapang'       => 'required',

            // Perusahaan
            // 'namaPerusahaan'         => 'required',
            // 'tanggalPendirian'       => 'required',
            // 'pimpinan'               => 'required',
            // 'namaPimpinan'           => 'required',
            // 'alamat'                 => 'required',
            // 'bidangUsaha'            => 'required',
            // 'jumlahKaryawan'         => 'required',
            // 'assesibilitas'          => 'required',
        ]);

        $user = [
        'perguruan_tinggi' => $request->input('perguruanTinggi'),
        'npm'              => $request->input('npm'),
        'jurusan'          => $request->input('jurusan'),
        'program_studi'    => $request->input('programStudi'),
        'semester'         => $request->input('semester')
        ];
        User::where('id', '=', auth::user()->id)->update($user);

        Biodata_dosen::create([
            'nama' => $request->input('namaLengkapDosenPembimbing'),
            'email' => $request->input('emailDosenPembimbing'),
            'pendidikan' => $request->input('pendidikanDosenPembimbing'),
            'NIP' => $request->input('nip')
            ]);

        // Biodata_lapang::create([
        //     'nama'          => $request->input('namaLengkapPembimbingLapang'),
        //     'pendidikan'    => $request->input('pendidikanPembimbingLapang'),
        //     'email'         => $request->input('emailPembimbingLapang'),
        //     'jabatan'       => $request->input('jabatanPembimbingLapang')
        //     ]);

        // Perusahaan::create([
        //     'nama_perusahaan' => $request->input('namaPerusahaan'),
        //     'tanggal_pendirian' => $request->input('tanggalPendirian'),
        //     'pimpinan' => $request->input('pimpinan'),
        //     'nama_pimpinan' => $request->input('namaPimpinan'),
        //     'alamat' => $request->input('alamat'),
        //     'bidang_usaha' => $request->input('bidangUsaha'),
        //     'jumlah_karyawan' => $request->input('jumlahKaryawan'),
        //     'assesibilitas' => $request->input('assesibilitas')
        //     ]);

            return redirect('/home');
    }

    public function biodata()
    {
        $user = \DB::table('users')->where('id',Auth::user()->id)->first();
        // $data = \DB::table('biodata_lapang')->where('id',Auth::user()->id)->first();
        // $data3 = \DB::table('perusahaan')->where('id',Auth::user()->id)->first();
        return view('newuser',compact('user'));
    }
}
