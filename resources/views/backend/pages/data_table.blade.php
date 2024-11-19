@extends('backend.layout.master')
@section('title', 'Data Table')
@section('css')
    <!--font-awesome-css-->
    <link rel="stylesheet" href="{{asset('backend/assets/vendor/fontawesome/css/all.css')}}">

    <!-- Data Table css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/vendor/datatable/jquery.dataTables.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Data Table</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-table f-s-16"></i> Table
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Data Table</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Breadcrumb end -->

        <!-- Data Table start -->
        <div class="row">
            <!-- Default Datatable start -->
            <div class="col-12">
                <div class="card ">
                    <div class="card-header">
                        <h5>Default Datatable</h5>
                        <p>DataTables has most features enabled by default, so all you need to do to use it with your own
                            tables is to call the construction function: <code>$().DataTable();</code>. </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example" class="display app-data-table default-data-table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td><span class="badge text-light-primary">System Architect</span></td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$3674.55</td>
                                    <td>$320,800</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td><span class="badge text-light-success">Accountant</span></td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td><span class="badge text-light-secondary">Junior Technical Author</span></td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009-01-12</td>
                                    <td>$86,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td><span class="badge text-light-info">Senior Javascript Developer</span></td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012-03-29</td>
                                    <td>$433,060</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td><span class="badge text-light-success">Accountant</span></td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008-11-28</td>
                                    <td>$162,700</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td><span class="badge text-light-danger"> Integration Specialist</span></td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012-12-02</td>
                                    <td>$372,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td><span class="badge text-light-dark">Sales Assistant</span></td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012-08-06</td>
                                    <td>$137,500</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td><span class="badge text-light-light">Integration Specialist</span></td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010-10-14</td>
                                    <td>$327,900</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td><span class="badge text-light-primary">Javascript Developer</span></td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009-09-15</td>
                                    <td>$205,500</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td><span class="badge text-light-info">Software Engineer</span></td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008-12-13</td>
                                    <td>$103,600</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td><span class="badge text-light-danger">Office Manager</span></td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008-12-19</td>
                                    <td>$90,560</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td><span class="badge text-light-secondary">Support Lead</span></td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013-03-03</td>
                                    <td>$342,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td><span class="badge text-light-info">Regional Director</span></td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008-10-16</td>
                                    <td>$470,600</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td><span class="badge text-light-primary">Senior Marketing Designer</span></td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012-12-18</td>
                                    <td>$313,500</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td><span class="badge text-light-info">Regional Director</span></td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010-03-17</td>
                                    <td>$385,750</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td><span class="badge text-light-warning">Marketing Designer</span></td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012-11-27</td>
                                    <td>$198,500</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td><span class="badge text-light-secondary">Chief Financial Officer (CFO)</span></td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010-06-09</td>
                                    <td>$725,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td><span class="badge text-light-success">Systems Administrator</span></td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009-04-10</td>
                                    <td>$237,500</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td><span class="badge text-light-info">Software Engineer</span></td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012-10-13</td>
                                    <td>$132,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td><span class="badge text-light-danger">Personnel Lead</span></td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012-09-26</td>
                                    <td>$217,500</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td><span class="badge text-light-dark">Personnel Lead</span></td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011-09-03</td>
                                    <td>$345,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td><span class="badge text-light-info">Development Lead</span></td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009-06-25</td>
                                    <td>$675,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td><span class="badge text-light-warning">Pre-Sales Support</span></td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011-12-12</td>
                                    <td>$106,450</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td><span class="badge text-light-dark">Sales Assistant</span></td>
                                    <td>Sydney</td>
                                    <td>23</td>
                                    <td>2010-09-20</td>
                                    <td>$85,600</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td><span class="badge text-light-secondary">Chief Executive Officer (CEO)</span></td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009-10-09</td>
                                    <td>$1,200,000</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td><span class="badge text-light-light">Developer</span></td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010-12-22</td>
                                    <td>$92,575</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td><span class="badge text-light-info">Regional Director</span></td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010-11-14</td>
                                    <td>$357,650</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td><span class="badge text-light-info">Software Engineer</span></td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011-06-07</td>
                                    <td>$206,850</td>
                                    <td>
                                        <button type="button" class="btn btn-light-success icon-btn b-r-4">
                                            <i class="ti ti-edit text-success"></i>
                                        </button>
                                        <button type="button" class="btn btn-light-danger icon-btn b-r-4 delete-btn">
                                            <i class="ti ti-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Default Datatable end -->
            <!-- Row Border Bottom Example start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Row Border Bottom Example</h5>
                        <p>DataTables has most features enabled by default, so all you need to do to use it with your own
                            ables is to call the construction function: <code>$().DataTable();</code> and border bottom
                        </p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example1" class="display w-100 row-border-table table-responsive">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Tiger Nixon</p>
                                        </div>
                                    </td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$3674.55</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Garrett Winters</p>
                                        </div>
                                    </td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Ashton Cox</p>
                                        </div>
                                    </td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009-01-12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Cedric Kelly</p>
                                        </div>
                                    </td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012-03-29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Airi Satou</p>
                                        </div>
                                    </td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008-11-28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Brielle Williamson</p>
                                        </div>
                                    </td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012-12-02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2">Herrod Chandler</p>
                                        </div>
                                    </td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012-08-06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Rhona Davidson</p>
                                        </div>
                                    </td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010-10-14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Colleen Hurst</p>
                                        </div>
                                    </td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009-09-15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2">Sonya Frost</p>
                                        </div>
                                    </td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008-12-13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Jena Gaines</p>
                                        </div>
                                    </td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008-12-19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Quinn Flynn</p>
                                        </div>
                                    </td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013-03-03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2">Charde Marshall</p>
                                        </div>
                                    </td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008-10-16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="bg-danger h-30 w-30 d-flex-center b-r-50">
                                  HK
                                </span>
                                            <p class="mb-0 ps-2"> Haley Kennedy</p>
                                        </div>
                                    </td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012-12-18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Tatyana Fitzpatrick</p>
                                        </div>
                                    </td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010-03-17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Michael Silva</p>
                                        </div>
                                    </td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012-11-27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                  <i class="fa-solid fa-user"></i>
                                </span>
                                            <p class="mb-0 ps-2"> Paul Byrd</p>
                                        </div>
                                    </td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010-06-09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Gloria Little</p>
                                        </div>
                                    </td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009-04-10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="text-bg-warning h-30 w-30 d-flex-center b-r-50">
                                  BG
                                </span>
                                            <p class="mb-0 ps-2"> Bradley Greer</p>
                                        </div>
                                    </td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012-10-13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2">Dai Rios</p>
                                        </div>
                                    </td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012-09-26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Jenette Caldwell</p>
                                        </div>
                                    </td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011-09-03</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                  <i class="fa-solid fa-user"></i>
                                </span>
                                            <p class="mb-0 ps-2"> Yuri Berry</p>
                                        </div>
                                    </td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009-06-25</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2">Caesar Vance</p>
                                        </div>
                                    </td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011-12-12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                  <i class="fa-solid fa-user"></i>
                                </span>
                                            <p class="mb-0 ps-2"> Doris Wilder</p>
                                        </div>
                                    </td>
                                    <td>Sales Assistant</td>
                                    <td>Sydney</td>
                                    <td>23</td>
                                    <td>2010-09-20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="bg-primary h-30 w-30 d-flex-center b-r-50">
                                  AR
                                </span>
                                            <p class="mb-0 ps-2"> Angelica Ramos</p>
                                        </div>
                                    </td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009-10-09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Gavin Joyce</p>
                                        </div>
                                    </td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010-12-22</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                  <i class="fa-solid fa-user"></i>
                                </span>
                                            <p class="mb-0 ps-2"> Jennifer Chang</p>
                                        </div>
                                    </td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010-11-14</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Brenden Wagner</p>
                                        </div>
                                    </td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011-06-07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Fiona Green</p>
                                        </div>
                                    </td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010-03-11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                <span class="bg-secondary h-30 w-30 d-flex-center b-r-50">
                                  <i class="fa-solid fa-user"></i>
                                </span>
                                            <p class="mb-0 ps-2">Shou Itou</p>
                                        </div>
                                    </td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011-08-14</td>
                                    <td>$163,000</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="h-30 w-30 d-flex-center b-r-50 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <p class="mb-0 ps-2"> Michelle House</p>
                                        </div>
                                    </td>
                                    <td>Integration Specialist</td>
                                    <td>Sydney</td>
                                    <td>37</td>
                                    <td>2011-06-02</td>
                                    <td>$95,400</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Row Border Bottom Example end -->
            <!-- Buttons Example start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Buttons Example</h5>
                        <p>The Buttons extension for DataTables provides a common set of options, API methods and styling to
                            display buttons on a page that will interact with a DataTable. The core library provides the based
                            framework upon which plug-ins can be built.</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example2" class="display w-100 default-data-table">
                                <thead>
                                <tr>
                                    <th>Currency Code</th>
                                    <th>Currency</th>
                                    <th>Price</th>
                                    <th>High</th>
                                    <th>Low</th>
                                    <th>Change</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>EUR</td>
                                    <td>Euro</td>
                                    <td>$62341.87</td>
                                    <td>$7689.67</td>
                                    <td>$4843.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">25.8%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>JPY</td>
                                    <td>Japanese Yen</td>
                                    <td>$9875.87</td>
                                    <td>$4689.67</td>
                                    <td>$3674.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">64.8%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GBP</td>
                                    <td>Pound</td>
                                    <td>$8740.87</td>
                                    <td>$8561.67</td>
                                    <td>$6324.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">24.0%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CHF</td>
                                    <td>Swiss</td>
                                    <td>$5896.87</td>
                                    <td>$3902.67</td>
                                    <td>$4674.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">15.3%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CAD</td>
                                    <td>Canadian Doallar</td>
                                    <td>$4789.87</td>
                                    <td>$2982.67</td>
                                    <td>$254.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">0.05%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>AUD</td>
                                    <td>Australian Doallar</td>
                                    <td>$5672.87</td>
                                    <td>$7512.67</td>
                                    <td>$6314.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.20%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>NZD</td>
                                    <td>New Zealand Doallar</td>
                                    <td>$5672.87</td>
                                    <td>$7512.67</td>
                                    <td>$3531.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">0.36%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>SEK</td>
                                    <td>Swedish Króna</td>
                                    <td>$8652.87</td>
                                    <td>$8062.67</td>
                                    <td>$2421.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.16%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>NOK</td>
                                    <td>Norwegian Krona</td>
                                    <td>$5652.87</td>
                                    <td>$5062.67</td>
                                    <td>$3424.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.8%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>BRL</td>
                                    <td>Brazilian Real</td>
                                    <td>$4652.87</td>
                                    <td>$54762.67</td>
                                    <td>$4634.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">0.09%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>CNY</td>
                                    <td>Chinese Yuan</td>
                                    <td>$6572.87</td>
                                    <td>$5592.67</td>
                                    <td>$4374.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">0.04%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>RUB</td>
                                    <td>Russian Rouble</td>
                                    <td>$4893.87</td>
                                    <td>$2892.67</td>
                                    <td>$2774.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.59%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>INR</td>
                                    <td>Indian Rupee</td>
                                    <td>$8343.87</td>
                                    <td>$8976.67</td>
                                    <td>$6844.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.28%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>TRY</td>
                                    <td>New Turkish Liran</td>
                                    <td>$7356.87</td>
                                    <td>$2563.67</td>
                                    <td>$4685.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.23%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>THB</td>
                                    <td>Thai Baht</td>
                                    <td>$3836.87</td>
                                    <td>$2563.67</td>
                                    <td>$2352.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">0.25%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>IDR</td>
                                    <td>indonesian Ringgit</td>
                                    <td>$2482.87</td>
                                    <td>$2563.67</td>
                                    <td>$2032.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-down f-s-20 text-danger"></i>
                                            <h6 class="m-0 text-danger">0.13%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MYR</td>
                                    <td>Malaysian Ringgit</td>
                                    <td>$3932.87</td>
                                    <td>$4632.67</td>
                                    <td>$3722.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.18%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MXN</td>
                                    <td>Mexican New Peso</td>
                                    <td>$3932.87</td>
                                    <td>$4632.67</td>
                                    <td>$2312.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.18%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ARS</td>
                                    <td>Argentiniam Peso</td>
                                    <td>$2792.21</td>
                                    <td>$2724.13</td>
                                    <td>$2074.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.12%</h6>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>DKK</td>
                                    <td>Danish Krone</td>
                                    <td>$6544.75</td>
                                    <td>$5466.78</td>
                                    <td>$3252.55</td>
                                    <td>
                                        <div class="d-flex gap-1 align-items-center">
                                            <i class="ti ti-chevrons-up f-s-20 text-success"></i>
                                            <h6 class="m-0 text-success">0.54%</h6>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Buttons Example end -->
            <!-- Row Created Callback Example start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Row Created Callback Example</h5>
                        <p>The Buttons extension for DataTables provides a common set of options, API methods and styling to
                            display buttons on a page that will interact with a DataTable. The core library provides the based
                            framework upon which plug-ins can be built.</p>
                    </div>
                    <div class="card-body p-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example3" class="display w-100 row-callback-datatable">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>$3674.55</td>
                                    <td>$320,800</td>
                                </tr>
                                <tr>
                                    <td>Garrett Winters</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>63</td>
                                    <td>2011-07-25</td>
                                    <td>$170,750</td>
                                </tr>
                                <tr>
                                    <td>Ashton Cox</td>
                                    <td>Junior Technical Author</td>
                                    <td>San Francisco</td>
                                    <td>66</td>
                                    <td>2009-01-12</td>
                                    <td>$86,000</td>
                                </tr>
                                <tr>
                                    <td>Cedric Kelly</td>
                                    <td>Senior Javascript Developer</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2012-03-29</td>
                                    <td>$433,060</td>
                                </tr>
                                <tr>
                                    <td>Airi Satou</td>
                                    <td>Accountant</td>
                                    <td>Tokyo</td>
                                    <td>33</td>
                                    <td>2008-11-28</td>
                                    <td>$162,700</td>
                                </tr>
                                <tr>
                                    <td>Brielle Williamson</td>
                                    <td>Integration Specialist</td>
                                    <td>New York</td>
                                    <td>61</td>
                                    <td>2012-12-02</td>
                                    <td>$372,000</td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler</td>
                                    <td>Sales Assistant</td>
                                    <td>San Francisco</td>
                                    <td>59</td>
                                    <td>2012-08-06</td>
                                    <td>$137,500</td>
                                </tr>
                                <tr>
                                    <td>Rhona Davidson</td>
                                    <td>Integration Specialist</td>
                                    <td>Tokyo</td>
                                    <td>55</td>
                                    <td>2010-10-14</td>
                                    <td>$327,900</td>
                                </tr>
                                <tr>
                                    <td>Colleen Hurst</td>
                                    <td>Javascript Developer</td>
                                    <td>San Francisco</td>
                                    <td>39</td>
                                    <td>2009-09-15</td>
                                    <td>$205,500</td>
                                </tr>
                                <tr>
                                    <td>Sonya Frost</td>
                                    <td>Software Engineer</td>
                                    <td>Edinburgh</td>
                                    <td>23</td>
                                    <td>2008-12-13</td>
                                    <td>$103,600</td>
                                </tr>
                                <tr>
                                    <td>Jena Gaines</td>
                                    <td>Office Manager</td>
                                    <td>London</td>
                                    <td>30</td>
                                    <td>2008-12-19</td>
                                    <td>$90,560</td>
                                </tr>
                                <tr>
                                    <td>Quinn Flynn</td>
                                    <td>Support Lead</td>
                                    <td>Edinburgh</td>
                                    <td>22</td>
                                    <td>2013-03-03</td>
                                    <td>$342,000</td>
                                </tr>
                                <tr>
                                    <td>Charde Marshall</td>
                                    <td>Regional Director</td>
                                    <td>San Francisco</td>
                                    <td>36</td>
                                    <td>2008-10-16</td>
                                    <td>$470,600</td>
                                </tr>
                                <tr>
                                    <td>Haley Kennedy</td>
                                    <td>Senior Marketing Designer</td>
                                    <td>London</td>
                                    <td>43</td>
                                    <td>2012-12-18</td>
                                    <td>$313,500</td>
                                </tr>
                                <tr>
                                    <td>Tatyana Fitzpatrick</td>
                                    <td>Regional Director</td>
                                    <td>London</td>
                                    <td>19</td>
                                    <td>2010-03-17</td>
                                    <td>$385,750</td>
                                </tr>
                                <tr>
                                    <td>Michael Silva</td>
                                    <td>Marketing Designer</td>
                                    <td>London</td>
                                    <td>66</td>
                                    <td>2012-11-27</td>
                                    <td>$198,500</td>
                                </tr>
                                <tr>
                                    <td>Paul Byrd</td>
                                    <td>Chief Financial Officer (CFO)</td>
                                    <td>New York</td>
                                    <td>64</td>
                                    <td>2010-06-09</td>
                                    <td>$725,000</td>
                                </tr>
                                <tr>
                                    <td>Gloria Little</td>
                                    <td>Systems Administrator</td>
                                    <td>New York</td>
                                    <td>59</td>
                                    <td>2009-04-10</td>
                                    <td>$237,500</td>
                                </tr>
                                <tr>
                                    <td>Bradley Greer</td>
                                    <td>Software Engineer</td>
                                    <td>London</td>
                                    <td>41</td>
                                    <td>2012-10-13</td>
                                    <td>$132,000</td>
                                </tr>
                                <tr>
                                    <td>Dai Rios</td>
                                    <td>Personnel Lead</td>
                                    <td>Edinburgh</td>
                                    <td>35</td>
                                    <td>2012-09-26</td>
                                    <td>$217,500</td>
                                </tr>
                                <tr>
                                    <td>Jenette Caldwell</td>
                                    <td>Development Lead</td>
                                    <td>New York</td>
                                    <td>30</td>
                                    <td>2011-09-03</td>
                                    <td>$345,000</td>
                                </tr>
                                <tr>
                                    <td>Yuri Berry</td>
                                    <td>Chief Marketing Officer (CMO)</td>
                                    <td>New York</td>
                                    <td>40</td>
                                    <td>2009-06-25</td>
                                    <td>$675,000</td>
                                </tr>
                                <tr>
                                    <td>Caesar Vance</td>
                                    <td>Pre-Sales Support</td>
                                    <td>New York</td>
                                    <td>21</td>
                                    <td>2011-12-12</td>
                                    <td>$106,450</td>
                                </tr>
                                <tr>
                                    <td>Doris Wilder</td>
                                    <td>Sales Assistant</td>
                                    <td>Sydney</td>
                                    <td>23</td>
                                    <td>2010-09-20</td>
                                    <td>$85,600</td>
                                </tr>
                                <tr>
                                    <td>Angelica Ramos</td>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td>London</td>
                                    <td>47</td>
                                    <td>2009-10-09</td>
                                    <td>$1,200,000</td>
                                </tr>
                                <tr>
                                    <td>Gavin Joyce</td>
                                    <td>Developer</td>
                                    <td>Edinburgh</td>
                                    <td>42</td>
                                    <td>2010-12-22</td>
                                    <td>$92,575</td>
                                </tr>
                                <tr>
                                    <td>Jennifer Chang</td>
                                    <td>Regional Director</td>
                                    <td>Singapore</td>
                                    <td>28</td>
                                    <td>2010-11-14</td>
                                    <td>$357,650</td>
                                </tr>
                                <tr>
                                    <td>Brenden Wagner</td>
                                    <td>Software Engineer</td>
                                    <td>San Francisco</td>
                                    <td>28</td>
                                    <td>2011-06-07</td>
                                    <td>$206,850</td>
                                </tr>
                                <tr>
                                    <td>Fiona Green</td>
                                    <td>Chief Operating Officer (COO)</td>
                                    <td>San Francisco</td>
                                    <td>48</td>
                                    <td>2010-03-11</td>
                                    <td>$850,000</td>
                                </tr>
                                <tr>
                                    <td>Shou Itou</td>
                                    <td>Regional Marketing</td>
                                    <td>Tokyo</td>
                                    <td>20</td>
                                    <td>2011-08-14</td>
                                    <td>$163,000</td>
                                </tr>
                                <tr>
                                    <td>Michelle House</td>
                                    <td>Integration Specialist</td>
                                    <td>Sydney</td>
                                    <td>37</td>
                                    <td>2011-06-02</td>
                                    <td>$95,400</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Row Created Callback Example end -->
            <!-- Child rows example start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Child Rows Example</h5>
                        <p>The DataTables API has a number of methods for attaching child rows to a parent row in the
                            DataTable. This can be used to show additional information about a row, useful for cases where you
                            wish to convey more information about a row than there is space for in the host table.</p>
                    </div>
                    <div class="card-body px-0">
                        <div class="app-datatable-default overflow-auto">
                            <table id="example4" class="display w-100 child-row-datatable">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Salary</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Child rows example and -->
        </div>
        <!-- Data Table end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- data table js -->
<script src="{{asset('backend/assets/vendor/datatable/jquery.dataTables.min.js')}}"></script>

<!-- js-->
<script src="{{asset('backend/assets/js/data_table.js')}}"></script>
@endsection
