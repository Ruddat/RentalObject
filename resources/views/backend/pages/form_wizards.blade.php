@extends('layout.master')
@section('title', 'Form Wizards')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">form wizards</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-hand-heart f-s-16"></i> Ready To Use
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">form wizards</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Form Wizard start -->
        <div class="row">
            <!-- Form Wizard start -->
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Wizard With Number</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-wizard">
                            <div class="form-wizard-header">
                                <ul class="form-wizard-steps">
                                    <li class="active">
                                        <span class="wizard-steps">1</span>
                                    </li>
                                    <li>
                                        <span class="wizard-steps">2</span>
                                    </li>
                                    <li>
                                        <span class="wizard-steps">3</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="wizard-fieldset show" id="#mybtn">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="fname" class="form-label wizard-form-text-label">First Name*</label>
                                                <input type="text" class="form-control wizard-required" placeholder="Martin" id="fname">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label wizard-form-text-label">Last Name*</label>
                                                <input type="text" class="form-control wizard-required" placeholder="Payne">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="contactNum" class="form-label wizard-form-text-label">Contact*</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">+91</span>
                                                <input type="text" class="form-control " placeholder="**********" id="contactNum">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-lg btn-primary next-btn ">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="wizard-fieldset">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="address" class="form-label form-label wizard-form-text-label">Address</label>
                                                <textarea class="form-control wizard-required" id="address1"  placeholder="2107 Deer Ridge Drive Succasunna, NJ 07876"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="mb-3">
                                                <label for="address" class="form-label form-label wizard-form-text-label">City</label>
                                                <input type="text" class="form-control wizard-required" id="address" placeholder="US">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="mb-3">
                                                <label for="state" class="form-label form-label wizard-form-text-label">State</label>
                                                <input type="text" class="form-control wizard-required" id="state1" placeholder="Enter State">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <div class="mb-3">
                                                <label for="zip" class="form-label form-label wizard-form-text-label">Zip</label>
                                                <input type="text" class="form-control wizard-required" id="zip" maxlength="5" placeholder="Enter Zip">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3 text-end">
                                                <button type="button" class="btn btn-primary pre-btn">Previous</button>
                                                <button type="button" class="btn btn-primary next-btn">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="wizard-fieldset">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label wizard-form-text-label">Email*</label>
                                                <input type="email" class="form-control wizard-required" placeholder="CheriDMorrow@teleworm.us" id="email2">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label wizard-form-text-label">Password*</label>
                                                <input type="password" class="form-control wizard-required" placeholder="******" id="pwd3">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label wizard-form-text-label">Confirm Password*</label>
                                                <input type="password" class="form-control wizard-required" placeholder="******" id="pwd1">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3 text-end">
                                                <button type="button" class="btn btn-primary pre-btn">Previous</button>
                                                <button type="submit" class="btn btn-primary next-btn">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Wizard end -->

            <!-- Form Wizard  With Icon start -->
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Wizard With Icon</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-wizard">
                            <div class="form-wizard-header">
                                <ul class="form-wizard-steps">
                                    <li class="active">
                                        <span class="wizard-steps circle-steps"><i class="ti ti-users"></i></span>
                                    </li>
                                    <li>
                                        <span class="wizard-steps circle-steps"><i class="ti ti-info-circle"></i></span>
                                    </li>
                                    <li>
                                        <span class="wizard-steps circle-steps"><i class="ti ti-table-export"></i></span>
                                    </li>
                                </ul>
                            </div>
                            <div class="wizard-fieldset show">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="emailId" class="form-label wizard-form-text-label">Username*</label>
                                                <input type="email" class="form-control wizard-required" id="emailId" placeholder="Allen" required>
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="pwd" class="form-label wizard-form-text-label">password*</label>
                                                <input type="password" class="form-control wizard-required" placeholder="******" id="pwd">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label for="cfpwd" class="form-label wizard-form-text-label">Confirm Password*</label>
                                                <input type="password" class="form-control wizard-required"  placeholder="******" id="cfpwd">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-primary next-btn btn-lg">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="wizard-fieldset">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="cpname" class="form-label form-label wizard-form-text-label">Company Name</label>
                                                <input type="text" class="form-control wizard-required" id="cpname" placeholder="Enter Your Company Name" required>
                                                <div class="wizard-form-error">
                                                    ! Enter valid data
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xl-8">
                                            <div class="mb-3">
                                                <label for="state" class="form-label form-label wizard-form-text-label">Department</label>
                                                <input type="text" class="form-control wizard-required" id="state" placeholder="Enter Your Department">
                                                <div class="wizard-form-error">
                                                    ! Enter valid data
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xl-4">
                                            <div class="mb-3">
                                                <label for="cmcode" class="form-label form-label wizard-form-text-label">Department Code</label>
                                                <input type="text" class="form-control wizard-required" id="cmcode" maxlength="6" placeholder="Enter Your Department Code">
                                                <div class="wizard-form-error">
                                                    ! Enter valid data
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="text-end">
                                                <button class="btn btn-primary pre-btn btn-lg">Previous</button>
                                                <button type="button" class="btn btn-primary next-btn btn-lg">Next</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="wizard-fieldset">
                                <form class="app-form">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="pname" class="form-label wizard-form-text-label">Project Name*</label>
                                                <input type="text" class="form-control wizard-required" id="pname" placeholder="Enter Your Project Name">
                                                <div class="wizard-form-error">
                                                    ! please enter valid data
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label for="formFile" class="form-label">Upload Your File</label>
                                                <input class="form-control wizard-required" type="file" id="formFile">
                                                <div class="wizard-form-error">
                                                    ! please select file
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="text-end">
                                                <button class="btn btn-lg btn-primary pre-btn">Previous</button>
                                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form Wizard  With Icon end -->

            <!-- Vertical Form Wizard start -->
            <div class="col-sm-12 col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5> Vertical Wizard With Number</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-wizard">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-wizard-header">
                                        <ul class="vertica-wizard-steps">
                                            <li class="active">
                                                <div class="wizard-steps circle-steps">1</div>
                                            </li>
                                            <li>
                                                <div class="wizard-steps circle-steps">2</div>
                                            </li>
                                            <li>
                                                <div class="wizard-steps circle-steps">3</div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <div class="wizard-fieldset show">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="fname1" class="form-label wizard-form-text-label">First Name*</label>
                                                        <input type="text" class="form-control wizard-required" id="fname1" placeholder="Enter Your First Name">
                                                        <div class="wizard-form-error">
                                                            ! enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="lname1" class="form-label wizard-form-text-label">Last Name*</label>
                                                        <input type="text" class="form-control wizard-required" id="lname1" placeholder="Enter Your Last Name">
                                                        <div class="wizard-form-error">
                                                            ! enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="emailId1" class="form-label wizard-form-text-label">Email*</label>
                                                        <input type="email" class="form-control wizard-required" id="emailId1" placeholder="Enter Your Email" required="">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-7">
                                                    <label for="contact1" class="form-label wizard-form-text-label">Contact*</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon2">+91</span>
                                                        <input type="text" class="form-control" id="contact1" placeholder="**********">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-xl-5">
                                                    <div class="mb-3">
                                                        <label class="form-label wizard-form-text-label">Date of Birth</label>
                                                        <input type="date" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3 text-end">
                                                        <button type="button" class="btn btn-primary next-btn btn-lg">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="wizard-fieldset">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label wizard-form-text-label">Section</label>
                                                        <input type="text" class="form-control wizard-required" placeholder="Enter Your Section">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label class="form-label wizard-form-text-label">Position</label>
                                                        <input type="text" class="form-control wizard-required" placeholder="Enter Your Position">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="address1" class="form-label wizard-form-text-label">Office Address</label>
                                                        <textarea class="form-control wizard-required" rows="3" id="address2" placeholder="Enter Your Address"></textarea>
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <button class="btn btn-lg btn-primary pre-btn">Previous</button>
                                                        <button class="btn btn-lg btn-primary next-btn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="wizard-fieldset">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <h6>Check your Details and Submit</h6>
                                                    <p class="f-w-500">Section :</p>
                                                    <p>- Section1 A </p>
                                                    <p class="f-w-500">Position :</p>
                                                    <p>- Senior Manager </p>
                                                    <p class="f-w-500">Office Address :</p>
                                                    <p>
                                                        120 Silver Point , Myriam Estate South Carolina, india
                                                    </p>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-lg btn-primary pre-btn">Previous</button>
                                                        <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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
            <!-- Vertical Form Wizard end-->

            <!-- Vertical Form Wizard With Icon start-->
            <div class="col-sm-12 col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5> Vertical Wizard With Icon</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-wizard">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-wizard-header">
                                        <ul class="vertica-wizard-steps">
                                            <li class="active">
                                                <div class="wizard-steps"><i class="ti ti-users"></i></div>
                                            </li>
                                            <li>
                                                <div class="wizard-steps"><i class="ti ti-phone-plus"></i></div>
                                            </li>
                                            <li>
                                                <div class="wizard-steps"><i class="ti ti-info-circle"></i></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-9">
                                    <div class="wizard-fieldset show">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="username1" class="form-label wizard-form-text-label">Name*</label>
                                                        <input type="text" class="form-control wizard-required" id="username1" placeholder="Johnson" required="">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="address2" class="form-label wizard-form-text-label">About Self</label>
                                                        <textarea class="form-control wizard-required" rows="3" id="address3" placeholder="Type About Self"></textarea>
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-lg btn-primary next-btn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="wizard-fieldset">
                                        <form class="app-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="emailId2" class="form-label wizard-form-text-label">Email*</label>
                                                        <input type="email" class="form-control wizard-required" id="emailId2" placeholder="StevenSHarmon@rhyta.com" required>
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="pwd2" class="form-label wizard-form-text-label">password*</label>
                                                        <input type="password" class="form-control wizard-required" placeholder="*****" id="pwd2">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="cfpwd1" class="form-label wizard-form-text-label">Confirm Password*</label>
                                                        <input type="password" class="form-control wizard-required" placeholder="*****" id="cfpwd1">
                                                        <div class="wizard-form-error">
                                                            ! please enter valid data
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="text-end mb-3">
                                                        <button type="button" class="btn btn-primary btn-lg pre-btn">Previous</button>
                                                        <button type="button" class="btn btn-primary btn-lg next-btn">Next</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="wizard-fieldset">
                                        <form class="app-form">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Facebook Url</label>
                                                    <input type="url" class="form-control" placeholder="https://">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Twitter Url</label>
                                                    <input type="url" class="form-control" placeholder="https://">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Github Url</label>
                                                    <input type="url" class="form-control" placeholder="https://">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-end mb-3">
                                                    <button type="button" class="btn btn-primary btn-lg pre-btn">Previous</button>
                                                    <button type="submit" class="btn btn-lg btn-primary">Submit</button>
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
            <!-- Vertical Form Wizard With Icon end -->
        </div>
        <!-- Form Wizard end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- js -->
<script src="{{asset('assets/js/form_wizard.js')}}"></script>
@endsection
