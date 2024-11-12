@extends('layout.master')
@section('title', 'Checkout')
@section('css')

@endsection
@section('main-content')

    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Checkout</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Checkout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="checkout-tabs-step">
                            <div class="tab checkout-current-step d-flex" data-tab="tab-1">

                                <div class="tabs-steps">
                                    <i class="ti ti-user-circle"></i>
                                </div>

                                <div class="px-2">
                                    <h6 class="mb-0">Billing Info</h6>
                                    <span class="text-secondary">Step 1 </span>
                                </div>

                            </div>
                            <div class="tab d-flex" data-tab="tab-2">
                                <div class="tabs-steps">
                                    <i class="ti ti-disc"></i>
                                </div>

                                <div class="px-2">
                                    <h6 class="mb-0"> Address </h6>
                                    <span class="text-secondary">Step 2</span>
                                </div>

                            </div>

                            <div class="tab d-flex" data-tab="tab-3">

                                <div class="tabs-steps">
                                    <i class="ti ti-user-plus"></i>
                                </div>

                                <div class="px-2">
                                    <h6 class="mb-0"> Payment </h6>
                                    <span class="text-secondary">Step 3</span>
                                </div>

                            </div>

                            <div class="tab d-flex" data-tab="tab-4">

                                <div class="tabs-steps">
                                    <i class="ti ti-currency-dollar"></i>
                                </div>
                                <div class="px-2">
                                    <h6 class="mb-0"> Review </h6>
                                    <span class="text-secondary">Step 4</span>
                                </div>

                            </div>

                            <div class="tab d-flex" data-tab="tab-5">

                                <div class="tabs-steps">
                                    <i class="ti ti-disc"></i>
                                </div>
                                <div class="px-2">
                                    <h6 class="mb-0"> Finish </h6>
                                    <span class="text-secondary">Step 5</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="card-body">
                        <div class="checkout-content-list">
                            <div id="tab-1" class="tabs-contents checkout-current-step">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label">Email address</label>
                                                <input type="email" class="form-control">
                                                <div class="form-text">We'll never share your email with anyone else.</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Contact</label>
                                                <div class="input-group">
                                                    <input class="form-control" type="text" placeholder=""
                                                           aria-label="Recipient's username"><span class="input-group-text"><i
                                                            class="fa-solid fa-phone"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Telephone</label>
                                                <input type="tel" class="form-control" value="+91 (999)-999-999"
                                                       pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="mb-3">
                                                <label class="form-label">City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3 floating-select">
                                                <label class="form-label">State</label>
                                                <select class="form-select">
                                                    <option>Choose...</option>
                                                    <option>...</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3 form-check d-flex p-0">
                                                <input type="checkbox" class="m-1 form-check-input" id="formCheck2">
                                                <label class="form-check-label" for="formCheck2">remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>

                            <div id="tab-2" class="tabs-contents">
                                <div class="row">
                                    <div class="col-12">
                                        <h5 class="tab-heading mb-3">Your Address</h5>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card shadow-none">
                                            <div class="card-body address-content">
                                                <div class="">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary"></span>
                                                        <span class="fs-6 tab-heading">Home Address</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <p class="text-muted">260 Zulma Stravenue, Wisozkton, KY 44193-0738
                                                        collins@stroman.net</p>
                                                    <p>+1 828-726-3669</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card shadow-none">
                                            <div class="card-body address-content">
                                                <div class="">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary"></span>
                                                        <span class="fs-6 tab-heading">Office Address</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <p class="text-muted">90897 Franecki Haven, West Maximo, KY 40770-5993
                                                        bjast@hotmail.com</p>
                                                    <p>+1 863-422-2979</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4">
                                        <div class="card equal-card shadow-none">
                                            <div class="card-body added-content">
                                                <a role="button" class="link-primary" data-bs-toggle="modal"
                                                   data-bs-target="#staticBackdrop">
                                                    <i class="ti ti-plus"></i> Add A New Address
                                                </a>
                                                <!-- Modal -->
                                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                                     data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                                     aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form class="app-form">
                                                                    <div class="row g-3">
                                                                        <div class="col-12">
                                                                            <label class="form-label">Address</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <label class="form-label">Address 2</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label class="form-label">City</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <label class="form-label">State</label>
                                                                            <select id="inputState" class="form-select">
                                                                                <option selected="">Choose...</option>
                                                                                <option>...</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <label class="form-label">Zip</label>
                                                                            <input type="text" class="form-control">
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <h5 class="fs-6 tab-heading mb-3">Delivery Method</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body select-content ">
                                                <div class="position-relative">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary position-absolute"></span>
                                                        <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Economy Shipping - FREE</span>
                                        <span class="d-block text-secondary">5 to 10 business days</span>
                                      </span>
                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body select-content ">
                                                <div class="position-relative">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary position-absolute"></span>
                                                        <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Priority overnight -$18.50</span>
                                        <span class="d-block text-secondary">Basd on chosen delivery date</span>
                                      </span>
                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="alert alert-border-info" role="alert">
                                            <p>
                                                <i class="ti ti-info-circle f-s-18 text-info"></i>
                                                Expected delivery data is not guaranteed, if you are ordering for an event we
                                                suggest aollwing 1 extra days.
                                            </p>
                                            <div class="text-end">
                                                <a href="" class="link-primary text-d-underline" data-bs-dismiss="alert">Don't
                                                    allow</a>
                                                <a href="" class="link-primary text-d-underline ms-2">Allow</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-3" class="tabs-contents">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card shadow-none">
                                            <div class="card-body select-content ">
                                                <div class="mb-3">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary"></span>
                                                        <span class="fs-6 tab-heading">Credit / Debit Card</span>
                                                    </label>
                                                </div>
                                                <div>
                                                    <form class="app-form">
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Cardholder Name</label>
                                                                    <input type="text" class="form-control" placeholder="Olaf">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Card Number</label>
                                                                    <input type="text" class="form-control" placeholder="xxxx-xxxx-xxxx-xxx"
                                                                           required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">Expiration Date</label>
                                                                    <input type="text" class="form-control" placeholder="pin">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label">CVC code</label>
                                                                    <input type="text" class="form-control" placeholder="xxx">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="text-end">
                                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body select-content ">
                                                <div class="position-relative">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary position-absolute"></span>
                                                        <span class="d-flex align-items-center mg-s-25">
                                      <img src="{{asset('../assets/images/checkbox-radio/logo1.png')}}" class="w-35 h-35" alt="">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Visa Card</span>
                                        <span class="d-block text-secondary">Select Visa card</span>
                                      </span>
                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="card shadow-none">
                                            <div class="card-body select-content ">
                                                <div class="position-relative">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary position-absolute"></span>
                                                        <span class="d-flex align-items-center mg-s-25">
                                      <img src="{{asset('../assets/images/checkbox-radio/logo3.png')}}" class="w-35 h-35" alt="">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Paypal</span>
                                        <span class="d-block text-secondary">Select PayPal</span>
                                      </span>
                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card shadow-none">
                                            <div class="card-body select-content ">
                                                <div class="position-relative">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary position-absolute"></span>
                                                        <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Other UPI Apps</span>
                                        <span class="d-block text-secondary">Select Other UPI Apps for payment</span>
                                      </span>
                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="card shadow-none">
                                            <div class="card-body select-content ">
                                                <div class="position-relative">
                                                    <label class="check-box">
                                                        <input type="radio" name="radio-group1">
                                                        <span class="radiomark outline-secondary position-absolute"></span>
                                                        <span class="d-flex align-items-center mg-s-25">
                                      <span class="ms-2">
                                        <span class="fs-6 tab-heading">Cash on Delivery/Pay on Delivery</span>
                                        <span class="d-block text-secondary">Cash,UPI and Cards accepted.</span>
                                      </span>
                                    </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-4" class="tabs-contents">
                                <div class="row">
                                    <div class="col-md-3 col-xl-4">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="{{asset('../assets/images/ecommerce/23.jpg')}}" alt="image" class="img-fluid b-r-20 mb-2">
                                            </div>
                                            <div class="col-6">
                                                <img src="{{asset('../assets/images/ecommerce/25.jpg')}}" alt="image" class="img-fluid b-r-20 mb-2">
                                            </div>
                                            <div class="col-6">
                                                <img src="{{asset('../assets/images/ecommerce/13.jpg')}}" alt="image" class="img-fluid b-r-20 mb-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-xl-8">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <h6 class="tab-heading mb-0">Estimated Delivery Date : 27 Dec 2024 </h6>
                                                    <p class="text-secondary">Items dispatched by MQ Store</p>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div
                                                    class="alert alert-light-border-success d-flex align-items-center justify-content-between"
                                                    role="alert">
                                                    <p class="mb-0">
                                                        <i class="ti ti-gift f-s-18 me-2"></i>Gift wrap and personalized message on card,
                                                        Only for $10.50 USD
                                                    </p>
                                                    <i class="ti ti-x" data-bs-dismiss="alert"></i>
                                                </div>
                                            </div>

                                            <div class="col-12">

                                                <div>
                                                    <h6 class="tab-heading">Product details</h6>
                                                    <div
                                                        class="accordion app-accordion  accordion-flush accordion-secondary app-accordion-plus"
                                                        id="nestingExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#nestingcollapseOne" aria-expanded="true">
                                                                    Sky modern jacket for kid
                                                                </button>
                                                            </h2>
                                                            <div id="nestingcollapseOne" class="accordion-collapse collapse show"
                                                                 data-bs-parent="#nestingExample">
                                                                <div class="accordion-body">
                                                                    <p><span class="text-secondary f-w-500">size</span> : medium</p>
                                                                    <p><span class="text-secondary f-w-500">color</span> : Sky</p>
                                                                    <p><span class="text-secondary f-w-500">Items</span> : 2</p>
                                                                    <p><span class="text-secondary f-w-500">Rating</span> : 3+ </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#nestingcollapseTwo"
                                                                        aria-expanded="false">
                                                                    Trendy & stylist shoes
                                                                </button>
                                                            </h2>
                                                            <div id="nestingcollapseTwo" class="accordion-collapse collapse"
                                                                 data-bs-parent="#nestingExample">
                                                                <div class="accordion-body">
                                                                    <p><span class="text-secondary f-w-500">color</span> : White</p>
                                                                    <p><span class="text-secondary f-w-500">Items</span> : 2 </p>
                                                                    <p><span class="text-secondary f-w-500">Rating</span> : 4+ </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#nestingcollapseThree"
                                                                        aria-expanded="false">
                                                                    Designer watch
                                                                </button>
                                                            </h2>
                                                            <div id="nestingcollapseThree" class="accordion-collapse collapse"
                                                                 data-bs-parent="#nestingExample">
                                                                <div class="accordion-body">
                                                                    <p><span class="text-secondary f-w-500">size</span> : Medium</p>
                                                                    <p><span class="text-secondary f-w-500">color</span> : Golden</p>
                                                                    <p><span class="text-secondary f-w-500">Items</span> : 1 </p>
                                                                    <p><span class="text-secondary f-w-500">Rating</span> : 5+ </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="tab-5" class="tabs-contents">
                                <div class="text-center">
                                    <div class="mb-3">
                                        <img src="{{asset('../assets/images/form/done.gif')}}" alt="">
                                    </div>
                                    <h5 class="text-success"> Your Order #7AD6728 Placed, Thank you!</h5>
                                    <p>Confirmation will be sent to Your Email</p>
                                </div>
                                <div class="app-divider-v dashed"></div>
                                <div>

                                    <div class="row">
                                        <div class="col-12">
                                            <h6 class="tab-heading">In the unlikely case of items being unavailable, what would you
                                                prefer ?</h6>
                                        </div>
                                        <div class="col-md-6 col-xl-4 mt-3">
                                            <div class="card shadow-none">
                                                <div class="card-body address-content">
                                                    <div class="">
                                                        <label class="check-box">
                                                            <input type="radio" name="radio-group1">
                                                            <span class="radiomark outline-secondary"></span>
                                                            <span class="fs-6 tab-heading">Select 1</span>
                                                        </label>
                                                    </div>
                                                    <p>Call Help Center for any substitues</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4 mt-3">
                                            <div class="card equal-card shadow-none">
                                                <div class="card-body address-content">
                                                    <div class="">
                                                        <label class="check-box">
                                                            <input type="radio" name="radio-group1">
                                                            <span class="radiomark outline-secondary"></span>
                                                            <span class="fs-6 tab-heading">Select 2</span>
                                                        </label>
                                                    </div>
                                                    <p>Let us pick Your substitues</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4 mt-3">
                                            <div class="card shadow-none">
                                                <div class="card-body address-content">
                                                    <div class="">
                                                        <label class="check-box">
                                                            <input type="radio" name="radio-group1">
                                                            <span class="radiomark outline-secondary"></span>
                                                            <span class="fs-6 tab-heading">Select 3</span>
                                                        </label>
                                                    </div>
                                                    <p>I do not need any substitues</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <div class="checkout-cart-box">
                            <div class="cart-images d-flex-center flex-shrink-0">
                                <a href="#"><img src="{{asset('../assets/images/ecommerce/23.jpg')}}" alt="" class="w-80"></a>
                            </div>
                            <div class="ms-2 flex-grow-1">
                                <h6>jacket -<span>(sky &amp; stylist )</span></h6>
                                <div>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                </div>
                                <p><span>size</span> : medium</p>
                                <p><span>Items</span> : 2 </p>
                            </div>
                            <div class="cart-price-box">
                                <a href="#">
                                    <i class="ti ti-x text-secondary"></i>
                                </a>
                                <h5>$500</h5>
                            </div>
                        </div>

                        <div class="checkout-cart-box">
                            <div class="cart-images d-flex-center flex-shrink-0">
                                <a href="#"><img src="{{asset('../assets/images/ecommerce/25.jpg')}}" alt="" class="w-80"></a>
                            </div>
                            <div class="ms-2 flex-grow-1">
                                <h6>Shoes-<span>( Trendy &amp; stylist shoes)</span></h6>
                                <div>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled  f-s-14 star-filled"></i>
                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                </div>
                                <p><span>size</span> : 33</p>
                                <p><span>Items</span> : 1 </p>
                            </div>
                            <div class="cart-price-box">
                                <a href="#">
                                    <i class="ti ti-x text-secondary"></i>
                                </a>
                                <h5>$350</h5>
                            </div>
                        </div>

                        <div class="checkout-cart-box">
                            <div class="cart-images d-flex-center flex-shrink-0">
                                <a href="#"><img src="{{asset('../assets/images/ecommerce/13.jpg')}}" alt="" class="w-80"></a>
                            </div>
                            <div class="ms-2 flex-grow-1">
                                <h6>Watch-<span>(Designer golden watch)</span></h6>
                                <div>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                </div>
                                <p><span>Color</span> : Golden</p>
                                <p><span>Items</span> : 2 </p>
                            </div>
                            <div class="cart-price-box">
                                <a href="#">
                                    <i class="ti ti-x text-secondary"></i>
                                </a>
                                <h5>$890</h5>
                            </div>
                        </div>

                        <div class="pricing-details">
                            <div class="mb-3">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Enter promo code / Gift Certificate">
                                    <span class="input-group-text text-bg-dark"><i class="ti ti-gift"></i></span>
                                </div>
                            </div>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col" class="text-end">$2,550</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Estimated Tax</td>
                                    <td class="text-end">$5.00</td>
                                </tr>
                                <tr>
                                    <td>Estimated Shipping &amp; Handling</td>
                                    <td class="text-end">$10.00</td>
                                </tr>
                                <tr>
                                    <td>Delivery Charges</td>
                                    <td class="text-end">-</td>
                                </tr>
                                <tr>
                                    <td>Coupon Discount</td>
                                    <td class="text-end">
                                        <span class="badge text-light-success">Apply</span>
                                    </td>
                                </tr>
                                </tbody>

                            </table>
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th>Total</th>
                                    <th class="text-end">$2000</th>
                                </tr>
                                </thead>
                            </table>
                            <a href="{{route('cart')}}" class="btn btn-primary w-100" id="next">Buy Order</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- checkout js -->
<script src="{{asset('assets/js/checkout.js')}}"></script>
@endsection
