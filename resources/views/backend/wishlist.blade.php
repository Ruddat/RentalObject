@extends('layout.master')
@section('title', 'Wishlist')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Wishlist</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Wishlist</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Wishlist start -->

        <div class="row wishlist-container">
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/04.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/03.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Jackets</a>
                                    <p class="text-warning">4.2 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Women white jacket</p>
                                <div class="pricing-box">
                                    <h6>$345 <span>(<del>$467</del>)</span><span class="text-success ms-2">10% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/05.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/06.jpg')}}" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Hoodie</a>
                                    <p class="text-warning">3.2 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Men Solid Hooded Sweatshirt</p>
                                <div class="pricing-box">
                                    <h6>$300 <span>(<del>$600</del>)</span><span class="text-success ms-2">20% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/23.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/24.jpg')}}" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Jackets</a>
                                    <p class="text-warning">5.2 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Sky modern jacket for kid</p>
                                <div class="pricing-box">
                                    <h6>$300 <span>(<del>$450</del>)</span><span class="text-success ms-2">20% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/15.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/16.jpg')}}" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Jumpsuit</a>
                                    <p class="text-warning">4.2 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Girls Tie-Ups Basic Jumpsuit</p>
                                <div class="pricing-box">
                                    <h6>$500 <span>(<del>1000</del>)</span><span class="text-success ms-2">50% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>


                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/11.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/12.jpg')}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Shoes</a>
                                    <p class="text-warning">4.2 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Casual shoes for boys</p>
                                <div class="pricing-box">
                                    <h6>$345 <span>(<del>$467</del>)</span><span class="text-success ms-2">10% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/13.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/14.jpg')}}" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Watch</a>
                                    <p class="text-warning">4 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Designer watch for women</p>
                                <div class="pricing-box">
                                    <h6>$400 <span>(<del>$800</del>)</span><span class="text-success ms-2">20% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/09.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/10.jpg')}}" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Sandals</a>
                                    <p class="text-warning">5.2 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Stylist Sandals for women</p>
                                <div class="pricing-box">
                                    <h6>$450 <span>(<del>$900</del>)</span><span class="text-success ms-2">45% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body p-0">
                        <div class="product-content-box">
                            <div class="product-grid">
                                <div class="product-image">
                                    <a href="{{route('product')}}" target="_blank" class="image">
                                        <img class="pic-1" src="{{asset('assets/images/ecommerce/07.jpg')}}" alt="">
                                        <img class="images_box" src="{{asset('assets/images/ecommerce/08.jpg')}}" alt="">
                                    </a>
                                </div>

                            </div>
                            <div class="p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{route('product_details')}}" class="m-0 f-s-20 f-w-500">Stylish Bag</a>
                                    <p class="text-warning">4.2 <span class="text-warning"><i class="ti ti-star-filled"></i></span></p>
                                </div>
                                <p class="text-secondary">Girls Stylish Bag</p>
                                <div class="pricing-box">
                                    <h6>$500 <span>(<del>1000</del>)</span><span class="text-success ms-2">50% off</span></h6>
                                </div>
                            </div>
                            <span class="bg-danger h-45 w-45 d-flex-center b-r-50 wishlist-like-icon">
                        <i class="ti ti-heart heart-icon text-light"></i>
                       </span>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- wishlist js-->
<script src="{{asset('assets/js/wishlist.js')}}"></script>
@endsection
