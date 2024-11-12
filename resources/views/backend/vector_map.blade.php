@extends('layout.master')
@section('title', 'Vector Map')
@section('css')
    <!-- vector map css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/vector-map/jquery-jvectormap.css')}}">

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Vector Maps</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                    <span>
                      <i class="ph-duotone  ph-map-pin-line f-s-16"></i> Map
                    </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Vector Maps</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <!-- world map Markers start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>world map Markers</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="world-markers"></div>
                    </div>
                </div>
            </div>
            <!-- world map Markers end -->
            <!-- world Map start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> world Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="worldMaps"></div>
                    </div>
                </div>
            </div>
            <!-- world Map end -->
            <!-- europe Map start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>europe Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="map"></div>
                    </div>
                </div>
            </div>
            <!-- europe Map end -->
            <!-- USA Map start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>USA Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="map2"></div>
                    </div>
                </div>
            </div>
            <!-- USA Map end -->
            <!-- Africa Map start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Africa Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="af-map"></div>
                    </div>
                </div>
            </div>
            <!-- Africa Map end -->
            <!-- Asia Map start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Asia Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="asi-map"></div>
                    </div>
                </div>
            </div>
            <!-- Asia Map end -->
            <!-- uk Map start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>uk Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="uk-map"></div>
                    </div>
                </div>
            </div>
            <!-- uk Map end -->
            <!-- Russia Map start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Russia Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-400" id="rs-map"></div>
                    </div>
                </div>
            </div>
            <!-- Russia Map end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- vector map plugin js -->
<script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-2.0.5.min.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-world-mill.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/europe-mill.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/jquery-jvectormap-us-lcc.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/jvectormap-es-mill.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/africa-mill.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/asia-mill.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/uk_countries-mill.js')}}"></script>
<script src="{{asset('assets/vendor/vector-map/ru-mill.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/vector-map.js')}}"></script>

@endsection
