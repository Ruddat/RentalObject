@extends('layout.master')
@section('title', 'Fontawesome')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome/css/all.css')}}">

    <!--notifications-css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/notifications/toastify.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Fontawesome</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                            <span>
                                                <i class="ph-duotone  ph-shapes f-s-16"></i> Icons
                                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Fontawesome</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="search-bar app-form app-icon-form position-relative">
                                    <input type="search" class="form-control" name="search"
                                           placeholder="type to search">
                                    <i class="ti ti-search text-secondary"></i>
                                </div>
                            </div>

                            <div class="col-md-8 text-end pt-2">

                            </div>
                        </div>
                    </div>

                    <div class="card-body d-flex justify-content-between align-items-center">
                        <ul class="icon-list space-top-icon">
                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-adjust fa-fw"></i>
                                <strong class="mb-3">Adjust</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-adn fa-fw"></i>
                                <strong class="mb-3">Adn</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-align-center fa-fw"></i>
                                <strong class="mb-3">Align center</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-align-justify fa-fw"></i>
                                <strong class="mb-3">Align justify</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-align-left fa-fw"></i>
                                <strong class="mb-3">Align left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-align-right fa-fw"></i>
                                <strong class="mb-3">Align right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-amazon fa-fw"></i>
                                <strong class="mb-3">Amazon</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-ambulance fa-fw"></i>
                                <strong class="mb-3">Ambulance</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-anchor fa-fw"></i>
                                <strong class="mb-3">Anchor</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-android fa-fw"></i>
                                <strong class="mb-3">Android</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-angellist fa-fw"></i>
                                <strong class="mb-3">Angellist</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-double-down fa-fw"></i>
                                <strong class="mb-3">Angle double down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-double-left fa-fw"></i>
                                <strong class="mb-3">Angle double left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-double-right fa-fw"></i>
                                <strong class="mb-3">Angle double right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-double-up fa-fw"></i>
                                <strong class="mb-3">Angle double up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-down fa-fw"></i>
                                <strong class="mb-3">Angle down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-left fa-fw"></i>
                                <strong class="mb-3">Angle left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-right fa-fw"></i>
                                <strong class="mb-3">Angle right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-angle-up fa-fw"></i>
                                <strong class="mb-3">Angle up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid  fa-brands fa-apple fa-fw"></i>
                                <strong class="mb-3">Apple</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-archive fa-fw"></i>
                                <strong class="mb-3">Archive</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-area-chart fa-fw"></i>
                                <strong class="mb-3">Area chart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-circle-down fa-fw"></i>
                                <strong class="mb-3">Arrow circle down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-circle-left fa-fw"></i>
                                <strong class="mb-3">Arrow circle left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid  fa-circle-down fa-fw"></i>
                                <strong class="mb-3">Arrow circle o down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-circle-left fa-fw"></i>
                                <strong class="mb-3">Arrow circle o left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-circle-right fa-fw"></i>
                                <strong class="mb-3">Arrow circle o right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-circle-up fa-fw"></i>
                                <strong class="mb-3">Arrow circle o up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-circle-right fa-fw"></i>
                                <strong class="mb-3">Arrow circle right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-circle-up fa-fw"></i>
                                <strong class="mb-3">Arrow circle up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-down fa-fw"></i>
                                <strong class="mb-3">Arrow down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-left fa-fw"></i>
                                <strong class="mb-3">Arrow left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-right fa-fw"></i>
                                <strong class="mb-3">Arrow right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrow-up fa-fw"></i>
                                <strong class="mb-3">Arrow up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrows fa-fw"></i>
                                <strong class="mb-3">Arrows</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrows-alt fa-fw"></i>
                                <strong class="mb-3">Arrows alt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrows-h fa-fw"></i>
                                <strong class="mb-3">Arrows h</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-arrows-v fa-fw"></i>
                                <strong class="mb-3">Arrows v</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-asterisk fa-fw"></i>
                                <strong class="mb-3">Asterisk</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-at fa-fw"></i>
                                <strong class="mb-3">At</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-backward fa-fw"></i>
                                <strong class="mb-3">Backward</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-balance-scale fa-fw"></i>
                                <strong class="mb-3">Balance scale</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-ban fa-fw"></i>
                                <strong class="mb-3">Ban</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bar-chart fa-fw"></i>
                                <strong class="mb-3">Bar chart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-barcode fa-fw"></i>
                                <strong class="mb-3">Barcode</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bars fa-fw"></i>
                                <strong class="mb-3">Bars</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-battery-empty fa-fw"></i>
                                <strong class="mb-3">Battery empty</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-battery-full fa-fw"></i>
                                <strong class="mb-3">Battery full</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-battery-half fa-fw"></i>
                                <strong class="mb-3">Battery half</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-battery-quarter fa-fw"></i>
                                <strong class="mb-3">Battery quarter</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-battery-three-quarters fa-fw"></i>
                                <strong class="mb-3">Battery three quarters</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bed fa-fw"></i>
                                <strong class="mb-3">Bed</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-beer fa-fw"></i>
                                <strong class="mb-3">Beer</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-behance fa-fw"></i>
                                <strong class="mb-3">Behance</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid  fa-behance-square fa-fw"></i>
                                <strong class="mb-3">Behance square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bell fa-fw"></i>
                                <strong class="mb-3">Bell</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bell-slash fa-fw"></i>
                                <strong class="mb-3">Bell slash</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bicycle fa-fw"></i>
                                <strong class="mb-3">Bicycle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-binoculars fa-fw"></i>
                                <strong class="mb-3">Binoculars</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-birthday-cake fa-fw"></i>
                                <strong class="mb-3">Birthday cake</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-bitbucket fa-fw"></i>
                                <strong class="mb-3">Bitbucket</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-black-tie fa-fw"></i>
                                <strong class="mb-3">Black tie</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bold fa-fw"></i>
                                <strong class="mb-3">Bold</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bolt fa-fw"></i>
                                <strong class="mb-3">Bolt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bomb fa-fw"></i>
                                <strong class="mb-3">Bomb</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-book fa-fw"></i>
                                <strong class="mb-3">Book</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bookmark fa-fw"></i>
                                <strong class="mb-3">Bookmark</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bookmark fa-fw"></i>
                                <strong class="mb-3">Bookmark o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-briefcase fa-fw"></i>
                                <strong class="mb-3">Briefcase</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-btc fa-fw"></i>
                                <strong class="mb-3">Btc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bug fa-fw"></i>
                                <strong class="mb-3">Bug</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-building fa-fw"></i>
                                <strong class="mb-3">Building</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-building fa-fw"></i>
                                <strong class="mb-3">Building o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bullhorn fa-fw"></i>
                                <strong class="mb-3">Bullhorn</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bullseye fa-fw"></i>
                                <strong class="mb-3">Bullseye</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-bus fa-fw"></i>
                                <strong class="mb-3">Bus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-buysellads fa-fw"></i>
                                <strong class="mb-3">Buysellads</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-calculator fa-fw"></i>
                                <strong class="mb-3">Calculator</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-calendar fa-fw"></i>
                                <strong class="mb-3">Calendar</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-calendar-check fa-fw"></i>
                                <strong class="mb-3">Calendar check o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-calendar-minus fa-fw"></i>
                                <strong class="mb-3">Calendar minus o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-calendar fa-fw"></i>
                                <strong class="mb-3">Calendar o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-calendar-plus fa-fw"></i>
                                <strong class="mb-3">Calendar plus o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-calendar-times fa-fw"></i>
                                <strong class="mb-3">Calendar times o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-camera fa-fw"></i>
                                <strong class="mb-3">Camera</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-camera-retro fa-fw"></i>
                                <strong class="mb-3">Camera retro</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-car fa-fw"></i>
                                <strong class="mb-3">Car</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-down fa-fw"></i>
                                <strong class="mb-3">Caret down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-left fa-fw"></i>
                                <strong class="mb-3">Caret left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-right fa-fw"></i>
                                <strong class="mb-3">Caret right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-square-down fa-fw"></i>
                                <strong class="mb-3">Caret square o down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-square-left fa-fw"></i>
                                <strong class="mb-3">Caret square o left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-square-right fa-fw"></i>
                                <strong class="mb-3">Caret square o right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-square-up fa-fw"></i>
                                <strong class="mb-3">Caret square o up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-caret-up fa-fw"></i>
                                <strong class="mb-3">Caret up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cart-arrow-down fa-fw"></i>
                                <strong class="mb-3">Cart arrow down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cart-plus fa-fw"></i>
                                <strong class="mb-3">Cart plus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-amex fa-fw"></i>
                                <strong class="mb-3">Cc amex</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-diners-club fa-fw"></i>
                                <strong class="mb-3">Cc diners club</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-discover fa-fw"></i>
                                <strong class="mb-3">Cc discover</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-jcb fa-fw"></i>
                                <strong class="mb-3">Cc jcb</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-mastercard fa-fw"></i>
                                <strong class="mb-3">Cc mastercard</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-paypal fa-fw"></i>
                                <strong class="mb-3">Cc paypal</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-stripe fa-fw"></i>
                                <strong class="mb-3">Cc stripe</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-cc-visa fa-fw"></i>
                                <strong class="mb-3">Cc visa</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-certificate fa-fw"></i>
                                <strong class="mb-3">Certificate</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chain-broken fa-fw"></i>
                                <strong class="mb-3">Chain broken</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-check fa-fw"></i>
                                <strong class="mb-3">Check</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-check-circle fa-fw"></i>
                                <strong class="mb-3">Check circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-check-circle fa-fw"></i>
                                <strong class="mb-3">Check circle o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-check-square fa-fw"></i>
                                <strong class="mb-3">Check square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-check-square fa-fw"></i>
                                <strong class="mb-3">Check square o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-circle-down fa-fw"></i>
                                <strong class="mb-3">Chevron circle down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-circle-left fa-fw"></i>
                                <strong class="mb-3">Chevron circle left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-circle-right fa-fw"></i>
                                <strong class="mb-3">Chevron circle right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-circle-up fa-fw"></i>
                                <strong class="mb-3">Chevron circle up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-down fa-fw"></i>
                                <strong class="mb-3">Chevron down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-left fa-fw"></i>
                                <strong class="mb-3">Chevron left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-right fa-fw"></i>
                                <strong class="mb-3">Chevron right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-chevron-up fa-fw"></i>
                                <strong class="mb-3">Chevron up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-child fa-fw"></i>
                                <strong class="mb-3">Child</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-chrome fa-fw"></i>
                                <strong class="mb-3">Chrome</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-circle fa-fw"></i>
                                <strong class="mb-3">Circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-circle fa-fw"></i>
                                <strong class="mb-3">Circle o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-circle-notch fa-fw"></i>
                                <strong class="mb-3">Circle o notch</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-circle fa-fw"></i>
                                <strong class="mb-3">Circle thin</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-clipboard fa-fw"></i>
                                <strong class="mb-3">Clipboard</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-clock fa-fw"></i>
                                <strong class="mb-3">Clock o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-clone fa-fw"></i>
                                <strong class="mb-3">Clone</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cloud fa-fw"></i>
                                <strong class="mb-3">Cloud</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cloud-download fa-fw"></i>
                                <strong class="mb-3">Cloud download</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cloud-upload fa-fw"></i>
                                <strong class="mb-3">Cloud upload</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-code fa-fw"></i>
                                <strong class="mb-3">Code</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-code-fork fa-fw"></i>
                                <strong class="mb-3">Code fork</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-codepen fa-fw"></i>
                                <strong class="mb-3">Codepen</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-coffee fa-fw"></i>
                                <strong class="mb-3">Coffee</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cog fa-fw"></i>
                                <strong class="mb-3">Cog</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cogs fa-fw"></i>
                                <strong class="mb-3">Cogs</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-columns fa-fw"></i>
                                <strong class="mb-3">Columns</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-comment fa-fw"></i>
                                <strong class="mb-3">Comment</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-comment fa-fw"></i>
                                <strong class="mb-3">Comment o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-commenting fa-fw"></i>
                                <strong class="mb-3">Commenting</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-commenting fa-fw"></i>
                                <strong class="mb-3">Commenting o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-comments fa-fw"></i>
                                <strong class="mb-3">Comments</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-comments fa-fw"></i>
                                <strong class="mb-3">Comments o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-compass fa-fw"></i>
                                <strong class="mb-3">Compass</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-compress fa-fw"></i>
                                <strong class="mb-3">Compress</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-connectdevelop fa-fw"></i>
                                <strong class="mb-3">Connectdevelop</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-contao fa-fw"></i>
                                <strong class="mb-3">Contao</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-copyright fa-fw"></i>
                                <strong class="mb-3">Copyright</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-creative-commons fa-fw"></i>
                                <strong class="mb-3">Creative commons</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-credit-card fa-fw"></i>
                                <strong class="mb-3">Credit card</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-crop fa-fw"></i>
                                <strong class="mb-3">Crop</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-crosshairs fa-fw"></i>
                                <strong class="mb-3">Crosshairs</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-css3 fa-fw"></i>
                                <strong class="mb-3">Css3</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cube fa-fw"></i>
                                <strong class="mb-3">Cube</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cubes fa-fw"></i>
                                <strong class="mb-3">Cubes</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-cutlery fa-fw"></i>
                                <strong class="mb-3">Cutlery</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-dashcube fa-fw"></i>
                                <strong class="mb-3">Dashcube</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-database fa-fw"></i>
                                <strong class="mb-3">Database</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-delicious fa-fw"></i>
                                <strong class="mb-3">Delicious</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-desktop fa-fw"></i>
                                <strong class="mb-3">Desktop</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-deviantart fa-fw"></i>
                                <strong class="mb-3">Deviantart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-diamond fa-fw"></i>
                                <strong class="mb-3">Diamond</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-digg fa-fw"></i>
                                <strong class="mb-3">Digg</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-dot-circle fa-fw"></i>
                                <strong class="mb-3">Dot circle o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-download fa-fw"></i>
                                <strong class="mb-3">Download</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-dribbble fa-fw"></i>
                                <strong class="mb-3">Dribbble</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-dropbox fa-fw"></i>
                                <strong class="mb-3">Dropbox</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-drupal fa-fw"></i>
                                <strong class="mb-3">Drupal</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-eject fa-fw"></i>
                                <strong class="mb-3">Eject</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-ellipsis-h fa-fw"></i>
                                <strong class="mb-3">Ellipsis h</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-ellipsis-v fa-fw"></i>
                                <strong class="mb-3">Ellipsis v</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-empire fa-fw"></i>
                                <strong class="mb-3">Empire</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-envelope fa-fw"></i>
                                <strong class="mb-3">Envelope</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-envelope fa-fw"></i>
                                <strong class="mb-3">Envelope o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-envelope-square fa-fw"></i>
                                <strong class="mb-3">Envelope square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-eraser fa-fw"></i>
                                <strong class="mb-3">Eraser</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-eur fa-fw"></i>
                                <strong class="mb-3">Eur</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-exchange fa-fw"></i>
                                <strong class="mb-3">Exchange</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-exclamation fa-fw"></i>
                                <strong class="mb-3">Exclamation</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-exclamation-circle fa-fw"></i>
                                <strong class="mb-3">Exclamation circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-exclamation-triangle fa-fw"></i>
                                <strong class="mb-3">Exclamation triangle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-expand fa-fw"></i>
                                <strong class="mb-3">Expand</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-expeditedssl fa-fw"></i>
                                <strong class="mb-3">Expeditedssl</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-external-link fa-fw"></i>
                                <strong class="mb-3">External link</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-external-link-square fa-fw"></i>
                                <strong class="mb-3">External link square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-eye fa-fw"></i>
                                <strong class="mb-3">Eye</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-eye-slash fa-fw"></i>
                                <strong class="mb-3">Eye slash</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-eyedropper fa-fw"></i>
                                <strong class="mb-3">Eyedropper</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-facebook fa-fw"></i>
                                <strong class="mb-3">Facebook</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-facebook-square fa-fw"></i>
                                <strong class="mb-3">Facebook square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-fast-backward fa-fw"></i>
                                <strong class="mb-3">Fast backward</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-fast-forward fa-fw"></i>
                                <strong class="mb-3">Fast forward</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-fax fa-fw"></i>
                                <strong class="mb-3">Fax</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-female fa-fw"></i>
                                <strong class="mb-3">Female</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-fighter-jet fa-fw"></i>
                                <strong class="mb-3">Fighter jet</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file fa-fw"></i>
                                <strong class="mb-3">File</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-archive fa-fw"></i>
                                <strong class="mb-3">File archive o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-audio fa-fw"></i>
                                <strong class="mb-3">File audio o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-code fa-fw"></i>
                                <strong class="mb-3">File code o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-excel fa-fw"></i>
                                <strong class="mb-3">File excel o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-image fa-fw"></i>
                                <strong class="mb-3">File image o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-pdf fa-fw"></i>
                                <strong class="mb-3">File pdf o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-powerpoint fa-fw"></i>
                                <strong class="mb-3">File powerpoint o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-text fa-fw"></i>
                                <strong class="mb-3">File text</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-text fa-fw"></i>
                                <strong class="mb-3">File text o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-video fa-fw"></i>
                                <strong class="mb-3">File video o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-file-word fa-fw"></i>
                                <strong class="mb-3">File word o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-film fa-fw"></i>
                                <strong class="mb-3">Film</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-filter fa-fw"></i>
                                <strong class="mb-3">Filter</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-fire fa-fw"></i>
                                <strong class="mb-3">Fire</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-fire-extinguisher fa-fw"></i>
                                <strong class="mb-3">Fire extinguisher</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-firefox fa-fw"></i>
                                <strong class="mb-3">Firefox</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-flag fa-fw"></i>
                                <strong class="mb-3">Flag</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-flag-checkered fa-fw"></i>
                                <strong class="mb-3">Flag checkered</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-flag fa-fw"></i>
                                <strong class="mb-3">Flag o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-flask fa-fw"></i>
                                <strong class="mb-3">Flask</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-flickr fa-fw"></i>
                                <strong class="mb-3">Flickr</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-folder fa-fw"></i>
                                <strong class="mb-3">Folder</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-folder fa-fw"></i>
                                <strong class="mb-3">Folder o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-folder-open fa-fw"></i>
                                <strong class="mb-3">Folder open</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-folder-open fa-fw"></i>
                                <strong class="mb-3">Folder open o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-font fa-fw"></i>
                                <strong class="mb-3">Font</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-fonticons fa-fw"></i>
                                <strong class="mb-3">Fonticons</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-forumbee fa-fw"></i>
                                <strong class="mb-3">Forumbee</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-forward fa-fw"></i>
                                <strong class="mb-3">Forward</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-foursquare fa-fw"></i>
                                <strong class="mb-3">Foursquare</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-frown fa-fw"></i>
                                <strong class="mb-3">Frown o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-futbol fa-fw"></i>
                                <strong class="mb-3">Futbol o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-gamepad fa-fw"></i>
                                <strong class="mb-3">Gamepad</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-gavel fa-fw"></i>
                                <strong class="mb-3">Gavel</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-gbp fa-fw"></i>
                                <strong class="mb-3">Gbp</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-genderless fa-fw"></i>
                                <strong class="mb-3">Genderless</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-get-pocket fa-fw"></i>
                                <strong class="mb-3">Get pocket</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-gg fa-fw"></i>
                                <strong class="mb-3">Gg</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-gg-circle fa-fw"></i>
                                <strong class="mb-3">Gg circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid  fa-gift fa-fw"></i>
                                <strong class="mb-3">Gift</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-git fa-fw"></i>
                                <strong class="mb-3">Git</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-git-square fa-fw"></i>
                                <strong class="mb-3">Git square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-github fa-fw"></i>
                                <strong class="mb-3">Github</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-github-alt fa-fw"></i>
                                <strong class="mb-3">Github alt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-github-square fa-fw"></i>
                                <strong class="mb-3">Github square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-globe fa-fw"></i>
                                <strong class="mb-3">Globe</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-google fa-fw"></i>
                                <strong class="mb-3">Google</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-google-plus fa-fw"></i>
                                <strong class="mb-3">Google plus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-google-plus-square fa-fw"></i>
                                <strong class="mb-3">Google plus square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-google-wallet fa-fw"></i>
                                <strong class="mb-3">Google wallet</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid  fa-graduation-cap fa-fw"></i>
                                <strong class="mb-3">Graduation cap</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-gratipay fa-fw"></i>
                                <strong class="mb-3">Gratipay</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-h-square fa-fw"></i>
                                <strong class="mb-3">H square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-hacker-news fa-fw"></i>
                                <strong class="mb-3">Hacker news</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-lizard fa-fw"></i>
                                <strong class="mb-3">Hand lizard o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-point-down fa-fw"></i>
                                <strong class="mb-3">Hand o down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-point-left fa-fw"></i>
                                <strong class="mb-3">Hand o left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-point-right fa-fw"></i>
                                <strong class="mb-3">Hand o right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-point-up fa-fw"></i>
                                <strong class="mb-3">Hand o up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-paper fa-fw"></i>
                                <strong class="mb-3">Hand paper o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-peace fa-fw"></i>
                                <strong class="mb-3">Hand peace o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-pointer fa-fw"></i>
                                <strong class="mb-3">Hand pointer o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-rock fa-fw"></i>
                                <strong class="mb-3">Hand rock o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-scissors fa-fw"></i>
                                <strong class="mb-3">Hand scissors o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hand-spock fa-fw"></i>
                                <strong class="mb-3">Hand spock o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hdd fa-fw"></i>
                                <strong class="mb-3">Hdd o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-header fa-fw"></i>
                                <strong class="mb-3">Header</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-headphones fa-fw"></i>
                                <strong class="mb-3">Headphones</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-heart fa-fw"></i>
                                <strong class="mb-3">Heart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-heart fa-fw"></i>
                                <strong class="mb-3">Heart o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-heartbeat fa-fw"></i>
                                <strong class="mb-3">Heartbeat</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-history fa-fw"></i>
                                <strong class="mb-3">History</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-home fa-fw"></i>
                                <strong class="mb-3">Home</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hospital fa-fw"></i>
                                <strong class="mb-3">Hospital o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hourglass fa-fw"></i>
                                <strong class="mb-3">Hourglass</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hourglass-end fa-fw"></i>
                                <strong class="mb-3">Hourglass end</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hourglass-half fa-fw"></i>
                                <strong class="mb-3">Hourglass half</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hourglass fa-fw"></i>
                                <strong class="mb-3">Hourglass o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-hourglass-start fa-fw"></i>
                                <strong class="mb-3">Hourglass start</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-houzz fa-fw"></i>
                                <strong class="mb-3">Houzz</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-html5 fa-fw"></i>
                                <strong class="mb-3">Html5</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-i-cursor fa-fw"></i>
                                <strong class="mb-3">I cursor</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-ils fa-fw"></i>
                                <strong class="mb-3">Ils</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-inbox fa-fw"></i>
                                <strong class="mb-3">Inbox</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-indent fa-fw"></i>
                                <strong class="mb-3">Indent</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-industry fa-fw"></i>
                                <strong class="mb-3">Industry</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-info fa-fw"></i>
                                <strong class="mb-3">Info</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-info-circle fa-fw"></i>
                                <strong class="mb-3">Info circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-inr fa-fw"></i>
                                <strong class="mb-3">Inr</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-instagram fa-fw"></i>
                                <strong class="mb-3">Instagram</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-internet-explorer fa-fw"></i>
                                <strong class="mb-3">Internet explorer</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-ioxhost fa-fw"></i>
                                <strong class="mb-3">Ioxhost</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-italic fa-fw"></i>
                                <strong class="mb-3">Italic</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-joomla fa-fw"></i>
                                <strong class="mb-3">Joomla</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-jpy fa-fw"></i>
                                <strong class="mb-3">Jpy</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-jsfiddle fa-fw"></i>
                                <strong class="mb-3">Jsfiddle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-key fa-fw"></i>
                                <strong class="mb-3">Key</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-keyboard fa-fw"></i>
                                <strong class="mb-3">Keyboard o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-krw fa-fw"></i>
                                <strong class="mb-3">Krw</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-language fa-fw"></i>
                                <strong class="mb-3">Language</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-laptop fa-fw"></i>
                                <strong class="mb-3">Laptop</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-lastfm fa-fw"></i>
                                <strong class="mb-3">Lastfm</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-lastfm-square fa-fw"></i>
                                <strong class="mb-3">Lastfm square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-leaf fa-fw"></i>
                                <strong class="mb-3">Leaf</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-leanpub fa-fw"></i>
                                <strong class="mb-3">Leanpub</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-lemon fa-fw"></i>
                                <strong class="mb-3">Lemon o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-level-down fa-fw"></i>
                                <strong class="mb-3">Level down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-level-up fa-fw"></i>
                                <strong class="mb-3">Level up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-life-ring fa-fw"></i>
                                <strong class="mb-3">Life ring</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-lightbulb fa-fw"></i>
                                <strong class="mb-3">Lightbulb o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-line-chart fa-fw"></i>
                                <strong class="mb-3">Line chart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-link fa-fw"></i>
                                <strong class="mb-3">Link</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-linkedin fa-fw"></i>
                                <strong class="mb-3">Linkedin</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-linux fa-fw"></i>
                                <strong class="mb-3">Linux</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-list fa-fw"></i>
                                <strong class="mb-3">List</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-list-alt fa-fw"></i>
                                <strong class="mb-3">List alt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-list-ol fa-fw"></i>
                                <strong class="mb-3">List ol</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-list-ul fa-fw"></i>
                                <strong class="mb-3">List ul</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-location-arrow fa-fw"></i>
                                <strong class="mb-3">Location arrow</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-lock fa-fw"></i>
                                <strong class="mb-3">Lock</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-long-arrow-down fa-fw"></i>
                                <strong class="mb-3">Long arrow down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-long-arrow-left fa-fw"></i>
                                <strong class="mb-3">Long arrow left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-long-arrow-right fa-fw"></i>
                                <strong class="mb-3">Long arrow right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-long-arrow-up fa-fw"></i>
                                <strong class="mb-3">Long arrow up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-magic fa-fw"></i>
                                <strong class="mb-3">Magic</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-magnet fa-fw"></i>
                                <strong class="mb-3">Magnet</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-male fa-fw"></i>
                                <strong class="mb-3">Male</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-map fa-fw"></i>
                                <strong class="mb-3">Map</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-map-marker fa-fw"></i>
                                <strong class="mb-3">Map marker</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-map fa-fw"></i>
                                <strong class="mb-3">Map o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-map-pin fa-fw"></i>
                                <strong class="mb-3">Map pin</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-map-signs fa-fw"></i>
                                <strong class="mb-3">Map signs</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mars fa-fw"></i>
                                <strong class="mb-3">Mars</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mars-double fa-fw"></i>
                                <strong class="mb-3">Mars double</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mars-stroke fa-fw"></i>
                                <strong class="mb-3">Mars stroke</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mars-stroke-h fa-fw"></i>
                                <strong class="mb-3">Mars stroke h</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mars-stroke-v fa-fw"></i>
                                <strong class="mb-3">Mars stroke v</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-maxcdn fa-fw"></i>
                                <strong class="mb-3">Maxcdn</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-medium fa-fw"></i>
                                <strong class="mb-3">Medium</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-medkit fa-fw"></i>
                                <strong class="mb-3">Medkit</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-meh fa-fw"></i>
                                <strong class="mb-3">Meh o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mercury fa-fw"></i>
                                <strong class="mb-3">Mercury</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-microphone fa-fw"></i>
                                <strong class="mb-3">Microphone</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-microphone-slash fa-fw"></i>
                                <strong class="mb-3">Microphone slash</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-minus fa-fw"></i>
                                <strong class="mb-3">Minus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-minus-circle fa-fw"></i>
                                <strong class="mb-3">Minus circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-minus-square fa-fw"></i>
                                <strong class="mb-3">Minus square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-minus-square fa-fw"></i>
                                <strong class="mb-3">Minus square o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mobile fa-fw"></i>
                                <strong class="mb-3">Mobile</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-moon fa-fw"></i>
                                <strong class="mb-3">Moon o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-motorcycle fa-fw"></i>
                                <strong class="mb-3">Motorcycle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-mouse-pointer fa-fw"></i>
                                <strong class="mb-3">Mouse pointer</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-music fa-fw"></i>
                                <strong class="mb-3">Music</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-neuter fa-fw"></i>
                                <strong class="mb-3">Neuter</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-newspaper fa-fw"></i>
                                <strong class="mb-3">Newspaper o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-object-group fa-fw"></i>
                                <strong class="mb-3">Object group</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-object-ungroup fa-fw"></i>
                                <strong class="mb-3">Object ungroup</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-odnoklassniki fa-fw"></i>
                                <strong class="mb-3">Odnoklassniki</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-odnoklassniki-square fa-fw"></i>
                                <strong class="mb-3">Odnoklassniki square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-opencart fa-fw"></i>
                                <strong class="mb-3">Opencart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-openid fa-fw"></i>
                                <strong class="mb-3">Openid</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-opera fa-fw"></i>
                                <strong class="mb-3">Opera</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-optin-monster fa-fw"></i>
                                <strong class="mb-3">Optin monster</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-outdent fa-fw"></i>
                                <strong class="mb-3">Outdent</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-pagelines fa-fw"></i>
                                <strong class="mb-3">Pagelines</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-paint-brush fa-fw"></i>
                                <strong class="mb-3">Paint brush</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-paper-plane fa-fw"></i>
                                <strong class="mb-3">Paper plane</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-paper-plane fa-fw"></i>
                                <strong class="mb-3">Paper plane o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-paperclip fa-fw"></i>
                                <strong class="mb-3">Paperclip</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-paragraph fa-fw"></i>
                                <strong class="mb-3">Paragraph</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-pause fa-fw"></i>
                                <strong class="mb-3">Pause</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-paw fa-fw"></i>
                                <strong class="mb-3">Paw</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-paypal fa-fw"></i>
                                <strong class="mb-3">Paypal</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-pencil fa-fw"></i>
                                <strong class="mb-3">Pencil</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-pencil-square fa-fw"></i>
                                <strong class="mb-3">Pencil square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-pencil-square fa-fw"></i>
                                <strong class="mb-3">Pencil square o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-phone fa-fw"></i>
                                <strong class="mb-3">Phone</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-phone-square fa-fw"></i>
                                <strong class="mb-3">Phone square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-pie-chart fa-fw"></i>
                                <strong class="mb-3">Pie chart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-pied-piper fa-fw"></i>
                                <strong class="mb-3">Pied piper</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-pied-piper-alt fa-fw"></i>
                                <strong class="mb-3">Pied piper alt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-pinterest fa-fw"></i>
                                <strong class="mb-3">Pinterest</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-pinterest-p fa-fw"></i>
                                <strong class="mb-3">Pinterest p</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-pinterest-square fa-fw"></i>
                                <strong class="mb-3">Pinterest square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-plane fa-fw"></i>
                                <strong class="mb-3">Plane</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-play fa-fw"></i>
                                <strong class="mb-3">Play</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-play-circle fa-fw"></i>
                                <strong class="mb-3">Play circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-play-circle fa-fw"></i>
                                <strong class="mb-3">Play circle o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-plug fa-fw"></i>
                                <strong class="mb-3">Plug</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-plus fa-fw"></i>
                                <strong class="mb-3">Plus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-plus-circle fa-fw"></i>
                                <strong class="mb-3">Plus circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-plus-square fa-fw"></i>
                                <strong class="mb-3">Plus square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-plus-square fa-fw"></i>
                                <strong class="mb-3">Plus square o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-power-off fa-fw"></i>
                                <strong class="mb-3">Power off</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-print fa-fw"></i>
                                <strong class="mb-3">Print</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-puzzle-piece fa-fw"></i>
                                <strong class="mb-3">Puzzle piece</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-qq fa-fw"></i>
                                <strong class="mb-3">Qq</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-qrcode fa-fw"></i>
                                <strong class="mb-3">Qrcode</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-question fa-fw"></i>
                                <strong class="mb-3">Question</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-question-circle fa-fw"></i>
                                <strong class="mb-3">Question circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-quote-left fa-fw"></i>
                                <strong class="mb-3">Quote left</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-quote-right fa-fw"></i>
                                <strong class="mb-3">Quote right</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-random fa-fw"></i>
                                <strong class="mb-3">Random</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-rebel fa-fw"></i>
                                <strong class="mb-3">Rebel</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-recycle fa-fw"></i>
                                <strong class="mb-3">Recycle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-reddit fa-fw"></i>
                                <strong class="mb-3">Reddit</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-reddit-square fa-fw"></i>
                                <strong class="mb-3">Reddit square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-refresh fa-fw"></i>
                                <strong class="mb-3">Refresh</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-registered fa-fw"></i>
                                <strong class="mb-3">Registered</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-renren fa-fw"></i>
                                <strong class="mb-3">Renren</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-repeat fa-fw"></i>
                                <strong class="mb-3">Repeat</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-reply fa-fw"></i>
                                <strong class="mb-3">Reply</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-reply-all fa-fw"></i>
                                <strong class="mb-3">Reply all</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-retweet fa-fw"></i>
                                <strong class="mb-3">Retweet</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-road fa-fw"></i>
                                <strong class="mb-3">Road</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-rocket fa-fw"></i>
                                <strong class="mb-3">Rocket</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-rss fa-fw"></i>
                                <strong class="mb-3">Rss</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-rss-square fa-fw"></i>
                                <strong class="mb-3">Rss square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-rub fa-fw"></i>
                                <strong class="mb-3">Rub</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-safari fa-fw"></i>
                                <strong class="mb-3">Safari</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-scissors fa-fw"></i>
                                <strong class="mb-3">Scissors</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-search fa-fw"></i>
                                <strong class="mb-3">Search</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-search-minus fa-fw"></i>
                                <strong class="mb-3">Search minus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-search-plus fa-fw"></i>
                                <strong class="mb-3">Search plus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sellsy fa-fw"></i>
                                <strong class="mb-3">Sellsy</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-server fa-fw"></i>
                                <strong class="mb-3">Server</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-share fa-fw"></i>
                                <strong class="mb-3">Share</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-share-alt fa-fw"></i>
                                <strong class="mb-3">Share alt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-share-alt-square fa-fw"></i>
                                <strong class="mb-3">Share alt square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-share-square fa-fw"></i>
                                <strong class="mb-3">Share square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-share-square-o fa-fw"></i>
                                <strong class="mb-3">Share square o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-shield fa-fw"></i>
                                <strong class="mb-3">Shield</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-ship fa-fw"></i>
                                <strong class="mb-3">Ship</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-shirtsinbulk fa-fw"></i>
                                <strong class="mb-3">Shirtsinbulk</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-shopping-cart fa-fw"></i>
                                <strong class="mb-3">Shopping cart</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sign-in fa-fw"></i>
                                <strong class="mb-3">Sign in</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sign-out fa-fw"></i>
                                <strong class="mb-3">Sign out</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-signal fa-fw"></i>
                                <strong class="mb-3">Signal</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-simplybuilt fa-fw"></i>
                                <strong class="mb-3">Simplybuilt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sitemap fa-fw"></i>
                                <strong class="mb-3">Sitemap</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-skyatlas fa-fw"></i>
                                <strong class="mb-3">Skyatlas</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-skype fa-fw"></i>
                                <strong class="mb-3">Skype</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-slack fa-fw"></i>
                                <strong class="mb-3">Slack</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sliders fa-fw"></i>
                                <strong class="mb-3">Sliders</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-slideshare fa-fw"></i>
                                <strong class="mb-3">Slideshare</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort fa-fw"></i>
                                <strong class="mb-3">Sort</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-alpha-asc fa-fw"></i>
                                <strong class="mb-3">Sort alpha asc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-alpha-desc fa-fw"></i>
                                <strong class="mb-3">Sort alpha desc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-amount-asc fa-fw"></i>
                                <strong class="mb-3">Sort amount asc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-amount-desc fa-fw"></i>
                                <strong class="mb-3">Sort amount desc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-asc fa-fw"></i>
                                <strong class="mb-3">Sort asc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-desc fa-fw"></i>
                                <strong class="mb-3">Sort desc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-numeric-asc fa-fw"></i>
                                <strong class="mb-3">Sort numeric asc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sort-numeric-desc fa-fw"></i>
                                <strong class="mb-3">Sort numeric desc</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-soundcloud fa-fw"></i>
                                <strong class="mb-3">Soundcloud</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-space-shuttle fa-fw"></i>
                                <strong class="mb-3">Space shuttle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-spinner fa-fw"></i>
                                <strong class="mb-3">Spinner</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-spoon fa-fw"></i>
                                <strong class="mb-3">Spoon</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-spotify fa-fw"></i>
                                <strong class="mb-3">Spotify</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-square fa-fw"></i>
                                <strong class="mb-3">Square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-stack-exchange fa-fw"></i>
                                <strong class="mb-3">Stack exchange</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-stack-overflow fa-fw"></i>
                                <strong class="mb-3">Stack overflow</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-star fa-fw"></i>
                                <strong class="mb-3">Star</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-star-half fa-fw"></i>
                                <strong class="mb-3">Star half</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-steam fa-fw"></i>
                                <strong class="mb-3">Steam</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-steam-square fa-fw"></i>
                                <strong class="mb-3">Steam square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-step-backward fa-fw"></i>
                                <strong class="mb-3">Step backward</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-step-forward fa-fw"></i>
                                <strong class="mb-3">Step forward</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-stethoscope fa-fw"></i>
                                <strong class="mb-3">Stethoscope</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sticky-note fa-fw"></i>
                                <strong class="mb-3">Sticky note</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sticky-note fa-fw"></i>
                                <strong class="mb-3">Sticky note o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-stop fa-fw"></i>
                                <strong class="mb-3">Stop</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-street-view fa-fw"></i>
                                <strong class="mb-3">Street view</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-strikethrough fa-fw"></i>
                                <strong class="mb-3">Strikethrough</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-stumbleupon fa-fw"></i>
                                <strong class="mb-3">Stumbleupon</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-stumbleupon-circle fa-fw"></i>
                                <strong class="mb-3">Stumbleupon circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-subscript fa-fw"></i>
                                <strong class="mb-3">Subscript</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-subway fa-fw"></i>
                                <strong class="mb-3">Subway</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-suitcase fa-fw"></i>
                                <strong class="mb-3">Suitcase</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-sun fa-fw"></i>
                                <strong class="mb-3">Sun o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-superscript fa-fw"></i>
                                <strong class="mb-3">Superscript</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-table fa-fw"></i>
                                <strong class="mb-3">Table</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tablet fa-fw"></i>
                                <strong class="mb-3">Tablet</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tachometer fa-fw"></i>
                                <strong class="mb-3">Tachometer</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tag fa-fw"></i>
                                <strong class="mb-3">Tag</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tags fa-fw"></i>
                                <strong class="mb-3">Tags</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tasks fa-fw"></i>
                                <strong class="mb-3">Tasks</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-taxi fa-fw"></i>
                                <strong class="mb-3">Taxi</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-television fa-fw"></i>
                                <strong class="mb-3">Television</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-tencent-weibo fa-fw"></i>
                                <strong class="mb-3">Tencent weibo</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-terminal fa-fw"></i>
                                <strong class="mb-3">Terminal</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-text-height fa-fw"></i>
                                <strong class="mb-3">Text height</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-text-width fa-fw"></i>
                                <strong class="mb-3">Text width</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-th fa-fw"></i>
                                <strong class="mb-3">Th</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-th-large fa-fw"></i>
                                <strong class="mb-3">Th large</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-th-list fa-fw"></i>
                                <strong class="mb-3">Th list</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-thumb-tack fa-fw"></i>
                                <strong class="mb-3">Thumb tack</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-thumbs-down fa-fw"></i>
                                <strong class="mb-3">Thumbs down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-thumbs-down fa-fw"></i>
                                <strong class="mb-3">Thumbs o down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-thumbs-up fa-fw"></i>
                                <strong class="mb-3">Thumbs o up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-thumbs-up fa-fw"></i>
                                <strong class="mb-3">Thumbs up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-ticket fa-fw"></i>
                                <strong class="mb-3">Ticket</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-times fa-fw"></i>
                                <strong class="mb-3">Times</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-times-circle fa-fw"></i>
                                <strong class="mb-3">Times circle</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-times-circle fa-fw"></i>
                                <strong class="mb-3">Times circle o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tint fa-fw"></i>
                                <strong class="mb-3">Tint</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-toggle-off fa-fw"></i>
                                <strong class="mb-3">Toggle off</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-toggle-on fa-fw"></i>
                                <strong class="mb-3">Toggle on</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-trademark fa-fw"></i>
                                <strong class="mb-3">Trademark</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-train fa-fw"></i>
                                <strong class="mb-3">Train</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-transgender fa-fw"></i>
                                <strong class="mb-3">Transgender</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-transgender-alt fa-fw"></i>
                                <strong class="mb-3">Transgender alt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-trash fa-fw"></i>
                                <strong class="mb-3">Trash</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-trash fa-fw"></i>
                                <strong class="mb-3">Trash o</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tree fa-fw"></i>
                                <strong class="mb-3">Tree</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-trello fa-fw"></i>
                                <strong class="mb-3">Trello</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-trophy fa-fw"></i>
                                <strong class="mb-3">Trophy</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-truck fa-fw"></i>
                                <strong class="mb-3">Truck</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-try fa-fw"></i>
                                <strong class="mb-3">Try</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-tty fa-fw"></i>
                                <strong class="mb-3">Tty</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-tumblr fa-fw"></i>
                                <strong class="mb-3">Tumblr</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-tumblr-square fa-fw"></i>
                                <strong class="mb-3">Tumblr square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-twitch fa-fw"></i>
                                <strong class="mb-3">Twitch</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-twitter fa-fw"></i>
                                <strong class="mb-3">Twitter</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-twitter-square fa-fw"></i>
                                <strong class="mb-3">Twitter square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-umbrella fa-fw"></i>
                                <strong class="mb-3">Umbrella</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-underline fa-fw"></i>
                                <strong class="mb-3">Underline</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-undo fa-fw"></i>
                                <strong class="mb-3">Undo</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-university fa-fw"></i>
                                <strong class="mb-3">University</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-unlock fa-fw"></i>
                                <strong class="mb-3">Unlock</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-unlock-alt fa-fw"></i>
                                <strong class="mb-3">Unlock alt</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-upload fa-fw"></i>
                                <strong class="mb-3">Upload</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-usd fa-fw"></i>
                                <strong class="mb-3">Usd</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-user fa-fw"></i>
                                <strong class="mb-3">User</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-user-md fa-fw"></i>
                                <strong class="mb-3">User md</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-user-plus fa-fw"></i>
                                <strong class="mb-3">User plus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-user-secret fa-fw"></i>
                                <strong class="mb-3">User secret</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-user-times fa-fw"></i>
                                <strong class="mb-3">User times</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-users fa-fw"></i>
                                <strong class="mb-3">Users</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-venus fa-fw"></i>
                                <strong class="mb-3">Venus</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-venus-double fa-fw"></i>
                                <strong class="mb-3">Venus double</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-venus-mars fa-fw"></i>
                                <strong class="mb-3">Venus mars</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-viacoin fa-fw"></i>
                                <strong class="mb-3">Viacoin</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-video-camera fa-fw"></i>
                                <strong class="mb-3">Video camera</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-vimeo fa-fw"></i>
                                <strong class="mb-3">Vimeo</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-vimeo-square fa-fw"></i>
                                <strong class="mb-3">Vimeo square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-vine fa-fw"></i>
                                <strong class="mb-3">Vine</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-vk fa-fw"></i>
                                <strong class="mb-3">Vk</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-volume-down fa-fw"></i>
                                <strong class="mb-3">Volume down</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-volume-off fa-fw"></i>
                                <strong class="mb-3">Volume off</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-volume-up fa-fw"></i>
                                <strong class="mb-3">Volume up</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-weibo fa-fw"></i>
                                <strong class="mb-3">Weibo</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-weixin fa-fw"></i>
                                <strong class="mb-3">Weixin</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-whatsapp fa-fw"></i>
                                <strong class="mb-3">Whatsapp</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-wheelchair fa-fw"></i>
                                <strong class="mb-3">Wheelchair</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-wifi fa-fw"></i>
                                <strong class="mb-3">Wifi</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-wikipedia-w fa-fw"></i>
                                <strong class="mb-3">Wikipedia w</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-windows fa-fw"></i>
                                <strong class="mb-3">Windows</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-wordpress fa-fw"></i>
                                <strong class="mb-3">Wordpress</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-wrench fa-fw"></i>
                                <strong class="mb-3">Wrench</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-xing fa-fw"></i>
                                <strong class="mb-3">Xing</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-xing-square fa-fw"></i>
                                <strong class="mb-3">Xing square</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-y-combinator fa-fw"></i>
                                <strong class="mb-3">Y combinator</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-yahoo fa-fw"></i>
                                <strong class="mb-3">Yahoo</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-yelp fa-fw"></i>
                                <strong class="mb-3">Yelp</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-youtube fa-fw"></i>
                                <strong class="mb-3">Youtube</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-youtube fa-fw"></i>
                                <strong class="mb-3">Youtube play</strong>
                            </li>

                            <li class="icon-box" onclick="text_font(this)">
                                <i class="fa-solid fa-brands fa-youtube-square fa-fw"></i>
                                <strong class="mb-3">Youtube square</strong>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- toastify js -->
    <script src="{{asset('assets/vendor/notifications/toastify-js.js')}}"></script>

    <!--  js-->
    <script src="{{asset('assets/js/font_awesome.js')}}"></script>
@endsection
