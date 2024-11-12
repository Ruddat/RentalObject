@extends('layout.master')
@section('title', 'Misc')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Misc</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                        <span>
									   <i class="ph-duotone  ph-certificate f-s-16"></i> Misc
									</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- breadcrumb section start  -->
        <div class="row">

            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h5>Breadcrumbs</h5>
                    </div>
                    <div class="card-body app-breadcrumb">
                        <div>
                            <ol class="breadcrumb  bg-light-secondary p-2">
                                <li class="breadcrumb-item"><a href="#"><i class="ti ti-home"></i>Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><i
                                        class="ti ti-books"></i>Library
                                </li>
                            </ol>
                        </div>

                        <div>
                            <ol class="breadcrumb bg-light-secondary p-2">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </div>

                        <div>
                            <ol class="breadcrumb flex-wrap bg-light-secondary p-2">
                                <li class="breadcrumb-item"><a href="#"><i class="ti ti-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"><i
                                            class="ti ti-books"></i>Library</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><i
                                        class="ti ti-file-filled"></i>File
                                </li>
                            </ol>
                        </div>

                        <div class="bootstrap-breadcrumb divider">
                            <ol class="breadcrumb bg-light-secondary p-2">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Library</li>
                            </ol>
                        </div>

                        <div class="bootstrap-breadcrumb divider1">
                            <ol class="breadcrumb bg-light-secondary p-2 mb-0">
                                <li class="breadcrumb-item"><a href="#"><i class="ti ti-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"><i
                                        class="ti ti-books"></i> Library
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Custom Breadcrumbs</h5>
                    </div>
                    <div class="card-body">
                        <div>
                            <ul class="line-breadcrumbs">
                                <li><a href="#" class="active"> page1</a></li>
                                <li class="active"><a href="#"> page2</a></li>
                                <li><a href="#"> page3</a></li>
                                <li><a href="#"> page4</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <ul class="breadcrumbs">
                                <li><a href="#" class="active"><i class="ti ti-home"></i> page1</a></li>
                                <li class="active"><a href="#"><i class="ti ti-books"></i> page2</a></li>
                                <li><a href="#"><i class="ti ti-file-filled"></i> page3</a></li>
                                <li><a href="#"><i class="ti ti-database-export"></i> page4</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <ul class="circle-breadcrumbs breadcrumbs-primary">
                                <li class="active"><a href="#"><i class="ti ti-home"></i></a></li>
                                <li><a href="#"><i class="ti ti-books"></i></a></li>
                                <li><a href="#"><i class="ti ti-file-filled"></i></a></li>
                                <li><a href="#"><i class="ti ti-database-export"></i></a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <ul class="simple-breadcrumbs">
                                <li class="active"><a href="#">Page 1</a></li>
                                <li><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                                <li><a href="#">Page 4</a></li>
                                <li><a href="#">Page 5</a></li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <ul class="simple-shape-breadcrumbs">
                                <li class="active"><a href="#">Page 1</a></li>
                                <li class="active"><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                                <li><a href="#">Page 4</a></li>
                                <li><a href="#">Page 5</a></li>
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Custom Breadcrumb</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <ul class="shape-breadcrumbs">
                                <li class="active"><a href="#">Page 1</a></li>
                                <li class="active"><a href="#">Page 2</a></li>
                                <li><a href="#">Page 3</a></li>
                                <li><a href="#">Page 4</a></li>
                                <li><a href="#">Page 5</a></li>
                            </ul>
                        </div>
                        <div class="">
                            <ul class="shape-breadcrumbs">
                                <li class="active"><a href="#">Page 1</a></li>
                                <li class="active"><a href="#"><i class="ti ti-clipboard-data"></i>Page
                                        2</a></li>
                                <li class="active"><a href="#">Page 3</a></li>
                                <li><a href="#">Page 4</a></li>
                                <li><a href="#">Page 5</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Rounded Breadcrumb</h5>
                    </div>
                    <div class="card-body">

                        <div class="mb-3">
                            <ul class="rounded-breadcrumbs">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Gallery</a></li>
                                <li><a href="#">Library</a></li>
                                <li><a href="#">Web</a></li>
                                <li class="active">Data</li>
                            </ul>
                        </div>

                        <div class="mb-3">
                            <ul class="rounded-breadcrumbs">
                                <li><a href="#"><i class="ti ti-home mg-e-4 f-s-18"></i>Home</a></li>
                                <li><a href="#"><i class="ti ti-books mg-e-4 f-s-18"></i>Gallery</a></li>
                                <li><a href="#"><i class="ti ti-file-filled mg-e-4 f-s-18"></i>Library</a>
                                </li>
                                <li><a href="#"><i class="ti ti-database-export mg-e-4 f-s-18"></i>Web</a>
                                </li>
                                <li class="active"><i class="ti ti-clipboard-data mg-e-4 f-s-18"></i>Data
                                </li>
                            </ul>
                        </div>

                        <div>
                            <ul class="rounded-breadcrumbs">
                                <li><a href="#"><i class="ti ti-home mg-e-4 f-s-22"></i></a></li>
                                <li><a href="#"><i class="ti ti-books mg-e-4 f-s-22"></i></a></li>
                                <li><a href="#"><i class="ti ti-file-filled mg-e-4 f-s-22"></i></a></li>
                                <li><a href="#"><i class="ti ti-database-export mg-e-4 f-s-22"></i></a></li>
                                <li class="active"><i class="ti ti-clipboard-data mg-e-4 f-s-22"></i></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Steps</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-wizard">

                            <div class="form-wizard-header">
                                <ul class="form-wizard-steps">
                                    <li class="active">
                                        <span class="wizard-steps">1</span>
                                    </li>
                                    <li>
                                        <span class="wizard-steps">2</span>
                                    </li>
                                    <li>
                                        <span class="wizard-steps">3</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="form-wizard">
                            <div class="form-wizard-header">
                                <ul class="form-wizard-steps">
                                    <li class="active">
                                        <span class="wizard-steps circle-steps"><i class="ti ti-users"></i></span>
                                    </li>
                                    <li>
                                                    <span class="wizard-steps circle-steps"><i
                                                            class="ti ti-info-circle"></i></span>
                                    </li>
                                    <li>
                                                    <span class="wizard-steps circle-steps"><i
                                                            class="ti ti-table-export"></i></span>
                                    </li>
                                </ul>
                            </div>


                        </div>
                        <div class="mb-3">
                            <ul class="shape-step">
                                <li class="active"><a href="#"><i class="ti ti-circle-check-filled"></i>Cart</a>
                                </li>
                                <li class="active"><a href="#">Billing</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">Payment</a></li>

                            </ul>
                        </div>

                    </div>
                </div>


            </div>
            <div class="col-lg-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Pagination</h5>
                    </div>
                    <div class="card-body">
                        <div class="app-pagination-link">
                            <ul class="pagination app-pagination">
                                <li class="page-item"><a class="page-link b-r-left" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </div>

                        <div class="mt-3">
                            <ul class="pagination app-pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-3">
                            <ul class="pagination app-pagination">
                                <li class="page-item disabled">
                                    <a class="page-link b-r-left">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-3">
                            <ul class="pagination pagination-sm justify-content-end app-pagination">
                                <li class="page-item disabled">
                                    <a class="page-link b-r-left">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-3">
                            <div>
                                <ul class="pagination pagination-lg justify-content-end app-pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link b-r-left">«</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active" aria-current="page">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item d-none d-sm-block"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link b-r-right" href="#">»</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- breadcrumb section end  -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
