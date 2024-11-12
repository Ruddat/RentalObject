@extends('layout.master')
@section('title', 'Dual Listbox')
@section('css')
    <!--  dual-listbox css-->
    <link href="{{asset('assets/vendor/dual_listboxes/dual-listbox.css" rel="stylesheet">
@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Dual Listboxes</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                                        <span>
                                            <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                                        </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Dual Listboxes</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <div class="row">
            <!--  1. Select by class-->
            <div class="col-xxl-6">
                <div class="card">
                    <a class="card-header code-header" data-bs-toggle="collapse" href="#collapseExample"
                       aria-expanded="false" aria-controls="collapseExample">
                        <h5>Select by class</h5>
                        <i class="ti ti-code source" data-source="dlb1"></i>
                    </a>
                    <div class="card-body">
                        <select class="select1" multiple>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <pre class="dlb1 collapse mt-3" id="collapseExample">
                    <code class="language-html">&lt;select class=&quot;select1&quot; multiple&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;script&gt;
    let dlb1 = new DualListbox('.select1');
&lt;/script&gt;</code>
                    </pre>
                    </div>
                </div>
            </div>

            <!--          2.  Add options and add eventListeners-->
            <div class="col-xxl-6">
                <div class="card">
                    <a class="card-header code-header" data-bs-toggle="collapse" href="#dlb2Example"
                       aria-expanded="false" aria-controls="dlb2Example">

                        <h5> Add options and add eventListeners </h5>
                        <i class="ti ti-code source" data-source="dlb2"></i>

                    </a>
                    <div class="card-body">

                        <div class="selected-element d-flex mb-2 f-w-600">
                            <label>Selected element :&nbsp;</label>
                            <ul class="changed-element text-primary">
                                <li> Nothing yet</li>
                            </ul>
                        </div>
                        <select class="select2 " multiple>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>

                        <pre class="dlb2 collapse mt-3" id="dlb2Example">
                    <code class="language-html">&lt;select class=&quot;select2&quot; multiple&gt;
                    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                    &lt;/select&gt;

                    &lt;script&gt;
                        let dlb2 = new DualListbox('.select2', {
                            availableTitle:'Available numbers',
                            selectedTitle: 'Selected numbers',
                            addButtonText: '>',
                            removeButtonText: '&gt;',
                            addAllButtonText: '>>',
                            removeAllButtonText: '&gt;&gt;',
                            searchPlaceholder: 'search numbers'
                        });
                        dlb2.addEventListener('added', function(event){
                            console.log(event);
                        });
                        dlb2.addEventListener('removed', function(event){
                            console.log(event);
                        });
                    &lt;/script&gt;
                    </code>
                </pre>

                    </div>
                </div>
            </div>

            <!--            3. Remove all the buttons from being rendered.-->
            <div class="col-xxl-6">
                <div class="card">
                    <a class="card-header code-header" data-bs-toggle="collapse" href="#dlb3Example"
                       aria-expanded="false" aria-controls="dlb3Example">
                        <h5>Remove all the buttons from being rendered.</h5>
                        <i class="ti ti-code source" data-source="dlb3"></i>
                    </a>
                    <div class="card-body">

                        <select class="select3" multiple>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <pre class="dlb3 collapse mt-3" id="dlb3Example">
                    <code class="language-html">&lt;select class=&quot;select3&quot; multiple&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;script&gt;
    let dlb3 = new DualListbox('.select3', {
        showAddButton: false,
        showAddAllButton: false,
        showRemoveButton: false,
        showRemoveAllButton: false
    });
&lt;/script&gt;</code>
                </pre>

                    </div>
                </div>
            </div>

            <!--           4. Show the sort buttons-->
            <div class="col-xxl-6">
                <div class="card">
                    <a class="card-header code-header" data-bs-toggle="collapse" href="#dlb4Example"
                       aria-expanded="false" aria-controls="dlb4Example">
                        <h5> Show the sort buttons</h5>
                        <i class="ti ti-code source" data-source="dlb4"></i>
                    </a>

                    <div class="card-body">


                        <select class="select4" multiple>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                            <option value="4">Four</option>
                            <option value="5">Five</option>
                            <option value="6">Six</option>
                            <option value="7">Seven</option>
                            <option value="8">Eight</option>
                            <option value="9">Nine</option>
                        </select>

                        <pre class="dlb4 collapse mt-3" id="dlb4Example">
                    <code class="language-html">&lt;select class=&quot;select4&quot; multiple&gt;
    &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
    &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
    &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;script&gt;
    let dlb4 = new DualListbox('.select4', {
        showSortButtons: true,
    });
