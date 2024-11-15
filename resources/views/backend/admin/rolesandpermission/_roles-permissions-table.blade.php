@extends('backend.layout.master')
@section('title', 'Blank')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">


        @livewire('backend.admin.roles-and-permissions.roles-permissions-table')

    </div>
@endsection





@section('script')
    <!--customizer-->
    <div id="customizer"></div>




@endsection

