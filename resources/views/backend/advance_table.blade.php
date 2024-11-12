@extends('layout.master')
@section('title', 'Advance Table')
@section('css')
    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/datatable/jquery.dataTables.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Advance Table</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-table f-s-16"></i>  Table
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Advance Table</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Advance Table start -->
        <div class="row advance-table-section">
            <!-- drag and drop table start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 >Drag And Drop Table</h5>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive app-scroll">
                            <table class="table table-bottom-border advance-drag-drop-table table-box-hover align-middle mb-0">
                                <thead>
                                <tr>
                                    <th>
                                        <i class="ti ti-arrows-move fs-4 text-secondary"></i>
                                    </th>
                                    <th>Employee Name</th>
                                    <th>Position</th>
                                    <th>Status</th>
                                    <th>Email</th>
                                    <th>id</th>
                                    <th>salary</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                                    <td>Alison Mused</td>
                                    <td class="f-w-600">Accountant</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>
                                    <td>alison@gmail.com</td>
                                    <td class="f-w-500 text-primary">#167</td>
                                    <td class="f-w-500 text-warning">$2000</td>
                                    <td>december 1,2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                                    <td>Amelia Commishun</td>
                                    <td class="f-w-600">Junior Technical Author</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>
                                    <td>amelia@gmail.com</td>
                                    <td class="f-w-500 text-primary">#289</td>
                                    <td class="f-w-500 text-warning">$1200</td>
                                    <td>december 1,2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                                    <td>Molly Story</td>
                                    <td class="f-w-600">Software Engineer</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>
                                    <td>molly@gmail.com</td>
                                    <td class="f-w-500 text-primary">#138</td>
                                    <td class="f-w-500 text-warning">$4500</td>
                                    <td>december 1,2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                                    <td>Diana Book</td>
                                    <td class="f-w-600">Integration Specialist</td>
                                    <td>
                                        <span class="badge text-outline-danger">lower</span>
                                    </td>
                                    <td>diana@gmail.com</td>
                                    <td class="f-w-500 text-primary">#280</td>
                                    <td class="f-w-500 text-warning">$5000</td>
                                    <td>december 1,2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                                    <td>Evan Scope</td>
                                    <td class="f-w-600">Sales Assistant</td>
                                    <td>
                                        <span class="badge text-outline-success">High</span>
                                    </td>
                                    <td>evan@gmail.com</td>
                                    <td class="f-w-500 text-primary">#165</td>
                                    <td class="f-w-500 text-warning">$2560</td>
                                    <td>december 1,2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                                    <td>Julia Sik</td>
                                    <td class="f-w-600">Accountant</td>
                                    <td>
                                        <span class="badge text-outline-warning">Medium</span>
                                    </td>
                                    <td>Julia@gmail.com</td>
                                    <td class="f-w-500 text-primary">#245</td>
                                    <td class="f-w-500 text-warning">$2400</td>
                                    <td>december 1,2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                <tr draggable="true" ondragstart="dragit(event)" ondragover="dragover(event)">
                                    <td><i class="ti ti-arrows-move fs-4 text-secondary"></i></td>
                                    <td>Kylie Down</td>
                                    <td class="f-w-600">Chief Operating Officer</td>
                                    <td>
                                        <span class="badge text-outline-danger">lower</span>
                                    </td>
                                    <td>kylie@gmail.com</td>
                                    <td class="f-w-500 text-primary">#167</td>
                                    <td class="f-w-500 text-warning">$1800</td>
                                    <td>december 1,2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <!-- drag and drop table end -->

            <!-- Projects Table start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body ps-0 pe-0">
                        <div class="table-responsive app-scroll app-datatable-default project-table">
                            <table id="projectTable" class="display table-bottom-border app-data-table table-box-hover">
                                <thead>
                                <tr>
                                    <th>
                                        <label class="check-box">
                                            <input type="checkbox" id="select-all">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </th>
                                    <th>Name</th>
                                    <th>Leader</th>
                                    <th>Status</th>
                                    <th>Client</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                                <img src="{{asset('assets/images/icons/logo4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <h6 class="f-s-15 mb-0">React</h6>
                                                <p class="text-secondary f-s-13 mb-0">23 Jun 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark f-w-500">Keith</td>
                                    <td>
                                        <span class="badge bg-primary">New</span>
                                    </td>
                                    <td>James</td>
                                    <td class="text-success f-w-500">Dec 07, 2024</td>
                                    <td class="text-danger f-w-500">Dec 26, 2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal"
                                                data-bs-target="#editCardModal">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                                <img src="{{asset('assets/images/icons/logo11.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <h6 class="f-s-15 mb-0">Node js</h6>
                                                <p class="text-secondary f-s-13 mb-0">2 apr 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark f-w-500">Merline</td>
                                    <td>
                                        <span class="badge bg-success">Completed</span>
                                    </td>
                                    <td>Thomas</td>
                                    <td class="text-success f-w-500">Jul 27, 2024</td>
                                    <td class="text-danger f-w-500">Jan 06, 2025</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal"
                                                data-bs-target="#editCardModal">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                                <img src="{{asset('assets/images/icons/logo1.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <h6 class="f-s-15 mb-0">Html</h6>
                                                <p class="text-secondary f-s-13 mb-0">22 Jun 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark f-w-500">K Fred</td>
                                    <td>
                                        <span class="badge bg-primary">New</span>
                                    </td>
                                    <td>Edward</td>
                                    <td class="text-success f-w-500">Aug 21, 2024</td>
                                    <td class="text-danger f-w-500">Apr 04, 2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal"
                                                data-bs-target="#editCardModal">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                                <img src="{{asset('assets/images/icons/logo2.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <h6 class="f-s-15 mb-0">tailwind </h6>
                                                <p class="text-secondary f-s-13 mb-0">23 Oct 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark f-w-500">Genevra</td>
                                    <td>
                                        <span class="badge bg-danger">Pending</span>
                                    </td>
                                    <td>John</td>
                                    <td class="text-success f-w-500">Nov 30, 2024</td>
                                    <td class="text-danger f-w-500">Dec 10, 2025</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal"
                                                data-bs-target="#editCardModal">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                                <img src="{{asset('assets/images/icons/logo5.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <h6 class="f-s-15 mb-0">Vue Js</h6>
                                                <p class="text-secondary f-s-13 mb-0">Dec 01, 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark f-w-500">Murazik</td>
                                    <td>
                                        <span class="badge bg-warning">Inprogress</span>
                                    </td>
                                    <td>Daniel</td>
                                    <td class="text-success f-w-500">Dec 01, 2024</td>
                                    <td class="text-danger f-w-500">Mar 20, 2025</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal"
                                                data-bs-target="#editCardModal">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                                <img src="{{asset('assets/images/icons/logo14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <h6 class="f-s-15 mb-0">python</h6>
                                                <p class="text-secondary f-s-13 mb-0">Feb 28, 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark f-w-500">Fleta Walsh</td>
                                    <td>
                                        <span class="badge bg-warning">Inprogress</span>
                                    </td>
                                    <td>Michael</td>
                                    <td class="text-success f-w-500">Jul 24, 2024</td>
                                    <td class="text-danger f-w-500">Feb 04, 2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal"
                                                data-bs-target="#editCardModal">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label class="check-box">
                                            <input type="checkbox">
                                            <span class="checkmark outline-secondary ms-2"></span>
                                        </label>
                                    </td>
                                    <td>
                                        <div class="d-flex justify-content-left align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden me-2">
                                                <img src="{{asset('assets/images/icons/logo13.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div>
                                                <h6 class="f-s-15 mb-0">XD</h6>
                                                <p class="text-secondary f-s-13 mb-0">Jan 19, 2024</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-dark f-w-500">Bette Hagenes</td>
                                    <td>
                                        <span class="badge bg-success">New</span>
                                    </td>
                                    <td>Kevin</td>
                                    <td class="text-success f-w-500">Feb 29, 2024</td>
                                    <td class="text-danger f-w-500">Mar 12, 2024</td>
                                    <td>
                                        <button type="button" class="btn btn-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                        <button type="button" class="btn btn-success icon-btn b-r-4" data-bs-toggle="modal"
                                                data-bs-target="#editCardModal">
                                            <i class="ti ti-edit"></i>
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Projects Table end -->

            <!-- delete-modal start  -->
            <div class="modal fade" id="apiDeleteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
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
            <!-- delete-modal-end-->

            <!-- edit modal-1 start -->
            <div class="modal fade" id="editCardModal" tabindex="-1" aria-labelledby="editCardModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5 text-white" id="editCardModalLabel">Edit Advance Table</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="app-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input type="text" class="form-control" placeholder="Performance Issue">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Leader</label>
                                            <input type="text" class="form-control" placeholder="Michelle House">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label  class="form-label">Client</label>
                                            <input type="text" class="form-control" placeholder="james">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
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
                                            <label class="form-label">Start Date</label>
                                            <input type="date" class="form-control" name="trip-start">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">End Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-light-primary"  data-bs-dismiss="modal">Save changes</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- edit model end  -->

            <!-- edit modal-2 start -->
            <div class="modal fade" id="editCard2Modal" tabindex="-1" aria-labelledby="editCard2ModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h1 class="modal-title fs-5 text-white" id="editCard2ModalLabel">Edit Advance Table</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="ticket-form">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Employee Name</label>
                                            <input type="text" class="form-control" placeholder="Performance Issue">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3">
                                            <label class="form-label">Position</label>
                                            <input type="text" class="form-control" placeholder="Michelle House">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label  class="form-label">Email</label>
                                            <input type="text" class="form-control" placeholder="alison@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Status</label>
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
                                            <label class="form-label">salary</label>
                                            <input type="text" class="form-control" placeholder="$2000">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">End Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-light-primary"  data-bs-dismiss="modal">Save changes</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- edit model end  -->

        </div>
        <!-- Advance Table end -->
    </div>




@endsection


@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!-- datatable js-->
    <script src="{{asset('assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

    <!-- script js -->
    <script src="{{asset('assets/js/advance_table.js')}}"></script>

@endsection
