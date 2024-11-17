<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ env('APP_LOCALE', 'en') }}" lang="{{ env('APP_LOCALE', 'en') }}">


<head>
    <meta charset="utf-8">
    <title>Homelengo - Real Estate HTML Template</title>
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap">
    <meta name="description" content="Real Estate HTML Template">
    <meta name="author" content="{{ config('app.settings.owner_name', 'Default Owner') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="{{ url('build/images/logo/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('build/images/logo/favicon.png') }}">

    @include('rentalobj.layout.partials.head')

</head>


@component('rentalobj.components.loader')
@endcomponent


@if(isset($page) && ($page === 'start-page'))
<body class="body">
@endif

@if(isset($page) && ($page === 'add-property' || $page === 'home-02'|| $page === 'utility-cost-table' || $page === 'heating-cost-management' || $page === 'billing-header-form' || $page === 'tenant-payments' || $page === 'rental-object-table' || $page === 'billing-generation' || $page === 'billing-calculation' || $page === 'tenant-table' || $page === 'sys-settings'))
<body class="body bg-surface">
@endif

@if(isset($page) && ($page === 'dashboard' || $page === 'home-02'))
<body class="body bg-surface counter-scroll">
@endif


@if(isset($page) && $page === 'start-page')
<div id="wrapper">
    <div id="pagee" class="clearfix">
@endif


@if (Route::is('add-property', 'blog-manager.index', 'post.create', 'post.edit', 'sys-settings', 'dashboard', 'billing-header-form', 'tenant-payments', 'rental-object-table', 'billing-generation', 'billing-calculation', 'heating-cost-management', 'utility-cost-table', 'tenant-table', 'utility-cost-recording'))
    <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="layout-wrap">
@endif

{{-- Füge den Header nur hinzu, wenn nicht auf der Startseite --}}
@if(isset($page) && ($page === 'start-page' || $page === 'home-02' || $page === 'blog-manager'))
@include('rentalobj.layout.partials.header')
@endif

@if(isset($page) && ($page === 'home-03' || $page === 'home-04'))
@include('rentalobj.layout.partials.fixed-header')
@endif


@if(isset($page) && $page === 'add-property' || $page === 'sys-settings' || $page === 'dashboard' || $page === 'utility-cost-table' || $page === 'heating-cost-management' || $page === 'billing-header-form' || $page === 'tenant-payments' || $page === 'rental-object-table' || $page === 'billing-generation' || $page === 'billing-calculation' || $page === 'tenant-table')
@include('rentalobj.layout.partials.inner-header')
@include('rentalobj.layout.partials.sidebar-dashboard')
@endif


@yield('content')



@if (Route::is('sys-settings', 'add-property', 'dashboard', 'billing-header-form', 'tenant-payments', 'rental-object-table', 'billing-generation', 'billing-calculation', 'heating-cost-management', 'utility-cost-recording'))

<div class="overlay-dashboard"></div>

</div>
</div>
<!-- /#page -->

</div>

@endif

{{-- Füge den Footer nur hinzu, wenn nicht auf der Startseite --}}



@if (Route::is('index', 'home-02', 'blog.show', 'blog-manager-12', 'dashboard'))

@include('rentalobj.layout.partials.footer')
@include('rentalobj.layout.partials.footer-scripts')
@else

12345
@include('rentalobj.layout.partials.footer-scripts-dashboard')
@endif



</body>

</html>
