@extends('layout.master')
@section('title', 'Video Embed')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Video Embed</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                              <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Video Embed</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Ratio Video 1x1 start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Ratio Video 1x1 </h5>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-1x1">
                            <div>
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/BcKOz6kAgg0"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>Ratio Video 4x3 </h5>
                    </div>
                    <div class="card-body">
                        <div class="ratio  ratio-4x3">
                            <div>
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/BcKOz6kAgg0"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ratio Video 1x1 end -->
            <!-- Ratio Video 16x9 start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Ratio Video 16x9 </h5>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-16x9">
                            <div>
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/PIa17rsNSEE"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Custom ratios 50% </h5>
                    </div>
                    <div class="card-body">
                        <div class="ratio" style="--bs-aspect-ratio: 50%;">
                            <div>
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/EwzynNhx4Y8"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5> Ratio Video 21x9 </h5>
                    </div>
                    <div class="card-body">
                        <div class="ratio ratio-21x9">
                            <div>
                                <iframe class="w-100 h-100" src="https://www.youtube.com/embed/Ep5kNwmDRlg"
                                        title="YouTube video player"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ratio Video 16x9 end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
