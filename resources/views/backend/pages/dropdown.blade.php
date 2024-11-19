@extends('layout.master')
@section('title', 'Dropdown')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Dropdown</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Dropdown</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Dropdown start -->
        <div class="row">
            <!-- Single Button and Link Dropdown start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Single Button and Link Dropdown</h5>
                        <a data-bs-toggle="collapse" href="#dropdown1" aria-expanded="false" aria-controls="dropdown1">
                            <i class="ti ti-code source" data-source="dropdown"></i></a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dropdown button
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>

                        </div>
                        <div class="dropdown">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                Dropdown link
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <pre class="dropdown collapse mt-3" id="dropdown1">
 <code class="language-html">
&lt;div class="card"&gt;
  &lt;div class="card-header code-header"&gt;
 &lt;h5&gt;Single Button and Link Dropdown&lt;/h5&gt;
&lt;/div&gt;
&lt;div class="card-body d-flex flex-wrap gap-2"&gt;
  &lt;div class="dropdown"&gt;
  &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
   aria-expanded="false"&gt;
   Dropdown button
   &lt;/button&gt;
  &lt;ul class="dropdown-menu"&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
  &lt;/div&gt;
 &lt;div class="dropdown"&gt;
   &lt;a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
    aria-expanded="false"&gt;
    Dropdown link
  &lt;/a&gt;
  &lt;ul class="dropdown-menu"&gt;
 &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
 &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
 &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
 &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;
