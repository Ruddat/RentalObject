@extends('layout.master')
@section('title', 'Leaflet Map')
@section('css')
    <!-- Leaflet map css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/leafletmaps/leaflet.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Leaflet Map</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-map-pin-line f-s-16"></i> Map
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Leaflet Map</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <!-- Leaflet on Mobile Map start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Leaflet on Mobile Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-280" id="mobilemap"></div>
                    </div>
                </div>
            </div>
            <!-- Leaflet on Mobile Map end  -->

            <!-- Accessible maps start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Accessible maps</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-280" id="accessiblemap"></div>
                    </div>
                </div>
            </div>
            <!-- Accessible maps end  -->

            <!-- Markers, Circles and Polygons start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Markers, Circles and Polygons</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-280" id="markersmap"></div>
                    </div>
                </div>
            </div>
            <!-- Markers, Circles and Polygons end  -->

            <!-- Interactive Choropleth Map start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Interactive Choropleth Map</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-280" id="interactivemap"></div>
                    </div>
                </div>
            </div>
            <!-- Interactive Choropleth Map end  -->

            <!-- Markers With Custom Icons start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Markers With Custom Icons</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-280" id="customiconsmap"></div>
                    </div>
                </div>
            </div>
            <!-- Markers With Custom Icons end  -->

            <!-- Layer Groups and Layers Control start  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Layer Groups and Layers Control</h5>
                    </div>

                    <div class="card-body">
                        <div class="w-100 h-280" id="layersmap"></div>
                    </div>
                </div>
            </div>
            <!-- Layer Groups and Layers Control end  -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!--  js -->
<script src="{{asset('assets/vendor/leafletmaps/leaflet.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/leaflet-map.js')}}"></script>
@endsection
