@section('title', 'Password Create Bg')
@include('layout.head')

@include('layout.css')

<body>
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <main class="w-100 p-0">
            <div class="container-fluid">
                <!-- Create Password start -->
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="login-form-container">
                            <div class="mb-4">
                                <a class="logo d-inline-block" href="{{route('index')}}">
                                    <img src="{{asset('../assets/images/logo/1.png')}}" width="250" alt="#">
                                </a>
                            </div>
                            <div class="form_container">
                                <form class="app-form">
                                    <div class="mb-3 text-center">
                                        <h3>Create Password</h3>
                                        <p class="f-s-12 text-secondary">Your new password must be different from previous used password</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Current password</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">New password</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Confirm Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <div>
                                        <a href="{{route('index')}}" role="button" class="btn btn-primary w-100">Reset Password</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Create Password end -->
            </div>
        </main>
        <!-- Body main section ends -->
    </div>
</div>


</body>

@section('script')
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.6.3.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection



