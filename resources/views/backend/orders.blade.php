@extends('layout.master')
@section('title', 'Orders')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Orders</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Orders</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Orders start -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <ul class="nav nav-tabs app-tabs-primary order-tabs d-flex justify-content-start border-0 mb-0 pb-0" id="Outline"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active d-flex align-items-center gap-1" id="connect-tab"
                                        data-bs-toggle="tab" data-bs-target="#connect-tab-pane" type="button" role="tab"
                                        aria-controls="connect-tab-pane" aria-selected="true"> <i
                                        class="ti ti-sort-descending-2 f-s-18 mg-b-3"></i> All Orders </button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex align-items-center gap-1" id="discover-tab" data-bs-toggle="tab"
                                        data-bs-target="#discover-tab-pane" type="button" role="tab" aria-controls="discover-tab-pane"
                                        aria-selected="false" tabindex="-1"> <i class="ti ti-truck-delivery f-s-18 mg-b-3"></i>
                                    Delivered</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex align-items-center gap-1" id="order-tab" data-bs-toggle="tab"
                                        data-bs-target="#order-tab-pane" type="button" role="tab" aria-controls="order-tab-pane"
                                        aria-selected="false" tabindex="-1"> <i class="ti ti-truck-loading f-s-18 mg-b-3"></i>
                                    Pickups</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex align-items-center gap-1" id="order-tabs" data-bs-toggle="tab"
                                        data-bs-target="#order-tab-returns" type="button" role="tab" aria-controls="order-tab-returns"
                                        aria-selected="false" tabindex="-1"><i class="ti ti-arrow-back f-s-18 mg-b-3"></i>
                                    Returns</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link d-flex align-items-center gap-1" id="ordertab" data-bs-toggle="tab"
                                        data-bs-target="#order-tab-cancelled" type="button" role="tab"
                                        aria-controls="order-tab-cancelled" aria-selected="false" tabindex="-1"><i
                                        class="ti ti-square-rounded-x f-s-18 mg-b-3"></i> Cancelled</button>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body order-tab-content p-0">
                        <div class="tab-content" id="OutlineContent">
                            <div class="tab-pane fade active show" id="connect-tab-pane" role="tabpanel"
                                 aria-labelledby="connect-tab" tabindex="0">
                                <div class="order-list-table table-responsive app-scroll">
                                    <table class="table table-bottom-border align-middle mb-0">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class="check-box">
                                                    <input type="checkbox" id="select-all">
                                                    <span class="checkmark outline-secondary ms-2 "></span>
                                                </label>
                                            </th>
                                            <th>Order Id</th>
                                            <th scope="col" class="text-start">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">payment Method</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA098</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                    <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Mens Zen Walking Shoe</td>
                                            <td><span class="badge text-light-info">CANCELLED</span></td>
                                            <td>5 Apr,2024 6:05 PM</td>
                                            <td>Mastercard</td>
                                            <td>$590</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                    <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Mark Dev</span>
                                            </td>
                                            <td>Mens Zen Walking Shoe</td>
                                            <td><span class="badge text-light-danger"> DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA025</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                                    <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Fleta Walsh</span>
                                            </td>
                                            <td>Mens ExquisiteFormal</td>
                                            <td><span class="badge text-light-primary"> INPROGRESS</span></td>
                                            <td>5 sep,2024 5:11PM</td>
                                            <td> Code</td>
                                            <td>$75</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA050</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                    <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Men's Sports Shoes</td>
                                            <td><span class="badge text-light-success"> PICKUPS</span></td>
                                            <td>9 jan,2024 2:41PM</td>
                                            <td>Paypal</td>
                                            <td>$111</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>
                                                #LA123</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-warning">
                                                    <img src="{{asset('../assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>Leather jacket for men</td>
                                            <td><span class="badge text-light-danger">DELIVERED</span></td>
                                            <td>1 jan,2024 4:00PM</td>
                                            <td>Mastercard</td>
                                            <td>$20</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>
                                                #LA044
                                            </td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                    <img src="{{asset('../assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Fleta Walsh</span>
                                            </td>
                                            <td> Apple Watch Series 5</td>
                                            <td><span class="badge text-light-secondary"> RETURNS</span></td>
                                            <td>10 feb,2024 6:11PM</td>
                                            <td> Visa</td>
                                            <td>$75</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>
                                                #LA022
                                            </td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-light">
                                                    <img src="{{asset('../assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Amazon Brand - House</td>
                                            <td><span class="badge text-light-primary">INPROGRESS</span></td>
                                            <td>15 oct,2024 1:51PM</td>
                                            <td>Paypal</td>
                                            <td> $999</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>
                                                #LA033
                                            </td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                    <img src="{{asset('../assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Fleta Walsh</span>
                                            </td>
                                            <td>Iconic Smartwatch</td>
                                            <td><span class="badge text-light-success"> PICKUPS</span></td>
                                            <td>19 oct,2024 6:55PM</td>
                                            <td>Visa</td>
                                            <td> $165</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>
                                                #LA098
                                            </td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                    <img src="{{asset('../assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Lenora Bogisich</span>
                                            </td>
                                            <td>Leather jacket for men</td>
                                            <td><span class="badge text-light-primary"> INPROGRESS</span></td>
                                            <td>21 nov,2024 7:00PM</td>
                                            <td>Paypal</td>
                                            <td> $70</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- tab-2 -->
                            <div class="tab-pane fade" id="discover-tab-pane" role="tabpanel" aria-labelledby="discover-tab"
                                 tabindex="0">
                                <div class=" order-list-table table-responsive app-scroll">
                                    <table class="table table-bottom-border align-middle mb-0">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class="check-box">
                                                    <input type="checkbox" id="select-all2">
                                                    <span class="checkmark outline-secondary ms-2 "></span>
                                                </label>
                                            </th>
                                            <th>Order Id</th>
                                            <th scope="col" class="text-start">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">payment Method</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA098</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                    <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-info">CANCELLED</span></td>
                                            <td>5 Apr,2024 6:05 PM</td>
                                            <td>Mastercard</td>
                                            <td>$590</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                                    <img src="{{asset('../assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">mens Fanatic  Shoe</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-danger"> DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA025</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-warning">
                                                    <img src="{{asset('../assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Lenora Bogisich</span>
                                            </td>
                                            <td>Mens ExquisiteFormal</td>
                                            <td><span class="badge text-light-primary"> INPROGRESS</span></td>
                                            <td>5 sep,2024 5:11PM</td>
                                            <td> Code</td>
                                            <td>$75</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- tab-3 -->
                            <div class="tab-pane fade" id="order-tab-pane" role="tabpanel" aria-labelledby="order-tab"
                                 tabindex="0">
                                <div class=" order-list-table table-responsive app-scroll">
                                    <table class="table table-bottom-border align-middle mb-0">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class="check-box">
                                                    <input type="checkbox" id="select-all3">
                                                    <span class="checkmark outline-secondary ms-2 "></span>
                                                </label>
                                            </th>
                                            <th>Order Id</th>
                                            <th scope="col" class="text-start">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">payment Method</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA098</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                    <img src="{{asset('../assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-info">CANCELLED</span></td>
                                            <td>5 Apr,2024 6:05 PM</td>
                                            <td>Mastercard</td>
                                            <td>$590</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                    <img src="{{asset('../assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>Mens Zen Walking Shoe</td>
                                            <td><span class="badge text-light-danger"> DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA025</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-light">
                                                    <img src="{{asset('../assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Fleta Walsh</span>
                                            </td>
                                            <td>Mens ExquisiteFormal</td>
                                            <td><span class="badge text-light-primary"> INPROGRESS</span></td>
                                            <td>5 sep,2024 5:11PM</td>
                                            <td> Code</td>
                                            <td>$75</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA098</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                    <img src="{{asset('../assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-info">CANCELLED</span></td>
                                            <td>5 Apr,2024 6:05 PM</td>
                                            <td>Mastercard</td>
                                            <td>$590</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                    <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">mens Fanatic Shoe</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-danger"> DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA025</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                    <img src="{{asset('../assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>Mens ExquisiteFormal</td>
                                            <td><span class="badge text-light-primary"> INPROGRESS</span></td>
                                            <td>5 sep,2024 5:11PM</td>
                                            <td>Code</td>
                                            <td>$75</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                                    <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">mens Fanatic Shoe</span>
                                            </td>
                                            <td>Mens Zen Walking Shoe</td>
                                            <td><span class="badge text-light-danger"> DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA025</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                    <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>Mens ExquisiteFormal</td>
                                            <td><span class="badge text-light-primary"> INPROGRESS</span></td>
                                            <td>5 sep,2024 5:11PM</td>
                                            <td>Code</td>
                                            <td>$75</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- tab-4 -->
                            <div class="tab-pane fade" id="order-tab-returns" role="tabpanel" aria-labelledby="order-tab"
                                 tabindex="0">

                                <div class=" order-list-table table-responsive app-scroll">
                                    <table class="table table-bottom-border align-middle mb-0">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class="check-box">
                                                    <input type="checkbox" id="select-all4">
                                                    <span class="checkmark outline-secondary ms-2 "></span>
                                                </label>
                                            </th>
                                            <th>Order Id</th>
                                            <th scope="col" class="text-start">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">payment Method</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA098</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                    <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-info">CANCELLED</span></td>
                                            <td>5 Apr,2024 6:05 PM</td>
                                            <td>Mastercard</td>
                                            <td>$590</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-warning">
                                                    <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>Mens Zen Walking Shoe</td>
                                            <td><span class="badge text-light-danger"> DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA025</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                    <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>Mens Zen Walking Shoe</td>
                                            <td><span class="badge text-light-primary"> INPROGRESS</span></td>
                                            <td>5 sep,2024 5:11PM</td>
                                            <td> Code</td>
                                            <td>$75</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                    <img src="{{asset('../assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>
                                                mens Fanatic Shoe
                                            </td>
                                            <td><span class="badge text-light-danger"> DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                                        class="ti ti-eye"></i></a>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2"><i
                                                        class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                                        class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- tab-5 -->
                            <div class="tab-pane fade" id="order-tab-cancelled" role="tabpanel" aria-labelledby="order-tab"
                                 tabindex="0">
                                <div class=" order-list-table table-responsive app-scroll ">
                                    <table class="table table-bottom-border align-middle mb-0">
                                        <thead>
                                        <tr>
                                            <th>
                                                <label class="check-box">
                                                    <input type="checkbox" id="select-all5">
                                                    <span class="checkmark outline-secondary ms-2 "></span>
                                                </label>
                                            </th>
                                            <th>Order Id</th>
                                            <th scope="col" class="text-start">Customer</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Order Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">payment Method</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA098</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                    <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Bette Hagenes</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-info">CANCELLED</span></td>
                                            <td>5 Apr,2024 6:05 PM</td>
                                            <td>Mastercard</td>
                                            <td>$590</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2 "> <i class="ti ti-eye"></i></button>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2 "><i class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="check-box">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </td>
                                            <td>#LA19</td>
                                            <td class="d-flex align-items-center gap-2">
                                                <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                    <img src="{{asset('../assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                                </div>
                                                <span class="title-text mb-0">Emery McKenzie</span>
                                            </td>
                                            <td>Mens Walking Shoe</td>
                                            <td><span class="badge text-light-danger">	DELIVERED</span></td>
                                            <td>8 july,2024 1:15 PM</td>
                                            <td>Visa</td>
                                            <td>$410</td>
                                            <td>
                                                <button type="button" class="btn btn-outline-primary icon-btn w-30 h-30 b-r-22 me-2 "> <i class="ti ti-eye"></i></button>
                                                <button type="button" class="btn btn-outline-success icon-btn w-30 h-30 b-r-22 me-2 "><i class="ti ti-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Orders end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
