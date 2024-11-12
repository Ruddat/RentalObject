@extends('layout.master')
@section('title', 'Ready To Use Form')
@section('css')
    <!-- filepond css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/filepond/filepond.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/filepond/image-preview.min.css')}}">

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Ready to use form</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-hand-heart f-s-16"></i> Ready to use
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Ready to use form</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- ready to use form start -->


        <div class="row">
            <!-- Book Appointment Form start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Book Appointment Form</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Your First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Your Last Name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control"
                                               placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Contact</label>
                                        <div class="input-group">
                                            <span class="input-group-text b-r-left">+91</span>
                                            <input type="text" class="form-control b-r-right"
                                                   placeholder="Enter Your Contact" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 floating-select">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select">
                                            <option selected="">select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-8 floating-select">
                                    <div class="mb-3">
                                        <label class="form-label">Appointment Type</label>
                                        <select class="form-select">
                                            <option selected="">select Your Appointment</option>
                                            <option value="1">Medical Examination</option>
                                            <option value="2">Doctor Check</option>
                                            <option value="3">Result Analysis</option>
                                            <option value="4">Check Up</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4 floating-select">
                                    <div class="mb-3">
                                        <label class="form-label">Doctor</label>
                                        <select class="form-select">
                                            <option selected="">select Your Doctor</option>
                                            <option value="1">Dr.Cedric Kelly</option>
                                            <option value="2">Dr.Haley Kennedy</option>
                                            <option value="3">Dr.Angelica Ramos</option>
                                            <option value="4">Dr.Timothy Mooney</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Appointment Date</label>
                                        <input type="date" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Appointment Time</label>
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label ">Have you ever applied to our facility
                                            before?</label>
                                        <div class="form-selectgroup">
                                            <label class="select-items">
                                                <input type="radio" name="radiocheck" class="select-input">
                                                <span class="select-box">
                                                                <span class="selectitem">
                                                                    <i class="ti ti-check"></i> Yes
                                                                </span>
                                                            </span>
                                            </label>
                                            <label class="select-items">
                                                <input type="radio" name="radiocheck" class="select-input">
                                                <span class="select-box">
                                                                <span class="selectitem">
                                                                    <i class="ti ti-x"></i> No
                                                                </span>
                                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Book Appointment Form end -->
            <!-- Payment Information Form start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Payment Information Form</h5>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-4 col-xxl-3">
                            <ul class="nav step-status " id="justify-about-tab" role="tablist">
                                <li>
                                    <button class="btn nav-link flex-grow-1 text-start active" id="carditcard-tab"
                                            data-bs-toggle="tab" data-bs-target="#carditcard-tab-pane" type="button"
                                            role="tab" aria-controls="carditcard-tab-pane" aria-selected="true">
                                        <img src="{{asset('../assets/images/checkbox-radio/logo1.png')}}" class="w-35 h-35"
                                             alt="">
                                        <span>Credit / Debit Card</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn nav-link text-start flex-grow-1" id="visacard-tab"
                                            data-bs-toggle="tab" data-bs-target="#visacard-tab-pane" type="button"
                                            role="tab" aria-controls="visacard-tab-pane" aria-selected="false"
                                            tabindex="-1">
                                        <img src="{{asset('../assets/images/checkbox-radio/logo2.png')}}" class="w-35 h-35"
                                             alt="">
                                        <span>Visa Card</span>
                                    </button>
                                </li>
                                <li>
                                    <button class="btn nav-link text-start flex-grow-1" id="paypal-tab"
                                            data-bs-toggle="tab" data-bs-target="#paypal-tab-pane" type="button"
                                            role="tab" aria-controls="paypal-tab-pane" aria-selected="false"
                                            tabindex="-1">
                                        <img src="{{asset('../assets/images/checkbox-radio/logo3.png')}}" class="w-35 h-35"
                                             alt="">
                                        <span>Paypal</span>
                                    </button>
                                </li>

                            </ul>
                        </div>
                        <div class="col-md-8 col-xxl-9">
                            <div class="tab-content mt-3" id="justify-LightContent">
                                <div class="tab-pane fade active show" id="carditcard-tab-pane" role="tabpanel"
                                     aria-labelledby="carditcard-tab" tabindex="-1">
                                    <form class="app-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Cardholder Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Card Number</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="xxxx-xxxx-xxxx-xxx" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">Expiration</label>
                                                    <input type="text" class="form-control" placeholder="MM/YY"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">CVC code</label>
                                                    <input type="text" class="form-control" placeholder="xxx"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-end">
                                                    <button type="submit"
                                                            class="btn btn-primary">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="visacard-tab-pane" role="tabpanel"
                                     aria-labelledby="visacard-tab" tabindex="-1">
                                    <form class="app-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Cardholder Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Card Number</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="xxxx-xxxx-xxxx-xxx" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">Expiration</label>
                                                    <input type="text" class="form-control" placeholder="MM/YY"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">CVC code</label>
                                                    <input type="text" class="form-control" placeholder="xxx"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-end">
                                                    <button type="submit"
                                                            class="btn btn-primary">Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane fade" id="paypal-tab-pane" role="tabpanel"
                                     aria-labelledby="paypal-tab" tabindex="-1">
                                    <form class="app-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Cardholder Name</label>
                                                    <input type="text" class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Card Number</label>
                                                    <input type="text" class="form-control"
                                                           placeholder="xxxx-xxxx-xxxx-xxx" required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">Expiration</label>
                                                    <input type="text" class="form-control" placeholder="MM/YY"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mb-3">
                                                    <label class="form-label">CVC code</label>
                                                    <input type="text" class="form-control" placeholder="xxx"
                                                           required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="text-end">
                                                    <button type="submit"
                                                            class="btn btn-primary">Submit
                                                    </button>
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
            <!-- Payment Information Form end -->
            <!-- Add Departments Form start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Add Departments Form</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label"> Department Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="text" class="form-control"
                                               placeholder="@department.com" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-8">
                                    <div class="mb-3">
                                        <label class="form-label"> Department Head</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Department" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 floating-select">
                                    <div class="mb-3">
                                        <label class="form-label">Add Employee</label>
                                        <select class="form-select">
                                            <option selected="">select Employee</option>
                                            <option value="1">Cedric Kelly</option>
                                            <option value="2">Haley Kennedy</option>
                                            <option value="3">Angelica Ramos</option>
                                            <option value="4">Ashton Cox</option>
                                            <option value="5">Timothy Mooney</option>
                                            <option value="6">Brenden Wagner</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <input class="filepond-1" type="file" id="id" multiple="multiple"
                                           data-allow-reorder="true">
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label"> Department Bio</label>
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Add Departments Form end -->
            <!-- Student Details Form start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Student Details Form</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-flex justify-content-center mb-3">
                                        <div class="avatar-upload">
                                            <div class="avatar-edit">
                                                <input type="file" id="imageUpload"
                                                       accept=".png')}}, .jpg')}}, .jpeg">
                                                <label for="imageUpload"><i
                                                        class="ti ti-photo-heart"></i></label>
                                            </div>
                                            <div class="avatar-preview">
                                                <div id="imgPreview">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Surname</label>
                                        <input type="text" class="form-control" placeholder="Enter Surname"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Student Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Name"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Parent Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Parent name" required>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mb-3">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3 floating-select">
                                    <div class="mb-3">
                                        <label class="form-label">Gender</label>
                                        <select class="form-select">
                                            <option selected="">select Gender</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text b-r-left">@</span>
                                            <input type="text" class="form-control b-r-right"
                                                   placeholder="Email Address">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Father Contact</label>
                                        <input type="text" class="form-control" placeholder="xxx-xxxx-xxx"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Mother Contact</label>
                                        <input type="text" class="form-control" placeholder="xxx-xxxx-xxx"
                                               required>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" rows="1"
                                                  placeholder="Enter Your Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Your City">
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-3">
                                    <div class="mb-3">
                                        <label class="form-label">Zip</label>
                                        <input type="text" class="form-control" placeholder="xxxxx"
                                               maxlength="5">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Add</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Student Details Form end -->
            <!-- Client Registration start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Client Registration</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Company Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Surname"
                                               required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Your First Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Last Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Your Last Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address</label>
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Company Address</label>
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Enter Company Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Your City">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Your State">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Zip</label>
                                        <input type="text" class="form-control" placeholder="xxxxx"
                                               maxlength="5">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input type="email" class="form-control"
                                               placeholder="Enter Your Email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">LinkedIn/online profile url</label>
                                        <input type="url" class="form-control" placeholder="Enter Your Url">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Specific Registration
                                            Requests/Details</label>
                                        <textarea class="form-control" rows="3"
                                                  placeholder="Enter Your Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label ">Would you like to receive our monthly
                                            e-mail?</label>
                                        <div class="form-selectgroup">
                                            <label class="select-items">
                                                <input type="radio" name="radiocheck1" class="select-input">
                                                <span class="select-box">
                                                                <span class="selectitem">
                                                                    <i class="ti ti-check"></i> Yes
                                                                </span>
                                                            </span>
                                            </label>
                                            <label class="select-items">
                                                <input type="radio" name="radiocheck1" class="select-input">
                                                <span class="select-box">
                                                                <span class="selectitem">
                                                                    <i class="ti ti-x"></i> No
                                                                </span>
                                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label ">Would you like to participate in our client
                                            surveys?</label>
                                        <div class="form-selectgroup">
                                            <label class="select-items">
                                                <input type="radio" name="radiocheck2" class="select-input">
                                                <span class="select-box">
                                                                <span class="selectitem">
                                                                    <i class="ti ti-check"></i> Yes
                                                                </span>
                                                            </span>
                                            </label>
                                            <label class="select-items">
                                                <input type="radio" name="radiocheck2" class="select-input">
                                                <span class="select-box">
                                                                <span class="selectitem">
                                                                    <i class="ti ti-x"></i> No
                                                                </span>
                                                            </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Client Registration end -->
        </div>
        <!-- ready to use form and -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- filepond -->
    <script src="{{asset('assets/vendor/filepond/file-encode.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/validate-size.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/validate-type.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/exif-orientation.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/image-preview.min.js')}}"></script>
    <script src="{{asset('assets/vendor/filepond/filepond.min.js')}}"></script>

    <!-- js -->
    <script src="{{asset('assets/js/ready_to_use_form.js')}}"></script>

@endsection
