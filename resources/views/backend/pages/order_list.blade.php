@extends('layout.master')
@section('title', 'Order List')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Orders list</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Orders list</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <div class="card">
                <div class="card-body p-0">
                    <!-- table -->
                    <div class="order-list-datatable table-responsive">
                        <table class="table table-bottom-border align-middle mb-0">
                            <thead>
                            <tr>
                                <th>
                                    <label class="check-box mb-0">
                                        <input type="checkbox" id="select-all">
                                        <span class="checkmark outline-secondary ms-2 "></span>
                                    </label>
                                </th>
                                <th>Order Id</th>
                                <th scope="col" class="text-start">Customer</th>
                                <th scope="col">Product</th>
                                <th scope="col">Status</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Payment</th>
                                <th scope="col">Amount</th>
                                <th scope="col">Actions</th>
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="check-box mb-0">
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="check-box mb-0">
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label class="check-box mb-0">
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
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
                                    <a href="{{route('order_details')}}" role="button" target="_blank" class="btn btn-light-primary icon-btn w-30 h-30 b-r-22 me-2"> <i
                                            class="ti ti-eye"></i></a>
                                    <button type="button" class="btn btn-light-success icon-btn w-30 h-30 b-r-22 me-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <i class="ti ti-edit"></i></button>
                                    <button type="button" class="btn btn-light-danger icon-btn w-30 h-30 b-r-22 delete-btn"><i
                                            class="ti ti-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- table -->
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="app-form">
                        <div class="mb-3">
                            <label for="Customer" class="form-label">Customer</label>
                            <input type="text" class="form-control" placeholder="Bette Hagenes" id="Customer">
                        </div>
                        <div class="mb-3">
                            <label for="Product" class="form-label">Product</label>
                            <input type="text" class="form-control" placeholder="jacket" id="Product">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Order Date</label>
                            <input type="datetime-local" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="Payment" class="form-label">Payment Method</label>
                            <select class="form-select" id="Payment">
                                <option selected="">select Your Payment Method</option>
                                <option value="1">Mastercard</option>
                                <option value="2">Visa</option>
                                <option value="3">Paypal</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Amount</label>
                            <div class="input-group">
                                <span class="input-group-text">$</span>
                                <input type="text" class="form-control" placeholder="Enter Amount">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Edit</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- js-->
<script src="{{asset('assets/js/orders_list.js')}}"></script>

@endsection
