@extends('layout.master')
@section('title', 'Gallery')
@section('css')
    <!-- glight css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/glightbox/glightbox.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Gallery</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                    <span>
                      <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                    </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Gallery</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Gallery start -->
        <div class="row">
            <div class="col-12 gallery-grid-container">
                <div class="row ">
                    <div class="col-sm-6 col-lg-4">
                        <div class="imagebox">
                            <a href="{{asset('../assets/images/gallary/01.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                <img src="{{asset('../assets/images/gallary/01.jpg')}}" class="img-fluid" alt="image">
                            </a>
                            <div class="caption-content">
                                <p>Simple Image</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="imagebox">
                            <a href="{{asset('../assets/images/gallary/02.jpg')}}" class="glightbox" data-glightbox='title:Description Bottom; description: You can set the position of the description '>
                                <img src="{{asset('../assets/images/gallary/02.jpg')}}" class="img-fluid" alt="image">
                            </a>
                            <div class="caption-content">
                                <p>Image With Bottom Description</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-6 col-sm-3 col-lg-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/03.jpg')}}" class="glightbox" data-glightbox='title:Description Right; description: You can set the position of the description ;descPosition: right;'>
                                        <img src="{{asset('../assets/images/gallary/03.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Image With Right Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-lg-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/04.jpg')}}" class="glightbox" data-glightbox="title: Description Left;  description: You can set the position of the description; descPosition: left;">
                                        <img src="{{asset('../assets/images/gallary/04.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Image With Right Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-lg-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/05.jpg')}}" class="glightbox" data-glightbox="title: Description Left;  description: You can set the position of the description; descPosition: top;">
                                        <img src="{{asset('../assets/images/gallary/05.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Image With Top Description</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-3 col-lg-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/06.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../assets/images/gallary/06.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="imagebox">
                            <a href="{{asset('../assets/images/gallary/07.jpg')}}"
                               class="glightbox">
                                <img src="{{asset('../assets/images/gallary/07.jpg')}}" class="img-fluid" alt="image">
                            </a>
                            <div class="caption-content">
                                <p>Simple Image With Video</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="imagebox">
                            <a href="{{asset('../assets/images/gallary/08.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                <img src="{{asset('../assets/images/gallary/08.jpg')}}" class="img-fluid" alt="image">
                            </a>
                            <div class="caption-content">
                                <p>Simple Image</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="imagebox">
                            <a href="{{asset('../assets/images/gallary/09.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                <img src="{{asset('../assets/images/gallary/09.jpg')}}" class="img-fluid" alt="image">
                            </a>
                            <div class="caption-content">
                                <p>Simple Image</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class="imagebox">
                            <a href="{{asset('../assets/images/gallary/10.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                <img src="{{asset('../assets/images/gallary/10.jpg')}}" class="img-fluid" alt="image">
                            </a>
                            <div class="caption-content">
                                <p>Simple Image</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/11.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../assets/images/gallary/11.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/12.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../assets/images/gallary/12.jpg')}}" class="img-fluid" alt="image">
                                        <div class="transparent-box2">
                                        </div>
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/14.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../assets/images/gallary/14.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/profile/video.mp4')}}"
                                       class="glightbox">
                                        <img src="{{asset('../assets/images/gallary/13.jpg')}}" class="img-fluid" alt="image">
                                        <div class="caption-content video-caption">
                                            <i class="fa-solid fa-play-circle fa-fw f-s-35"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/15.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../assets/images/gallary/15.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="imagebox">
                                    <a href="{{asset('../assets/images/gallary/16.jpg')}}" class="glightbox" data-glightbox="type: image; zoomable: true;">
                                        <img src="{{asset('../assets/images/gallary/16.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                    <div class="caption-content">
                                        <p>Simple Image</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- Glight js -->
<script src="{{asset('assets/vendor/glightbox/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/masonry/masonry.pkgd.min.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/glightbox.js')}}"></script>

@endsection
