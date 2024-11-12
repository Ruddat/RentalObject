@extends('layout.master')
@section('title', 'Pricing')
@section('css')
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Pricing</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                    <span>
                      <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                    </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Pricing</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Pricing start -->
        <div class="row">

            <!-- Pricing Plans start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 >Pricing Plans</h5>
                    </div>
                    <div class="card-body">
                        <div class="row flip-pricing-container app-arrow">
                            <div class="col-xl-3">
                                <div class="flip-pricing">
                                    <div class="flip-card">
                                        <div class="front-pricing card">
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/1.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-secondary">$20<span class="f-w-500 f-s-12">/per Month</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>5 Free Websites</li>
                                                    <li>1 GB Hard disk Storage</li>
                                                    <li>1 fields </li>
                                                    <li>10 User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-secondary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                        <div class="back-pricing card">
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/9.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-secondary">$80<span class="f-w-500 f-s-12">/per Yearly</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>10 Free Websites</li>
                                                    <li>1 GB Hard disk Storage</li>
                                                    <li>2 fields </li>
                                                    <li>15 User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-secondary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="flip-pricing">
                                    <div class="flip-card">
                                        <div class="front-pricing card">
                                            <div class="box-ribbon box-right">
                                                <div class="ribbonbox box-right ribbon-primary">Best</div>
                                            </div>
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Business Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/2.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-primary">$80<span class="f-w-500 f-s-12">/per Month</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>40 Free Websites</li>
                                                    <li>20 GB Hard disk Storage</li>
                                                    <li>50 fields </li>
                                                    <li>25 User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-primary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                        <div class="back-pricing card">
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Business Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/8.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-primary">$100<span class="f-w-500 f-s-12">/per Yearly</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>40 Free Websites</li>
                                                    <li>20 GB Hard disk Storage</li>
                                                    <li>50 fields </li>
                                                    <li>30 User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-primary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="flip-pricing">
                                    <div class="flip-card">
                                        <div class="front-pricing card">
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Premium Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/3.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-secondary">$200<span class="f-w-500 f-s-12">/per Month</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>Unlimited Websites</li>
                                                    <li>40 GB Hard disk Storage</li>
                                                    <li>Unlimited fields </li>
                                                    <li>40 User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-secondary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                        <div class="back-pricing card">
                                            <div class="box-ribbon box-right">
                                                <div class="ribbonbox box-right ribbon-primary">Best</div>
                                            </div>
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/7.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-secondary">$500<span class="f-w-500 f-s-12">/per Yearly</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>Unlimited Websites</li>
                                                    <li>40 GB Hard disk Storage</li>
                                                    <li>Unlimited fields </li>
                                                    <li>40 User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-secondary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="flip-pricing">
                                    <div class="flip-card">
                                        <div class="front-pricing card">
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Golden Premium Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/15.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-primary">$500<span class="f-w-500 f-s-12">/per Month</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>Unlimited Websites</li>
                                                    <li>40 GB Hard disk Storage</li>
                                                    <li>Unlimited fields </li>
                                                    <li>Unlimited User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-primary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                        <div class="back-pricing card">
                                            <div class="pricing-header">
                                                <h6 class="f-w-500 text-dark">Basic Plans</h6>
                                                <img src="{{asset('../assets/images/pricing/14.png')}}" class="w-60 h-60" alt="">
                                            </div>
                                            <div class="app-divider-v justify-content-center m-0">
                                                <p class="price f-w-700 text-primary">$1000<span class="f-w-500 f-s-12">/per Yearly</span></p>
                                            </div>
                                            <div class="pricing-content">
                                                <ul class="pricing-list">
                                                    <li>Unlimited Websites</li>
                                                    <li>40 GB Hard disk Storage</li>
                                                    <li>Unlimited fields </li>
                                                    <li>Unlimited User</li>
                                                    <li>Email Support</li>
                                                </ul>
                                                <button type="button" class="btn btn-primary w-100">Buy Plans</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Pricing Plans end -->

            <!-- Simple Pricing Plans start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 >Simple Pricing Plans</h5>
                    </div>
                    <div class="card-body">
                        <div class="row simple-pricing-container app-arrow">
                            <div class="col-md-6 col-xl-3 p-3">
                                <div class="simple-pricing-card card">
                                    <div class="card-body">
                                        <div class="simple-price-header text-center">
                                            <h4 class="mb-0">Basic</h4>
                                        </div>
                                        <div class="simple-price-body">
                                            <div class="simple-price-value text-center b-r-5 bg-light-success d-block ">
                                                <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                <span class=" f-s-12 f-w-600">per month</span>
                                            </div>

                                            <div class="simple-price-content">
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">100 request per day</p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Free trial features access </p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Limited API access </p>
                                                </div>
                                                <button type="button" class="btn btn-success b-r-5 w-100 p-2">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 p-3">
                                <div class="simple-pricing-card card">
                                    <div class="card-body">
                                        <div class="simple-price-header text-center">
                                            <h4 class="mb-0">Premium</h4>
                                        </div>
                                        <div class="simple-price-body">
                                            <div class="simple-price-value text-center b-r-5 bg-light-secondary d-block ">
                                                <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                <span class=" f-s-12 f-w-600">per month</span>
                                            </div>

                                            <div class="simple-price-content">
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Unlimited Ai generation</p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Full new features access </p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Priority support </p>
                                                </div>
                                                <button type="button" class="btn btn-secondary b-r-5 w-100 p-2">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 p-3">
                                <div class="simple-pricing-card card">
                                    <div class="card-body">
                                        <div class="simple-price-header text-center">
                                            <h4 class="mb-0">Enterprice</h4>
                                        </div>
                                        <div class="simple-price-body">
                                            <div class="simple-price-value text-center b-r-5 bg-light-success d-block ">
                                                <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                <span class=" f-s-12 f-w-600">per month</span>
                                            </div>

                                            <div class="simple-price-content">
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Custom deployment</p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Comprehensive usages</p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Training models</p>
                                                </div>
                                                <button type="button" class="btn btn-success b-r-5 w-100 p-2">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3 p-3">
                                <div class="simple-pricing-card card">
                                    <div class="card-body">
                                        <div class="simple-price-header text-center">
                                            <h4 class="mb-0">Professional</h4>
                                        </div>
                                        <div class="simple-price-body">
                                            <div class="simple-price-value text-center b-r-5 bg-light-secondary d-block ">
                                                <span class="f-s-24 f-w-600 text-center">$9.99/</span>
                                                <span class=" f-s-12 f-w-600">per month</span>
                                            </div>

                                            <div class="simple-price-content">
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Access to all features</p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex ">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Priority email support</p>
                                                </div>
                                                <div class="app-divider-v px-2"></div>
                                                <div class="d-flex">
                                <span>
                                  <i class="ph-bold  ph-check bg-success p-1 b-r-100 f-s-12"></i>
                                </span>
                                                    <p class="ms-2 mb-0">Weekly backups</p>
                                                </div>
                                                <button type="button" class="btn btn-secondary b-r-5 w-100 p-2">Get Started</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Pricing Plans end -->

            <!-- Pricing start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 >Pricing</h5>
                    </div>
                    <div class="card-body plans-section pricing-plan-section">
                        <div class="row pricing-slider-container">

                            <div class="col-md-6 col-xl-4 p-3">
                                <div class="card pricing-cards active mb-0">
                                    <div class="card-body">
                                        <div class="pricing-details">
                                            <div class="price-title">
                                                <p>Business Plans</p>
                                                <h2>$499.00</h2>
                                                <ul class="pricing-list-menu">
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>6 Month support</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Single end product use</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Future upgrades included</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Free for use in end products</li>
                                                </ul>
                                                <div class="text-center price-btn">
                                                    <a href="{{route('pricing')}}" target="_blank" class="btn btn-lg btn-primary mb-4">Buy Plans</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-3">
                                <div class="card pricing-cards mb-0">
                                    <div class="card-body">
                                        <div class="box-ribbon box-right">
                                            <div class="ribbonbox ribbon-danger">Best</div>
                                        </div>
                                        <div class="pricing-details">
                                            <div class="price-title">
                                                <p>Basic Plans</p>
                                                <h2>$14.00</h2>
                                                <ul class="pricing-list-menu">
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>6 Month support</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Single end product use</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Future upgrades included</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Free for use in end products</li>
                                                </ul>
                                                <div class="text-center price-btn">
                                                    <a href="{{route('pricing')}}" target="_blank" class="btn btn-lg btn-secondary mb-4">Buy Plans</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 p-3">
                                <div class="card pricing-cards active mb-0">
                                    <div class="card-body">
                                        <div class="pricing-details">
                                            <div class="price-title">
                                                <p>Business Plans</p>
                                                <h2>$499.00</h2>
                                                <ul class="pricing-list-menu">
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>6 Month support</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Single end product use</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Future upgrades included</li>
                                                    <li class="pricing-listitem"> <i class="fa-solid fa-check-circle fa-fw text-success me-2"></i>Free for use in end products</li>
                                                </ul>
                                                <div class="text-center price-btn">
                                                    <a href="{{route('pricing')}}" target="_blank" class="btn btn-lg btn-primary mb-4">Buy Plans</a>
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
            <!-- Pricing end -->

            <!-- Compare plans start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 >Compare plans</h5>
                    </div>
                    <div class="card-body">
                        <div class="pricing-table table-responsive">
                            <table class="table table-bottom-border table-striped align-middle text-center">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Free</th>
                                    <th>Pro</th>
                                    <th>Enterprise</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row" class="text-start f-w-500">Public</th>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start f-w-500">Private</th>
                                    <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                </tr>
                                </tbody>

                                <tbody>
                                <tr>
                                    <th scope="row" class="text-start f-w-500">Permissions</th>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start f-w-500">Sharing</th>
                                    <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start f-w-500">Unlimited members</th>
                                    <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="text-start f-w-500">Extra security</th>
                                    <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-x-circle text-danger f-s-24"></i></td>
                                    <td><i class="ph-duotone  ph-check-circle text-success f-s-24"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--Compare plans start -->
        </div>
        <!-- Pricing start -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- slick-file -->
<script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>

<!-- js -->
<script src="{{asset('assets/js/pricing.js')}}"></script>
@endsection

