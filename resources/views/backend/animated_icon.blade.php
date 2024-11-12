@extends('layout.master')
@section('title', 'Animated Icon')
@section('css')
<!-- animation css -->
<link rel="stylesheet" href="{{asset('assets/vendor/animation/animate.min.css')}}">

<!--Notifications-css-->
<link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/notifications/toastify.min.css')}}">

@endsection
@section('main-content')
<div class="container-fluid">
    <!-- Breadcrumb start -->
    <div class="row m-1">
        <div class="col-12 ">
            <h4 class="main-title">Animated</h4>
            <ul class="app-line-breadcrumbs mb-3">
                <li class="">
                    <a href="#" class="f-s-14 f-w-500">
                    <span>
                      <i class="ph-duotone  ph-shapes f-s-16"></i>Icons
                    </span>
                    </a>
                </li>
                <li class="active">
                    <a href="#" class="f-s-14 f-w-500">Animated</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumb end -->
    <!-- body-main-section-start  -->
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
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:account"></iconify-icon>
                        </i><strong class="mb-3">account</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:account-add"></iconify-icon>
                        </i><strong class="mb-3">account-add</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:account-alert"></iconify-icon>
                        </i><strong class="mb-3">account-alert</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:account-alert-loop"></iconify-icon>
                        </i><strong class="mb-3">account-alert-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:account-delete"></iconify-icon>
                        </i><strong class="mb-3">account-delete</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:account-remove"></iconify-icon>
                        </i><strong class="mb-3">account-remove</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:account-small"></iconify-icon>
                        </i><strong class="mb-3">account-small</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert"></iconify-icon>
                        </i><strong class="mb-3">alert</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-circle"></iconify-icon>
                        </i><strong class="mb-3">alert-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-circle-loop"></iconify-icon>
                        </i><strong class="mb-3">alert-circle-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">alert-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-circle-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">alert-circle-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-loop"></iconify-icon>
                        </i><strong class="mb-3">alert-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-square"></iconify-icon>
                        </i><strong class="mb-3">alert-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-square-loop"></iconify-icon>
                        </i><strong class="mb-3">alert-square-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">alert-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-square-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">alert-square-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-twotone"></iconify-icon>
                        </i><strong class="mb-3">alert-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:alert-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">alert-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:align-center"></iconify-icon>
                        </i><strong class="mb-3">align-center</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:align-justify"></iconify-icon>
                        </i><strong class="mb-3">align-justify</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:align-left"></iconify-icon>
                        </i><strong class="mb-3">align-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:align-right"></iconify-icon>
                        </i><strong class="mb-3">align-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-align-bottom"></iconify-icon>
                        </i><strong class="mb-3">arrow-align-bottom</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-align-center"></iconify-icon>
                        </i><strong class="mb-3">arrow-align-center</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-align-left"></iconify-icon>
                        </i><strong class="mb-3">arrow-align-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-align-middle"></iconify-icon>
                        </i><strong class="mb-3">arrow-align-middle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-align-right"></iconify-icon>
                        </i><strong class="mb-3">arrow-align-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-align-top"></iconify-icon>
                        </i><strong class="mb-3">arrow-align-top</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-close-down"></iconify-icon>
                        </i><strong class="mb-3">arrow-close-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-close-left"></iconify-icon>
                        </i><strong class="mb-3">arrow-close-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-close-right"></iconify-icon>
                        </i><strong class="mb-3">arrow-close-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-close-up"></iconify-icon>
                        </i><strong class="mb-3">arrow-close-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-down"></iconify-icon>
                        </i><strong class="mb-3">arrow-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-down-circle"></iconify-icon>
                        </i><strong class="mb-3">arrow-down-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-down-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-down-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-down-square"></iconify-icon>
                        </i><strong class="mb-3">arrow-down-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-down-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-down-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-left"></iconify-icon>
                        </i><strong class="mb-3">arrow-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-left-circle"></iconify-icon>
                        </i><strong class="mb-3">arrow-left-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-left-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-left-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-left-square"></iconify-icon>
                        </i><strong class="mb-3">arrow-left-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-left-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-left-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-long-diagonal"></iconify-icon>
                        </i><strong class="mb-3">arrow-long-diagonal</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-long-diagonal-rotated"></iconify-icon>
                        </i><strong class="mb-3">arrow-long-diagonal-rotated</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-open-down"></iconify-icon>
                        </i><strong class="mb-3">arrow-open-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-open-left"></iconify-icon>
                        </i><strong class="mb-3">arrow-open-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-open-right"></iconify-icon>
                        </i><strong class="mb-3">arrow-open-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-open-up"></iconify-icon>
                        </i><strong class="mb-3">arrow-open-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-right"></iconify-icon>
                        </i><strong class="mb-3">arrow-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-right-circle"></iconify-icon>
                        </i><strong class="mb-3">arrow-right-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-right-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-right-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-right-square"></iconify-icon>
                        </i><strong class="mb-3">arrow-right-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-right-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-right-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-small-down"></iconify-icon>
                        </i><strong class="mb-3">arrow-small-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-small-left"></iconify-icon>
                        </i><strong class="mb-3">arrow-small-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-small-right"></iconify-icon>
                        </i><strong class="mb-3">arrow-small-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-small-up"></iconify-icon>
                        </i><strong class="mb-3">arrow-small-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-up"></iconify-icon>
                        </i><strong class="mb-3">arrow-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-up-circle"></iconify-icon>
                        </i><strong class="mb-3">arrow-up-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-up-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-up-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-up-square"></iconify-icon>
                        </i><strong class="mb-3">arrow-up-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrow-up-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">arrow-up-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrows-diagonal"></iconify-icon>
                        </i><strong class="mb-3">arrows-diagonal</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrows-diagonal-rotated"></iconify-icon>
                        </i><strong class="mb-3">arrows-diagonal-rotated</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrows-horizontal"></iconify-icon>
                        </i><strong class="mb-3">arrows-horizontal</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrows-horizontal-alt"></iconify-icon>
                        </i><strong class="mb-3">arrows-horizontal-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrows-vertical"></iconify-icon>
                        </i><strong class="mb-3">arrows-vertical</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:arrows-vertical-alt"></iconify-icon>
                        </i><strong class="mb-3">arrows-vertical-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:backup-restore"></iconify-icon>
                        </i><strong class="mb-3">backup-restore</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer"></iconify-icon>
                        </i><strong class="mb-3">beer</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-alt-filled"></iconify-icon>
                        </i><strong class="mb-3">beer-alt-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-alt-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">beer-alt-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-alt-twotone"></iconify-icon>
                        </i><strong class="mb-3">beer-alt-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-alt-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">beer-alt-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-filled"></iconify-icon>
                        </i><strong class="mb-3">beer-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-loop"></iconify-icon>
                        </i><strong class="mb-3">beer-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-twotone"></iconify-icon>
                        </i><strong class="mb-3">beer-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:beer-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">beer-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell"></iconify-icon>
                        </i><strong class="mb-3">bell</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell-alert"></iconify-icon>
                        </i><strong class="mb-3">bell-alert</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell-alert-loop"></iconify-icon>
                        </i><strong class="mb-3">bell-alert-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell-loop"></iconify-icon>
                        </i><strong class="mb-3">bell-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell-twotone"></iconify-icon>
                        </i><strong class="mb-3">bell-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell-twotone-alert"></iconify-icon>
                        </i><strong class="mb-3">bell-twotone-alert</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell-twotone-alert-loop"></iconify-icon>
                        </i><strong class="mb-3">bell-twotone-alert-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:bell-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">bell-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:briefcase"></iconify-icon>
                        </i><strong class="mb-3">briefcase</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:briefcase-filled"></iconify-icon>
                        </i><strong class="mb-3">briefcase-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:briefcase-twotone"></iconify-icon>
                        </i><strong class="mb-3">briefcase-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:buy-me-a-coffee"></iconify-icon>
                        </i><strong class="mb-3">buy-me-a-coffee</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:buy-me-a-coffee-filled"></iconify-icon>
                        </i><strong class="mb-3">buy-me-a-coffee-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:buy-me-a-coffee-twotone"></iconify-icon>
                        </i><strong class="mb-3">buy-me-a-coffee-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cake"></iconify-icon>
                        </i><strong class="mb-3">cake</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cake-twotone"></iconify-icon>
                        </i><strong class="mb-3">cake-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:calendar"></iconify-icon>
                        </i><strong class="mb-3">calendar</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cancel"></iconify-icon>
                        </i><strong class="mb-3">cancel</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cancel-twotone"></iconify-icon>
                        </i><strong class="mb-3">cancel-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chat"></iconify-icon>
                        </i><strong class="mb-3">chat</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chat-bubble"></iconify-icon>
                        </i><strong class="mb-3">chat-bubble</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chat-bubble-filled"></iconify-icon>
                        </i><strong class="mb-3">chat-bubble-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chat-bubble-twotone"></iconify-icon>
                        </i><strong class="mb-3">chat-bubble-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chat-twotone"></iconify-icon>
                        </i><strong class="mb-3">chat-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:check-all"></iconify-icon>
                        </i><strong class="mb-3">check-all</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:check-list-3"></iconify-icon>
                        </i><strong class="mb-3">check-list-3</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:check-list-3-filled"></iconify-icon>
                        </i><strong class="mb-3">check-list-3-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:check-list-3-twotone"></iconify-icon>
                        </i><strong class="mb-3">check-list-3-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-double-down"></iconify-icon>
                        </i><strong class="mb-3">chevron-double-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-double-left"></iconify-icon>
                        </i><strong class="mb-3">chevron-double-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-double-right"></iconify-icon>
                        </i><strong class="mb-3">chevron-double-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-double-up"></iconify-icon>
                        </i><strong class="mb-3">chevron-double-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-down"></iconify-icon>
                        </i><strong class="mb-3">chevron-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-down-circle"></iconify-icon>
                        </i><strong class="mb-3">chevron-down-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-down-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-down-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-down-square"></iconify-icon>
                        </i><strong class="mb-3">chevron-down-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-down-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-down-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-left"></iconify-icon>
                        </i><strong class="mb-3">chevron-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-left-circle"></iconify-icon>
                        </i><strong class="mb-3">chevron-left-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-left-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-left-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-left-square"></iconify-icon>
                        </i><strong class="mb-3">chevron-left-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-left-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-left-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-right"></iconify-icon>
                        </i><strong class="mb-3">chevron-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-right-circle"></iconify-icon>
                        </i><strong class="mb-3">chevron-right-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-right-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-right-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-right-square"></iconify-icon>
                        </i><strong class="mb-3">chevron-right-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-right-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-right-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-double-down"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-double-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-double-left"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-double-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-double-right"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-double-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-double-up"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-double-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-down"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-left"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-right"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-triple-down"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-triple-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-triple-left"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-triple-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-triple-right"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-triple-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-triple-up"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-triple-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-small-up"></iconify-icon>
                        </i><strong class="mb-3">chevron-small-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-triple-down"></iconify-icon>
                        </i><strong class="mb-3">chevron-triple-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-triple-left"></iconify-icon>
                        </i><strong class="mb-3">chevron-triple-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-triple-right"></iconify-icon>
                        </i><strong class="mb-3">chevron-triple-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-triple-up"></iconify-icon>
                        </i><strong class="mb-3">chevron-triple-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-up"></iconify-icon>
                        </i><strong class="mb-3">chevron-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-up-circle"></iconify-icon>
                        </i><strong class="mb-3">chevron-up-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-up-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-up-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-up-square"></iconify-icon>
                        </i><strong class="mb-3">chevron-up-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:chevron-up-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">chevron-up-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:circle"></iconify-icon>
                        </i><strong class="mb-3">circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:circle-to-confirm-circle-transition"></iconify-icon>
                        </i><strong class="mb-3">circle-to-confirm-circle-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:circle-to-confirm-circle-twotone-transition"></iconify-icon>
                        </i><strong class="mb-3">circle-to-confirm-circle-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:circle-twotone-to-confirm-circle-twotone-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">circle-twotone-to-confirm-circle-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard"></iconify-icon>
                        </i><strong class="mb-3">clipboard</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-arrow"></iconify-icon>
                        </i><strong class="mb-3">clipboard-arrow</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-arrow-twotone"></iconify-icon>
                        </i><strong class="mb-3">clipboard-arrow-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-check"></iconify-icon>
                        </i><strong class="mb-3">clipboard-check</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:clipboard-check-to-clipboard-transition"></iconify-icon>
                        </i><strong class="mb-3">clipboard-check-to-clipboard-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-check-twotone"></iconify-icon>
                        </i><strong class="mb-3">clipboard-check-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:clipboard-check-twotone-to-clipboard-twotone-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">clipboard-check-twotone-to-clipboard-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-list"></iconify-icon>
                        </i><strong class="mb-3">clipboard-list</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-list-twotone"></iconify-icon>
                        </i><strong class="mb-3">clipboard-list-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-minus"></iconify-icon>
                        </i><strong class="mb-3">clipboard-minus</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-minus-twotone"></iconify-icon>
                        </i><strong class="mb-3">clipboard-minus-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-plus"></iconify-icon>
                        </i><strong class="mb-3">clipboard-plus</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-plus-twotone"></iconify-icon>
                        </i><strong class="mb-3">clipboard-plus-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:clipboard-to-clipboard-check-transition"></iconify-icon>
                        </i><strong class="mb-3">clipboard-to-clipboard-check-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:clipboard-twotone"></iconify-icon>
                        </i><strong class="mb-3">clipboard-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:clipboard-twotone-to-clipboard-twotone-check-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">clipboard-twotone-to-clipboard-twotone-check-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:close"></iconify-icon>
                        </i><strong class="mb-3">close</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:close-circle"></iconify-icon>
                        </i><strong class="mb-3">close-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:close-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">close-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:close-small"></iconify-icon>
                        </i><strong class="mb-3">close-small</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:close-to-menu-alt-transition"></iconify-icon>
                        </i><strong class="mb-3">close-to-menu-alt-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:close-to-menu-transition"></iconify-icon>
                        </i><strong class="mb-3">close-to-menu-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud"></iconify-icon>
                        </i><strong class="mb-3">cloud</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-braces-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-braces-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-down"></iconify-icon>
                        </i><strong class="mb-3">cloud-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-down-twotone"></iconify-icon>
                        </i><strong class="mb-3">cloud-down-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-download-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-download-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-download-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-download-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-filled"></iconify-icon>
                        </i><strong class="mb-3">cloud-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-off-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-off-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-print-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-print-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-print-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-print-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-tags-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-tags-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-twotone"></iconify-icon>
                        </i><strong class="mb-3">cloud-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-up"></iconify-icon>
                        </i><strong class="mb-3">cloud-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-up-twotone"></iconify-icon>
                        </i><strong class="mb-3">cloud-up-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-upload-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-upload-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cloud-upload-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">cloud-upload-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee"></iconify-icon>
                        </i><strong class="mb-3">coffee</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-arrow"></iconify-icon>
                        </i><strong class="mb-3">coffee-arrow</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-arrow-filled"></iconify-icon>
                        </i><strong class="mb-3">coffee-arrow-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-arrow-twotone"></iconify-icon>
                        </i><strong class="mb-3">coffee-arrow-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-filled"></iconify-icon>
                        </i><strong class="mb-3">coffee-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-half-empty-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">coffee-half-empty-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-loop"></iconify-icon>
                        </i><strong class="mb-3">coffee-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-twotone"></iconify-icon>
                        </i><strong class="mb-3">coffee-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:coffee-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">coffee-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog"></iconify-icon>
                        </i><strong class="mb-3">cog</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog-filled"></iconify-icon>
                        </i><strong class="mb-3">cog-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">cog-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog-loop"></iconify-icon>
                        </i><strong class="mb-3">cog-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog-off"></iconify-icon>
                        </i><strong class="mb-3">cog-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog-off-filled"></iconify-icon>
                        </i><strong class="mb-3">cog-off-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog-off-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">cog-off-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:cog-off-loop"></iconify-icon>
                        </i><strong class="mb-3">cog-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:compass"></iconify-icon>
                        </i><strong class="mb-3">compass</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:compass-loop"></iconify-icon>
                        </i><strong class="mb-3">compass-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:compass-off"></iconify-icon>
                        </i><strong class="mb-3">compass-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:compass-twotone"></iconify-icon>
                        </i><strong class="mb-3">compass-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:compass-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">compass-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:compass-twotone-off"></iconify-icon>
                        </i><strong class="mb-3">compass-twotone-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:computer"></iconify-icon>
                        </i><strong class="mb-3">computer</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:computer-twotone"></iconify-icon>
                        </i><strong class="mb-3">computer-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:confirm"></iconify-icon>
                        </i><strong class="mb-3">confirm</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:confirm-circle"></iconify-icon>
                        </i><strong class="mb-3">confirm-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:confirm-circle-to-circle-transition"></iconify-icon>
                        </i><strong class="mb-3">confirm-circle-to-circle-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:confirm-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">confirm-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:confirm-circle-twotone-to-circle-transition"></iconify-icon>
                        </i><strong class="mb-3">confirm-circle-twotone-to-circle-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:confirm-circle-twotone-to-circle-twotone-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">confirm-circle-twotone-to-circle-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:confirm-square"></iconify-icon>
                        </i><strong class="mb-3">confirm-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:confirm-square-to-square-transition"></iconify-icon>
                        </i><strong class="mb-3">confirm-square-to-square-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:confirm-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">confirm-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:confirm-square-twotone-to-square-transition"></iconify-icon>
                        </i><strong class="mb-3">confirm-square-twotone-to-square-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:confirm-square-twotone-to-square-twotone-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">confirm-square-twotone-to-square-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:construction"></iconify-icon>
                        </i><strong class="mb-3">construction</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:construction-twotone"></iconify-icon>
                        </i><strong class="mb-3">construction-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:discord"></iconify-icon>
                        </i><strong class="mb-3">discord</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:discord-twotone"></iconify-icon>
                        </i><strong class="mb-3">discord-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document"></iconify-icon>
                        </i><strong class="mb-3">document</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-add"></iconify-icon>
                        </i><strong class="mb-3">document-add</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-add-twotone"></iconify-icon>
                        </i><strong class="mb-3">document-add-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-code"></iconify-icon>
                        </i><strong class="mb-3">document-code</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-code-twotone"></iconify-icon>
                        </i><strong class="mb-3">document-code-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-list"></iconify-icon>
                        </i><strong class="mb-3">document-list</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-list-twotone"></iconify-icon>
                        </i><strong class="mb-3">document-list-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-remove"></iconify-icon>
                        </i><strong class="mb-3">document-remove</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-remove-twotone"></iconify-icon>
                        </i><strong class="mb-3">document-remove-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-report"></iconify-icon>
                        </i><strong class="mb-3">document-report</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-report-twotone"></iconify-icon>
                        </i><strong class="mb-3">document-report-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:document-twotone"></iconify-icon>
                        </i><strong class="mb-3">document-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:double-arrow-horizontal"></iconify-icon>
                        </i><strong class="mb-3">double-arrow-horizontal</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:double-arrow-vertical"></iconify-icon>
                        </i><strong class="mb-3">double-arrow-vertical</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:download-loop"></iconify-icon>
                        </i><strong class="mb-3">download-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:download-off-loop"></iconify-icon>
                        </i><strong class="mb-3">download-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:download-off-outline"></iconify-icon>
                        </i><strong class="mb-3">download-off-outline</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:download-off-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">download-off-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:download-outline"></iconify-icon>
                        </i><strong class="mb-3">download-outline</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:download-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">download-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:downloading-loop"></iconify-icon>
                        </i><strong class="mb-3">downloading-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:edit"></iconify-icon>
                        </i><strong class="mb-3">edit</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:edit-twotone"></iconify-icon>
                        </i><strong class="mb-3">edit-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:edit-twotone-full"></iconify-icon>
                        </i><strong class="mb-3">edit-twotone-full</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:email"></iconify-icon>
                        </i><strong class="mb-3">email</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:email-opened"></iconify-icon>
                        </i><strong class="mb-3">email-opened</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:email-opened-twotone"></iconify-icon>
                        </i><strong class="mb-3">email-opened-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:email-opened-twotone-alt"></iconify-icon>
                        </i><strong class="mb-3">email-opened-twotone-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:email-twotone"></iconify-icon>
                        </i><strong class="mb-3">email-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:email-twotone-alt"></iconify-icon>
                        </i><strong class="mb-3">email-twotone-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-angry"></iconify-icon>
                        </i><strong class="mb-3">emoji-angry</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-angry-twotone"></iconify-icon>
                        </i><strong class="mb-3">emoji-angry-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-frown"></iconify-icon>
                        </i><strong class="mb-3">emoji-frown</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-frown-open"></iconify-icon>
                        </i><strong class="mb-3">emoji-frown-open</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-frown-open-twotone"></iconify-icon>
                        </i><strong class="mb-3">emoji-frown-open-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-frown-twotone"></iconify-icon>
                        </i><strong class="mb-3">emoji-frown-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-grin"></iconify-icon>
                        </i><strong class="mb-3">emoji-grin</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-grin-twotone"></iconify-icon>
                        </i><strong class="mb-3">emoji-grin-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-neutral"></iconify-icon>
                        </i><strong class="mb-3">emoji-neutral</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-neutral-twotone"></iconify-icon>
                        </i><strong class="mb-3">emoji-neutral-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-smile"></iconify-icon>
                        </i><strong class="mb-3">emoji-smile</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-smile-twotone"></iconify-icon>
                        </i><strong class="mb-3">emoji-smile-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-smile-wink"></iconify-icon>
                        </i><strong class="mb-3">emoji-smile-wink</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:emoji-smile-wink-twotone"></iconify-icon>
                        </i><strong class="mb-3">emoji-smile-wink-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:external-link"></iconify-icon>
                        </i><strong class="mb-3">external-link</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:external-link-rounded"></iconify-icon>
                        </i><strong class="mb-3">external-link-rounded</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:facebook"></iconify-icon>
                        </i><strong class="mb-3">facebook</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:fork-left"></iconify-icon>
                        </i><strong class="mb-3">fork-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:fork-right"></iconify-icon>
                        </i><strong class="mb-3">fork-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:gauge"></iconify-icon>
                        </i><strong class="mb-3">gauge</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:gauge-empty"></iconify-icon>
                        </i><strong class="mb-3">gauge-empty</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:gauge-full"></iconify-icon>
                        </i><strong class="mb-3">gauge-full</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:gauge-loop"></iconify-icon>
                        </i><strong class="mb-3">gauge-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:gauge-low"></iconify-icon>
                        </i><strong class="mb-3">gauge-low</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:github"></iconify-icon>
                        </i><strong class="mb-3">github</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:github-loop"></iconify-icon>
                        </i><strong class="mb-3">github-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:github-twotone"></iconify-icon>
                        </i><strong class="mb-3">github-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:grid-3"></iconify-icon>
                        </i><strong class="mb-3">grid-3</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:grid-3-filled"></iconify-icon>
                        </i><strong class="mb-3">grid-3-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:grid-3-twotone"></iconify-icon>
                        </i><strong class="mb-3">grid-3-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:hash"></iconify-icon>
                        </i><strong class="mb-3">hash</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:hash-small"></iconify-icon>
                        </i><strong class="mb-3">hash-small</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart"></iconify-icon>
                        </i><strong class="mb-3">heart</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-filled"></iconify-icon>
                        </i><strong class="mb-3">heart-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-filled-half"></iconify-icon>
                        </i><strong class="mb-3">heart-filled-half</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-half"></iconify-icon>
                        </i><strong class="mb-3">heart-half</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-half-filled"></iconify-icon>
                        </i><strong class="mb-3">heart-half-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-half-twotone"></iconify-icon>
                        </i><strong class="mb-3">heart-half-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-twotone"></iconify-icon>
                        </i><strong class="mb-3">heart-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-twotone-half"></iconify-icon>
                        </i><strong class="mb-3">heart-twotone-half</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:heart-twotone-half-filled"></iconify-icon>
                        </i><strong class="mb-3">heart-twotone-half-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home"></iconify-icon>
                        </i><strong class="mb-3">home</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-md"></iconify-icon>
                        </i><strong class="mb-3">home-md</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-md-twotone"></iconify-icon>
                        </i><strong class="mb-3">home-md-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-md-twotone-alt"></iconify-icon>
                        </i><strong class="mb-3">home-md-twotone-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-simple"></iconify-icon>
                        </i><strong class="mb-3">home-simple</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-simple-filled"></iconify-icon>
                        </i><strong class="mb-3">home-simple-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-simple-twotone"></iconify-icon>
                        </i><strong class="mb-3">home-simple-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-twotone"></iconify-icon>
                        </i><strong class="mb-3">home-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:home-twotone-alt"></iconify-icon>
                        </i><strong class="mb-3">home-twotone-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:iconify1"></iconify-icon>
                        </i><strong class="mb-3">iconify1</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:image"></iconify-icon>
                        </i><strong class="mb-3">image</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:image-twotone"></iconify-icon>
                        </i><strong class="mb-3">image-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:instagram"></iconify-icon>
                        </i><strong class="mb-3">instagram</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:laptop"></iconify-icon>
                        </i><strong class="mb-3">laptop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:laptop-twotone"></iconify-icon>
                        </i><strong class="mb-3">laptop-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:light-dark"></iconify-icon>
                        </i><strong class="mb-3">light-dark</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:light-dark-loop"></iconify-icon>
                        </i><strong class="mb-3">light-dark-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb"></iconify-icon>
                        </i><strong class="mb-3">lightbulb</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-filled"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-off"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-off-filled"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-off-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-off-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-off-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-off-loop"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-off-twotone"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-off-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-off-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-off-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:lightbulb-twotone"></iconify-icon>
                        </i><strong class="mb-3">lightbulb-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:linkedin"></iconify-icon>
                        </i><strong class="mb-3">linkedin</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:list"></iconify-icon>
                        </i><strong class="mb-3">list</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:list-3"></iconify-icon>
                        </i><strong class="mb-3">list-3</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:list-3-filled"></iconify-icon>
                        </i><strong class="mb-3">list-3-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:list-3-twotone"></iconify-icon>
                        </i><strong class="mb-3">list-3-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:list-indented"></iconify-icon>
                        </i><strong class="mb-3">list-indented</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:loading-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">loading-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:loading-loop"></iconify-icon>
                        </i><strong class="mb-3">loading-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:loading-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">loading-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:log-in"></iconify-icon>
                        </i><strong class="mb-3">log-in</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:log-out"></iconify-icon>
                        </i><strong class="mb-3">log-out</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:login"></iconify-icon>
                        </i><strong class="mb-3">login</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:logout"></iconify-icon>
                        </i><strong class="mb-3">logout</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker"></iconify-icon>
                        </i><strong class="mb-3">map-marker</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-alt"></iconify-icon>
                        </i><strong class="mb-3">map-marker-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-alt-filled"></iconify-icon>
                        </i><strong class="mb-3">map-marker-alt-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-alt-twotone"></iconify-icon>
                        </i><strong class="mb-3">map-marker-alt-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-filled"></iconify-icon>
                        </i><strong class="mb-3">map-marker-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-multiple-alt"></iconify-icon>
                        </i><strong class="mb-3">map-marker-multiple-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-multiple-alt-filled"></iconify-icon>
                        </i><strong class="mb-3">map-marker-multiple-alt-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-multiple-alt-twotone"></iconify-icon>
                        </i><strong class="mb-3">map-marker-multiple-alt-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-alt"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-alt-filled"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-alt-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-alt-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-alt-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-alt-twotone"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-alt-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-alt-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-alt-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-filled"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-loop"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-twotone"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-off-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">map-marker-off-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:map-marker-twotone"></iconify-icon>
                        </i><strong class="mb-3">map-marker-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:marker"></iconify-icon>
                        </i><strong class="mb-3">marker</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:marker-filled"></iconify-icon>
                        </i><strong class="mb-3">marker-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:marker-twotone"></iconify-icon>
                        </i><strong class="mb-3">marker-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:mastodon"></iconify-icon>
                        </i><strong class="mb-3">mastodon</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:mastodon-filled"></iconify-icon>
                        </i><strong class="mb-3">mastodon-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:mastodon-twotone"></iconify-icon>
                        </i><strong class="mb-3">mastodon-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:medical-services"></iconify-icon>
                        </i><strong class="mb-3">medical-services</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:medical-services-filled"></iconify-icon>
                        </i><strong class="mb-3">medical-services-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:medical-services-twotone"></iconify-icon>
                        </i><strong class="mb-3">medical-services-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:menu"></iconify-icon>
                        </i><strong class="mb-3">menu</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:menu-fold-left"></iconify-icon>
                        </i><strong class="mb-3">menu-fold-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:menu-fold-right"></iconify-icon>
                        </i><strong class="mb-3">menu-fold-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:menu-to-close-alt-transition"></iconify-icon>
                        </i><strong class="mb-3">menu-to-close-alt-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:menu-to-close-transition"></iconify-icon>
                        </i><strong class="mb-3">menu-to-close-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:menu-unfold-left"></iconify-icon>
                        </i><strong class="mb-3">menu-unfold-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:menu-unfold-right"></iconify-icon>
                        </i><strong class="mb-3">menu-unfold-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:minus"></iconify-icon>
                        </i><strong class="mb-3">minus</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:minus-circle"></iconify-icon>
                        </i><strong class="mb-3">minus-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:minus-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">minus-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:minus-square"></iconify-icon>
                        </i><strong class="mb-3">minus-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:minus-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">minus-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon"></iconify-icon>
                        </i><strong class="mb-3">moon</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:moon-alt-to-sunny-outline-loop-transition"></iconify-icon>
                        </i><strong class="mb-3">moon-alt-to-sunny-outline-loop-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-filled"></iconify-icon>
                        </i><strong class="mb-3">moon-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-filled-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-filled-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:moon-filled-alt-to-sunny-filled-loop-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">moon-filled-alt-to-sunny-filled-loop-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
                        </i><strong class="mb-3">moon-filled-to-sunny-filled-loop-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:moon-filled-to-sunny-filled-transition"></iconify-icon>
                        </i><strong class="mb-3">moon-filled-to-sunny-filled-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-rising-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-rising-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-rising-filled-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-rising-filled-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-rising-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-rising-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-rising-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-rising-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-rising-twotone-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-rising-twotone-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-rising-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-rising-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-simple"></iconify-icon>
                        </i><strong class="mb-3">moon-simple</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-simple-filled"></iconify-icon>
                        </i><strong class="mb-3">moon-simple-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-simple-twotone"></iconify-icon>
                        </i><strong class="mb-3">moon-simple-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:moon-to-sunny-outline-loop-transition"></iconify-icon>
                        </i><strong class="mb-3">moon-to-sunny-outline-loop-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:moon-to-sunny-outline-transition"></iconify-icon>
                        </i><strong class="mb-3">moon-to-sunny-outline-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-twotone"></iconify-icon>
                        </i><strong class="mb-3">moon-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-twotone-alt-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-twotone-alt-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:moon-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">moon-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:my-location"></iconify-icon>
                        </i><strong class="mb-3">my-location</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:my-location-loop"></iconify-icon>
                        </i><strong class="mb-3">my-location-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:my-location-off"></iconify-icon>
                        </i><strong class="mb-3">my-location-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:my-location-off-loop"></iconify-icon>
                        </i><strong class="mb-3">my-location-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:navigation-left-down"></iconify-icon>
                        </i><strong class="mb-3">navigation-left-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:navigation-left-up"></iconify-icon>
                        </i><strong class="mb-3">navigation-left-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:navigation-right-down"></iconify-icon>
                        </i><strong class="mb-3">navigation-right-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:navigation-right-up"></iconify-icon>
                        </i><strong class="mb-3">navigation-right-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:paint-drop"></iconify-icon>
                        </i><strong class="mb-3">paint-drop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:paint-drop-filled"></iconify-icon>
                        </i><strong class="mb-3">paint-drop-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:paint-drop-half-filled"></iconify-icon>
                        </i><strong class="mb-3">paint-drop-half-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:paint-drop-half-filled-twotone"></iconify-icon>
                        </i><strong class="mb-3">paint-drop-half-filled-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:paint-drop-half-twotone"></iconify-icon>
                        </i><strong class="mb-3">paint-drop-half-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:paint-drop-twotone"></iconify-icon>
                        </i><strong class="mb-3">paint-drop-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:patreon"></iconify-icon>
                        </i><strong class="mb-3">patreon</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pause"></iconify-icon>
                        </i><strong class="mb-3">pause</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pause-to-play-filled-transition"></iconify-icon>
                        </i><strong class="mb-3">pause-to-play-filled-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pause-to-play-transition"></iconify-icon>
                        </i><strong class="mb-3">pause-to-play-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:peertube"></iconify-icon>
                        </i><strong class="mb-3">peertube</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:peertube-alt"></iconify-icon>
                        </i><strong class="mb-3">peertube-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pencil"></iconify-icon>
                        </i><strong class="mb-3">pencil</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pencil-twotone"></iconify-icon>
                        </i><strong class="mb-3">pencil-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pencil-twotone-alt"></iconify-icon>
                        </i><strong class="mb-3">pencil-twotone-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person"></iconify-icon>
                        </i><strong class="mb-3">person</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-add"></iconify-icon>
                        </i><strong class="mb-3">person-add</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-add-filled"></iconify-icon>
                        </i><strong class="mb-3">person-add-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-add-twotone"></iconify-icon>
                        </i><strong class="mb-3">person-add-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-filled"></iconify-icon>
                        </i><strong class="mb-3">person-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-off"></iconify-icon>
                        </i><strong class="mb-3">person-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-off-filled"></iconify-icon>
                        </i><strong class="mb-3">person-off-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-off-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">person-off-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-off-loop"></iconify-icon>
                        </i><strong class="mb-3">person-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-off-twotone"></iconify-icon>
                        </i><strong class="mb-3">person-off-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-off-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">person-off-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-remove"></iconify-icon>
                        </i><strong class="mb-3">person-remove</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-remove-filled"></iconify-icon>
                        </i><strong class="mb-3">person-remove-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-remove-twotone"></iconify-icon>
                        </i><strong class="mb-3">person-remove-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-search"></iconify-icon>
                        </i><strong class="mb-3">person-search</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-search-filled"></iconify-icon>
                        </i><strong class="mb-3">person-search-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-search-twotone"></iconify-icon>
                        </i><strong class="mb-3">person-search-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:person-twotone"></iconify-icon>
                        </i><strong class="mb-3">person-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone"></iconify-icon>
                        </i><strong class="mb-3">phone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-add"></iconify-icon>
                        </i><strong class="mb-3">phone-add</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-add-twotone"></iconify-icon>
                        </i><strong class="mb-3">phone-add-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-call"></iconify-icon>
                        </i><strong class="mb-3">phone-call</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-call-loop"></iconify-icon>
                        </i><strong class="mb-3">phone-call-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-call-twotone"></iconify-icon>
                        </i><strong class="mb-3">phone-call-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-call-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">phone-call-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-incoming"></iconify-icon>
                        </i><strong class="mb-3">phone-incoming</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-incoming-twotone"></iconify-icon>
                        </i><strong class="mb-3">phone-incoming-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-off"></iconify-icon>
                        </i><strong class="mb-3">phone-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-off-loop"></iconify-icon>
                        </i><strong class="mb-3">phone-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-off-twotone"></iconify-icon>
                        </i><strong class="mb-3">phone-off-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-off-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">phone-off-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-outgoing"></iconify-icon>
                        </i><strong class="mb-3">phone-outgoing</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-outgoing-twotone"></iconify-icon>
                        </i><strong class="mb-3">phone-outgoing-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-remove"></iconify-icon>
                        </i><strong class="mb-3">phone-remove</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-remove-twotone"></iconify-icon>
                        </i><strong class="mb-3">phone-remove-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:phone-twotone"></iconify-icon>
                        </i><strong class="mb-3">phone-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pixelfed"></iconify-icon>
                        </i><strong class="mb-3">pixelfed</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pixelfed-filled"></iconify-icon>
                        </i><strong class="mb-3">pixelfed-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pixelfed-twotone"></iconify-icon>
                        </i><strong class="mb-3">pixelfed-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:play"></iconify-icon>
                        </i><strong class="mb-3">play</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:play-filled"></iconify-icon>
                        </i><strong class="mb-3">play-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:play-filled-to-pause-transition"></iconify-icon>
                        </i><strong class="mb-3">play-filled-to-pause-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:play-to-pause-transition"></iconify-icon>
                        </i><strong class="mb-3">play-to-pause-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:play-twotone"></iconify-icon>
                        </i><strong class="mb-3">play-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:pleroma"></iconify-icon>
                        </i><strong class="mb-3">pleroma</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:plus"></iconify-icon>
                        </i><strong class="mb-3">plus</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:plus-circle"></iconify-icon>
                        </i><strong class="mb-3">plus-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:plus-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">plus-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:plus-square"></iconify-icon>
                        </i><strong class="mb-3">plus-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:plus-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">plus-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:question"></iconify-icon>
                        </i><strong class="mb-3">question</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:question-circle"></iconify-icon>
                        </i><strong class="mb-3">question-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:question-circle-twotone"></iconify-icon>
                        </i><strong class="mb-3">question-circle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:question-square"></iconify-icon>
                        </i><strong class="mb-3">question-square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:question-square-twotone"></iconify-icon>
                        </i><strong class="mb-3">question-square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:reddit"></iconify-icon>
                        </i><strong class="mb-3">reddit</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:reddit-circle"></iconify-icon>
                        </i><strong class="mb-3">reddit-circle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:reddit-circle-loop"></iconify-icon>
                        </i><strong class="mb-3">reddit-circle-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:reddit-loop"></iconify-icon>
                        </i><strong class="mb-3">reddit-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:remove"></iconify-icon>
                        </i><strong class="mb-3">remove</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:rotate-180"></iconify-icon>
                        </i><strong class="mb-3">rotate-180</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:rotate-270"></iconify-icon>
                        </i><strong class="mb-3">rotate-270</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:rotate-90"></iconify-icon>
                        </i><strong class="mb-3">rotate-90</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:round-360"></iconify-icon>
                        </i><strong class="mb-3">round-360</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:round-ramp-left"></iconify-icon>
                        </i><strong class="mb-3">round-ramp-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:round-ramp-right"></iconify-icon>
                        </i><strong class="mb-3">round-ramp-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:roundabout-left"></iconify-icon>
                        </i><strong class="mb-3">roundabout-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:roundabout-right"></iconify-icon>
                        </i><strong class="mb-3">roundabout-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:search"></iconify-icon>
                        </i><strong class="mb-3">search</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:search-filled"></iconify-icon>
                        </i><strong class="mb-3">search-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:search-twotone"></iconify-icon>
                        </i><strong class="mb-3">search-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:speed"></iconify-icon>
                        </i><strong class="mb-3">speed</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:speed-loop"></iconify-icon>
                        </i><strong class="mb-3">speed-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:speedometer"></iconify-icon>
                        </i><strong class="mb-3">speedometer</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:speedometer-loop"></iconify-icon>
                        </i><strong class="mb-3">speedometer-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:square"></iconify-icon>
                        </i><strong class="mb-3">square</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:square-to-confirm-square-transition"></iconify-icon>
                        </i><strong class="mb-3">square-to-confirm-square-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:square-to-confirm-square-twotone-transition"></iconify-icon>
                        </i><strong class="mb-3">square-to-confirm-square-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:square-twotone"></iconify-icon>
                        </i><strong class="mb-3">square-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:square-twotone-to-confirm-square-twotone-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">square-twotone-to-confirm-square-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star"></iconify-icon>
                        </i><strong class="mb-3">star</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-alt"></iconify-icon>
                        </i><strong class="mb-3">star-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-alt-filled"></iconify-icon>
                        </i><strong class="mb-3">star-alt-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-alt-twotone"></iconify-icon>
                        </i><strong class="mb-3">star-alt-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-filled"></iconify-icon>
                        </i><strong class="mb-3">star-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-filled-half"></iconify-icon>
                        </i><strong class="mb-3">star-filled-half</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-half"></iconify-icon>
                        </i><strong class="mb-3">star-half</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-half-filled"></iconify-icon>
                        </i><strong class="mb-3">star-half-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-half-twotone"></iconify-icon>
                        </i><strong class="mb-3">star-half-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-pulsating-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">star-pulsating-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-pulsating-loop"></iconify-icon>
                        </i><strong class="mb-3">star-pulsating-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-pulsating-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">star-pulsating-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-twotone"></iconify-icon>
                        </i><strong class="mb-3">star-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:star-twotone-half"></iconify-icon>
                        </i><strong class="mb-3">star-twotone-half</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sun-rising-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">sun-rising-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sun-rising-loop"></iconify-icon>
                        </i><strong class="mb-3">sun-rising-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sun-rising-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">sun-rising-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sunny-filled"></iconify-icon>
                        </i><strong class="mb-3">sunny-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sunny-filled-loop"></iconify-icon>
                        </i><strong class="mb-3">sunny-filled-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:sunny-filled-loop-to-moon-alt-filled-loop-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">sunny-filled-loop-to-moon-alt-filled-loop-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:sunny-filled-loop-to-moon-filled-loop-transition"></iconify-icon>
                        </i><strong
                            class="mb-3">sunny-filled-loop-to-moon-filled-loop-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:sunny-filled-loop-to-moon-filled-transition"></iconify-icon>
                        </i><strong class="mb-3">sunny-filled-loop-to-moon-filled-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sunny-outline"></iconify-icon>
                        </i><strong class="mb-3">sunny-outline</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sunny-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">sunny-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                        </i><strong class="mb-3">sunny-outline-to-moon-alt-loop-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:sunny-outline-to-moon-loop-transition"></iconify-icon>
                        </i><strong class="mb-3">sunny-outline-to-moon-loop-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:sunny-outline-to-moon-transition"></iconify-icon>
                        </i><strong class="mb-3">sunny-outline-to-moon-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sunny-outline-twotone"></iconify-icon>
                        </i><strong class="mb-3">sunny-outline-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:sunny-outline-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">sunny-outline-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:switch"></iconify-icon>
                        </i><strong class="mb-3">switch</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:switch-filled"></iconify-icon>
                        </i><strong class="mb-3">switch-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:switch-filled-to-switch-off-filled-transition"></iconify-icon>
                        </i><strong class="mb-3">switch-filled-to-switch-off-filled-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:switch-off"></iconify-icon>
                        </i><strong class="mb-3">switch-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:switch-off-filled"></iconify-icon>
                        </i><strong class="mb-3">switch-off-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:switch-off-filled-to-switch-filled-transition"></iconify-icon>
                        </i><strong class="mb-3">switch-off-filled-to-switch-filled-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:switch-off-to-switch-transition"></iconify-icon>
                        </i><strong class="mb-3">switch-off-to-switch-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:switch-to-switch-off-transition"></iconify-icon>
                        </i><strong class="mb-3">switch-to-switch-off-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:telegram"></iconify-icon>
                        </i><strong class="mb-3">telegram</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:text-box"></iconify-icon>
                        </i><strong class="mb-3">text-box</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:text-box-multiple"></iconify-icon>
                        </i><strong class="mb-3">text-box-multiple</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:text-box-multiple-to-text-box-transition"></iconify-icon>
                        </i><strong class="mb-3">text-box-multiple-to-text-box-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:text-box-multiple-twotone"></iconify-icon>
                        </i><strong class="mb-3">text-box-multiple-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:text-box-multiple-twotone-to-text-box-twotone-transition"></iconify-icon>
                        </i><strong class="mb-3">text-box-multiple-twotone-to-text-box-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:text-box-to-text-box-multiple-transition"></iconify-icon>
                        </i><strong class="mb-3">text-box-to-text-box-multiple-transition</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:text-box-twotone"></iconify-icon>
                        </i><strong class="mb-3">text-box-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon
                                icon="line-md:text-box-twotone-to-text-box-multiple-twotone-transition"></iconify-icon>
                        </i><strong class="mb-3">text-box-twotone-to-text-box-multiple-twotone-transition</strong>
                        </li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:thumbs-down"></iconify-icon>
                        </i><strong class="mb-3">thumbs-down</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:thumbs-down-twotone"></iconify-icon>
                        </i><strong class="mb-3">thumbs-down-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:thumbs-up"></iconify-icon>
                        </i><strong class="mb-3">thumbs-up</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:thumbs-up-twotone"></iconify-icon>
                        </i><strong class="mb-3">thumbs-up-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:tiktok"></iconify-icon>
                        </i><strong class="mb-3">tiktok</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:turn-left"></iconify-icon>
                        </i><strong class="mb-3">turn-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:turn-right"></iconify-icon>
                        </i><strong class="mb-3">turn-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:turn-sharp-left"></iconify-icon>
                        </i><strong class="mb-3">turn-sharp-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:turn-sharp-right"></iconify-icon>
                        </i><strong class="mb-3">turn-sharp-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:turn-slight-left"></iconify-icon>
                        </i><strong class="mb-3">turn-slight-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:turn-slight-right"></iconify-icon>
                        </i><strong class="mb-3">turn-slight-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:twitter"></iconify-icon>
                        </i><strong class="mb-3">twitter</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:twitter-twotone"></iconify-icon>
                        </i><strong class="mb-3">twitter-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:twitter-x"></iconify-icon>
                        </i><strong class="mb-3">twitter-x</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:twitter-x-alt"></iconify-icon>
                        </i><strong class="mb-3">twitter-x-alt</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:u-turn-left"></iconify-icon>
                        </i><strong class="mb-3">u-turn-left</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:u-turn-right"></iconify-icon>
                        </i><strong class="mb-3">u-turn-right</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:upload-loop"></iconify-icon>
                        </i><strong class="mb-3">upload-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:upload-off-loop"></iconify-icon>
                        </i><strong class="mb-3">upload-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:upload-off-outline"></iconify-icon>
                        </i><strong class="mb-3">upload-off-outline</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:upload-off-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">upload-off-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:upload-outline"></iconify-icon>
                        </i><strong class="mb-3">upload-outline</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:upload-outline-loop"></iconify-icon>
                        </i><strong class="mb-3">upload-outline-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:uploading-loop"></iconify-icon>
                        </i><strong class="mb-3">uploading-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-baseline"></iconify-icon>
                        </i><strong class="mb-3">valign-baseline</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-baseline-twotone"></iconify-icon>
                        </i><strong class="mb-3">valign-baseline-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-bottom"></iconify-icon>
                        </i><strong class="mb-3">valign-bottom</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-bottom-twotone"></iconify-icon>
                        </i><strong class="mb-3">valign-bottom-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-middle"></iconify-icon>
                        </i><strong class="mb-3">valign-middle</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-middle-twotone"></iconify-icon>
                        </i><strong class="mb-3">valign-middle-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-top"></iconify-icon>
                        </i><strong class="mb-3">valign-top</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:valign-top-twotone"></iconify-icon>
                        </i><strong class="mb-3">valign-top-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch"></iconify-icon>
                        </i><strong class="mb-3">watch</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch-loop"></iconify-icon>
                        </i><strong class="mb-3">watch-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch-off"></iconify-icon>
                        </i><strong class="mb-3">watch-off</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch-off-loop"></iconify-icon>
                        </i><strong class="mb-3">watch-off-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch-off-twotone"></iconify-icon>
                        </i><strong class="mb-3">watch-off-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch-off-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">watch-off-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch-twotone"></iconify-icon>
                        </i><strong class="mb-3">watch-twotone</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:watch-twotone-loop"></iconify-icon>
                        </i><strong class="mb-3">watch-twotone-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:weather-cloudy-loop"></iconify-icon>
                        </i><strong class="mb-3">weather-cloudy-loop</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:youtube"></iconify-icon>
                        </i><strong class="mb-3">youtube</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:youtube-filled"></iconify-icon>
                        </i><strong class="mb-3">youtube-filled</strong></li>
                        <li class="icon-box" onclick="material_icon(this)"><i>
                            <iconify-icon icon="line-md:youtube-twotone"></iconify-icon>
                        </i><strong class="mb-3">youtube-twotone</strong></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- body-main-section-end  -->


</div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- toastify js -->
<script src="{{asset('assets/vendor/notifications/toastify-js.js')}}"></script>

<!-- animated icon js  -->
<script src="{{asset('assets/vendor/animated_icon/iconify-icon.min.js')}}"></script>

<!--js-->
<script src="{{asset('assets/js/animated_icon.js')}}"></script>
@endsection