</code>
 </pre>
            </div>
            <!-- Single Button and Link Dropdown end -->

            <!-- drop down2 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Dropdown submenu Menu</h5>
                        <a data-bs-toggle="collapse" href="#dropdown2" aria-expanded="false" aria-controls="dropdown2">
                            <i class="ti ti-code source" data-source="drop2"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <div class="app-dropdown">
                            <button class="btn btn-primary border-0 " type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                Clickable Submenu
                            </button>
                            <div class="dropdown-menu mb-3">
                                <a href="#" class="dropdown-item">
                                    <span> Action</span>
                                    <i class="ti ti-user-plus ms-auto"></i>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>Another action</span>
                                    <i class="ti ti-circles-relation ms-auto"></i>
                                </a>
                                <a href="#" class="dropdown-item">
                                    <span>Something else here</span>
                                    <i class="ti ti-message-circle ms-auto"></i>
                                </a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item border-0" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>More Option</span>
                                    <i class="ti ti-arrow-badge-right ms-auto"></i>
                                </a>
                                <div class="dropdown-menu sub-menu">
                                    <a href="#" class="dropdown-item">
                                        <span> Action</span>
                                        <i class="ti ti-user-plus ms-auto"></i>
                                    </a>
                                    <a href="#" class="dropdown-item">
                                        <span>Another action</span>
                                        <i class="ti ti-circles-relation ms-auto"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="hover-dropdown app-hover-dropdown">
                            <button class="btn btn-primary dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                                    data-trigger="hover" aria-expanded="false">
                                Hoverable Dropdown
                            </button>
                            <ul class="dropdown-menu bg-dark">
                                <li class="dropdown-item">
                                    <a href="#">
                                        <span> Action</span>
                                    </a>
                                    <i class="ti ti-user-plus ms-auto"></i>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">
                                        <span>Another action</span>
                                    </a>
                                    <i class="ti ti-circles-relation ms-auto"></i>
                                </li>
                                <li class="dropdown-item">
                                    <a href="#">
                                        <span>Something else here</span>
                                    </a>
                                    <i class="ti ti-message-circle ms-auto"></i>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li class="hover-dropdown">
                                    <a role="button" class="dropdown-item waves-effect waves-light" data-bs-toggle="dropdown"
                                       data-trigger="hover" aria-expanded="false">
                                        More Option
                                    </a>
                                    <ul class="dropdown-menu hover-submenu bg-dark">
                                        <li class="dropdown-item">
                                            <a href="#">
                                                <span> Action</span>
                                            </a>
                                            <i class="ti ti-user-plus ms-auto"></i>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">
                                                <span>Another action</span>
                                            </a>
                                            <i class="ti ti-circles-relation ms-auto"></i>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">
                                                <span>Something else here</span>
                                            </a>
                                            <i class="ti ti-message-circle ms-auto"></i>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>

                    </div>
                </div>

                <pre class="drop2 collapse mt-3" id="dropdown2">
                  <code class="language-html">

                      &lt;div class="card"&gt;
                       &lt;div class="card-header"&gt;
                       &lt;h5&gt;Dropdown submenu Menu&lt;/h5&gt;
                       &lt;/div&gt;
                       &lt;div class="card-body d-flex flex-wrap gap-2"&gt;
                       &lt;div class="app-dropdown"&gt;
                       &lt;button class="btn btn-primary border-0 " type="button" data-bs-toggle="dropdown"
                       data-bs-auto-close="outside" aria-expanded="false"&gt;
                       Clickable Submenu
                       &lt;/button&gt;
                       &lt;div class="dropdown-menu mb-3"&gt;
                       &lt;a href="#" class="dropdown-item"&gt;
                       &lt;span&gt; Action&lt;/span&gt;
                       &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                       &lt;/a&gt;
                       &lt;a href="#" class="dropdown-item"&gt;
                       &lt;span&gt;Another action&lt;/span&gt;
                       &lt;i class="ti ti-circles-relation ms-auto"&gt;&lt;/i&gt;
                       &lt;/a&gt;
                       &lt;a href="#" class="dropdown-item"&gt;
                       &lt;span&gt;Something else here&lt;/span&gt;
                       &lt;i class="ti ti-message-circle ms-auto"&gt;&lt;/i&gt;
                       &lt;/a&gt;
                       &lt;hr class="dropdown-divider"&gt;
                       &lt;a class="dropdown-item border-0" role="button" data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span&gt;More Option&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-right ms-auto"&gt;&lt;/i&gt;
                       &lt;/a&gt;
                       &lt;div class="dropdown-menu sub-menu"&gt;
                       &lt;a href="#" class="dropdown-item"&gt;
                       &lt;span&gt; Action&lt;/span&gt;
                       &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                       &lt;/a&gt;
                       &lt;a href="#" class="dropdown-item"&gt;
                       &lt;span&gt;Another action&lt;/span&gt;
                       &lt;i class="ti ti-circles-relation ms-auto"&gt;&lt;/i&gt;
                       &lt;/a&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;

                       &lt;div class="hover-dropdown app-hover-dropdown"&gt;
                       &lt;button class="btn btn-primary dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown"
                       data-trigger="hover" aria-expanded="false"&gt;
                       Hoverable Dropdown
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu bg-dark"&gt;
                       &lt;li class="dropdown-item"&gt;
                       &lt;a href="#"&gt;
                       &lt;span&gt; Action&lt;/span&gt;
                       &lt;/a&gt;
                       &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                       &lt;/li&gt;
                       &lt;li class="dropdown-item"&gt;
                       &lt;a href="#"&gt;
                       &lt;span&gt;Another action&lt;/span&gt;
                       &lt;/a&gt;
                       &lt;i class="ti ti-circles-relation ms-auto"&gt;&lt;/i&gt;
                       &lt;/li&gt;
                       &lt;li class="dropdown-item"&gt;
                       &lt;a href="#"&gt;
                       &lt;span&gt;Something else here&lt;/span&gt;
                       &lt;/a&gt;
                       &lt;i class="ti ti-message-circle ms-auto"&gt;&lt;/i&gt;
                       &lt;/li&gt;
                       &lt;li&gt;
                       &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li class="hover-dropdown"&gt;
                       &lt;a role="button" class="dropdown-item waves-effect waves-light" data-bs-toggle="dropdown"
                       data-trigger="hover" aria-expanded="false"&gt;
                       More Option
                       &lt;/a&gt;
                       &lt;ul class="dropdown-menu hover-submenu bg-dark"&gt;
                       &lt;li class="dropdown-item"&gt;
                       &lt;a href="#"&gt;
                       &lt;span&gt; Action&lt;/span&gt;
                       &lt;/a&gt;
                       &lt;i class="ti ti-user-plus ms-auto"&gt;&lt;/i&gt;
                       &lt;/li&gt;
                       &lt;li class="dropdown-item"&gt;
                       &lt;a href="#"&gt;
                       &lt;span&gt;Another action&lt;/span&gt;
                       &lt;/a&gt;
                       &lt;i class="ti ti-circles-relation ms-auto"&gt;&lt;/i&gt;
                       &lt;/li&gt;
                       &lt;li class="dropdown-item"&gt;
                       &lt;a href="#"&gt;
                       &lt;span&gt;Something else here&lt;/span&gt;
                       &lt;/a&gt;
                       &lt;i class="ti ti-message-circle ms-auto"&gt;&lt;/i&gt;
                       &lt;/li&gt;
                       &lt;/ul&gt;
                       &lt;/li&gt;

                       &lt;/ul&gt;
                       &lt;/div&gt;

                       &lt;/div&gt;
                      &lt;/div&gt;

                  </code>
              </pre>
            </div>

            <!-- dropdown 3 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Menu Content Dropdown</h5>
                        <a data-bs-toggle="collapse" href="#dropdown3" aria-expanded="false" aria-controls="dropdown3">
                            <i class="ti ti-code source" data-source="drop3"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Header <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <div class="dropdown-header noti-title">
                                        <h5 class="text-muted text-truncate mn-0">Welcome Jessie!</h5>
                                    </div>
                                    <!-- item-->
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Text <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-md p-3">
                                    <p>
                                        Some example text that's free-flowing within the dropdown menu.
                                    </p>
                                    <p class="mb-0">
                                        And this is more example text.
                                    </p>
                                </div>
                            </div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    Forms <i class="mdi mdi-chevron-down"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-md form-dropdown p-4">
                                    <form>
                                        <div class="mb-2">
                                            <label class="form-label" for="exampleDropdownFormEmail">Email address</label>
                                            <input type="email" class="form-control" id="exampleDropdownFormEmail"
                                                   placeholder="email@example.com">
                                        </div>
                                        <div class="mb-2">
                                            <label class="form-label" for="exampleDropdownFormPassword">Password</label>
                                            <input type="password" class="form-control" id="exampleDropdownFormPassword"
                                                   placeholder="Password">
                                        </div>
                                        <div class="mb-2">
                                            <div class="form-check custom-checkbox">
                                                <input type="checkbox" class="form-check-input" id="rememberdropdownCheck">
                                                <label class="form-check-label" for="rememberdropdownCheck">Remember me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign in</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <pre class="drop3 collapse mt-3" id="dropdown3">
                  <code class="language-html">

                      &lt;div class="card"&gt;
                       &lt;div class="card-header"&gt;
                       &lt;h5&gt;Menu Content Dropdown&lt;/h5&gt;
                       &lt;/div&gt;
                       &lt;div class="card-body"&gt;
                       &lt;div class="d-flex flex-wrap gap-2"&gt;
                       &lt;div class="btn-group btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"&gt;
                       Header &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;div class="dropdown-menu"&gt;
                       &lt;div class="dropdown-header noti-title"&gt;
                       &lt;h5 class="text-muted text-truncate mn-0"&gt;Welcome Jessie!&lt;/h5&gt;
                       &lt;/div&gt;
                       &lt;!-- item--&gt;
                       &lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;
                       &lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;
                       &lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;
                       &lt;div class="dropdown-divider"&gt;&lt;/div&gt;
                       &lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;
                       &lt;div class="btn-group btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"&gt;
                       Text &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;div class="dropdown-menu dropdown-menu-md p-3"&gt;
                       &lt;p&gt;
                       Some example text that's free-flowing within the dropdown menu.
                       &lt;/p&gt;
                       &lt;p class="mb-0"&gt;
                       And this is more example text.
                       &lt;/p&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;
                       &lt;div class="btn-group btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"&gt;
                       Forms &lt;i class="mdi mdi-chevron-down"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;div class="dropdown-menu dropdown-menu-md form-dropdown p-4"&gt;
                       &lt;form&gt;
                       &lt;div class="mb-2"&gt;
                       &lt;label class="form-label" for="exampleDropdownFormEmail"&gt;Email address&lt;/label&gt;
                       &lt;input type="email" class="form-control" id="exampleDropdownFormEmail"
                       placeholder="email@example.com"&gt;
                       &lt;/div&gt;
                       &lt;div class="mb-2"&gt;
                       &lt;label class="form-label" for="exampleDropdownFormPassword"&gt;Password&lt;/label&gt;
                       &lt;input type="password" class="form-control" id="exampleDropdownFormPassword"
                       placeholder="Password"&gt;
                       &lt;/div&gt;
                       &lt;div class="mb-2"&gt;
                       &lt;div class="form-check custom-checkbox"&gt;
                       &lt;input type="checkbox" class="form-check-input" id="rememberdropdownCheck"&gt;
                       &lt;label class="form-check-label" for="rememberdropdownCheck"&gt;Remember me&lt;/label&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;
                       &lt;button type="submit" class="btn btn-primary"&gt;Sign in&lt;/button&gt;
                       &lt;/form&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;
                       &lt;/div&gt;
                      &lt;/div&gt;

                  </code>
              </pre>
            </div>

            <!-- dropdown 4 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Dropdown Color Variant</h5>
                        <a data-bs-toggle="collapse" href="#dropdown4" aria-expanded="false" aria-controls="dropdown4">
                            <i class="ti ti-code source" data-source="drop4"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Primary
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Secondary
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Success
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Danger
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Warning
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Info
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Light
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Dark
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <pre class="drop4 collapse mt-3" id="dropdown4">
                    <code class="language-html">

                        &lt;div class="card"&gt;
                        &lt;div class="card-header"&gt;
                        &lt;h5&gt;Dropdown Color Variant&lt;/h5&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body d-flex flex-wrap gap-2"&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Primary
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Secondary
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Success
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Danger
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Warning
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-info dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Info
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Light
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div&gt;
                        &lt;div class="btn-group btn-rtl"&gt;
                        &lt;button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false"&gt;
                        Dark
                        &lt;/button&gt;
                        &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                        &lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                        &lt;/ul&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;/div&gt;

                    </code>
                </pre>
            </div>

            <!-- dropdown 5 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Sizing Dropdown</h5>
                        <a data-bs-toggle="collapse" href="#dropdown5" aria-expanded="false" aria-controls="dropdown5">
                            <i class="ti ti-code source" data-source="drop5"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-3">
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Large button
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-secondary btn-lg">Large split button</button>
                                <button type="button"
                                        class="btn btn-secondary opacity-75  btn-lg dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                    Small button
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-danger btn-sm"> Small split button</button>
                                <button type="button"
                                        class="btn btn-danger opacity-75  btn-sm dropdown-toggle dropdown-toggle-split"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <pre class="drop5 collapse mt-3" id="dropdown5">
                  <code class="language-html">

                      &lt;div class="card"&gt;
                      &lt;div class="card-header"&gt;
                      &lt;h5&gt;Sizing Dropdown&lt;/h5&gt;
                      &lt;/div&gt;
                      &lt;div class="card-body d-flex flex-wrap gap-3"&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"&gt;
                      Large button
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-secondary btn-lg"&gt;Large split button&lt;/button&gt;
                      &lt;button type="button"
                      class="btn btn-secondary opacity-75 btn-lg dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-success btn-sm dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"&gt;
                      Small button
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-danger btn-sm"&gt; Small split button&lt;/button&gt;
                      &lt;button type="button"
                      class="btn btn-danger opacity-75 btn-sm dropdown-toggle dropdown-toggle-split"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                  </code>
              </pre>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5 class="txt-ellipsis">Dropdown Outline Variant</h5>
                        <a  data-bs-toggle="collapse" href="#dropdown6"
                            aria-expanded="false" aria-controls="dropdown6">
                            <i class="ti ti-code source" data-source="drop6"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-primary">Primary</button>
                                <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Primary</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-secondary">Secondary</button>
                                <button type="button"
                                        class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Secondary</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-success">Success</button>
                                <button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Success</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-danger">Danger</button>
                                <button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Danger</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-warning">Warning</button>
                                <button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Warning</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-info">Info</button>
                                <button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Info</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-light">Light</button>
                                <button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Light</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group btn-rtl">
                                <button type="button" class="btn btn-outline-dark">Dark</button>
                                <button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Dark</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <pre class="drop6 collapse mt-3" id="dropdown6">
                  <code class="language-html">

                      &lt;div class="card"&gt;
                      &lt;div class="card-header"&gt;
                      &lt;h5&gt;Dropdown Outline Variant&lt;/h5&gt;
                      &lt;/div&gt;
                      &lt;div class="card-body d-flex flex-wrap gap-2"&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-primary"&gt;Primary&lt;/button&gt;
                      &lt;button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Primary&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-secondary"&gt;Secondary&lt;/button&gt;
                      &lt;button type="button"
                      class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Secondary&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-success"&gt;Success&lt;/button&gt;
                      &lt;button type="button" class="btn btn-outline-success dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Success&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-danger"&gt;Danger&lt;/button&gt;
                      &lt;button type="button" class="btn btn-outline-danger dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Danger&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-warning"&gt;Warning&lt;/button&gt;
                      &lt;button type="button" class="btn btn-outline-warning dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Warning&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-info"&gt;Info&lt;/button&gt;
                      &lt;button type="button" class="btn btn-outline-info dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Info&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-light"&gt;Light&lt;/button&gt;
                      &lt;button type="button" class="btn btn-outline-light dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Light&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-dark"&gt;Dark&lt;/button&gt;
                      &lt;button type="button" class="btn btn-outline-dark dropdown-toggle dropdown-toggle-split p-2"
                      data-bs-toggle="dropdown" aria-expanded="false"&gt;
                      &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Dark&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;
                      &lt;hr class="dropdown-divider"&gt;
                      &lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;

                      &lt;/div&gt;

                  </code>
              </pre>
            </div>

            <!-- dropdown 7 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Alignment Options</h5>
                        <a  data-bs-toggle="collapse" href="#dropdown7"
                            aria-expanded="false" aria-controls="dropdown7">
                            <i class="ti ti-code source" data-source="drop7"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2 alignment-dropdown">
                        <div class="btn-group btn-rtl">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dropdown <i class="ti ti-arrow-big-down-line"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                        <div class="btn-group btn-rtl">
                            <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Right-aligned menu <i class="ti ti-arrow-big-down-line"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                        <div class="btn-group btn-rtl">
                            <button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-display="static" aria-expanded="false"> right-aligned lg <i
                                    class="ti ti-arrow-big-down-line"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-lg-end">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group btn-rtl">
                            <button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown"
                                    data-bs-display="static" aria-expanded="false"> left-aligned lg <i
                                    class="ti ti-arrow-big-down-line"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group dropstart">
                            <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="ti ti-arrow-big-left-line"></i> Dropstart
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group dropend">
                            <button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dropend <i class="ti ti-arrow-big-right-line"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>

                        <div class="btn-group dropup">
                            <button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dropup <i class="ti ti-arrow-big-up-line"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <pre class="drop7 collapse mt-3" id="dropdown7">
                  <code class="language-html">
                      &lt;div class="card"&gt;
                      &lt;div class="card-header"&gt;
                      &lt;h5&gt;Alignment Options&lt;/h5&gt;
                      &lt;/div&gt;
                      &lt;div class="card-body d-flex flex-wrap gap-2 alignment-dropdown"&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false"&gt;
                      Dropdown &lt;i class="ti ti-arrow-big-down-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-secondary dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"&gt;
                      Right-aligned menu &lt;i class="ti ti-arrow-big-down-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu dropdown-menu-end"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-success dropdown-toggle" data-bs-toggle="dropdown"
                      data-bs-display="static" aria-expanded="false"&gt; right-aligned lg &lt;i
                      class="ti ti-arrow-big-down-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu dropdown-menu-lg-end"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;

                      &lt;div class="btn-group btn-rtl"&gt;
                      &lt;button type="button" class="btn btn-outline-danger dropdown-toggle" data-bs-toggle="dropdown"
                      data-bs-display="static" aria-expanded="false"&gt; left-aligned lg &lt;i
                      class="ti ti-arrow-big-down-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;

                      &lt;div class="btn-group dropstart"&gt;
                      &lt;button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"&gt;
                      &lt;i class="ti ti-arrow-big-left-line"&gt;&lt;/i&gt; Dropstart
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;

                      &lt;div class="btn-group dropend"&gt;
                      &lt;button type="button" class="btn btn-outline-info dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"&gt;
                      Dropend &lt;i class="ti ti-arrow-big-right-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;

                      &lt;div class="btn-group dropup"&gt;
                      &lt;button type="button" class="btn btn-outline-dark dropdown-toggle" data-bs-toggle="dropdown"
                      aria-expanded="false"&gt;
                      Dropup &lt;i class="ti ti-arrow-big-up-line"&gt;&lt;/i&gt;
                      &lt;/button&gt;
                      &lt;ul class="dropdown-menu"&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                      &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;

                  </code>
              </pre>
            </div>

            <!-- dropdown 8 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Dropdown Light Variant</h5>
                        <a  data-bs-toggle="collapse" href="#dropdown8"
                            aria-expanded="false" aria-controls="dropdown8">
                            <i class="ti ti-code source" data-source="drop8"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-primary ">Primary </button>
                                <button type="button" class="btn btn-light-primary dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>

                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-secondary">Secondary</button>
                                <button type="button" class="btn btn-light-secondary dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-success">Success</button>
                                <button type="button" class="btn btn-light-success dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-danger">Danger</button>
                                <button type="button" class="btn btn-light-danger dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-warning">Warning</button>
                                <button type="button" class="btn btn-light-warning dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-info">Info</button>
                                <button type="button" class="btn btn-light-info dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-light">Light</button>
                                <button type="button" class="btn btn-light-light dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <div class="btn-group dropdown-light btn-rtl">
                                <button type="button" class="btn btn-light-dark">Dark</button>
                                <button type="button" class="btn btn-light-dark dropdown-toggle dropdown-toggle-split p-2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="visually-hidden">Toggle Dropdown</span>
                                    <i class="ti ti-arrow-badge-down f-s-16"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Separated link</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>


                <pre class="drop8 collapse mt-3" id="dropdown8">
                  <code class="language-html">
                     &lt;div class="card"&gt;
                     &lt;div class="card-header"&gt;
                     &lt;h5&gt;Dropdown Light Variant&lt;/h5&gt;
                     &lt;/div&gt;
                     &lt;div class="card-body d-flex flex-wrap gap-2"&gt;
                     &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-primary "&gt;Primary &lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-primary dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;

                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-secondary"&gt;Secondary&lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-secondary dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-success"&gt;Success&lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-success dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-danger"&gt;Danger&lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-danger dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-warning"&gt;Warning&lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-warning dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-info"&gt;Info&lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-info dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-light"&gt;Light&lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-light dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                      &lt;div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button type="button" class="btn btn-light-dark"&gt;Dark&lt;/button&gt;
                       &lt;button type="button" class="btn btn-light-dark dropdown-toggle dropdown-toggle-split p-2"
                       data-bs-toggle="dropdown" aria-expanded="false"&gt;
                       &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                       &lt;i class="ti ti-arrow-badge-down f-s-16"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                       &lt;li&gt;
                        &lt;hr class="dropdown-divider"&gt;
                       &lt;/li&gt;
                       &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;/div&gt;
                     &lt;/div&gt;

                     &lt;/div&gt;
                  </code>
              </pre>
            </div>

            <!-- dropdown 9 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Dropup Variation</h5>
                        <a  data-bs-toggle="collapse" href="#dropdown9"
                            aria-expanded="false" aria-controls="dropdown9">
                            <i class="ti ti-code source" data-source="drop9"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <div class="btn-group dropup dropdown-light btn-rtl">
                            <button type="button" class="btn  btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dropup <i class="ti ti-arrow-narrow-up"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropup dropdown-light btn-rtl">
                            <button type="button" class="btn btn-light-secondary">
                                Split dropup
                            </button>
                            <button type="button" class="btn btn-light-secondary dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown </span>
                                <i class="ti ti-arrow-narrow-up"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropend dropdown-light">
                            <button type="button" class="btn btn-light-success dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dropend <i class="ti ti-arrow-narrow-right"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropend dropdown-light btn-rtl">
                            <button type="button" class="btn btn-light-danger">
                                Split dropend
                            </button>
                            <button type="button" class="btn btn-light-danger dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropend </span>
                                <i class="ti ti-arrow-narrow-right"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropstart dropdown-light">
                            <button type="button" class="btn btn-light-warning dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                <i class="ti ti-arrow-narrow-left"></i> Dropstart
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropstart dropdown-light btn-rtl">
                            <button type="button" class="btn btn-light-info dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropstart</span>
                                <i class="ti ti-arrow-narrow-left"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                            <button type="button" class="btn btn-light-info">
                                Split dropstart
                            </button>
                        </div>
                        <div class="dropdown dropdown-light">
                            <button class="btn btn-light-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                Dropup <i class="ti ti-arrow-narrow-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><button class="dropdown-item" type="button">Action</button></li>
                                <li><button class="dropdown-item" type="button">Another action</button></li>
                                <li><button class="dropdown-item" type="button">Something else here</button></li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown-light btn-rtl">
                            <button type="button" class="btn btn-light-dark">Dropup</button>
                            <button type="button" class="btn btn-light-dark dropdown-toggle dropdown-toggle-split"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="visually-hidden">Toggle Dropdown</span>
                                <i class="ti ti-arrow-narrow-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Separated link</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <pre class="drop9 collapse mt-3" id="dropdown9">
                  <code class="language-html">

                       &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Dropup Variation&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body d-flex flex-wrap gap-2"&gt;
                          &lt;div class="btn-group dropup dropdown-light btn-rtl"&gt;
                           &lt;button type="button" class="btn btn-light-primary dropdown-toggle" data-bs-toggle="dropdown"
                         aria-expanded="false"&gt;
                         Dropup &lt;i class="ti ti-arrow-narrow-up"&gt;&lt;/i&gt;
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;
                          &lt;hr class="dropdown-divider"&gt;
                         &lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                          &lt;div class="btn-group dropup dropdown-light btn-rtl"&gt;
                           &lt;button type="button" class="btn btn-light-secondary"&gt;
                         Split dropup
                           &lt;/button&gt;
                           &lt;button type="button" class="btn btn-light-secondary dropdown-toggle dropdown-toggle-split"
                         data-bs-toggle="dropdown" aria-expanded="false"&gt;
                         &lt;span class="visually-hidden"&gt;Toggle Dropdown &lt;/span&gt;
                         &lt;i class="ti ti-arrow-narrow-up"&gt;&lt;/i&gt;
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;
                          &lt;hr class="dropdown-divider"&gt;
                         &lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                          &lt;div class="btn-group dropend dropdown-light"&gt;
                           &lt;button type="button" class="btn btn-light-success dropdown-toggle" data-bs-toggle="dropdown"
                         aria-expanded="false"&gt;
                         Dropend &lt;i class="ti ti-arrow-narrow-right"&gt;&lt;/i&gt;
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;
                          &lt;hr class="dropdown-divider"&gt;
                         &lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                          &lt;div class="btn-group dropend dropdown-light btn-rtl"&gt;
                           &lt;button type="button" class="btn btn-light-danger"&gt;
                         Split dropend
                           &lt;/button&gt;
                           &lt;button type="button" class="btn btn-light-danger dropdown-toggle dropdown-toggle-split"
                         data-bs-toggle="dropdown" aria-expanded="false"&gt;
                         &lt;span class="visually-hidden"&gt;Toggle Dropend &lt;/span&gt;
                         &lt;i class="ti ti-arrow-narrow-right"&gt;&lt;/i&gt;
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;
                          &lt;hr class="dropdown-divider"&gt;
                         &lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                          &lt;div class="btn-group dropstart dropdown-light"&gt;
                           &lt;button type="button" class="btn btn-light-warning dropdown-toggle" data-bs-toggle="dropdown"
                         aria-expanded="false"&gt;
                         &lt;i class="ti ti-arrow-narrow-left"&gt;&lt;/i&gt; Dropstart
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;
                          &lt;hr class="dropdown-divider"&gt;
                         &lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                          &lt;div class="btn-group dropstart dropdown-light btn-rtl"&gt;
                           &lt;button type="button" class="btn btn-light-info dropdown-toggle dropdown-toggle-split"
                         data-bs-toggle="dropdown" aria-expanded="false"&gt;
                         &lt;span class="visually-hidden"&gt;Toggle Dropstart&lt;/span&gt;
                         &lt;i class="ti ti-arrow-narrow-left"&gt;&lt;/i&gt;
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;
                          &lt;hr class="dropdown-divider"&gt;
                         &lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                           &lt;button type="button" class="btn btn-light-info"&gt;
                         Split dropstart
                           &lt;/button&gt;
                          &lt;/div&gt;
                          &lt;div class="dropdown dropdown-light"&gt;
                           &lt;button class="btn btn-light-light dropdown-toggle" type="button" data-bs-toggle="dropdown"
                         aria-expanded="false"&gt;
                         Dropup &lt;i class="ti ti-arrow-narrow-down"&gt;&lt;/i&gt;
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Action&lt;/button&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Another action&lt;/button&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;button class="dropdown-item" type="button"&gt;Something else here&lt;/button&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                          &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                           &lt;button type="button" class="btn btn-light-dark"&gt;Dropup&lt;/button&gt;
                           &lt;button type="button" class="btn btn-light-dark dropdown-toggle dropdown-toggle-split"
                         data-bs-toggle="dropdown" aria-expanded="false"&gt;
                         &lt;span class="visually-hidden"&gt;Toggle Dropdown&lt;/span&gt;
                         &lt;i class="ti ti-arrow-narrow-down"&gt;&lt;/i&gt;
                           &lt;/button&gt;
                           &lt;ul class="dropdown-menu"&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Another action&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                         &lt;li&gt;
                          &lt;hr class="dropdown-divider"&gt;
                         &lt;/li&gt;
                         &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                        &lt;/div&gt;

                  </code>
              </pre>
            </div>

            <!-- dropdown 10 -->

            <div class="col-12">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Auto close behaviour</h5>
                        <a  data-bs-toggle="collapse" href="#dropdown10"
                            aria-expanded="false" aria-controls="dropdown10">
                            <i class="ti ti-code source" data-source="drop10"></i>
                        </a>
                    </div>
                    <div class="card-body d-flex flex-wrap gap-2">
                        <div class="btn-group dropdown-light btn-rtl">
                            <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="true" aria-expanded="false">
                                Default dropdown <i class="ti ti-circle-arrow-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown-light btn-rtl">
                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="inside" aria-expanded="false">
                                Clickable outside <i class="ti ti-circle-arrow-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown-light btn-rtl">
                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-expanded="false">
                                Clickable inside <i class="ti ti-circle-arrow-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                        <div class="btn-group dropdown-light btn-rtl">
                            <button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="false" aria-expanded="false">
                                Manual close <i class="ti ti-circle-arrow-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                                <li><a class="dropdown-item" href="#">Menu item</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <pre class="drop10 collapse mt-3" id="dropdown10">
                  <code class="language-html">

                       &lt;div class="card"&gt;
                        &lt;div class="card-header"&gt;
                      &lt;h5&gt;Auto close behavior&lt;/h5&gt;
                        &lt;/div&gt;
                        &lt;div class="card-body d-flex flex-wrap gap-2"&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="true" aria-expanded="false"&gt;
                        Default dropdown &lt;i class="ti ti-circle-arrow-down"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="inside" aria-expanded="false"&gt;
                        Clickable outside &lt;i class="ti ti-circle-arrow-down"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="outside" aria-expanded="false"&gt;
                        Clickable inside &lt;i class="ti ti-circle-arrow-down"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                      &lt;div class="btn-group dropdown-light btn-rtl"&gt;
                       &lt;button class="btn btn-danger dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        data-bs-auto-close="false" aria-expanded="false"&gt;
                        Manual close &lt;i class="ti ti-circle-arrow-down"&gt;&lt;/i&gt;
                       &lt;/button&gt;
                       &lt;ul class="dropdown-menu"&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                        &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;Menu item&lt;/a&gt;&lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                        &lt;/div&gt;
                       &lt;/div&gt;

                  </code>
              </pre>
            </div>

            <!-- dropdown 11 -->

            <div class="col-12">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header code-header">
                                <h5>With Icon Dropdown</h5>
                                <a  data-bs-toggle="collapse" href="#dropdown12"
                                    aria-expanded="false" aria-controls="dropdown12">
                                    <i class="ti ti-code source" data-source="drop12"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="btn-group btn-rtl">
                                    <button class="btn btn-light-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-arrow-bar-down"></i> Default dropdown
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-arrow-badge-right"></i> Menu item</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-arrow-badge-right"></i> Menu item</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-arrow-badge-right"></i> Menu item</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <pre class="drop12 collapse mt-3" id="dropdown12">
    <code class="language-html">

 &lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
   &lt;h5&gt;With Icon Dropdown&lt;/h5&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
  &lt;div class="btn-group btn-rtl"&gt;
   &lt;button class="btn btn-light-secondary dropdown-toggle" type="button"
   data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"&gt;
   &lt;i class="ti ti-arrow-bar-down"&gt;&lt;/i&gt; Default dropdown
   &lt;/button&gt;
   &lt;ul class="dropdown-menu"&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; Menu item&lt;/a&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; Menu item&lt;/a&gt;
   &lt;/li&gt;
   &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; Menu item&lt;/a&gt;
   &lt;/li&gt;
   &lt;/ul&gt;
  &lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;

    </code>
