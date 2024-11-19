@extends('layout.master')
@section('title', 'Ribbons')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Ribbon</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Ribbon</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Ribbon start -->
        <div class="row">
            <!-- Basic Ribbons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Ribbon</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3">
                                <div class="ribbon-box h-150 bg-primary-500">
                                    <div class="ribbon ribbon-left ribbon-primary">
                                        Ribbon
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3">
                                <div class="ribbon-box h-150 bg-light-500">
                                    <div class="cross-shadow-ribbon cross-left ribbon-light">Cross</div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3">
                                <div class="ribbon-box h-150 bg-success-500">
                                    <div class="ribbon-shape shape-left ribbon-success">shape</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3">
                                <div class="ribbon-box h-150 bg-danger-500">
                                    <div class="arrow-ribbon arrow-left ribbon-danger">Arrow</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3">
                                <div class="ribbon-box h-150 bg-info-500">
                                    <div class="ribbon-side side-left ribbon-info">
                                        Side
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3">
                                <div class="ribbon-box h-150 bg-light-500">
                                    <div class="ribbon-top top-left ribbon-light">
                                        <i class="fa-solid  fa-gift fa-fw"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3 mb-md-0">
                                <div class="ribbon-box h-150 bg-dark-500">
                                    <div class="circle-ribbon circle-left ribbon-dark">
                                        50%
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3 mb-md-0">
                                <div class="ribbon-file h-150 bg-info-500">
                                    <div class="ribbon file-left ribbon-info">25%</div>
                                </div>
                            </div>

                            <div class="col-xl-2 col-lg-3 col-md-4 mb-3 mb-md-0">
                                <div class="ribbon-box h-150 bg-primary-500">
                                    <div class="box-ribbon box-left">
                                        <div class="ribbonbox ribbon-primary">Box</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Basic Ribbons end -->
            </div>
            <!-- Basic Ribbons end -->

            <!-- Position & Color Ribbons start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Ribbon With Position</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-primary-300 mb-3">
                                    <div class="ribbon ribbon-right ribbon-primary">
                                        Ribbon
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-secondary-500 mb-3">
                                    <div class="ribbon ribbon-left-bottom ribbon-secondary">
                                        Ribbon
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-success-500 mb-3">
                                    <div class="ribbon ribbon-right-bottom ribbon-success">
                                        Ribbon
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-danger-500 mb-3">
                                    <div class="ribbon-shape shape-right ribbon-danger">shape</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-info-500 mb-3">
                                    <div class="ribbon-shape shape-left-bottom ribbon-info">shape</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-light-500 mb-3  ">
                                    <div class="ribbon-shape shape-right-bottom ribbon-light">shape</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-dark-500 mb-3">
                                    <div class="arrow-ribbon arrow-right ribbon-dark">Arrow</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-info-500 mb-3">
                                    <div class="arrow-ribbon arrow-left-bottom ribbon-info">Arrow</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-primary-500 mb-3">
                                    <div class="arrow-ribbon arrow-right-bottom ribbon-primary">Arrow</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-secondary-500 mb-3">
                                    <div class="ribbon-top top-right ribbon-secondary">
                                        <i class="fa-solid  fa-gift fa-fw"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-success-500 mb-3">
                                    <div class="ribbon-top top-left-bottom ribbon-success">
                                        <i class="fa-solid  fa-gift fa-fw"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-danger-500 mb-3">
                                    <div class="ribbon-top top-right-bottom ribbon-danger">
                                        <i class="fa-solid  fa-gift fa-fw"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-info-500 mb-3">
                                    <div class="circle-ribbon circle-right ribbon-info">
                                        50%
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-light-500 mb-3">
                                    <div class="circle-ribbon circle-left-bottom ribbon-light">
                                        50%
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-dark-500 mb-3">
                                    <div class="circle-ribbon circle-right-bottom ribbon-dark">
                                        50%
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box ribbon-file h-150 bg-info-500 mb-3">
                                    <div class="ribbon file-right ribbon-info">25%</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box ribbon-file h-150 bg-primary-500 mb-3">
                                    <div class="ribbon file-left-bottom ribbon-primary">25%</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box ribbon-file h-150 bg-secondary-500 mb-3">
                                    <div class="ribbon  file-right-bottom ribbon-secondary">25%</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-success-500 mb-3">
                                    <div class="box-ribbon box-right">
                                        <div class="ribbonbox ribbon-success">Box</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-danger-500 mb-3">
                                    <div class="box-ribbon box-left-bottom">
                                        <div class="ribbonbox ribbon-danger">Box</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-info-500 mb-3">
                                    <div class="box-ribbon box-right-bottom">
                                        <div class="ribbonbox ribbon-info">Box</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-light-500 mb-3">
                                    <div class="ribbon-side side-right ribbon-light">
                                        Side
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box h-150 bg-dark-500 mb-3">
                                    <div class="ribbon-side side-left-bottom ribbon-dark">
                                        Side
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box  h-150 bg-info-500 mb-3">
                                    <div class="ribbon-side side-right-bottom ribbon-info">
                                        Side
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box mb-4 h-150 bg-primary-500 mb-3">
                                    <div class="cross-shadow-ribbon cross-right ribbon-primary">Cross</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box mb-4 h-150 bg-secondary-500 mb-3">
                                    <div class="cross-shadow-ribbon cross-left-bottom ribbon-secondary">Cross</div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-4">
                                <div class="ribbon-box mb-4 h-150 bg-success-500 mb-3">
                                    <div class="cross-shadow-ribbon cross-right-bottom ribbon-success">Cross</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Position & Color Ribbons end -->
        </div>
        <!-- Ribbon end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
