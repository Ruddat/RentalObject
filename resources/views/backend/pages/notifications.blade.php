@extends('layout.master')
@section('title', 'Notifications')
@section('css')
    <!-- toastify css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/toastify/toastify.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Notification</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Notification</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Notification section start  -->
        <div class="row">
            <!-- Bootstrap Toasts start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Bootstrap Toasts</h5>
                        <a data-bs-toggle="collapse" href="#Notification1" aria-expanded="false"
                           aria-controls="Notification1">
                            <i class="ti ti-code source" data-source="Notifi1"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <h6 class="mb-3">Default Toast</h6>
                                <div class="toast d-block b-1-primary bg-light-primary" role="alert"
                                     aria-live="assertive" aria-atomic="true">
                                    <div class="toast-header b-b-1-primary bg-light-primary">
                                        <img src="{{asset('../assets/images/logo/3.png')}}" class="rounded me-2 h-30 w-30 b-r-4 " alt="">
                                        <strong class="me-auto">Ra-admin</strong>
                                        <div class="bg-primary pt-1 ms-2 b-r-8">
                                            <button type="button" class="btn-close m-0 p-2 pt-0 mb-1" data-bs-dismiss="toast"
                                                    aria-label="Close"></button>
                                        </div>
                                    </div>
                                    <div class="toast-body border-primary border-opacity-25">
                                        Hello, world! This is a toast message.
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <h6 class="mb-3">Custom Content Toast</h6>
                                <div class="toast custom-content-toast d-block" role="alert" aria-live="assertive"
                                     aria-atomic="true">
                                    <div class="toast-body">
                                        Hello, world! This is a toast message.
                                        <div class="mt-2 pt-2 border-top">
                                            <button type="button" class="btn btn-primary ">Take action</button>
                                            <button type="button" class="btn btn-secondary " data-bs-dismiss="toast">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-4 mb-4 mb-lg-0">
                                <h6 class="mb-3">Color Schemes Toast</h6>
                                <div class="toast d-block align-items-center bg-primary border-0 mb-3" role="alert"
                                     aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                </div>
                                <div class="toast d-block align-items-center bg-secondary border-0" role="alert"
                                     aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            Hello, world! This is a toast message.
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                                aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <pre class="Notifi1 collapse mt-3" id="Notification1">
                    <code class="language-html">

                            &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Bootstrap Toasts&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                          &lt;div class="row"&gt;
                           &lt;div class="col-md-4"&gt;
                            &lt;h6 class="mb-3"&gt;Default Toast&lt;/h6&gt;
                            &lt;div class="toast d-block border-primary border-opacity-25 bg-light-primary" role="alert"
                             aria-live="assertive" aria-atomic="true"&gt;
                             &lt;div class="toast-header border-primary border-opacity-25 bg-light-primary"&gt;
                              &lt;img src="{{asset('assets//images/logo/03.png')}}"
                               class="rounded me-2 h-30 w-30 b-r-4 " alt=""&gt;
                              &lt;strong class="me-auto"&gt;Ra-admin&lt;/strong&gt;
                              &lt;small&gt;11 mins ago&lt;/small&gt;
                              &lt;div class="bg-primary pt-1 ms-2 b-r-8"&gt;
                               &lt;button type="button" class="btn-close m-0 p-2 pt-0 mb-1" data-bs-dismiss="toast"
                                aria-label="Close"&gt;&lt;/button&gt;
                              &lt;/div&gt;
                             &lt;/div&gt;
                             &lt;div class="toast-body border-primary border-opacity-25"&gt;
                              Hello, world! This is a toast message.
                             &lt;/div&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                        <br>
                           &lt;div class="col-md-4"&gt;
                            &lt;h6 class="mb-3"&gt;Custom Content Toast&lt;/h6&gt;
                            &lt;div class="toast d-block" role="alert" aria-live="assertive" aria-atomic="true"&gt;
                             &lt;div class="toast-body"&gt;
                              Hello, world! This is a toast message.
                              &lt;div class="mt-2 pt-2 border-top"&gt;
                               &lt;button type="button" class="btn btn-primary "&gt;Take action&lt;/button&gt;
                               &lt;button type="button" class="btn btn-secondary " data-bs-dismiss="toast"&gt;Close&lt;/button&gt;
                              &lt;/div&gt;
                             &lt;/div&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                        <br>

                           &lt;div class="col-md-4"&gt;
                            &lt;h6 class="mb-3"&gt;Color Schemes Toast&lt;/h6&gt;
                            &lt;div class="toast d-block align-items-center bg-primary border-0 mb-3" role="alert"
                             aria-live="assertive" aria-atomic="true"&gt;
                             &lt;div class="d-flex"&gt;
                              &lt;div class="toast-body"&gt;
                               Hello, world! This is a toast message.
                              &lt;/div&gt;
                              &lt;button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                               aria-label="Close"&gt;&lt;/button&gt;
                             &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;div class="toast d-block align-items-center bg-secondary border-0" role="alert"
                             aria-live="assertive" aria-atomic="true"&gt;
                             &lt;div class="d-flex"&gt;
                              &lt;div class="toast-body"&gt;
                               Hello, world! This is a toast message.
                              &lt;/div&gt;
                              &lt;button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                               aria-label="Close"&gt;&lt;/button&gt;
                             &lt;/div&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Bootstrap Toasts end -->
            <!-- Placement Toasts start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Placement Toasts</h5>
                        <a data-bs-toggle="collapse" href="#Notification2" aria-expanded="false"
                           aria-controls="Notification2">
                            <i class="ti ti-code source" data-source="Notifi2"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <button type="button" class="btn btn-light-primary" id="toastbtn">Show Toast</button>
                        <div class="toast toastbtn mt-3 bg-light-primary border-primary border-opacity-25 b-r-4">
                            <div class="toast-header bg-light-primary border-primary border-opacity-25">
                                <strong class="me-auto">Toast Header</strong>
                                <div class="bg-primary d-flex-center b-r-8">
                                    <button type="button" class="btn-close m-0 p-2" data-bs-dismiss="toast"></button>
                                </div>
                            </div>
                            <div class="toast-body">
                                <p>Some text inside the toast body</p>
                            </div>
                        </div>
                    </div>

                    <pre class="Notifi2 collapse mt-3" id="Notification2">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                            &lt;div class="card-header"&gt;
                             &lt;h5&gt;Placement Toasts&lt;/h5&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body"&gt;
                             &lt;button type="button" class="btn btn-light-primary" id="toastbtn"&gt;Show Toast&lt;/button&gt;
                             &lt;div class="toast toastbtn mt-3 bg-light-primary border-primary border-opacity-25 b-r-4"&gt;
                              &lt;div class="toast-header bg-light-primary border-primary border-opacity-25"&gt;
                          &lt;strong class="me-auto"&gt;Toast Header&lt;/strong&gt;
                          &lt;div class="bg-primary d-flex-center b-r-8"&gt;
                           &lt;button type="button" class="btn-close m-0 p-2" data-bs-dismiss="toast"&gt;&lt;/button&gt;
                          &lt;/div&gt;
                              &lt;/div&gt;
                              &lt;div class="toast-body"&gt;
                          &lt;p&gt;Some text inside the toast body&lt;/p&gt;
                              &lt;/div&gt;
                             &lt;/div&gt;
                            &lt;/div&gt;
                        <br>
                           &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Placement Toasts end -->
            <!-- Position Notification start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Position Notification</h5>
                        <a data-bs-toggle="collapse" href="#Notification3" aria-expanded="false"
                           aria-controls="Notification3">
                            <i class="ti ti-code source" data-source="Notifi3"></i>
                        </a>
                        <p>It is Very Easy to Customize, and it uses in website application.</p>
                    </div>
                    <div class="card-body">
                        <div class="app-toast-button d-flex flex-wrap gap-2">
                            <button class="btn btn-light-primary toast_top" id="new-toast">Top</button>
                            <button class="btn btn-light-secondary toast_center" id="center-toast">Center</button>
                            <button class="btn btn-light-success toast_left" id="left-toast">Left</button>
                            <button class="btn btn-light-info" id="right-toast">Right</button>
                            <button class="btn btn-light-warning" id="bottom-toast">Bottom</button>
                        </div>
                    </div>

                    <pre class="Notifi3 collapse mt-3" id="Notification3">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;h5&gt;Position Notification
                            &lt;/h5&gt;
                            &lt;p&gt;It is Very Easy to Customize and it uses in website application.&lt;/p&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            &lt;div class="app-toast-button d-flex flex-wrap gap-2"&gt;
                             &lt;button class="btn btn-light-primary toast_top" id="new-toast"&gt;Top&lt;/button&gt;
                             &lt;button class="btn btn-light-secondary toast_center" id="center-toast"&gt;Center&lt;/button&gt;
                             &lt;button class="btn btn-light-success toast_left" id="left-toast"&gt;Left&lt;/button&gt;
                             &lt;button class="btn btn-light-info" id="right-toast"&gt;Right&lt;/button&gt;
                             &lt;button class="btn btn-light-warning" id="bottom-toast"&gt;Bottom&lt;/button&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                            &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Color Notification</h5>
                        <a data-bs-toggle="collapse" href="#Notification4" aria-expanded="false"
                           aria-controls="Notification4">
                            <i class="ti ti-code source" data-source="Notifi4"></i>
                        </a>
                        <p>It is Very Easy to Customize, and it uses in website application.</p>
                    </div>
                    <div class="card-body">
                        <div class="app-toast-button">
                            <div class="d-flex gap-2 flex-wrap">
                                <button id="app-toast-primary" class="btn btn-light-primary toast-primary"
                                        onclick="handleToast(this)">Primary</button>
                                <button id="app-toast-secondary" class="btn btn-light-secondary toast-secondary"
                                        onclick="handleToast(this)">Secondary</button>
                                <button id="app-toast-success" class="btn btn-light-success toast-success"
                                        onclick="handleToast(this)">Success</button>
                                <button id="app-toast-danger" class="btn btn-light-danger toast-danger"
                                        onclick="handleToast(this)">Danger</button>
                                <button id="app-toast-warning" class="btn btn-light-warning toast-warning"
                                        onclick="handleToast(this)">Warning</button>
                                <button id="app-toast-info" class="btn btn-light-info toast-info"
                                        onclick="handleToast(this)">Info</button>
                                <button id="app-toast-light" class="btn btn-light-light toast-light"
                                        onclick="handleToast(this)">Light</button>
                                <button id="app-toast-dark" class="btn btn-light-dark toast-dark"
                                        onclick="handleToast(this)">Dark</button>
                            </div>

                            <div class="app-color-toast app-toast-primary d-none">
                                <div class="toast-item">
                                    <div class="toast-title text-primary">
                                        <i class="ti ti-download f-s-22"></i> This is a Primary toast message.
                                    </div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-primary"></i></div>
                            </div>
                            <div class="app-color-toast app-toast-secondary d-none">
                                <div class="toast-item">
                                    <div class="toast-icon text-secondary"></div>
                                    <div class="toast-title text-secondary">
                                        <i class="ti ti-butterfly f-s-22"></i>This is a Secondary toast message.
                                    </div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-secondary"></i></div>
                            </div>
                            <div class="app-color-toast app-toast-success d-none">
                                <div class="toast-item">
                                    <div class="toast-icon text-success"></div>
                                    <div class="toast-title text-success">
                                        <i class="ti ti-award f-s-22"></i> This is a success toast message.
                                    </div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-success"></i></div>
                            </div>
                            <div class="app-color-toast app-toast-danger d-none">
                                <div class="toast-item">
                                    <div class="toast-title text-danger">
                                        <i class="ti ti-power f-s-22"></i> This is a Danger toast message.
                                    </div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-danger"></i></div>
                            </div>
                            <div class="app-color-toast app-toast-warning d-none">
                                <div class="toast-item">
                                    <div class="toast-title text-warning">
                                        <i class="ti ti-alert-triangle f-s-22"></i> This is a Warning toast message.
                                    </div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-warning"></i></div>
                            </div>
                            <div class="app-color-toast app-toast-info d-none">
                                <div class="toast-item">
                                    <div class="toast-title text-info">
                                        <i class="ti ti-inbox f-s-22"></i> This is an Info toast message.
                                    </div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-info"></i></div>
                            </div>
                            <div class="app-color-toast app-toast-light d-none">
                                <div class="toast-item">
                                    <div class="toast-title text-dark"> <i class="ti ti-download f-s-22"></i> This is a Light
                                        toast message.</div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-dark"></i></div>
                            </div>
                            <div class="app-color-toast app-toast-dark d-none">
                                <div class="toast-item">
                                    <div class="toast-title text-dark">
                                        <i class="ti ti-world-download f-s-22"></i> This is a Dark toast message.
                                    </div>
                                    <div class="toast-line"></div>
                                </div>
                                <div class="toast-close"><i class="fa fa-close text-dark"></i></div>
                            </div>
                        </div>
                    </div>

                    <pre class="Notifi4 collapse mt-3" id="Notification4">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Position Notification
                          &lt;/h5&gt;
                          &lt;p&gt;It is Very Easy to Customize and it uses in website application.&lt;/p&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                          &lt;div class="app-toast-button"&gt;
                          &lt;div class="d-flex gap-2 flex-wrap"&gt;
                           &lt;button id="app-toast-primary" class="btn btn-light-primary toast-primary"
                           onclick="handleToast(this)"&gt;Primary&lt;/button&gt;
                          &lt;button id="app-toast-secondary" class="btn btn-light-secondary toast-secondary"
                           onclick="handleToast(this)"&gt;Secondary&lt;/button&gt;
                          &lt;button id="app-toast-success" class="btn btn-light-success toast-success"
                           onclick="handleToast(this)"&gt;Success&lt;/button&gt;
                          &lt;button id="app-toast-danger" class="btn btn-light-danger toast-danger"
                           onclick="handleToast(this)"&gt;Danger&lt;/button&gt;
                          &lt;button id="app-toast-warning" class="btn btn-light-warning toast-warning"
                           onclick="handleToast(this)"&gt;Warning&lt;/button&gt;
                          &lt;button id="app-toast-info" class="btn btn-light-info toast-info"
                           onclick="handleToast(this)"&gt;Info&lt;/button&gt;
                          &lt;button id="app-toast-light" class="btn btn-light-light toast-light"
                           onclick="handleToast(this)"&gt;Light&lt;/button&gt;
                          &lt;button id="app-toast-dark" class="btn btn-light-dark toast-dark"
                           onclick="handleToast(this)"&gt;Dark&lt;/button&gt;
                          &lt;/div&gt;
                        <br>
                          &lt;div class="app-color-toast app-toast-primary d-none"&gt;
                           &lt;div class="toast-item"&gt;
                            &lt;div class="toast-title text-primary"&gt;
                            &lt;i class="ti ti-download f-s-22"&gt;&lt;/i&gt; This is a Primary toast message.
                            &lt;/div&gt;
                            &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-primary"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="app-color-toast app-toast-secondary d-none"&gt;
                           &lt;div class="toast-item"&gt;
                           &lt;div class="toast-icon text-secondary"&gt;&lt;/div&gt;
                           &lt;div class="toast-title text-secondary"&gt;
                            &lt;i class="ti ti-butterfly f-s-22"&gt;&lt;/i&gt;This is a Secondary toast message.
                           &lt;/div&gt;
                           &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-secondary"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="app-color-toast app-toast-success d-none"&gt;
                           &lt;div class="toast-item"&gt;
                           &lt;div class="toast-icon text-success"&gt;&lt;/div&gt;
                           &lt;div class="toast-title text-success"&gt;
                            &lt;i class="ti ti-award f-s-22"&gt;&lt;/i&gt; This is a success toast message.
                           &lt;/div&gt;
                           &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-success"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="app-color-toast app-toast-danger d-none"&gt;
                           &lt;div class="toast-item"&gt;
                           &lt;div class="toast-title text-danger"&gt;
                            &lt;i class="ti ti-power f-s-22"&gt;&lt;/i&gt; This is a Danger toast message.
                           &lt;/div&gt;
                           &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-danger"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="app-color-toast app-toast-warning d-none"&gt;
                           &lt;div class="toast-item"&gt;
                           &lt;div class="toast-title text-warning"&gt;
                            &lt;i class="ti ti-alert-triangle f-s-22"&gt;&lt;/i&gt; This is a Warning toast message.
                           &lt;/div&gt;
                           &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-warning"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="app-color-toast app-toast-info d-none"&gt;
                           &lt;div class="toast-item"&gt;
                           &lt;div class="toast-title text-info"&gt;
                            &lt;i class="ti ti-inbox f-s-22"&gt;&lt;/i&gt; This is a Info toast message.&lt;/div&gt;
                           &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-info"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="app-color-toast app-toast-light d-none"&gt;
                           &lt;div class="toast-item"&gt;
                           &lt;div class="toast-title text-dark"&gt; &lt;i class="ti ti-download f-s-22"&gt;&lt;/i&gt; This is a Light toast message.&lt;/div&gt;
                           &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-dark"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="app-color-toast app-toast-dark d-none"&gt;
                           &lt;div class="toast-item"&gt;
                           &lt;div class="toast-title text-dark"&gt;
                            &lt;i class="ti ti-world-download f-s-22"&gt;&lt;/i&gt; This is a Dark toast message.
                           &lt;/div&gt;
                           &lt;div class="toast-line"&gt;&lt;/div&gt;
                           &lt;/div&gt;
                           &lt;div class="toast-close"&gt;&lt;i class="fa fa-close text-dark"&gt;&lt;/i&gt;&lt;/div&gt;
                          &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                        <br>
                            &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Position Notification end -->
        </div>
        <!-- Notification section end  -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- toatify js-->
<script src="{{asset('assets/vendor/notifications/toastify-js.js')}}"></script>
<script src="{{asset('assets/vendor/toastify/toastify.js')}}"></script>

<!-- notification js -->
<script src="{{asset('assets/js/notifications.js')}}"></script>
@endsection
