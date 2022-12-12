@extends('layouts.appmain')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="multisteps-form mb-9">

                <div class="row">
                    <div class="col-12 col-lg-8 mx-auto my-5">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-8 m-auto">
                        <div class="card">
                            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                    <div class="multisteps-form__progress">
                                        <button class="multisteps-form__progress-btn js-active" type="button"
                                            title="Data Diri">
                                            <span>Data Diri</span>
                                        </button>
                                        <button class="multisteps-form__progress-btn" type="button"
                                            title="Pembimbing Lapang">Dosen Pembimbing</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form class="multisteps-form__form" style="height: 281px;" action="/insertBiodata"
                                    method="POST">
                                    @csrf
                                    <div class="multisteps-form__panel border-radius-xl bg-white js-active"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bolder mb-0">Data Diri</h5>
                                        <p class="mb-0 text-sm">Informasi wajib mahasiswa</p>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <div class="input-group input-group-static">
                                                        <label for="perguruanTinggi">Perguruan Tinggi</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="perguruanTinggi" required="required"
                                                            onfocus="focused(this)" onfocusout="defocused(this)">
                                                        @error('perguruanTinggi')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <div class="input-group input-group-static">
                                                        <label for="npm">Nomor Pokok Mahasiswa</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="npm" required="required" onfocus="focused(this)"
                                                            onfocusout="defocused(this)">
                                                        @error('npm')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <div class="input-group input-group-static">
                                                        <label for="jurusan">Jurusan</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="jurusan" required="required" onfocus="focused(this)"
                                                            onfocusout="defocused(this)">
                                                        @error('jurusan')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <div class="input-group input-group-static">
                                                        <label for="programStudi">Program Studi</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="programStudi" required="required"
                                                            onfocus="focused(this)" onfocusout="defocused(this)">
                                                        @error('programStudi')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <div class="input-group input-group-static">
                                                        <label for="semester">Semester</label>
                                                        <select class="form-control" name="semester"
                                                            required="required">
                                                            <option disabled selected>--Pilih--</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                            <option>6</option>
                                                            <option>7</option>
                                                        </select>
                                                        @error('semester')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next"
                                                    type="button" title="Next">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="multisteps-form__panel border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <h5 class="font-weight-bolder mb-0">Data Diri</h5>
                                        <p class="mb-0 text-sm">Informasi wajib mahasiswa</p>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <div class="input-group input-group-static">
                                                        <label for="namaLengkapDosenPembimbing">Nama Lengkap</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="namaLengkapDosenPembimbing" required="required"
                                                            onfocus="focused(this)" onfocusout="defocused(this)">
                                                        @error('namaLengkapDosenPembimbing')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <div class="input-group input-group-static">
                                                        <label for="emailDosenPembimbing">Email Dosen</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="emailDosenPembimbing" required="required" onfocus="focused(this)"
                                                            onfocusout="defocused(this)">
                                                        @error('emailDosenPembimbing')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 col-sm-6">
                                                    <div class="input-group input-group-static">
                                                        <label for="pendidikanDosenPembimbing">Pendidikan</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="pendidikanDosenPembimbing" required="required" onfocus="focused(this)"
                                                            onfocusout="defocused(this)">
                                                        @error('pendidikanDosenPembimbing')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                                                    <div class="input-group input-group-static">
                                                        <label for="nip">NIP</label>
                                                        <input class="multisteps-form__input form-control" type="text"
                                                            name="nip" required="required"
                                                            onfocus="focused(this)" onfocusout="defocused(this)">
                                                        @error('nip')
                                                        <div class="mt-1">
                                                            <span class="text-danger text-sm">
                                                                {{ $message }}
                                                            </span>
                                                        </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="btn bg-gradient-dark ms-auto mb-0" type="submit"
                                                    title="Send">Send</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
