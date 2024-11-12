@extends('layout.master')
@section('title', 'Product')
@section('css')
    <!-- nouislider js css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/nouislider/nouislider.min.css')}}">

    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/apexcharts/apexcharts.css')}}">

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Product</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">E-shop</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Product</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Product start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="product-header d-flex justify-content-between gap-3 align-items-center">

                            <div class="d-flex align-items-center">
                                <a class="me-3 toggle-btn d-inline-block d-lg-none" role="button"><i class="ti ti-align-justified f-s-24"></i></a>
                                <form class="app-form app-icon-form d-inline-block " action="#">
                                    <div class="position-relative">
                                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                                        <i class="ti ti-search text-dark"></i>
                                    </div>
                                </form>
                            </div>
                            <div>
                                <button class="btn btn-secondary product-view4 d-inline-block">IV</button>
                                <button class="btn btn-secondary product-view3">III</button>
                                <button class="btn btn-secondary product-view2  d-none">II</button>
                                <button class="btn btn-secondary product-view">I</button>
                                <button class="btn btn-primary grid-layout-view">
                                    <i class="ti ti-list"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Filters start -->
            <div class="col-xxl-3 col-lg-4 product-box productbox">
                <div class="card">
                    <div class="card-header">
                        <h5>Filters</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="accordion accordion-flush app-accordion accordion-light-primary" id="accordion-flush-sort-by">

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading-two">
                                    <button class="accordion-button bg-none p-1" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_two" aria-expanded="true" aria-controls="collapse_two">
                                        <span class="m-0 mt-1">Sort By</span>
                                    </button>
                                </h2>
                                <div id="collapse_two" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-heading-two" data-bs-parent="#accordion-flush-sort-by">
                                    <div>
                                        <label class="check-box m-3">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark outline-secondary"></span>
                                            <span class="text-secondary">Featured</span>
                                        </label>
                                        <label class="check-box m-3">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark outline-secondary"></span>
                                            <span class="text-secondary">Price: High to Low</span>
                                        </label>
                                        <label class="check-box m-3">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark outline-secondary"></span>
                                            <span class="text-secondary">Price: Low to High</span>
                                        </label>
                                        <label class="check-box m-3">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark outline-secondary"></span>
                                            <span class="text-secondary">Newest</span>
                                        </label>
                                        <label class="check-box m-3">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark outline-secondary"></span>
                                            <span class="text-secondary">Ratings</span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading-three">
                                    <button class="accordion-button bg-none p-1" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_three" aria-expanded="false" aria-controls="collapse_three">
                                        <span class="m-0 mt-1">Categories</span>
                                    </button>
                                </h2>
                                <div id="collapse_three" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-heading-three" data-bs-parent="#accordion-flush-sort-by">
                                    <div class="accordion-body p-2">
                                        <div class="p-2 d-flex align-items-center gap-2">
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary ms-2"></span>
                                            </label>
                                            <a href="#" class="f-s-15 f-w-500 text-secondary"><i class="ph-duotone  ph-dress text-dark f-s-18 me-2"></i>Fashion </a>
                                        </div>
                                        <div class="p-2 d-flex align-items-center gap-2">
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary ms-2"></span>
                                            </label>
                                            <a href="#" class="f-s-15 f-w-500 text-secondary"><i class="ph-duotone  ph-desktop-tower text-dark f-s-18 me-2"></i>Home Appliances</a>
                                        </div>
                                        <div class="p-2 d-flex align-items-center gap-2">
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary ms-2"></span>
                                            </label>
                                            <a href="#" class="f-s-15 f-w-500 text-secondary"><i class="ph-duotone  ph-first-aid-kit text-dark f-s-18 me-2"></i>Health & Beauty</a>
                                        </div>
                                        <div class="p-2 d-flex align-items-center gap-2">
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary ms-2"></span>
                                            </label>
                                            <a href="#" class="f-s-15 f-w-500 text-secondary"><i class="ph-duotone  ph-game-controller text-dark f-s-18 me-2"></i>Toys & Game</a>
                                        </div>
                                        <div class="p-2 d-flex align-items-center gap-2">
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary ms-2"></span>
                                            </label>
                                            <a href="#" class="f-s-15 f-w-500 text-secondary"><i class="ph-duotone  ph-basket text-dark f-s-18 me-2"></i>Groceries</a>
                                        </div>
                                        <div class="p-2 d-flex align-items-center gap-2">
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary ms-2"></span>
                                            </label>
                                            <a href="#" class="f-s-15 f-w-500 text-secondary"><i class="ph-duotone  ph-circles-three-plus text-dark f-s-18 me-2"></i>See all</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading-four">
                                    <button class="accordion-button bg-none p-1" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_four" aria-expanded="false" aria-controls="collapse_four">
                                        <span class="m-0 mt-1">Color</span>
                                    </button>
                                </h2>
                                <div id="collapse_four" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-heading-four" data-bs-parent="#accordion-flush-sort-by">
                                    <div class="accordion-body p-2">
                                        <div class="d-flex flex-wrap check-container mt-3">
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox" checked="">
                                                <span class="radiomark check-primary ms-2"></span>
                                            </label>
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox">
                                                <span class="radiomark check-secondary ms-2"></span>
                                            </label>
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox">
                                                <span class="radiomark check-success ms-2"></span>
                                            </label>
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox">
                                                <span class="radiomark check-danger ms-2"></span>
                                            </label>
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox">
                                                <span class="radiomark check-warning ms-2"></span>
                                            </label>
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox">
                                                <span class="radiomark check-info ms-2"></span>
                                            </label>
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox">
                                                <span class="radiomark check-light ms-2"></span>
                                            </label>
                                            <label class="check-box">
                                                <input type="radio" name="radio-groupbox">
                                                <span class="radiomark check-dark ms-2"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading-five">
                                    <button class="accordion-button bg-none p-1" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_five" aria-expanded="false" aria-controls="collapse_five">
                                        <span class="m-0 mt-1">Gender</span>
                                    </button>
                                </h2>
                                <div id="collapse_five" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-heading-five" data-bs-parent="#accordion-flush-sort-by">
                                    <div class="accordion-body p-2">
                                        <div class="d-flex flex-column gap-2 mt-2 ms-2">
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                                <span class="text-secondary me-2">Men</span>
                                            </label>
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                                <span class="text-secondary me-2">Women</span>
                                            </label>
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                                <span class="text-secondary me-2">Boys</span>
                                            </label>
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                                <span class="text-secondary me-2">Girls</span>
                                            </label>
                                            <label class="check-box">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                                <span class="text-secondary me-2">Boys & Girls</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading-six">
                                    <button class="accordion-button bg-none p-1" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_six" aria-expanded="false" aria-controls="collapse_six">
                                        <span class="m-0 mt-1">Customer Ratings</span>
                                    </button>
                                </h2>
                                <div id="collapse_six" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-heading-six" data-bs-parent="#accordion-flush-sort-by">
                                    <div class="accordion-body p-3">
                                        <div class="rating text-start">
                                            <span class="fa fa-star f-s-18 text-warning"></span>
                                            <span class="fa fa-star f-s-18 text-warning"></span>
                                            <span class="fa fa-star f-s-18 text-warning"></span>
                                            <span class="fa fa-star f-s-18 text-secondary"></span>
                                            <span class="fa fa-star f-s-18 text-secondary"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading-seven">
                                    <button class="accordion-button bg-none p-1" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse_seven" aria-expanded="false" aria-controls="collapse_seven">
                                        <span class="m-0 mt-1">Customer Ratings</span>
                                    </button>
                                </h2>
                                <div id="collapse_seven" class="accordion-collapse collapse show"
                                     aria-labelledby="flush-heading-seven" data-bs-parent="#accordion-flush-sort-by">
                                    <div class="accordion-body p-2">
                                        <div class="d-flex flex-column gap-2 mt-2 ms-2">
                                            <div class="mb-3">
                                                <div class="slider-round" id="html-input"></div>
                                            </div>
                                            <div class=" d-flex gap-2 mb-3">
                                                <select id="select-input" class="form-select"></select>
                                                <input type="number" id="number-input" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>

                            <div class="text-end m-3">
                                <a href="#" role="button" class="btn btn-sm btn-primary">Clear all</a>
                                <a href="#" role="button" class="btn btn-sm btn-secondary">Apply</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filters end -->

            <!-- product box start -->
            <div class="col-xxl-9 col-lg-8">
                <div class="product-wrapper-grid">
                    <div class="row">
                        <!-- Product box -->
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/09.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/10.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Sandals</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Stylist Sandals for women</p>
                                            <div class="pricing-box">
                                                <h6>$390 <span>(<del>$400</del>)</span><span class="text-success ms-2">12% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/13.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/14.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Watch</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Designer watch for women </p>
                                            <div class="pricing-box">
                                                <h6>$900 <span>(<del>$1000</del>)</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/11.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/12.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500"> Shoes</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Casual shoes for boys</p>
                                            <div class="pricing-box">
                                                <h6>$260 <span>(<del>$500</del>)</span><span class="text-success ms-2">40% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/15.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/16.jpg')}} " alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Jumpsuit</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Girls Tie-Ups Basic Jumpsuit</p>
                                            <div class="pricing-box">
                                                <h6>$234 <span class="text-success ms-2">10% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/01.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/02.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Pents</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">comfortable pents for Girl</p>
                                            <div class="pricing-box">
                                                <h6>₹296 <span>(<del>₹999</del>)</span><span class="text-success ms-2">70% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/05.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/06.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Hoodie</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Men Solid Hooded Sweatshirt</p>
                                            <div class="pricing-box">
                                                <h6>$690 <span>(<del>$860</del>)</span><span class="text-success ms-2">40% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/04.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/03.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li>
                                                        <a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Jackets</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Women white jacket</p>
                                            <div class="pricing-box">
                                                <h6>₹296 <span>(<del>₹999</del>)</span><span class="text-success ms-2">70% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/07.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/08.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li>
                                                        <a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20">
                                                            <i class="f-s-18 ti ti-heart text-light"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20">
                                                            <i class="ti ti-shopping-cart f-s-18 text-light"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20">
                                                            <i class="ti ti-eye f-s-18 text-light"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Purce</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Styling white purce for women </p>
                                            <div class="pricing-box">
                                                <h6>$90</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/17.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/18.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Watch</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Black watch for men</p>
                                            <div class="pricing-box">
                                                <h6>$300 <span>(<del>$600</del>)</span><span class="text-success ms-2">20% off</span></h6>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/19.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/20.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li>
                                                        <a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Backpacks</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Kids Graphic Backpack</p>
                                            <div class="pricing-box">
                                                <h6>$200 <span class="text-success">19% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/23.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/24.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">Jackets</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Sky modern jacket for kid</p>
                                            <div class="pricing-box">
                                                <h6>$300 <span>(<del>$600</del>)</span><span class="text-success ms-2">50% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-xxl-3 col-md-4 col-sm-6">
                            <div class="card overflow-hidden">
                                <div class="card-body p-0">
                                    <div class="product-content-box">
                                        <div class="product-grid">
                                            <div class="product-image">
                                                <a href="#" class="image">
                                                    <img class="pic-1" src="{{asset('../assets/images/ecommerce/21.jpg')}}" alt="">
                                                    <img class="images_box" src="{{asset('../assets/images/ecommerce/22.jpg')}}" alt="">
                                                </a>
                                                <ul class="product-links">
                                                    <li><a href="{{route('wishlist')}}" target="_blank" class="bg-danger h-30 w-30 d-flex-center b-r-20"><i
                                                                class="f-s-18 ti ti-heart text-light"></i></a></li>
                                                    <li><a href="{{route('cart')}}" target="_blank" class="bg-primary h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-shopping-cart f-s-18 text-light"></i></a></li>
                                                    <li><a href="{{route('product_details')}}" target="_blank"
                                                           class="bg-success h-30 w-30 d-flex-center b-r-20"><i
                                                                class="ti ti-eye f-s-18 text-light"></i></a></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="p-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{route('product_details')}}" target="_blank" class="m-0 f-s-20 f-w-500">T-shirt</a>
                                                <p class="text-warning m-0">4.2 <span class="text-warning"><i
                                                            class="ti ti-star-filled"></i></span></p>
                                            </div>
                                            <p class="text-secondary">Normal t-shirt for kids </p>
                                            <div class="pricing-box">
                                                <h6>$180 <span>(<del>$380</del>)</span><span class="text-success ms-2">15% off</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Product box -->
                    </div>
                </div>

            </div>
            <!-- product box end -->
        </div>
        <!-- Product end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- nouislider js -->
<script src="{{asset('assets/vendor/nouislider/nouislider.min.js')}}"></script>
<script src="{{asset('assets/vendor/nouislider/wNumb.min.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/product.js')}}"></script>
@endsection

