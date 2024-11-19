@extends('layout.master')
@section('title', 'Grid')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Grid</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Grid</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Grid start -->
        <div class="row grid-page">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Grid Options</h5>
                        <p class="mt-1 f-m-light"></p>Bootstrap grid system allow all six breakpoints, and any breakpoints
                        you can customize.
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-secondary">
                                <thead class="grids">
                                <tr>
                                    <th></th>
                                    <th class="app-grid">Extra small<br><small><i class="fa-solid fa-less-than"></i>
                                            576px</small></th>
                                    <th class="app-grid">Small<br><small><i
                                                class="fa-solid fa-greater-than-equal"></i>576px</small></th>
                                    <th class="app-grid">Medium<br><small><i
                                                class="fa-solid fa-greater-than-equal"></i>768px</small></th>
                                    <th class="app-grid">Large<br><small><i
                                                class="fa-solid fa-greater-than-equal"></i>992px</small></th>
                                    <th class="app-grid">Extra large<br><small><i
                                                class="fa-solid fa-greater-than-equal"></i>1200px</small></th>
                                    <th class="app-grid">Extra extra large<br><small><i
                                                class="fa-solid fa-greater-than-equal"></i>1400px</small></th>
                                </tr>
                                </thead>

                                <tbody class="grids">
                                <tr class="app-grid-box">
                                    <th class="text-nowrap fw-600" scope="row">Grid behavior</th>
                                    <td>Horizontal at all times</td>
                                    <td colspan="5">Collapsed to start, horizontal above breakpoints</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Max container width</th>
                                    <td>None (auto)</td>
                                    <td>540px</td>
                                    <td>720px</td>
                                    <td>960px</td>
                                    <td>1140px</td>
                                    <td>1320px</td>
                                </tr>
                                <tr class="app-grid-box">
                                    <th class="text-nowrap" scope="row">Class prefix</th>
                                    <td>
                                        <div class="text-danger">.col-</div>
                                    </td>
                                    <td>
                                        <div class="text-danger">.col-sm-</div>
                                    </td>
                                    <td>
                                        <div class="text-danger">.col-md-</div>
                                    </td>
                                    <td>
                                        <div class="text-danger">.col-lg-</div>
                                    </td>
                                    <td>
                                        <div class="text-danger">.col-xl-</div>
                                    </td>
                                    <td>
                                        <div class="text-danger">.col-xxl-</div>
                                    </td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row"># of columns</th>
                                    <td colspan="6">12</td>
                                </tr>
                                <tr class="app-grid-box">
                                    <th class="text-nowrap" scope="row">Gutter width</th>
                                    <td colspan="6">1.5rem (.75rem on left and right)</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Nestable</th>
                                    <td colspan="6">Yes</td>
                                </tr>
                                <tr class="app-grid-box">
                                    <th class="text-nowrap" scope="row">Offsets</th>
                                    <td colspan="6">Yes</td>
                                </tr>
                                <tr>
                                    <th class="text-nowrap" scope="row">Column ordering</th>
                                    <td colspan="6">Yes</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="m-1">Grid For Column</h5>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="row flex-wrap">

                                <div class="col-md-6">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-6</div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-6</div>
                                </div>
                                <div class="col-md-7">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-7</div>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-5</div>
                                </div>

                                <div class="col-md-8 ">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-8</div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-4</div>
                                </div>
                                <div class="col-md-9">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-9</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-3</div>
                                </div>
                                <div class="col-md-10">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-10</div>
                                </div>
                                <div class="col-md-2">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-2</div>
                                </div>
                                <div class="col-md-11">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-11</div>
                                </div>
                                <div class="col-md-1">
                                    <div class="text-center p-2 mb-2 bg-light-secondary b-r-4">col-md-1</div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center p-2 bg-light-secondary b-r-4">col-md-12</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title m-1">Equal-width</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-md-6</div>
                            </div>
                            <div class="col-6">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-md-6</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-md-4</div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-md-4</div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-md-4</div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-md-6">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title">Setting one column width </h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-md-3</div>
                            </div>
                            <div class="col-6">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-md-6 (wider)</div>
                            </div>
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-md-3</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col</div>
                            </div>
                            <div class="col -5">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-md-5 (wider)</div>
                            </div>
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Variable width content </h5>
                    </div>
                    <div class="card-body">

                        <div class="row justify-content-md-center">
                            <div class="col col-lg-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-lg-4</div>
                            </div>

                            <div class="col-md-auto">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-md-auto</div>
                            </div>

                            <div class="col col-lg-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-lg-4</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col</div>
                            </div>

                            <div class="col-md-auto">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-md-auto</div>
                            </div>

                            <div class="col col-lg-2">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-lg-2</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All breakpoints </h5>
                    </div>
                    <div class="card-body">

                        <div class="row">
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col</div>
                            </div>
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col</div>
                            </div>
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col</div>
                            </div>
                            <div class="col">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col</div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-8">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col</div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-4</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Stacked to horizontal </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-sm-8</div>
                            </div>
                            <div class="col-sm-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-sm-4</div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-sm">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-sm</div>
                            </div>
                            <div class="col-sm">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-sm</div>
                            </div>
                            <div class="col-sm">
                                <div class="text-center p-2 bg-light-secondary b-r-4">col-sm</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Mix and match
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-sm-8</div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-6 col-md-4</div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6 col-md-4">
                                    <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-6 col-md-4</div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-6 col-md-4</div>
                                </div>
                                <div class="col-6 col-md-4">
                                    <div class="text-center p-2 bg-light-secondary b-r-4 mb-2">col-6 col-md-4</div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-6">
                                    <div class="text-center p-2 bg-light-secondary b-r-4">col-6</div>
                                </div>
                                <div class="col-6">
                                    <div class="text-center p-2 bg-light-secondary b-r-4">col-6</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Nesting </h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-sm-3 ">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3"> Level 1: .col-sm-3</div>
                            </div>
                            <div class="col-sm-9 ">
                                <div class="row">
                                    <div class="col-8 col-sm-6 ">
                                        <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">Level 2: .col-8 .col-sm-6</div>
                                    </div>
                                    <div class="col-4 col-sm-6 ">
                                        <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">Level 2: .col-4 .col-sm-6</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Horizontal alignment </h5>
                    </div>
                    <div class="card-body">
                        <div class="row justify-content-start p-2">
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4"> One of two columns </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4"> One of two columns </div>
                            </div>
                        </div>

                        <div class="row justify-content-center p-2">
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4"> One of two columns </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4"> One of two columns </div>
                            </div>
                        </div>

                        <div class="row justify-content-end p-2">
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4"> One of two columns </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4"> One of two columns </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Vertical alignment</h5>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-start">
                            <div class="col align-self-start">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3"> One of three columns </div>
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3"> One of three columns </div>
                            </div>
                            <div class="col align-self-center">
                                <div class="text-center p-2 bg-light-secondary b-r-4  mb-3"> One of three columns </div>
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3"> One of three columns </div>
                            </div>
                            <div class="col align-self-end">
                                <div class="text-center p-2 bg-light-secondary b-r-4  mb-3"> One of three columns </div>
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3"> One of three columns </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Offset classes</h5>
                    </div>
                    <div class="card-body">
                        <div class="row p-2">
                            <div class="col-md-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-4</div>
                            </div>
                            <div class="col-md-4 offset-md-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-4 .offset-md-4</div>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-3 offset-md-3">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-3 .offset-md-3</div>
                            </div>
                            <div class="col-md-3 offset-md-3">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-3 .offset-md-3 </div>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-6 offset-md-3">
                                <div class="text-center p-2 bg-light-secondary b-r-4">
                                    .col-md-6 .offset-md-3</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"> Margin utilities </h5>
                    </div>

                    <div class="card-body">
                        <div class="row p-2">
                            <div class="col-md-4">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-4</div>
                            </div>
                            <div class="col-md-4 ms-auto">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-4 .ms-auto</div>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-md-3 ms-md-auto">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-3 .ms-md-auto</div>
                            </div>
                            <div class="col-md-3 ms-md-auto">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-md-3 .ms-md-auto</div>
                            </div>
                        </div>
                        <div class="row p-2">
                            <div class="col-auto me-auto">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-auto .me-auto</div>
                            </div>
                            <div class="col-auto">
                                <div class="text-center p-2 bg-light-secondary b-r-4 mb-3">.col-auto</div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
        <!-- Grid end -->

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
