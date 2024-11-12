@extends('layout.master')
@section('title', 'Draggable')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Draggable</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                            <span>
                                                <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Draggable</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!--draggable section start -->


        <div class="row share-list-responsive">
            <div class="col-xxl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Draggable Share List</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 box-layout-draggable">
                                <ul class="draggable-share-list share-menu-list" id="shareMenuLeft">
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item " draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-primary share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Wilson Terry</h6>
                                                        <p class="mb-0 text-secondary">web designer</p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item " draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-secondary share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/2.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Jalyn Donnelly</h6>
                                                        <p class="mb-0 text-secondary">web developer</p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item " draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-success share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/3.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Betty Mante</h6>
                                                        <p class="mb-0 text-secondary">Ui/ux designer
                                                        </p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item " draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-danger share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Pinkie Corkery</h6>
                                                        <p class="mb-0 text-secondary">React developer
                                                        </p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 box-layout-draggable">
                                <ul class=" draggable-share-list share-menu-list" id="shareMenuRight">
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item" draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-info share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Clara Schmidt</h6>
                                                        <p class="mb-0 text-secondary">Php developer</p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item" draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-warning share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Dane Wiza</h6>
                                                        <p class="mb-0 text-secondary">Node js developer
                                                        </p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item" draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-light share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/6.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Palma Rohan</h6>
                                                        <p class="mb-0 text-secondary">Ios developer</p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="share-menu-item" draggable="false">
                                                    <div
                                                        class="h-40 w-40 d-flex-center b-r-50 overflow-hidden text-bg-dark share-menu-img">
                                                        <img src="{{asset('../assets/images/avtar/07.png')}}"
                                                             alt="" class="img-fluid">
                                                    </div>
                                                    <div class="share-menu-content">
                                                        <h6 class="mb-0">Ora Kreiger</h6>
                                                        <p class="mb-0 text-secondary">Flutter developer
                                                        </p>
                                                    </div>
                                                    <div class="share-menu-icons">

                                                        <button type="button"
                                                                class="btn btn-facebook icon-btn b-r-22"><i
                                                                class="ti ti-brand-facebook text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-twitter icon-btn b-r-22"><i
                                                                class="ti ti-brand-twitter text-white f-s-14"></i></button>
                                                        <button type="button"
                                                                class="btn btn-whatsapp icon-btn b-r-22"><i
                                                                class="ti ti-brand-whatsapp text-white f-s-14"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Draggable Clonic List </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 box-layout-draggable">
                                <ul class="clonic-menu-list" id="clonicMenuLeft">
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                A
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 1</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                B
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 2</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                C
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 3</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                D
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 4</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                E
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 5</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 col-sm-6 col-md-6 col-lg-6 box-layout-draggable">
                                <ul class="clonic-menu-list" id="clonicMenuRight">
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                A
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 6</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                B
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 7</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                C
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 8</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                D
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 9</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="clonic-menu-item">

                                                            <span
                                                                class="text-light-primary h-40 w-40 d-flex-center b-r-50 clonic-menu-img">
                                                                E
                                                            </span>


                                            <div class="clonic-menu-content">
                                                <h6 class="mb-0">Clonic Menu List 10</h6>
                                            </div>
                                            <span>
                                                                <i class="ph-fill  ph-dots-three-outline-vertical"></i>
                                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Draggable Handle List </h5>
                    </div>

                    <div class="card-body">

                        <ul class="list-group handle-list-group" id="handleList">


                            <li class="list-group-item text-light-primary"> <i
                                    class="ph-bold  ph-anchor-simple list-handle"></i>A simple primary
                                list group
                                item</li>
                            <li class="list-group-item text-light-secondary"><i
                                    class="ph-bold  ph-anchor-simple list-handle"></i>A simple secondary
                                list
                                group item</li>
                            <li class="list-group-item text-light-success"> <i
                                    class="ph-bold  ph-anchor-simple list-handle"></i>A simple success
                                list group
                                item</li>
                            <li class="list-group-item text-light-danger"><i
                                    class="ph-bold  ph-anchor-simple list-handle"></i>A simple danger
                                list group
                                item</li>
                            <li class="list-group-item text-light-warning"> <i
                                    class="ph-bold  ph-anchor-simple list-handle"></i>A simple warning
                                list group
                                item</li>
                            <li class="list-group-item text-light-info"><i
                                    class="ph-bold  ph-anchor-simple list-handle"></i>A simple info list
                                group item
                            </li>

                            <li class="list-group-item text-light-dark"><i
                                    class="ph-bold  ph-anchor-simple list-handle"></i>A simple dark list
                                group item
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Draggable Grid</h5>
                    </div>

                    <div class="card-body">
                        <ul class=" grid-box-list" id="gridList">
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-1</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-2</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-3</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-4</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-5</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-6</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-7</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-8</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-9</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-10</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-11</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-12</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-13</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-14</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-15</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-16</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-17</h6>
                                </div>
                            </li>
                            <li>
                                <div class="grid-box">
                                    <h6>Grid-18</h6>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Nestable List</h5>
                    </div>
                    <div class="card-body">

                        <div id="nestedDemo" class="list-group nested-sortable">
                            <div class="list-group-item">title 1</div>
                            <div class="list-group-item">title 2</div>
                            <div class="list-group-item">title3
                                <div class="list-group nested-sortable">
                                    <div class="list-group-item">title 4</div>
                                    <div class="list-group-item" data-id="5">title 5</div>
                                    <div class="list-group-item" data-id="6">title 6</div>
                                </div>
                            </div>
                            <div class="list-group-item" data-id="7">title 7</div>
                            <div class="list-group-item" data-id="8">title 8</div>
                            <div class="list-group-item" data-id="9">title 9</div>
                            <div class="list-group-item" data-id="10">title10
                                <div class="list-group nested-sortable">
                                    <div class="list-group-item" data-id="11">title 11</div>
                                    <div class="list-group-item" data-id="12">title 12</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Colour Variant Nestable List</h5>
                    </div>
                    <div class="card-body">

                        <div class="list-group nested-sortable">
                            <div class="list-group-item bg-light-primary">
                                <i class="ph-bold  ph-plus me-3 "></i>Title 1

                            </div>
                            <div class="list-group-item bg-light-success"> <i
                                    class="ph-bold  ph-plus me-3 "></i>Title 2</div>
                            <div class="list-group-item bg-light-secondary"> <i
                                    class="ph-bold  ph-plus me-3 "></i>Title3
                                <div class="list-group nested-sortable">
                                    <div class="list-group-item bg-light-dark"> <i
                                            class="ph-bold  ph-minus me-3"></i>Title 4</div>
                                    <div class="list-group-item bg-light-dark" data-id="5"> <i
                                            class="ph-bold  ph-minus me-3"></i>Title 5</div>
                                    <div class="list-group-item bg-light-dark" data-id="6"> <i
                                            class="ph-bold  ph-minus me-3"></i>Title 6</div>
                                </div>
                            </div>
                            <div class="list-group-item bg-light-danger" data-id="7"> <i
                                    class="ph-bold  ph-plus me-3 "></i>Title 7</div>
                            <div class="list-group-item bg-light-info" data-id="8"> <i
                                    class="ph-bold  ph-plus me-3 "></i>Title 8</div>
                            <div class="list-group-item bg-light-warning" data-id="9"> <i
                                    class="ph-bold  ph-plus me-3 "></i>Title 9</div>
                            <div class="list-group-item bg-light-secondary" data-id="10"> <i
                                    class="ph-bold  ph-plus me-3 "></i>Title10
                                <div class="list-group nested-sortable">
                                    <div class="list-group-item bg-light-dark" data-id="11"> <i
                                            class="ph-bold  ph-minus me-3"></i>Title 11</div>
                                    <div class="list-group-item bg-light-dark" data-id="12"> <i
                                            class="ph-bold  ph-minus me-3"></i>Title 12</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row draggable-card-responsive" id="draggableCard">
            <div class="col-6 col-sm-6 col-lg-3">
                <div class="card draggable-card ">
                    <div class="card-body">
                        <div class="draggable-card-img">
                            <img src="{{asset('../assets/images/draggable/01.jpg')}} " alt="" class="img-fluid">
                            <div class="draggable-card-icon">
                                                <span class="bg-white h-45 w-45 d-flex-center b-r-50">
                                                    <i class="ph-fill  ph-heart text-danger f-s-18"></i>
                                                </span>
                            </div>
                        </div>
                        <div class="draggable-card-content pt-3">
                            <h6 class="mb-2 f-w-500">Entire apartment</h6>
                            <p class="f-s-16  text-secondary ">Nice 24sqm flat, 2min to city
                                center. Excellent center light</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3">
                <div class="card draggable-card">
                    <div class="card-body">
                        <div class="draggable-card-img">
                            <img src="{{asset('../assets/images/draggable/02.jpg')}} " alt="" class="img-fluid">
                            <div class="draggable-card-icon">
                                                <span class="bg-white h-45 w-45 d-flex-center b-r-50">
                                                    <i class="ph-fill  ph-heart text-danger f-s-18"></i>
                                                </span>
                            </div>

                        </div>
                        <div class="draggable-card-content pt-3">
                            <h6 class="mb-2 f-w-500">The Art of Minimalism</h6>
                            <p class="f-s-16  text-secondary">The guide offers practical tips on
                                decluttering spaces</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3">
                <div class="card draggable-card">
                    <div class="card-body">
                        <div class="draggable-card-img">
                            <img src="{{asset('../assets/images/draggable/03.jpg')}} " alt="" class="img-fluid">
                            <div class="draggable-card-icon">
                                                <span class="bg-white h-45 w-45 d-flex-center b-r-50">
                                                    <i class="ph-fill  ph-heart text-danger f-s-18"></i>
                                                </span>
                            </div>

                        </div>
                        <div class="draggable-card-content pt-3">
                            <h6 class="mb-2 f-w-500">Color and Texture</h6>
                            <p class="f-s-16  text-secondary"> It emphasizes the psychological effects
                                of planning </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6 col-sm-6 col-lg-3">
                <div class="card draggable-card">
                    <div class="card-body">
                        <div class="draggable-card-img">
                            <img src="{{asset('../assets/images/draggable/04.jpg')}} " alt="" class="img-fluid">
                            <div class="draggable-card-icon">
                                                <span class="bg-white h-45 w-45 d-flex-center b-r-50">
                                                    <i class="ph-fill  ph-heart text-danger f-s-18"></i>
                                                </span>
                            </div>

                        </div>
                        <div class="draggable-card-content pt-3">
                            <h6 class="mb-2 f-w-500">Luxurious Living</h6>
                            <p class="f-s-16  text-secondary">It emphasizes the importance of strategic
                                planning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--draggable section end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- draggable js  -->
    <script src="{{asset('assets/vendor/sortable/Sortable.min.js')}}"></script>

    <!--js  -->
    <script src="{{asset('assets/js/draggable.js')}}"></script>
@endsection

