<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ env('APP_LOCALE', 'en') }}" lang="{{ env('APP_LOCALE', 'en') }}">


<head>
    <meta charset="utf-8">
    <title>Homelengo - Real Estate HTML Template</title>
    <meta name="keywords" content="HTML, CSS, JavaScript, Bootstrap">
    <meta name="description" content="Real Estate HTML Template">
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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

@if(isset($page) && ($page === 'add-property' || $page === 'home-02'))
<body class="body bg-surface">
@endif

@if(isset($page) && ($page === 'dashboard' || $page === 'home-02'))
<body class="body bg-surface counter-scroll">
@endif


@if(isset($page) && $page === 'start-page')
<div id="wrapper">
    <div id="pagee" class="clearfix">
@endif


@if (Route::is('add-property', 'dashboard'))
    <div id="wrapper">
        <div id="page" class="clearfix">
            <div class="layout-wrap">
@endif

{{-- Füge den Header nur hinzu, wenn nicht auf der Startseite --}}
@if(isset($page) && ($page === 'start-page' || $page === 'home-02'))
@include('rentalobj.layout.partials.header')
@endif

@if(isset($page) && ($page === 'home-03' || $page === 'home-04'))
@include('rentalobj.layout.partials.fixed-header')
@endif


@if(isset($page) && $page === 'add-property')
@include('rentalobj.layout.partials.inner-header')
@include('rentalobj.layout.partials.sidebar-dashboard')
@endif



@yield('content')



@include('rentalobj.layout.partials.footer-scripts')


</body>

</html>
