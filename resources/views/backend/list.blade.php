@extends('backend.layout.master')
@section('title', 'List')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">List</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
									<span>
									  <i class="ph-duotone  ph-briefcase f-s-16"></i> Ui kits
									</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">List</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!--list start -->
        <div class="row list-item">
            <div class="col-md-6 col-xl-4 ">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Default lists</h5>
                        <a data-bs-toggle="collapse" href="#list1" aria-expanded="false" aria-controls="list1">
                            <i class="ti ti-code source" data-source="li1"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">An item</li>
                            <li class="list-group-item">A second item</li>
                            <li class="list-group-item">A third item</li>
                            <li class="list-group-item">A fourth item</li>
                            <li class="list-group-item">And a fifth one</li>
                        </ul>
                    </div>

                    <pre class="li1 collapse mt-3" id="list1">
                                        <code class="language-html">

                                                &lt;div class="card"&gt;
                                                  &lt;div class="card-header"&gt;
                                                    &lt;h5&gt;Default lists&lt;/h5&gt;
                                                  &lt;/div&gt;
                                                  &lt;div class="card-body"&gt;
                                                    &lt;ul class="list-group"&gt;
                                                      &lt;li class="list-group-item"&gt;An item&lt;/li&gt;
                                                      &lt;li class="list-group-item"&gt;A second item&lt;/li&gt;
                                                      &lt;li class="list-group-item"&gt;A third item&lt;/li&gt;
                                                      &lt;li class="list-group-item"&gt;A fourth item&lt;/li&gt;
                                                      &lt;li class="list-group-item"&gt;And a fifth one&lt;/li&gt;
                                                    &lt;/ul&gt;
                                                  &lt;/div&gt;
                                                                &lt;/div&gt;

                                        </code>
                                      </pre>
                </div>
            </div>


            <div class="col-md-6 col-xl-4 ">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Active items</h5>
                        <a  data-bs-toggle="collapse" href="#list2"
                            aria-expanded="false" aria-controls="list2">
                            <i class="ti ti-code source" data-source="li2"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-items-active">
                            <li class="list-group-item list-active active" aria-current="true"><i
                                    class="ti ti-arrow-badge-right"></i> An active item</li>
                            <li class="list-group-item list-active"><i class="ti ti-arrow-badge-right"></i> A second item</li>
                            <li class="list-group-item list-active"><i class="ti ti-arrow-badge-right"></i> A third item</li>
                            <li class="list-group-item list-active"><i class="ti ti-arrow-badge-right"></i> A fourth item</li>
                            <li class="list-group-item list-active"><i class="ti ti-arrow-badge-right"></i> And a fifth one
                            </li>
                        </ul>
                    </div>
                </div>

                <pre class="li2 collapse mt-3" id="list2">
                  <code class="language-html">
                      &lt;div class="card"&gt;
                      &lt;div class="card-header"&gt;
                       &lt;h5&gt;Active items&lt;/h5&gt;
                      &lt;/div&gt;
                      &lt;div class="card-body"&gt;
                       &lt;ul class="list-group list-items-active"&gt;
                        &lt;li class="list-group-item list-active active" aria-current="true"&gt;&lt;i
                          class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; An active item&lt;/li&gt;
                        &lt;li class="list-group-item list-active"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; A second item&lt;/li&gt;
                        &lt;li class="list-group-item list-active"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; A third item&lt;/li&gt;
                        &lt;li class="list-group-item list-active"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; A fourth item&lt;/li&gt;
                        &lt;li class="list-group-item list-active"&gt;&lt;i class="ti ti-arrow-badge-right"&gt;&lt;/i&gt; And a fifth one
                        &lt;/li&gt;
                       &lt;/ul&gt;
                      &lt;/div&gt;
                              &lt;/div&gt;
                  </code>
                </pre>
            </div>



            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Links</h5>
                        <a  data-bs-toggle="collapse" href="#list3"
                            aria-expanded="false" aria-controls="list3">
                            <i class="ti ti-code source" data-source="li3"></i>
                        </a>

                    </div>
                    <div class="card-body gap-2 d-flex flex-column">
                        <div class="list-group list-link ">
                            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                                <i class="ti ti-unlink"></i> The current link item
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="ti ti-unlink"></i> A second
                                link item</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="ti ti-unlink"></i> A third
                                link item</a>
                            <a href="#" class="list-group-item list-group-item-action"><i class="ti ti-unlink"></i> A fourth
                                link item</a>
                            <a class="list-group-item list-group-item-action disabled"><i class="ti ti-unlink"></i> A disabled
                                link item</a>
                        </div>
                    </div>

                    <pre class="li3 collapse mt-3" id="list3">
                    <code class="language-html">

                        &lt;div class="card"&gt;
                          &lt;div class="card-header"&gt;
                           &lt;h5&gt;Links&lt;/h5&gt;
                          &lt;/div&gt;
                          &lt;div class="card-body gap-2 d-flex flex-column"&gt;
                           &lt;div class="list-group list-link "&gt;
                            &lt;a href="#" class="list-group-item list-group-item-action active" aria-current="true"&gt;
                             &lt;i class="ti ti-unlink"&gt;&lt;/i&gt; The current link item
                            &lt;/a&gt;
                            &lt;a href="#" class="list-group-item list-group-item-action"&gt;&lt;i class="ti ti-unlink"&gt;&lt;/i&gt; A second
                             link item&lt;/a&gt;
                            &lt;a href="#" class="list-group-item list-group-item-action"&gt;&lt;i class="ti ti-unlink"&gt;&lt;/i&gt; A third
                             link item&lt;/a&gt;
                            &lt;a href="#" class="list-group-item list-group-item-action"&gt;&lt;i class="ti ti-unlink"&gt;&lt;/i&gt; A fourth
                             link item&lt;/a&gt;
                            &lt;a class="list-group-item list-group-item-action disabled"&gt;&lt;i class="ti ti-unlink"&gt;&lt;/i&gt; A disabled
                             link item&lt;/a&gt;
                           &lt;/div&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>



            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Buttons</h5>
                        <a  data-bs-toggle="collapse" href="#list4"
                            aria-expanded="false" aria-controls="list4">
                            <i class="ti ti-code source" data-source="li4"></i>
                        </a>
                    </div>
                    <div class="card-body gap-2 d-flex flex-column">
                        <div class="list-group list-button">
                            <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                                <i class="ti ti-arrow-autofit-right"></i> The current button
                            </button>
                            <button type="button" class="list-group-item list-group-item-action"><i
                                    class="ti ti-arrow-autofit-right"></i> A second button item</button>
                            <button type="button" class="list-group-item list-group-item-action"><i
                                    class="ti ti-arrow-autofit-right"></i> A third button item</button>
                            <button type="button" class="list-group-item list-group-item-action"><i
                                    class="ti ti-arrow-autofit-right"></i> A fourth button item</button>
                            <button type="button" class="list-group-item list-group-item-action" disabled><i
                                    class="ti ti-arrow-autofit-right"></i> A disabled button
                                item</button>
                        </div>
                    </div>

                    <pre class="li4 collapse mt-3" id="list4">
                    <code class="language-html">

                          &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;buttons&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body gap-2 d-flex flex-column"&gt;
                          &lt;div class="list-group list-button"&gt;
                           &lt;button type="button" class="list-group-item list-group-item-action active" aria-current="true"&gt;
                            &lt;i class="ti ti-arrow-autofit-right"&gt;&lt;/i&gt; The current button
                           &lt;/button&gt;
                           &lt;button type="button" class="list-group-item list-group-item-action"&gt;&lt;i
                             class="ti ti-arrow-autofit-right"&gt;&lt;/i&gt; A second button item&lt;/button&gt;
                           &lt;button type="button" class="list-group-item list-group-item-action"&gt;&lt;i
                             class="ti ti-arrow-autofit-right"&gt;&lt;/i&gt; A third button item&lt;/button&gt;
                           &lt;button type="button" class="list-group-item list-group-item-action"&gt;&lt;i
                             class="ti ti-arrow-autofit-right"&gt;&lt;/i&gt; A fourth button item&lt;/button&gt;
                           &lt;button type="button" class="list-group-item list-group-item-action" disabled&gt;&lt;i
                             class="ti ti-arrow-autofit-right"&gt;&lt;/i&gt; A disabled button
                            item&lt;/button&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>


            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Flush</h5>
                        <a  data-bs-toggle="collapse" href="#list5"
                            aria-expanded="false" aria-controls="list5">
                            <i class="ti ti-code source" data-source="li5"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="ti ti-transition-right"></i> An item
                            </li>
                            <li class="list-group-item"><i class="ti ti-transition-right"></i> A second
                                item</li>
                            <li class="list-group-item"><i class="ti ti-transition-right"></i> A third
                                item</li>
                            <li class="list-group-item"><i class="ti ti-transition-right"></i> A fourth
                                item</li>
                            <li class="list-group-item"><i class="ti ti-transition-right"></i> And a
                                fifth one</li>
                        </ul>
                    </div>

                    <pre class="li5 collapse mt-3" id="list5">
                    <code class="language-html">

                        &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Flush&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                          &lt;ul class="list-group list-group-flush"&gt;
                           &lt;li class="list-group-item"&gt;&lt;i class="ti ti-transition-right"&gt;&lt;/i&gt; An item
                           &lt;/li&gt;
                           &lt;li class="list-group-item"&gt;&lt;i class="ti ti-transition-right"&gt;&lt;/i&gt; A second
                            item&lt;/li&gt;
                           &lt;li class="list-group-item"&gt;&lt;i class="ti ti-transition-right"&gt;&lt;/i&gt; A third
                            item&lt;/li&gt;
                           &lt;li class="list-group-item"&gt;&lt;i class="ti ti-transition-right"&gt;&lt;/i&gt; A fourth
                            item&lt;/li&gt;
                           &lt;li class="list-group-item"&gt;&lt;i class="ti ti-transition-right"&gt;&lt;/i&gt; And a
                            fifth one&lt;/li&gt;
                          &lt;/ul&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>


            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Numbered</h5>
                        <a  data-bs-toggle="collapse" href="#list6"
                            aria-expanded="false" aria-controls="list6">
                            <i class="ti ti-code source" data-source="li6"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ol class="list-group list-group-numbered p-1">
                            <li class="list-group-item d-flex justify-content-between align-items-start text-primary">
                                <div class="ms-2 w-100">
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="fw-bold me-1">Subheading</div>
                                        <span class="badge text-light-primary rounded-pill">7</span>
                                    </div>
                                    Content for list item

                                </div>

                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start text-secondary">
                                <div class="ms-2 w-100">
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="fw-bold me-1">Subheading</div>
                                        <span class="badge text-light-secondary rounded-pill">9</span>
                                    </div>
                                    Content for list item

                                </div>

                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start text-success">
                                <div class="ms-2  w-100">
                                    <div class="w-100 d-flex justify-content-between align-items-center">
                                        <div class="fw-bold me-1">Subheading</div>
                                        <span class="badge text-light-success rounded-pill ">11</span>
                                    </div>
                                    Content for list item

                                </div>

                            </li>
                        </ol>
                    </div>

                    <pre class="li6 collapse mt-3" id="list6">
                    <code class="language-html">

                          &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Numbered&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body"&gt;
                          &lt;ol class="list-group list-group-numbered p-1"&gt;
                           &lt;li class="list-group-item d-flex justify-content-between align-items-start text-primary"&gt;
                            &lt;div class="ms-2 w-100"&gt;
                             &lt;div class="w-100 d-flex justify-content-between align-items-center"&gt;
                              &lt;div class="fw-bold me-1"&gt;Subheading&lt;/div&gt;
                              &lt;span class="badge text-light-primary rounded-pill"&gt;7&lt;/span&gt;
                             &lt;/div&gt;
                             Content for list item
                        <br>
                            &lt;/div&gt;
                        <br>
                           &lt;/li&gt;
                           &lt;li class="list-group-item d-flex justify-content-between align-items-start text-secondary"&gt;
                            &lt;div class="ms-2 w-100"&gt;
                             &lt;div class="w-100 d-flex justify-content-between align-items-center"&gt;
                              &lt;div class="fw-bold me-1"&gt;Subheading&lt;/div&gt;
                              &lt;span class="badge text-light-secondary rounded-pill"&gt;9&lt;/span&gt;
                             &lt;/div&gt;
                             Content for list item
                        <br>
                            &lt;/div&gt;
                        <br>
                           &lt;/li&gt;
                           &lt;li class="list-group-item d-flex justify-content-between align-items-start text-success"&gt;
                            &lt;div class="ms-2 w-100"&gt;
                             &lt;div class="w-100 d-flex justify-content-between align-items-center"&gt;
                              &lt;div class="fw-bold me-1"&gt;Subheading&lt;/div&gt;
                              &lt;span class="badge text-light-success rounded-pill "&gt;11&lt;/span&gt;
                             &lt;/div&gt;
                             Content for list item
                        <br>
                            &lt;/div&gt;
                        <br>
                           &lt;/li&gt;
                          &lt;/ol&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>


            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Radios</h5>
                        <a  data-bs-toggle="collapse" href="#list7"
                            aria-expanded="false" aria-controls="list7">
                            <i class="ti ti-code source" data-source="li7"></i>
                        </a>
                    </div>
                    <div class="card-body ">
                        <ul class="list-group d-flex flex-column">
                            <li class="radio-wrapper ">
                                <label class="check-box">
                                    <input type="radio" name="radio-group1">
                                    <span class="radiomark outline-primary"></span>
                                    <span class="text-primary me-1">Primary</span>
                                </label>
                            </li>
                            <li class="radio-wrapper ">
                                <label class="check-box">
                                    <input type="radio" name="radio-group1">
                                    <span class="radiomark outline-secondary"></span>
                                    <span class="text-secondary me-1">Secondary</span>
                                </label>
                            </li>
                            <li class="radio-wrapper ">
                                <label class="check-box">
                                    <input type="radio" name="radio-group1">
                                    <span class="radiomark outline-success"></span>
                                    <span class="text-success me-1">Success</span>
                                </label>
                            </li>
                            <li class="radio-wrapper ">
                                <label class="check-box">
                                    <input type="radio" name="radio-group1">
                                    <span class="radiomark outline-danger"></span>
                                    <span class="text-danger me-1">Danger</span>
                                </label>
                            </li>
                            <li class="radio-wrapper ">
                                <label class="check-box">
                                    <input type="radio" name="radio-group1">
                                    <span class="radiomark outline-warning"></span>
                                    <span class="text-warning me-1">Warning</span>
                                </label>
                            </li>
                            <li class="radio-wrapper ">
                                <label class="check-box">
                                    <input type="radio" name="radio-group1">
                                    <span class="radiomark outline-info"></span>
                                    <span class="text-info me-1">Info</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <pre class="li7 collapse mt-3" id="list7">
                    <code class="language-html">

                          &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;radios&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body "&gt;
                          &lt;ul class="list-group d-flex flex-column"&gt;
                           &lt;li class="radio-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="radio" name="radio-group1"&gt;
                             &lt;span class="radiomark outline-primary"&gt;&lt;/span&gt;
                             &lt;span class="text-primary me-1"&gt;Primary&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="radio-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="radio" name="radio-group1"&gt;
                             &lt;span class="radiomark outline-secondary"&gt;&lt;/span&gt;
                             &lt;span class="text-secondary me-1"&gt;Secondary&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="radio-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="radio" name="radio-group1"&gt;
                             &lt;span class="radiomark outline-success"&gt;&lt;/span&gt;
                             &lt;span class="text-success me-1"&gt;Success&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="radio-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="radio" name="radio-group1"&gt;
                             &lt;span class="radiomark outline-danger"&gt;&lt;/span&gt;
                             &lt;span class="text-danger me-1"&gt;Danger&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="radio-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="radio" name="radio-group1"&gt;
                             &lt;span class="radiomark outline-warning"&gt;&lt;/span&gt;
                             &lt;span class="text-warning me-1"&gt;Warning&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="radio-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="radio" name="radio-group1"&gt;
                             &lt;span class="radiomark outline-info"&gt;&lt;/span&gt;
                             &lt;span class="text-info me-1"&gt;Info&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                          &lt;/ul&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>


            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Checkboxes</h5>
                        <a  data-bs-toggle="collapse" href="#list8"
                            aria-expanded="false" aria-controls="list8">
                            <i class="ti ti-code source" data-source="li8"></i>
                        </a>
                    </div>
                    <div class="card-body ">
                        <ul class="list-group d-flex flex-column ">
                            <li class="checkbox-wrapper">
                                <label class="check-box">
                                    <input type="checkbox">
                                    <span class="checkmark outline-primary"></span>
                                    <span class="text-primary me-1">Primary</span>
                                </label>
                            </li>
                            <li class="checkbox-wrapper ">
                                <label class="check-box">
                                    <input type="checkbox">
                                    <span class="checkmark outline-secondary"></span>
                                    <span class="text-secondary me-1">Secondary</span>
                                </label>
                            </li>
                            <li class="checkbox-wrapper ">
                                <label class="check-box">
                                    <input type="checkbox">
                                    <span class="checkmark outline-success"></span>
                                    <span class="text-success me-1">Success</span>
                                </label>
                            </li>
                            <li class="checkbox-wrapper ">
                                <label class="check-box">
                                    <input type="checkbox">
                                    <span class="checkmark outline-danger"></span>
                                    <span class="text-danger me-1">Danger</span>
                                </label>
                            </li>
                            <li class="checkbox-wrapper ">
                                <label class="check-box">
                                    <input type="checkbox">
                                    <span class="checkmark outline-warning"></span>
                                    <span class="text-warning me-1">Warning</span>
                                </label>
                            </li>
                            <li class="checkbox-wrapper ">
                                <label class="check-box">
                                    <input type="checkbox">
                                    <span class="checkmark outline-info"></span>
                                    <span class="text-info me-1">Info</span>
                                </label>
                            </li>

                        </ul>
                    </div>

                    <pre class="li8 collapse mt-3" id="list8">
                    <code class="language-html">

                            &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                          &lt;h5&gt;Checkboxes&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body "&gt;
                          &lt;ul class="list-group d-flex flex-column "&gt;
                           &lt;li class="checkbox-wrapper"&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="checkbox"&gt;
                             &lt;span class="checkmark outline-primary"&gt;&lt;/span&gt;
                             &lt;span class="text-primary me-1"&gt;Primary&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="checkbox-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="checkbox"&gt;
                             &lt;span class="checkmark outline-secondary"&gt;&lt;/span&gt;
                             &lt;span class="text-secondary me-1"&gt;Secondary&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="checkbox-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="checkbox"&gt;
                             &lt;span class="checkmark outline-success"&gt;&lt;/span&gt;
                             &lt;span class="text-success me-1"&gt;Success&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="checkbox-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="checkbox"&gt;
                             &lt;span class="checkmark outline-danger"&gt;&lt;/span&gt;
                             &lt;span class="text-danger me-1"&gt;Danger&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="checkbox-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="checkbox"&gt;
                             &lt;span class="checkmark outline-warning"&gt;&lt;/span&gt;
                             &lt;span class="text-warning me-1"&gt;Warning&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                           &lt;li class="checkbox-wrapper "&gt;
                            &lt;label class="check-box"&gt;
                             &lt;input type="checkbox"&gt;
                             &lt;span class="checkmark outline-info"&gt;&lt;/span&gt;
                             &lt;span class="text-info me-1"&gt;Info&lt;/span&gt;
                            &lt;/label&gt;
                           &lt;/li&gt;
                        <br>
                          &lt;/ul&gt;
                         &lt;/div&gt;
                                &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>


            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Horizontal</h5>
                        <a  data-bs-toggle="collapse" href="#list9"
                            aria-expanded="false" aria-controls="list9">
                            <i class="ti ti-code source" data-source="li9"></i>
                        </a>
                    </div>
                    <div class="card-body list-horizontal gap-2 d-flex flex-column align-items-center">
                        <ul class="list-group list-group-horizontal">
                            <li class="list-group-item b-1-primary bg-light-primary">An item</li>
                            <li class="list-group-item b-1-primary bg-light-primary">A second item</li>
                            <li class="list-group-item b-1-primary bg-light-primary">A third item</li>
                        </ul>
                        <ul class="list-group list-group-horizontal ">
                            <li class="list-group-item b-r-1 b-1-secondary">An item</li>
                            <li class="list-group-item b-r-1 b-1-secondary">A second item</li>
                            <li class="list-group-item b-r-1 b-1-secondary">A third item</li>
                        </ul>
                        <ul class="list-group list-group-horizontal ">
                            <li class="list-group-item list-radius-left-horizontal b-1-success">An item
                            </li>
                            <li class="list-group-item b-1-success">A second item</li>
                            <li class="list-group-item list-radius-right-horizontal b-1-success">A third
                                item</li>
                        </ul>
                        <ul class="list-group list-group-horizontal ">
                            <li class="list-group-item  b-1-danger">An item</li>
                            <li class="list-group-item b-1-danger">A second item</li>
                            <li class="list-group-item  b-1-danger">A third item</li>
                        </ul>

                    </div>

                    <pre class="li9 collapse mt-3" id="list9">
                    <code class="language-html">

                        &lt;div class="card"&gt;
                         &lt;div class="card-header"&gt;
                         &lt;h5&gt;Horizontal&lt;/h5&gt;
                         &lt;/div&gt;
                         &lt;div class="card-body list-horizontal gap-2 d-flex flex-column align-items-center"&gt;
                         &lt;ul class="list-group list-group-horizontal"&gt;
                         &lt;li class="list-group-item b-1-primary bg-light-primary"&gt;An item&lt;/li&gt;
                         &lt;li class="list-group-item b-1-primary bg-light-primary"&gt;A second item&lt;/li&gt;
                         &lt;li class="list-group-item b-1-primary bg-light-primary"&gt;A third item&lt;/li&gt;
                         &lt;/ul&gt;
                         &lt;ul class="list-group list-group-horizontal-sm "&gt;
                         &lt;li class="list-group-item b-r-1 b-1-secondary"&gt;An item&lt;/li&gt;
                         &lt;li class="list-group-item b-r-1 b-1-secondary"&gt;A second item&lt;/li&gt;
                         &lt;li class="list-group-item b-r-1 b-1-secondary"&gt;A third item&lt;/li&gt;
                         &lt;/ul&gt;
                         &lt;ul class="list-group list-group-horizontal-lg "&gt;
                         &lt;li class="list-group-item list-radius-left-horizontal b-1-success"&gt;An item
                         &lt;/li&gt;
                         &lt;li class="list-group-item b-1-success"&gt;A second item&lt;/li&gt;
                         &lt;li class="list-group-item list-radius-right-horizontal b-1-success"&gt;A third
                         item&lt;/li&gt;
                         &lt;/ul&gt;
                         &lt;ul class="list-group list-group-horizontal-md "&gt;
                         &lt;li class="list-group-item b-1-danger"&gt;An item&lt;/li&gt;
                         &lt;li class="list-group-item b-1-danger"&gt;A second item&lt;/li&gt;
                         &lt;li class="list-group-item b-1-danger"&gt;A third item&lt;/li&gt;
                         &lt;/ul&gt;
                        <br>
                         &lt;/div&gt;
                        &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header code-header">
                        <h5>Variants</h5>
                        <a  data-bs-toggle="collapse" href="#list10"
                            aria-expanded="false" aria-controls="list10">
                            <i class="ti ti-code source" data-source="li10"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">A simple default list group item</li>
                            <li class="list-group-item text-light-primary">A simple primary list group
                                item</li>
                            <li class="list-group-item text-light-secondary">A simple secondary list
                                group item</li>
                            <li class="list-group-item text-light-success">A simple success list group
                                item</li>
                            <li class="list-group-item text-light-danger">A simple danger list group
                                item</li>
                            <li class="list-group-item text-light-warning">A simple warning list group
                                item</li>
                            <li class="list-group-item text-light-info">A simple info list group item
                            </li>
                            <li class="list-group-item text-light-light">A simple light list group item
                            </li>
                            <li class="list-group-item text-light-dark">A simple dark list group item
                            </li>
                        </ul>
                    </div>

                    <pre class="li10 collapse mt-3" id="list10">
                    <code class="language-html">

                         &lt;div class="card"&gt;
                          &lt;div class="card-header"&gt;
                           &lt;h5&gt;Variants&lt;/h5&gt;
                          &lt;/div&gt;
                          &lt;div class="card-body"&gt;
                           &lt;ul class="list-group"&gt;
                            &lt;li class="list-group-item"&gt;A simple default list group item&lt;/li&gt;
                            &lt;li class="list-group-item text-light-primary"&gt;A simple primary list group
                             item&lt;/li&gt;
                            &lt;li class="list-group-item text-light-secondary"&gt;A simple secondary list
                             group item&lt;/li&gt;
                            &lt;li class="list-group-item text-light-success"&gt;A simple success list group
                             item&lt;/li&gt;
                            &lt;li class="list-group-item text-light-danger"&gt;A simple danger list group
                             item&lt;/li&gt;
                            &lt;li class="list-group-item text-light-warning"&gt;A simple warning list group
                             item&lt;/li&gt;
                            &lt;li class="list-group-item text-light-info"&gt;A simple info list group item
                            &lt;/li&gt;
                            &lt;li class="list-group-item text-light-light"&gt;A simple light list group item
                            &lt;/li&gt;
                            &lt;li class="list-group-item text-light-dark"&gt;A simple dark list group item
                            &lt;/li&gt;
                           &lt;/ul&gt;
                          &lt;/div&gt;
                         &lt;/div&gt;

                    </code>
                  </pre>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Content</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-content">
                            <li class="list-group-item list-group-item-action active"
                                aria-current="true">
                                <div class="position-absolute">
                          <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                            <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50">
                            <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                          </span>
                                </div>
                                <div class="mg-s-60">
                                    <h6 class="mb-0">Allen Rollins</h6>
                                    <p class="mb-0 text-secondary">Allen@509</p>
                                    <div class="mt-2">
                                        <p class="mb-0">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nam accusantium ipsum?
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <small>3 days ago</small>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <div class="position-absolute">
                          <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                            <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid b-r-50">
                            <span class="position-absolute top-0 end-0 d-flex-center bg-warning border-light rounded-circle text-center h-20 w-20 f-s-10 start-30">3</span>
                          </span>
                                </div>
                                <div class="mg-s-60">
                                    <h6 class="mb-0">Holly Mckenzie</h6>
                                    <p class="mb-0 text-secondary">Holly@567</p>
                                    <div class="mt-2">
                                        <p class="mb-0">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nam accusantium ipsum?
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <small>3 days ago</small>
                                </div>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <div class="position-absolute">
                          <span class="bg-secondary h-45 w-45 d-flex-center b-r-50 position-relative">
                            <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid b-r-50">
                            <span class="position-absolute top-0 d-flex-center bg-danger border border-light rounded-circle text-center h-20 w-20 f-s-10 start-30"><i class="ti ti-mail"></i></span>
                          </span>
                                </div>
                                <div class="mg-s-60">
                                    <h6 class="mb-0">Justin Park</h6>
                                    <p class="mb-0 text-secondary">Park@001</p>
                                    <div class="mt-2">
                                        <p class="mb-0">
                                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque nam accusantium ipsum?
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <small>3 days ago</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Contacts</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group b-r-0 list-contact-box">
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="checkbox-wrapper ">
                                                <label class="check-box mb-0">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </div>
                                            <div class="w-40 d-flex-center b-r-50 position-relative">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt=""
                                                     class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                                <span
                                                    class="position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-truncate me-1">
                                        <h6 class="mb-0">Leland Franecki</h6>
                                        <div class="text-secondary">He wanted her job, and it would be easy enough..</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="checkbox-wrapper ">
                                                <label class="check-box mb-0">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </div>
                                            <div class="w-40 d-flex-center b-r-50 position-relative">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}} " alt=""
                                                     class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                                <span
                                                    class="position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-truncate me-1">
                                        <h6 class="mb-0">Rafael Veum</h6>
                                        <div class="text-secondary">He didn't want to go out on such a night but...</div>
                                    </div>
                                </div>
                            </li>

                            <li class="list-group-item list-group-content">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="checkbox-wrapper ">
                                                <label class="check-box mb-0">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </div>
                                            <div class="w-40 d-flex-center b-r-50 position-relative">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt=""
                                                     class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                                <span
                                                    class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-truncate me-1">
                                        <h6 class="mb-0">Ray Schamberger</h6>
                                        <div class="text-secondary">The girl shouldn't have been sacked but if he said..</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="checkbox-wrapper ">
                                                <label class="check-box mb-0">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </div>
                                            <div class="w-40 d-flex-center b-r-50 position-relative">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt=""
                                                     class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                                <span
                                                    class="position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-truncate me-1">
                                        <h6 class="mb-0">Mack Gutkowski</h6>
                                        <div class="text-secondary">Everything about her was a lie</div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="checkbox-wrapper">
                                                <label class="check-box mb-0">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </div>
                                            <div class="w-40 d-flex-center b-r-50 position-relative">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt=""
                                                     class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                                <span
                                                    class="position-absolute top-0 end-0 p-1 bg-secondary border border-light rounded-circle"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-truncate me-1">
                                        <h6 class="mb-0">Mack Gutkowski</h6>
                                        <div class="text-secondary">She had followed the woman for days and at last her.. </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item list-group-content">
                                <div class="d-flex">
                                    <div class="me-3">
                                        <div class="d-flex align-items-center">
                                            <div class="checkbox-wrapper ">
                                                <label class="check-box mb-0">
                                                    <input type="checkbox">
                                                    <span class="checkmark outline-secondary ms-2"></span>
                                                </label>
                                            </div>
                                            <div class="w-40 d-flex-center b-r-50 position-relative">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt=""
                                                     class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                                <span
                                                    class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-truncate me-1">
                                        <h6 class="mb-0">Lee Rosenbaum</h6>
                                        <div class="text-secondary">He had kept their mother alive in their thoughts..</div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-xxl-4">
                <div class="card equal-card ">
                    <div class="card-header">
                        <h5>People</h5>
                    </div>
                    <div class="card-body">
                        <div class="list-group list-group-flush app-scroll overflow-auto list-people">
                            <div class="sticky-top bg-white p-l-10 f-w-500 f-s-16">A</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Winston Keeling</a>
                                        <div class="text-muted text-truncate">They had to work together, so they were going to have
                                            to learn to get along</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Sunny Airey</a>
                                        <div class="text-muted text-truncate">If I'd become an athlete, I'd still have my freedom.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Northrop Alforde</a>
                                        <div class="text-muted text-truncate">If I'd become an athlete, I'd still have my freedom.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Virgil Archbutt</a>
                                        <div class="text-muted text-truncate">The key to surviving vampires will be revealed in this
                                            book.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Guthry Arlott</a>
                                        <div class="text-muted text-truncate">Stephie Beettie is at the heart of everything I do.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Arlie Armstead</a>
                                        <div class="text-muted text-truncate">People trust me with their doorkeys; they shouldn't.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Ashton Arndell</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Kass Aspinal</a>
                                        <div class="text-muted text-truncate">So far, the disease had cropped up in five different
                                            towns</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Rabi Attle</a>
                                        <div class="text-muted text-truncate">When he lifted his head, she barely recognised him for
                                            the bruises</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">B</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Cary Baleine</a>
                                        <div class="text-muted text-truncate">Most vivid amongst the memories of his home town</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Borden Barkworth</a>
                                        <div class="text-muted text-truncate">Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Regan Baser</a>
                                        <div class="text-muted text-truncate">He had kept their mother alive in their thoughts. Too
                                            alive, perhaps.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Leesa Beaty</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Guendolen Belliss</a>
                                        <div class="text-muted text-truncate">The first Christmas she could remember was also her
                                            best Christmas ever.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Tallie Bettis</a>
                                        <div class="text-muted text-truncate">They had to work together, so they would need to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Donnie Biggin</a>
                                        <div class="text-muted text-truncate">He was successful, attractive and charming but people
                                            of that age always had secrets</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Mel Bilovus</a>
                                        <div class="text-muted text-truncate">"It's all bills, bills, bills. That's my only answer
                                            now," he said, pointing to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Errol Blackley</a>
                                        <div class="text-muted text-truncate">Who would have poisoned the old man's dog?</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Jermaine Booley</a>
                                        <div class="text-muted text-truncate">He had the urge to clear the ground, to look out and
                                            see nothing</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Cleavland Bratchell</a>
                                        <div class="text-muted text-truncate">She decided to go to her father's grave, to ask his
                                            advicet</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Luca Brayn</a>
                                        <div class="text-muted text-truncate">He'd had a bad day and just needed something to make
                                            him feel better</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Tonye Brikner</a>
                                        <div class="text-muted text-truncate">She was beginning to realise how far down in her
                                            memory she'd buried her teenage years</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Granger Brockton</a>
                                        <div class="text-muted text-truncate">She kept checking her phone and email, wishing someone
                                            would make contact</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Arin Broxup</a>
                                        <div class="text-muted text-truncate">The Ferrari stopped and the tinted window opened to
                                            revealt</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Gwennie Bryce</a>
                                        <div class="text-muted text-truncate">"It's all bills, bills, bills. That's my only answer
                                            now," he said, pointing to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Kerwinn Burkart</a>
                                        <div class="text-muted text-truncate">They had to work together, so they would need to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Tamqrah Busher</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">C</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Delaney Cairney</a>
                                        <div class="text-muted text-truncate">On the Livingstone estate, flies were sometimes the
                                            first indication that someone had died</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Rooney Cassy</a>
                                        <div class="text-muted text-truncate">When he lifted his head, she barely recognised him for
                                            the bruises</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Howard Catteroll</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Christabel Charlwood</a>
                                        <div class="text-muted text-truncate">He had kept their mother alive in their thoughts. Too
                                            alive, perhaps.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Portie Christou</a>
                                        <div class="text-muted text-truncate">People trust me with their doorkeys; they shouldn't.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Trefor Cocksedge</a>
                                        <div class="text-muted text-truncate">A custom positioned dialog</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Mata Codlin</a>
                                        <div class="text-muted text-truncate">He had kept their mother alive in their thoughts. Too
                                            alive, perhaps.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Julietta Coke</a>
                                        <div class="text-muted text-truncate">A custom positioned dialog</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Tonia Colqueran</a>
                                        <div class="text-muted text-truncate">He was successful, attractive and charming but people
                                            of that age always had secrets</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Tessie Curzon</a>
                                        <div class="text-muted text-truncate">They had to work together, so they would need to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">D</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Creighton Deluze</a>
                                        <div class="text-muted text-truncate">They had to work together, so they would need to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Otha Denial</a>
                                        <div class="text-muted text-truncate">As the prison gate closed behind him, he saw someone
                                            waiting for him</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Verne Diment</a>
                                        <div class="text-muted text-truncate">When he lifted his head, she barely recognised him for
                                            the bruises</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Stafani Ding</a>
                                        <div class="text-muted text-truncate">Most vivid amongst the memories of his home town</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Georgeanna Do Rosario</a>
                                        <div class="text-muted text-truncate">Stephie Beettie is at the heart of everything I do.t
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Ninon Don</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Emmott Dowsett</a>
                                        <div class="text-muted text-truncate">So far, the disease had cropped up in five different
                                            towns</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">E</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Carroll Erat</a>
                                        <div class="text-muted text-truncate">The first Christmas she could remember was also her
                                            best Christmas ever.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Peria Errichiello</a>
                                        <div class="text-muted text-truncate">Stephie Beettie is at the heart of everything I do.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Dyann Escala</a>
                                        <div class="text-muted text-truncate">Stephie Beettie is at the heart of everything I do.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Chalmers Ewington</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">F</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Jarred Farthin</a>
                                        <div class="text-muted text-truncate">They had to work together, so they were going to have
                                            to learn to get along</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Geoffry Flaunders</a>
                                        <div class="text-muted text-truncate">The key to surviving vampires will be revealed in this
                                            book.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">G</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Merrily Garforth</a>
                                        <div class="text-muted text-truncate">"It's all bills, bills, bills. That's my only answer
                                            now," he said, pointing to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Johnnie Gilby</a>
                                        <div class="text-muted text-truncate">The first Christmas she could remember was also her
                                            best Christmas ever.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Byrom Gillson</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Gratia Gooley</a>
                                        <div class="text-muted text-truncate">Stephie Beettie is at the heart of everything I do.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Leigha Gorce</a>
                                        <div class="text-muted text-truncate">They had to work together, so they were going to have
                                            to learn to get along</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Jennilee Graves</a>
                                        <div class="text-muted text-truncate">If I'd become an athlete, I'd still have my freedom.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Lianne Greenroa</a>
                                        <div class="text-muted text-truncate">As the prison gate closed behind him, he saw someone
                                            waiting for him</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Barbara Grenkov</a>
                                        <div class="text-muted text-truncate">People trust me with their doorkeys; they shouldn't.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Fifi Gumm</a>
                                        <div class="text-muted text-truncate">People trust me with their doorkeys; they shouldn't.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">H</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Neale Havock</a>
                                        <div class="text-muted text-truncate">Most vivid amongst the memories of his home town</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Haze Hubbert</a>
                                        <div class="text-muted text-truncate">If I'd become an athlete, I'd still have my freedom.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Mallory Hulme</a>
                                        <div class="text-muted text-truncate">The key to surviving vampires will be revealed in this
                                            book.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Karlis Hundell</a>
                                        <div class="text-muted text-truncate">People trust me with their doorkeys; they shouldn't.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">I</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Timotheus Iacomo</a>
                                        <div class="text-muted text-truncate">The key to surviving vampires will be revealed in this
                                            book.t</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Sean Ilyasov</a>
                                        <div class="text-muted text-truncate">He had kept their mother alive in their thoughts. Too
                                            alive, perhaps.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Reynold Indgs</a>
                                        <div class="text-muted text-truncate">He had kept their mother alive in their thoughts. Too
                                            alive, perhaps.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Hillard Ivic</a>
                                        <div class="text-muted text-truncate">Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">J</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Sam Jarlmann</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">K</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Thatcher Keel</a>
                                        <div class="text-muted text-truncate">People trust me with their doorkeys; they shouldn't.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Perren Keemar</a>
                                        <div class="text-muted text-truncate">Stephie Beettie is at the heart of everything I do.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Bernarr Kellett</a>
                                        <div class="text-muted text-truncate">Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Maddy Kenneway</a>
                                        <div class="text-muted text-truncate">If I'd become an athlete, I'd still have my freedom.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Sandi Keys</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Arlan Kilrow</a>
                                        <div class="text-muted text-truncate">On the Livingstone estate, flies were sometimes the
                                            first indication that someone had died</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Paweł Kuna</a>
                                        <div class="text-muted text-truncate">If I'd become an athlete, I'd still have my freedom.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">L</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Marsha Labat</a>
                                        <div class="text-muted text-truncate">Lorem ipsum dolor sit
                                            amet, consectetuer adipiscing elit</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Beatrix Ladewig</a>
                                        <div class="text-muted text-truncate">So far, the disease had cropped up in five different
                                            towns</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Zitella Lawes</a>
                                        <div class="text-muted text-truncate">The key to surviving vampires will be revealed in this
                                            book.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Maryjo Lebarree</a>
                                        <div class="text-muted text-truncate">If I'd become an athlete, I'd still have my freedom.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Price Letixier</a>
                                        <div class="text-muted text-truncate">He had kept their mother alive in their thoughts. Too
                                            alive, perhaps.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Emmy Levet</a>
                                        <div class="text-muted text-truncate">He was successful, attractive and charming but people
                                            of that age always had secrets</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Jeffie Lewzey</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Leandra Liddicoat</a>
                                        <div class="text-muted text-truncate">When he lifted his head, she barely recognised him for
                                            the bruises</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Rivy Lochet</a>
                                        <div class="text-muted text-truncate">A custom positioned dialog</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">M</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Claudelle MacKilroe</a>
                                        <div class="text-muted text-truncate">He had kept their mother alive in their thoughts. Too
                                            alive, perhaps.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Bettina Matuszyk</a>
                                        <div class="text-muted text-truncate">As soon as she walked in, she felt the tension</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Odelinda McCosh</a>
                                        <div class="text-muted text-truncate">People trust me with their doorkeys; they shouldn't.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Harriot McGeady</a>
                                        <div class="text-muted text-truncate">A custom positioned dialog</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Netti McGreay</a>
                                        <div class="text-muted text-truncate">Deliver the information from the text in a unique way.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Shana Meryett</a>
                                        <div class="text-muted text-truncate">Provide a new rendition of the given text.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Marchelle Millam</a>
                                        <div class="text-muted text-truncate">Express the content of the text in a distinct manner
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Riane Milward</a>
                                        <div class="text-muted text-truncate">Reconstruct the text using different words and
                                            structure.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Crystie Mingaud</a>
                                        <div class="text-muted text-truncate">An expert in utilizing various design tools and
                                            software to create stunning web layouts</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Lorry Mion</a>
                                        <div class="text-muted text-truncate">"It's all bills, bills, bills. That's my only answer
                                            now," he said, pointing to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Parke Moneypenny</a>
                                        <div class="text-muted text-truncate"> A professional who specializes in creating and
                                            designing websites</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Brinn Moses</a>
                                        <div class="text-muted text-truncate">Someone who stays updated with the latest design
                                            trends and technologies in the web design industry</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Elston Muffett</a>
                                        <div class="text-muted text-truncate">An individual who ensures that websites are responsive
                                            and compatible across different devices and browsers.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Avivah Mugleston</a>
                                        <div class="text-muted text-truncate"> Up-to-date with the latest web development trends and
                                            technologies</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">N</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Linnet Newborn</a>
                                        <div class="text-muted text-truncate">Skilled in creating and designing websites</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Andros Newcome</a>
                                        <div class="text-muted text-truncate">Familiar with various web development frameworks and
                                            tools</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Juanita Nobles</a>
                                        <div class="text-muted text-truncate">Able to collaborate with designers and clients to
                                            create customized websites</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Jaymee Noni</a>
                                        <div class="text-muted text-truncate"> Experienced in building responsive and user-friendly
                                            websites</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">O</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Roseline OIlier</a>
                                        <div class="text-muted text-truncate"> A skilled individual who ensures that websites are
                                            responsive and optimized for different devices and screen sizes</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Parker Oaten</a>
                                        <div class="text-muted text-truncate">Reconstruct the text using different words and
                                            structure.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">P</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Johannes Paternoster</a>
                                        <div class="text-muted text-truncate">"It's all bills, bills, bills. That's my only answer
                                            now," he said, pointing to</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Stephie Petrolli</a>
                                        <div class="text-muted text-truncate">Who would have poisoned the old man's dog?</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Egan Poetz</a>
                                        <div class="text-muted text-truncate">Deliver the information from the text in a unique way.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Mavra Portail</a>
                                        <div class="text-muted text-truncate">She kept checking her phone and email, wishing someone
                                            would make contact</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Danette Pountney</a>
                                        <div class="text-muted text-truncate">It was just for one night</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Desirae Prahm</a>
                                        <div class="text-muted text-truncate">A custom positioned dialog</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">Q</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Gayel Quesne</a>
                                        <div class="text-muted text-truncate">She kept checking her phone and email, wishing someone
                                            would make contact</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">R</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Clayton Rosentholer</a>
                                        <div class="text-muted text-truncate">She decided to go to her father's grave, to ask his
                                            advice</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Ban Rzehor</a>
                                        <div class="text-muted text-truncate">An expert in utilizing various design tools and
                                            software to create stunning web layout</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">S</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Madeleine Salle</a>
                                        <div class="text-muted text-truncate">Offer a different phrasing for the given text.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Annie Scarisbrick</a>
                                        <div class="text-muted text-truncate">Give the text a fresh perspective by rephrasing it.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Yvor Sheldon</a>
                                        <div class="text-muted text-truncate">Express the content of the text in a distinct manner
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Haskel Shelper</a>
                                        <div class="text-muted text-truncate">Deliver the information from the text in a unique way.
                                        </div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Guthry Shimman</a>
                                        <div class="text-muted text-truncate">It was just for one night</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Wilburt Siegertsz</a>
                                        <div class="text-muted text-truncate">A developer who specializes in React is commonly
                                            referred to as a React developer.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Kellie Skingley</a>
                                        <div class="text-muted text-truncate"> Someone who has expertise in developing applications
                                            using the React framework is known as a React developer.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Sawyere Skipsea</a>
                                        <div class="text-muted text-truncate"> Well-versed in React development practices</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Kathryn Skypp</a>
                                        <div class="text-muted text-truncate">Proficient in React programming</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/11.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Dunn Slane</a>
                                        <div class="text-muted text-truncate">Knowledgeable in React framework</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/12.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Freedman Smith</a>
                                        <div class="text-muted text-truncate">Familiar with React libraries and tools</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/13.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Harris Speer</a>
                                        <div class="text-muted text-truncate">Competent in React component development</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/14.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Cesya Spritt</a>
                                        <div class="text-muted text-truncate">A developer who specializes in React is commonly
                                            referred to as a React developer.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/15.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Emlen Stairmand</a>
                                        <div class="text-muted text-truncate">Familiar with various web development frameworks and
                                            tools</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/16.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Mela Sydes</a>
                                        <div class="text-muted text-truncate">A custom positioned dialog</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">T</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-secondary">
                                                <img src="{{asset('backend/assets/images/avtar/1.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Neville Trobridge</a>
                                        <div class="text-muted text-truncate">Developer with a focus on React technology</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-success">
                                                <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Onfre Tull</a>
                                        <div class="text-muted text-truncate">Developer with a focus on React technology</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-danger">
                                                <img src="{{asset('backend/assets/images/avtar/3.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Hewie Tweddle</a>
                                        <div class="text-muted text-truncate">Developer with a focus on React technology</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">U</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-warning">
                                                <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Flossi Uttley</a>
                                        <div class="text-muted text-truncate">Detail-oriented and committed to delivering
                                            high-quality web solutions</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">V</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-info">
                                                <img src="{{asset('backend/assets/images/avtar/5.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Netti Vondrasek</a>
                                        <div class="text-muted text-truncate">A creative individual who combines technical knowledge
                                            and artistic skills to design and build websites</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-header sticky-top bg-white p-l-10 f-w-500 f-s-16">W</div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-light">
                                                <img src="{{asset('backend/assets/images/avtar/6.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Gerti Washington</a>
                                        <div class="text-muted text-truncate"> Capable of troubleshooting and debugging website
                                            issues</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-dark">
                                                <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Bord Wheatcroft</a>
                                        <div class="text-muted text-truncate">Familiar with various web development frameworks and
                                            tools</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="#">
                                            <div class="h-40 w-40 d-flex-center b-r-10 overflow-hidden text-bg-primary">
                                                <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt="" class="img-fluid">
                                            </div>

                                        </a>
                                    </div>
                                    <div class="col text-truncate">
                                        <a href="#" class="text-body d-block">Nanni Wooler</a>
                                        <div class="text-muted text-truncate">Reconstruct the text using different words and
                                            structure.</div>
                                    </div>
                                    <div class="col-1 icon">
                                        <i class="ti ti-mail"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Contacts List</h5>
                    </div>
                    <div class="card-body bg-light-light">
                        <div class="row contact-list">
                            <div class="col-sm-6 col-lg-4 col-xxl-6">
                                <div class="contact-listbox b-1-secondary mb-3">
                                    <div class="text-center">
                                        <img src="{{asset('backend/assets/images/avtar/4.png')}}" alt=""
                                             class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                    </div>
                                    <div class="contact-stared">
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <h6 class="mb-0 mt-2">Omar Krajcik</h6>
                                    <p>+3584227649850</p>
                                    <p>(UAS)</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-6">
                                <div class="contact-listbox b-1-secondary mb-3">
                                    <div class="text-center">
                                        <img src="{{asset('backend/assets/images/avtar/2.png')}}" alt=""
                                             class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                    </div>
                                    <div class="contact-stared">
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <h6>Rudy Bode</h6>
                                    <p>+3587394408149</p>
                                    <p>(UAS)</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-6">
                                <div class="contact-listbox b-1-secondary mb-3">
                                    <div class="text-center">
                                        <img src="{{asset('backend/assets/images/avtar/10.png')}}" alt=""
                                             class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                    </div>
                                    <div class="contact-stared">
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <h6 class="mb-0 mt-1">Charlie Christiansen</h6>
                                    <p>+18402727121</p>
                                    <p>(UAS)</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-6">
                                <div class="contact-listbox b-1-secondary mb-3">
                                    <div class="text-center">
                                        <img src="{{asset('backend/assets/images/avtar/09.png')}}" alt=""
                                             class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                    </div>
                                    <div class="contact-stared">
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <h6>Lance Schiller</h6>
                                    <p>+16286413791</p>
                                    <p>(Drivers,New zealand)</p>

                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-6">
                                <div class="contact-listbox b-1-secondary">
                                    <div class="text-center">
                                        <img src="{{asset('backend/assets/images/avtar/08.png')}}" alt=""
                                             class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                    </div>
                                    <div class="contact-stared">
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <h6>Troy Cartwright</h6>
                                    <p>+18607148019</p>
                                    <p>(UAS)</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xxl-6">
                                <div class="contact-listbox b-1-secondary mt-3 mt-md-0">
                                    <div class="text-center">
                                        <img src="{{asset('backend/assets/images/avtar/07.png')}}" alt=""
                                             class="w-40 h-40 object-fit-cover img-fluid b-r-50">
                                    </div>
                                    <div class="contact-stared">
                                        <i class="ti ti-star-filled"></i>
                                    </div>
                                    <h6>Israel Kshlerin</h6>
                                    <p>+16805796236</p>
                                    <p>(Drivers,New zealand)</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- list end -->
    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
