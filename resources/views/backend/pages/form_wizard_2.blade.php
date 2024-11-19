@extends('layout.master')
@section('title', 'Form Wizard 2')
@section('css')
    <!-- flatpickr css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datepikar/flatpickr.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Form wizard 2</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-hand-heart f-s-16"></i> Ready to use
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Form wizard 2</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- form wizards 2 start -->
        <div class="row">
            <!-- Checkout Wizard start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Checkout Wizard</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-xl-3 mb-3">
                                <div class="checkout-tab">
                                    <div class="tabs current-checkout-tab" data-tab="tabs1">
                                        <div class="d-flex align-items-center">
                                            <div class="steps ms-2">
                                                <i class="ti ti-garden-cart"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Cart</h5>
                                                <span>Step 1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs" data-tab="tabs2">
                                        <div class="d-flex align-items-center">
                                            <div class="steps ms-2">
                                                <i class="ti ti-address-book"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Address </h5>
                                                <span>Step 2</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs" data-tab="tabs3">
                                        <div class="d-flex align-items-center">
                                            <div class="steps ms-2">
                                                <i class="ti ti-currency-dollar"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Payment</h5>
                                                <span>Step 3 </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs" data-tab="tabs4">
                                        <div class="d-flex align-items-center">
                                            <div class="steps ms-2">
                                                <i class="ti ti-checkbox"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Offers</h5>
                                                <span>Step 4</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs" data-tab="tabs5">
                                        <div class="d-flex align-items-center">
                                            <div class="steps ms-2">
                                                <i class="ti ti-align-box-left-middle"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Review </h5>
                                                <span>Step 5</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs" data-tab="tabs6">
                                        <div class="d-flex align-items-center">
                                            <div class="steps ms-2">
                                                <i class="ti ti-checkup-list"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Completed</h5>
                                                <span>Step 5</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 col-xl-6">
                                <div class="tab-contentlist">
                                    <div id="tabs1" class="tab-checkout-content current-checkout-tab">
                                        <div class="cart-box">
                                            <div class="bg-light-secondary rounded">
                                                <a href="#"><img src="{{asset('../assets/images/ecommerce/23.jpg')}}" alt="" class="w-80 "></a>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6>Sky & stylist  - <span>jacket </span></h6>
                                                <p><span>size</span>  : medium</p>
                                                <p><span>color</span> : Sky</p>
                                                <p><span>Items</span> : 2 </p>
                                            </div>
                                            <div class="cart-price-box">
                                                <a href="#">
                                                    <i class="ti ti-x text-secondary"></i>
                                                </a>
                                                <h5>$500</h5>
                                                <div class="mb-3">
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                                </div>
                                                <div class="link">
                                                    <a href="#">Move to Favorites</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-box">
                                            <div class="bg-light-secondary rounded">
                                                <a href="#"><img src="{{asset('../assets/images/ecommerce/25.jpg')}}" alt=""
                                                                 class="w-80  rounded"></a>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6>Trendy & stylist shoes - <span>Shoes </span> </h6>
                                                <p><span>size</span>  : large</p>
                                                <p><span>color</span> : Light</p>
                                                <p><span>Items</span> : 2 </p>
                                            </div>
                                            <div class="cart-price-box">
                                                <a href="#">
                                                    <i class="ti ti-x text-secondary"></i>
                                                </a>
                                                <h5>$850</h5>
                                                <div class="mb-3">
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                                </div>
                                                <div class="link">
                                                    <a href="#">Move to Favorites</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cart-box">
                                            <div class="bg-light-secondary rounded">
                                                <a href="#"><img src="{{asset('../assets/images/ecommerce/13.jpg')}}" alt=""
                                                                 class="w-80 rounded"></a>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6>Designer golden watch - <span>Watch</span></h6>
                                                <p><span>size</span>  : large</p>
                                                <p><span>color</span> : Light</p>
                                                <p><span>Items</span> : 1 </p>
                                            </div>
                                            <div class="cart-price-box">
                                                <a href="#">
                                                    <i class="ti ti-x text-secondary"></i>
                                                </a>
                                                <h5>$350</h5>
                                                <div class="mb-3">
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled text-warning f-s-14"></i>
                                                    <i class="ti ti-star-filled  f-s-14  star-filled"></i>
                                                </div>
                                                <div class="link">
                                                    <a href="#">Move to Favorites</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tabs2" class="tab-checkout-content">
                                        <div class="row">
                                            <div class="col-12">
                                                <h5 class="tab-heading mb-3">Your Address</h5>
                                            </div>
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                            <div class="col-md-6">
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
                                                                                        <option selected>Choose...</option>
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
                                            <span class="d-block text-secondary">Based on chosen delivery date</span>
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
                                                        suggest allowing 1 extra days.
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

                                    <div id="tabs3" class="tab-checkout-content">
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
                                                                            <input type="text" class="form-control" placeholder="xxxx-xxxx-xxxx-xxx" required="">
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
                                          <img src="{{asset('../assets/images/checkbox-radio/logo1.png')}}" class="w-30 h-30" alt="">
                                          <span class="ms-2">
                                            <span class="fs-6 tab-heading">Visa Card</span>
                                            <span class="d-block text-secondary">Select Visa</span>
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
                                          <img src="{{asset('../assets/images/checkbox-radio/logo3.png')}}" class="w-30 h-30" alt="">
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

                                    <div id="tabs4" class="tab-checkout-content">
                                        <div class="row offer-content-box">
                                            <div class="col-md-6 col-xxl-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <h6>Bank Offers</h6>
                                                            <p>Upto $480 discount on credit card .</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="#" class="link-primary text-d-underline">More Offers</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xxl-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="circle-ribbon circle-right ribbon-primary w-35 h-35">
                                                            %
                                                        </div>
                                                        <div class="mb-3">
                                                            <h6>Partner Offers</h6>
                                                            <p>Get GST invoice and save to 15% on..</p>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="#" class="link-primary text-d-underline">More Offers</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xxl-4">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="mb-3">
                                                            <h6>Other offers</h6>
                                                            <p>Buy 2 Bags save up to 5% to 10% . </p>
                                                        </div>
                                                        <div class="text-end">
                                                            <a href="#" class="link-primary text-d-underline">More Offers</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <ul class="list-group b-r-0 list-contact-box offer-list-group mb-3">
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center">
                                                            <input class="form-check-input flex-shrink-0" type="checkbox" id="offerCheck">
                                                            <div class="text-truncate ms-2">
                                                                <h6 class="mb-0">Offer 1</h6>
                                                                <p class="text-secondary mb-0">
                                                                    12% off on Visa card EMI Transactions,up to $800 on orders of $1500 -
                                                                    <a href="#" class="link-secondary text-d-underline">See Details</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center">
                                                            <input class="form-check-input flex-shrink-0" type="checkbox" id="offerCheck1">
                                                            <div class="text-truncate ms-2">
                                                                <h6 class="mb-0">Offer 2</h6>
                                                                <p class="text-secondary mb-0">
                                                                    Additional INR 250 Discount on OneCard Credit Card 9 month.. -
                                                                    <a href="#" class="link-secondary text-d-underline">See Details</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="d-flex align-items-center">
                                                            <input class="form-check-input flex-shrink-0" type="checkbox" id="offerCheck2">
                                                            <div class="text-truncate ms-2">
                                                                <h6 class="mb-0">Offer 3</h6>
                                                                <p class="text-secondary mb-0">
                                                                    Get extra 20% off (price inclusive of cashback/coupon) -
                                                                    <a href="#" class="link-secondary text-d-underline">See Details</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
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
                                        </div>
                                    </div>

                                    <div id="tabs5" class="tab-checkout-content">
                                        <div class="row">
                                            <div class="col-12 mb-3">
                                                <div class="row">
                                                    <div class="col-6 col-sm-2">
                                                        <img src="{{asset('../assets/images/ecommerce/23.jpg')}}" alt="product-img" class="img-fluid bg-light-dark b-r-10">
                                                    </div>
                                                    <div class="col-6 col-sm-2">
                                                        <img src="{{asset('../assets/images/ecommerce/25.jpg')}}" alt="product-img" class="img-fluid bg-light-dark b-r-10">
                                                    </div>
                                                    <div class="col-6 col-sm-2 mt-3 mt-sm-0">
                                                        <img src="{{asset('../assets/images/ecommerce/13.jpg')}}" alt="product-img" class="img-fluid bg-light-dark b-r-10">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <h6 class="tab-heading mb-0">Estimated Delivery Date : 27 Dec 2024 </h6>
                                                    <p class="text-secondary">Items dispatched by MQ Store</p>
                                                </div>
                                                <div>
                                                    <h6 class="tab-heading">Product details</h6>
                                                    <div
                                                        class="accordion app-accordion  accordion-flush accordion-secondary app-accordion-plus"
                                                        id="nestingExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                                        data-bs-target="#nestingcollapseOne" aria-expanded="true"
                                                                        aria-controls="collapseOne">
                                                                    Tom & Jerry Printed T-Shirt
                                                                </button>
                                                            </h2>
                                                            <div id="nestingcollapseOne" class="accordion-collapse collapse show"
                                                                 data-bs-parent="#nestingExample">
                                                                <div class="accordion-body">
                                                                    <p><span class="text-secondary f-w-500">size</span> : medium</p>
                                                                    <p><span class="text-secondary f-w-500">color</span> : Green</p>
                                                                    <p><span class="text-secondary f-w-500">Items</span> : 2</p>
                                                                    <p><span class="text-secondary f-w-500">Rating</span> : 3+ </p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header">
                                                                <button class="accordion-button collapsed" type="button"
                                                                        data-bs-toggle="collapse" data-bs-target="#nestingcollapseTwo"
                                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                                    Swatch Watch Irony
                                                                </button>
                                                            </h2>
                                                            <div id="nestingcollapseTwo" class="accordion-collapse collapse"
                                                                 data-bs-parent="#nestingExample">
                                                                <div class="accordion-body">
                                                                    <p><span class="text-secondary f-w-500">color</span> : Dark</p>
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
                                                                    Nike Air Max 1
                                                                </button>
                                                            </h2>
                                                            <div id="nestingcollapseThree" class="accordion-collapse collapse"
                                                                 data-bs-parent="#nestingExample">
                                                                <div class="accordion-body">
                                                                    <p><span class="text-secondary f-w-500">size</span> : large</p>
                                                                    <p><span class="text-secondary f-w-500">color</span> : White</p>
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

                                    <div id="tabs6" class="tab-checkout-content">
                                        <div class="text-center">
                                            <div class="mb-3">
                                                <img src="{{asset('../assets/images/form/done.gif')}}" alt="">
                                <!-- <img src="{{asset('../assets/images/form/done.png')}}" alt=""> -->
                                            </div>
                                            <h5 class="text-success"> Your Order #7AD6728 Placed, Thank you!</h5>
                                            <p>Confirmation will be sent to Your Email</p>
                                        </div>
                                        <div class="app-divider-v dashed"></div>
                                        <div>

                                            <div class="row">
                                                <div class="col-12">
                                                    <h6 class="tab-heading">In the unlikely case of items being unavailable, what would you prefer ?</h6>
                                                </div>
                                                <div class="col-md-6 col-xl-4 mt-4">
                                                    <div class="card shadow-none">
                                                        <div class="card-body address-content">
                                                            <div class="">
                                                                <label class="check-box">
                                                                    <input type="radio" name="radio-group1">
                                                                    <span class="radiomark outline-secondary"></span>
                                                                    <span class="fs-6 tab-heading">Select 1</span>
                                                                </label>
                                                            </div>
                                                            <p>Call Help Center for any substitutes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 mt-4">
                                                    <div class="card equal-card shadow-none">
                                                        <div class="card-body address-content">
                                                            <div class="">
                                                                <label class="check-box">
                                                                    <input type="radio" name="radio-group1">
                                                                    <span class="radiomark outline-secondary"></span>
                                                                    <span class="fs-6 tab-heading">Select 2</span>
                                                                </label>
                                                            </div>
                                                            <p>Let us pick Your substitutes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-4 mt-4">
                                                    <div class="card shadow-none">
                                                        <div class="card-body address-content">
                                                            <div class="">
                                                                <label class="check-box">
                                                                    <input type="radio" name="radio-group1">
                                                                    <span class="radiomark outline-secondary"></span>
                                                                    <span class="fs-6 tab-heading">Select 3</span>
                                                                </label>
                                                            </div>
                                                            <p>I do not need any substitutes</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Order Details</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="pricing-details">
                                            <div class="mb-3">
                                                <input type="text" class="promo" placeholder="Enter promo code / Gift Certificate">
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
                                                    <td class="border-0 pb-0">Coupon Discount</td>
                                                    <td class="border-0 text-end pb-0">
                                                        <span class="badge text-light-success">Apply</span>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <th scope="col">Total</th>
                                                    <th scope="col" class="text-end">$2000</th>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <button class="btn btn-primary w-100" id="next">Buy Order</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Checkout Wizard end -->

            <!-- Financial Wizard start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Financial Wizard</h5>
                    </div>
                    <div class="card-body">
                        <div class="tabs-step">
                            <div class="tab current d-flex" data-tab="tab-1">

                                <div class="step">
                                    <i class="ti ti-user-circle"></i>
                                </div>

                                <div class="px-2">
                                    <h6 class="mb-0">About</h6>
                                    <span class="text-secondary">Step 1 </span>
                                </div>

                            </div>
                            <div class="tab d-flex" data-tab="tab-2">
                                <div class="step">
                                    <i class="ti ti-disc"></i>
                                </div>

                                <div class="px-2">
                                    <h6 class="mb-0"> Account </h6>
                                    <span class="text-secondary">Step 2</span>
                                </div>

                            </div>

                            <div class="tab d-flex" data-tab="tab-3">

                                <div class="step">
                                    <i class="ti ti-user-plus"></i>
                                </div>

                                <div class="px-2">
                                    <h6 class="mb-0"> Ownership </h6>
                                    <span class="text-secondary">Step 3</span>
                                </div>

                            </div>

                            <div class="tab d-flex" data-tab="tab-4">

                                <div class="step">
                                    <i class="ti ti-currency-dollar"></i>
                                </div>
                                <div class="px-2">
                                    <h6 class="mb-0"> Financing </h6>
                                    <span class="text-secondary">Step 4</span>
                                </div>

                            </div>

                            <div class="tab d-flex" data-tab="tab-5">
                                <div class="step">
                                    <i class="ti ti-disc"></i>
                                </div>
                                <div class="px-2">
                                    <h6 class="mb-0"> Finish </h6>
                                    <span class="text-secondary">Step 5</span>
                                </div>

                            </div>
                        </div>

                        <div class="my-3">
                            <div class="tab-contents-list">

                                <div id="tab-1" class="tab-contents current">
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
                                            <div class="col-md-6 col-xl-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Date of Birth</label>
                                                    <input type="date" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" placeholder="Enter Your Email" required="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-xl-4">
                                                <div class="mb-3">
                                                    <label class="form-label">Contact</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text b-r-left">+91</span>
                                                        <input type="text" class="form-control b-r-right" placeholder="Enter Your Contact" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Address</label>
                                                    <textarea class="form-control" rows="3" placeholder="Enter Your Massage"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div id="tab-2" class="tab-contents">
                                    <h6 class="tab-heading">Do you have an account?</h6>
                                    <form class="app-form">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input type="radio" name="radio-group1">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                          <span class="ms-2">
                                            <span class="fs-6">I already have an account.</span>
                                          </span>
                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xl-4 ">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input type="radio" name="radio-group1">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                          <span class="ms-2">
                                            <span class="fs-6"> I'm newbie</span>
                                          </span>
                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">password*</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Confirm Password*</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-primary">Sign in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div id="tab-3" class="tab-contents">
                                    <form class="app-form">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input type="radio" name="radio-group1">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                          <span class="ms-2">
                                            <img src="{{asset('../assets/images/form/15.png')}}" alt="">
                                            <span class="fs-6 tab-heading"> Manager</span>
                                          </span>
                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input type="radio" name="radio-group1">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                          <span class="ms-2">
                                            <img src="{{asset('../assets/images/form/13.png')}}" alt="">
                                            <span class="fs-6 tab-heading"> Employee</span>
                                          </span>
                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="card shadow-none">
                                                    <div class="card-body select-content ">
                                                        <div class="position-relative">
                                                            <label class="check-box">
                                                                <input type="radio" name="radio-group1">
                                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                                <span class="d-flex align-items-center mg-s-25">
                                          <span class="ms-2">
                                            <img src="{{asset('../assets/images/form/14.png')}}" alt="">
                                            <span class="fs-6 tab-heading"> director</span>
                                          </span>
                                        </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">password*</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>

                                <div id="tab-4" class="tab-contents">
                                    <div class="custome-radio-list">
                                        <div class="row">
                                            <div class="col-md-6 col-xl-4">
                                                <div class="card shadow-none">
                                                    <div class="card-body address-content">
                                                        <div class="">
                                                            <label class="check-box">
                                                                <input type="radio" name="radio-group1">
                                                                <span class="radiomark outline-secondary"></span>
                                                            </label>
                                                        </div>
                                                        <div class="text-center">
                                                            <img src="{{asset('../assets/images/form/16.png')}}" alt="">
                                                            <h6 class="tab-heading">Marketing</h6>
                                                            <p class="text-muted">Identifying a company’s target market.</p>
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
                                                            </label>
                                                        </div>
                                                        <div class="text-center">
                                                            <img src="{{asset('../assets/images/form/17.png')}}" alt="">
                                                            <h6 class="tab-heading">Finance</h6>
                                                            <p class="text-muted">Researching the business’s target market and customer base.</p>
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
                                                            </label>
                                                        </div>
                                                        <div class="text-center">
                                                            <img src="{{asset('../assets/images/form/18.png')}}" alt="">
                                                            <h6 class="tab-heading">IT Support</h6>
                                                            <p class="text-muted">Creating digital and/or print content to generate brand.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h6 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                        aria-controls="flush-collapseOne">
                                                    Buy Inventory
                                                </button>
                                            </h6>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="custome-radio-list">
                                                        <div class="row">
                                                            <div class="col-md-6 col-xl-4">
                                                                <div class="card shadow-none">
                                                                    <div class="card-body address-content">
                                                                        <div class="">
                                                                            <label class="check-box">
                                                                                <input type="radio" name="radio-group1">
                                                                                <span class="radiomark outline-secondary"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <img src="{{asset('../assets/images/form/yes.png')}}" alt="">
                                                                            <p>YES</p>
                                                                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                                                                            </label>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <img src="{{asset('../assets/images/form/no.png')}}" alt="">
                                                                            <p>NO</p>
                                                                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h6 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                                        aria-controls="flush-collapseTwo">
                                                    Do you have existing business financing?
                                                </button>
                                            </h6>
                                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <div class="custome-radio-list">
                                                        <div class="row">
                                                            <div class="col-md-6 col-xl-4">
                                                                <div class="card shadow-none">
                                                                    <div class="card-body address-content">
                                                                        <div class="">
                                                                            <label class="check-box">
                                                                                <input type="radio" name="radio-group1">
                                                                                <span class="radiomark outline-secondary"></span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <img src="{{asset('../assets/images/form/yes.png')}}" alt="">
                                                                            <p>YES</p>
                                                                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
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
                                                                            </label>
                                                                        </div>
                                                                        <div class="text-center">
                                                                            <img src="{{asset('../assets/images/form/no.png')}}" alt="">
                                                                            <p>NO</p>
                                                                            <p class="text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h6 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                                        aria-controls="flush-collapseThree">
                                                    Existing Balance
                                                </button>
                                            </h6>
                                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <form class="app-form">
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label">Business</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="mb-3 row">
                                                            <label class="col-sm-2 col-form-label">Current Balance</label>
                                                            <div class="col-sm-10">
                                                                <div class="input-group"><span class="input-group-text text-light-info"><i
                                                                            class="fa-solid fa-credit-card"></i></span>
                                                                    <input class="form-control" type="text" placeholder="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab-5" class="tab-contents">
                                    <div class="completed-contents">
                                        <div class="completbox text-center">
                                            <img src="{{asset('../assets/images/form/done.png')}}" alt="">
                                            <h6 class="mb-0">Thank You !</h6>
                                            <p> your booking is completed</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- Financial Wizard end -->

            <!-- Booking Wizard start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Booking Wizard</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 mb-3">
                                <div class="vertical-tabs">
                                    <div class="tab current-tab" data-tab="tabs-1">
                                        <div class="d-flex">
                                            <div class="step ms-2">
                                                <i class="ti ti-settings-filled"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Service</h5>
                                                <span class="text-secondary">Step 1</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab" data-tab="tabs-2">
                                        <div class="d-flex">
                                            <div class="step ms-2">
                                                <i class="ti ti-calendar-stats"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Date & Time </h5>
                                                <span class="text-secondary">Step 2</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab" data-tab="tabs-3">
                                        <div class="d-flex">
                                            <div class="step ms-2">
                                                <i class="ti ti-notebook"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Booking Summary</h5>
                                                <span class="text-secondary">Step 3 </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab" data-tab="tabs-4">
                                        <div class="d-flex">
                                            <div class="step ms-2">
                                                <i class="ti ti-checkbox"></i>
                                            </div>
                                            <div class="ps-3">
                                                <h5>Completed</h5>
                                                <span class="text-secondary">Step 4</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8">
                                <div class="tab-contents-list">
                                    <div id="tabs-1" class="tab-contents current-tab">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Company Name</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Service</label>
                                                        <input class="form-control" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Company Address</label>
                                                        <textarea class="form-control" rows="2"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Additional Persons</label>
                                                        <input class="form-control" type="number" value="2">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="col-sm-2 col-form-label">Email</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" readonly class="form-control-plaintext" value="email@gmail.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tabs-2" class="tab-contents">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-md-6 col-xl-4">
                                                    <div class="card shadow-none">
                                                        <div class="card-body address-content">
                                                            <div class="">
                                                                <label class="check-box">
                                                                    <input type="radio" name="radio-group1">
                                                                    <span class="radiomark outline-secondary"></span>
                                                                </label>
                                                            </div>
                                                            <div class="text-center">
                                                                <img src="{{asset('../assets/images/form/19.png')}}" alt="">
                                                                <h6 class="tab-heading">Location 1</h6>
                                                                <p class="text-muted">A Global Positioning System, or GPS, satellites orbiting Earth.</p>
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
                                                                </label>
                                                            </div>
                                                            <div class="text-center">
                                                                <img src="{{asset('../assets/images/form/20.png')}}" alt="">
                                                                <h6 class="tab-heading">Location 2</h6>
                                                                <p class="text-muted">Traditionally, those are the three important factors in buying.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Date</label>
                                                        <input class="form-control mb-4" type="datetime-local">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label">Time</label>
                                                        <input class="form-control time-picker-limits mb-2 flatpickr-input" type="text" placeholder="10:00" readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div id="tabs-3" class="tab-contents">
                                        <div class="accordion  app-accordion accordion-light-primary" id="accordionExample">
                                            <div class="accordion-item">
                                                <h6 class="accordion-header">
                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Company Details
                                                    </button>
                                                </h6>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p class="fw-bold"><i class="ti ti-building-skyscraper"></i> AR info</p>
                                                        <address>
                                                            120 Silver Point , <br> Myriam Estate South Carolina, <br> india
                                                        </address>
                                                        <p>Zip: 456730</p>
                                                        <p>Service : Application</p>
                                                        <p>Email : ar12@gmail.com</p>
                                                        <p>+91 6926578398</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Meeting time Details
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                     data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <p><i class="ti ti-calendar-minus me-2"></i>2024-10-1</p>
                                                        <p><i class="ti ti-clock-hour-1 me-2"></i>10:00 am</p>
                                                        <p><i class="ti ti-map-pin me-2"></i>Location 1-(office)</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tabs-4" class="tab-contents">
                                        <div class="completed-contents">
                                            <div class="completbox text-center">
                                                <img src="{{asset('../assets/images/form/done.png')}}" alt="">
                                                <h6 class="mb-0">Thank You !</h6>
                                                <p> your booking is completed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Booking Wizard end -->
        </div>
        <!-- form wizards 2 end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!--js-->
<script src="{{asset('assets/vendor/datepikar/flatpickr.js')}}"></script>
<script src="{{asset('assets/js/date_picker.js')}}"></script>


<!-- js -->
<script src="{{asset('assets/js/form_wizard_2.js')}}"></script>
@endsection

