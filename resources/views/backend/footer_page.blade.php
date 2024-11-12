@extends('layout.master')
@section('title', 'Footer Page')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid footer-page">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Footer</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Footer</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card footer-section">
                    <div class="card-header code-header">
                        <h5>Basic Footer</h5>
                        <a data-bs-toggle="collapse" href="#basicfooterExample" aria-expanded="false"
                           aria-controls="basicfooterExample">
                            <i class="ti ti-code source" data-source="basicfooter"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <footer>
                            <div class="container-fluid">
                                <div class="row align-items-center">

                                    <div class="col-sm-6">
                                        <ul>
                                            <li>
                                                <a href="" class="footer-brand">Copyright © 2024
                                                    ra-admin. All rights reserved.</a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-6 footer-list">
                                        <ul
                                            class="text-end d-flex  justify-content-end">
                                            <li><a href="https://phpstack-426242-2145512.cloudwaysapps.com/RaAdmin/template/document.html"> Need Help <i
                                                        class="ti ti-help"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>

                        <pre class="basicfooter collapse mt-3" id="basicfooterExample">
                                            <code class="language-html">

                                                                  &lt;footer&gt;
                                                                      &lt;div class="container-fluid"&gt;
                                                                        &lt;div class="row align-items-center"&gt;
                                                                          &lt;div class="col-sm-6"&gt;
                                                                            &lt;ul&gt;
                                                                              &lt;li&gt;
                                                                                &lt;a href="" class="footer-brand"&gt;Copyright &copy; 2024 ra-admin. All rights reserved.&lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                          &lt;/div&gt;
                                                                          &lt;div class="col-sm-6"&gt;
                                                                            &lt;ul class="text-end d-flex justify-content-sm-end justify-content-center"&gt;
                                                                              &lt;li&gt; &lt;a href="https://phpstack-426242-2145512.cloudwaysapps.com/RaAdmin/template/document.html"&gt; Need Help &lt;i class="ti ti-help"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                      &lt;/div&gt;
                                                                    &lt;/footer&gt;

                                            </code>
                                        </pre>

                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card footer-section">
                    <div class="card-header code-header">
                        <h5> Footer Custom</h5>

                        <a data-bs-toggle="collapse" href="#customefooterExample" aria-expanded="false"
                           aria-controls="customefooterExample">
                            <i class="ti ti-code source" data-source="customefooter"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <footer>
                            <div class="container-fluid">
                                <div class="row align-items-center">

                                    <div class="col-sm-6">
                                        <ul>
                                            <li>
                                                <a href="" class="footer-brand">Get connected with us on
                                                    social networks:
                                                </a>
                                            </li>
                                        </ul>

                                    </div>
                                    <div class="col-sm-6 footer-list">
                                        <ul
                                            class="text-end d-flex  justify-content-end">
                                            <li>
                                                <a href=""><i
                                                        class="ti ti-brand-facebook text-footer"></i></a>
                                            </li>
                                            <li><a href="#"> <i
                                                        class="ti ti-brand-twitter text-twitter"></i>
                                                </a>
                                            </li>
                                            <li><a href="#"> <i
                                                        class="ti ti-brand-google text-whatsapp"></i>
                                                </a>
                                            </li>
                                            <li><a href="#"> <i
                                                        class="ti ti-brand-instagram text-reddit"></i></a>
                                            </li>
                                            <li><a href="#"> <i
                                                        class="ti ti-brand-linkedin text-linkedin"></i></a>
                                            </li>
                                            <li><a href="#"> <i
                                                        class="ti ti-brand-github text-github"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <pre class="customefooter collapse mt-3" id="customefooterExample">
                                            <code class="language-html">
                                                                &lt;footer&gt;
                                                                      &lt;div class="container-fluid"&gt;
                                                                        &lt;div class="row align-items-center"&gt;
                                                                          &lt;div class="col-sm-6"&gt;
                                                                            &lt;ul&gt;
                                                                              &lt;li&gt;
                                                                                &lt;a href="" class="footer-brand"&gt;Get connected with us on
                                                                                  social networks:
                                                                                &lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                          &lt;/div&gt;
                                                                          &lt;div class="col-sm-6"&gt;
                                                                            &lt;ul class="text-end d-flex  justify-content-sm-end justify-content-center"&gt;
                                                                              &lt;li&gt;
                                                                                &lt;a href=""&gt;&lt;i class="ti ti-brand-facebook text-footer"&gt;&lt;/i&gt;&lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                              &lt;li&gt; &lt;a href="#"&gt; &lt;i class="ti ti-brand-twitter text-twitter"&gt;&lt;/i&gt; &lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                              &lt;li&gt; &lt;a href="#"&gt; &lt;i class="ti ti-brand-google text-whatsapp"&gt;&lt;/i&gt; &lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                              &lt;li&gt; &lt;a href="#"&gt; &lt;i class="ti ti-brand-instagram text-reddit"&gt;&lt;/i&gt;&lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                              &lt;li&gt; &lt;a href="#"&gt; &lt;i class="ti ti-brand-linkedin text-linkedin"&gt;&lt;/i&gt;&lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                              &lt;li&gt; &lt;a href="#"&gt; &lt;i class="ti ti-brand-github text-github"&gt;&lt;/i&gt;&lt;/a&gt;
                                                                              &lt;/li&gt;
                                                                            &lt;/ul&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                      &lt;/div&gt;
                                                                    &lt;/footer&gt;

                                            </code>
                                        </pre>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card footer-section">
                    <div class="card-header code-header">
                        <h5>Footer variat</h5>
                        <a data-bs-toggle="collapse" href="#variatfooterExample" aria-expanded="false"
                           aria-controls="variatfooterExample">
                            <i class="ti ti-code source" data-source="variatfooter"></i>
                        </a>

                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <footer class="footer-primary">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="{{route('index')}}" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class="text-end d-flex  justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="mb-3">
                            <footer class="footer-secondary">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="{{route('index')}}" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class="d-flex  justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="mb-3">
                            <footer class="footer-success">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="{{route('index')}}" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class="text-end d-flex justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="mb-3">
                            <footer class="footer-danger">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="{{route('index')}}" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class="text-end d-flex justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="mb-3">
                            <footer class="footer-warning">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="{{route('index')}}" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class=" text-end d-flex justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="mb-3">
                            <footer class="footer-info">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="{{route('index')}}" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class=" text-end d-flex justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="mb-3">
                            <footer class="footer-light">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="{{route('index')}}" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class="text-end d-flex justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="mb-3">
                            <footer class="footer-dark">
                                <div class="container-fluid">
                                    <div class="row align-items-center">

                                        <div class="col-sm-6">
                                            <ul>
                                                <li>
                                                    <a href="" class="footer-brand">RA-ADMIN "©"</a>
                                                </li>
                                            </ul>

                                        </div>
                                        <div class="col-sm-6 footer-list">
                                            <ul
                                                class="text-end d-flex justify-content-end">
                                                <li>
                                                    <a class="f-s-14" href="#">supports</a>
                                                </li>
                                                <li><a class="f-s-14" href="#"> Terms & Conditions </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <pre class="variatfooter collapse mt-3" id="variatfooterExample">
                                            <code class="language-html">
                                                            &lt;div class="mb-3"&gt;
                                                              &lt;footer class="footer-primary"&gt;
                                                                &lt;div class="container-fluid"&gt;
                                                                  &lt;div class="row align-items-center"&gt;
                                                                    &lt;div class="col-sm-6"&gt;
                                                                      &lt;ul&gt;
                                                                        &lt;li&gt;
                                                                          &lt;a href="" class="footer-brand"&gt;RA-ADMIN "&copy;"&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                      &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                    &lt;div class="col-sm-6"&gt;
                                                                      &lt;ul class="text-end d-flex justify-content-sm-end justify-content-center"&gt;
                                                                        &lt;li&gt;
                                                                          &lt;a href=""&gt;supports&lt;/a&gt;
                                                                        &lt;/li&gt;
                                                                        &lt;li&gt; &lt;a href="#"&gt; Terms &amp; Conditions &lt;/a&gt;&lt;/li&gt;
                                                                      &lt;/ul&gt;
                                                                    &lt;/div&gt;
                                                                  &lt;/div&gt;
                                                                &lt;/div&gt;
                                                              &lt;/footer&gt;
                                                            &lt;/div&gt;

                                                            &lt;footer class="footer-secondary"&gt;
                                                            ....
                                                            &lt;/footer&gt;
                                                            &lt;footer class="footer-success"&gt;
                                                            ....
                                                            &lt;/footer&gt;
                                                            &lt;footer class="footer-danger"&gt;
                                                            ....
                                                            &lt;/footer&gt;
                                                            &lt;footer class="footer-warning"&gt;
                                                            ....
                                                            &lt;/footer&gt;
                                                            &lt;footer class="footer-info"&gt;
                                                            ....
                                                            &lt;/footer&gt;
                                                            &lt;footer class="footer-light"&gt;
                                                            ....
                                                            &lt;/footer&gt;
                                                            &lt;footer class="footer-dark"&gt;
                                                            ....
                                                            &lt;/footer&gt;
                                                       </code>
                                        </pre>


                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5> Footer Custom</h5>

                        <a data-bs-toggle="collapse" href="#mainfooterExample" aria-expanded="false"
                           aria-controls="mainfooterExample">
                            <i class="ti ti-code source" data-source="mainfooterfooter"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <footer>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto">
                                        <div class="footer-first">
                                            <div class="footer-title">
                                                <img src="{{asset('../assets/images/logo/1.png')}}" class="w-140"
                                                     alt="">
                                            </div>
                                            <div class="mt-3">
                                                <p>Here you can use rows and columns to organize your
                                                    footer
                                                    content. Lorem ipsum dolor sit amet, consectetur
                                                    adipisicing elit.</p>
                                            </div>
                                            <div class="social-btn d-flex mt-3">
                                                <button type="button"
                                                        class="btn btn-facebook icon-btn b-r-22"><i
                                                        class="ti ti-brand-facebook text-white"></i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-twitter icon-btn b-r-22 mx-3"><i
                                                        class="ti ti-brand-twitter text-white"></i></button>
                                                <button type="button"
                                                        class="btn btn-linkedin icon-btn b-r-22 "><i
                                                        class="ti ti-brand-linkedin text-white"></i>
                                                </button>
                                                <button type="button"
                                                        class="btn btn-github icon-btn b-r-22 mx-3"><i
                                                        class="ti ti-brand-github text-white"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                                        <div class="footer-first">
                                            <div class="footer-title">
                                                <h5 class="text-uppercase f-w-600 mb-3 text-primary f-s-16">
                                                    products
                                                </h5>
                                            </div>
                                            <div class="footer-sub">
                                                <ul>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">Angular</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">React</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">Vue</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">Laravel</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                                        <div class="footer-first">
                                            <div class="footer-title">
                                                <h5 class="text-uppercase f-w-600 mb-3 text-primary f-s-16">
                                                    USEFUL
                                                    LINKS</h5>
                                            </div>
                                            <div class="footer-sub">
                                                <ul>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">Pricing</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">Settings</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">Orders</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <a href="#" class="f-w-500 f-s-15 text-dark">Help</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto">
                                        <div class="footer-first">
                                            <div class="footer-title ">
                                                <h5 class="text-uppercase f-w-600  mb-3 text-primary f-s-16">
                                                    CONTACT
                                                </h5>
                                            </div>
                                            <div class="footer-sub">
                                                <ul>
                                                    <li class="mb-3 f-s-15 f-w-500 text-dark">
                                                        <i class="ti ti-brand-google-home me-2 text-primary"></i> New
                                                        York, NY 10012, US
                                                    </li>
                                                    <li class="mb-3 f-s-15 f-w-500 text-dark ">
                                                        <i class="ti ti-mail me-2 text-primary"></i> info@example.com


                                                    </li>
                                                    <li class="mb-3 f-s-15 f-w-500 text-dark">
                                                        <i class="ti ti-phone me-2 text-primary"></i> + 01 234 567 88
                                                    </li>
                                                    <li class="mb-3 f-s-15 f-w-500 text-dark">
                                                        <i class="ti ti-device-landline-phone me-2 text-primary"></i>
                                                        + 01 234 567 89
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        <pre class="mainfooterfooter collapse mt-3" id="mainfooterExample">
                                            <code class="language-html">
                 &lt;footer&gt;
                      &lt;div class="container-fluid"&gt;
                        &lt;div class="row"&gt;
                          &lt;div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"&gt;
                            &lt;div class="footer-first"&gt;
                              &lt;div class="footer-title"&gt;
                               &lt;img src="{{asset('assets//images/logo/1.png')}}" class="w-140" alt=""&gt;
                              &lt;/div&gt;
                              &lt;div class="mt-3"&gt;
                                &lt;p&gt;Here you can use rows and columns to organize your footer
                                  content. Lorem ipsum dolor sit amet, consectetur
                                  adipisicing elit.&lt;/p&gt;
                              &lt;/div&gt;
                              &lt;div class="social-btn d-flex mt-3"&gt;
                                &lt;button type="button"
                                  class="btn btn-facebook icon-btn b-r-22"&gt;&lt;i
                                    class="ti ti-brand-facebook text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                                &lt;button type="button"
                                  class="btn btn-twitter icon-btn b-r-22 mx-3"&gt;&lt;i
                                    class="ti ti-brand-twitter text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                                &lt;button type="button"
                                  class="btn btn-linkedin icon-btn b-r-22 "&gt;&lt;i
                                    class="ti ti-brand-linkedin text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                                &lt;button type="button"
                                  class="btn btn-github icon-btn b-r-22 mx-3"&gt;&lt;i
                                    class="ti ti-brand-github text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-3"&gt;
                            &lt;div class="footer-first"&gt;
                              &lt;div class="footer-title"&gt;
                                &lt;h5 class="text-uppercase f-w-600 mb-3 text-primary"&gt;products
                                &lt;/h5&gt;
                              &lt;/div&gt;
                              &lt;div class="footer-sub"&gt;
                                &lt;ul&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;Angular&lt;/a&gt;
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;React&lt;/a&gt;
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;Vue&lt;/a&gt;
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;Laravel&lt;/a&gt;
                                  &lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-3"&gt;
                            &lt;div class="footer-first"&gt;
                              &lt;div class="footer-title"&gt;
                                &lt;h5 class="text-uppercase f-w-600 mb-3 text-primary"&gt;USEFUL
                                  LINKS&lt;/h5&gt;
                              &lt;/div&gt;
                              &lt;div class="footer-sub"&gt;
                                &lt;ul&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;Pricing&lt;/a&gt;
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;Settings&lt;/a&gt;
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;Orders&lt;/a&gt;
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;a href=""&gt;Help&lt;/a&gt;
                                  &lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                          &lt;div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-3"&gt;
                            &lt;div class="footer-first"&gt;
                              &lt;div class="footer-title "&gt;
                                &lt;h5 class="text-uppercase f-w-600 mb-3 text-primary"&gt;CONTACT
                                &lt;/h5&gt;
                              &lt;/div&gt;
                              &lt;div class="footer-sub"&gt;
                                &lt;ul&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;i class="ti ti-brand-google-home me-2"&gt;&lt;/i&gt; New
                                    York, NY 10012, US
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;i class="ti ti-mail me-2"&gt;&lt;/i&gt; info@example.com
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;i class="ti ti-phone me-2"&gt;&lt;/i&gt; + 01 234 567 88
                                  &lt;/li&gt;
                                  &lt;li class="mb-3"&gt;
                                    &lt;i class="ti ti-device-landline-phone me-2"&gt;&lt;/i&gt;
                                    + 01 234 567 89
                                  &lt;/li&gt;
                                &lt;/ul&gt;
                              &lt;/div&gt;
                            &lt;/div&gt;
                          &lt;/div&gt;
                        &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/footer&gt;
                                            </code>
                                        </pre>
                    </div>
                </div>
            </div>
        </div>
    </div>@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection

