@extends('backend.layout.master')
@section('title', 'File Manager')
@section('css')
    <!-- apexcharts css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/apexcharts/apexcharts.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Filemanager</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                        <span>
                                          <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                                        </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Filemanager</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Filemanager start -->
        <div class="row">
            <div class="col-lg-4 col-xxl-3">
                <div class="card">
                    <div class="card-header">
                        <h5>My Drive</h5>
                    </div>
                    <div class="card-body">
                        <div class="horizontal-tab-wrapper">
                            <ul class="filemenu-list mt-3 tabs">
                                <li class="tab-link active" data-tab="1">
                                    <i class="ti ti-folder-filled fs-5 pe-2"></i> <span class="flex-grow-1">My Cloud</span>
                                    10+
                                </li>

                                <li class="tab-link" data-tab="2"><i class="ti ti-star fs-5 pe-2"></i><span
                                        class="flex-grow-1">Starred</span></li>
                                <li class="tab-link" data-tab="3"><i
                                        class="ti ti-trash fs-5 pe-2 "></i><span
                                        class="flex-grow-1">Recycle Bin </span>
                                    2+
                                </li>
                                <li class="tab-link" data-tab="4"><i
                                        class="ti ti-rotate-clockwise fs-5 pe-2"></i><span
                                        class="flex-grow-1"> Recent</span></li>

                                <li class="app-divider-v dashed m-0 p-2"></li>
                                <li>
                                    <i class="ti ti-send fs-5 pe-2"></i>
                                    <span class="flex-grow-1">Shared File</span>
                                </li>
                                <li><i class="ti ti-help fs-5 pe-2"></i><span
                                        class="flex-grow-1">Help</span>
                                </li>
                                <li><i class="ti ti-adjustments-alt fs-5 pe-2"></i> <span
                                        class="flex-grow-1">Settings</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Overview</h5>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <div id="polar2"></div>
                        </div>
                        <div class="file-manager-sidebar mb-4">
                            <div class="d-flex align-items-center position-relative">
                        <span class="text-light-primary h-40 w-40 d-flex-center b-r-10 position-absolute">
                          <i class="ph-bold  ph-image f-s-20"></i>
                        </span>
                                <div class="flex-grow-1 ms-5">
                                    <h6 class="mb-0">Images</h6>
                                    <p class="text-secondary mb-0">1.195 Files</p>
                                </div>
                                <p class="text-secondary f-w-500 mb-0">37.2GB</p>
                            </div>
                        </div>
                        <div class="file-manager-sidebar mb-4">
                            <div class="d-flex align-items-center position-relative">
                        <span class="text-light-success h-40 w-40 d-flex-center b-r-10 position-absolute">
                          <i class="ph-bold  ph-video f-s-22"></i>
                        </span>
                                <div class="flex-grow-1 ms-5  ">
                                    <h6 class="mb-0">Videos</h6>
                                    <p class="text-secondary mb-0">53 Files</p>
                                </div>
                                <p class="text-secondary f-w-500 mb-0">19.1 GB</p>
                            </div>
                        </div>
                        <div class="file-manager-sidebar mb-4">
                            <div class="d-flex align-items-center position-relative">
                        <span class="text-light-danger h-40 w-40 d-flex-center b-r-10 position-absolute">
                          <i class="ph-bold  ph-file-archive f-s-20"></i>
                        </span>
                                <div class="flex-grow-1 ms-5  ">
                                    <h6 class="mb-0">Documents</h6>
                                    <p class="text-secondary mb-0">486 Files</p>
                                </div>
                                <p class="text-secondary f-w-500 mb-0">23.5 MB</p>
                            </div>
                        </div>
                        <div class="file-manager-sidebar">
                            <div class="d-flex align-items-center position-relative">
                        <span class="text-light-warning h-40 w-40 d-flex-center b-r-10 position-absolute">
                          <i class="ph-bold  ph-files f-s-20"></i>
                        </span>
                                <div class="flex-grow-1 ms-5  ">
                                    <h6 class="mb-0">Others</h6>
                                    <p class="text-secondary mb-0">32 Files</p>
                                </div>
                                <p class="text-secondary f-w-500 mb-0">13 MB</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h5>File Upload</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-4">
                            <h6 class=" mb-1 text-dark">Uploading 59 photos</h6>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-secondary">Photoes 01</p>
                                    <span class="text-primary">65%</span>
                                </div>
                                <div class="progress h-5">
                                    <div class="progress-bar bg-primary h-5" role="progressbar"
                                         aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 65%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class=" mb-1 text-dark">Uploading 7 videos</h6>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-secondary">Museum</p>
                                    <span class="text-primary">25%</span>
                                </div>
                                <div class="progress h-5">
                                    <div class="progress-bar bg-primary h-5" role="progressbar"
                                         aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class=" mb-1 text-dark">Uploading 12 Documents</h6>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <p class="text-secondary">My Work</p>
                                    <span class="text-primary">90%</span>
                                </div>
                                <div class="progress h-5">
                                    <div class="progress-bar bg-primary h-5" role="progressbar"
                                         aria-valuenow="20"
                                         aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xxl-9">
                <div class="content-wrapper">
                    <!-- tab-1  -->
                    <div id="tab-1" class="tabs-content active">
                        <div class="card">
                            <div class="card-header">
                                <h5>Quick-Access</h5>
                            </div>
                            <div class="card-body" id="rename_keybody">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card quick-access">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="starreddiv favBtn">
                                                        <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                    </div>

                                                    <div class="dropdown folder-dropdown">
                                                        <a class="" role="button" data-bs-toggle="dropdown"
                                                           aria-expanded="true">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                   href=""><i
                                                                        class="ti ti-file-export text-primary"></i>
                                                                    view</a></li>
                                                            <li><a class="dropdown-item edit-folder-list"
                                                                   href="" data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-edit text-success"></i>
                                                                    Rename</a></li>
                                                            <li><a class="dropdown-item delete-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-trash text-danger"></i>
                                                                    Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span class="d-block text-center mb-3">
                                                                      <img src="{{asset('../assets/images/icons/zip.png')}}" alt="" class="img-fluid">
                                                            </span>
                                                <p class="text-center f-w-600 mb-0">3d illustration pack</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card quick-access">
                                            <div class="card-body">

                                                <div class="d-flex justify-content-between">
                                                    <div class="starreddiv favBtn">
                                                        <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                    </div>

                                                    <div class="dropdown folder-dropdown">
                                                        <a class="" role="button" data-bs-toggle="dropdown"
                                                           aria-expanded="true">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                   href=""><i
                                                                        class="ti ti-file-export text-primary"></i>
                                                                    view</a></li>
                                                            <li><a class="dropdown-item edit-folder-list"
                                                                   href="" data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-edit text-success"></i>
                                                                    Rename</a></li>
                                                            <li><a class="dropdown-item delete-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-trash text-danger"></i>
                                                                    Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span class="d-block text-center mb-3">
                                  <img src="{{asset('../assets/images/icons/pdf.png')}}" alt="" class="img-fluid">
                                </span>
                                                <p class="text-center f-w-600 mb-0">Thinking type.pdf</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card  quick-access">
                                            <div class="card-body">

                                                <div class="d-flex justify-content-between">
                                                    <div class="starreddiv favBtn">
                                                        <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                    </div>

                                                    <div class="dropdown folder-dropdown">
                                                        <a class="" role="button" data-bs-toggle="dropdown"
                                                           aria-expanded="true">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                   href=""><i
                                                                        class="ti ti-file-export text-primary"></i>
                                                                    view</a></li>
                                                            <li><a class="dropdown-item edit-folder-list"
                                                                   href="" data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-edit text-success"></i>
                                                                    Rename</a></li>
                                                            <li><a class="dropdown-item delete-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-trash text-danger"></i>
                                                                    Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span class="d-block text-center mb-3">
                                  <img src="{{asset('../assets/images/icons/file.png')}}" alt="" class="img-fluid">
                                </span>
                                                <p class="text-center f-w-600 mb-0">Product.docx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card  quick-access">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="starreddiv favBtn">
                                                        <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                    </div>
                                                    <div class="dropdown folder-dropdown">
                                                        <a class="" role="button" data-bs-toggle="dropdown"
                                                           aria-expanded="true">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                   href=""><i
                                                                        class="ti ti-file-export text-primary"></i>
                                                                    view</a></li>
                                                            <li><a class="dropdown-item edit-folder-list"
                                                                   href="" data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-edit text-success"></i>
                                                                    Rename</a></li>
                                                            <li><a class="dropdown-item delete-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-trash text-danger"></i>
                                                                    Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span class="d-block text-center mb-3">
                                  <img src="{{asset('../assets/images/icons/gallary.png')}}" alt="" class="img-fluid">
                                </span>
                                                <p class="text-center f-w-600 mb-0">Images/file folder</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rename modal  -->
                        <div class="modal fade" id="renameModal" tabindex="-1"
                             aria-labelledby="renameModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h1 class="modal-title fs-5 text-white" id="renameModalLabel">Folder
                                            Rename</h1>
                                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="rename-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <form id="renameForm">
                                                        <div class="mb-3">
                                                            <label class="form-label">Folder Name</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Title" id="titlename">
                                                        </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary" id="renamekey">Save
                                            changes
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- rename modal end  -->

                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center justify-content-between">
                                    <h5>Folders</h5>
                                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                                            data-bs-target="#folderModal">Create Folder
                                    </button>
                                </div>
                            </div>
                            <div class="card-body" id="newFolder">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body folder-card">
                                                <div class="starreddiv favBtn">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>

                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-list"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success"></i> Rename</a>
                                                        </li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="fileimage">
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}" alt=""
                                                         class="img-fluid">
                                                    <p class="mb-0 f-s-16 text-center">My Work</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <p class="text-secondary mb-0 f-w-500">25.67GB</p>
                                                    <p class="text-secondary mb-0 f-w-500 text-end">50GB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body folder-card">
                                                <div class="starreddiv favBtn">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>

                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-list"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success"></i> Rename</a>
                                                        </li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="fileimage">
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}" alt=""
                                                         class="img-fluid">
                                                    <p class="mb-0 f-s-16 text-center">Graduation</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <p class="text-secondary mb-0 f-w-500">25.67GB</p>
                                                    <p class="text-secondary mb-0 f-w-500 text-end">50GB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body folder-card">
                                                <div class="starreddiv favBtn">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>

                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-list"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success"></i> Rename</a>
                                                        </li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="fileimage">
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}" alt=""
                                                         class="img-fluid">
                                                    <p class="mb-0 f-s-16 text-center">Company</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2 ">
                                                    <p class="text-secondary mb-0 f-w-500">25.67GB</p>
                                                    <p class="text-secondary mb-0 f-w-500 text-end">50GB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body folder-card">
                                                <div class="starreddiv favBtn">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>

                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-list"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success"></i> Rename</a>
                                                        </li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="fileimage">
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}" alt=""
                                                         class="img-fluid">
                                                    <p class="mb-0 f-s-16 text-center">Photoes</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <p class="text-secondary mb-0 f-w-500">25.67GB</p>
                                                    <p class="text-secondary mb-0 f-w-500 text-end">50GB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--new-folder-add modal start-->
                        <div class="modal fade" id="folderModal" tabindex="-1"
                             aria-labelledby="folderModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h1 class="modal-title fs-5 text-white" id="folderModalLabel">New
                                            Folder</h1>
                                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="resent-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label class="form-label">Folder Name</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Title" id="title">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary" id="folderadd">Add New
                                            Folder
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--new-folder-add modal end -->

                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex gap-2 justify-content-between flex-sm-row flex-column">
                                    <h5>Recent Added</h5>
                                    <button type="button" class="btn btn-primary " data-bs-toggle="modal"
                                            id="create_recent_key">Create File
                                    </button>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table id="recentdatatable"
                                           class="table table-bottom-border  recent-table align-middle table-hover mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Total Items</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Last Modified</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody id="recent_key_body">
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/file.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Monthly Report july</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">17</td>
                                            <td>120MB</td>
                                            <td class="text-danger f-w-500">21 May,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 star-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/pdf.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Thesis-Brain McKnight</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">15</td>
                                            <td>25MB</td>
                                            <td class="text-danger f-w-500">10 july,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 star-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Campaign Plan Q4-2020</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">1</td>
                                            <td>24MB</td>
                                            <td class="text-danger f-w-500">2 jan,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 star-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/music.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Quick CV & Portfolio</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">10</td>
                                            <td>209MB</td>
                                            <td class="text-danger f-w-500">15 march,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 star-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/zip.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Wireframes Project A</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">8</td>
                                            <td>100MB</td>
                                            <td class="text-danger f-w-500">11 may,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 star-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/gallary.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Campaign plan Q4-2021</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">3</td>
                                            <td>103MB</td>
                                            <td class="text-danger f-w-500">2 May,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="seller-table-footer d-flex gap-2 justify-content-between align-items-center">
                                    <p class="text-secondary text-truncate">Showing 1 to 6 of 24 order
                                        entries</p>
                                    <ul class="pagination app-pagination">
                                        <li class="page-item bg-light-secondar disabled">
                                            <a class="page-link b-r-left">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item page-next">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- delete-modal start  -->
                        <div class="modal fade" id="apiDeletModal" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="{{asset('../assets/images/icons/delete-icon.png')}}" alt=""
                                             class="img-fluid">
                                        <div class="text-center">
                                            <h4 class="text-danger f-w-600">Are You Sure?</h4>
                                            <p class="text-secondary f-s-16">You won't be able to revert
                                                this!</p>
                                        </div>

                                        <div class="text-center mt-3">
                                            <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close
                                            </button>
                                            <button type="button" class="btn btn-primary"
                                                    id="confirmDelete">Yes,Delet it
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete-modal-end-->

                        <!-- recent modal start  -->
                        <div class="modal fade" id="resentModal" tabindex="-1"
                             aria-labelledby="resentModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <h1 class="modal-title fs-5 text-white" id="resentModalLabel">New
                                            File</h1>
                                        <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="resent-form">
                                            <div class="row">
                                                <div class="col-12">
                                                    <form id="resentForm">
                                                        <div class="mb-3">
                                                            <label class="form-label">File Name</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="Title" id="recentname">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close
                                        </button>
                                        <button type="button" class="btn btn-primary" id="resentkey">Add New
                                            File
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- recent modal end  -->

                    </div>

                    <!-- tab-2  -->
                    <div id="tab-2" class="tabs-content">
                        <div class="card documents-section">
                            <div class="card-header">
                                <h5>Starred Documents & Files</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card quick-access">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between">
                                                    <div class="starreddiv favBtn">
                                                        <i class="ph-star text-warning f-s-18 fav-icon ph-fill"></i>
                                                    </div>

                                                    <div class="dropdown folder-dropdown">
                                                        <a class="" role="button" data-bs-toggle="dropdown"
                                                           aria-expanded="true">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                   href=""><i
                                                                        class="ti ti-file-export text-primary"></i>
                                                                    view</a></li>
                                                            <li><a class="dropdown-item edit-folder-list"
                                                                   href="" data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-edit text-success"></i>
                                                                    Rename</a></li>
                                                            <li><a class="dropdown-item delete-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-trash text-danger"></i>
                                                                    Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span class="d-block text-center mb-3">
                                                                      <img src="{{asset('../assets/images/icons/zip.png')}}" alt="" class="img-fluid">
                                                            </span>
                                                <p class="text-center f-w-600 mb-0">3d illustration pack</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body folder-card">
                                                <div class="starreddiv favBtn">
                                                    <i class="ph-star text-warning f-s-18 fav-icon ph-fill"></i>
                                                </div>

                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-list"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success"></i> Rename</a>
                                                        </li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="fileimage">
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}" alt=""
                                                         class="img-fluid">
                                                    <p class="mb-0 f-s-16 text-center">Graduation</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <p class="text-secondary mb-0 f-w-500">25.67GB</p>
                                                    <p class="text-secondary mb-0 f-w-500 text-end">50GB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- tab-3  -->
                    <div id="tab-3" class="tabs-content">
                        <div class="card documents-sections">
                            <div class="card-header">
                                <h5>Deleted Flies</h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body folder-card">
                                                <div class="starreddiv favBtn">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>

                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-list"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success"></i> Rename</a>
                                                        </li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="fileimage">
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}" alt=""
                                                         class="img-fluid">
                                                    <p class="mb-0 f-s-16 text-center">My Work</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <p class="text-secondary mb-0 f-w-500">25.67GB</p>
                                                    <p class="text-secondary mb-0 f-w-500 text-end">50GB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card  quick-access">
                                            <div class="card-body">

                                                <div class="d-flex justify-content-between">
                                                    <div class="starreddiv favBtn">
                                                        <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                    </div>

                                                    <div class="dropdown folder-dropdown">
                                                        <a class="" role="button" data-bs-toggle="dropdown"
                                                           aria-expanded="true">
                                                            <i class="ti ti-dots-vertical"></i>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item view-item-btn"
                                                                   href=""><i
                                                                        class="ti ti-file-export text-primary"></i>
                                                                    view</a></li>
                                                            <li><a class="dropdown-item edit-folder-list"
                                                                   href="" data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-edit text-success"></i>
                                                                    Rename</a></li>
                                                            <li><a class="dropdown-item delete-btn" href=""
                                                                   data-bs-toggle="modal"
                                                                   role="button"><i
                                                                        class="ti ti-trash text-danger"></i>
                                                                    Delete</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <span class="d-block text-center mb-3">
                                  <img src="{{asset('../assets/images/icons/file.png')}}" alt="" class="img-fluid">
                                </span>
                                                <p class="text-center f-w-600 mb-0">Product.docx</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xl-4 col-xxl-3">
                                        <div class="card">
                                            <div class="card-body folder-card">
                                                <div class="starreddiv favBtn">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>

                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-list"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success"></i> Rename</a>
                                                        </li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger"></i> Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="fileimage">
                                                    <img src="{{asset('../assets/images/icons/folder.png')}}" alt=""
                                                         class="img-fluid">
                                                    <p class="mb-0 f-s-16 text-center">Photoes</p>
                                                </div>
                                                <div class="d-flex justify-content-between mt-2">
                                                    <p class="text-secondary mb-0 f-w-500">25.67GB</p>
                                                    <p class="text-secondary mb-0 f-w-500 text-end">50GB</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- tab-4  -->
                    <div id="tab-4" class="tabs-content">
                        <div class="card">
                            <div class="card-header">
                                <h5>Recent Added</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-bottom-border recent-table align-middle table-hover mb-0"
                                           id="favorites-table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Name</th>
                                            <th scope="col">Total Items</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Last Modified</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/music.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Quick CV & Porthfolio</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">10</td>
                                            <td>209MB</td>
                                            <td class="text-danger f-w-500">15 march,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 star-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/pdf.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Thesis-Brain McKnight</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">15</td>
                                            <td>25MB</td>
                                            <td class="text-danger f-w-500">10 july,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 star-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div>
                                                    <img src="{{asset('../assets/images/icons/gallary.png')}}"
                                                         class="w-20 h-20" alt="">
                                                    <span class="ms-2 table-text">Campaign plan Q4-2021</span>
                                                </div>
                                            </td>
                                            <td class="text-success f-w-500">3</td>
                                            <td>103MB</td>
                                            <td class="text-danger f-w-500">2 May,2024</td>
                                            <td class="d-flex">
                                                <div class="dropdown folder-dropdown">
                                                    <a class="" role="button" data-bs-toggle="dropdown"
                                                       aria-expanded="true">
                                                        <i class="ti ti-dots-vertical"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item view-item-btn"
                                                               href=""><i
                                                                    class="ti ti-file-export text-primary me-2"></i>
                                                                view</a></li>
                                                        <li><a class="dropdown-item edit-folder-name"
                                                               href="" data-bs-toggle="modal"
                                                               role="button"><i
                                                                    class="ti ti-edit text-success me-2"></i>
                                                                Rename</a></li>
                                                        <li><a class="dropdown-item delete-btn" href=""
                                                               data-bs-toggle="modal" role="button"><i
                                                                    class="ti ti-trash text-danger me-2"></i>
                                                                Delete</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="starreddiv favBtn ms-3">
                                                    <i class="ph-bold  ph-star text-warning f-s-18 fav-icon"></i>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="seller-table-footer d-flex gap-2 justify-content-between align-items-center">
                                    <p class="text-secondary text-truncate">Showing 1 to 6 of 24 order
                                        entries</p>
                                    <ul class="pagination app-pagination">
                                        <li class="page-item bg-light-secondar disabled">
                                            <a class="page-link b-r-left">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active" aria-current="page">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item page-next">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Filemanager end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- apexcharts-->
    <script src="{{asset('backend/assets/vendor/apexcharts/apexcharts.min.js')}}"></script>

    <!--js-->
    <script src="{{asset('backend/assets/js/filemanager.js')}}"></script>

@endsection
