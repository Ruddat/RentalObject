@extends('layout.master')
@section('title', 'Alignment')
@section('css')


@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Alignment</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                  <span>
                                    <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                                  </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Alignment</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!--alignment section start -->
        <div class="col-12">
            <div class="card">
                <div class="card-header code-header">
                    <h5>Text Alignment</h5>
                    <a data-bs-toggle="collapse" href="#textalignmentExample"
                       aria-expanded="false" aria-controls="textalignmentExample">
                        <i class="ti ti-code source" data-source="textalignment"></i>
                    </a>
                </div>

                <div class="card-body">
                    <div class="row center-thing-responsive">
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="top-center">
                                    <i class="ph-light ph-text-align-center"></i>

                                </div>

                            </div>
                            <p class="f-s-16 text-center m-2">top-center</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="center">
                                    <i class="ph-light  ph-text-align-center"></i>
                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">center</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="bottom-center">
                                    <i class="ph-light   ph-text-align-center"></i>

                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">bottom-center</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="left-center">
                                    <i class="ph-light  ph-text-align-left"></i>

                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">left-center</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="right-center">
                                    <i class="ph-light  ph-text-align-right"></i>

                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">right-center</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="top-left">
                                    <i class="ph-light  ph-text-align-left"></i>
                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">top-left</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="top-right">
                                    <i class="ph-light  ph-text-align-right"></i>
                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">top-right</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="bottom-left">
                                    <i class="ph-light  ph-text-align-left"></i>
                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">bottom-left</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="bottom-right ">
                                    <i class="ph-light  ph-text-align-right"></i>
                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">bottom-right</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="center-horizantal">
                                    <i class="ph-light   ph-align-center-horizontal"></i>
                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">center-horizantal</p>
                        </div>
                        <div class="col-4 col-md-3 col-xxl-2">
                            <div class="center-thing mt-3">
                                <div class="center-vertical">
                                    <i class="ph-light   ph-align-center-vertical"></i>
                                </div>
                            </div>
                            <p class="f-s-16 text-center m-2">center-vertical</p>
                        </div>


                    </div>


                    <pre class="textalignment collapse mt-3" id="textalignmentExample">
                                            <code class="language-html">
                                                &lt;div class="row center-thing-responsive"&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="top-center"&gt;
                                                                            &lt;i class="ph-light ph-text-align-center"&gt;&lt;/i&gt;

                                                                          &lt;/div&gt;

                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;top-center&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="center"&gt;
                                                                            &lt;i class="ph-light ph-text-align-center"&gt;&lt;/i&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;center&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="bottom-center"&gt;
                                                                            &lt;i class="ph-light  ph-text-align-center"&gt;&lt;/i&gt;

                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;bottom-center&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="left-center"&gt;
                                                                            &lt;i class="ph-light ph-text-align-left"&gt;&lt;/i&gt;

                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;left-center&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="right-center"&gt;
                                                                            &lt;i class="ph-light ph-text-align-right"&gt;&lt;/i&gt;

                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;right-center&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="top-left"&gt;
                                                                           &lt;i class="ph-light ph-text-align-left"&gt;&lt;/i&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;top-left&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="top-right"&gt;
                                                                            &lt;i class="ph-light ph-text-align-right"&gt;&lt;/i&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;top-right&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="bottom-left"&gt;
                                                                            &lt;i class="ph-light ph-text-align-left"&gt;&lt;/i&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;bottom-left&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="bottom-right "&gt;
                                                                            &lt;i class="ph-light ph-text-align-right"&gt;&lt;/i&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;bottom-right&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="center-horizantal"&gt;
                                                                            &lt;i class="ph-light  ph-align-center-horizontal"&gt;&lt;/i&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;center-horizantal&lt;/p&gt;
                                                                      &lt;/div&gt;
                                                                      &lt;div class="col-4 col-md-3 col-xxl-2"&gt;
                                                                        &lt;div class="center-thing mt-3"&gt;
                                                                          &lt;div class="center-vertical"&gt;
                                                                            &lt;i class="ph-light  ph-align-center-vertical"&gt;&lt;/i&gt;
                                                                          &lt;/div&gt;
                                                                        &lt;/div&gt;
                                                                        &lt;p class="f-s-16 text-center m-2"&gt;center-vertical&lt;/p&gt;
                                                                      &lt;/div&gt;

                                                                    &lt;/div&gt;
                                            </code>
                                        </pre>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header code-header">
                    <h5>image alignment</h5>
                    <a data-bs-toggle="collapse" href="#imagealignmentExample"
                       aria-expanded="false" aria-controls="imagealignmentExample">
                        <i class="ti ti-code source" data-source="imagealignment"></i>
                    </a>
                </div>

                <div class="card-body">
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-3">
                                <div class="image-center-thing">
                                    <div class="image-top-left">
                                        <img src="{{asset('assets/images/placeholder/05.png')}}" alt="">
                                    </div>
                                </div>
                                <p class="f-s-16 text-center m-2">image-top-left</p>
                            </div>
                            <div class="col-xl-3">
                                <div class="image-center-thing">
                                    <div class="image-center">
                                        <img src="{{asset('assets/images/placeholder/05.png')}}" alt="">
                                    </div>
                                </div>
                                <p class="f-s-16 text-center m-2">image-center</p>
                            </div>
                            <div class="col-xl-3">
                                <div class="image-center-thing">
                                    <div class="image-bottom-right">
                                        <img src="{{asset('assets/images/placeholder/05.png')}}" alt="">
                                    </div>
                                </div>
                                <p class="f-s-16 text-center m-2">image-bottom-right</p>

                            </div>
                            <div class="col-xl-3">
                                <div class="image-center-thing">
                                    <div class="image-top-right">
                                        <img src="{{asset('assets/images/placeholder/05.png')}}" alt="">
                                    </div>
                                </div>
                                <p class="f-s-16 text-center m-2">image-top-right</p>
                            </div>
                            <div class="col-xl-3">
                                <div class="image-center-thing mt-3">
                                    <div class="image-bottom-left">
                                        <img src="{{asset('assets/images/placeholder/05.png')}}" alt="">
                                    </div>
                                </div>
                                <p class="f-s-16 text-center m-2">image-bottom-left</p>

                            </div>
                        </div>

                    </div>
                    <pre class="imagealignment collapse mt-3" id="imagealignmentExample">
                                        <code class="language-html">
                &lt;div class="col-xl-12"&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col-xl-3"&gt;
                        &lt;div class="image-center-thing"&gt;
                          &lt;div class="image-top-left"&gt;
                            &lt;img src="{{asset('assets/images/placeholder/05.png')}}" alt=""&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="col-xl-3"&gt;
                        &lt;div class="image-center-thing"&gt;
                          &lt;div class="image-center"&gt;
                            &lt;img src="{{asset('../assets/images/placeholder/05.png')}}" alt=""&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="col-xl-3"&gt;
                        &lt;div class="image-center-thing"&gt;
                          &lt;div class="image-bottom-right"&gt;
                            &lt;img src="{{asset('../assets/images/placeholder/05.png')}}" alt=""&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="col-xl-3"&gt;
                        &lt;div class="image-center-thing"&gt;
                          &lt;div class="image-top-right"&gt;
                            &lt;img src="{{asset('../assets/images/placeholder/05.png')}}" alt=""&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div class="col-xl-3"&gt;
                        &lt;div class="image-center-thing mt-3"&gt;
                          &lt;div class="image-bottom-left"&gt;
                            &lt;img src="{{asset('../assets/images/placeholder/05.png')}}" alt=""&gt;
                          &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                                        </code>
                                     </pre>
                </div>
            </div>
        </div>
        <!-- alignment section end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection



