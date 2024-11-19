@extends('layout.master')
@section('title', 'Product List')
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
                <h4 class="main-title">Product List</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Product List</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Product List start -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="table-responsive app-scroll app-datatable-default product-list-table">
                            <table id="product-Listtable" class="table-sm display align-middle">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="check-box mb-0">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmark outline-secondary ms-2 "></span>
                                        </label>
                                    </th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Stock</th>
                                    <th>category</th>
                                    <th>Seller</th>
                                    <th>Published</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/08.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium">Women's Purce</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$457</td>
                                    <td>562</td>
                                    <td>
                                        <span class="badge text-light-secondary">Purce</span>
                                    </td>
                                    <td>Purce.in</td>
                                    <td>12,Nov 2024 - 01:32PM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/10.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium">Women's Sandals</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$422</td>
                                    <td>52</td>
                                    <td>
                                        <span class="badge text-light-secondary">Shoes</span>
                                    </td>
                                    <td>Shose.in</td>
                                    <td>10,Nov 2024 - 09:11PM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/14.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium"> Women's watch</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$102</td>
                                    <td>53</td>
                                    <td>
                                        <span class="badge text-light-success">Watch</span>
                                    </td>
                                    <td>Watch.in</td>
                                    <td>15,Nov 2024 - 05:00PM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/20.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium">Backpacks</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$99</td>
                                    <td>127</td>
                                    <td>
                                        <span class="badge text-light-danger">Bag</span>
                                    </td>
                                    <td>Bag.in</td>
                                    <td>20,Nov 2024 - 09:10PM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/18.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium">Men's watch</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$412</td>
                                    <td>22</td>
                                    <td>
                                        <span class="badge text-light-info">Watch</span>
                                    </td>
                                    <td>Watch.in</td>
                                    <td>17,Oct 2024 - 9:45PM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/22.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium">Kid's T-shirt</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$36</td>
                                    <td>12</td>
                                    <td>
                                        <span class="badge text-light-info">Clothing</span>
                                    </td>
                                    <td>Clothing.in</td>
                                    <td>17,Oct 2024 - 9:45PM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/23.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium">Kid's Jacket</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$133</td>
                                    <td>20</td>
                                    <td>
                                        <span class="badge text-light-dark">Clothing</span>
                                    </td>
                                    <td>Clothing.in</td>
                                    <td>21,Oct 2024 - 12:45AM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/03.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium">Women Jacket</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$412</td>
                                    <td>88</td>
                                    <td>
                                        <span class="badge text-light-primary">Clothing</span>
                                    </td>
                                    <td>Clothing.in</td>
                                    <td>01,Sep 2024 - 10:14AM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <label class="check-box mb-0">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-35 w-35 d-flex-center b-r-10 overflow-hidden me-2">
                                                <img src="{{asset('../assets/images/ecommerce/05.jpg')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <div class="d-flex">
                                                <span class="fw-medium"> Hoodie</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td>$326</td>
                                    <td>59</td>
                                    <td>
                                        <span class="badge text-light-danger">Clothing</span>
                                    </td>
                                    <td>Clothing.in</td>
                                    <td>20,Nov 2024 - 09:10PM</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button"
                                                class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product List end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!--datatable -->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

    <!-- js-->
    <script src="{{asset('assets/js/product_list.js')}}"></script>
@endsection

