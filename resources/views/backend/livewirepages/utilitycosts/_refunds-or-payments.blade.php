@extends('backend.layout.master')
@section('title', 'Zahlungen & Erstattungen')
@section('css')
    <!-- Hier können spezifische CSS-Dateien oder Stile eingebunden werden -->
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12">
                <h4 class="main-title">Zahlungen & Erstattungen verwalten</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <i class="ph-duotone ph-wallet f-s-16"></i> Finanzen
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Zahlungen & Erstattungen</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <!-- Main content start -->

        @livewire('utility-costs.refunds-or-payments-component')


    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection

