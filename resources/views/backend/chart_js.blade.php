@extends('layout.master')
@section('title', 'Chart Js')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Chart Js</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                    <span>
                      <i class="ph-duotone  ph-chart-pie-slice f-s-16"></i> Chart
                    </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Chart Js</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- chart js page start  -->
        <div class="row chart-js-chart">
            <!-- Bar Chart Border Radius start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Bar Chart Border Radius</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Bar Chart Border Radius end -->
            <!-- Vertical Bar Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Bar Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart1"></canvas>
                    </div>
                </div>
            </div>
            <!-- Vertical Bar Chart end -->
            <!-- Multi Series Pie start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Multi Series Pie</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center h-400">
                            <canvas id="myChart8"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Multi Series Pie end -->
            <!-- Radar skip points start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Radar skip points</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center h-400">
                            <canvas id="myChart4"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Radar skip points end -->
            <!-- Doughnut start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Doughnut</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center h-400">
                            <canvas id="myChart5"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Doughnut end -->
            <!-- Polar area start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Polar Area</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center h-400">
                            <canvas id="myChart6"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Polar area end -->
            <!-- Pie start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Pie</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-center h-400">
                            <canvas id="myChart7"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pie end -->
            <!-- Progressive Line start -->
            <div class="col-xl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Progressive Line</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart9"></canvas>
                    </div>
                </div>
            </div>
            <!-- Progressive Line end -->
            <!-- Line Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Line Chart</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart2"></canvas>
                    </div>
                </div>
            </div>
            <!-- Line Chart end -->
            <!-- Stepped Line Charts start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Stepped Line Charts</h5>
                    </div>
                    <div class="card-body">
                        <canvas id="myChart3"></canvas>
                    </div>
                </div>
            </div>
            <!-- Stepped Line Charts end -->
        </div>
        <!-- chart js page end  -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>


    <!-- chartjs js -->
    <script src="{{asset('assets/vendor/chartjs/chart.js')}}"></script>


    <!-- chart js -->
    <script src="{{asset('assets/js/chart.js')}}"></script>
@endsection
