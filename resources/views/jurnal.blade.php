@extends('layouts.appmain')

@section('content')
<div class="container-fluid py-4">
    <div class="row mt-4">
        <div class="col-lg-9 col-12 mx-auto position-relative">
            <div class="card">
                <div class="card-header p-3 pt-2">
                    <div
                        class="icon icon-lg icon-shape bg-gradient-dark shadow text-center border-radius-xl mt-n4 me-3 float-start">
                        <i class="material-icons opacity-10">event</i>
                    </div>
                    <h6 class="mb-0">Lembar Tambah Tugas</h6>
                </div>
                <form action="/insertJurnal" method="POST">
                    @csrf
                    <input type="hidden" name="idkel" value="{{ Request::segment(2) }}">
                    <div class="card-body pt-2">
                        <div class="input-group input-group-static">
                            <label>Capaian Pembelajaran</label>
                            <input type="text" class="form-control" id="capaian" name="capaian" onfocus="focused(this)"
                                onfocusout="defocused(this)">
                        </div>
                        <div class="mt-4 input-group input-group-static">
                            <label>Sub Capaian Pembelajaran</label>
                            <input type="text" class="form-control" id="sub_capaian" name="sub_capaian"
                                onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>

                        <div class="row">
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
                        <label class="mt-4 form-label">Mahasiswa</label>
                        <select class="form-control js-example-basic-multiple" name="user[]" multiple="multiple">
                            @foreach ($users as $u)
                            <option value="{{ $u->id }}">{{ $u->name }}</option>
                            @endforeach
                        </select>
                        <script>
                            $(document).ready(function () {
                                $('.js-example-basic-multiple').select2();
                            });

                        </script>
                        <div class="d-flex justify-content-end mt-4">
                            <a href="#" class="btn btn-light m-0">Cancel</a>
                            <button type="submit" name="button" class="btn bg-gradient-dark m-0 ms-2">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
