@extends('layout.master')
@section('title', 'Base Inputs')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Base Inputs</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Base Inputs</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Base inputs start -->
        <div class="row">
            <!-- Basic Form Controls start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic Form Controls</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="mb-3">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Your Username" id="username">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Your Password" id="password">
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">City</label>
                                <select class="form-select" id="city">
                                    <option selected>select Your City</option>
                                    <option value="1">UK</option>
                                    <option value="2">US</option>
                                    <option value="3">Italy</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <div class="input-group" id="content">
                                    <span class="input-group-text">+91</span>
                                    <input type="text" class="form-control" placeholder="xxx-xxxxx-xxx">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Your Address"
                                          id="address"></textarea>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" value="Only Readable input ..." readonly>
                            </div>
                            <div class="form-check mb-3 d-flex gap-1">
                                <input class="form-check-input mg-2" type="checkbox" value="" id="checkDefault">
                                <label class="form-check-label" for="checkDefault">
                                    Default checkbox
                                </label>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic Form Controls end -->
            <!-- Rounded Form Control start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Rounded Form Control</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form rounded-control">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Enter Your Username">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control" placeholder="Enter Your Password">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">City</label>
                                <select class="form-select">
                                    <option selected>select Your City</option>
                                    <option value="1">UK</option>
                                    <option value="2">US</option>
                                    <option value="3">Italy</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Content</label>
                                <div class="input-group">
                                    <span class="input-group-text">+91</span>
                                    <input type="text" class="form-control" placeholder="xxx-xxxxx-xxx">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Address</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Your Address"></textarea>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" value="Only Readable input ..." readonly>
                            </div>
                            <div class="form-check mb-3 d-flex gap-1">
                                <input class="form-check-input mg-2" type="checkbox" value="" id="checkDefault1">
                                <label class="form-check-label" for="checkDefault1">
                                    Default checkbox
                                </label>
                            </div>
                            <div>
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Rounded Form Control end -->
            <!-- Input Sizing start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Input Sizing</h5>
                    </div>
                    <div class="card-body">
                        <form class="app-form">
                            <div class="mb-3">
                                <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg"
                                       aria-label=".form-control-lg example">
                            </div>
                            <div class="mb-3">
                                <input class="form-control" type="text" placeholder="Default input"
                                       aria-label="default input example">
                            </div>
                            <div class="mb-3">
                                <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"
                                       aria-label=".form-control-sm example">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Input Sizing end -->
            <!-- Basic HTML Input Control start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Basic HTML Input Control</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Default Input</label>
                                        <input type="text" class="form-control" placeholder="Default Input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class=" col-form-label">Static Text</label>
                                        <div class="form-control-static">
                                            Hello !... This is
                                            static text
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Email Input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Password Input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">URL</label>
                                        <input type="url" class="form-control" placeholder="URL Input">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Telephone</label>
                                        <input type="tel" class="form-control" value="+91 (999)-999-999"
                                               pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Number</label>
                                        <input type="number" class="form-control" placeholder="Enter Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class=" col-form-label">
                                            Maximum Length
                                        </label>
                                        <input class="form-control" type="text" placeholder="Enter Your Zip code" maxlength="6">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Date & Time</label>
                                        <input type="datetime-local" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Date</label>
                                        <input type="date" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Time</label>
                                        <input type="time" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Month</label>
                                        <input type="month" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="mb-6">
                                        <label class="form-label">Week</label>
                                        <input type="week" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="mb-6">
                                        <label class="form-label">Color</label>
                                        <input type="color" class="form-control" value="#467FFB">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">File</label>
                                        <input type="file" class="form-control">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class="form-label">Search</label>
                                        <input type="search" class="form-control" placeholder="Search...">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="mb-3">
                                        <label class=" col-form-label">Textarea</label>
                                        <div>
                              <textarea class="form-control" rows="5" cols="5"
                                        placeholder="Default textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Basic HTML Input Control end -->
        </div>
        <!-- Base inputs end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection
