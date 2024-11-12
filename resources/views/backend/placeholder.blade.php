@extends('layout.master')
@section('title', 'Placeholder')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Placeholder</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                            <span>
                                                <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Placeholder</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!--placeholder start -->
        <div class="row list-item">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Card Placeholder</h5>
                    </div>

                    <div class="card-body">
                        <div class="card-placeholder">
                            <div class="row">
                                <div class="col-sm-6 col-xxl-3">
                                    <div class="card equal-card">
                                        <div class="placeholder-glow">
                                            <img src="{{asset('../assets/images/placeholder/placeholder-3.jpg')}}"
                                                 class="card-img-top placeholder" alt="...">
                                        </div>

                                        <div class="card-body">
                                            <h5 class="card-title ">Card title</h5>
                                            <p class="card-text card-responsive">Some quick example text
                                                to build
                                                on the
                                                card title and make up content.
                                            </p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-3">
                                    <div class="card equal-card">
                                        <img src="{{asset('../assets/images/placeholder/placholder-1.jpg')}}"
                                             class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text card-responsive">Some quick example text
                                                to build
                                                on the
                                                card title the card's content.
                                            </p>
                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-3">
                                    <div class="card" aria-hidden="true">
                                        <img src="{{asset('../assets/images/placeholder/placholder-2.jpg')}}"
                                             class="card-img-top" alt="...">
                                        <div class="card-body">
                                                            <span class="card-title placeholder-glow">
                                                                <span class="placeholder col-6"></span>
                                                            </span>
                                            <p class="card-text placeholder-glow">
                                                <span class="placeholder col-7"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-4"></span>
                                                <span class="placeholder col-6"></span>
                                                <span class="placeholder col-8"></span>
                                            </p>

                                            <div class="d-flex gap-2">
                                                <a class="btn btn-primary  placeholder col-6" aria-disabled="true"></a>
                                                <a class="btn btn-secondary  placeholder col-6 invisible" aria-disabled="true"></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-3">
                                    <div class="card" aria-hidden="true">
                                        <img src="{{asset('../assets/images/placeholder/placeholder-4.jpg')}}"
                                             class="card-img-top" alt="...">
                                        <div class="card-body">
                                                            <span class="card-title placeholder-glow">
                                                                <span class="placeholder col-6 bg-primary"></span>
                                                            </span>
                                            <p class="card-text placeholder-glow">
                                                <span class="placeholder col-6 bg-secondary"></span>
                                                <span class="placeholder col-4 bg-secondary"></span>
                                                <span class="placeholder col-2 bg-secondary"></span>
                                                <span class="placeholder col-9 bg-secondary"></span>
                                                <span class="placeholder col-7 bg-secondary"></span>
                                            </p>
                                            <div class="d-flex gap-2">
                                                <a class="btn btn-secondary  placeholder col-6" aria-disabled="true"></a>
                                                <a class="btn btn-primary  placeholder col-6" aria-disabled="true"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Width</h5>
                    </div>

                    <div class="card-body">
                        <div class="card-placeholder">
                            <div class="d-flex flex-column gap-3">
                                <div class="placeholder col-6"></div>
                                <div class="placeholder w-75"></div>
                                <div class="placeholder" style="width: 25%;"></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Animation</h5>
                    </div>

                    <div class="card-body">
                        <div class="card-placeholder">
                            <div class="d-flex flex-column gap-4">
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12"></span>
                                </p>

                                <p class="placeholder-wave">
                                    <span class="placeholder col-12"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Colour Variant</h5>
                    </div>

                    <div class="card-body">
                        <div class="card-placeholder">
                            <div class="d-flex flex-column">
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12"></span>
                                </p>

                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-primary"></span>
                                </p>
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-secondary"></span>
                                </p>
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-success"></span>
                                </p>
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-danger"></span>
                                </p>
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-warning"></span>
                                </p>
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-info"></span>
                                </p>
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-light"></span>
                                </p>
                                <p class="placeholder-glow">
                                    <span class="placeholder col-12 bg-dark"></span>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Sizing</h5>
                    </div>

                    <div class="card-body">
                        <div class="card-placeholder">
                            <div class="d-flex flex-column gap-3">
                                <span class="placeholder col-12 placeholder-lg"></span>
                                <span class="placeholder col-12"></span>
                                <span class="placeholder col-12 placeholder-sm"></span>
                                <span class="placeholder col-12 placeholder-xs"></span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- placeholder end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection

