@extends('layout.master')
@section('title', 'Bootstrap Slider')
@section('css')

@endsection
@section('main-content')
        <div class="container-fluid">
            <!-- Breadcrumb start -->
            <div class="row m-1">
                <div class="col-12 ">
                    <h4 class="main-title">Bootstrap Slider</h4>
                    <ul class="app-line-breadcrumbs mb-3">
                        <li class="">
                            <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                      </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#" class="f-s-14 f-w-500">Bootstrap Slider</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb end -->
            <div class="row">
                <!-- Simple Slider start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center mt-2">Simple Slider</h5>
                        </div>
                        <div class="card-body">
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('../assets/images/bootstrapslider/01.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/07.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/08.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Simple Slider end -->
                <!-- Indicator Slider start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center mt-2">Indicator Slider</h5>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleIndicators" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('../assets/images/bootstrapslider/02.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/07.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/08.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Indicator Slider end -->
                <!-- Slider With Captions start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center mt-2">Slider With Captions</h5>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleCaptions" class="carousel slide">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('../assets/images/bootstrapslider/03.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Some representative placeholder content for the first slide.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/07.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Some representative placeholder content for the second slide.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/08.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                        <div class="carousel-caption d-none d-md-block">
                                            <p>Some representative placeholder content for the third slide.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider With Captions end -->
                <!-- Auto Slider start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center mt-2">Auto Slider</h5>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleSlidesOnly" class="carousel slide"
                                 data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="{{asset('../assets/images/bootstrapslider/04.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/07.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/08.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Auto Slider end -->
                <!-- Auto Slider With Indicators start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center mt-2">Auto Slider With Indicators</h5>
                        </div>
                        <div class="card-body">
                            <div id="carouselExampleInterval" class="carousel slide"
                                 data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleCaptions1"
                                            data-bs-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions1"
                                            data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleCaptions1"
                                            data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="1000">
                                        <img src="{{asset('../assets/images/bootstrapslider/05.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{asset('../assets/images/bootstrapslider/07.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/08.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Auto Slider With Indicators end -->
                <!-- Auto Slider With buttons start -->
                <div class="col-md-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="text-center mt-2">Auto Slider With buttons</h5>
                        </div>
                        <div class="card-body">
                            <div class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="10000">
                                        <img src="{{asset('../assets/images/bootstrapslider/06.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="2000">
                                        <img src="{{asset('../assets/images/bootstrapslider/07.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="{{asset('../assets/images/bootstrapslider/08.jpg')}}" class="w-100 d-block"
                                             alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Auto Slider With buttons end -->
            </div>
        </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection
