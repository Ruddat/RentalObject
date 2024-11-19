@section('title', 'Coming Soon')
@include('backend.layout.head')

@include('backend.layout.css')

 <div class="w-100">
     <div class="container-fluid">
         <!-- Ra-admin Coming Soon start -->
         <div class="row">
             <div class="col-12 p-0">
                 <div class="coming-soon">
                     <div class="coundown-timmer p-5">
                         <div class="content">
                             <h2 class="text-dark">Ra-admin Comming Soon</h2>
                             <p class="font-coming-p">
                                 Our Website Under Construction, We Are Working on it, We Will Ready to Lunch it After
                             </p>
                         </div>
                         <div class="timmer-content">
                             <div class="time">
                                 <span id="days" class="numbers">10</span>
                                 <span>Days</span>
                             </div>
                             <div class="time">
                                 <span id="hours" class="numbers">50</span>
                                 <span>Hours</span>
                             </div>
                             <div class="time">
                                 <span id="minutes" class="numbers">00</span>
                                 <span>Minutes</span>
                             </div>
                             <div class="time">
                                 <span id="seconds" class="numbers">00</span>
                                 <span>Second</span>
                             </div>
                         </div>

                         <!-- <h3 class="text-secondary mb-4">Subscribe Now to Get Updates</h3> -->
                         <div class="app-form mb-3 mt-4">
                             <input type="email" class="form-control form-control-lg m-auto text-center coming-soon-input" placeholder="Enter an Email" id="username">

                         </div>
                         <a class="btn btn-primary btn-xl" href="{{ route('coming_soon') }}">Subscribe Now</a>

                     </div>
                 </div>
             </div>
         </div>
         <!-- Ra-admin Coming Soon end -->
     </div>
 </div>
@section('script')
<!--js-->
<script src="{{asset('backend/assets/js/coming_soon.js')}}"></script>

<!-- Bootstrap js-->
<script src="{{asset('backend/assets/vendor/bootstrap/bootstrap.bundle.min.js')}}"></script>
@endsection


