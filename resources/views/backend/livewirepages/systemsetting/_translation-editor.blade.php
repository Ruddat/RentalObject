@extends('backend.layout.master')
@section('title', 'Blank')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">System Einstellungen</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-newspaper f-s-16"></i> Other Pages
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Blank</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Blank start -->
        <div class="row">
            <!-- Default Card start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Übersetzungen</h5>
                    </div>
                    <div class="card-body">

                        @livewire('system-settings.translation-editor')

                    <div class="card-footer">
                        <p class="float-start text-secondary p-t-10 mb-0">1 days Ago</p>

                        <a href="#" class="float-end fw-bold"> Read More </a>
                    </div>

                </div>
            </div>

            <!-- Default Card end -->
        </div>
        <!-- Blank end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection

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
