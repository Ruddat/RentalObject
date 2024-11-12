@extends('layout.master')
@section('title', 'Prismjs')
@section('css')
    <!-- prism css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/vendor/prism/prism.min.css')}}">
@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Prismjs</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                              <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Prismjs</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->
        <div class="row">
            <!-- Dual Listboxes-html start -->
            <div class="col-xxl-6 col-xl-6 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Dual Listboxes-html</h5>
                            </div>
                            <div class="card-body">
                                <div>
                          <pre>
  <code class="language-html">&lt;div class="container-fluid"&gt;
    &lt;div class="row"&gt;
      &lt;div class="col-md-6"&gt;
        &lt;div class="card"&gt;
          &lt;div class="card-header code-header" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"&gt;
            &lt;h5&gt;Select by class&lt;/h5&gt;
            &lt;i class="ti ti-code source" data-source="dlb1"&l&gt;&lt;/i&gt;
          &lt;/div&gt;
          &lt;div class="card-body"&gt;
            &lt;select class="select1" multiple&gt;
              &lt;option value="1"&gt;One&lt;/option&gt;
              &lt;option value="2"&gt;Two&lt;/option&gt;
              &lt;option value="3"&gt;Three&lt;/option&gt;
            &lt;/select&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Dual Listboxes-css</h5>
                            </div>
                            <div class="card-body">
                        <pre>
  <code class="language-css">.dual-listbox .dual-listbox__button {
    border-radius: 5px;
    background-color: rgba(var(--primary), 0.9);
    padding: 7px 12px;
  }
  .dual-listbox .dual-listbox__button:hover {
    background-color: rgba(var(--primary), 1);
    transition: all 0.3s ease;
  }

  .dual-listbox .dual-listbox__item.dual-listbox__item--selected {
    background-color: rgba(var(--primary), 0.1);
    color: rgba(var(--primary), 1);
  }</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dual Listboxes-html end -->
            <!-- Dual Listboxes-scss start -->
            <div class="col-xxl-6 col-xl-6 col-lg-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Dual Listboxes-scss</h5>
                            </div>
                            <div class="card-body">
                        <pre class="h-390">
<code class="language-css">.dual-listbox {
     width: 100%;
     .dual-listbox__container{
       display: flex;
       align-items: center;
       justify-content: space-between;
       flex-wrap: unset;
     }
     .dual-listbox__search{
       color: rgba(var(--secondary), 1);
       padding: 0.4rem 0.75rem;
       border: 1px solid var(--border_color);
       border-radius: 0.3rem;
       &:focus{
         color: rgba(var(--dark), 1);
         box-shadow: 0 0 0 0.25rem rgba(var(--primary), 0.3);
         border: 1px solid rgba(var(--primary), 1);
         outline: none;
       }
     }
   }
   .dual-listbox .dual-listbox__title {
     font-weight: 600;
     color: rgba(var(--dark), 0.60);
     padding: 0.6rem 1rem;
     border-radius: 0.3rem 0.3rem 0 0;
     border-color: rgba(var(--dark), 0.20);
  }
   .dual-listbox .dual-listbox__available, .dual-listbox .dual-listbox__selected{
     border-radius: 0 0 0.3rem 0.3rem;
     border: 1px solid rgba(var(--dark), 0.20);
   }</code></pre>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Dual Listboxes-javascript</h5>
                            </div>
                            <div class="card-body">
                        <pre><code class="language-javascript">var dlb4 = new DualListbox(".select4", {
     showSortButtons: true,
  });
  var sources = document.querySelectorAll(".source");
  for (var i = 0; i &lt; sources.length; i++) {
    var source = sources[i];
    source.addEventListener("click", function(event) {
      var code = document.querySelector("." + event.currentTarget.dataset.source);
      code.classList.toggle("open");
    });
  }</code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Dual Listboxes-scss end -->
        </div>
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!-- prism js-->
<script src="{{asset('assets/vendor/prism/prism.min.js')}}"></script>
@endsection
