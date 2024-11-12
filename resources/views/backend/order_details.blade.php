@extends('layout.master')
@section('title', 'Order Details')
@section('css')
    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/datatable2/buttons.dataTables.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Orders Details</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Orders Details</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Order Details start -->
        <div class="row order-details">
            <div class="col-xxl-9">
                <div class="row">
                    <!-- Order Details start -->
                    <div class="col-lg-4">
                        <div class="card order-details-card">
                            <div class="card-header">
                                <h5 class="text-nowrap">Order Details (#12311)</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-calendar f-s-18 me-2 text-secondary"></i>Date</h6>
                                    <div class="text-end">
                                        <p>01/1/2024</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-credit-card f-s-18 me-2"></i>Payment</h6>
                                    <div class="text-end">
                                        <p>Online</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-truck-delivery f-s-18 me-2"></i>Shipping</h6>
                                    <div class="text-end">
                                        <p> Fast Shipping</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Order Details end -->

                    <!-- Customer Details start -->
                    <div class="col-lg-4">
                        <div class="card order-details-card">
                            <div class="card-header">
                                <h5>Customer Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-file-invoice text-secondary f-s-18 me-2"></i>Customer</h6>
                                    <div class="text-end">
                                        <p>Chris Coyier</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-mail f-s-18 text-secondary me-2"></i>Email</h6>
                                    <div class="text-end">
                                        <p>dam@1234.com</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-device-mobile f-s-18 text-secondary me-2"></i>contact</h6>
                                    <div class="text-end">
                                        <p>+1 111 134 111</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Customer Details end -->

                    <!-- Documents start -->
                    <div class="col-lg-4">
                        <div class="card order-details-card">
                            <div class="card-header">
                                <h5>Documents</h5>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-file-invoice text-secondary f-s-18 text-secondary me-2"></i>Invoice</h6>
                                    <div class="text-end">
                                        <p> #ABC-101011</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-truck-delivery f-s-18 text-secondary me-2"></i>Shipping</h6>
                                    <div class="text-end">
                                        <p>#AD-01009099</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between mt-3">
                                    <h6 class="f-w-600 text-dark"><i class="ti ti-award f-s-18 text-secondary me-2"></i>Reward Points</h6>
                                    <div class="text-end">
                                        <p>100</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Documents end -->
                </div>

                <!-- Order start -->
                <div class="card">
                    <div class="card-header">
                        <h5>
                            Order : #ACD1100897
                        </h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="orders-details-datatable app-datatable-default app-scroll table-responsive">
                            <table class="table table-bottom-border text-center align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col" class="text-start">Product Details</th>
                                    <th>Status</th>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Rating</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/ecommerce/11.jpg')}}" alt="product-img"
                                                 class="h-50 bg-light-secondary b-r-10">
                                            <div class="text-start">
                                                <h6 class="mb-0"> Sports Shoes</h6>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Color:
                                                    <span class="text-secondary">White</span>
                                                </p>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Size: <span
                                                        class="text-secondary">Small</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge text-light-danger">CANCELLED</span></td>
                                    <td>5 Apr,2024 6:05 PM</td>
                                    <td class="text-success f-w-500">$452.00</td>
                                    <td class="f-w-600">3</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-secondary f-s-16 star-filled"></i>
                                            <i class="ti ti-star-filled text-secondary f-s-16 star-filled"></i>
                                            <i class="ti ti-star-filled text-secondary f-s-16 star-filled"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i> </button>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/ecommerce/18.jpg')}}" alt="product-img"
                                                 class="h-50 bg-light-secondary b-r-10">
                                            <div class="text-start">
                                                <h6 class="mb-0">Watch </h6>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Color:
                                                    <span class="text-secondary">Black</span>
                                                </p>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Size: <span class="text-secondary">Xl</span>
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge text-light-success"> DELIVERED</span></td>
                                    <td>5 sep,2024 5:11PM</td>
                                    <td class="text-success f-w-500">$988.00</td>
                                    <td class="f-w-600">2</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-secondary f-s-16 "></i>
                                            <i class="ti ti-star-filled text-secondary  f-s-16 star-filled"></i>
                                            <i class="ti ti-star-filled text-secondary  f-s-16 star-filled"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i> </button>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/ecommerce/19.jpg')}}" alt="product-img"
                                                 class="h-50 bg-light-secondary b-r-10">
                                            <div class="text-start">
                                                <h6 class="mb-0">Bag</h6>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Color:
                                                    <span class="text-secondary">Black</span>
                                                </p>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Size: <span
                                                        class="text-secondary">Medium</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge text-light-warning"> PICKUPS</span></td>
                                    <td>15 oct,2024 1:51PM</td>
                                    <td class="text-success f-w-500">$452.00</td>
                                    <td class="f-w-600">3</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16 "></i>
                                            <i class="ti ti-star-filled text-secondary  f-s-16 star-filled"></i>
                                            <i class="ti ti-star-filled text-secondary  f-s-16 star-filled"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i> </button>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/ecommerce/28.jpg')}}" alt="product-img"
                                                 class="h-50 bg-light-secondary b-r-10">
                                            <div class="text-start">
                                                <h6 class="mb-0"> Sports Shoes</h6>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Color:
                                                    <span class="text-secondary">Black</span>
                                                </p>
                                                <p class="f-w-500 m-0 text-muted f-s-13">Size: <span
                                                        class="text-secondary">small</span></p>
                                            </div>
                                        </div>
                                    </td>
                                    <td><span class="badge text-light-success">DELIVERED</span></td>
                                    <td>19 oct,2024 6:55PM</td>
                                    <td class="text-success f-w-500">$400.00</td>
                                    <td class="f-w-600">1</td>
                                    <td>
                                        <div>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16"></i>
                                            <i class="ti ti-star-filled text-warning f-s-16 "></i>
                                            <i class="ti ti-star-filled text-secondary  f-s-16 star-filled"></i>
                                            <i class="ti ti-star-filled text-secondary  f-s-16 star-filled"></i>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i> </button>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center flex-wrap">
                            <p class="text-secondary">Showing 1 to 6 of 24 order entries</p>
                        </div>
                    </div>
                </div>
                <!-- Order end -->

            </div>
            <!-- Order Status start -->
            <div class="col-xxl-3">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Order Status</h5>
                    </div>
                    <div class="card-body">
                        <ul class="app-timeline-box">

                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-primary h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-shopping-cart f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-primary b-1-primary">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-primary">Order Placed</h6>
                                        <span class="badge text-bg-primary ms-2">20 Min ago</span>
                                    </div>
                                    <p class="mt-2 text-dark">An order has been placed.</p>
                                    <p class="text-secondary">Wed, 15 Dec 2024 - 05:34PM</p>
                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-secondary h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-checks f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-secondary b-1-secondary">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-secondary">Packed</h6>
                                        <span class="color-light">50 Min ago</span>
                                    </div>
                                    <p class="mt-2">
                                        Your Item has been picked up by courier partner
                                    </p>
                                    <p class="text-secondary">Thu, 20 Dec 2024 - 6:48AM</p>
                                    <span class="badge bg-primary-900">Design</span>
                                    <span class="badge bg-primary-900">HTML</span>
                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-success h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-truck-delivery f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-success b-1-success">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-success">Shipping</h6>
                                        <span class="badge text-bg-success ms-2">1 hours ago</span>
                                    </div>
                                    <p class="mt-2 text-dark">
                                        Your Item has been picked up by courier partner
                                    </p>
                                    <p class="text-secondary">Thu, 20 Dec 2024 - 5:48AM</p>
                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                          <span class="text-light-info h-35 w-35 d-flex-center b-r-50">
                            <i class="ti ti-package f-s-20"></i>
                          </span>
                                </div>
                                <div class="timeline-content bg-light-info b-1-info">
                                    <div class="d-flex justify-content-between align-items-center timeline-flex">
                                        <h6 class="mt-2 text-info">Delivered</h6>
                                        <span class="badge text-bg-dark ms-2">Nov 10, 14:00</span>
                                    </div>
                                    <p class="text-secondary">Mon, 26 Dec 2024 - 5:00AM</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Order Status end -->
        </div>
        <!-- Order Details end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- datatable js -->
<script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

<!-- js-->
<script src="{{asset('assets/js/orders_details.js')}}"></script>
@endsection
