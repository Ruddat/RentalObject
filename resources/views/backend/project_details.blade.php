@extends('backend.layout.master')
@section('title', 'Product Details')
@section('css')
    <!-- glight css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/glightbox/glightbox.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Project Details</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                <span>
                                  <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                                </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">Project App</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Project Details</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Project Details start -->
        <div class="row">
            <div class="col-md-6 col-xxl-3 order-md-2 order-xxl-1">
                <!-- Project Details -->
                <div class="card">
                    <div class="card-header">
                        <h5>Project Details</h5>
                    </div>
                    <div class="card-body">
                        <table class=" project-details-table table table-borderless  align-middle mb-0">
                            <tbody>
                            <tr>
                                <td>
                                    <p class="f-w-600 mb-0">Name</p>
                                </td>
                                <td class="text-end">
                                    Ra-admin
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="f-w-600 mb-0">Manager</p>
                                </td>
                                <td class="text-end">
                                    Leonor Hill
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="f-w-600 mb-0">Start Date</p>
                                </td>
                                <td class="text-end"><span class="text-primary">10 Apr
                                                                    2024</span>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <p class="f-w-600 mb-0">End Date</p>
                                </td>
                                <td class="text-end"><span class="text-danger">20 Jul
                                                                    2024</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="pb-0">
                                    <p class="f-w-600 mb-0">Pricing</p>
                                </td>
                                <td class="text-end pb-0">
                                    <h6>$200k</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="">
                                    <p class="f-w-600 mb-0">Assigned By</p>
                                </td>
                                <td class="text-end">
                                    <ul class="avatar-group justify-content-end">
                                        <li class="text-bg-danger h-30 w-30 d-flex-center b-r-50"
                                            data-bs-toggle="tooltip"
                                            data-bs-title="Everlee Lambert">
                                            A
                                        </li>
                                        <li class="text-bg-dark h-30 w-30 d-flex-center b-r-50"
                                            data-bs-toggle="tooltip"
                                            data-bs-title="Hunter Scott">
                                            CD
                                        </li>
                                        <li class="text-bg-warning h-30 w-30 d-flex-center b-r-50"
                                            data-bs-toggle="tooltip"
                                            data-bs-title="Hunter Scott">
                                            XYZ
                                        </li>
                                        <li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50"
                                            data-bs-toggle="tooltip" data-bs-title="2 More">
                                            2+
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <p class="f-w-600 mb-0">Status</p>
                                </td>
                                <td class="text-end"><span class="badge text-light-primary">
                                                                    In
                                                                    progress</span> </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--end  Project Details -->

                <!-- Project Team -->

                <div class="card ">
                    <div class="card-header">
                        <h5 class="header-title-text">Project Team</h5>
                    </div>
                    <div class="card-body">
                        <div class="project-team-list">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary h-35 w-35 d-flex-center b-r-10 overflow-hidden">
                                    <img src="{{asset('../assets/images/avtar/07.png')}}" alt=""
                                         class="img-fluid">
                                </div>
                                <div class="flex-grow-1 ps-2">
                                    <h6 class="mb-0 fw-medium"> Bette Hagenes</h6>
                                    <p class="text-muted f-s-13 mb-0 f-w-500">Wed Developer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mt-3">
                                <div class="bg-secondary h-35 w-35 d-flex-center b-r-10 overflow-hidden">
                                    <img src="{{asset('../assets/images/avtar/13.png')}}" alt=""
                                         class="img-fluid">
                                </div>
                                <div class="flex-grow-1 ps-2">
                                    <h6 class="mb-0 fw-medium"> Fleta Walsh</h6>
                                    <p class="text-muted f-s-13 mb-0 f-w-500">Wed Designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mt-3">
                                                <span class="bg-dark h-35 w-35 d-flex-center b-r-10">
                                                  LR
                                                </span>
                                <div class="flex-grow-1 ps-2">
                                    <h6 class="mb-0 fw-medium"> Lenora</h6>
                                    <p class="text-muted f-s-13 mb-0 f-w-500">UI/UX designer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mt-3">
                                <div class="bg-warning h-35 w-35 d-flex-center b-r-10 overflow-hidden">
                                    <img src="{{asset('../assets/images/avtar/16.png')}}" alt=""
                                         class="img-fluid">
                                </div>
                                <div class="flex-grow-1 ps-2">
                                    <h6 class="mb-0 fw-medium"> Fleta Walsh </h6>
                                    <p class="text-muted f-s-13 mb-0 f-w-500">React Developer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mt-3">
                                              <span class="bg-danger h-35 w-35 d-flex-center b-r-10">
                                                EM
                                              </span>
                                <div class="flex-grow-1 ps-2">
                                    <h6 class="mb-0 fw-medium"> Emery McKenzie</h6>
                                    <p class="text-muted f-s-13 mb-0 f-w-500">Wed Developer</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center  mt-3">
                                <div class="bg-dark h-35 w-35 d-flex-center b-r-10 overflow-hidden">
                                    <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                         class="img-fluid">
                                </div>
                                <div class="flex-grow-1 ps-2">
                                    <h6 class="mb-0 fw-medium"> Bette Hagenes</h6>
                                    <p class="text-muted f-s-13 mb-0 f-w-500">Wed Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end Project Team -->

            </div>
            <div class="col-xxl-6 order-xxl-2">
                <!-- project activity -->
                <div class="card">
                    <div class="card-header">
                        <h5> Project Activity</h5>
                    </div>
                    <div class="card-body">
                        <ul class="app-timeline-box">
                            <li class="timeline-section">
                                <div class="timeline-icon">
                                             <span class="text-light-primary h-35 w-35 d-flex-center b-r-50">
                                             W
                                             </span>
                                </div>
                                <div class="timeline-content pt-0 ">
                                    <div class="d-flex f-s-16">
                                        <p class="text-primary f-s-16 mb-0">Wilson</p>
                                        <span class="text-secondary ms-2">added reacton
                                                 in <span
                                                class="badge text-outline-primary me-2">#
                                                     product website</span>post</span>

                                    </div>
                                    <p class="">
                                        09.00AM
                                    </p>
                                </div>
                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                                             <span class="text-light-info h-35 w-35 d-flex-center b-r-50">
                                                 <i class="ph-duotone  ph-image f-s-18"></i>
                                             </span>
                                </div>
                                <div class="timeline-content pt-0 ">
                                    <p class=" f-s-16 text-info mb-0">2 image files and
                                        2 videos uploaded</p>
                                    <p class="text-secondary">
                                        updated at 12:45 pm
                                    </p>
                                    <div
                                        class="app-timeline-info-text timeline-border-box me-2 ms-0 mt-3 p-3">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <a href="{{asset('../assets/images/draggable/02.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                                                    <img src="{{asset('../assets/images/draggable/02.jpg')}}" class="w-100 rounded" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="{{asset('../assets/images/draggable/04.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                                                    <img src="{{asset('../assets/images/draggable/04.jpg')}}" class="w-100 rounded" alt="">
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="{{asset('../assets/images/draggable/01.jpg')}}" class="glightbox img-hover-zoom" data-glightbox="type: image; zoomable: true;">
                                                    <img src="{{asset('../assets/images/draggable/01.jpg')}}" class="w-100 rounded" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                                             <span class="text-light-success  h-35 w-35 d-flex-center b-r-50">
                                               D
                                             </span>
                                </div>
                                <div class="timeline-content pt-0 ">
                                    <div class="d-flex f-s-16">
                                        <p class="text-success f-s-16 mb-0">Dane Wiza
                                        </p> <span class="text-secondary ms-2">added
                                                     reacton in <span
                                                class="badge text-outline-success me-2">#
                                                         product website</span>post</span>

                                    </div>
                                    <p class="">
                                        09.00AM
                                    </p>
                                    <div
                                        class="timeline-border-box me-2 ms-0 mt-3">
                                        <h6 class="mb-0">Need a feature</h6>
                                        <p class="mb-4 text-secondary">Hello everyone,
                                            question on email marketing. What are some
                                            tips/tricks to avoid going to promotion
                                            spam/ junk for automated marketing emails
                                            going to promotion spam/ junk for automated
                                            marketing emails</p>
                                        <span
                                            class="badge text-outline-success me-2 timeline-badge">#🙂❤
                                                     10Reactions</span>
                                        <span class="badge text-outline-success me-2">#✨
                                                     12Replies</span>
                                    </div>
                                </div>


                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                                             <span class="text-light-danger h-35 w-35 d-flex-center b-r-50">
                                              B
                                             </span>
                                </div>
                                <div class="timeline-content pt-0">
                                    <div class="d-flex f-s-16">
                                        <p class="text-danger f-s-16 mb-0">Betty Mante
                                        </p> <span class="text-secondary ms-2">Request
                                                     joined<span
                                                class="badge text-outline-danger me-2 ms-2">#reaserchteam</span>groups</span>

                                    </div>
                                    <p class="mb-4">
                                        4 days ago
                                    </p>
                                    <button type="button"
                                            class="btn btn-danger">Accept</button>
                                    <button type="button"
                                            class="btn btn-outline-danger">Rejects</button>
                                </div>


                            </li>
                            <li class="timeline-section">
                                <div class="timeline-icon">
                                             <span class="text-light-primary h-35 w-35 d-flex-center b-r-50">
                                             P
                                             </span>
                                </div>
                                <div class="timeline-content pt-0">
                                    <div class="d-flex f-s-16">
                                        <p class="text-primary f-s-16 mb-0">Pinkie</p>
                                        <span class="text-secondary ms-2">uploaded<span
                                                class="text-dark f-w-600 me-2 ms-2">
                                                         2</span>attachment<span
                                                class="badge text-outline-primary me-2 ms-2">#reaserchteam</span></span>

                                    </div>
                                    <p class="mb-4">
                                        4 days ago
                                    </p>
                                    <button type="button"
                                            class="btn btn-primary">Accept</button>
                                    <button type="button"
                                            class="btn btn-outline-primary">Rejects</button>
                                </div>


                            </li>
                        </ul>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex">
                            <div class="flex-grow-1">
                                <div class="input-group">
                                                    <span class="input-group-text ms-2 me-2 b-r-10 ">
                                                        <a data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Emoji" role="button">
                                                          <i class="ti ti-mood-smile"></i>
                                                        </a>
                                                      </span>
                                    <input type="text" class="form-control b-r-6"
                                           placeholder="Type a message" aria-label="Recipient's username">
                                    <button class="btn btn-sm btn-primary ms-2 me-2 b-r-4"
                                            type="button"><i class="ti ti-send"></i> Send</button>
                                </div>
                            </div>
                            <div class="ms-2 d-none d-sm-block">
                                <a class="text-light-secondary h-35 w-35 d-flex-center b-r-10 ms-1"
                                   role="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                   data-bs-original-title="Microphone">
                                    <i class="ti ti-microphone"></i>
                                </a>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="text-light-secondary h-35 w-35 d-flex-center b-r-10 ms-1"
                                   role="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                   data-bs-original-title="Camera">
                                    <i class="ti ti-camera-plus"></i>
                                </a>
                            </div>
                            <div class="d-none d-sm-block">
                                <a class="text-light-secondary h-35 w-35 d-flex-center b-r-10 ms-1"
                                   role="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                   data-bs-original-title="Paperclip">
                                    <i class="ti ti-paperclip"></i>
                                </a>
                            </div>
                            <div>
                                <div class="btn-group dropdown-icon-none d-sm-none">
                                    <a class="h-35 w-35 d-flex-center ms-1" role="button"
                                       data-bs-toggle="dropdown" data-bs-auto-close="true"
                                       aria-expanded="false">
                                        <i class="ti ti-dots-vertical"></i>
                                    </a>
                                    <ul class="dropdown-menu" data-popper-placement="bottom-start">
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="ti ti-microphone"></i> <span
                                                    class="f-s-13">Microphone</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"> <i
                                                    class="ti ti-camera-plus"></i> <span
                                                    class="f-s-13">camera</span></a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i
                                                    class="ti ti-paperclip"></i> <span
                                                    class="f-s-13">paperclip</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end project activity -->
            </div>
            <div class="col-md-6 col-xxl-3 order-md-1 order-xxl-3">
                <!-- About project -->
                <div class="card">
                    <div class="card-header">
                        <h5>About Project</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <h6>Project Description</h6>
                            <p class="text-muted">An admin panel or a control panel is a system that
                                enables administrators
                                and other website workers to conduct various tasks like monitoring,
                                maintaining, and controlling certain business processes. An admin
                                dashboard is one of the core components of a control panel.</p>
                        </div>
                        <div class="mb-3">
                            <h6>Task Information</h6>
                            <p class="text-muted">
                                The success of a project relies heavily on effective project management, which involves the careful planning, organizing, and controlling of resources to ensure that the project objectives are met. This includes defining the project scope, setting realistic timelines and budgets.
                            </p>
                        </div>
                        <div class="mb-3">
                            <h6>Background information</h6>
                            <p class="text-muted"> A project is a planned endeavor that aims to achieve a specific goal within a defined timeframe. It involves a series of tasks and activities that are coordinated and executed by a team of individuals. Projects can vary in size, complexity, and scope, ranging from small-scale initiatives to large-scale undertakings that span across multiple departments or organizations.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- about project end  -->
                <!-- Project Documents -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="header-title-text">Data Folder & Files</h5>
                        <div class="data-list-box mt-3">
                            <div class="filebox">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute start-0">
                                        <img src="{{asset('../assets/images/icons/file.png')}}" class="w-35 h-35" alt="">
                                    </div>
                                    <div class="flex-grow-1 mg-s-40">
                                        <h6 class="mb-0">Admin Work</h6>
                                        <p class="text-secondary mb-0">18 Files</p>
                                    </div>
                                    <p class="file-data text-secondary f-w-500 mb-0">32GB</p>
                                </div>
                            </div>
                            <div class="filebox">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute start-0">
                                        <img src="{{asset('../assets/images/icons/folder.png')}}" class="w-35 h-35" alt="">
                                    </div>
                                    <div class="flex-grow-1 mg-s-40">
                                        <h6 class="mb-0">React Data</h6>
                                        <p class="text-secondary mb-0">18 Files</p>
                                    </div>
                                    <p class="file-data text-secondary f-w-500 mb-0">32GB</p>
                                </div>
                            </div>
                            <div class="filebox">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute start-0">
                                        <img src="{{asset('../assets/images/icons/file.png')}}" class="w-35 h-35" alt="">
                                    </div>
                                    <div class="flex-grow-1 mg-s-40">
                                        <h6 class="mb-0">Project Details</h6>
                                        <p class="text-secondary mb-0">18 Files</p>
                                    </div>
                                    <p class="file-data text-secondary f-w-500 mb-0">32GB</p>
                                </div>
                            </div>
                            <div class="filebox">
                                <div class="d-flex align-items-center position-relative">
                                    <div class="position-absolute start-0">
                                        <img src="{{asset('../assets/images/icons/zip.png')}}" class="w-35 h-35" alt="">
                                    </div>
                                    <div class="flex-grow-1 mg-s-40">
                                        <h6 class="mb-0">Project Reporting</h6>
                                        <p class="text-secondary mb-0">18 Files</p>
                                    </div>
                                    <p class="file-data text-secondary f-w-500 mb-0">32GB</p>
                                </div>
                            </div>
                            <div>
                                <a href="{{route('file_manager')}}" target="_blank" role="button" class="btn btn-primary w-100">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end Project Documents -->
            </div>
        </div>
        <!-- Project Details end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- Glight js -->
    <script src="{{asset('backend/assets/vendor/glightbox/glightbox.min.js')}}"></script>

    <!-- js -->
    <script src="{{asset('backend/assets/js/project_details.js')}}"></script>
@endsection
