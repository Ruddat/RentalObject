@extends('backend.layout.master')
@section('title', 'List Table')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fontawesome/css/all.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">List Table</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-table f-s-16"></i> Table
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">List Table</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Breadcrumb end -->

        <div class="row">
            <!-- List Js Table start -->
            <div class="col-xxl-8">
                <div class="card equal-card ">
                    <div class="card-header">
                        <h5>Add, Edit & Remove table</h5>
                    </div>
                    <div class="card-body p-0">
                        <div id="myTable">
                            <div class="list-table-header d-flex justify-content-sm-between mb-3">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">Add</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                     aria-hidden="true">
                                    <form id="add_employee_form">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee
                                                    </h1>
                                                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="employee mb-3">
                                                        <input type="hidden" id="id-field">
                                                        <label class="form-label">Employee :</label>
                                                        <input class="form-control" type="text" id="employee-field" placeholder="employee"
                                                               required>
                                                    </div>

                                                    <div class="email mb-3">
                                                        <label class="form-label">Email :</label>
                                                        <input class="form-control" type="email" id="email-field" placeholder="email" required>
                                                    </div>

                                                    <div class="contact mb-3">
                                                        <label class="form-label">contact :</label>
                                                        <input class="form-control" type="text" id="contact-field" placeholder="contact"
                                                               required>
                                                    </div>

                                                    <div class="date mb-3">
                                                        <label class="form-label">date :</label>
                                                        <input class="form-control" type="date" id="date-field" required>
                                                    </div>

                                                    <div class="status mb-3">
                                                        <label class="form-label">status :</label>
                                                        <select class="form-select" id="status-field" aria-label="Default select example">
                                                            <option value="">Status</option>
                                                            <option value="success">Active</option>
                                                            <option value="danger">Block</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer add">
                                                    <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
                                                    <input type="submit" class="btn btn-primary" id="add-btn" value="Add">
                                                    <button class="btn btn-success" id="edit-btn">Edit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <form class="app-form app-icon-form " action="#">
                                    <div class="position-relative ">
                                        <input type="search" class="form-control search" placeholder="Search..."
                                               aria-label="Search">
                                        <i class="ti ti-search text-dark"></i>
                                    </div>
                                </form>
                            </div>

                            <div class="overflow-auto app-scroll">
                                <table class="table table-bottom-border  list-table-data align-middle mb-0">
                                    <thead>
                                    <tr class="app-sort">
                                        <th>
                                            <input type="checkbox" class="form-check-input  checkAll" name="checkAll">
                                        </th>
                                        <th class="d-none">ID</th>
                                        <th class="sort" data-sort="employee" scope="col">Employee</th>
                                        <th class="sort" data-sort="email" scope="col">Email</th>
                                        <th class="sort" data-sort="contact" scope="col">contact</th>
                                        <th class="sort" data-sort="date" scope="col">Joining Date</th>
                                        <th class="sort" data-sort="status" scope="col">Status</th>
                                        <th class="sort" data-sort="action" scope="col">Edit</th>
                                        <th class="sort" data-sort="action" scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list" id="t-data">
                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item"></th>
                                        <td class="id d-none">1</td>
                                        <td class="employee">Allie Grater</td>
                                        <td class="email">graterallie@gmail.com</td>
                                        <td class="contact">8054478398</td>
                                        <td class="date">2021-03-19</td>
                                        <td class="status">
                                            <span class="badge bg-danger-subtle text-danger text-uppercase">Block</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item" value="2"></th>
                                        <td class="id d-none">2</td>
                                        <td class="employee">Rhoda Report</td>
                                        <td class="email">reportrhoda@gmail.com</td>
                                        <td class="contact">7765392112</td>
                                        <td class="date">2020-01-19</td>
                                        <td class="status"><span
                                                class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item" value="3"></th>
                                        <td class="id d-none">3</td>
                                        <td class="employee">Rose Bush</td>
                                        <td class="email">rose@gmail.com</td>
                                        <td class="contact">9674903425</td>
                                        <td class="date">2020-10-26</td>
                                        <td class="status"><span
                                                class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item" value="4"></th>
                                        <td class="id d-none">4</td>
                                        <td class="employee">Dave Allippa</td>
                                        <td class="email">dave@gmail.com</td>
                                        <td class="contact">6490537289</td>
                                        <td class="date">2020-06-19</td>
                                        <td class="status">
                                            <span class="badge bg-danger-subtle text-danger text-uppercase">Block</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item" value="5"></th>
                                        <td class="id d-none">5</td>
                                        <td class="employee">Emma Grate</td>
                                        <td class="email">emma@gmail.com</td>
                                        <td class="contact">9123456031</td>
                                        <td class="date">2022-03-20</td>
                                        <td class="status"><span
                                                class="badge bg-danger-subtle text-danger text-uppercase">Block</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item" value="6"></th>
                                        <td class="id d-none">6</td>
                                        <td class="employee">Mal Nurrisht</td>
                                        <td class="email">Nurrishtmal@gmail.com</td>
                                        <td class="contact">6490267839</td>
                                        <td class="date">2019-12-29</td>
                                        <td class="status"><span
                                                class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item" value="7"></th>
                                        <td class="id d-none">7</td>
                                        <td class="employee">Bess Twishes</td>
                                        <td class="email">twishes@gmail.com</td>
                                        <td class="contact">8702643868</td>
                                        <td class="date">2020-5-16</td>
                                        <td class="status"><span
                                                class="badge bg-danger-subtle text-danger text-uppercase">Block</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th scope="row"><input class="form-check-input mt-0 ms-2" type="checkbox"  name="item" value="8"></th>
                                        <td class="id d-none">8</td>
                                        <td class="employee">C. Yasoon</td>
                                        <td class="email">yasoon@gmail.com</td>
                                        <td class="contact">9345067125</td>
                                        <td class="date">2022-02-16</td>
                                        <td class="status"><span
                                                class="badge bg-success-subtle text-success text-uppercase">Active</span>
                                        </td>
                                        <td class="edit"><button class="btn edit-item-btn btn-sm btn-success"
                                                                 data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                                        </td>
                                        <td class="remove"><button class="btn remove-item-btn btn-sm btn-danger">Remove</button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="list-pagination">
                                <ul class="pagination"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- List Js Table end -->

            <!-- List table start -->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>List table</h5>
                    </div>
                    <div class="card-body">
                        <div id="users">
                            <div class="row">
                                <div class="col-12 col-sm">
                                    <div class="mb-3">
                                        <input type="search" class="form-control search" placeholder="Search..."
                                               aria-label="Search">
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto">
                                    <div class=" mb-3">
                                        <button class="sort btn btn-sm btn-secondary" data-sort="name">
                                            Sort by name
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="list list-tables">
                                <div data-id="1" class="d-flex align-items-center justify-content-between mt-2">
                                    <input class="form-check-input mt-0" type="checkbox" name="item">
                                    <div class="link name ps-3 flex-grow-1 pe-2">
                                        <p class="mb-0">Olive Yew</p>
                                        <h6 class="fw-bold" data-timestamp="12345">1986</h6>
                                    </div>
                                    <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                        <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div data-id="2" class="d-flex align-items-center justify-content-between mt-2">
                                    <input class="form-check-input mt-0" type="checkbox" name="item">
                                    <div class="link name ps-3 flex-grow-1 pe-2">
                                        <p class="mb-0">Olive Yew</p>
                                        <h6 class="fw-bold" data-timestamp="12345">1957</h6>
                                    </div>
                                    <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                        <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div data-id="3" class="d-flex align-items-center justify-content-between mt-2">
                                    <input class="form-check-input mt-0" type="checkbox" name="item">
                                    <div class="link name ps-3 flex-grow-1 pe-2">
                                        <p class="mb-0">Allie Grater</p>
                                        <h6 class="fw-bold" data-timestamp="12345">1860</h6>
                                    </div>
                                    <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                        <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div data-id="4" class="d-flex align-items-center justify-content-between mt-2">
                                    <input class="form-check-input mt-0" type="checkbox" name="item">
                                    <div class="link name ps-3 flex-grow-1 pe-2">
                                        <p class="mb-0">Rita Book</p>
                                        <h6 class="fw-bold" data-timestamp="12345">1976</h6>
                                    </div>
                                    <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                        <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div data-id="5" class="d-flex align-items-center justify-content-between mt-2">
                                    <input class="form-check-input mt-0" type="checkbox" name="item">
                                    <div class="link name ps-3 flex-grow-1 pe-2">
                                        <p class="mb-0">Rose Bush</p>
                                        <h6 class="fw-bold" data-timestamp="12345">1960</h6>
                                    </div>
                                    <div class="h-25 w-25 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                        <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- List Table end -->

            <!-- Existing list Table start -->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Existing list</h5>
                    </div>
                    <div class="card-body">
                        <div id="sidelist">
                            <div class="row">
                                <div class="col-md">
                                    <div class="mb-3">
                                        <input type="search" class="form-control search" placeholder="Search..."
                                               aria-label="Search">
                                    </div>
                                </div>
                                <div class="col-md-auto">
                                    <div class="float-end mb-3">
                                        <button class="sort btn btn-sm btn-secondary" data-sort="side">
                                            Sort by name
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="list existing-list">
                                <div data-id="1" class="d-flex justify-content-between">
                                    <div>
                            <span class="position-relative text-light-info h-40 w-40 d-flex-center b-r-50">
                              <i class="fa-solid fa-user"></i>
                              <span
                                  class="position-absolute end-0 top-0 p-1 bg-info border border-light rounded-circle"></span>
                            </span>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h6 class="link side">
                                            Olive Yew
                                        </h6>
                                        <p>
                                            This is the content of the email.</p>
                                    </div>
                                    <div class="text-muted">28 min</div>
                                </div>


                                <div data-id="2" class="d-flex justify-content-between">
                                    <div>
                            <span class="position-relative text-light-success h-40 w-40 d-flex-center b-r-50">
                              <i class="fa-solid fa-user"></i>
                              <span
                                  class="position-absolute end-0 top-0 p-1 bg-success border border-light rounded-circle"></span>
                            </span>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h6 class="link side">
                                            Bea Mine
                                        </h6>
                                        <p>It enables users to easily.</p>
                                    </div>
                                    <div class="text-muted">48 min</div>
                                </div>

                                <div data-id="3" class="d-flex justify-content-between">
                                    <div>
                            <span class="position-relative text-light-primary h-40 w-40 d-flex-center b-r-50">
                              <i class="fa-solid fa-user"></i>
                              <span
                                  class="position-absolute end-0 top-0 p-1 bg-primary border border-light rounded-circle"></span>
                            </span>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h6 class="link side">
                                            Toi Story
                                        </h6>
                                        <p>
                                            Companies can use to convey .</p>
                                    </div>
                                    <div class="text-muted">2 hours</div>
                                </div>

                                <div data-id="4" class="d-flex justify-content-between">
                                    <div>
                            <span class="position-relative text-light-info h-40 w-40 d-flex-center b-r-50">
                              <i class="fa-solid fa-user"></i>
                              <span
                                  class="position-absolute end-0 top-0 p-1 bg-info border border-light rounded-circle"></span>
                            </span>
                                    </div>
                                    <div class="flex-grow-1 ps-2">
                                        <h6 class="link side">
                                            Art Decco
                                        </h6>
                                        <p>
                                            System Software is closer.</p>
                                    </div>
                                    <div class="text-muted">1 day</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Existing list Table end -->

            <!-- search List Table start -->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>search List table</h5>
                    </div>
                    <div class="card-body">
                        <div id="test-list">
                            <div class="mb-3">
                                <input type="search" class="fuzzy-search form-control search" placeholder="Search..."
                                       aria-label="Search">
                            </div>
                            <ul class="list fuzzy-list">
                                <li>
                                    <p class="name">Guybrush Threepwood</p>
                                </li>
                                <li>
                                    <p class="name">Elaine Marley</p>
                                </li>
                                <li>
                                    <p class="name">LeChuck</p>
                                </li>
                                <li>
                                    <p class="name">Stan</p>
                                </li>
                                <li>
                                    <p class="name">Voodoo Lady</p>
                                </li>
                                <li>
                                    <p class="name">Herman Toothrot</p>
                                </li>
                                <li>
                                    <p class="name">Meathook</p>
                                </li>
                                <li>
                                    <p class="name">Carla</p>
                                </li>
                                <li>
                                    <p class="name">Otis</p>
                                </li>
                                <li>
                                    <p class="name">Rapp Scallion</p>
                                </li>
                                <li>
                                    <p class="name">Rum Rogers Sr.</p>
                                </li>
                                <li>
                                    <p class="name">Men of Low Moral Fiber</p>
                                </li>
                                <li>
                                    <p class="name">Murray</p>
                                </li>
                                <li>
                                    <p class="name">Cannibals</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- search List Table end -->

            <!-- Table with Pagination Table start -->
            <div class="col-md-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Table with Pagination</h5>
                    </div>
                    <div class="card-body">
                        <div id="user">
                            <div class="mb-3">
                                <input type="search" class="form-control search" placeholder="Search..." aria-label="Search">
                            </div>

                            <table class="table table-bordered align-middle">

                                <tbody class="list">
                                <tr>
                                    <td class="name">Jonny Stromberg</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Jonas Arnklint</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Martina Elm</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Olive Yew</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Dave Allippa</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Rhoda Report</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Rita Book</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Bess Twishes</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="name">Gustaf Lindqvist</td>
                                    <td>
                                        <button type="button" class="btn btn-light-secondary float-end">
                                            <i class="bi bi-envelope-at-fill"></i> Message
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="list-pagination">
                                <ul class="pagination"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table with Pagination Table end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- List js -->
<script src="{{asset('backend/assets/vendor/listJs/list-jquery.min.js')}}"></script>
<script src="{{asset('backend/assets/vendor/listJs/list.min.js')}}"></script>

<!-- phosphor js -->
<script src="{{asset('backend/assets/vendor/phosphor/phosphor.js')}}"></script>

<!-- list table js -->
<script src="{{asset('backend/assets/js/list_js.js')}}"></script>
@endsection


