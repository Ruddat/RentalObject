<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <!-- All meta and title start-->
@include('backend.layout.head')
<!-- meta and title end-->

    <!-- css start-->
@include('backend.layout.css')
<!-- css end-->

</head>

<body>
<!-- Loader start-->
<div class="app-wrapper">
    <div class="loader-wrapper">
        <div class="loader_16"></div>
    </div>
    <!-- Loader end-->

    <!-- Menu Navigation start -->
@include('backend.layout.sidebar')
<!-- Menu Navigation end -->


    <div class="app-content">
        <!-- Header Section start -->
    @include('backend.layout.header')
    <!-- Header Section end -->

        <!-- Main Section start -->
        <main>
            {{-- main body content --}}
            @yield('main-content')
        </main>
        <!-- Main Section end -->
    </div>

    <!-- tap on top -->
    <div class="go-top">
      <span class="progress-value">
        <i class="ti ti-arrow-up"></i>
      </span>
    </div>

    <!-- Footer Section start -->
     @include('backend.layout.footer')
    <!-- Footer Section end -->
</div>


<!-- scripts start-->

</body>

<!--customizer-->
<div id="customizer"></div>

<!-- scripts start-->
@include('backend.layout.script')
<!-- scripts end-->

@livewireScripts

</html>