</pre>
                    </div>

                    <!-- dropdown 12 -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header code-header">
                                <h5>Hover Dropdown </h5>
                                <a  data-bs-toggle="collapse" href="#dropdown11"
                                    aria-expanded="false" aria-controls="dropdown11">
                                    <i class="ti ti-code source" data-source="drop11"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="btn-group hover-dropdown">
                                    <button type="button" class="btn btn-light-primary dropdown-toggle waves-effect waves-light"
                                            data-bs-toggle="dropdown" data-trigger="hover" aria-expanded="false">Hover</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item">Action</a></li>
                                        <li><a class="dropdown-item">Something else here</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item">Separated link</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <pre class="drop11 collapse mt-3" id="dropdown11">
  <code class="language-html">

      &lt;div class="card"&gt;
      &lt;div class="card-header"&gt;
      &lt;h5&gt;Hover Dropdown &lt;/h5&gt;
      &lt;/div&gt;
      &lt;div class="card-body"&gt;
       &lt;div class="btn-group hover-dropdown"&gt;
       &lt;button type="button" class="btn btn-light-primary dropdown-toggle waves-effect waves-light"
        data-bs-toggle="dropdown" data-trigger="hover" aria-expanded="false"&gt;Hover&lt;/button&gt;
       &lt;ul class="dropdown-menu"&gt;
        &lt;li&gt;&lt;a class="dropdown-item"&gt;Action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item"&gt;Another action&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item"&gt;Something else here&lt;/a&gt;&lt;/li&gt;
        &lt;li&gt;
        &lt;hr class="dropdown-divider"&gt;
        &lt;/li&gt;
        &lt;li&gt;&lt;a class="dropdown-item"&gt;Separated link&lt;/a&gt;&lt;/li&gt;
       &lt;/ul&gt;
       &lt;/div&gt;
      &lt;/div&gt;
      &lt;/div&gt;

  </code>
