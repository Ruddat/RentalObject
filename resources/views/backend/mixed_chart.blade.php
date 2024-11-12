@extends('layout.master')
@section('title', 'Mixed Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Mixed</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Mixed</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Line & Column Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Line & Column Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="mixed1"></div>
                    </div>
                </div>
            </div>
            <!-- Line & Column Chart end -->
            <!-- Multiple Y-Axis Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Multiple Y-Axis Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="mixed2"></div>
                    </div>
                </div>
            </div>
            <!-- Multiple Y-Axis Chart end -->
            <!-- Line & Area Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Line & Area Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="mixed3"></div>
                    </div>
                </div>
            </div>
            <!-- Line & Area Chart end -->
            <!-- Line, Column & Area Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Line, Column & Area Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="mixed4"></div>
                    </div>
                </div>
            </div>
            <!-- Line, Column & Area Chart end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/mixed.js')}}"></script>
@endsection


