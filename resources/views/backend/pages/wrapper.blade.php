@extends('layout.master')
@section('title', 'Wrapper')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Wrapper</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                        <span>
                          <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                        </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Wrapper</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row overlay-page">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="custome-wrapper">
                                    <img src="{{asset('../assets/images/wrapper/custome-overlay.jpg')}}" alt="">
                                    <div class="custome-wrapper-content">
                                        <h5>Custom Overlay</h5>
                                        <span>overlay design</span>
                                    </div>
                                    <ul class="icon">
                                        <li><a href="#"
                                               class="text-outline-light h-35 w-35 d-flex-center b-r-50"><i
                                                    class="ph-bold  ph-magnifying-glass"></i></a>
                                        </li>
                                        <li><a href="#"
                                               class="text-outline-light h-35 w-35 d-flex-center b-r-50"><i
                                                    class="ph-bold  ph-link"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="custome-wrapper-2">
                                    <img src="{{asset('../assets/images/wrapper/custome-overlay-1.jpg')}}" alt="">

                                    <div class="custome-wrapper-2-content">
                                        <h5>Custom Overlay</h5>
                                        <p>CSS gradients allow us to display smooth transitions between two
                                            or more colors.
                                        </p>
                                        <a href="#" role="button" class=" btn btn-sm btn-success b-r-5">Check
                                            Now</a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="custome-wrapper-3">
                                    <img src="{{asset('../assets/images/wrapper/custome-overlay-2.jpg')}}" alt="">
                                    <div class="custome-wrapper-content-3">
                                        <h5>Custom Overlay</h5>
                                        <span>Overlay Design</span>
                                    </div>

                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="custome-wrapper-4">
                                    <img src="{{asset('../assets/images/wrapper/custome-overlay-3.jpg')}}" alt="">
                                    <div class="custome-wrapper-content-4">
                                        <h5>Custom Overlay</h5>
                                        <span>Overlay Design</span>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Content overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-sm-6  col-lg-3">
                                <div class="content-overlay">
                                    <img src="{{asset('../assets/images/wrapper/content-overlay.jpg')}}" alt="">

                                    <div class="content-overlay-text">
                                        <h5>Left Overlay</h5>
                                        <p>
                                            This overlay could be static, appearing on the page load, or
                                            dynamic, appearing based on user
                                            page.. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6  col-lg-3">
                                <div class="content-overlay content-overlay-right">
                                    <img src="{{asset('../assets/images/wrapper/content-overlay-2.jpg')}}" alt="">

                                    <div class="content-overlay-text">
                                        <h5>Right Overlay</h5>
                                        <p> It seems like you're referring to a technique or feature
                                            related to displaying application.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6  col-lg-3">
                                <div class="content-overlay content-overlay-top">
                                    <img src="{{asset('../assets/images/wrapper/content-overlay-3.jpg')}}" alt="">

                                    <div class="content-overlay-text">
                                        <h5>Top Overlay</h5>
                                        <p>To create an overlay that appears over the main content when
                                            you hover HTML, CSS, for more complex behaviors. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-sm-6  col-lg-3">
                                <div class="content-overlay content-overlay-bottom">
                                    <img src="{{asset('../assets/images/wrapper/content-overlay-4.jpg')}}" alt="">

                                    <div class="content-overlay-text">
                                        <h5>Bottom Overlay</h5>
                                        <p>
                                            Bottom overlay related content typically refers to
                                            additional the main content of a webpage </p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="wraper">
                                    <img src="{{asset('../assets/images/wrapper/overlay-1.jpg')}}" alt="">


                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="wraper wrapper-bottom">
                                    <img src="{{asset('../assets/images/wrapper/overlay-2.jpg')}}" alt="">

                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="wraper wrapper-top">
                                    <img src="{{asset('../assets/images/wrapper/overlay-3.jpg')}}" alt="">

                                </div>
                            </div>
                            <div class="col-6 col-sm-6 col-lg-3">
                                <div class="wraper wrapper-top">
                                    <img src="{{asset('../assets/images/wrapper/overlay-4.jpg')}}" alt="">

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

@endsection
