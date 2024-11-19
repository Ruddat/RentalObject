@extends('layout.master')
@section('title', 'Slick Slider')
@section('css')
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/slick/slick-theme.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Slider</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Slider</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row app-slick-sliders">
            <!-- Multiple Items start  -->
            <div class="col-lg-6">
                <div class="card ">
                    <div class="card-header">
                        <h5>Multiple Items</h5>
                    </div>
                    <div class="card-body">
                        <div class="multiple-items app-arrow">
                            <div class="items"><img src="{{asset('../assets/images/slick/09.jpg')}}" alt="image" class="img-fluid rounded">
                            </div>
                            <div class="items"><img src="{{asset('../assets/images/slick/23.jpg')}}" alt="image" class="img-fluid rounded">
                            </div>
                            <div class="items"><img src="{{asset('../assets/images/slick/25.jpg')}}" alt="image" class="img-fluid rounded">
                            </div>
                            <div class="items"><img src="{{asset('../assets/images/slick/24.jpg')}}" alt="image" class="img-fluid rounded">
                            </div>
                            <div class="items"><img src="{{asset('../assets/images/slick/26.jpg')}}" alt="image" class="img-fluid rounded">
                            </div>
                            <div class="items"><img src="{{asset('../assets/images/slick/27.jpg')}}" alt="image" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Multiple Items end  -->
            <!-- Center Mode start  -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Center Mode</h5>
                    </div>
                    <div class="card-body">
                        <div class="center-mode app-arrow">
                            <div class="item">
                                <img src="{{asset('../assets/images/slick/04.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{asset('../assets/images/slick/03.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{asset('../assets/images/slick/04.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{asset('../assets/images/slick/05.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{asset('../assets/images/slick/06.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="item">
                                <img src="{{asset('../assets/images/slick/07.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Center Mode start  -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Responsive Display</h5>
                    </div>
                    <div class="card-body">
                        <div class="responsive app-arrow">
                            <div class="resopns-item">
                                <img src="{{asset('../assets/images/slick/10.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="resopns-item">
                                <img src="{{asset('../assets/images/slick/23.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="resopns-item">
                                <img src="{{asset('../assets/images/slick/05.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="resopns-item">
                                <img src="{{asset('../assets/images/slick/25.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="resopns-item">
                                <img src="{{asset('../assets/images/slick/06.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="resopns-item">
                                <img src="{{asset('../assets/images/slick/03.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Variable Width</h5>
                    </div>
                    <div class="card-body">
                        <div class="variable-width app-arrow">
                            <div class="slider_width_1"></div>
                            <div class="slider_width_2"></div>
                            <div class="slider_width_3"></div>
                            <div class="slider_width_4"></div>
                            <div class="slider_width_5"></div>
                            <div class="slider_width_6"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Add & Remove</h5>
                    </div>
                    <div class="card-body">
                        <div class="slider add-remove app-arrow">
                            <div class="p-2">
                                <img src="{{asset('../assets/images/slick/12.jpg')}}" alt="image" class="img-fluid rounded">
                            </div>
                        </div>
                        <div class="text-center add-remove-btn mt-3">
                            <button class="button js-add-slide btn btn-light-primary">Add Slide</button>
                            <button class="button js-remove-slide btn btn-light-danger ">Remove Slide</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Filtering</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="slider filtering app-arrow">
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/13.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/15.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/14.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/17.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/16.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/18.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/19.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                                <div class="items">
                                    <img src="{{asset('../assets/images/slick/20.jpg')}}" alt="image" class="img-fluid rounded">
                                </div>
                            </div>
                            <div class="filter d-flex justify-content-center mt-3">
                                <button class="btn btn-primary js-filter">Filter Slides</button>
                            </div>
                            <div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Autoplay Slider</h5>
                            </div>
                            <div class="card-body">
                                <div class="autoplay-slider app-arrow">
                                    <div class="autoplay-item">
                                        <img src="{{asset('../assets/images/slick/28.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                    <div class="autoplay-item">
                                        <img src="{{asset('../assets/images/slick/22.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                    <div class="autoplay-item">
                                        <img src="{{asset('../assets/images/slick/10.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                    <div class="autoplay-item">
                                        <img src="{{asset('../assets/images/slick/09.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                    <div class="autoplay-item">
                                        <img src="{{asset('../assets/images/slick/05.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                    <div class="autoplay-item">
                                        <img src="{{asset('../assets/images/slick/21.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Fade Slider</h5>
                            </div>
                            <div class="card-body">
                                <div class="fade-s app-arrow" dir="rtl">
                                    <div class="item">
                                        <img src="{{asset('../assets/images/slick/fade-1.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('../assets/images/slick/fade-2.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('../assets/images/slick/fade-3.jpg')}}" class="img-fluid rounded" alt="image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Lazy Loading Slider</h5>
                            </div>
                            <div class="card-body">
                                <div class="lazy app-arrow" dir="rtl">
                                    <div class="lazy-item">
                                        <img data-lazy="{{asset('backend/assets/images/slick/02.jpg')}}" alt="" class="img-fluid  rounded" src="#">
                                    </div>
                                    <div class="lazy-item">
                                        <img data-lazy="{{asset('backend/assets/images/slick/03.jpg')}}" alt="" class="img-fluid  rounded" src="#">
                                    </div>
                                    <div class="lazy-item">
                                        <img data-lazy="{{asset('backend/assets/images/slick/04.jpg')}}" alt="" class="img-fluid  rounded" src="#">
                                    </div>
                                    <div class="lazy-item">
                                        <img data-lazy="{{asset('backend/assets/images/slick/05.jpg')}}" alt="" class="img-fluid  rounded" src="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Slider Syncing</h5>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="slider slider-for mb-3">
                                <div class="slider-1">
                                    <img src="{{asset('../assets/images/ecommerce/01.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-2">
                                    <img src="{{asset('../assets/images/ecommerce/21.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-3">
                                    <img src="{{asset('../assets/images/ecommerce/04.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-4">
                                    <img src="{{asset('../assets/images/ecommerce/07.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-5">
                                    <img src="{{asset('../assets/images/ecommerce/15.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                            </div>

                            <div class="slider slider-nav app-arrow">
                                <div class="slider-1 p-2">
                                    <img src="{{asset('../assets/images/ecommerce/01.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-2 p-2">
                                    <img src="{{asset('../assets/images/ecommerce/21.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-3 p-2">
                                    <img src="{{asset('../assets/images/ecommerce/04.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-4 p-2">
                                    <img src="{{asset('../assets/images/ecommerce/07.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                                <div class="slider-5 p-2">
                                    <img src="{{asset('../assets/images/ecommerce/15.jpg')}}" class="img-fluid rounded" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- slick-file -->
<script src="{{asset('backend/assets/vendor/slick/slick.min.js')}}"></script>

<!--  js -->
<script src="{{asset('backend/assets/js/slick.js')}}"></script>
@endsection
