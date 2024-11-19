@extends('layout.master')
@section('title', 'Touch Spin')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Touchspin</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Touchspin</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Touchspin start -->
        <div class="row main-touchspin">
            <!-- touchspin 1 -->
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Touchspin</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-2">
                                <div class="simplespin">
                                    <button class="circle-btn btn-light-primary decrement">-</button>
                                    <input type="text" class="app-small-touchspin count" value="25">
                                    <button class="circle-btn btn-light-primary increment">+</button>
                                </div>
                            </div>
                            <div class="col mt-2">
                                <div class="simplespin">
                                    <button class="circle-btn btn-light-secondary decrement">-</button>
                                    <input type="text" class="app-small-touchspin count" value="25">
                                    <button class="circle-btn btn-light-secondary increment">+</button>
                                </div>
                            </div>
                            <div class="col mt-2">
                                <div class="simplespin">
                                    <button class="circle-btn btn-light-success decrement">-</button>
                                    <input type="text" class="app-small-touchspin count" value="25">
                                    <button class="circle-btn btn-light-success increment">+</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-3">
                <div class="card equal-card ">
                    <div class="card-header">
                        <h5>Basic Touchspin</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="simplespin">
                                    <a role="button" class="circle-btn decrement">-</a>
                                    <input type="text" class="app-small-touchspin count" value="25">
                                    <a role="button" class="circle-btn increment">+</a>
                                </div>
                            </div>
                            <div class="col mt-2">
                                <div class="simplespin">
                                    <a role="button" class="circle-btn decrement">-</a>
                                    <input type="text" class="app-small-touchspin count" value="25">
                                    <a role="button" class="circle-btn increment">+</a>
                                </div>
                            </div>
                            <div class="col mt-2">
                                <div class="simplespin">
                                    <a role="button" class="circle-btn decrement">-</a>
                                    <input type="text" class="app-small-touchspin count" value="25">
                                    <a role="button" class="circle-btn increment">+</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- touchspin 2 -->
            <div class="col-xl-3">
                <div class="card equal-card ">
                    <div class="card-header">
                        <h5>Outline Touchspin</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-3">
                                <div class="custom-touchspin">
                                    <button class="touchspin-circle-btn btn-primary text-white decrement">-</button>
                                    <input type="text" class="app-small-touchspin b-1-primary count" value="25">
                                    <button class="touchspin-circle-btn btn-primary text-white increment">+</button>
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="custom-touchspin">
                                    <button class="touchspin-circle-btn btn-light-secondary border-0 decrement">-</button>
                                    <input type="text" class="app-small-touchspin b-1-secondary count" value="25">
                                    <button class="touchspin-circle-btn btn-light-secondary border-0 increment">+</button>
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="custom-touchspin">
                                    <button class="touchspin-circle-btn btn-outline-success decrement">-</button>
                                    <input type="text" class="app-small-touchspin b-1-success count" value="25">
                                    <button class="touchspin-circle-btn btn-outline-success increment">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-xl-3">
                <div class="card equal-card ">
                    <div class="card-header">
                        <h5>Radius Touchspin</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col mt-3">
                                <div class="custom-touchspin">
                                    <button class="touchspin-circle-btn btn-primary text-white decrement">-</button>
                                    <input type="text" class="app-small-touchspin rounded-pill b-1-primary count" value="25">
                                    <button class="touchspin-circle-btn btn-primary text-white increment">+</button>
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="custom-touchspin">
                                    <button class="touchspin-circle-btn btn-light-secondary border-0 decrement">-</button>
                                    <input type="text" class="app-small-touchspin rounded-pill b-1-secondary count" value="25">
                                    <button class="touchspin-circle-btn btn-light-secondary border-0 increment">+</button>
                                </div>
                            </div>
                            <div class="col mt-3">
                                <div class="custom-touchspin">
                                    <button class="touchspin-circle-btn btn-outline-success decrement">-</button>
                                    <input type="text" class="app-small-touchspin rounded-pill b-1-success count" value="25">
                                    <button class="touchspin-circle-btn btn-outline-success increment">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- touchspin 3 -->
            <div class="col-xxl-6 col-xl-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Round Touchspin</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 coustom-touchspin-col">
                                <div class="simplerounded d-flex">
                                    <button class="btn btn-primary btn-left decrement">-</button>
                                    <input type="text" class="app-touchspin border-0 count" value="25">
                                    <button class="btn btn-primary btn-right increment">+</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 coustom-touchspin-col">
                                <div class="simplerounded d-flex">
                                    <button class="btn btn-secondary btn-left decrement">-</button>
                                    <input type="text" class="app-touchspin border-0 count" value="25">
                                    <button class="btn btn-secondary btn-right increment">+</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 coustom-touchspin-col">
                                <div class="simplerounded d-flex">
                                    <button class="btn btn-success btn-left decrement">-</button>
                                    <input type="text" class="app-touchspin border-0 count" value="25">
                                    <button class="btn btn-success btn-right increment">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Square Touch spin</h5>
                    </div>
                    <div class="card-body">
                        <div class="row coustom-touchspin-col">
                            <div class="col-md-6 col-lg-4 coustom-touchspin-col">
                                <div class="simplerounded d-flex">
                                    <button class="btn  btn-primary round decrement">-</button>
                                    <input type="text" class="app-touchspin border-0 count" value="25">
                                    <button class="btn btn-primary increment">+</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 coustom-touchspin-col">
                                <div class="simplerounded d-flex">
                                    <button class="btn btn-secondary decrement">-</button>
                                    <input type="text" class="app-touchspin border-0 count" value="25">
                                    <button class="btn btn-secondary increment">+</button>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 coustom-touchspin-col">
                                <div class="simplerounded d-flex">
                                    <button class="btn btn-success decrement">-</button>
                                    <input type="text" class="app-touchspin border-0 count" value="25">
                                    <button class="btn btn-success increment">+</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Touch spin</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <button class="btn btn-primary b-r-0 decrement">-</button>
                            <input type="text" class=" form-control app-touchspin count" value="25">
                            <button class="btn btn-secondary b-r-0 increment">+</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Horizontal Touch spin</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex" id="small-horizontal-touchspin">
                            <button class="btn btn-primary b-r-0 decrement">-</button>
                            <input type="text" class="form-control app-touchspin count" value="25">
                            <button class="btn btn-secondary b-r-0 increment">+</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Touch spin With Dropdown</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex touchspin-with-dropdown" id="touchspin-with-dropdown">
                            <button class="btn btn-primary b-r-0 decrement">-</button>

                            <span class="input-group-text tochspin-pre-class  text-light-secondary text-dark b-r-0">Pre</span>
                            <input type="text" class="form-control app-touchspin count" value="25">

                            <span
                                class="input-group-text  tochspin-pre-class  text-light-secondary text-dark b-r-0">Post</span>

                            <button class="btn btn-secondary b-r-0 increment">+</button>
                            <div class="input-group">
                                <button class="btn text-light-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">Dropdown</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Touch spin With Postfix & Prefix</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex  touchspin-with-PostPre">
                            <button class="btn btn-primary b-r-0 decrement">-</button>
                            <span class="input-group-text b-r-0">#</span>
                            <input type="text" class="form-control app-touchspin count" value="25">
                            <span class="input-group-text b-r-0">%</span>
                            <button class="btn btn-secondary b-r-0 increment">+</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Touch spin end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!--js-->
<script src="{{asset('assets/js/touchspin.js')}}"></script>
@endsection
