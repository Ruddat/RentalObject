@extends('layout.master')
@section('title', 'Cart')
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
                <h4 class="main-title">Cart</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Cart</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- cart start -->
        <div class="row cart-table">

            <div class="col-lg-8">
                <div class="card">

                    <div class="card-body p-0">
                        <!-- table -->
                        <div class="app-scroll table-responsive app-datatable-default">
                            <table id="example" class="table cart-product-table align-middle">
                                <thead>
                                <tr>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col"> Total</th>
                                    <th scope="col"> Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/16.png')}}" class="w-50 h-50" alt="">
                                            <div class="cart-details">
                                                <p class="fs-6">
                                                    Man's shoes
                                                </p>
                                                <p class="f-w-500">Color: <span>Black</span></p>
                                                <p class="f-w-500">Size: <span>large</span>
                                                </p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>$519.10</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-danger h-35 w-35 d-flex-center b-r-6 p-0 decrement">-</button>
                                            <input type="text" class="h-35 w-35 ms-1 me-1 border b-r-6 text-center count" value="1">
                                            <button class="btn btn-primary h-35 w-35 d-flex-center b-r-6 p-0 increment">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $519.10
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary icon-btn b-r-4">
                                            <i class="ti ti-heart"></i> </button>
                                        <button type="button" class="btn btn-outline-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/13.png')}}" class="w-50 h-50" alt="">
                                            <div class="cart-details">
                                                <p class="fs-6">
                                                    Backpacks</p>
                                                <p class="f-w-500">Color: <span>Pink</span></p>
                                                <p class="f-w-500">Size: <span>Medium</span></p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>$600.50</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-danger h-35 w-35 d-flex-center b-r-6 p-0 decrement">-</button>
                                            <input type="text" class="h-35 w-35 ms-1 me-1 border b-r-6 text-center count" value="1">
                                            <button class="btn btn-primary h-35 w-35 d-flex-center b-r-6 p-0 increment">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $519.10
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary icon-btn b-r-4">
                                            <i class="ti ti-heart"></i> </button>
                                        <button type="button" class="btn btn-outline-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/01.png')}}" class="w-50 h-50" alt="">
                                            <div class="cart-details">
                                                <p class="fs-6">
                                                    Watch</p>
                                                <p class="f-w-500">Color: <span>Blue</span></p>
                                                <p class="f-w-500">Size: <span>Medium</span></p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>$300.99</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-danger h-35 w-35 d-flex-center b-r-6 p-0 decrement">-</button>
                                            <input type="text" class="h-35 w-35 ms-1 me-1 border b-r-6 text-center count" value="1">
                                            <button class="btn btn-primary h-35 w-35 d-flex-center b-r-6 p-0 increment">+</button>
                                        </div>
                                    </td>
                                    <td>$300.99</td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary icon-btn b-r-4">
                                            <i class="ti ti-heart"></i> </button>
                                        <button type="button" class="btn btn-outline-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/07.png')}}" class="w-50 h-50" alt="">
                                            <div class="cart-details">
                                                <p class="fs-6">
                                                    T-shirt
                                                    for kids</p>
                                                <p class="f-w-500">Color: <span>Grey</span></p>
                                                <p class="f-w-500">Size: <span>Xl</span></p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>$600.50</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-danger h-35 w-35 d-flex-center b-r-6 p-0 decrement">-</button>
                                            <input type="text" class="h-35 w-35 ms-1 me-1 border b-r-6 text-center count" value="1">
                                            <button class="btn btn-primary h-35 w-35 d-flex-center b-r-6 p-0 increment">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $519.10
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary icon-btn b-r-4">
                                            <i class="ti ti-heart"></i> </button>
                                        <button type="button" class="btn btn-outline-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/02.png')}}" class="w-50 h-50" alt="">
                                            <div class="cart-details">
                                                <p class="fs-6">Airpods Pro</p>
                                                <p class="f-w-500">Color: <span>Black</span></p>
                                                <p class="f-w-500">Size: <span>-</span></p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>$600.50</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-danger h-35 w-35 d-flex-center b-r-6 p-0 decrement">-</button>
                                            <input type="text" class="h-35 w-35 ms-1 me-1 border b-r-6 text-center count" value="1">
                                            <button class="btn btn-primary h-35 w-35 d-flex-center b-r-6 p-0 increment">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            $519.10
                                        </div>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary icon-btn b-r-4">
                                            <i class="ti ti-heart"></i> </button>
                                        <button type="button" class="btn btn-outline-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div class="d-flex align-items-center gap-2">
                                            <img src="{{asset('../assets/images/dashboard/ecommerce-dashboard/11.png')}}" class="w-50 h-50" alt="">
                                            <div class="cart-details">
                                                <p class="fs-6">
                                                    Women's Watch
                                                </p>
                                                <p class="f-w-500">Color: <span>Golden</span></p>
                                                <p class="f-w-500">Size: <span>Small</span>
                                                </p>
                                            </div>
                                        </div>
                                    </th>
                                    <td>$519.10</td>
                                    <td>
                                        <div class="d-flex">
                                            <button class="btn btn-danger h-35 w-35 d-flex-center b-r-6 p-0 decrement">-</button>
                                            <input type="text" class="h-35 w-35 ms-1 me-1 border b-r-6 text-center count" value="1">
                                            <button class="btn btn-primary h-35 w-35 d-flex-center b-r-6 p-0 increment">+</button>
                                        </div>
                                    </td>
                                    <td>
                                        $519.10
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-outline-primary icon-btn b-r-4">
                                            <i class="ti ti-heart"></i> </button>
                                        <button type="button" class="btn btn-outline-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                        <!-- table -->
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Price Details</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table cart-side-table mb-0">
                                        <tbody>
                                        <tr class="total-price">
                                            <th>Sub Total :</th>
                                            <th class="text-end">
                                      <span id="cart-sub">
                                        $359.96
                                      </span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <td>Discount:
                                            </td>
                                            <td class="text-end" id="cart-discount">- $
                                                53.00</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping Charge :</td>
                                            <td class="text-end" id="cart-shipping">$
                                                65.00</td>
                                        </tr>
                                        <tr>
                                            <td>Estimated Tax (12.5%) : </td>
                                            <td class="text-end" id="cart-tax">$ 44.99
                                            </td>
                                        </tr>
                                        <tr class="total-price">
                                            <th>Total (USD) :</th>
                                            <th class="text-end">
                                    <span id="cart-total">
                                      $415.96
                                    </span>
                                            </th>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-12">
                        <div class="card scratch-card position-relative">
                            <div class="card-body">
                        <span>
                          <i class="ph-duotone  ph-gift f-s-35"></i>
                        </span>
                                <h4>Extra 10% off</h4>
                                <div class="scratch-code-box">
                                    <h6 class="mb-0">WIN190EGHY018</h6>
                                    <div class="flex-shrink-0">
                                        <button class="btn btn-primary btn-sm b-r-24" id="copyBtn">copy</button>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <p class="mb-0">Valid till 4 May 2024. <span>T&C Apply</span></p>
                                </div>
                                <div class="scratch-overlay"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-12">
                        <div class="card gift-card">
                            <div class="card-body">
                                <!-- Gift -->
                                <div class="d-flex align-items-center gap-2">
                                    <img src="{{asset('../assets/images/ecommerce/01.gif')}}" alt="" class="w-35 h-35">
                                    <h6 class="text-dark f-w-600 f-s-18 m-0">Buying for a loved one?</h6>
                                </div>
                                <div>

                                    <p class="text-secondary mt-2">Gift wrap and personalized message on card,
                                        Only for <span class="text-dark f-w-500"><b>$10.50 USD</b></span></p>
                                    <div class="cart-gift text-end mt-4">
                                        <button class="btn btn-primary">Add Gift</button>
                                    </div>
                                </div>
                                <!-- Gift -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- cart end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- datatable js-->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

    <!-- cart js-->
    <script src="{{asset('assets/js/cart.js')}}"></script>
@endsection
