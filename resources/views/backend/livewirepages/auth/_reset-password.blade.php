@section('title', 'Password Reset')
@include('backend.layout.head')

@include('backend.layout.css')

<body class="sign-in-bg">
<div class="app-wrapper d-block">
    <div class="main-container">
        <!-- Reset Your Password start -->
        <div class="container">
            <div class="row sign-in-content-bg">
                <div class="col-lg-6 image-contentbox d-none d-lg-block">
                    <div class="form-container">
                        <div class="signup-content mt-4">
                            <span>
                                <img src="{{asset('backend/assets/images/logo/1.png')}}" alt="" class="img-fluid ">
                            </span>
                        </div>

                        <div class="signup-bg-img">
                            <img src="{{asset('backend/assets/images/login/03.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 form-contentbox">

                    @livewire('auth.reset-password', ['token' => $token])

                </div>
            </div>
        </div>
        <!-- Reset Your Password end -->
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













