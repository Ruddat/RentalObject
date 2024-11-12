@extends('layout.master')
@section('title', 'Scatter Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Scatter</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Scatter</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Scatter (XY) Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Scatter (XY) Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="scatter1"></div>
                    </div>
                </div>
            </div>
            <!-- Scatter (XY) Chart end -->
            <!-- Scatter Chart – Datetime start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Scatter Chart – Datetime</h5>
                    </div>
                    <div class="card-body">
                        <div id="scatter2"></div>
                    </div>
                </div>
            </div>
            <!-- Scatter Chart – Datetime end -->
            <!-- Scatter – Image fill start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Scatter – Image fill</h5>
                    </div>
                    <div class="card-body">
                        <div id="scatter3"></div>
                    </div>
                </div>
            </div>
            <!-- Scatter – Image fill end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/scatter.js')}}"></script>

@endsection