</pre>
                    </div>

                    <!-- dropdown 13 -->

                    <div class="col-md-2">
                        <div class="card">
                            <div class="card-header code-header">
                                <h5>Icon</h5>
                                <a  data-bs-toggle="collapse" href="#dropdown13"
                                    aria-expanded="false" aria-controls="dropdown13">
                                    <i class="ti ti-code source" data-source="drop13"></i>
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="btn-group dropdown-icon-none">
                                    <button class="btn btn-light-success icon-btn b-r-4 dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-capture"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-arrow-badge-right"></i> Menu item</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-arrow-badge-right"></i> Menu item</a>
                                        </li>
                                        <li><a class="dropdown-item" href="#"><i class="ti ti-arrow-badge-right"></i> Menu item</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <pre class="drop13 collapse mt-3" id="dropdown13">
<code class="language-html">

 &lt;div class="card"&gt;
  &lt;div class="card-header"&gt;
   &lt;h5&gt;Icon&lt;/h5&gt;
  &lt;/div&gt;
  &lt;div class="card-body"&gt;
   &lt;div class="btn-group dropdown-icon-none"&gt;
    &lt;button class="btn btn-light-success icon-btn b-r-4 dropdown-toggle" type="button"
     data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false"&gt;
     &lt;i class="ti ti-capture"&gt;&lt;/i&gt;
    &lt;/button&gt;
    &lt;ul class="dropdown-menu"&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; Menu item&lt;/a&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; Menu item&lt;/a&gt;
     &lt;/li&gt;
     &lt;li&gt;&lt;a class="dropdown-item" href="#"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; Menu item&lt;/a&gt;
     &lt;/li&gt;
    &lt;/ul&gt;
   &lt;/div&gt;
  &lt;/div&gt;
 &lt;/div&gt;

