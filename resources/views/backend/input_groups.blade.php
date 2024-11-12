@extends('layout.master')
@section('title', 'Input Groups')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Input Group</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Input Group</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Input Groups start -->
        <div class="row">
            <!-- Basic Input Groups start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Input Groups</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label">Left Addon</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text b-r-left text-bg-primary" id="basic-addon1">@</span>
                                        <input type="text" class="form-control b-r-right" placeholder="Username" aria-label="Username"
                                               aria-describedby="basic-addon1">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Right Addon</label>
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control b-r-left" placeholder="Recipient's username"
                                               aria-label="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-text b-r-right text-bg-secondary" id="basic-addon2">@example.com</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Joint Addon</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text b-r-left text-bg-primary">$</span>
                                        <span class="input-group-text b-r-0 text-bg-primary">0.00</span>
                                        <input type="text" class="form-control b-r-right"
                                               aria-label="Dollar amount (with dot and two decimal places)">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Left & Right Addon</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text b-r-left text-bg-warning">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text b-r-right text-bg-warning">.00</span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Solid style</label>
                                    <div class="input-group flex-nowrap mb-3">
                                        <span class="input-group-text b-r-left text-bg-danger" id="addon-wrapping1">@</span>
                                        <input type="text" class="form-control b-r-right" placeholder="Email" aria-label="Email"
                                               aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Square style</label>
                                    <div class="input-group flex-nowrap mb-3">
                                        <span class="input-group-text b-r-left text-bg-secondary" id="addon-wrapping2">+</span>
                                        <input type="text" class="form-control b-r-right" placeholder="Email" aria-label="Email"
                                               aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Raise style</label>
                                    <div class="input-group flex-nowrap mb-3">
                                        <span class="input-group-text b-r-left text-bg-primary" id="addon-wrapping">#</span>
                                        <input type="text" class="form-control b-r-right" placeholder="Email" aria-label="Email"
                                               aria-describedby="addon-wrapping">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Left & Right Addon</label>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text bg-dark h-45 w-45 d-flex-center b-r-50">$</span>
                                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-text bg-dark h-45 w-45 d-flex-center b-r-50">.00</span>
                                    </div>
                                </div>
                                <div class="col-12"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Input groups</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row ">
                                <div class="col-12">
                                    <form>
                                        <div class="mb-3">
                                            <label class="form-label">Left Addon</label>
                                            <div class="input-group ">
                                <span class="input-group-text b-r-left bg-light-primary b-1-primary"><i
                                        class="fa-solid fa-pencil"></i></span>
                                                <input class="form-control" type="text" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Right Addon</label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Recipient's username"
                                                       aria-label="Recipient's username">
                                                <span class="input-group-text bg-light-secondary b-1-secondary"><i class="fa-solid fa-phone"></i></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Left spinner</label>
                                            <div class="input-group">
                                <span class="input-group-text b-r-left bg-light-success b-1-success">
                                  <span class="spinner-border spinner-border-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </span>
                                </span>
                                                <input class="form-control" type="text" placeholder="Loading...">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Right spinner</label>
                                            <div class="input-group">
                                                <input class="form-control" type="text" placeholder="Loading..."
                                                       aria-label="Recipient's username">
                                                <span class="input-group-text b-r-left bg-light-warning b-1-warning">
                                  <span class="spinner-border text-warning spinner-border-sm" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                  </span>
                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Joint Addon</label>
                                            <div class="input-group">
                                                <span class="input-group-text b-r-left bg-light-danger b-1-danger"><i class="fa-solid fa-link-slash"></i></span>
                                                <span class="input-group-text bg-light-danger b-1-danger">0.00 </span>
                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Left &amp; Right Addon</label>
                                            <div class="input-group mb-3">
                                <span class="input-group-text b-r-left bg-light-dark   b-1-dark ">
                                  <i class="fa-solid fa-magnifying-glass-minus"></i>
                                </span>
                                                <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-text bg-light-dark  b-1-dark ">
                                  <i class="fa-solid fa-magnifying-glass-plus"></i>
                                </span>
                                            </div>
                                        </div>
                                        <div class="mb-3 input-group-solid">
                                            <label class="form-label">Solid style</label>
                                            <div class="input-group"><span class="input-group-text b-r-left bg-light-primary b-1-primary"><i
                                                        class="fa-solid fa-users"></i></span>
                                                <input class="form-control" type="text" placeholder="999999">
                                            </div>
                                        </div>
                                        <div class="mb-3 input-group-square">
                                            <label class="form-label">Flat style</label>
                                            <div class="input-group"><span class="input-group-text b-r-left bg-light-secondary b-1-secondary"><i
                                                        class="fa-solid fa-credit-card"></i></span>
                                                <input class="form-control" type="text" placeholder="">
                                            </div>
                                        </div>
                                        <div class="mb-3 input-group-square">
                                            <label class="form-label">Raise style</label>
                                            <div class="input-group"><span class="input-group-text b-r-left bg-light-warning b-1-warning"><i
                                                        class="fa-solid fa-download"></i></span>
                                                <input class="form-control input-group-air" type="text"
                                                       placeholder="https://www.example.com">
                                            </div>
                                        </div>
                                        <div>
                                            <label class="form-label ">Left &amp; Right Addon</label>
                                            <div class="input-group pill-input-group"><span
                                                    class="input-group-text b-r-left bg-light-danger b-1-danger"><i class="fa-solid fa-paste"></i></span>
                                                <input class="form-control" type="text"
                                                       aria-label="Amount (to the nearest dollar)"><span
                                                    class="input-group-text bg-light-danger b-1-danger"><i
                                                        class="fa-solid fa-magnifying-glass"></i></span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Input Groups end -->
            <!-- Multiple addons start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Multiple addons</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="input-group mb-3">
                                <span class="input-group-text b-r-left bg-warning">$</span>
                                <span class="input-group-text bg-warning">0.00</span>
                                <input type="text" class="form-control"
                                       aria-label="Dollar amount (with dot and two decimal places)">
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control b-r-left"
                                       aria-label="Dollar amount (with dot and two decimal places)">
                                <span class="input-group-text bg-danger">$</span>
                                <span class="input-group-text b-r-right bg-danger">0.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Multiple addons end -->
            <!-- Checkboxes and radios start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Checkboxes and radios</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="input-group mb-3">
                                <div class="input-group-text b-r-left bg-light-primary b-1-primary">
                                    <input class="form-check-input mt-0" type="checkbox" value=""
                                           aria-label="Checkbox for following text input">
                                </div>
                                <input type="text" class="form-control b-r-right" aria-label="Text input with checkbox">
                            </div>

                            <div class="input-group">
                                <div class="input-group-text b-r-left bg-light-primary b-1-primary">
                                    <input class="form-check-input mt-0" type="radio" value=""
                                           aria-label="Radio button for following text input">
                                </div>
                                <input type="text" class="form-control b-r-right" aria-label="Text input with radio button">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Checkboxes and radios end -->
            <!-- Sizing start  -->
            <div class="col-md-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Sizing</h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group input-group-sm mb-3 m-t-30">
                            <span class="input-group-text text-light-primary b-r-left" id="inputGroup-sizing-sm">Small</span>
                            <input type="text" class="form-control b-r-right" aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-sm">
                        </div>

                        <div class="input-group mb-3 m-t-30">
                            <span class="input-group-text text-light-secondary b-r-left" id="inputGroup-sizing-default">Default</span>
                            <input type="text" class="form-control b-r-right" aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-default">
                        </div>

                        <div class="input-group input-group-lg m-t-30">
                            <span class="input-group-text text-light-success b-r-left" id="inputGroup-sizing-lg">Large</span>
                            <input type="text" class="form-control b-r-right" aria-label="Sizing example input"
                                   aria-describedby="inputGroup-sizing-lg">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sizing end  -->
            <!-- Button addons start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Button addons</h5>
                    </div>
                    <div class="card-body">
                        <div class="input-group mb-3">
                            <button class="btn btn-outline-primary b-r-left" type="button" id="button-addon1">Button</button>
                            <input type="text" class="form-control b-r-right" placeholder="" aria-label="Example text with button addon"
                                   aria-describedby="button-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control b-r-left" placeholder="Recipient's username"
                                   aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary b-r-right" type="button" id="button-addon2">Button</button>
                        </div>

                        <div class="input-group mb-3">
                            <button class="btn btn-outline-success b-r-left" type="button">Button</button>
                            <button class="btn btn-outline-success" type="button">Button</button>
                            <input type="text" class="form-control b-r-right  " placeholder=""
                                   aria-label="Example text with two button addons">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control b-r-left" placeholder="Recipient's username"
                                   aria-label="Recipient's username with two button addons">
                            <button class="btn btn-outline-danger" type="button">Button</button>
                            <button class="btn btn-outline-danger b-r-right" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Button addons end -->
        </div>
        <!-- Input Groups end -->

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
