@extends('layout.master')
@section('title', 'Invoice')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid ">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Invoice</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Invoice</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb start -->
    </div>

    <!-- Invoice start -->
    <div class="container invoice-container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>
                                        <table class="table table-lg w-100 invoice-header">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class=" mb-3">
                                                        <div class="mb-3">
                                                            <img src="{{asset('../assets/images/logo/1.png')}}" class="w-200" alt="">
                                                        </div>
                                                        <div>
                                                            <address>
                                                                2399, Court Street
                                                                Eureka, <br>
                                                                MO 63025, America <br>
                                                                NicholasCKarl@teleworm.us
                                                            </address>
                                                            (418) 699-3662
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="text-end">
                                                        <div class="mb-1">
                                                            <h3 class="text-primary">INVOICE</h3>
                                                        </div>
                                                        <p>Invoice <strong>#900123</strong></p>
                                                        <p>Invoice Date <strong>March 25, 2024</strong></p>
                                                        <p>Invoice Due <strong>Aug 20,2024</strong></p>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <table class="invoice-details-table table table-lg w-100">
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="mb-3 ">
                                                        <h6 class="f-w-600">Bill From</h6>
                                                        Nicholas C. Karl
                                                        <address>
                                                            2399, Court Street Eureka,
                                                            <br>
                                                            MO 63025, America <br>
                                                            NicholasCKarl@teleworm.us
                                                        </address>
                                                        (418) 699-3662
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="mb-3">
                                                        <h6 class="f-w-600">Bill To</h6>
                                                        Florence J. Fennell
                                                        <address>
                                                            749 Melville Street
                                                            Jackson,<br> TN 38301<br>

                                                            FlorenceJFennell@jourrapide.com
                                                        </address>
                                                        (702) 893-8933
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class=" text-end mb-3">
                                                        <h6 class="f-w-600">Payment Method</h6>
                                                        <p>Bank : Bank of Us</p>
                                                        <p>Card Holder : Nicholas C. Karl</p>
                                                        <p>Card Number : xxx xxxx xxxx 9546</p>
                                                        <p>Payment Method: Debit card </p>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <table class="table table-lg table-bottom-border invoice-table w-100">

                                            <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Item</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Cost</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Black watch</td>
                                                <td class="f-s-14">
                                                    <p class="text-elips mb-0">
                                                        Black watch for men
                                                    </p>
                                                </td>
                                                <td>3</td>
                                                <td>$200</td>
                                                <td>$300</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Stylist Jackets</td>
                                                <td class="f-s-14">
                                                    <p class="text-elips mb-0">
                                                        Sky modern jacket for kid
                                                    </p>
                                                </td>
                                                <td>2</td>
                                                <td>$200</td>
                                                <td>$300</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Modern Sandals</td>
                                                <td class="f-s-14">
                                                    <p class="text-elips mb-0">
                                                        Stylist Sandals for women
                                                    </p>
                                                </td>
                                                <td>1</td>
                                                <td>$200</td>
                                                <td>$150</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Purce</td>
                                                <td class="f-s-14">
                                                    <p class="text-elips mb-0">
                                                        Styling white purce for women
                                                    </p>
                                                </td>
                                                <td>5</td>
                                                <td>$2000</td>
                                                <td>$350</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Backpacks</td>
                                                <td class="f-s-14">
                                                    <p class="text-elips mb-0">
                                                        Kids Graphic Backpack
                                                    </p>
                                                </td>
                                                <td>6</td>
                                                <td>$100</td>
                                                <td>$600</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3"></td>
                                                <td colspan="3">
                                                    <table class="table mb-0">
                                                        <tbody>
                                                        <tr>
                                                            <td>Sub Total</td>
                                                            <td class="text-end">$3,250</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tax</td>
                                                            <td class="text-end">$300</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Shipping Charge</td>
                                                            <td class="text-end">$300</td>
                                                        </tr>

                                                        <tr>
                                                            <th class="border-0 pb-0">Total</th>
                                                            <th class="border-0 text-end pb-0">$3,350</th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="invoice-footer float-end mb-3">
                    <button type="button" class="btn btn-primary m-1" onclick="window.print()"><i
                            class="ti ti-printer"></i> Print</button>
                    <button type="button" class="btn btn-secondary m-1"><i class="ti ti-send"></i> Send Invoice</button>
                    <button type="button" class="btn btn-success m-1"><i class="ti ti-download"></i> Download</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Invoice end -->
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
