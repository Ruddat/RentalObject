@extends('layout.master')
@section('title', 'Widget')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Widget</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-squares-four f-s-16"></i> Widget
                      </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row widget-container">
            <!-- Ecommerce card start -->
            <div class="col-lg-7 col-xxl-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card eshop-cards">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                          <span class="bg-primary h-40 w-40 d-flex-center b-r-15 f-s-18">
                            <i class="ph-bold  ph-map-pin-line"></i>
                          </span>
                                    <div class="dropdown">
                                        <a href="#" class="text-primary" role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            Last Month<i class="ti ti-chevron-down ms-1"></i>
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="flex-shrink-0 align-self-end">
                                        <p class="f-s-16 mb-0">Visits</p>
                                        <h5>25,220k <span class="f-s-12 text-danger">-45%</span></h5>
                                    </div>
                                    <div class="visits-chart">
                                        <div id="visitsChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card eshop-cards">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                          <span class="bg-secondary h-40 w-40 d-flex-center b-r-15 f-s-18">
                            <i class="ph-bold  ph-shopping-cart"></i>
                          </span>
                                    <div class="dropdown">
                                        <a href="#" class="text-secondary " role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            Weekly<i class="ti ti-chevron-down ms-1"></i>
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Monthly</a></li>
                                            <li><a class="dropdown-item" href="#">Weekly</a></li>
                                            <li><a class="dropdown-item" href="#">Yearly</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center position-relative">
                                    <div class="flex-shrink-0 align-self-end">
                                        <p class="f-s-16 mb-0">Order</p>
                                        <h5>45,782k <span class="f-s-12 text-success">+65%</span></h5>
                                    </div>
                                    <div class="order-chart">
                                        <div id="orderChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card eshop-cards">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                          <span class="bg-success h-40 w-40 d-flex-center b-r-15 f-s-18">
                            <i class="ph-bold  ph-pulse"></i>
                          </span>
                                    <div class="dropdown">
                                        <a href="#" class="text-success " role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            Today<i class="ti ti-chevron-down ms-1"></i>
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Today</a></li>
                                            <li><a class="dropdown-item" href="#">Tomorrow</a></li>
                                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="flex-shrink-0 align-self-end">
                                        <p class="f-s-16 mb-0">Activity</p>
                                        <h5>45k</h5>
                                    </div>
                                    <div class="activity-chart">
                                        <div id="activityChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card eshop-cards">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                          <span class="bg-warning h-40 w-40 d-flex-center b-r-15 f-s-18">
                            <i class="ph-fill  ph-coins"></i>
                          </span>
                                    <div class="dropdown">
                                        <a href="#" class="text-warning " role="button" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            February<i class="ti ti-chevron-down ms-1"></i>
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">January</a></li>
                                            <li><a class="dropdown-item" href="#">February</a></li>
                                            <li><a class="dropdown-item" href="#">March</a></li>
                                            <li><a class="dropdown-item" href="#">April</a></li>
                                            <li><a class="dropdown-item" href="#">...</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="flex-shrink-0 align-self-end">
                                        <p class="f-s-16 mb-0">Sales</p>
                                        <h5>$63,987<span class="f-s-12 text-success">+68%</span></h5>
                                    </div>
                                    <div class="sales-chart">
                                        <div id="salesChart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ecommerce card end -->

            <!-- Spent Hours card start -->
            <div class="col-md-7 col-lg-5 col-xxl-4 col-order-lg-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title-text">Spent Hours</h5>
                        <div class="mt-3">
                            <div id="activityHoursChart"></div>
                        </div>
                        <div class="spent-hours-content">
                            <div>
                                <h6 class="mb-0">20H</h6>
                                <p class="text-secondary mb-0">Time Spent</p>
                            </div>
                            <div>
                                <h6 class="mb-0">45</h6>
                                <p class="text-secondary mb-0">Lessons taken</p>
                            </div>
                            <div>
                                <h6 class="mb-0">200</h6>
                                <p class="text-secondary mb-0">Lessons remaining</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Spent Hours card end -->

            <!-- Product Sold card start -->
            <div class="col-lg-2 d-none d-xxl-block">
                <div class="card equal-card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <h6 class="header-title-text">Product Sold </h6>
                            <span><i class="ph-bold  ph-trend-down text-danger"></i></span>
                        </div>
                        <div>
                            <div id="productSold"></div>
                            <div>
                                <a href="{{ route('product') }}" role="button" class="btn btn-success w-100">Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product Sold card end -->

            <!-- Crypto card start -->
            <div class="col-lg-8 col-xxl-5">
                <div class="card card-dark currency-data-card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <h6>Profit</h6>
                                <h2>$45,897.00</h2>
                                <p class="text-light">45.9% Year over year</p>
                            </div>
                            <div class="col-sm-6 text-end text-sm-start">
                                <h6>Shares</h6>
                                <h4>$7,829.03</h4>
                                <p class="text-light">14.07% Year over year</p>
                                <div>
                                    <div id="sharesChart"></div>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1">
                                <div class="currency-coin-box bg-primary">
                                    <div class="h-45 w-45 d-flex-center b-r-15 overflow-hidden  p-1 mb-3">
                                        <img src="{{asset('../assets/images/dashboard/analytics/binance.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <p class="text-light mb-0">Bitcoin</p>
                                    <h6 class="mb-0">$72,890</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1">
                                <div class="currency-coin-box bg-danger">
                                    <div class="h-45 w-45 d-flex-center b-r-15 overflow-hidden p-1 mb-3">
                                        <img src="{{asset('../assets/images/dashboard/analytics/ethereum.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <p class="text-light mb-0">Ethereum</p>
                                    <h6 class="mb-0">$34,786</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1">
                                <div class="currency-coin-box bg-secondary">
                                    <div class="h-45 w-45 d-flex-center b-r-15 overflow-hidden  p-1 mb-3">
                                        <img src="{{asset('../assets/images/dashboard/analytics/dogecoin.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <p class="text-light mb-0">Dash</p>
                                    <h6 class="mb-0">$34,786</h6>
                                </div>
                            </div>
                            <div class="col-6 col-md-3 p-1">
                                <div class="currency-coin-box bg-success">
                                    <div class="h-45 w-45 d-flex-center b-r-15 overflow-hidden   p-1 mb-3">
                                        <img src="{{asset('../assets/images/dashboard/analytics/turkish-lira.png')}}" alt="" class="img-fluid">
                                    </div>
                                    <p class="text-light mb-0">Edo</p>
                                    <h6 class="mb-0">$34,786</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Crypto card end -->

            <!-- Income card start -->
            <div class="col-md-5 col-lg-4 col-xxl-3 col-order-lg-2">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="p-3">
                            <h6 class="f-w-500 text-secondary"><i class="ph-bold  ph-caret-left me-2"></i>Feb 02 - Feb 08</h6>
                            <div class="project-earning mt-3">
                                <div class="project-earning-label">
                                    <h6 class="mb-0"><i class="ph-fill  ph-circle f-s-14 text-warning me-2"></i>$68,200</h6>
                                    <p class="text-secondary mb-0 ms-4">Income</p>
                                </div>
                                <div class="project-earning-label">
                                    <h6 class="mb-0"><i class="ph-fill  ph-circle f-s-14 text-success me-2"></i>$12,200</h6>
                                    <p class="text-secondary mb-0 ms-4">Total</p>
                                </div>
                            </div>
                        </div>
                        <div class="project-earning-chart">
                            <div id="projectEarning"></div>
                        </div>
                        <div class="p-3 project-earning-content">
                            <p class="mb-0">In the symphony of success, our total project income resonates as the crescendo of our endeavors.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Income card end -->

            <!-- Courses card start -->
            <div class="col-xxl-4">
                <div class="row">
                    <div class="col-6 col-md-3 col-xxl-6">
                        <div class="card courses-cards card-success">
                            <div class="card-body">
                                <i class="ph-duotone  ph-calendar-check icon-bg"></i>
                                <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-calendar-check text-success f-s-24"></i>
                        </span>
                                <div class="mt-5">
                                    <h4>2K+</h4>
                                    <p class="f-w-500 mb-0">Completed Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xxl-6">
                        <div class="card courses-cards card-info">
                            <div class="card-body">
                                <i class="ph-duotone  ph-projector-screen-chart icon-bg"></i>
                                <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-projector-screen-chart text-info f-s-24"></i>
                        </span>
                                <div class="mt-5">
                                    <h4>2K+</h4>
                                    <p class="f-w-500 mb-0">Online Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xxl-6">
                        <div class="card courses-cards card-primary">
                            <div class="card-body">
                                <i class="ph-duotone  ph-graduation-cap icon-bg"></i>
                                <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-graduation-cap text-primary f-s-24"></i>
                        </span>
                                <div class="mt-5">
                                    <h4>2K+</h4>
                                    <p class="f-w-500 mb-0">Upcoming Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 col-xxl-6">
                        <div class="card courses-cards card-warning">
                            <div class="card-body">
                                <i class="ph-duotone  ph-pencil-line icon-bg"></i>
                                <span class="bg-white h-50 w-50 d-flex-center b-r-15">
                          <i class="ph-duotone  ph-pencil-line text-warning text-warning f-s-24"></i>
                        </span>
                                <div class="mt-5">
                                    <h4>2K+</h4>
                                    <p class="f-w-500 mb-0">In Progress Courses</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Courses card end -->
        </div>

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- apexcharts -->
<script src="{{asset('assets/vendor/apexcharts/apexcharts.min.js')}}"></script>
<script src="{{asset('assets/vendor/apexcharts/column/dayjs.min.js')}}"></script>
<script src="{{asset('assets/vendor/apexcharts/column/quarterOfYear.min.js')}}"></script>

<!--js-->
<script src="{{asset('assets/js/widget.js')}}"></script>
@endsection
