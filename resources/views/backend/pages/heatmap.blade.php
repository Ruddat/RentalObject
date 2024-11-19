@extends('layout.master')
@section('title', 'Heatmap')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Heatmap</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Heatmap</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Heatmap – Single Series start  -->
            <div class="col-xl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Basic Heatmap – Single Series </h5>
                    </div>
                    <div class="card-body">
                        <div id="heatma1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Heatmap – Single Series start  -->
            <!-- Heatmap – Multiple Series start  -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Heatmap – Multiple Series </h5>
                    </div>
                    <div class="card-body">
                        <div id="heatma2"></div>
                    </div>
                </div>
            </div>
            <!-- Heatmap – Multiple Series end  -->
            <!-- Heatmap – Color Range start  -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Heatmap – Color Range</h5>
                    </div>
                    <div class="card-body">
                        <div id="heatma3"></div>
                    </div>
                </div>
            </div>
            <!-- Heatmap – Color Range start  -->
            <!-- Heatmap – Range without Shades start  -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Heatmap – Range without Shades</h5>
                    </div>
                    <div class="card-body">
                        <div id="heatma4"></div>
                    </div>
                </div>
            </div>
            <!-- Heatmap – Range without Shades end  -->
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- apexcharts-->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- js-->
    <script src="{{asset('assets/js/heatma.js')}}"></script>

@endsection

