@extends('layout.master')
@section('title', 'Radar Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Radar</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Radar</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Radar Chart start -->
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Basic Radar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="radar1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Radar Chart end -->
            <!-- Radar Chart – Multiple Series start -->
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Radar Chart – Multiple Series</h5>
                    </div>
                    <div class="card-body">
                        <div id="radar2"></div>
                    </div>
                </div>
            </div>
            <!-- Radar Chart – Multiple Series end -->
            <!-- Radar Chart – Polygon Fill start -->
            <div class="col-sm-12 col-md-6 col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Radar Chart – Polygon Fill</h5>
                    </div>
                    <div class="card-body">
                        <div id="radar3"></div>
                    </div>
                </div>
            </div>
            <!-- Radar Chart – Polygon Fill end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/radar_chart.js')}}"></script>
@endsection
