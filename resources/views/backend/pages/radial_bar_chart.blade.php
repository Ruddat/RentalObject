@extends('layout.master')
@section('title', 'Rdialbar Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Radialbar</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-chart-pie-slice f-s-16"></i> Chart
                      </span>
                        </a>
                    </li>
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        Apexcharts
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Radialbar</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Chart start -->
        <div class="row">
            <div class="col-lg-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic RadialBar Chart</h5>
                    </div>
                    <div class="card-body bg-primary-200">
                        <div id="radlaibar1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5> Multiple RadialBars</h5>
                    </div>
                    <div class="card-body bg-secondary-200">
                        <div id="radlaibar2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4">
                <div class="card ">
                    <div class="card-header">
                        <h5> Circle Chart – Custom Angle</h5>
                    </div>
                    <div class="card-body bg-success-200">
                        <div id="radlaibar3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Stroked Circular Gauge</h5>
                    </div>
                    <div class="card-body bg-warning-200">
                        <div id="radlaibar5"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Semi Circular Gauge</h5>
                    </div>
                    <div class="card-body bg-info-200">
                        <div id="radlaibar6"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xxl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Circle Chart with Image</h5>
                    </div>
                    <div class="card-body ">
                        <div id="radlaibar7"></div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom size and custom thickness</h5>
                        <p>You can use customize size by adding</p>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap custom-radial justify-content-center">
                            <div class="d-flex align-items-center flex-column">
                                <div class="mt-auto">
                                    <div id="radial-progress18"></div>
                                </div>
                                <div class="mt-auto">
                                    <p class=" text-primary f-s-18 f-w-600">Primary</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <div class="mt-auto">
                                    <div id="radial-progress19"></div>
                                </div>
                                <div class="mt-auto">
                                    <p class=" text-secondary f-s-18 f-w-600 ">secondary</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <div class="mt-auto">
                                    <div id="radial-progress20"></div>
                                </div>
                                <div class="mt-auto">
                                    <p class=" text-success f-s-18 f-w-600 ">Success</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <div class="mt-auto">
                                    <div id="radial-progress21"></div>
                                </div>
                                <div class="mt-auto">
                                    <p class=" text-danger f-s-18 f-w-600 ">Danger</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <div class="mt-auto">
                                    <div id="radial-progress22"></div>
                                </div>
                                <div class="mt-auto">
                                    <p class=" text-warning f-s-18 f-w-600 ">Warning</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <div class="mt-auto">
                                    <div id="radial-progress23"></div>
                                </div>
                                <div class="mt-auto">
                                    <p class=" text-info f-s-18 f-w-600 ">Info</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center flex-column">
                                <div class="mt-auto">
                                    <div id="radial-progress24"></div>
                                </div>
                                <div class="mt-auto">
                                    <p class=" text-dark f-s-18 f-w-600 ">dark</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Chart end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/radlaibar.js')}}"></script>
@endsection
