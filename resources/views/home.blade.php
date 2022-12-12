@extends('layouts.appmain')

@section('content')
<div class="container-fluid px-2 px-md-4">
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible text-white fade show" role="alert">
          {{ session('error') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endif
    <div class="card-body">
        <div class="panel-body">
          <a href="{{route('lapang')}}"></a>
        </div>
    </div>
    <div class="page-header min-height-300 border-radius-xl mt-4"
        style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
        <span class="mask  bg-gradient-primary  opacity-6"></span>
    </div>
    <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4">
            <div class="col-auto">
                <div class="avatar avatar-xl position-relative">
                    <img src="{{ asset('mod') }}/img/bruce-mars.jpg" alt="profile_image"
                        class="w-100 rounded-circle shadow-sm">
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100">
                    <h5 class="mb-1">
                        <?=strtoupper(auth::user()->name);?>
                    </h5>
                    <p class="mb-0 font-weight-normal text-sm">
                        <?=auth::user()->email ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="table-responsive">
                    <div
                        class="dataTable-wrapper dataTable-loading no-footer sortable searchable fixed-height fixed-columns">
                        <div class="dataTable-top">
                            <div class="dataTable-dropdown"><label><select class="dataTable-selector">
                                        <option value="5">5</option>
                                        <option value="10" selected="">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                    </select> entries per page</label></div>
                            <div class="dataTable-search"><input class="dataTable-input" placeholder="Search..."
                                    type="text"></div>
                        </div>
                        <div class="dataTable-container" style="height: 500.641px;">
                            <table class="table table-flush dataTable-table" id="datatable-search">
                                <thead class="thead-light">
                                    <tr>
                                        <th data-sortable="" style="width: 9.7137%;"><a href="#"
                                                class="text-dark dataTable-sorter">No</a></th>
                                        <th data-sortable="" style="width: 23.9533%;"><a href="#"
                                                class="text-dark dataTable-sorter">Capaian Pembelajaran</a></th>
                                        <th data-sortable="" style="width: 23.9533%;"><a href="#"
                                                class="text-dark dataTable-sorter">Sub Capaian Pembelajaran</a></th>
                                        <th data-sortable="" style="width: 18.8004%;" class="desc"><a href="#"
                                                class="text-dark dataTable-sorter">Batas Waktu</a></th>
                                        <th data-sortable="" style="width: 18.0555%;"><a href="#"
                                                class="text-dark dataTable-sorter">Status</a></th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($jurnal as $index=>$dt)
                                    <tr>
                                        <th class="text-center text-sm font-weight-normal">{{$index+1}}</th>
                                        <td class="text-sm font-weight-normal">{{ ucfirst($dt->capaian) }}
                                        </td>
                                        <td class="text-sm font-weight-normal">{{ ucfirst($dt->sub_capaian) }}</td>
                                        <td class="text-sm font-weight-normal">
                                            {{date(' d.m.y ',strtotime($dt->tgl_berakhir))}}</td>
                                        <td>
                                            <span class="badge-dot me-4">
                                                <i class="bg-info"></i>
                                                <span>{{ ucfirst($dt->status) }}</span>
                                            </span>
                                        </td>
                                        <td>
                                            <a href="/acctugas/{{ $dt->id }}"
                                                class="btn btn-sm bg-gradient-success mr-5 float-end {{ ($dt->status=='end' | $dt->status=='done' | $dt->status=='working')?'disabled' :'' }}">
                                                Go
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/tbhtugas/{{ $dt->id }}"
                                                class="btn btn-sm bg-gradient-primary mr-5 float-end {{ ($dt->status=='done' | $dt->status=='end')?'disabled' :'' }}">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="dataTable-bottom">
                            <div class="dataTable-info">Showing 1 to 10</div>
                            <nav class="dataTable-pagination">
                                <ul class="dataTable-pagination-list">
                                    <li class="pager"><a href="#" data-page="1">‹</a></li>
                                    <li class="active"><a href="#" data-page="1">1</a></li>
                                    <li class=""><a href="#" data-page="2">2</a></li>
                                    <li class=""><a href="#" data-page="3">3</a></li>
                                    <li class=""><a href="#" data-page="4">4</a></li>
                                    <li class=""><a href="#" data-page="5">5</a></li>
                                    <li class=""><a href="#" data-page="6">6</a></li>
                                    <li class="pager"><a href="#" data-page="2">›</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
