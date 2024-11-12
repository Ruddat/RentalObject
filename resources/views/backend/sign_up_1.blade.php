@section('title', 'Sign Up Bg')

@include('layout.head')

@include('layout.css')

<body>
<div class="app-wrapper d-block">
    <div class="">
        <!-- Body main section starts -->
        <main class="w-100 p-0">
            <!-- Create Account start -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 p-0">
                        <div class="login-form-container">
                            <div class="mb-4">
                                <a class="logo d-inline-block" href="{{route('index')}}">
                                    <img src="{{asset('../assets/images/logo/1.png')}}" width="250" alt="#">
                                </a>
                            </div>
                            <div class="form_container">
                                <form class="app-form p-3">
                                    <div class="mb-3 text-center">
                                        <h3>Create Account</h3>
                                        <p class="f-s-12 text-secondary">Get started For Free Today.</p>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" placeholder="Enter Your Username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control" placeholder="Enter Your Email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" placeholder="Enter Your Password">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="formCheck1">
                                        <label class="form-check-label" for="formCheck1">remember me</label>
                                    </div>
                                    <div>
                                        <a href="{{route('index')}}" role="button" class="btn btn-primary w-100">Submit</a>
                                    </div>
                                    <div class="app-divider-v justify-content-center">
                                        <p>OR</p>
                                    </div>
                                    <div class="mb-3">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-primary icon-btn b-r-5 m-1"><i class="ti ti-brand-facebook text-white"></i></button>
                                            <button type="button" class="btn btn-danger icon-btn b-r-5 m-1"><i class="ti ti-brand-google text-white"></i></button>
                                            <button type="button" class="btn btn-dark icon-btn b-r-5 m-1"><i class="ti ti-brand-github text-white"></i></button>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <a href="{{route('terms_condition')}}" class="text-secondary text-decoration-underline">Terms of use &amp; Conditions</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Create Account end -->
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
