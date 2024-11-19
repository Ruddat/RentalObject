@extends('layout.master')
@section('title', 'Boxplot Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Boxplot</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Boxplot</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Box & Whisker Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Basic Box & Whisker Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="boxplot1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Box & Whisker Chart end -->
            <!-- BoxPlot with Scatter Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> BoxPlot with Scatter Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="boxplot2"></div>
                    </div>
                </div>
            </div>
            <!-- BoxPlot with Scatter Chart end -->
            <!-- Horizontal BoxPlot Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Horizontal BoxPlot Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="boxplot3"></div>
                    </div>
                </div>
            </div>
            <!-- Horizontal BoxPlot Chart end -->
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- apexcharts-->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!-- js-->
    <script src="{{asset('assets/js/boxplot.js')}}"></script>
@endsection
