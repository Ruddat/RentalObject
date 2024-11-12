@extends('layout.master')
@section('title', 'Pie Charts')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Pie</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Pie</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Simple Pie Chart start -->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5> Simple Pie Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie1"></div>
                    </div>
                </div>
            </div>
            <!-- Simple Pie Chart end -->
            <!-- Simple Donut Chart start -->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Simple Donut Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie2"></div>
                    </div>
                </div>
            </div>
            <!-- Simple Donut Chart end -->
            <!-- Gradient Donut Chart start -->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5> Gradient Donut Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie5"></div>
                    </div>
                </div>
            </div>
            <!-- Gradient Donut Chart end -->
            <!-- Patterned Donut Chart start -->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5> Patterned Donut Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie6"></div>
                    </div>
                </div>
            </div>
            <!-- Patterned Donut Chart end -->
            <!-- Pie Chart with Image fill start -->
            <div class="col-lg-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Pie Chart with Image fill</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie7"></div>
                    </div>
                </div>
            </div>
            <!-- Pie Chart with Image fill end -->
            <!--  Updating Donut Chart start -->
            <div class="col-lg-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5> Updating Donut Chart</h5>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <div class="updating-btn-box actions text-center">
                                <button id="add" class="btn btn-sm btn-primary" onclick="appendData(this)">
                                    + ADD
                                </button>

                                <button id="remove" class="btn btn-sm btn-danger">
                                    - REMOVE
                                </button>

                                <button id="reset" class="btn btn-sm btn-success">
                                    RESET
                                </button>
                            </div>
                            <div id="chart9" ></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  Updating Donut Chart end -->
            <!-- Monochrome Pie Chart start -->
            <div class="col-lg-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Monochrome Pie Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="pie4"></div>
                    </div>
                </div>
            </div>
            <!-- Monochrome Pie Chart end -->

            <!-- Basic Polar-Area Chart start -->
            <div class="col-md-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Basic Polar-Area Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="polar1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Polar-Area Chart end -->
            <!-- Polar-Area MonoChrome start -->
            <div class="col-md-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Polar-Area MonoChrome</h5>
                    </div>
                    <div class="card-body">
                        <div id="polar2"></div>
                    </div>
                </div>
            </div>
            <!-- Polar-Area MonoChrome end -->

        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/pie_charts.js')}}"></script>
@endsection
