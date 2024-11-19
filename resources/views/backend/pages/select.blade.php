@extends('layout.master')
@section('title', 'Select')
@section('css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/select/select2.min.css')}}">

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Select2</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Select2</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- select2 start -->
        <div class="row">

            <!-- all Select-2 end -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-0">Select2 With Color Tags</h5>
                    </div>
                    <div class="card-body">
                        <div class="row app-form">
                            <div class="col-xl-6">
                                <div class="select_primary">
                                    <label class="form-label">Select Primary</label>
                                    <select class="select-basic-multiple-four w-100 select_primary"
                                            name="states[]"
                                            multiple="multiple">
                                        <option value="AL" selected>Alabama</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="select_secondary mt-xl-0 mt-4">
                                    <label class="form-label">Select Secondary</label>
                                    <select class="select-basic-multiple-four w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL" selected>Alabama</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="select_success mt-4 ">
                                    <label class="form-label">Select Success</label>
                                    <select class="select-basic-multiple-four w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL" selected>Alabama</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="select_danger mt-4">
                                    <label class="form-label">Select Danger</label>
                                    <select class="select-basic-multiple-four w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL" selected>Alabama</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="select_warning mt-4">
                                    <label class="form-label">Select Warning</label>
                                    <select class="select-basic-multiple-four w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL" selected>Alabama</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="select_info mt-4">
                                    <label class="form-label">Select Info</label>
                                    <select class="select-basic-multiple-four w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL" selected>Alabama</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="select_dark mt-4">
                                    <label class="form-label">Select Dark</label>
                                    <select class="select-basic-multiple-four w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL" selected>Alabama</option>
                                        <option value="WY" selected>Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Select-2 start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <h5>Select-2</h5>
                    </div>
                    <div class="card-body ">
                        <div class="row app-form">
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">Basic</label>
                                    <select class="select-example form-select select-basic" name="state">
                                        <option value="AL">Alabama</option>
                                        <option value="AL">Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">Multiple</label>
                                    <select class="form-control select-1" multiple="multiple">
                                        <option selected="selected">orange</option>
                                        <option>white</option>
                                        <option selected="selected">purple</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">Disabled</label>
                                    <select class="select-example w-100" name="state" disabled>
                                        <option value="AL">Alabama</option>
                                        <option value="AL">Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">icon</label>
                                    <select class="select2-icon " name="icon">
                                        <option value="ti-brand-html5" data-icon="ti-brand-html5">HTML5
                                        </option>
                                        <option value="ti-brand-codepen" data-icon="ti-brand-codepen">
                                            Codepen
                                        </option>
                                        <option value="ti-brand-javascript" data-icon="ti-brand-javascript">
                                            JavaScript
                                        </option>
                                        <option value="ti-brand-css3" data-icon="ti-brand-css3">CSS3
                                        </option>
                                        <option value="ti-brand-bootstrap" data-icon="ti-brand-bootstrap">
                                            Bootstrap 5
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">RTL support</label>
                                    <select class=" select-example-rtl w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">Limit The Number Of Selections</label>
                                    <select class="select-basic-multiple-four w-100" name="states[]"
                                            multiple="multiple">
                                        <option value="AL">Alabama</option>
                                        <option value="WY">Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">Disable Results</label>
                                    <select class="select-example-two w-100" name="state">
                                        <option value="AL">Alabama</option>
                                        <option value="AL" disabled>Wyoming (disabled)</option>
                                        <option value="WY">Coming</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">Flags selection</label>
                                    <select class="select2-icons" name="icon">
                                        <option value="flag-icon-ind" data-icon="flag-icon-ind">India
                                        </option>
                                        <option value="flag-icon-abw" data-icon="flag-icon-abw">Aruba
                                        </option>
                                        <option value="flag-icon-afg" data-icon="flag-icon-afg">
                                            Afghanistan
                                        </option>
                                        <option value="flag-icon-aia" data-icon="flag-icon-aia"> Anguilla
                                        </option>
                                        <option value="flag-icon-ala" data-icon="flag-icon-ala"> Åland
                                            Islands
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="mt-4">
                                    <label class="form-label">Enable-Disable</label>
                                    <select class="select-basic-multiple-five w-100" name="state">
                                        <option value="AL">Alabama</option>
                                        <option value="AL">Wyoming</option>
                                        <option value="WY">Coming</option>
                                        <option value="WY">Hanry Die</option>
                                        <option value="WY">John Doe</option>
                                    </select>
                                </div>
                                <div class="text-end">
                                    <button class="btn btn-primary select-basic-multiple-seven mt-3">
                                        Enable
                                    </button>
                                    <button class="btn btn-secondary select-basic-multiple-six mt-3">
                                        Disable
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Select start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Default Select </h5>
                    </div>
                    <div class="card-body">
                        <div class="row main-select">
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form">
                                    <select class="form-select my-3" aria-label="Default select example">
                                        <option selected="">Select your Status</option>
                                        <option value="1">Declined Payment</option>
                                        <option value="2">Delivery Error</option>
                                        <option value="3">Wrong Amount</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form">
                                    <select class="form-select rounded-pill my-3"
                                            aria-label="Default select example">
                                        <option selected="">Search for services</option>
                                        <option value="1">Information Architecture</option>
                                        <option value="2">UI/UX Design</option>
                                        <option value="3">Back End Development</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <form class="app-form">
                                    <select class="form-select my-3" aria-label="Disabled select example"
                                            disabled="">
                                        <option selected="">Open this select menu (Disabled)</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Select end -->
            <!-- Menu Size start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Menu Size</h5>
                    </div>
                    <div class="card-body">
                        <div class="row main-select">
                            <div class="col-md-6 ">
                                <form class="app-form">
                                    <select class="form-select" multiple
                                            aria-label="multiple select example">
                                        <option selected="">Open this select menu (multiple select option)
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </form>
                            </div>
                            <div class="col-md-6 ">
                                <form class="app-form">
                                    <select class="form-select" size="3" aria-label="size 3 select example">
                                        <option selected="">Open this select menu (select menu size)
                                        </option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                        <option value="5">Five</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Menu Size end -->
            <!-- Select Size start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Select Size</h5>
                    </div>
                    <div class="card-body">
                        <div class="row app-form">
                            <div class="col-md-6 col-xl-4 mb-3">
                                <select class="form-select form-select-sm"
                                        aria-label=".form-select-sm example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-3">
                                <select class="form-select" aria-label=".form-select-sm example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-3">
                                <select class="form-select form-select-lg"
                                        aria-label=".form-select-lg example">
                                    <option selected="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Select Size and -->


        </div>
        <!-- select2 end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- select2 -->
    <script src="{{asset('assets/vendor/select/select2.min.js')}}"></script>

    <!--js-->
    <script src="{{asset('assets/js/select.js')}}"></script>
@endsection
