@extends('layout.master')
@section('title', 'To Do')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Todo</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-stack f-s-16"></i> Apps
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Todo</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Todo start -->
        <div class="row">
            <!-- Add Project start -->
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary btn-lg w-100" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"><i class="ti ti-plus"></i> Add Project</button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" id="staticBackdrop">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title f-w-500 fs-5" id="exampleModalLabel1">Create Task</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body app-form">
                                        <div class="mb-3" id="newtask">
                                            <label class="form-label">Task Name</label>
                                            <input class="form-control todo-inputs" type="text" placeholder="Default input">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-primary" type="submit" id="push"
                                                data-bs-dismiss="modal">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="todo-container">
                            <div id="tasks"></div>
                            <div>
                                <div class="task">
                          <span>
                            Ra-Admin & Dashboard
                          </span>
                                    <button class="btn btn-sm p-1 border-0 delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Project Management
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Chat Application
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Todo App
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            React Weather App
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Tic-Tac-Toe
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Stopwatch
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Calculator App
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Ecommerce Site
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                            <div>
                                <div class="task">
                          <span>
                            Chat Application
                          </span>
                                    <button class="btn btn-sm p-1 border-0  delete">
                                        <i class="ti ti-trash text-danger f-s-18"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Project end -->

            <!-- Todo start -->
            <div class="col-xl-9">
                <div id="myTodo">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex gap-1">
                                <div class="flex-grow-1">
                                    <form class="me-3 app-form app-icon-form search-lg h-100" action="#">
                                        <div class="position-relative h-100">
                                            <input type="search" class="form-control search h-100 pe-4" placeholder="Search..."
                                                   aria-label="Search">
                                            <i class="ti ti-search text-dark icon-search"></i>
                                        </div>
                                    </form>
                                </div>
                                <div>
                                    <button type="button" class="btn btn-primary w-100" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal1">Add</button>
                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                                         aria-hidden="true">
                                        <form class="app-form" id="add_employee_todo">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee
                                                        </h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="task mb-3">
                                                            <input type="hidden" id="id-field">
                                                            <label class="form-label">Employee :</label>
                                                            <input class="form-control" type="text" id="task-field" placeholder="Enter Your Task"
                                                                   required>
                                                        </div>

                                                        <div class="assign mb-3">
                                                            <label class="form-label">Assign :</label>
                                                            <input class="form-control" type="text" id="assign-field" placeholder="Assign"
                                                                   required>
                                                        </div>


                                                        <div class="date mb-3">
                                                            <label class="form-label">date :</label>
                                                            <input class="form-control" type="date" id="date-field" required >
                                                        </div>

                                                        <div class="notes mb-3">
                                                            <label class="form-label">Notes :</label>
                                                            <textarea class="form-control" rows="3" placeholder="Enter Your Notes" id="notes-field"></textarea>
                                                        </div>

                                                        <div class="status mb-3">
                                                            <label class="form-label">status :</label>
                                                            <select class="form-select" id="status-field" aria-label="Default select example">
                                                                <option value="">Status</option>
                                                                <option value="success">High</option>
                                                                <option value="warning">Medium</option>
                                                                <option value="danger">Low</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer add">
                                                        <input type="button" class="btn btn-secondary" data-bs-dismiss="modal" value="Close">
                                                        <button class="btn btn-primary" id="add-btn" value="Add">Add</button>
                                                        <button class="btn btn-success" id="edit-btn">Edit</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card">
                        <div class="table-responsive app-scroll">
                            <table class="table table-bottom-border table-lg align-middle todo-table">
                                <thead>
                                <tr class="app-sort">
                                    <th>
                                        <input type="checkbox" class="checkAll form-check-input ms-2" name="checkAll">
                                    </th>
                                    <th class="sort d-none" data-sort="id" scope="col" >Id</th>
                                    <th class="sort" data-sort="task" scope="col">Task</th>
                                    <th class="sort" data-sort="status" scope="col">Priority</th>
                                    <th class="sort" data-sort="assign" scope="col">Assign</th>
                                    <th class="sort" data-sort="date" scope="col">Due Date</th>
                                    <th class="sort" data-sort="notes" scope="col">Notes</th>
                                    <th class="sort" data-sort="action" scope="col">Edit</th>
                                    <th class="sort" data-sort="action" scope="col">Delete</th>
                                </tr>
                                </thead>
                                <tbody class="list" id="t-data">
                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="1"></th>
                                    <td class="id d-none">1</td>
                                    <td class="task f-w-500 text-dark">Design the homepage layout</td>
                                    <td class="status">
                                        <span class="badge bg-success-subtle bg-success f-s-10 text-uppercase">High</span>
                                    </td>
                                    <td class="assign">Alex</td>
                                    <td class="date text-danger">2021-03-19</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>Revamp homepage design</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="2"></th>
                                    <td class="id d-none">2</td>
                                    <td class="task f-w-500 text-dark">Set up a meeting with the development team</td>
                                    <td class="status"><span
                                            class="badge bg-success-subtle bg-success f-s-10 text-uppercase">High</span>
                                    </td>
                                    <td class="assign">Maria</td>
                                    <td class="date text-danger">2020-01-19</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>Gather all invoices</span> </td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="3"></th>
                                    <td class="id d-none">3</td>
                                    <td class="task f-w-500 text-dark">Review the security audit report</td>
                                    <td class="status"><span
                                            class="badge bg-warning-subtle bg-warning f-s-10 text-uppercase">Medium</span>
                                    </td>
                                    <td class="assign">John</td>
                                    <td class="date text-danger">2020-10-26</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>Focus on social media</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="4"></th>
                                    <td class="id d-none">4</td>
                                    <td class="task f-w-500 text-dark">Develop Mobile App Prototype</td>
                                    <td class="status">
                                        <span class="badge bg-danger-subtle bg-danger f-s-10 text-uppercase">High</span>
                                    </td>
                                    <td class="assign">Sarah</td>
                                    <td class="date text-danger">2020-06-19</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>5 new hires</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="5"></th>
                                    <td class="id d-none">5</td>
                                    <td class="task f-w-500 text-dark">Conduct Penetration Testing</td>
                                    <td class="status">
                                        <span class="badge bg-danger-subtle bg-danger f-s-10 text-uppercase">Low</span>
                                    </td>
                                    <td class="assign">David</td>
                                    <td class="date text-danger">2022-03-20</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>External audit team</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="6"></th>
                                    <td class="id d-none">6</td>
                                    <td class="task f-w-500 text-dark">Integrate Payment Gateway</td>
                                    <td class="status"><span
                                            class="badge bg-success-subtle bg-success f-s-10 text-uppercase">High</span>
                                    </td>
                                    <td class="assign">Lisa</td>
                                    <td class="date text-danger">2019-12-29</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>AWS platform</span> </td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="7"></th>
                                    <td class="id d-none">7</td>
                                    <td class="task f-w-500 text-dark">Create Marketing Campaign Strategy</td>
                                    <td class="status"><span
                                            class="badge bg-success-subtle bg-success f-s-10 text-uppercase">High</span>
                                    </td>
                                    <td class="assign">Emily</td>
                                    <td class="date text-danger">2020-5-16</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>Focus on new software</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="8"></th>
                                    <td class="id d-none">8</td>
                                    <td class="task f-w-500 text-dark">Migrate Database to Cloud</td>
                                    <td class="status"><span
                                            class="badge bg-warning-subtle bg-warning f-s-10 text-uppercase">Medium</span>
                                    </td>
                                    <td class="assign">Michael</td>
                                    <td class="date text-danger">2022-02-16</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>For upcoming launch</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="9"></th>
                                    <td class="id d-none">9</td>
                                    <td class="task f-w-500 text-dark">Test Software for Bugs</td>
                                    <td class="status"><span
                                            class="badge bg-warning-subtle bg-warning f-s-10 text-uppercase">Medium</span>
                                    </td>
                                    <td class="assign">Chris</td>
                                    <td class="date text-danger">2022-10-1</td>
                                    <td class="notes text-dark f-s-14"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>Review last year’s data</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>

                                <tr>
                                    <th scope="row"><input type="checkbox" class="form-check-input todo-checkbox ms-2" name="item" value="10"></th>
                                    <td class="id d-none">10</td>
                                    <td class="task f-w-500 text-dark">Finalize Project Documentation</td>
                                    <td class="status"><span class="badge bg-danger-subtle bg-danger f-s-10 text-uppercase">Low</span>
                                    </td>
                                    <td class="employee">Karen</td>
                                    <td class="date text-danger">2023-1-25</td>
                                    <td class="notes"><span class="text-dark f-s-14"><i class="ti ti-circle-filled me-2 f-s-6"></i>Compare pricing</span></td>
                                    <td class="edit"><button class="btn edit-item-btn icon-btn btn-outline-success" data-bs-toggle="modal"
                                                             data-bs-target="#exampleModal1"><i class="ti ti-edit"></i></button>
                                    </td>
                                    <td class="remove"><button class="btn remove-item-btn icon-btn btn-outline-danger"><i class="ti ti-trash"></i></button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Todo end -->
        </div>

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- List js -->
<script src="{{asset('assets/vendor/listJs/list-jquery.min.js')}}"></script>
<script src="{{asset('assets/vendor/listJs/list.min.js')}}"></script>

<!--js -->
<script src="{{asset('assets/js/to_do.js')}}"></script>

@endsection
