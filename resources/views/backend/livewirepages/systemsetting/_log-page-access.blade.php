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

            @livewire('backend.system-setting.log-page-access-table')

        </div>
        <!-- tables-end  -->
    </div>

<style>
/* resources/css/custom-pagination.css */
.pagination-container {
    display: flex;
    justify-content: center;
    margin-top: 1rem;
}

.pagination-nav {
    display: flex;
    align-items: center;
}

.pagination-prev, .pagination-next {
    margin: 0 1rem;
}

.pagination-button {
    padding: 0.5rem 1rem;
    border: none;
    border-radius: 4px;
    background-color: #007bff;
    color: #ffffff;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.pagination-button.disabled {
    background-color: #6c757d;
    cursor: not-allowed;
}

.pagination-button.active:hover {
    background-color: #0056b3;
}

.pagination-info {
    font-weight: bold;
}
</style>

@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

{{--    <!-- table-js  -->--}}
{{--    <script src="{{asset('backend/assets/js/table.js')}}"></script>--}}
@endsection
