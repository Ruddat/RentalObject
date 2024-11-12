@extends('layout.master')
@section('title', 'Area Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Area</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Area</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Area chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Area chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="area1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Area chart end -->
            <!-- Area with Negative Values start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Area with Negative Values</h5>
                    </div>
                    <div class="card-body">
                        <div id="area5"></div>
                    </div>
                </div>
            </div>
            <!-- Area with Negative Values end -->
            <!-- Area Chart – Datetime X-axis start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Area Chart – Datetime X-axis</h5>
                    </div>
                    <div class="card-body">
                        <div id="charts">
                            <div class="toolbar">
                                <button id="one_month" class="btn btn-primary">1M
                                </button>

                                <button id="six_months" class="btn btn-secondary"> 6M</button>

                                <button id="one_year" class="active btn btn-success">1Y</button>

                                <button id="ytd" class="btn btn-danger">
                                    YTD
                                </button>

                                <button id="all" class="btn btn-warning">
                                    ALL
                                </button>
                            </div>

                            <div id="chart-timeline"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Area Chart – Datetime X-axis end -->
            <!-- Selection – Github Style start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Selection – Github Style</h5>
                    </div>
                    <div class="card-body">
                        <div id="wrapper">
                            <div id="chart-months"></div>

                            <div class="github-style d-flex align-items-center">
                                <div>
                                    <button type="button" class="btn btn-primary icon-btn b-r-4"> <i
                                            class="ti ti-git-compare f-s-20"></i></button>
                                </div>
                                <div class="userdetails ms-2 m-3">
                                    <a class="username f-s-18">coder</a>
                                    <span class="cmeta  f-s-18">
                          <span class="commits f-s-18"></span> commits
                        </span>
                                </div>
                            </div>

                            <div id="chart-years"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Selection – Github Style end -->
            <!-- Area Chart with Null values start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Area Chart with Null values</h5>
                    </div>
                    <div class="card-body">
                        <div id="area3"></div>
                    </div>
                </div>
            </div>
            <!-- Area Chart with Null values end -->
            <!-- Spline Area start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Spline Area</h5>
                    </div>
                    <div class="card-body">
                        <div id="area4"></div>
                    </div>
                </div>
            </div>
            <!-- Spline Area end -->
            <!-- Irregular TimeSeries start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Irregular TimeSeries</h5>
                    </div>
                    <div class="card-body">
                        <div id="area7"></div>
                    </div>
                </div>
            </div>
            <!-- Irregular TimeSeries end -->
            <!-- Stacked Area start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Stacked Area</h5>
                    </div>
                    <div class="card-body">
                        <div id="area8"></div>
                    </div>
                </div>
            </div>
            <!-- Stacked Area end -->
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- apexcharts-->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- js-->
    <script src="{{asset('assets/js/area_charts.js')}}"></script>
@endsection
