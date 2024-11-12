@extends('backend.layout.master')
@section('title', 'Blank')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Blank</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-newspaper f-s-16"></i> Other Pages
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Blank</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Blank start -->
        <div class="row">
            <!-- Default Card start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Default Card</h5>
                    </div>
                    <div class="card-body">
                        <h6>Where does it come from ?</h6>
                        <p class="text-secondary"> Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                            roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard
                            McClinton, a Latin professor at Hampered-Sydney College in Virginia, looked up one of the more
                            obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the
                            word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections
                            1.10.32 and 1.10.33 of "de Minibus Bono rum et Malo rum" (The Extremes of Good and Evil) by Cicero,
                            written in 45 BC. This book is a treatise on the theory of ethics, very popular during the
                            Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in
                            section 1.10.32 </p>
                    </div>
                    <div class="card-footer">
                        <p class="float-start text-secondary p-t-10 mb-0">1 days Ago</p>

                        <a href="#" class="float-end fw-bold"> Read More </a>
                    </div>

                </div>
            </div>

            <!-- Default Card end -->
        </div>
        <!-- Blank end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection

