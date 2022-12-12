@extends('layouts.appmain')

@section('content')


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-9 col-12 mx-auto position-relative">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 me-3 float-start">
                        <i class="material-icons opacity-10">event</i>
                    </div>
                    <h6 class="mb-0">Lembar Tambah Kelompok</h6>
                </div>
                <form action="/insertkelompok" method="POST">
                    @csrf
                    <div class="card-body pt-2">
                        <div class="input-group input-group-static">
                            <label>Universitas</label>
                            <input type="text" class="form-control" id="univ" name="univ" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </div>
                        @error('univ')
                        <div class="mt-1">
                            <span class="text-danger text-sm">
                                {{ $message }}
                            </span>
                        </div>
                        @enderror

                        <div class="row">
                            <div class="col-4">
                                <div class="mt-4 input-group input-group-static">
                                    <label>Tahun Ajaran</label>
                                    <input type="text" class="form-control" id="tahun_ajaran" name="tahun_ajaran"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            @error('tahun_ajaran')
                            <div class="mt-1">
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                            </div>
                            @enderror

                            <div class="col-4">
                                <div class="mt-4 input-group input-group-static mb-4">
                                    <label>Mulai Tanggal</label>
                                    <input type="date" class="form-control" id="tgl_mulai" name="tgl_mulai"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            @error('tgl_mulai')
                            <div class="mt-1">
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                            </div>
                            @enderror

                            <div class="col-4">
                                <div class="mt-4 input-group input-group-static">
                                    <label>Berakhir Tanggal</label>
                                    <input type="date" class="form-control" id="tgl_berakhir" name="tgl_berakhir"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                </div>
                            </div>
                            @error('tgl_berakhir')
                            <div class="mt-1">
                                <span class="text-danger text-sm">
                                    {{ $message }}
                                </span>
                            </div>
                            @enderror
                        </div>
                        <div class="mt-3 input-group input-group-static">

                            <label for="select2Multiple">Mahasiswa</label>
                            <select class="form-control js-example-basic-multiple" name="addMoreInputFields[0][email]"
                                multiple="multiple">
                                @foreach ($users as $u)
                                <option value="{{ $u->email }}">{{ $u->name }}</option>
                                @endforeach
                            </select>

                            <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js">
                            </script>

                            <script>
                                $(document).ready(function () {
                                    $('.js-example-basic-multiple').select2();
                                });

                            </script>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <a href="/lapang" name="button" class="btn btn-light m-0">Cancel</a>
                            <button type="submit" name="button" class="btn bg-gradient-dark m-0 ms-2">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
