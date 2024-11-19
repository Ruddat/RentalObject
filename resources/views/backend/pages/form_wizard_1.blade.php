@extends('layout.master')
@section('title', 'Form Wizard 1')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Form wizard 1</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-hand-heart f-s-16"></i> Ready to use
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Form wizard 1</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <!-- 1 Wizards -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Payment Method Wizards</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-wizard">
                            <div class="row">

                                <div class="col-xl-3 mb-3">
                                    <div class="nav navstpes flex-column" id="Basic" role="tablist">
                                        <button class="nav-link active" id="v-features-tab" data-bs-toggle="tab"
                                                data-bs-target="#v-features-tab-pane" type="button" role="tab"
                                                aria-controls="v-features-tab-pane" aria-selected="true">
                                            <i class="ti ti-user-circle pe-2"></i>
                                            <span class="ms-3">Create Account</span>
                                        </button>
                                        <button class="nav-link" id="v-history-tab" data-bs-toggle="tab"
                                                data-bs-target="#v-history-tab-pane" type="button" role="tab"
                                                aria-controls="v-history-tab-pane" aria-selected="true">
                                            <i class="ti ti-info-circle pe-2"></i>
                                            <span class="ms-3">Personal Info</span>
                                        </button>
                                        <button class="nav-link" id="v-reviews-tab" data-bs-toggle="tab"
                                                data-bs-target="#v-reviews-tab-pane" type="button" role="tab"
                                                aria-controls="v-reviews-tab-pane" aria-selected="true">
                                            <i class="ti ti-brand-mastercard pe-2"></i>
                                            <span class="ms-3">Payment Method</span>
                                        </button>
                                        <button class="nav-link" id="v-reviews-tab1" data-bs-toggle="tab"
                                                data-bs-target="#v-reviews-tab-pane1" type="button" role="tab"
                                                aria-controls="v-reviews-tab-pane1" aria-selected="true">
                                            <i class="ti ti-checks pe-2"></i>
                                            <span class="ms-3">Confirm order</span>
                                        </button>
                                    </div>
                                </div>

                                <div class="col-xl-9">
                                    <div class="tab-content" id="BasicContent">
                                        <div class="tab-pane fade show active" id="v-features-tab-pane" role="tabpanel"
                                             aria-labelledby="v-features-tab" tabindex="-1">
                                            <form class="app-form">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label f-w-500">Username</label>
                                                            <input type="text" class="form-control" placeholder="James">
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="mb-3">
                                                            <label class="form-label f-w-500">Email Address</label>
                                                            <div>
                                                                <input type="email" class="form-control" placeholder="@gmail.com">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label f-w-500">Password</label>
                                                            <div>
                                                                <input type="password" class="form-control" placeholder="******">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label class="form-label f-w-500">Confirm Password</label>
                                                            <div>
                                                                <input type="password" class="form-control" placeholder="******">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane" id="v-history-tab-pane" role="tabpanel"
                                             aria-labelledby="v-history-tab" tabindex="-1">
                                            <form class="row app-form">
                                                <div class="col-12 mb-3">
                                                    <label class="form-label f-w-500">Contact Number</label>
                                                    <input type="text" class="form-control" placeholder="+91">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label class="form-label f-w-500">Address</label>
                                                    <input type="text" class="form-control" placeholder="156/A ...">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <label class="form-label f-w-500">Address 2</label>
                                                    <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label class="form-label f-w-500">City</label>
                                                    <input type="text" class="form-control" placeholder="UK">
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="inputState" class="form-label f-w-500">State</label>
                                                    <select id="inputState" class="form-select">
                                                        <option selected>Choose...</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="inputZip1" class="form-label f-w-500">Zip</label>
                                                    <input type="text" class="form-control" placeholder="xxxxx" id="inputZip1"
                                                           maxlength="5">
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label f-w-500" for="gridCheck">
                                                            Check me out
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane" id="v-reviews-tab-pane" role="tabpanel"
                                             aria-labelledby="v-reviews-tab" tabindex="-1">
                                            <div class="custome-radio-list">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="card shadow-none">
                                                            <div class="card-body select-content ">
                                                                <div class="mb-3">
                                                                    <label class="check-box f-w-500">
                                                                        <input type="radio" name="radio-group1">
                                                                        <span class="radiomark outline-secondary"></span>
                                                                        <span class="fs-6">Credit / Debit Card</span>
                                                                    </label>
                                                                </div>
                                                                <div>
                                                                    <form class="app-form">
                                                                        <div class="row">
                                                                            <div class="col-12">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label f-w-500">Cardholder Name</label>
                                                                                    <input type="text" class="form-control" placeholder="Olaf">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label f-w-500">Card Number</label>
                                                                                    <input type="text" class="form-control"
                                                                                           placeholder="xxxx-xxxx-xxxx-xxx" required="">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-xl-3">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label f-w-500">Expiration Date</label>
                                                                                    <input type="text" class="form-control" placeholder="pin">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-xl-3">
                                                                                <div class="mb-3">
                                                                                    <label class="form-label f-w-500">CVC code</label>
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
                                              <img src="{{asset('../assets/images/checkbox-radio/logo1.png')}}" class="w-30 h-30"
                                                   alt="">
                                              <span class="ms-2">
                                                <span class="fs-6 f-w-500">Visa Card</span>
                                                <span class="d-block text-secondary">Select Visa card payment
                                                  method</span>
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
                                              <img src="{{asset('../assets/images/checkbox-radio/logo3.png')}}" class="w-30 h-30"
                                                   alt="">
                                              <span class="ms-2">
                                                <span class="fs-6 f-w-500">Paypal</span>
                                                <span class="d-block text-secondary">Select PayPal payment
                                                  method</span>
                                              </span>
                                            </span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane" id="v-reviews-tab-pane1" role="tabpanel"
                                             aria-labelledby="v-reviews-tab1" tabindex="-1">
                                            <div class="completed-contents">
                                                <div class="completbox text-center">
                                                    <img src="{{asset('../assets/images/form/done.png')}}" alt="">
                                                    <h6 class="mb-0">Thank You !</h6>
                                                    <p>Successfully Completed your order process ! Confirmation will be sent your email
                                                    </p>
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

            <!-- 2 Wizards -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Account Wizards</h5>
                    </div>
                    <div class="card-body">
                        <div class="nav custom-navstpes d-flex" id="justify-about-tab" role="tablist">
                            <button class="btn nav-link flex-grow-1 text-center active" id="account-tab" data-bs-toggle="tab"
                                    data-bs-target="#account-tab-pane" type="button" role="tab" aria-controls="account-tab-pane"
                                    aria-selected="true">
                        <span class="d-flex align-items-center">
                          <span><i class="ti ti-user-circle pe-2"></i></span>
                          <span class="text-start ms-3 custom-title d-flex flex-column">
                            <span class="f-w-500 f-s-16">Personal info</span>
                            <span class="f-s-14 text-secondary">Enter step 1 details</span>
                          </span>
                        </span>
                            </button>
                            <button class="btn nav-link text-center flex-grow-1" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane"
                                    aria-selected="false">
                        <span class="d-flex align-items-center">
                          <span> <i class="ti ti-file-dollar pe-2"></i></span>
                          <span class="text-start ms-3 custom-title d-flex flex-column">
                            <span class="f-w-500 f-s-16">Billing Information</span>
                            <span class="f-s-14 text-secondary">Enter step 2 details</span>
                          </span>
                        </span>
                            </button>
                            <button class="btn nav-link text-center flex-grow-1" id="review-tab" data-bs-toggle="tab"
                                    data-bs-target="#review-tab-pane" type="button" role="tab" aria-controls="review-tab-pane"
                                    aria-selected="false">
                        <span class="d-flex align-items-center">
                          <span> <i class="ti ti-file-check pe-2"></i></span>
                          <span class="text-start ms-3 custom-title d-flex flex-column">
                            <span class="f-w-500 f-s-16">Review Order</span>
                            <span class="f-s-14 text-secondary">Enter step 3 details</span>
                          </span>
                        </span>
                            </button>
                            <button class="btn nav-link text-center flex-grow-1" id="finish-tab" data-bs-toggle="tab"
                                    data-bs-target="#finish-tab-pane" type="button" role="tab" aria-controls="finish-tab-pane"
                                    aria-selected="false">
                        <span class="d-flex align-items-center">
                          <span><i class="ti ti-checks pe-2"></i></span>
                          <span class="text-start ms-3 custom-title d-flex flex-column">
                            <span class="f-w-500 f-s-16">Order Confirmation </span>
                            <span class="f-s-14 text-secondary">Enter step 4 details</span>
                          </span>
                        </span>
                            </button>
                        </div>

                        <div class="tab-content mt-3" id="justify-LightContent">
                            <div class="tab-pane fade show active" id="account-tab-pane" role="tabpanel"
                                 aria-labelledby="account-tab" tabindex="-1">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="username" class="form-label f-w-500">Cardholder Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Cardholder Name"
                                                   id="username">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="username11" class="form-label f-w-500">Last Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Lastname" id="username11">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="username1" class="form-label f-w-500">Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Phone Number" id="username1">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="username2" class="form-label f-w-500">Email Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Email" id="username2">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="city" class="form-label f-w-500">Country</label>
                                            <select class="form-select" id="city">
                                                <option selected="">select Your Country</option>
                                                <option value="1">UK</option>
                                                <option value="2">US</option>
                                                <option value="3">Italy</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="city1" class="form-label f-w-500">Language</label>
                                            <select class="form-select" id="city1">
                                                <option selected="">Select Your Langauge</option>
                                                <option value="1">UK</option>
                                                <option value="2">US</option>
                                                <option value="3">Italy</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mt-3 text-end">
                                        <button type="submit" class="btn btn-primary btn-lg">Next</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab"
                                 tabindex="-1">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="username3" class="form-label f-w-500">Username</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Username" id="username3">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="username4" class="form-label f-w-500">
                                                Credit/Debit Card Number</label>
                                            <input type="text" class="form-control" placeholder="Credit/Debit Card Number"
                                                   id="username4">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="username5" class="form-label f-w-500">
                                                ZIP Code</label>
                                            <input type="text" class="form-control" placeholder="ZIP Code" id="username5">
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button type="submit" class="btn btn-primary btn-lg">Previous</button>
                                            <button type="submit" class="btn btn-primary btn-lg">Next</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="review-tab-pane" role="tabpanel" aria-labelledby="review-tab"
                                 tabindex="-1">
                                <form class="app-form">
                                    <div class="row">

                                        <div class="col-md-6 mb-3">
                                            <label for="username6" class="form-label f-w-500">Product Name</label>
                                            <input type="text" class="form-control" placeholder="Enter Your Product Name"
                                                   id="username6">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="username7" class="form-label f-w-500">
                                                Quantity</label>
                                            <input type="text" class="form-control" placeholder="Quantity" id="username7">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="username8" class="form-label f-w-500">
                                                Price per Unit</label>
                                            <input type="text" class="form-control" placeholder="Enter Price per Unit" id="username8">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="username9" class="form-label f-w-500">
                                                Total Price</label>
                                            <input type="text" class="form-control" placeholder="Enter Price per Unit" id="username9">
                                        </div>

                                        <div class="col-md-6 mb-3">
                                            <label for="username10" class="form-label f-w-500">
                                                Billing Address</label>
                                            <input type="text" class="form-control" placeholder="Enter Billing Address" id="username10">
                                        </div>

                                        <div class="mt-3 text-end">
                                            <button type="submit" class="btn btn-primary btn-lg">Previous</button>
                                            <button type="submit" class="btn btn-primary btn-lg">Next</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="finish-tab-pane" role="tabpanel" aria-labelledby="finish-tab"
                                 tabindex="-1">
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

            <!-- 3 Wizards -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Business Account Wizards</h5>
                    </div>
                    <div class="card-body">
                        <div class="nav business-nav d-flex" id="justify-about-tab1" role="tablist">
                            <button class="btn nav-link flex-grow-1 text-center active" id="details-tab" data-bs-toggle="tab"
                                    data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="details-tab-pane"
                                    aria-selected="true">
                                <i class="ph-duotone  ph-user-circle-plus"></i>
                                <span class="f-s-18 f-w-500">Create account</span>
                            </button>
                            <button class="btn nav-link flex-grow-1 text-center" id="personal-tab" data-bs-toggle="tab"
                                    data-bs-target="#personal-tab-pane" type="button" role="tab" aria-controls="personal-tab-pane"
                                    aria-selected="true">
                                <i class="ph-duotone  ph-user-switch"></i>
                                <span class="f-s-18 f-w-500">Personal account</span>
                            </button>
                            <button class="btn nav-link flex-grow-1 text-center " id="payment-tab" data-bs-toggle="tab"
                                    data-bs-target="#payment-tab-pane" type="button" role="tab" aria-controls="payment-tab-pane"
                                    aria-selected="true">
                                <i class="ph-duotone  ph-credit-card"></i>
                                <span class="f-s-18 f-w-500">Payment method</span>
                            </button>
                        </div>

                        <div class="tab-content mt-3" id="justify-LightContent1">
                            <div class="tab-pane fade show active" id="details-tab-pane" role="tabpanel"
                                 aria-labelledby="details-tab" tabindex="-1">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label f-w-500">Username</label>
                                                <input type="text" class="form-control" placeholder="James">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label f-w-500">Email Address</label>
                                                <div>
                                                    <input type="email" class="form-control" placeholder="@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label f-w-500">Password</label>
                                                <div>
                                                    <input type="password" class="form-control" placeholder="******">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label f-w-500">Confirm Password</label>
                                                <div>
                                                    <input type="password" class="form-control" placeholder="******">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="personal-tab-pane" role="tabpanel" aria-labelledby="personal-tab"
                                 tabindex="-1">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12 mb-3">
                                            <label class="form-label f-w-500">Contact Number</label>
                                            <input type="text" class="form-control" placeholder="+91">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label f-w-500">Address</label>
                                            <input type="text" class="form-control" placeholder="156/A ...">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label class="form-label f-w-500">Address 2</label>
                                            <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label class="form-label f-w-500">City</label>
                                            <input type="text" class="form-control" placeholder="UK">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="inputState1" class="form-label f-w-500">State</label>
                                            <select id="inputState1" class="form-select">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="inputZip" class="form-label f-w-500">Zip</label>
                                            <input type="text" class="form-control" placeholder="xxxxx" id="inputZip" maxlength="5">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <div class="form-check f-w-500">
                                                <input class="form-check-input" type="checkbox" id="gridCheck1">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="payment-tab-pane" role="tabpanel" aria-labelledby="payment-tab"
                                 tabindex="-1">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card shadow-none">
                                                <div class="card-body select-content ">
                                                    <div class="mb-3">
                                                        <label class="check-box f-w-500">
                                                            <input type="radio" name="radio-group1">
                                                            <span class="radiomark outline-secondary"></span>
                                                            <span class="fs-6">Credit / Debit Card</span>
                                                        </label>
                                                    </div>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="mb-3">
                                                                    <label class="form-label f-w-500">Cardholder Name</label>
                                                                    <input type="text" class="form-control" placeholder="Olaf">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label class="form-label f-w-500">Card Number</label>
                                                                    <input type="text" class="form-control" placeholder="xxxx-xxxx-xxxx-xxx"
                                                                           required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xl-3">
                                                                <div class="mb-3">
                                                                    <label class="form-label f-w-500">Expiration Date</label>
                                                                    <input type="text" class="form-control" placeholder="pin">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xl-3">
                                                                <div class="mb-3">
                                                                    <label class="form-label f-w-500">CVC code</label>
                                                                    <input type="text" class="form-control" placeholder="xxx">
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="text-end">
                                                                    <button type="button" class="btn btn-primary">Submit</button>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                          <span class="fs-6 f-w-500">Visa Card</span>
                                          <span class="d-block text-secondary">Select Visa card payment
                                            method</span>
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
                                          <span class="fs-6 f-w-500">Paypal</span>
                                          <span class="d-block text-secondary">Select PayPal payment
                                            method</span>
                                        </span>
                                      </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>


                            </div>


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

@endsection
