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
                <form action="/updatetugas" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{Request::segment(2)}}">
                    <div class="card-body pt-2">
                        <div class="input-group input-group-static">
                            <label>Capaian</label>
                                <input type="text" class="form-control" placeholder="{{ ucfirst($jurnal->capaian) }}" disabled>
                        </div>
                        <div class="mt-4 input-group input-group-static">
                            <label>Sub Capaian</label>
                            <input type="text" class="form-control" placeholder="{{ ucfirst($jurnal->sub_capaian) }}" disabled>
                        </div>
                        <div class="mt-4 input-group input-group-static">
                            <label>Alat dan Bahan</label>
                            <input type="text" class="form-control" id="alat_bahan" name="alat_bahan"
                                onfocus="focused(this)" onfocusout="defocused(this)">
                        </div>

                        <label class="mt-4">Prosedur</label>
                        <textarea id="prosedur" name="prosedur"></textarea>
                        <script type="text/javascript" src="node_modules/froala-editor/js/froala_editor.pkgd.min.js">
                        </script>
                        <script>

                            var editor = new FroalaEditor('textarea#prosedur');

                        </script>



                        <div class="d-flex justify-content-end mt-4">
                            <a href="/home" type="button" name="button" class="btn btn-light m-0">Cancel</a>

                            <button type="submit" name="button" class="btn bg-gradient-dark m-0 ms-2 {{ ($jurnal->status=='request' ) ? 'disabled' : ''  }}">Selesai</button>
                        </div>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection
