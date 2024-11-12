@extends('layout.master')
@section('title', 'Column Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Column</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Column</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Column Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Basic Column Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="column1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Column Chart end -->
            <!--  Column Chart with Datalabels start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Column Chart with Datalabels</h5>
                    </div>
                    <div class="card-body">
                        <div id="column2"></div>
                    </div>
                </div>
            </div>
            <!--  Column Chart with Datalabels end -->
            <!-- Stacked Column Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Stacked Column Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="column3"></div>
                    </div>
                </div>
            </div>
            <!-- Stacked Column Chart end -->
            <!-- 100% Stacked Column Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> 100% Stacked Column Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="column4"></div>
                    </div>
                </div>
            </div>
            <!-- 100% Stacked Column Chart end -->
            <!-- Column Chart with Markers start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Column Chart with Markers</h5>
                    </div>
                    <div class="card-body">
                        <div id="column5"></div>
                    </div>
                </div>
            </div>
            <!-- Column Chart with Markers end -->
            <!-- Column Chart with Grouped x-axis labels start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Column Chart with Grouped x-axis labels</h5>
                    </div>
                    <div class="card-body">
                        <div id="column6"></div>
                    </div>
                </div>
            </div>
            <!-- Column Chart with Grouped x-axis labels end -->
            <!-- Column Chart with rotated labels & Annotations start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Column Chart with Rotated Labels & Annotations</h5>
                    </div>
                    <div class="card-body">
                        <div id="column7"></div>
                    </div>
                </div>
            </div>
            <!-- Column Chart with rotated labels & Annotations end -->
            <!-- Column Chart with negative values start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Column Chart with Negative Values</h5>
                    </div>
                    <div class="card-body">
                        <div id="column8"></div>
                    </div>
                </div>
            </div>
            <!-- Column Chart with negative values end -->
            <!-- Range Column Chart start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Range Column Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="column9"></div>
                    </div>
                </div>
            </div>
            <!-- Range Column Chart end -->

            <!-- Distributed Column Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Distributed Column Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="column11"></div>
                    </div>
                </div>
            </div>
            <!-- Distributed Column Chart end -->

            <!-- Dynamic Loaded Chart start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Dynamic Loaded Chart</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <select id="model" class="flat-select">
                                <option value="iphone5">iPhone 5</option>
                                <option value="iphone6">iPhone 6</option>
                                <option value="iphone7">iPhone 7</option>
                            </select>
                            <div class="chart-year" id="chart-year"></div>
                            <div class="chart-quarter" id="chart-quarter"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dynamic Loaded Chart end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts js-->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/apexcharts/column/dayjs.min.js')}}"></script>
<script src="{{asset('assets/vendor/apexcharts/column/quarterOfYear.min.js')}}"></script>

<!-- Customizer js-->
<script src="{{asset('assets/js/customizer.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/column.js')}}"></script>
@endsection
