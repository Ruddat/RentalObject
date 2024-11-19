@extends('layout.master')
@section('title', 'Divider')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Divider</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Divider</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Divider start -->
        <div class="row">
            <!-- Default start -->
            <div class="col-md-6 col-xl-8">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Default</h5>
                        <a  data-bs-toggle="collapse" href="#divider1"
                            aria-expanded="false" aria-controls="divider1">
                            <i class="ti ti-code source" data-source="divi1"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="app-divider-v"></div>
                        <div class="app-divider-v dotted"></div>
                        <div class="app-divider-v dashed"></div>
                    </div>

                    <pre class="divi1 collapse mt-3" id="divider1">
                    <code class="language-html">

                        &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Default&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                          &lt;div class="app-divider-v"&gt;&lt;/div&gt;
                          &lt;div class="app-divider-v dotted"&gt;&lt;/div&gt;
                          &lt;div class="app-divider-v dashed"&gt;&lt;/div&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Default end -->
            <!-- Horizontal start -->
            <div class="col-md-6 col-xl-4">
                <div class="card h-100">
                    <div class="card-header code-header">
                        <h5>Horizontal</h5>
                        <a  data-bs-toggle="collapse" href="#divider2"
                            aria-expanded="false" aria-controls="divider2">
                            <i class="ti ti-code source" data-source="divi2"></i>
                        </a>
                    </div>
                    <div class="card-body divider-body">
                        <div class="d-flex h-100">
                            <div class="app-divider-h"></div>
                            <div class="app-divider-h dotted"></div>
                            <div class="app-divider-h dashed"></div>
                        </div>
                    </div>
                    <pre class="divi2 collapse mt-3" id="divider2">
                    <code class="language-html">

                        &lt;div class="card h-100"&gt;
                            &lt;div class="card-header"&gt;
                             &lt;h5&gt;Horizontal&lt;/h5&gt;
                            &lt;/div&gt;
                            &lt;div class="card-body divider-body"&gt;
                             &lt;div class="d-flex h-100"&gt;
                             &lt;div class="app-divider-h"&gt;&lt;/div&gt;
                             &lt;div class="app-divider-h dotted"&gt;&lt;/div&gt;
                             &lt;div class="app-divider-h dashed"&gt;&lt;/div&gt;
                             &lt;/div&gt;
                            &lt;/div&gt;
                            &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Horizontal end -->
            <!-- Divider with text & aligns start -->
            <div class="col-md-6 col-xl-8">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Divider with text & aligns</h5>
                        <a  data-bs-toggle="collapse" href="#divider3"
                            aria-expanded="false" aria-controls="divider3">
                            <i class="ti ti-code source" data-source="divi3"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="app-divider-v">
                            <p>justify-content-start</p>
                        </div>
                        <div class="app-divider-v justify-content-center">
                            <p>justify-content-center</p>
                        </div>
                        <div class="app-divider-v justify-content-end">
                            <p>justify-content-end</p>
                        </div>
                    </div>

                    <pre class="divi3 collapse mt-3" id="divider3">
                    <code class="language-html">

                        &lt;div class="card"&gt;
                           &lt;div class="card-header"&gt;
                            &lt;h5&gt;Divider with text &amp; aligns&lt;/h5&gt;
                           &lt;/div&gt;
                           &lt;div class="card-body"&gt;
                            &lt;div class="app-divider-v"&gt;
                             &lt;p&gt;justify-content-start&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="app-divider-v justify-content-center"&gt;
                             &lt;p&gt;justify-content-center&lt;/p&gt;
                            &lt;/div&gt;
                            &lt;div class="app-divider-v justify-content-end"&gt;
                             &lt;p&gt;justify-content-end&lt;/p&gt;
                            &lt;/div&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;

                    </code>
                  </pre>
                </div>

            </div>
            <!-- Divider with text & aligns end -->
            <!-- Horizontal start -->
            <div class="col-md-6 col-xl-4">
                <div class="card h-100">
                    <div class="card-header code-header">
                        <h5>Horizontal</h5>
                        <a  data-bs-toggle="collapse" href="#divider4"
                            aria-expanded="false" aria-controls="divider4">
                            <i class="ti ti-code source" data-source="divi4"></i>
                        </a>
                    </div>
                    <div class="card-body divider-body d-flex">
                        <div class="app-divider-h">
                            <p>Or</p>
                        </div>
                        <div class="app-divider-h align-items-center">
                            <p>align-items-center</p>
                        </div>
                        <div class="app-divider-h align-items-end">
                            <p>Or</p>
                        </div>
                    </div>

                    <pre class="divi4 collapse mt-3" id="divider4">
                    <code class="language-html">

                        &lt;div class="card h-100"&gt;
                         &lt;div class="card-header"&gt;
                         &lt;h5&gt;Horizontal&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body divider-body d-flex"&gt;
                         &lt;div class="app-divider-h"&gt;
                         &lt;p&gt;Or&lt;/p&gt;
                         &lt;/div&gt;
                         &lt;div class="app-divider-h align-items-center"&gt;
                         &lt;p&gt;align-items-center&lt;/p&gt;
                         &lt;/div&gt;
                         &lt;div class="app-divider-h align-items-end"&gt;
                         &lt;p&gt;Or&lt;/p&gt;
                         &lt;/div&gt;
                         &lt;/div&gt;
                        &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Horizontal end -->
            <!-- Color Options With icon button start -->
            <div class="col-md-6  col-xl-8">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Color Options With icon button and so on.</h5>
                        <a  data-bs-toggle="collapse" href="#divider5"
                            aria-expanded="false" aria-controls="divider5">
                            <i class="ti ti-code source" data-source="divi5"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="app-divider-v primary">
                            <p class="text-primary">Align Left</p>
                        </div>
                        <div class="app-divider-v secondary justify-content-center">
                            <span class="badge text-bg-secondary">Login With Social</span>
                        </div>
                        <div class="app-divider-v success justify-content-end">
                            <p class="text-success">Align Right</p>
                        </div>
                        <div class="app-divider-v danger">
                            <span class="badge text-bg-danger">Choose from below option</span>
                        </div>
                        <div class="app-divider-v info justify-content-center gap-1">
                            <button type="button" class="btn btn-facebook icon-btn b-r-22"><i
                                    class="ti ti-brand-facebook text-white"></i></button>
                            <button type="button" class="btn btn-twitter icon-btn b-r-22"><i
                                    class="ti ti-brand-twitter text-white"></i></button>
                            <button type="button" class="btn btn-linkedin icon-btn b-r-22"><i
                                    class="ti ti-brand-linkedin text-white"></i></button>
                        </div>
                        <div class="app-divider-v warning justify-content-end gap-1">

                        </div>

                        <div class="app-divider-v dark justify-content-center">
                            <p>Dark</p>
                        </div>
                    </div>

                    <pre class="divi5 collapse mt-3" id="divider5">
                    <code class="language-html">

                        &lt;div class="card"&gt;
                        &lt;div class="card-header"&gt;
                        &lt;h5&gt;Color Options With icon button and so on..&lt;/h5&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body"&gt;
                        &lt;div class="app-divider-v primary"&gt;
                        &lt;p class="text-primary"&gt;Align Left&lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div class="app-divider-v secondary justify-content-center"&gt;
                        &lt;span class="badge text-bg-secondary"&gt;Login With Social&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="app-divider-v success justify-content-end"&gt;
                        &lt;p class="text-success"&gt;Align Right&lt;/p&gt;
                        &lt;/div&gt;
                        &lt;div class="app-divider-v danger"&gt;
                        &lt;span class="badge text-bg-danger"&gt;Choose from below option&lt;/span&gt;
                        &lt;/div&gt;
                        &lt;div class="app-divider-v info justify-content-center gap-1"&gt;
                        &lt;button type="button" class="btn btn-facebook icon-btn b-r-22"&gt;&lt;i
                        class="ti ti-brand-facebook text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;button type="button" class="btn btn-twitter icon-btn b-r-22"&gt;&lt;i
                        class="ti ti-brand-twitter text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;button type="button" class="btn btn-linkedin icon-btn b-r-22"&gt;&lt;i
                        class="ti ti-brand-linkedin text-white"&gt;&lt;/i&gt;&lt;/button&gt;
                        &lt;/div&gt;
                        &lt;div class="app-divider-v warning justify-content-end gap-1"&gt;
                        &lt;/div&gt;
                        &lt;div class="app-divider-v dark justify-content-center"&gt;
                        &lt;p&gt;Dark&lt;/p&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;

                    </code>
                  </pre>
                </div>

            </div>
            <!-- Color Options With icon button end -->
            <!-- Horizontal start -->
            <div class="col-md-6 col-xl-4">
                <div class="card h-100">
                    <div class="card-header code-header">
                        <h5>Horizontal</h5>
                        <a  data-bs-toggle="collapse" href="#divider6"
                            aria-expanded="false" aria-controls="divider6">
                            <i class="ti ti-code source" data-source="divi6"></i>
                        </a>
                    </div>
                    <div class="card-body divider-body d-flex">
                        <div class="app-divider-h primary"></div>
                        <div class="app-divider-h secondary"></div>
                        <div class="app-divider-h success"></div>
                        <div class="app-divider-h danger"></div>
                        <div class="app-divider-h warning"></div>
                        <div class="app-divider-h info"></div>
                        <div class="app-divider-h light"></div>
                        <div class="app-divider-h dark"></div>
                    </div>

                    <pre class="divi6 collapse mt-3" id="divider6">
                    <code class="language-html">

                          &lt;div class="card h-100"&gt;
                        &lt;div class="card-header"&gt;
                         &lt;h5&gt;Horizontal&lt;/h5&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body divider-body d-flex"&gt;
                         &lt;div class="app-divider-h primary"&gt;&lt;/div&gt;
                         &lt;div class="app-divider-h secondary"&gt;&lt;/div&gt;
                         &lt;div class="app-divider-h success"&gt;&lt;/div&gt;
                         &lt;div class="app-divider-h danger"&gt;&lt;/div&gt;
                         &lt;div class="app-divider-h warning"&gt;&lt;/div&gt;
                         &lt;div class="app-divider-h info"&gt;&lt;/div&gt;
                         &lt;div class="app-divider-h light"&gt;&lt;/div&gt;
                         &lt;div class="app-divider-h dark"&gt;&lt;/div&gt;
                        &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>
            <!-- Horizontal end -->
        </div>
        <!-- Divider end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
