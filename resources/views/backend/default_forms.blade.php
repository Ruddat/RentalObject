@extends('layout.master')
@section('title', 'Default Forms')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Default Forms</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Default Forms</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- default forms start -->
        <div class="row">
            <!-- Vertical Form start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Form </h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>

                                        <input type="email" class="form-control" placeholder="Your Name">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>

                                        <input type="email" class="form-control" placeholder="Your Email">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>

                                        <input type="password" placeholder="type password" class="form-control">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control contact-input" placeholder="123-45-678">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <select class="form-select">
                                            <option>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Zip Code</label>
                                        <input type="text" placeholder="type a code" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3 form-check d-flex p-0">
                                        <input type="checkbox" class="m-1 form-check-input" id="formCheck3">
                                        <label class="form-check-label" for="formCheck1"> Agree to terms and conditions</label>
                                    </div>
                                </div>

                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- Vertical Form end -->

            <!-- vertical form with Icon  -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical Form With Icon</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Full Name</label>
                                        <div class="icon-form">
                                            <i class="ti ti-user"></i>
                                            <input type="email" class="form-control pa-s-34" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <div class="icon-form">
                                            <i class="ti ti-mail"></i>
                                            <input type="email" class="form-control pa-s-34" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="icon-form">
                                            <i class="ti ti-lock"></i>
                                            <input type="password" placeholder="type password" class="form-control pa-s-34">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <div class="icon-form">
                                            <i class="ti ti-phone-call"></i>
                                            <input type="tel" class="form-control pa-s-34 contact-input" placeholder="123-45-678">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3 ">
                                        <label class="form-label">State</label>
                                        <select class="form-select">
                                            <option>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label class="form-label">Zip Code</label>
                                        <div class="icon-form">
                                            <i class="ti ti-article"></i>
                                            <input type="text" placeholder="type a code" class="form-control pa-s-34">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3 form-check d-flex p-0">
                                        <input type="checkbox" class="m-1 form-check-input" id="formCheck5">
                                        <label class="form-check-label" for="formCheck1"> Agree to terms and conditions</label>
                                    </div>
                                </div>

                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
            </div>
            <!-- vertical form with icon end  -->

            <!-- Horizontal Form start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Horizontal Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Full Name</label>
                                </div>
                                <div class="col-md-9">

                                    <input type="text" class="form-control" placeholder="Your Name">

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Email address</label>
                                </div>
                                <div class="col-md-9">

                                    <input type="email" class="form-control" placeholder="Your Email">

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Password</label>
                                </div>
                                <div class="col-md-9">

                                    <input type="password" placeholder="type password" class="form-control">

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Phone Number</label>
                                </div>
                                <div class="col-md-9">

                                    <input type="tel" class="form-control contact-input" placeholder="123-45-678">

                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">State</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select">
                                        <option>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Zip Code</label>
                                </div>
                                <div class="col-md-9">

                                    <input type="text" placeholder="type a code" class="form-control mb-3">

                                    <div class="mb-3 form-check d-flex p-0">
                                        <input type="checkbox" class="m-1 form-check-input" id="formCheck1">
                                        <label class="form-check-label" for="formCheck1"> Agree to terms and conditions</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-warning">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Horizontal Form end -->

            <!-- horizontal form without icon start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Horizontal Form</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Full Name</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="icon-form">
                                        <i class="ti ti-user"></i>
                                        <input type="text" class="form-control pa-s-34" placeholder="Your Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Email address</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="icon-form">
                                        <i class="ti ti-mail"></i>
                                        <input type="email" class="form-control pa-s-34" placeholder="Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Password</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="icon-form">
                                        <i class="ti ti-lock"></i>
                                        <input type="password" placeholder="type password" class="form-control pa-s-34">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Phone Number</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="icon-form">
                                        <i class="ti ti-phone-call"></i>
                                        <input type="tel" class="form-control pa-s-34 contact-input" placeholder="123-45-678">
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">State</label>
                                </div>
                                <div class="col-md-9">
                                    <select class="form-select">
                                        <option>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label class="form-label">Zip Code</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="icon-form mb-3">
                                        <i class="ti ti-brand-netbeans"></i>
                                        <input type="text" placeholder="type a code" class="form-control pa-s-34">
                                    </div>
                                    <div class="mb-3 form-check d-flex p-0">
                                        <input type="checkbox" class="m-1 form-check-input" id="formCheck4">
                                        <label class="form-check-label" for="formCheck1"> Agree to terms and conditions</label>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- horizontal form without icon end -->


            <!-- form with click without icon start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Form With Grid</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input type="email" class="form-control" placeholder="Your Email">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input type="text" class="form-control contact-input" placeholder="Your Phone Number" >
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>

                                        <input type="text" class="form-control" placeholder="Your Password">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3 ">
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
                                        <button type="submit" class="btn btn-secondary">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- form with grid without icon end  -->

            <!-- Form With Grid start -->
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Form With Grid With Icon</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <div class="icon-form">
                                            <i class="ti ti-user"></i>
                                            <input type="text" class="form-control pa-s-34" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <div class="icon-form">
                                            <i class="ti ti-mail"></i>
                                            <input type="text" class="form-control  pa-s-34" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <div class="icon-form">
                                            <i class="ti ti-phone-call"></i>
                                            <input type="text" class="form-control pa-s-34 contact-input" placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="icon-form">
                                            <i class="ti ti-lock"></i>
                                            <input type="text" class="form-control  pa-s-34" placeholder="Your Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <select class="form-select">
                                            <option>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-check d-flex p-0">
                                        <input type="checkbox" class="m-1 form-check-input" id="formCheck6">
                                        <label class="form-check-label" for="formCheck2">remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Form With Grid end -->

            <!-- Form With Gutters start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Form With Gutters </h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row g-1">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>

                                        <input type="text" class="form-control" placeholder="Your Name">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>

                                        <input type="text" class="form-control" placeholder="Your Email">

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>

                                        <input type="text" class="form-control contact-input" placeholder="Your Phone Number">

                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>

                                        <input type="text" class="form-control" placeholder="Your Password">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <select class="form-select">
                                            <option>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-check d-flex p-0">
                                        <input type="checkbox" class="m-1 form-check-input" id="formCheck8">
                                        <label class="form-check-label" for="formCheck">remember me</label>
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
                </div>
            </div>

            <!-- Form With Gutters end -->


            <!-- form with Gutters with  icon start -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Form With Gutters With Icon </h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="row g-1">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">First Name</label>
                                        <div class="icon-form">
                                            <i class="ti ti-user"></i>
                                            <input type="text" class="form-control pa-s-34" placeholder="Your Name">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <div class="icon-form">
                                            <i class="ti ti-mail"></i>
                                            <input type="text" class="form-control pa-s-34" placeholder="Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <div class="icon-form">
                                            <i class="ti ti-phone-call"></i>
                                            <input type="text" class="form-control contact-input pa-s-34" placeholder="Your Phone Number">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <div class="icon-form">
                                            <i class="ti ti-lock"></i>
                                            <input type="text" class="form-control  pa-s-34" placeholder="Your Password">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <select class="form-select">
                                            <option>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 form-check d-flex p-0">
                                        <input type="checkbox" class="m-1 form-check-input" id="formCheck">
                                        <label class="form-check-label" for="formCheck">remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-light">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- form with Gutters with  icon end -->


            <!-- Inline forms start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Inline Forms</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form inline-form">
                            <div class="row row-cols-lg-auto g-2 align-items-center inline-form">
                                <div class="col-12">
                                    <label class="visually-hidden">Username</label>
                                    <div class="input-group">
                                        <div class="input-group-text">@</div>
                                        <input type="text" class="form-control" placeholder="Username">
                                    </div>
                                </div>

                                <div class="col-12 form-prefrence-width">
                                    <label class="visually-hidden">Preference</label>
                                    <select class="form-select">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>

                                <div class="col-12 form-check-width">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="inlineCheck">
                                        <label class="form-check-label" for="inlineCheck">
                                            Remember me
                                        </label>
                                    </div>
                                </div>

                                <div class="col-12 ">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Inline forms end -->

        </div>
        <!-- default forms end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
