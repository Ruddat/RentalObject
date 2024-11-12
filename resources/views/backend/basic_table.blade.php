@extends('backend.layout.master')
@section('title', 'Basic Table')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h5>Basic Table</h5>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                        <span>
                                            <i class="ph-duotone  ph-table f-s-16"></i> Table
                                        </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Basic Table</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- tables start  -->
        <div class="row table-section">
            <!-- Simple Table start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Simple Table</h5>
                        <p>Using the most basic table need to add <code> .table </code> class to table tag
                        </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center ">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Tiger Nixon</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Architect</td>
                                    <td class="text-secondary f-w-600">Edinburgh</td>
                                    <td><span class="badge text-light-primary">active</span></td>
                                    <td class="text-success f-w-500">$320,800</td>
                                    <td>+1 (025) 466-7506</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Garrett</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Accountant</td>
                                    <td class="text-secondary f-w-600">Tokyo</td>
                                    <td><span class="badge text-light-secondary">pending</span></td>
                                    <td class="text-success f-w-500">$170,750</td>
                                    <td>+1 (790) 476-9505</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Ashton Cox</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Technical</td>
                                    <td class="text-secondary f-w-600">Francisco</td>
                                    <td><span class="badge text-light-success">pending</span></td>
                                    <td class="text-success f-w-500">$86,000</td>
                                    <td>+1 (227) 375-6641</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Cedric Kelly</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Developer</td>
                                    <td class="text-secondary f-w-600">Edinburgh</td>
                                    <td><span class="badge text-light-info">active</span></td>
                                    <td class="text-success f-w-500">$433,060</td>
                                    <td>+1 (213) 619-7749</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-warning me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Airi Satou</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Accountant</td>
                                    <td class="text-secondary f-w-600">Tokyo</td>
                                    <td><span class="badge text-light-warning">pending</span></td>
                                    <td class="text-success f-w-500">$162,700</td>
                                    <td>+1 (152) 465-2290</td>
                                </tr>
                                <tr>
                                    <td >6</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-danger me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Williamson</p>x
                                        </div>
                                    </td>
                                    <td class="f-w-500">Integration</td>
                                    <td class="text-secondary f-w-600">New York</td>
                                    <td><span
                                            class="badge text-light-danger">active</span></td>
                                    <td class="text-success f-w-500">$372,000</td>
                                    <td>+1 (185) 793-6446</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Table end -->

            <!-- Dark table start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Dark Table</h5>
                        <p>Using the Dark table need to add <code> .table-dark </code> class to table tag
                        </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-dark table-hover table-variants-striped-dark  align-middle mb-0">
                                <thead>
                                <tr class="bg-light-info">
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Garrett</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ashton Cox</td>
                                    <td>Technical</td>
                                    <td>Francisco</td>
                                    <td>66</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Cedric Kelly</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="border-0">6</td>
                                    <td class="border-0">Williamson</td>
                                    <td class="border-0">Integration</td>
                                    <td class="border-0">New York</td>
                                    <td class="border-0">61</td>
                                    <td class="border-0">$372,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dark table end -->


            <!-- Bordered tables with Striped start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Bordered Tables With Striped</h5>
                        <p>Using the border table need to add <code> .table-bordered </code> class to table
                            tag and
                            <code> .table-striped </code> class for Strip table
                        </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center ">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Tiger Nixon</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Architect</td>
                                    <td class="text-secondary f-w-600">Edinburgh</td>
                                    <td><span class="badge text-light-primary">active</span></td>
                                    <td class="text-success f-w-500">$320,800</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Garrett</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Accountant</td>
                                    <td class="text-secondary f-w-600">Tokyo</td>
                                    <td><span class="badge text-light-secondary">pending</span></td>
                                    <td class="text-success f-w-500">$170,750</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Ashton Cox</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Technical</td>
                                    <td class="text-secondary f-w-600">Francisco</td>
                                    <td><span class="badge text-light-success">pending</span></td>
                                    <td class="text-success f-w-500">$86,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Cedric Kelly</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Developer</td>
                                    <td class="text-secondary f-w-600">Edinburgh</td>
                                    <td><span class="badge text-light-info">active</span></td>
                                    <td class="text-success f-w-500">$433,060</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-warning me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Airi Satou</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Accountant</td>
                                    <td class="text-secondary f-w-600">Tokyo</td>
                                    <td><span class="badge text-light-warning">pending</span></td>
                                    <td class="text-success f-w-500">$162,700</td>
                                </tr>
                                <tr>
                                    <td >6</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-danger me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Williamson</p>x
                                        </div>
                                    </td>
                                    <td class="f-w-500">Integration</td>
                                    <td class="text-secondary f-w-600">New York</td>
                                    <td><span
                                            class="badge text-light-danger">active</span></td>
                                    <td class="text-success f-w-500">$372,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Bordered tables with Striped end -->


            <!-- Tables without borders start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Tables Without Borders</h5>
                        <p>Using the borderless table need to add <code> .table-borderless </code> class to
                            table tag </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table  table-borderless table-hover table-striped align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-dark f-w-600">Tiger Nixon</td>
                                    <td><span class="badge text-outline-primary">Architect</span></td>
                                    <td class="text-secondary f-w-500">Edinburgh</td>
                                    <td>61</td>
                                    <td class="text-success f-w-500">$320,800</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-dark f-w-600">Garrett</td>
                                    <td><span class="badge text-outline-success">Accountant</span></td>
                                    <td class="text-secondary f-w-500">Tokyo</td>
                                    <td>63</td>
                                    <td class="text-success f-w-500">$170,750</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-dark f-w-600">Ashton Cox</td>
                                    <td><span class="badge text-outline-info">Technical</span></td>
                                    <td class="text-secondary f-w-500">Francisco</td>
                                    <td>66</td>
                                    <td class="text-success f-w-500">$86,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-dark f-w-600">Cedric Kelly</td>
                                    <td><span class="badge text-outline-danger">Developer</span></td>
                                    <td class="text-secondary f-w-500">Edinburgh</td>
                                    <td>22</td>
                                    <td class="text-success f-w-500">$433,060</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-dark f-w-600">Airi Satou</td>
                                    <td><span class="badge text-outline-success">Accountant</span></td>
                                    <td class="text-secondary f-w-500">Tokyo</td>
                                    <td>33</td>
                                    <td class="text-success f-w-500">$162,700</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="text-dark f-w-600">Williamson</td>
                                    <td><span class="badge text-outline-warning">Integration</span></td>
                                    <td class="text-secondary f-w-500">New York</td>
                                    <td>61</td>
                                    <td class="text-success f-w-500">$372,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Tables without borders end -->

            <!-- H p-0over able Table start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5> Hoverable Table</h5>
                        <p>Using the Hoverable table need to add <code> .table-hover </code> class to table
                            tag </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bottom-border table-hover align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Salary</th>
                                    <th scope="col">Contact</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <div class="d-flex align-items-center ">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Tiger Nixon</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Architect</td>
                                    <td class="text-secondary f-w-600">Edinburgh</td>
                                    <td><span class="badge text-light-primary">active</span></td>
                                    <td class="text-success f-w-500">$320,800</td>
                                    <td>+1 (025) 466-7506</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Garrett</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Accountant</td>
                                    <td class="text-secondary f-w-600">Tokyo</td>
                                    <td><span class="badge text-light-secondary">pending</span></td>
                                    <td class="text-success f-w-500">$170,750</td>
                                    <td>+1 (790) 476-9505</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Ashton Cox</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Technical</td>
                                    <td class="text-secondary f-w-600">Francisco</td>
                                    <td><span class="badge text-light-success">pending</span></td>
                                    <td class="text-success f-w-500">$86,000</td>
                                    <td>+1 (227) 375-6641</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Cedric Kelly</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Developer</td>
                                    <td class="text-secondary f-w-600">Edinburgh</td>
                                    <td><span class="badge text-light-info">active</span></td>
                                    <td class="text-success f-w-500">$433,060</td>
                                    <td>+1 (213) 619-7749</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-warning me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Airi Satou</p>
                                        </div>
                                    </td>
                                    <td class="f-w-500">Accountant</td>
                                    <td class="text-secondary f-w-600">Tokyo</td>
                                    <td><span class="badge text-light-warning">pending</span></td>
                                    <td class="text-success f-w-500">$162,700</td>
                                    <td>+1 (152) 465-2290</td>
                                </tr>
                                <tr>
                                    <td >6</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-danger me-2 .simple-table-avatar">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt=""
                                                     class="img-fluid">
                                            </div>
                                            <p class="mb-0 f-w-500 ">Williamson</p>x
                                        </div>
                                    </td>
                                    <td class="f-w-500">Integration</td>
                                    <td class="text-secondary f-w-600">New York</td>
                                    <td><span
                                            class="badge text-light-danger">active</span></td>
                                    <td class="text-success f-w-500">$372,000</td>
                                    <td>+1 (185) 793-6446</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hover able Table end -->

            <!-- Small Table start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Small Table</h5>
                        <p>Using the small table need to add <code> .table-sm </code> class to table tag
                        </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-sm table-hover table-striped align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Garrett</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ashton Cox</td>
                                    <td>Technical</td>
                                    <td>Francisco</td>
                                    <td>66</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Cedric Kelly</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td class="border-0">6</td>
                                    <td class="border-0">Williamson</td>
                                    <td class="border-0">Integration</td>
                                    <td class="border-0">New York</td>
                                    <td class="border-0">61</td>
                                    <td class="border-0">$372,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Small Table end -->

            <!-- Large Table start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Large Table</h5>
                        <p>Using the large table need to add <code> .table-lg </code> class to table tag
                        </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-lg table-hover table-striped align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>Architect</td>
                                    <td>Edinburgh</td>
                                    <td><span class="badge text-light-success">active</span></td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Garrett</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td><span class="badge text-light-primary">pending</span></td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ashton Cox</td>
                                    <td>Technical</td>
                                    <td>Francisco</td>
                                    <td><span class="badge text-light-info">active</span></td>
                                    <td>$86,000</td>
                                </tr>

                                <tr>
                                    <td class="border-0">6</td>
                                    <td class="border-0">Williamson</td>
                                    <td class="border-0">Integration</td>
                                    <td class="border-0">New York</td>
                                    <td class="border-0"><span
                                            class="badge text-light-danger">pending</span></td>
                                    <td class="border-0">$372,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Large Table end -->

            <!-- Table With bottom Border start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Table With Bottom Border</h5>
                        <p>Using the bottom bordered table need to add <code> .table-bottom-border </code>
                            class to table tag </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bottom-border table-hover align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Team</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td><span class="badge text-outline-primary">Architect</span></td>
                                    <td>Edinburgh</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-success"
                                                data-bs-toggle="tooltip" data-bs-title="Lennon Briggs">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-danger"
                                                data-bs-toggle="tooltip" data-bs-title="Maya Horton">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-success f-w-500">$320,800</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Garrett</td>
                                    <td><span class="badge text-outline-success">Accountant</span></td>
                                    <td>Tokyo</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-success"
                                                data-bs-toggle="tooltip" data-bs-title="Lennon Briggs">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-danger"
                                                data-bs-toggle="tooltip" data-bs-title="Maya Horton">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-success f-w-500">$170,750</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ashton Cox</td>
                                    <td><span class="badge text-outline-info ">Technical</span></td>
                                    <td>Francisco</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-success"
                                                data-bs-toggle="tooltip" data-bs-title="Lennon Briggs">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-danger"
                                                data-bs-toggle="tooltip" data-bs-title="Maya Horton">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-success f-w-500">$86,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Evert</td>
                                    <td><span class="badge text-outline-danger">Developer</span></td>
                                    <td>New York</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-success"
                                                data-bs-toggle="tooltip" data-bs-title="Lennon Briggs">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-danger"
                                                data-bs-toggle="tooltip" data-bs-title="Maya Horton">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-success f-w-500">$36,000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Murazik</td>
                                    <td><span class="badge text-outline-success">Accountant</span></td>
                                    <td>New York</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-success"
                                                data-bs-toggle="tooltip" data-bs-title="Lennon Briggs">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-danger"
                                                data-bs-toggle="tooltip" data-bs-title="Maya Horton">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-success f-w-500">$62,000</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Williamson</td>
                                    <td><span class="badge text-outline-danger">Developer</span></td>
                                    <td>New York</td>
                                    <td>
                                        <ul class="avatar-group justify-content-start">
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-success"
                                                data-bs-toggle="tooltip" data-bs-title="Lennon Briggs">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                            <li class="h-35 w-35 d-flex b-r-50 overflow-hidden text-bg-danger"
                                                data-bs-toggle="tooltip" data-bs-title="Maya Horton">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="avatar"
                                                     class="img-fluid">
                                            </li>
                                        </ul>
                                    </td>
                                    <td class="text-success f-w-500">$894,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table With bottom Border end -->

            <!-- Table Striped Columns start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Striped Columns</h5>
                        <p>Using the column strip table need to add <code> .table-striped-columns </code>
                            class to table tag </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-bottom-border  table-striped-columns align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Garrett</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Ashton Cox</td>
                                    <td>Technical</td>
                                    <td>Francisco</td>
                                    <td>66</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Evert</td>
                                    <td>Williamson</td>
                                    <td>New York</td>
                                    <td>60</td>
                                    <td>$36,000</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Murazik</td>
                                    <td>Wava</td>
                                    <td>New York</td>
                                    <td>49</td>
                                    <td>$62,000</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Williamson</td>
                                    <td>Integration</td>
                                    <td>New York</td>
                                    <td>56</td>
                                    <td>$894,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Striped Columns end -->

            <!-- Table Variants start -->
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Table Variants</h5>
                        <p>Using the Color Variants table need to add <code> .table-Variants </code> class
                            to table tag </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-Variants table-hover align-middle mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Position</th>
                                    <th scope="col">Office</th>
                                    <th scope="col">Age</th>
                                    <th scope="col">Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-primary">
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr class="table-secondary">
                                    <td>2</td>
                                    <td>Garrett</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr class="table-success">
                                    <td>3</td>
                                    <td>Ashton Cox</td>
                                    <td>Technical</td>
                                    <td>Francisco</td>
                                    <td>66</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr class="table-danger">
                                    <td>4</td>
                                    <td>Evert</td>
                                    <td>Williamson</td>
                                    <td>New York</td>
                                    <td>60</td>
                                    <td>$36,000</td>
                                </tr>
                                <tr class="table-warning">
                                    <td>5</td>
                                    <td>Murazik</td>
                                    <td>Wava</td>
                                    <td>New York</td>
                                    <td>49</td>
                                    <td>$62,000</td>
                                </tr>
                                <tr class="table-info">
                                    <td>6</td>
                                    <td>Williamson</td>
                                    <td>Integration</td>
                                    <td>New York</td>
                                    <td>56</td>
                                    <td>$894,000</td>
                                </tr>
                                <tr class="table-light">
                                    <td>6</td>
                                    <td>Williamson</td>
                                    <td>Integration</td>
                                    <td>New York</td>
                                    <td>56</td>
                                    <td>$894,000</td>
                                </tr>
                                <tr class="table-dark">
                                    <td>6</td>
                                    <td>Williamson</td>
                                    <td>Integration</td>
                                    <td>New York</td>
                                    <td>56</td>
                                    <td>$894,000</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table Variants end -->

            <!-- Nesting Table start -->
            <div class="col-xl-12">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Nesting Table</h5>
                        <p> Border styles, active styles, and table variants are not inherited by nested
                            tables. </p>
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-striped table-bordered align-middle mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <table class="table mb-0">
                                        <thead>
                                        <tr>
                                            <th scope="col">Header</th>
                                            <th scope="col">Header</th>
                                            <th scope="col">Header</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">A</th>
                                            <td>First</td>
                                            <td>Last</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">B</th>
                                            <td>First</td>
                                            <td>Last</td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Einar</td>
                                <td>Miller</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Layne</td>
                                <td>Paucek</td>
                                <td>@twitter</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Nesting Table end -->


            <!-- Two-way table start -->
            <div class="col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Two Way Table</h5>
                        <p>Using the two direction table need to add <code> .text-end </code> class to last
                            table head table
                            data </p>
                    </div>
                    <div class="card-body p-0">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col" class="text-end">Salary</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td class="text-end">$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett</td>
                                <td class="text-end">$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td class="text-end">$86,000</td>
                            </tr>
                            <tr>
                                <td>Williamson</td>
                                <td class="text-end">$547,000</td>
                            </tr>
                            <tr>
                                <td class="border-0 pb-0">Evie Wunsch</td>
                                <td class="border-0 text-end pb-0">$372,000</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Two-way table end -->

            <!-- Always responsive start -->
            <div class="col-xl-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Always Responsive</h5>
                        <p>Apply <code>.table-responsive{-sm|-md|-lg|-xl|-xxl}</code> to make tables scroll horizontally on smaller screens while displaying normally on larger ones.</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                    <th scope="col">Heading</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                    <td>Cell</td>
                                </tr>
                                <tr>
                                    <th class="border-0 pb-0" scope="row">4</th>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                    <td class="border-0 pb-0">Cell</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Always responsive end -->


        </div>
        <!-- tables-end  -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

{{--    <!-- table-js  -->--}}
{{--    <script src="{{asset('backend/assets/js/table.js')}}"></script>--}}
@endsection
