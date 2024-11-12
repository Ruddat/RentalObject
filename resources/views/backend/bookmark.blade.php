@extends('layout.master')
@section('title', 'Bookmark')
@section('css')

@endsection
@section('main-content')
        <div class="container-fluid">
            <!-- Breadcrumb start -->
            <div class="row m-1">
                <div class="col-12 ">
                    <h4 class="main-title">Bookmark</h4>
                    <ul class="app-line-breadcrumbs mb-3">
                        <li class="">
                            <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="#" class="f-s-14 f-w-500">Bookmark</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb end -->

            <!-- Bookmark start -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            <h5>Bookmark</h5>
                        </div>
                        <div class="card-body">
                            <div class="vertical-tab setting-tab">
                                <ul class="nav nav-tabs app-tabs-primary m-0" id="v-bg" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="bookmark-tab" data-bs-toggle="tab"
                                                data-bs-target="#bookmark-tab-pane" type="button" role="tab"
                                                aria-controls="bookmark-tab"
                                                aria-selected="true"><i class="ph-bold  ph-bookmark pe-2"></i>
                                            Book Mark
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="favourite-tab" data-bs-toggle="tab"
                                                data-bs-target="#favourite-tab-pane" type="button" role="tab"
                                                aria-controls="favourite-tab-pane" aria-selected="false"><i
                                                class="ph-bold  ph-heart pe-2"></i>Favourites
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="share-tab" data-bs-toggle="tab"
                                                data-bs-target="#share-tab-pane"
                                                type="button" role="tab" aria-controls="share-tab-pane"
                                                aria-selected="false"><i
                                                class="ph-bold  ph-share-network pe-2"></i>Share
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="important-tab" data-bs-toggle="tab"
                                                data-bs-target="#important-tab-pane" type="button" role="tab"
                                                aria-controls="important-tab-pane" aria-selected="false"><i
                                                class="ph-bold  ph-star pe-2"></i>Important
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="delet-tab" data-bs-toggle="tab"
                                                data-bs-target="#delet-tab-pane"
                                                type="button" role="tab" aria-controls="delet-tab-pane"
                                                aria-selected="false"><i
                                                class="ph-bold  ph-trash pe-2"></i>Delete
                                        </button>
                                    </li>
                                    <li>
                                        <div class="app-divider-v pt-2 pb-2 dashed"></div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="email-list">
                                <li>
                                    <h6>Labels</h6>
                                </li>
                                <li><i class="ti ti-circle-filled pe-2 text-danger"></i> Social</li>
                                <li><i class="ti ti-circle-filled pe-2 text-primary"></i> Company</li>
                                <li><i class="ti ti-circle-filled pe-2 text-success"></i> Important</li>
                                <li><i class="ti ti-circle-filled pe-2 text-info"></i> Private</li>
                            </ul>
                            <div class="app-divider-v pt-2 pb-2 dashed"></div>
                            <ul class="email-list">
                                <li><i class="ph-bold  ph-bookmark fs-5 pe-2"></i>All Bookmark</li>
                                <li><i class="ph-bold  ph-book-bookmark fs-5 pe-2"></i>Primary</li>
                                <li><i class="ph-bold  ph-tag fs-5 pe-2"></i>Promotions</li>
                                <li><i class="ph-bold  ph-user-circle fs-5 pe-2"></i>Social</li>
                            </ul>
                            <button type="button" class="btn btn-primary w-100 mt-4 "
                                    data-bs-toggle="modal"
                                    data-bs-target="#bookmarkAddModal">Add Bookmark
                            </button>
                            <!-- add bookmark model start  -->
                            <div class="modal fade" id="bookmarkAddModal" tabindex="-1"
                                 aria-labelledby="bookmarkAddModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h1 class="modal-title fs-5 text-white" id="bookmarkAddModalLabel">
                                                New Bookmark</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="app-form">
                                                <div class="mb-3">
                                                    <label class="form-label f-s-16">Title</label>
                                                    <input type="text" class="form-control" id="title" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label f-s-16">Url</label>
                                                    <input type="text" class="form-control" id="weburl"
                                                           required>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label f-s-16">Image</label>
                                                    <input type="file" class="form-control file_upload"
                                                           required>
                                                </div>
                                                <div class="mt-3">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Close
                                                    </button>
                                                    <button type="button" class="btn btn-primary" id="bookkey">
                                                        Add New
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- add bookmark model end  -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="bookmark-tab-pane" role="tabpanel"
                             aria-labelledby="bookmark-tab" tabindex="0">
                            <div class="bookmark-card row">
                                <div class="col-sm-6 col-xxl-4">
                                    <div class="card book-mark-card">
                                        <div class="card-body">
                                            <div class="draggable-card-img">
                                                <img src="{{asset('../assets/images/draggable/01.jpg')}} " alt=""
                                                     class="img-fluid">
                                                <div class="video-transparent-box"></div>
                                                <div class="draggable-card-icon">
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 heartBtn mb-2">
                                                        <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                                        <a role="button" href="#" class=""
                                                           data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end ms-3"
                                                            data-popper-placement="bottom-end">
                                                            <li class="d-flex justify-content-around">
                                                                <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                                                <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                                                <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                                                <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3  starBtn mb-2">
                                                        <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown action-icon">
                                                    <a role="button" href="#" class="" data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        data-popper-placement="bottom-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#editCardModal">
                                                                <i class="ti ti-edit text-success"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item deletbtn" href="#">
                                                                <i class="ti ti-trash text-danger"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="draggable-card-content pt-4">
                                                <h5 class="mb-2 f-w-500">Entire apartment</h5>
                                                <p class="f-s-16  text-secondary">https://ra-admin bookmark com
                                                    // bookmark page.html</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-4">
                                    <div class="card book-mark-card ">
                                        <div class="card-body">
                                            <div class="draggable-card-img">
                                                <img src="{{asset('../assets/images/draggable/02.jpg')}} " alt=""
                                                     class="img-fluid">
                                                <div class="video-transparent-box"></div>
                                                <div class="draggable-card-icon">
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 heartBtn mb-2">
                                                        <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                                        <a role="button" href="#" class=""
                                                           data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end ms-3"
                                                            data-popper-placement="bottom-end">
                                                            <li class="d-flex justify-content-around">
                                                                <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                                                <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                                                <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                                                <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 importantBtn mb-2">
                                                        <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown action-icon">
                                                    <a role="button" href="#" class="" data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        data-popper-placement="bottom-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#editCardModal">
                                                                <i class="ti ti-edit text-success"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item deletbtn" href="#">
                                                                <i class="ti ti-trash text-danger"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="draggable-card-content pt-4">
                                                <h5 class="mb-2 f-w-500">The Art of Minimalism</h5>
                                                <p class="f-s-16  text-secondary">https://ra-admin bookmark com
                                                    // bookmark page.html</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-4">
                                    <div class="card book-mark-card">
                                        <div class="card-body">
                                            <div class="draggable-card-img">
                                                <img src="{{asset('../assets/images/draggable/08.jpg')}} " alt=""
                                                     class="img-fluid">
                                                <div class="video-transparent-box"></div>
                                                <div class="draggable-card-icon">
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                                        <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                                        <a role="button" href="#" class=""
                                                           data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end ms-3"
                                                            data-popper-placement="bottom-end">
                                                            <li class="d-flex justify-content-around">
                                                                <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                                                <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                                                <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                                                <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                                        <i id="starIcon"
                                                           class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown action-icon">
                                                    <a role="button" href="#" class="" data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        data-popper-placement="bottom-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#editCardModal">
                                                                <i class="ti ti-edit text-success"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item deletbtn" href="#">
                                                                <i class="ti ti-trash text-danger"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="draggable-card-content pt-4">
                                                <h5 class="mb-2 f-w-500">Color and Texture</h5>
                                                <p class="f-s-16  text-secondary">https://ra-admin bookmark com
                                                    // bookmark page.html</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-4">
                                    <div class="card book-mark-card">
                                        <div class="card-body">
                                            <div class="draggable-card-img">
                                                <img src="{{asset('../assets/images/draggable/04.jpg')}} " alt=""
                                                     class="img-fluid">
                                                <div class="video-transparent-box"></div>
                                                <div class="draggable-card-icon">
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                                        <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                                        <a role="button" href="#" class=""
                                                           data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end ms-3"
                                                            data-popper-placement="bottom-end">
                                                            <li class="d-flex justify-content-around">
                                                                <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                                                <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                                                <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                                                <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                                        <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown action-icon">
                                                    <a role="button" href="#" class="" data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        data-popper-placement="bottom-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#editCardModal">
                                                                <i class="ti ti-edit text-success"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item deletbtn" href="#">
                                                                <i class="ti ti-trash text-danger"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>

                                                </div>

                                            </div>
                                            <div class="draggable-card-content pt-4">
                                                <h5 class="mb-2 f-w-500">Luxurious Living</h5>
                                                <p class="f-s-16  text-secondary">https://ra-admin bookmark com
                                                    // bookmark page.html</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-4">
                                    <div class="card book-mark-card">
                                        <div class="card-body">
                                            <div class="draggable-card-img">
                                                <img src="{{asset('../assets/images/draggable/09.jpg')}} " alt=""
                                                     class="img-fluid">
                                                <div class="video-transparent-box"></div>
                                                <div class="draggable-card-icon">
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                                        <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                                        <a role="button" href="#" class=""
                                                           data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end ms-3"
                                                            data-popper-placement="bottom-end">
                                                            <li class="d-flex justify-content-around">
                                                                <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                                                <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                                                <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                                                <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                                        <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown action-icon">
                                                    <a role="button" href="#" class="" data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        data-popper-placement="bottom-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#editCardModal">
                                                                <i class="ti ti-edit text-success"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item deletbtn" href="#">
                                                                <i class="ti ti-trash text-danger"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="draggable-card-content pt-4">
                                                <h5 class="mb-2 f-w-500">Good lighting </h5>
                                                <p class="f-s-16  text-secondary">https://ra-admin bookmark com
                                                    // bookmark page.html</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xxl-4">
                                    <div class="card book-mark-card">
                                        <div class="card-body">
                                            <div class="draggable-card-img">
                                                <img src="{{asset('../assets/images/draggable/10.jpg')}} " alt=""
                                                     class="img-fluid">
                                                <div class="video-transparent-box"></div>
                                                <div class="draggable-card-icon">
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 heartBtn">
                                                        <i class="ph-bold  ph-heart f-s-18 text-danger hearticon"></i>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 d-flex-center b-r-50 me-3 shareBtn mb-2 dropend">
                                                        <a role="button" href="#" class=""
                                                           data-bs-toggle="dropdown"
                                                           aria-expanded="false">
                                                            <i class="ph-bold  ph-share-network f-s-18 text-primary shareicon d-flex"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end ms-3"
                                                            data-popper-placement="bottom-end">
                                                            <li class="d-flex justify-content-around">
                                                                <i class="ph-duotone  ph-whatsapp-logo f-s-20 text-primary"></i>
                                                                <i class="ph-duotone  ph-instagram-logo f-s-20 text-success"></i>
                                                                <i class="ph-duotone  ph-facebook-logo f-s-20 text-info"></i>
                                                                <i class="ph-duotone  ph-messenger-logo f-s-20 text-danger"></i>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="bg-white h-35 w-35 mb-2 d-flex-center b-r-50 me-3 importantBtn">
                                                        <i class="ph-bold  ph-star f-s-18 text-warning staricon"></i>
                                                    </div>
                                                </div>
                                                <div class="dropdown action-icon">
                                                    <a role="button" href="#" class="" data-bs-toggle="dropdown"
                                                       aria-expanded="false">
                                                        <i class="ph-bold  ph-dots-three-vertical text-white f-s-18"></i>
                                                    </a>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        data-popper-placement="bottom-end">
                                                        <li>
                                                            <a class="dropdown-item" href="#"
                                                               data-bs-toggle="modal"
                                                               data-bs-target="#editCardModal">
                                                                <i class="ti ti-edit text-success"></i> Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item deletbtn" href="#">
                                                                <i class="ti ti-trash text-danger"></i> Delete
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                            <div class="draggable-card-content pt-4">
                                                <h5 class="mb-2 f-w-500">Eco-Friendly</h5>
                                                <p class="f-s-16  text-secondary">https://ra-admin bookmark com
                                                    // bookmark page.html</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="favourite-tab-pane" role="tabpanel"
                             aria-labelledby="favourite-tab"
                             tabindex="0">

                            <div class="row">

                            </div>
                        </div>
                        <div class="tab-pane" id="share-tab-pane" role="tabpanel" aria-labelledby="share-tab"
                             tabindex="0">

                            <div class="row">

                            </div>


                        </div>
                        <div class="tab-pane" id="important-tab-pane" role="tabpanel"
                             aria-labelledby="important-tab"
                             tabindex="0">
                            <div class="row"></div>
                        </div>
                        <div class="tab-pane" id="delet-tab-pane" role="tabpanel" aria-labelledby="delet-tab"
                             tabindex="0">
                            <div class="row"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bookmark end -->
        </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- js  -->
    <script src="{{asset('assets/js/bookmark.js')}}"></script>
@endsection


