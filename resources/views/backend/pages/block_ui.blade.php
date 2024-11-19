@extends('layout.master')
@section('title', 'Block Ui')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Block Ui</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                            <span>
                                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Block Ui</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!--block ui start -->
        <div class="row block-ui-cards">
            <div class="col-md-6 col-lg-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Block Whole Page</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">To provide a comprehensive description suitable for
                                creating
                                an image of a "block" (assuming a city block), we'd focus on details
                                that....</p>

                            <button class="btn btn-primary w-100 mt-3" id="myButton"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card  equal-card  ">
                    <div class="card-header">
                        <h5>Block Side Bar</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">Many ad blockers have the capability to block not just advertisements but also any specific elements on a page, including sidebar content....</p>


                            <button class="btn btn-success w-100 mt-3" id="myButton1"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card block-ui-card equal-card">
                    <div class="card-header">
                        <h5>Block content</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">Extensions like AdBlock, uBlock Origin, or AdGuard can remove most types of advertisements and can often be configured to block other ......</p>


                            <button class="btn btn-danger w-100 mt-3" id="myButton2"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card block-msg-card equal-card">
                    <div class="card-header">
                        <h5>Block With Custome message</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">Blocking specific content on web pages and replacing it with a custom message can be a very specific need, typically requiring a custom solution....</p>


                            <button class="btn btn-warning w-100 mt-3" id="myButton3"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card block-mutiple-msg-card equal-card">
                    <div class="card-header">
                        <h5>Block With Multiple message</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">These popular ad-blocking extensions allow you to create custom filters. You can specify the URLs or page elements you wish to block and.....</p>


                            <button class="btn btn-info w-100 mt-3" id="myButton4"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
                <div class="multiple-msgs" style="padding: 15px 0px; cursor: default; display: none">
                    <div class="semibold">
                        <span class="icon-thumbs-o-up text-left"></span>&nbsp; Success
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card block-msg-animation-card equal-card">
                    <div class="card-header">
                        <h5>Block With Animation message</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">If you're looking to block content on websites and replace it with a custom message that includes animation, you'll likely need to use a......</p>


                            <button class="btn btn-secondary w-100 mt-3" id="myButton5"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card unblock-callback equal-card">
                    <div class="card-header">
                        <h5>OnUnblock Callback</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">When incorporating an onUnblock callback into your web content blocking and unblocking functionality, you're essentially defining a function that....</p>


                            <button class="btn btn-dark w-100 mt-3" id="myButton6"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card block-callback equal-card">
                    <div class="card-header">
                        <h5>Onblock Callback</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">An onBlock callback is a function that's executed when a specific action of blocking content on a website or application is performed. Similar to...</p>


                            <button class="btn btn-primary w-100 mt-3" id="myButton7"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card overlayclick-callback equal-card">
                    <div class="card-header">
                        <h5>On Overlay Click Callback</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">Overlays are often used for modals, lightboxes, informational pop-ups, or any full or partial screen element that appears above the main content...</p>


                            <button class="btn btn-success w-100 mt-3" id="myButton8"
                                    type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card block-primary-overlay equal-card">
                    <div class="card-header">
                        <h5>Primary Overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary"> "primary overlay" in web design and development generally refers to a key visual...
                            </p>


                            <button class="btn btn-primary w-100 mt-3" id="myButton9"
                                    type="button">Primary Overlay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card block-success-overlay equal-card">
                    <div class="card-header">
                        <h5>success Overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">Provides users with instant confirmation that the action they took , enhan....
                            </p>


                            <button class="btn btn-success w-100 mt-3" id="myButton10"
                                    type="button">success Overlay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card block-warning-overlay equal-card">
                    <div class="card-header">
                        <h5>warning Overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">Warning overlays are commonly used to inform users about potential risks, confirm ....
                            </p>


                            <button class="btn btn-warning w-100 mt-3" id="myButton11"
                                    type="button">Warning Overlay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="card block-danger-overlay equal-card">
                    <div class="card-header">
                        <h5>Danger Overlay</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <p class="f-s-16 text-secondary">Used to alert users to critical errors or issues that require immediate colours..
                            </p>


                            <button class="btn btn-danger w-100 mt-3" id="myButton12"
                                    type="button">Danger Overlay</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card block-form-spinner equal-card">
                    <div class="card-header">
                        <h5>Block Form components</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <div class="app-form">
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="Enter Your Username" id="username">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Enter Your Password" id="password">
                                </div>
                                <div class="form-check mb-3 d-flex gap-1 ps-0">
                                    <input class="form-check-input mg-2" type="checkbox" value="" id="checkDefault">
                                    <label class="form-check-label" for="checkDefault">
                                        Default checkbox
                                    </label>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary" id="myButton13">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card form-custome-message equal-card">
                    <div class="card-header">
                        <h5>Form With Animation message</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <div class="app-form">
                                <div class="mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="mb-3 form-check d-flex p-0">
                                    <input type="checkbox" class="m-1 form-check-input" id="formCheck">
                                    <label class="form-check-label" for="formCheck">remember me</label>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-success" id="myButton14">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card form-multiple-message equal-card">
                    <div class="card-header">
                        <h5>Form With Multiple message</h5>
                    </div>
                    <div class="card-body">
                        <div class="block-card-list">

                            <div class="app-form">
                                <div class="mb-3">
                                    <label class="form-label">Email address</label>
                                    <input type="email" class="form-control">

                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="mb-3 form-check d-flex gap-1 ps-0">
                                    <input class="form-check-input mg-2" type="checkbox" value="" id="invalidCheck2" required="">
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-dark" id="myButton15">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="multiple-msgs1" style="padding: 15px 0px; cursor: default; display: none">
                    <div class="semibold">
                        <span class="icon-thumbs-o-up text-left"></span>&nbsp; Success
                    </div>
                </div>
            </div>
        </div>
        <!-- block-ui end -->

    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- Block ui js  -->
    <script src="{{asset('assets/vendor/block-ui/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/block-ui/jquery.blockUI.js')}}"></script>

    <!-- js  -->
    <script src="{{asset('assets/js/block_ui.js')}}"></script>
@endsection
