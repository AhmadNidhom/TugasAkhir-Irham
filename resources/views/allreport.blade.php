@extends('layouts.appmain')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-header p-3 py-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons text-white opacity-10">
                                    account_circle
                                </i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Users Active</p>
                                <h4 class="mb-0">1,600</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than lask
                                week</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12 mb-4">
                    <div class="card">
                        <div class="card-header p-3 py-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons text-white opacity-10">
                                    pan_tool
                                </i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Semua Tugas</p>
                                <h4 class="mb-0">999</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+124% </span>than lask
                                week</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="card">
                        <div class="card-header p-3 py-2">
                            <div
                                class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons text-white opacity-10">
                                    shopping_basket
                                </i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Purchases</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+15% </span>than lask
                                week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12 mt-4 mt-lg-0">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Reviews</h6>
                </div>
                <div class="card-body pb-0 p-3">
                    <ul class="list-group">
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                            <div class="w-100">
                                <div class="d-flex mb-2">
                                    <span class="me-2 text-sm text-capitalize">Tuntas</span>
                                    <span class="ms-auto text-sm">80%</span>
                                </div>
                                <div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-gradient-info w-80" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="w-100">
                                <div class="d-flex mb-2">
                                    <span class="me-2 text-sm text-capitalize">Melewati Deadline</span>
                                    <span class="ms-auto text-sm">17%</span>
                                </div>
                                <div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-gradient-dark w-10" role="progressbar"
                                            aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                            <div class="w-100">
                                <div class="d-flex mb-2">
                                    <span class="me-2 text-sm text-capitalize">Terlewati</span>
                                    <span class="ms-auto text-sm">3%</span>
                                </div>
                                <div>
                                    <div class="progress progress-md">
                                        <div class="progress-bar bg-gradient-danger w-5" role="progressbar"
                                            aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="card-footer pt-0 p-3 d-flex align-items-center">
                    <div class="w-60">
                        <p class="text-sm mb-0">
                            More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b>
                            projects were created.
                        </p>
                    </div>
                    <div class="w-40 text-end">
                        <a class="btn bg-gradient-dark mb-0" href="javascript:;">View all reviews</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
