@section('title', 'Password Reset')
@include('backend.layout.head')

@include('backend.layout.css')

<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <div class="main-container">




        @livewire('auth.forgot-password')


    </div>
</div>
@livewireScripts
</body>

@section('script')
    <!-- latest jquery-->
    <script src="{{asset('backend/assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('backend/assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection

