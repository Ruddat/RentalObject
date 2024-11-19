@extends('layout.master')
@section('title', 'Product Details')
@section('css')
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Product Details</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Product Details</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Product Details start -->
        <div class="row">
            <div class="col-md-6 col-xxl-3 order-md-2 order-xxl-1">
                <div class="card">
                    <div class="card-body">
                        <div class="slider product-slider-for mb-3">
                            <div class="slider-1">
                                <img src="{{asset('../assets/images/ecommerce/25.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="slider-2">
                                <img src="{{asset('../assets/images/ecommerce/26.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="slider-3">
                                <img src="{{asset('../assets/images/ecommerce/27.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="slider-4">
                                <img src="{{asset('../assets/images/ecommerce/28.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                        </div>

                        <div class="slider product-slider-nav app-arrow">
                            <div class="slider-1">
                                <img src="{{asset('../assets/images/ecommerce/25.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="slider-2">
                                <img src="{{asset('../assets/images/ecommerce/26.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="slider-3">
                                <img src="{{asset('../assets/images/ecommerce/27.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                            <div class="slider-4">
                                <img src="{{asset('../assets/images/ecommerce/28.jpg')}}" class="img-fluid rounded" alt="image">
                            </div>
                        </div>

                        <div class="mt-4">
                            <h6 class="text-danger f-s-18"><b>Only 2 left in stock.</b></h6>
                            <p class="mb-0 f-s-15 text-secondary">Sold by
                                <a class="link-primary  text-decoration-underline">
                                    Regaltos PVT.LTD
                                </a>
                                and quality checked by
                                <a class="link-primary  text-decoration-underline">
                                    Spruko Tchnologies
                                </a>
                            </p>
                            <div class="app-divider-v dotted mb-2"></div>
                            <ul class="offer-details-list">
                                <li>
                                    <i class="ti ti-tags text-primary f-s-18 me-1"></i> <b class="text-secondary">Bank
                                        Offer</b> 10% Instant
                                    Discount on ICICI
                                    Bank Credit Card, up to ₹1250 on orders of ₹5,000 and above
                                </li>
                                <li>
                                    <i class="ti ti-tags text-primary f-s-18 me-1"></i> <b class="text-secondary">Bank
                                        Offer</b>
                                    Kotak Bank
                                    Credit Card, up
                                    to ₹1250 on orders of ₹5,000 and above
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 order-xxl-2">
                <div class="card">
                    <div class="card-body">
                        <div class="product-details-contentbox">
                            <h4>Trendy &amp; Stylish For Men</h4>
                            <div class="mt-2 d-flex align-items-center gap-2">
                                <div class="rating ">
                                    <input type="radio" id="star11" name="ratings2" value="11" checked="" disabled="">
                                    <label class="star" for="star11"><span class="ti ti-star-filled f-s-20 text-warning"></span></label>
                                    <input type="radio" id="star15" name="ratings2" value="15" checked="" disabled="">
                                    <label class="star" for="star15"><span class="ti ti-star-filled f-s-20 text-warning"></span></label>
                                    <input type="radio" id="star12" name="ratings2" value="12" disabled="">
                                    <label class="star" for="star12"><span
                                            class="ti ti-star-half-filled text-warning f-s-20"></span></label>
                                    <input type="radio" id="star13" name="ratings2" value="13" disabled="">
                                    <label class="star" for="star13"><span class="ti ti-star f-s-20 text-warning"></span></label>
                                    <input type="radio" id="star14" name="ratings2" value="14" disabled="">
                                    <label class="star" for="star14"><span class="ti ti-star f-s-20 text-warning"></span></label>
                                </div>
                                <div>
                                    <h6 class="m-0 text-warning">(<span class="f-w-600">4.50k</span> Review )</h6>
                                </div>
                            </div>
                            <div class="mt-4 product-details">
                                <h3>$26.00 <span>(54% OFF)</span></h3>
                            </div>

                            <div class="app-divider-v dotted mb-2"></div>

                            <div class="product-detailbox mt-4">
                                <div>
                                    <h5>Size:</h5>
                                    <div class="form-selectgroup">
                                        <label class="select-items">
                                            <input type="checkbox" class="select-input" checked>
                                            <span class="select-box">
                                <span class="selectitem">
                                  6
                                </span>
                              </span>
                                        </label>
                                        <label class="select-items">
                                            <input type="checkbox" class="select-input">
                                            <span class="select-box">
                                <span class="selectitem">
                                  7
                                </span>
                              </span>
                                        </label>
                                        <label class="select-items">
                                            <input type="checkbox" class="select-input">
                                            <span class="select-box">
                                <span class="selectitem">
                                  25
                                </span>
                              </span>
                                        </label>
                                        <label class="select-items">
                                            <input type="checkbox" class="select-input">
                                            <span class="select-box">
                                <span class="selectitem">
                                  30
                                </span>
                              </span>
                                        </label>
                                        <label class="select-items">
                                            <input type="checkbox" class="select-input">
                                            <span class="select-box">
                                <span class="selectitem">
                                  40
                                </span>
                              </span>
                                        </label>
                                    </div>
                                </div>

                                <div>
                                    <h5>Color:</h5>
                                    <div class="option-color-list check-container">
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1" checked>
                                            <span class="radiomark check-primary ms-2"></span>
                                        </label>
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark check-secondary ms-2"></span>
                                        </label>
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark check-success ms-2"></span>
                                        </label>
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark check-danger ms-2"></span>
                                        </label>
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark check-warning ms-2"></span>
                                        </label>
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark check-info ms-2"></span>
                                        </label>
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark check-light ms-2"></span>
                                        </label>
                                        <label class="check-box">
                                            <input type="radio" name="radio-group1">
                                            <span class="radiomark check-dark ms-2"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h5>Description :</h5>
                                <div class="mt-3">
                                    <p>A product description is a piece of writing that conveys the features and benefits of a
                                        product, ranging from basic facts to stories that make a product compelling to an ideal
                                        buyer.</p>
                                    <p>Aside from educating and enticing potential customers, the best descriptions can help
                                        you differentiate your product and brand from your competitors by putting forward your
                                        most salient features and benefits.</p>
                                </div>
                            </div>

                            <div class="mt-4">
                                <div class="d-flex gap-2 align-items-center">
                                    <div class="me-2 ">
                                        <i class="ti ti-star-filled f-s-30 text-warning"></i>
                                    </div>
                                    <div class="">
                                        <h5 class="m-0">3.2 out of 5</h5>
                                        <p class="mb-0 text-secondary f-s-13">Based on (20,435) ratings</p>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0">5 </h6>
                                        <i class="ti ti-star-filled text-warning f-s-9"></i>
                                        <div class="progress w-100 ms-2 me-2" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-primary progress-bar-striped" style="width: 74%"></div>
                                        </div>
                                        <h6>(4,567)</h6>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h6 class="mb-0">4 </h6>
                                        <i class="ti ti-star-filled text-warning f-s-9"></i>
                                        <div class="progress w-100 ms-2 me-2" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-secondary progress-bar-striped" style="width: 65%"> </div>
                                        </div>
                                        <h6>(2,765)</h6>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h6 class="mb-0">3 </h6>
                                        <i class="ti ti-star-filled text-warning f-s-9"></i>
                                        <div class="progress w-100 ms-2 me-2" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-success progress-bar-striped" style="width: 40%"></div>
                                        </div>
                                        <h6>(1,682)</h6>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h6 class="mb-0">2 </h6>
                                        <i class="ti ti-star-filled text-warning f-s-9"></i>
                                        <div class="progress w-100 ms-2 me-2" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-warning progress-bar-striped" style="width: 25%"> </div>
                                        </div>
                                        <h6>(2,380)</h6>
                                    </div>
                                    <div class="d-flex align-items-center mt-3">
                                        <h6 class="mb-0">5 </h6>
                                        <i class="ti ti-star-filled text-warning f-s-9"></i>
                                        <div class="progress w-100 ms-2 me-2" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-danger progress-bar-striped" style="width: 10%"></div>
                                        </div>
                                        <h6>(1,9211)</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="product-details-btn text-end mt-4">
                                <a href="{{route('cart')}}" role="button" class="btn btn-primary">Add To Cart</a>
                                <a href="{{route('checkout')}}" role="button" class="btn btn-success">Buy Now</a>
                                <a href="{{route('wishlist')}}" role="button" class="btn btn-danger">Add to Wishlist</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3 order-md-1 order-xxl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="product-details-contentbox">
                            <div>
                                <h5>Returns:</h5>
                                <p>Returns is a scheme provided by respective sellers directly
                                    under this policy in terms of which the option of exchange, replacement and/ or refund
                                    is offered by the respective sellers to you.</p>
                            </div>

                            <div class="mt-4">
                                <div class="product-review">
                                    <div>
                                        <div class="d-flex align-items-center justify-content-between">
                              <span class="bg-danger h-35 w-35 d-flex-center b-r-50 position-absolute">
                                EM
                              </span>
                                            <span class="fs-6 f-w-500 text-secondary ms-5"> Elyssa Moen</span>
                                            <div>
                                                <i class="ti ti-star fs-5 "></i>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <p class="text-muted">I got your first assignment.
                                                It was quite good. 🥳 We can
                                                continue with the next assignment.</p>
                                        </div>
                                    </div>
                                    <div class="app-divider-v dotted py-3"></div>

                                    <div>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-secondary position-absolute">
                                                <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <span class="fs-6 f-w-500 text-secondary ms-5"> Mark</span>
                                            <div>
                                                <i class="ti ti-star fs-5 "></i>
                                            </div>
                                        </div>
                                        <div class="mt-2">
                                            <p class="text-muted  ">
                                                "This Top is not only stylish but also incredibly warm."
                                            </p>
                                            <div class="me-2 mt-3 text-end">
                                                <a href="{{route('product')}}">
                                                    <img src="{{asset('../assets/images/ecommerce/01.jpg')}}" alt="" class="w-40 b-r-5">
                                                </a>
                                                <a href="{{route('product')}}">
                                                    <img src="{{asset('../assets/images/ecommerce/02.jpg')}}" alt="" class="w-40 b-r-5">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-4">
                                <h5>Products:</h5>
                                <div class="product-details-table">
                                    <table class="table table-bottom-border align-middle products-data-table">
                                        <tbody>
                                        <tr class="border-0">
                                            <td>
                                                <div class="position-relative">
                                                    <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/16.png')}}" alt="product-image" class="w-45 h-45 position-absolute">
                                                    <div class="mg-s-40">
                                                        <h6 class="text-dark f-w-600 txt-ellipsis-1">Sports shoes</h6>
                                                        <p class="text-secondary mb-0">#AB9875</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="f-s-15 text-success">$450</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="position-relative">
                                                    <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/01.png')}}" alt="product-image" class="w-45 h-45 position-absolute">
                                                    <div class="mg-s-40">
                                                        <h6 class="text-dark f-w-600 txt-ellipsis-1">Smartwatch</h6>
                                                        <p class="text-secondary mb-0">#AB8394</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="f-s-15 text-success">$920</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="position-relative">
                                                    <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/09.png')}}" alt="product-image" class="w-45 h-45 position-absolute">
                                                    <div class="mg-s-40">
                                                        <h6 class="text-dark f-w-600 txt-ellipsis-1">T-shirt</h6>
                                                        <p class="text-secondary mb-0">#AB3804</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="f-s-15 text-success">$100</h6>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="position-relative">
                                                    <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/02.png')}}" alt="product-image" class="w-45 h-45 position-absolute">
                                                    <div class="mg-s-40">
                                                        <h6 class="text-dark f-w-600 txt-ellipsis-1">Airpods</h6>
                                                        <p class="text-secondary mb-0">#AB2903</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                <h6 class="f-s-15 text-success">$10,900</h6>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{route('product')}}" class="btn btn-lg btn-primary w-100">View All Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Details end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- slick-file -->
<script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>

<!--js-->
<script src="{{asset('assets/js/product_details.js')}}"></script>
@endsection

