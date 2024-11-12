@extends('layout.master')
@section('title', 'Ticket')
@section('css')
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendor/slick/slick-theme.css')}}">

    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/datatable2/buttons.dataTables.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Ticket</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="f-s-14 f-w-500">Ticket</a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Ticket</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Ticket start -->
        <div class="row ticket-app">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card ticket-card bg-primary">
                            <div class="card-body">
                                <i class="ph-bold  ph-circle circle-bg-img"></i>
                                <div class="h-50 w-50 d-flex-center b-r-15 bg-white mb-3">
                                    <i class="ph-bold  ph-ticket f-s-25 text-primary"></i>
                                </div>
                                <p class="f-s-16">All Tickets</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="text-white">185</h3>
                                    <ul class="avatar-group">
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-danger border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-success border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-warning border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-info border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="bg-white text-dark h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="5 More">
                                            5+
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card ticket-card bg-info">
                            <div class="card-body">
                                <i class="ph-bold  ph-circle circle-bg-img"></i>
                                <div class="h-50 w-50 d-flex-center b-r-15 bg-white mb-3">
                                    <i class="ph-bold  ph-clock-countdown f-s-25 text-info"></i>
                                </div>
                                <p class="f-s-16">Pending Tickets</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="text-white">185</h3>
                                    <ul class="avatar-group">
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-danger border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-success border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-warning border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-info border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="bg-white text-dark h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="5 More">
                                            5+
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card ticket-card bg-success">
                            <div class="card-body">
                                <i class="ph-bold  ph-circle circle-bg-img"></i>
                                <div class="h-50 w-50 d-flex-center b-r-15 bg-white mb-3">
                                    <i class="ph-bold  ph-file-cloud f-s-25 text-success"></i>
                                </div>
                                <p class="f-s-16">Completed Tickets</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="text-white">185</h3>
                                    <ul class="avatar-group">
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-danger border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-success border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-warning border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-info border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="bg-white text-dark h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="5 More">
                                            5+
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card ticket-card bg-warning">
                            <div class="card-body">
                                <i class="ph-bold  ph-circle circle-bg-img"></i>
                                <div class="h-50 w-50 d-flex-center b-r-15 bg-white mb-3">
                                    <i class="ph-bold  ph-file-x f-s-25 text-warning"></i>
                                </div>
                                <p class="f-s-16">Cancelled Tickets</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <h3 class="text-white">185</h3>
                                    <ul class="avatar-group">
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-danger b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-danger border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-success b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-success border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-warning b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-warning border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="h-45 w-45 d-flex-center b-r-50 text-bg-info b-2-light position-relative"
                                            data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
                              <span
                                  class="position-absolute top-0 start-2 p-1 bg-info border border-light rounded-circle"></span>
                                            <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50 overflow-hidden">
                                        </li>
                                        <li class="bg-white text-dark h-35 w-35 d-flex-center b-r-50" data-bs-toggle="tooltip"
                                            data-bs-title="5 More">
                                            5+
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card create-ticket-card">
                    <div class="card-body">
                        <div class="col-xl-12">
                            <div class="row align-items-center">
                                <div class="col-sm-7 col-12">
                                    <div class="ticket-create">
                                        <h5 class=" mb-2 ">The Ticket Component</h5>
                                        <p class="mb-5 mt-3 text-secondary"> Provide a more detailed explanation of the issue. Describe
                                            what is happening versus what should happen. If it’s a feature request, explain the
                                            desired outcome and why it's needed.</p>
                                        <button type="button" class="btn btn-primary"
                                                id="create_ticket_key">Create Ticket</button>
                                    </div>
                                </div>
                                <div class="col-sm-5 col-12">
                                    <img src="{{asset('../assets/images/icons/ticket.png')}}" alt="" class="img-fluid w-300 d-block m-auto">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h5 class="ms-3 mb-2">Top Catagory</h5>
                <ul class="ticket-slider ">
                    <li>
                        <div class="ticket-catagory p-3">
                            <h6 class="mb-0">laptop issues</h6>
                            <span class="badge text-light-success">64</span>
                        </div>
                    </li>
                    <li>
                        <div class="ticket-catagory p-3">
                            <h6 class="mb-0">Card issues</h6>
                            <span class="badge text-light-success">52</span>
                        </div>
                    </li>
                    <li>
                        <div class="ticket-catagory p-3">
                            <h6 class="mb-0">Admin issues</h6>
                            <span class="badge text-light-success">32</span>
                        </div>
                    </li>
                    <li>
                        <div class="ticket-catagory p-3">
                            <h6 class="mb-0">laptop issues</h6>
                            <span class="badge text-light-success">20</span>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- start create ticket modal  -->
            <div class="modal fade" id="ticketModal" tabindex="-1" aria-labelledby="ticketModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5 text-white" id="ticketModalLabel">Add Ticket</h1>
                            <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="ticket-form app-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" class="form-control" placeholder="Title" id="titlename">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Client</label>
                                            <input type="text" class="form-control" placeholder="client" id="clientname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="priority" class="form-label">Priority</label>
                                            <select class="form-select" id="priority">
                                                <option selected="">Select Priority</option>
                                                <option value="Medium">Medium</option>
                                                <option value="Lower">Lower</option>
                                                <option value="High">High</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="status" class="form-label">Status</label>
                                            <select class="form-select" id="status">
                                                <option selected="">Select Status</option>
                                                <option value="open">open</option>
                                                <option value="inprogress">inprogress</option>
                                                <option value="closed">closed</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Date</label>
                                            <input type="date" class="form-control" id="datename" name="trip-start">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Due Date</label>
                                            <input type="date" class="form-control" id="duename">
                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="ticketkey">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end create ticket modal  -->

            <!-- TICKET DETAIL tabel 5 -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body px-0">
                        <div class="table-responsive app-scroll app-datatable-default">
                            <table id="ticketdatatable" class="w-100 display ticket-app-table">
                                <thead>
                                <tr>
                                    <th>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox" id="select-all1">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </th>
                                    <th>Id</th>
                                    <th>Agent</th>
                                    <th>Priority</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Due Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody id="ticket_key_body">
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 2044</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary me-2">
                                                <img src="{{asset('../assets/images/avtar//1.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Gavin Cortez
                                        </div>
                                    </td>

                                    <td> <span class="badge text-outline-warning">Medium</span></td>
                                    <td>Bug Report</td>
                                    <td><span class="badge text-outline-success">in progress</span></td>
                                    <td>1 jan 2024</td>
                                    <td>3 feb 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#" ><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 1763</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Martena Mccray
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge text-outline-danger">lower</span>
                                    </td>
                                    <td>Feature Request</td>
                                    <td><span class="badge text-outline-info">closed</span></td>
                                    <td>8 jan 2024</td>
                                    <td>10 mar 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#" ><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 7452</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info me-2">
                                                <img src="{{asset('../assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Gavin Joyce
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-success">High</span></td>
                                    <td>Performance Issue</td>
                                    <td><span class="badge text-outline-success">in progress</span></td>
                                    <td>14 jan 2024</td>
                                    <td>30 jan 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#" ><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 1023</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Gloria Little
                                        </div>

                                    </td>
                                    <td> <span class="badge text-outline-warning">Medium</span></td>
                                    <td>Security Concern</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>6 hours ago</td>
                                    <td>12 feb 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 2305</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Jena Gaines
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-success">High</span></td>
                                    <td>User Access/Permissions</td>
                                    <td><span class="badge text-outline-info">closed</span></td>
                                    <td>6 hours ago</td>
                                    <td>16 jan 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#" ><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR2058</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Jenette Caldwell
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-danger">lower</span></td>
                                    <td>System Outage or Downtime</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>20 jan 2024</td>
                                    <td>21 feb 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 1935</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Jennifer Acosta
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-warning">Medium</span></td>
                                    <td>Data Issue</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>7 June 2024</td>
                                    <td>8 july 2024</td>

                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 3056</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Jennifer Chang
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-success">High</span></td>
                                    <td>Integration Issue</td>
                                    <td><span class="badge text-outline-success">in progress</span></td>
                                    <td>10 hours ago</td>
                                    <td>7 aug 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 0358</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Michael Silva
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-warning">Medium</span></td>
                                    <td>User Interface Issue</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>14 June 2024</td>
                                    <td>16 feb 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 4590</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Michelle House
                                        </div>
                                    </td>
                                    <td><span class="badge text-outline-danger">lower</span></td>
                                    <td>General Inquiry or Request</td>
                                    <td><span class="badge text-outline-info">closed</span></td>
                                    <td>4 July 2024</td>
                                    <td>5 aug 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 6085</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Olivia Liang
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-danger">lower</span></td>
                                    <td>Technical Issues</td>
                                    <td><span class="badge text-outline-success">in progress</span></td>
                                    <td>19 August 2024</td>
                                    <td>30 sep 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 0378</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Quinn Flynn
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-success">High</span></td>
                                    <td>Enhancement Requests</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>12 Sep 2024</td>
                                    <td>13 oct 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 9065</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Prescott Bartlett
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-warning">Medium</span></td>
                                    <td>Performance and Reliability</td>
                                    <td><span class="badge text-outline-success">in progress</span></td>
                                    <td>6 hours ago</td>
                                    <td>2 apr 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#" ><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 7806</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Suki Burks
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-success">High</span></td>
                                    <td>Security and Compliance</td>
                                    <td><span class="badge text-outline-info">closed</span></td>
                                    <td>2 Sep 2024</td>
                                    <td>15 oct 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 0379</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Tatyana Fitzpatrick
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-success">High</span></td>
                                    <td>Access and Permissions</td>
                                    <td><span class="badge text-outline-info">closed</span></td>
                                    <td>19 July 2024</td>
                                    <td>20 aug 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#" ><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 0485</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Yuri Berry
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-danger">lower</span></td>
                                    <td>Service Outages</td>
                                    <td><span class="badge text-outline-success">in progress</span></td>
                                    <td>11 July 2024</td>
                                    <td>30 aug 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 7506</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar//1.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Zorita Serrano
                                        </div>
                                    </td>
                                    <td><span class="badge text-outline-danger">lower</span></td>
                                    <td>Data Integrity and Reports</td>
                                    <td><span class="badge text-outline-info">closed</span></td>
                                    <td>23 June 2024</td>
                                    <td>12 aug 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 7450</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Jonas Alexander
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-danger">lower</span></td>
                                    <td>Integration and Third-party Services</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>10 hours ago</td>
                                    <td>2 feb 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 6034</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Howard Hatfield
                                        </div>
                                    </td>
                                    <td> <span class="badge text-outline-danger">lower</span></td>
                                    <td>Improvements and Feedback</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>23 June 2024</td>
                                    <td>24 sep 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="checkbox-wrapper">
                                            <label class="check-box m-0">
                                                <input type="checkbox">
                                                <span class="checkmark outline-secondary"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>AR 0224</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark me-2">
                                                <img src="{{asset('../assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            Sakura Yamamoto
                                        </div>
                                    </td>
                                    <td><span class="badge text-outline-success">High</span></td>
                                    <td>Miscellaneous and General Inquiries</td>
                                    <td><span class="badge text-outline-primary">open</span></td>
                                    <td>10 hours ago</td>
                                    <td>10 nov 2024</td>
                                    <td>
                                        <div class="btn-group dropdown-icon-none">
                                            <button class="btn border-0 icon-btn b-r-4 dropdown-toggle active" type="button"
                                                    data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                                <i class="ti ti-dots-vertical"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="{{route('ticket_details')}}"><i
                                                            class="ti ti-eye text-primary me-2"></i> View
                                                    </a></li>
                                                <li><a class="dropdown-item" href="#"
                                                       data-bs-target="#ticketeditModal"><i class="ti ti-edit text-success me-2"></i>
                                                        Edit </a></li>
                                                <li><a class="dropdown-item delete-btn" href="#"><i
                                                            class="ti ti-trash text-danger me-2"></i> Delete </a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ticket table end -->
        </div>
        <!-- Ticket end -->
    </div>

    <!-- delete modal   -->
    <div class="modal fade" id="apiDeletModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body app-form">
                    <img src="{{asset('assets/images/icons/delete-icon.png')}}" alt="" class="img-fluid">
                    <div class="text-center">
                        <h4 class="text-danger f-w-600">Are You Sure?</h4>
                        <p class="text-secondary f-s-16">You won't be able to revert this!</p>
                    </div>

                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="confirmDelete">Yes,Delet it</button>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- edit modal  -->
    <div class="modal fade" id="ticketeditModal" tabindex="-1" aria-labelledby="ticketeditModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="ticketeditModalLabel">Edit Ticket</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ticket-form app-form">
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" placeholder="Performance Issue">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Client</label>
                                    <input type="text" class="form-control" placeholder="Michelle House">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="priority" class="form-label">Priority</label>
                                    <select class="form-select" >
                                        <option selected="">Select Priority</option>
                                        <option value="Medium">Medium</option>
                                        <option value="Lower">Lower</option>
                                        <option value="High">High</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected="">Select Status</option>
                                        <option value="open">open</option>
                                        <option value="inprogress">inprogress</option>
                                        <option value="closed">closed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Date</label>
                                    <input type="date" class="form-control" name="trip-start">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Due Date</label>
                                    <input type="date" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- slick-file -->
<script src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>

<!-- data table js-->
<script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

<!-- api js -->
<script src="{{asset('assets/js/ticket.js')}}"></script>

@endsection

