@extends('layout.master')
@section('title', 'Candlestick Chart')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Candlestick</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Candlestick</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Basic Candlestick Chart start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Candlestick Chart</h5>
                    </div>
                    <div class="card-body">
                        <div id="candlestick1"></div>
                    </div>
                </div>
            </div>
            <!-- Basic Candlestick Chart end -->
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- apexcharts js-->
    <script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/vendor/apexcharts/candlestick/dayjs.min.js')}}"></script>

    <!-- js-->
    <script src="{{asset('assets/js/candlestick_charts.js')}}"></script>
@endsection
