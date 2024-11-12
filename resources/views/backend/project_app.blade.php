@extends('backend.layout.master')
@section('title', 'Project App')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Projects</h4>
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
                        <a href="#" class="f-s-14 f-w-500">Projects</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Projects start -->
        <div class="row">
            <div class="col-12">


                <div class="tab-wrapper mb-3">
                    <ul class="tabs">
                        <li class="tab-link active" data-tab="1">All Project</li>
                        <li class="tab-link" data-tab="2">Designing Project</li>
                        <li class="tab-link" data-tab="3">Development Project</li>
                        <li class="ms-auto">
                            <div class="text-end">
                                <button class="btn btn-primary w-45 h-45 icon-btn b-r-10 m-2" data-bs-toggle="modal" data-bs-target="#projectCard"><i class="ti ti-plus f-s-18"></i></button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="content-wrapper" id="card-container">
                    <div id="tab-1" class="tabs-content active">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect" id="card1">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo1.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Web Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Admin</div>
                                            </a>

                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14">Start Date : <span class="text-success">2024-09-24 </span></h6>
                                                <h6 class="text-dark f-s-14">End Date : <span class="text-danger">2024-12-05</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$10k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-primary">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 50%"> 50% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat f-s-18"></i> 20 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-30 w-30 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-30 w-30 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-30 w-30 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/2.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-30 w-30 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/3.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        5+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo2.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Prototyping</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-02-03 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-04-05</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$280</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-success">Completed</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 100%"> 100% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 10 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        5+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Dashboard</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-10-10 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-02-16</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$100k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-secondary">New</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-danger"> 0% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 25 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        10+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Web Development</h6>
                                                <div class="text-muted f-s-14 f-w-500">Weather Application</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-06-16 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-01-01</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$400k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-success">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 40%"> 40% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 34 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        10+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo5.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Web Design</h6>
                                                <div class="text-muted f-s-14 f-w-500">Application Designing</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-06-16 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-01-01</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$200k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-primary">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 50%"> 50% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 15 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        10+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo6.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600">Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Logo Designing</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-07-16 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-09-26</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$400</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-success">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 75%"> 75% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 5 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        2+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-2" class="tabs-content">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo1.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Web Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Admin</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-09-24 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-12-05</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$10k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-primary">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 50%"> 50% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 20 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/2.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/3.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        5+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Dashboard</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-10-10 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-02-16</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$100k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-secondary">New</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-danger"> 0% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 25 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        10+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo6.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600">Designing</h6>
                                                <div class="text-muted f-s-14 f-w-500">Logo Designing</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-07-16 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-09-26</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$400</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-success">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 75%"> 75% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 5 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        2+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="tab-3" class="tabs-content">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Web Development</h6>
                                                <div class="text-muted f-s-14 f-w-500">Weather Application</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-06-16 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-01-01</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$400k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-success">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 90%"> 90% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 34 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        10+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 project-card">
                                <div class="card hover-effect">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center">
                                            <div class="h-40 w-40 d-flex-center b-r-50 overflow-hidden">
                                                <img src="{{asset('../assets/images/icons/logo5.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <a href="{{route('project_details')}}" target="_blank" class="flex-grow-1 ps-2">
                                                <h6 class="m-0 text-dark f-w-600"> Web Design</h6>
                                                <div class="text-muted f-s-14 f-w-500">Application Designing</div>
                                            </a>
                                            <div class="dropdown">
                                                <button class="bg-none border-0" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical text-dark"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="ti ti-edit text-success"></i> Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item delete-button" href="#">
                                                            <i class="ti ti-trash text-danger"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex">
                                            <div>
                                                <h6 class="text-dark f-s-14 f-w-500">Start Date : <span class="text-success">2024-06-16 </span></h6>
                                                <h6 class="text-dark f-s-14 f-w-500">End Date : <span class="text-danger">2024-01-01</span></h6>
                                            </div>
                                            <div class="flex-grow-1 text-end">
                                                <p class="f-w-500 text-secondary">Pricing </p>
                                                <h6 class="f-w-600">$200k</h6>
                                            </div>
                                        </div>
                                        <p class="text-muted f-s-14 text-secondary txt-ellipsis-2">I am a keen, hardworking, reliable and
                                            excellent timekeeper. I am a bright and receptive person</p>
                                        <div class="text-end mb-2">
                                            <span class="badge text-light-primary">Progress</span>
                                        </div>
                                        <div class="progress w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0"
                                             aria-valuemax="100">
                                            <div class="progress-bar bg-primary" style="width: 50%"> 50% </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row">
                                            <div class="col-6">
                                                <span class="text-dark f-w-600"><i class="ti ti-brand-wechat"></i> 15 Members</span>
                                            </div>
                                            <div class="col-6">

                                                <ul class="avatar-group float-end breadcrumb-start ">
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/4.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/1.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="h-25 w-25 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                                        data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                                                        <img src="{{asset('../assets/images/avtar/5.png')}}" alt=""
                                                             class="img-fluid b-r-50 overflow-hidden">
                                                    </li>
                                                    <li class="text-bg-primary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                                        data-bs-title="5 More">
                                                        10+
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Projects end -->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="projectCard" tabindex="-1" aria-labelledby="projectCardLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="projectCardLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="app-form">
                        <div class="mb-3">
                            <label for="pName" class="form-label">Project Name</label>
                            <input type="text" class="form-control" placeholder="Designing" id="pName">
                        </div>
                        <div class="mb-3">
                            <label class="form-label f-s-16">Image</label>
                            <input type="file" class="form-control file_upload" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startDate">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">End Date</label>
                            <input type="date" class="form-control" id="endDate">
                        </div>
                        <div class="mb-3">
                            <label for="pricing" class="form-label">pricing</label>
                            <input type="text" class="form-control" placeholder="$10k" id="pricing">
                        </div>
                        <div class="mb-3">
                            <label for="projectDescription" class="form-label">Project Description</label>
                            <textarea class="form-control" rows="5" cols="5" placeholder="Enter Description" id="projectDescription"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="addCard">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- js -->
<script src="{{asset('backend/assets/js/project_app.js')}}"></script>
@endsection


