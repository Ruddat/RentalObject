@extends('layout.master')
@section('title', 'Line Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Line</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Line</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Line Chart start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Line Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="line1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Line Chart end -->
            <!-- Zoomable Timeseries start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Zoomable Timeseries</h5>
                    </div>
                    <div class="card-body">
                        <div id="line3"></div>
                    </div>
                </div>
            </div>
            <!-- Zoomable Timeseries end -->
            <!-- Line with Annotations start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Line with Annotations</h5>
                    </div>
                    <div class="card-body">
                        <div id="line4"></div>
                    </div>
                </div>
            </div>
            <!-- Line with Annotations end -->
            <!-- Stepline Chart start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Stepline Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="line5"></div>
                    </div>
                </div>
            </div>
            <!-- Stepline Chart end -->
            <!-- Gradient line chart start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Gradient line chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="line6"></div>
                    </div>
                </div>
            </div>
            <!-- Gradient line chart end -->
            <!-- Link Chart With Datatables start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Link Chart With Datatables</h5>
                    </div>
                    <div class="card-body">
                        <div id="line2"></div>
                    </div>
                </div>
            </div>
            <!-- Link Chart With Datatables end -->
            <!-- Brush Chart start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Brush Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="wrapper">
                            <div id="chart-line--7"></div>
                            <div id="chart-line-7"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Brush Chart end -->
            <!-- Realtime chart start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Realtime chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="line-8"></div>
                    </div>
                </div>
            </div>
            <!-- Realtime chart end -->
            <!-- Missing Null Values start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Missing Null Values</h5>
                    </div>
                    <div class="card-body">
                        <div id="line10"></div>
                    </div>
                </div>
            </div>
            <!-- Missing Null Values end -->
            <!-- Dashed Line Chart start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Dashed Line Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="line11"></div>
                    </div>
                </div>
            </div>
            <!-- Dashed Line Chart end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/line.js')}}"></script>
@endsection

