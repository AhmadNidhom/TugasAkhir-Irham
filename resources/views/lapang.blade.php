@extends('layouts.appmain')

@section('content')
<div class="container-fluid px-2 px-md-4">
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
            <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                <form action="/tbhkelompok">
                    <button type="submit" class="btn btn-sm bg-gradient-primary mr-5 float-end">
                        <a class="material-icons text-white pe-2">add</a>Tambah Kelompok
                    </button>
                </form>
            </div>
        </div>
        <section class="py-3 mt-5">
            <div class="row mt-lg-4 mt-2">
                @foreach ($kelompok as $k)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="d-flex mt-n2">
                                <div class="avatar avatar-xl bg-gradient-dark border-radius-xl p-2 mt-n4">
                                    <strong>PKL</strong>
                                </div>
                                <div class="ms-3 my-auto">
                                    <a href="/lapang/kelompok/{{ $k->id }}" class="h6">{{ ucwords($k->univ) }}</a>
                                    <p class="text-secondary text-sm  mb-0">Tahun Ajaran 
                                        {{ $k->tahun_ajaran }}</p>
                                    {{-- <div class="avatar-group">
                                        <a href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                            title="" data-bs-original-title="test name">
                                            <div class="avatar avatar-xs me-2 bg-gradient-dark">
                                                <span class="text-xs">N</span>
                                            </div>
                                        </a>
                                    </div> --}}
                                </div>
                                <div class="ms-auto">
                                    <div class="dropdown">
                                        <button class="btn btn-link text-secondary ps-0 pe-2"
                                            id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <i class="fa fa-ellipsis-v text-lg" aria-hidden="true"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end me-sm-n4 me-n3"
                                            aria-labelledby="navbarDropdownMenuLink" style="">
                                            <a class="dropdown-item" href="javascript:;">Edit</a>
                                            <a class="dropdown-item" href="javascript:;">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <div class="row">
                                <div class="col-6">
                                    <h6 class="text-sm mb-0">{{ (is_array(unserialize($k->users))) ? count(unserialize($k->users)) : '' }} Participants</h6>
                                </div>
                                <div class="col-6 text-end">
                                    <h6 class="text-sm mb-0">{{date(' d.m ',strtotime($k->tgl_berakhir))}}</h6>
                                    <p class="text-secondary text-sm font-weight-normal mb-0">Due date</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        {{-- <div class="row">
            <div class="col-12 col-lg-8">
                <hr class="dark horizontal">
                <div class="card-body">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Capaian Pembelajaran</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jurnal as $index=>$dt)
                            <tr>
                                <th>{{$index+1}}</th>
        <td>{{$dt->capaian}}</td>
        <td>{{date(' d M Y',strtotime($dt->tanggal))}}</td>
        <td>Approve</td>
        </tr>
        @endforeach
        </tbody>
        </table>
        @foreach ($posts as $jurnal)
        @if ($jurnal->user->id == Auth::user()->id)
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-2xl">{{ $jurnal->title }}</h1>
            <p>by {{ $jurnal->user->name }}</p>
        </div>
        @endif
        @endforeach
    </div>
</div> --}}
</div>
</div>
@endsection
