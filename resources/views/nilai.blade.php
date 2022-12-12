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
                    <h6 class="mb-0">Lembar Tugas</h6>
                </div>
                <div class="card-body pt-2">
                    <div class="input-group input-group-static">
                        <label>Capaian</label>
                        <span class="form-control">{{ ucfirst($jurnal->capaian) }}</span>
                    </div>
                    <div class="mt-4 input-group input-group-static">
                        <label>Sub Capaian</label>
                        <span class="form-control">{{ ucfirst($jurnal->sub_capaian) }}</span>
                    </div>
                    <div class="mt-4 input-group input-group-static">
                        <label>Alat dan Bahan</label>
                        <span class="form-control">{{ ucfirst($jurnal->alat_bahan) }}</span>
                    </div>

                    <label class="mt-4">Prosedur</label>
                    <span class="form-control">{!! $jurnal->prosedur !!}</span>
                    <div class="d-flex justify-content-end mt-4">

                        <a href="/tugas/nilai/{{ $jurnal->id }}/2" class="btn btn-primary m-0">Re-Work</a>

                        <a href="/tugas/nilai/{{ $jurnal->id }}/1" type="submit" name="button"
                            class="btn bg-gradient-success m-0 ms-2">Approve</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
