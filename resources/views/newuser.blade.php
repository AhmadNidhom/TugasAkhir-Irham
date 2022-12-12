@extends('layouts.appmain')

@section('content')

<div class="container-fluid my-3 py-3">
    <div class="col-lg-9 mx-auto mt-lg-0 mt-4">
        <!-- Card Profile -->
        <div class="card card-body" id="profile">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-auto col-4">
                    <div class="avatar avatar-xl position-relative">
                        <img src="{{ asset('mod') }}/img/bruce-mars.jpg" alt="bruce"
                            class="w-100 rounded-circle shadow-sm">
                    </div>
                </div>
                <div class="col-sm-auto col-8 my-auto">
                    <div class="h-100">
                        <h5 class="mb-1 font-weight-bolder">
                            <?=strtoupper(auth::user()->name);?>
                        </h5>
                        <p class="mb-0 font-weight-normal text-sm">
                            <?=auth::user()->email ?>
                        </p>
                    </div>
                </div>
                <div class="col-sm-auto ms-sm-auto mt-sm-0 mt-3 d-flex">
                    <!-- <label class="form-check-label mb-0">
                        <small id="profileVisibility">
                            Switch to invisible
                        </small>
                    </label>
                    <div class="form-check form-switch ms-2 my-auto">
                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault23" checked
                            onchange="visible()">
                    </div> -->
                </div>
            </div>
        </div>
        <div class="card card-body mt-4 ms-0" id="profile">
            <div class="row justify-content-center align-items-center">
                <!-- Card Basic Info -->
                <div class="card-header">
                    <h5>Basic Info</h5>
                </div>

                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label for="perguruanTinggi">Perguruan Tinggi</label>
                                <input type="text" class="form-control" placeholder="{{ ucfirst($user->perguruan_tinggi) }}" disabled>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label for="npm">Nomor Pokok Mahasiswa</label>
                                <input type="text" class="form-control" placeholder="{{ ucfirst($user->npm) }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mt-4 ms-0">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" placeholder="{{ ucfirst($user->jurusan) }}" disabled>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mt-4 ms-0">
                                <label for="programStudi">Program Studi</label>
                                <input type="text" class="form-control" placeholder="{{ ucfirst($user->program_studi) }}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="semester">Semester</label>
                                <input type="text" class="form-control" placeholder="{{ ucfirst($user->semester) }}" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="card card-body mt-4 ms-0" id="profile">
            <div class="row justify-content-center align-items-center">
                <div class="card-header">
                    <h5>Biodata Pembimbing Lapang</h5>
                </div>
                <div class="card-body pt-0">
                    @foreach($data as $a)
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label for="namaLengkapPembimbingLapang" name="namaLengkapPembimbingLapang"
                                    required="required">Nama Lengkap</label>
                                <input type="text" class="form-control" placeholder="{{ ucfirst($a->nama) }}" disabled>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static">

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="pendidikanPembimbingLapang" name="pendidikanPembimbingLapang"
                                    required="required">Pendidikan</label>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="jabatan" name="jabatan" required="required">Jabatan</label>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="card-header">
                    <h5>Gambaran Umum Perusahaan</h5>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label for="namaPerusahaan" name="namaPerusahaan" required="required">Nama
                                    Perusahaan</label>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static">
                                <label for="tanggalPendirian" name="tanggalPendirian" required="required">Tanggal
                                    Pendirian</label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="pimpinan" name="pimpinan" required="required">Pimpinan</label>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="namaPimpinan" name="namaPimpinan" required="required">Nama
                                    Pimpinan</label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="alamat" name="alamat" required="required">Alamat</label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="bidangUsaha" name="bidangUsaha" required="required">Bidang
                                    Usaha</label>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="jumlahKaryawan" name="jumlahKaryawan" required="required">Jumlah
                                    Karyawan</label>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="input-group input-group-static mt-3 ms-0">
                                <label for="assesibilitas" name="assesibilitas"
                                    required="required">Assesibilitas</label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}


        {{-- <div class="card mt-4" id="delete">
            <div class="card-body">
                <div class="d-flex align-items-center mb-sm-0 mb-4">
                    <div class="w-50">
                        <h5>Delete Account</h5>
                        <p class="text-sm mb-0">Once you delete your account, there is no going back. Please be
                            certain.
                        </p>
                    </div>
                    <div class="w-50 text-end">
                        <button class="btn btn-outline-secondary mb-3 mb-md-0 ms-auto" type="button"
                            name="button">Deactivate</button>
                        <button class="btn bg-gradient-danger mb-0 ms-2" type="button" name="button">Delete
                            Account</button>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- Card Delete Account -->
</div>



@endsection