</code>
</pre>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Dropdown Menu</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-4 mb-3">
                                <div class="app-dropdown">
                                    <button class="btn btn-lg border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu show">
                                        <li class="dropdown-item">
                                            <a href="#" class="">
                                                <i class="ti ti-user-plus pe-2"></i>
                                                <span> Action</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#" class="">
                                                <i class="ti ti-circles-relation  pe-2"></i>
                                                <span>Another action</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#" class="">
                                                <i class="ti ti-message-circle  pe-2"></i>
                                                <span>Something else here</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item">
                                            <a href="#" class="">
                                                <i class="ti ti-settings pe-2"></i>
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-3">
                                <div class="app-dropdown show">
                                    <button class="btn btn-lg border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu show">
                                        <li class="d-flex align-items-center justify-content-between my-1">
                                            <div class="p-2">
                                                <div class="bg-secondary h-35 w-35 d-flex-center b-r-50 position-relative">
                                                    <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50">
                                                    <span
                                                        class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Brian Baker</h6>
                                                <p class="text-muted">Manager</p>
                                            </div>

                                            <div>
                                                <i class="ti ti-settings text-muted fs-4 p-2"></i>
                                            </div>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item">
                                            <a href="#">
                                                <i class="ti ti-user-plus pe-2"></i>
                                                <span> Action</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">
                                                <i class="ti ti-circles-relation pe-2"></i>
                                                <span>Another action</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">
                                                <i class="ti ti-message-circle pe-2"></i>
                                                <span>Something else here</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>

                            <div class="col-md-6 col-lg-4 mb-3">
                                <div class="app-dropdown">
                                    <button class="btn btn-lg border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu show">
                                        <li class="dropdown-item">
                                            <a href="#" class="ms-2">
                                                Action
                                            </a>
                                            <i class="ti ti-user-plus ms-auto"></i>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#" class="ms-2">
                                                Another action
                                            </a>
                                            <i class="ti ti-circles-relation ms-auto"></i>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#" class="ms-2">
                                                Something else here
                                            </a>
                                            <i class="ti ti-message-circle ms-auto"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item">
                                            <a href="#" class="ms-2">
                                                Settings
                                            </a>
                                            <i class="ti ti-settings ms-auto"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4 mb-3">
                                <div class="app-dropdown">
                                    <button class="btn btn-lg border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu show">
                                        <li class="d-flex align-items-center justify-content-between my-1">

                                            <div class="p-2">
                                                <div class="bg-secondary h-35 w-35 d-flex-center b-r-50 position-relative">
                                                    <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50">
                                                    <span
                                                        class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                                </div>
                                            </div>

                                            <div class="flex-grow-1">
                                                <h6 class="mb-0">Brian Baker</h6>
                                                <p class="text-muted">Manager</p>
                                            </div>

                                            <div>
                                                <i class="ti ti-settings text-muted fs-4 p-2"></i>
                                            </div>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item">
                                            <a href="#" >
                                                Action
                                            </a>
                                            <i class="ti ti-user-plus ms-auto"></i>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#" >
                                                Another action
                                            </a>
                                            <i class="ti ti-circles-relation ms-auto"></i>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#" >
                                                Something else here
                                            </a>
                                            <i class="ti ti-message-circle ms-auto"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="app-dropdown">
                                    <button class="btn btn-lg border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu show mb-3">
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-2" type="checkbox">
                                            <a href="#" class="me-2">
                                                <span> Action</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-2" type="checkbox">
                                            <a href="#" class="me-2">
                                                <span>Another action</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <input class="form-check-input me-2" type="checkbox">
                                            <a href="#" class="me-2">
                                                <span>Something else here</span>
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item form-check">
                                            <input class="form-check-input ms-0" type="radio" name="flexRadioDefault"  id="flexRadioDefault1">
                                            <a href="#" class="ms-2">
                                                Default radio
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="app-dropdown">
                                    <button class="btn btn-lg border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu show mb-3">
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <a href="#">
                                                Action
                                            </a>
                                            <span class="badge text-light-primary">message</span>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <a href="#">
                                                Another action
                                            </a>
                                            <span class="badge text-light-secondary">message</span>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <a href="#">
                                                Something else
                                            </a>
                                            <span class="badge text-light-success">message</span>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <a href="#">
                                                Something else here
                                            </a>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="app-dropdown">
                                    <button class="btn btn-lg border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu show">
                                        <li class="dropdown-item">
                                            <a href="#">
                                                Action
                                            </a>
                                        </li>
                                        <li class="dropdown-item">
                                            <a href="#">
                                                Another action
                                            </a>
                                        </li>
                                        <li class="dropdown-item active">
                                            <a href="#">
                                                Something else here
                                            </a>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item">
                                            <a href="#">
                                                Something else here
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Color Dropdown Menu</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-primary show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-secondary show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-success show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-danger show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-warning show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-info show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-light show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="app-dropdown">
                                    <button class="btn border-0 icon-btn" type="button" data-bs-toggle="dropdown"
                                            data-bs-auto-close="true" aria-expanded="false">
                                        <i class="ti ti-dots"></i>
                                    </button>
                                    <ul class="dropdown-menu menu-dark show">
                                        <li class="dropdown-item d-flex justify-content-between">

                                            <span> Action</span>
                                            <i class="ti ti-user-plus"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Another action</span>
                                            <i class="ti ti-circles-relation"></i>
                                        </li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Something else here</span>
                                            <i class="ti ti-message-circle"></i>
                                        </li>
                                        <li class="dropdown-divider"></li>
                                        <li class="dropdown-item d-flex justify-content-between">
                                            <span>Settings</span>
                                            <i class="ti ti-settings"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dropdown end -->

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