&lt;/script&gt;</code>
                </pre>

                    </div>
                </div>
            </div>


            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>All options</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bottom-border table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Option</th>
                                    <th>Default</th>
                                    <th>Excepted values</th>
                                    <th>Explanation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>draggable</th>
                                    <td>
                                        <code>true</code>
                                    </td>
                                    <td>
                                        <code>boolean</code>
                                    </td>
                                    <td>If the list items should be draggable.</td>
                                </tr>
                                <tr>
                                    <th>showSortButtons</th>
                                    <td>
                                        <code>false</code>
                                    </td>
                                    <td>
                                        <code>boolean</code>
                                    </td>
                                    <td> If the sort buttons should be shown. (up and down)</td>
                                </tr>
                                <tr>
                                    <th>enableDoubleClick</th>
                                    <td>
                                        <code>true</code>
                                    </td>
                                    <td>
                                        <code>boolean</code>
                                    </td>
                                    <td> If double clicking a list items should change column.</td>
                                </tr>
                                <tr>
                                    <th>showAddButton</th>
                                    <td>
                                        <code>true</code>
                                    </td>
                                    <td>
                                        <code>boolean</code>
                                    </td>
                                    <td>If the "add" button should be shown.</td>
                                </tr>
                                <tr>
                                    <th>showRemoveButton</th>
                                    <td>
                                        <code>true</code>
                                    </td>
                                    <td>
                                        <code>boolean</code>
                                    </td>
                                    <td>If the "remove" button should be shown.</td>
                                </tr>
                                <tr>
                                    <th>showAddAllButton</th>
                                    <td>
                                        <code>true</code>
                                    </td>
                                    <td>
                                        <code>boolean</code>
                                    </td>
                                    <td>If the "add all" button should be shown.</td>
                                </tr>
                                <tr>
                                    <th>showRemoveAllButton</th>
                                    <td>
                                        <code>true</code>
                                    </td>
                                    <td>
                                        <code>boolean</code>
                                    </td>
                                    <td>If the "remove all" button should be shown.</td>
                                </tr>
                                <tr>
                                    <th>availableTitle</th>
                                    <td>
                                        <code>"Available options"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The title that should be shown above the "Available options"</td>
                                </tr>
                                <tr>
                                    <th>selectedTitle</th>
                                    <td>
                                        <code>"Selected options"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The title that should be shown above the "Selected options"</td>
                                </tr>
                                <tr>
                                    <th>addButtonText</th>
                                    <td>
                                        <code>"add"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The text that should be displayed in the "add" button.</td>
                                </tr>
                                <tr>
                                    <th>removeButtonText</th>
                                    <td>
                                        <code>"remove"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The text that should be displayed in the "remove" button.</td>
                                </tr>
                                <tr>
                                    <th>addAllButtonText</th>
                                    <td>
                                        <code>"add all"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The text that should be displayed in the "add all" button.</td>
                                </tr>
                                <tr>
                                    <th>removeAllButtonText</th>
                                    <td>
                                        <code>"remove all"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The text that should be displayed in the "remove all" button.</td>
                                </tr>
                                <tr>
                                    <th>searchPlaceholder</th>
                                    <td>
                                        <code>"Search"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The text that should be displayed in the "search" fields.</td>
                                </tr>
                                <tr>
                                    <th>upButtonText</th>
                                    <td>
                                        <code>"up"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The text that should be displayed in the "up" button. (only when
                                        sorting is enabled)
                                    </td>
                                </tr>
                                <tr>
                                    <th>downButtonText</th>
                                    <td>
                                        <code>"down"</code>
                                    </td>
                                    <td>
                                        <code>string</code>
                                    </td>
                                    <td> The text that should be displayed in the "down" button. (only when
                                        sorting is enabled)
                                    </td>
                                </tr>
                                <tr>
                                    <th>options</th>
                                    <td>
                                        <code>undefined</code>
                                    </td>
                                    <td>
                                        <code>Array&lt;{text:"text to display", value: "what
                                            the select value should be" , selected: false, order: 1}&gt;
                                        </code>
                                    </td>
                                    <td> A list of options that should be added. This will overwrite the
                                        select options
                                    </td>
                                </tr>
                                <tr>
                                    <th>sortFunction</th>
                                    <td>
                                        <code>Function</code>
                                    </td>
                                    <td>
                                        <code>Function</code>
                                    </td>
                                    <td> A function to overwrite the default sorting that will be applied.
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Public functions</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bottom-border table-hover mb-0">
                                <thead>
                                <tr>
                                    <th>Function name</th>
                                    <th>Arguments</th>
                                    <th>Explanation</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th>changeOrder</th>
                                    <td>liItem, newPosition</td>
                                    <td> Change the order of the given list Element and the new position
                                    </td>
                                </tr>
                                <tr>
                                    <th>addOptions</th>
                                    <td>options</td>
                                    <td>Add a single option to the options list.</td>
                                </tr>
                                <tr>
                                    <th>addOption</th>
                                    <td>option, index (optional)</td>
                                    <td> Add a single option to the options list. Optionally add the
                                        index.
                                    </td>
                                </tr>
                                <tr>
                                    <th>addEventListener</th>
                                    <td>eventName, callback</td>
                                    <td>Add an eventListener</td>
                                </tr>
                                <tr>
                                    <th>changeSelected</th>
                                    <td>listItem</td>
                                    <td> Change the selected state of the list element.</td>
                                </tr>
                                <tr>
                                    <th>actionAllSelected</th>
                                    <td>event (optional)</td>
                                    <td>Change all items to be selected.</td>
                                </tr>
                                <tr>
                                    <th>actionAllDeselected</th>
                                    <td>event (optional)</td>
                                    <td>Change all items to not be selected.</td>
                                </tr>
                                <tr>
                                    <th>redraw</th>
                                    <td></td>
                                    <td>Redraw the lists.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

    <!--Dual listbox js-->
    <script src="{{asset('assets/vendor/dual_listboxes/dual-listbox.js')}}"></script>

    <!--js-->
    <script src="{{asset('assets/js/dual-listbox.js')}}"></script>
@endsection

