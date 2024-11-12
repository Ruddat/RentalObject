@extends('layout.master')
@section('title', 'Bar Chart')
@section('css')

<!-- apexcharts css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">

@endsection
@section('main-content')
<main>
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Bar</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Bar</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Bar Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Basic Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Bar Chart end -->
            <!-- Stacked Bar Chart strata -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Stacked Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar3"></div>
                    </div>
                </div>
            </div>
            <!-- Stacked Bar Chart end -->
            <!-- 100% Stacked Bar Chart start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> 100% Stacked Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar4"></div>
                    </div>
                </div>
            </div>
            <!-- 100% Stacked Bar Chart end -->
            <!-- Bar with Negative Values start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Bar with Negative Values</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar5"></div>
                    </div>
                </div>
            </div>
            <!-- Bar with Negative Values end -->
            <!-- Bar Chart with Markers start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Bar Chart with Markers</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar6"></div>
                    </div>
                </div>
            </div>
            <!-- Bar Chart with Markers end -->
            <!-- Reversed Bar Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Reversed Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar7"></div>
                    </div>
                </div>
            </div>
            <!-- Reversed Bar Chart end -->
            <!-- Bar with categories as DataLabels start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Bar with categories as DataLabels</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar8"></div>
                    </div>
                </div>
            </div>
            <!-- Bar with categories as DataLabels end -->
            <!--  Patterned Bar Chart start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Patterned Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar9"></div>
                    </div>
                </div>
            </div>
            <!--  Patterned Bar Chart end -->
            <!-- Bar with Image Fill start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Bar with Image Fill</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar10"></div>
                    </div>
                </div>
            </div>
            <!-- Bar with Image Fill end -->
            <!-- Grouped Bar Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Grouped Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="bar2"></div>
                    </div>
                </div>
            </div>
            <!-- Grouped Bar Chart end -->
        </div>
    </div>
</main>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

<!-- js-->
<script src="{{('assets/js/bar.js')}}"></script>
@endsection

