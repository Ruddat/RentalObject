@extends('layout.master')
@section('title', 'Form Validation')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Form Validation</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Form Validation</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Form Validation start -->
        <div class="row">
            <!-- Tooltips start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column gap-2">
                        <h5>Tooltips</h5>
                        <p class="text-secondary">If your form layout allows it, you can swap the SP <span
                                class="text-danger"> .{valid|invalid}-feedback</span> classes for
                            <span class="text-danger"> .{valid|invalid}-tooltip</span> classes to display validation feedback
                            in a styled tooltip. Be sure to
                            have a parent with <span class="text-danger">position: relative </span>on it for tooltip
                            positioning. In the example below, our
                            column classes have this already, but your project may require an alternative setup.
                        </p>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 app-form" id="form-validation">
                            <div class="col-md-6">
                                <label for="userName" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="userName" name="userName">
                                <div class="mt-1">
                                    <span id="userNameError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                                <div class="mt-1">
                                    <span id="emailError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                                <div class="mt-1">
                                    <span id="passwordError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="1234 Main St">
                                <div class="mt-1">
                                    <span id="addressError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="address2" class="form-label">Address 2</label>
                                <input type="text" class="form-control" id="address2" placeholder="Address">
                                <div class="mt-1">
                                    <span id="addressError2" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="city" class="form-label">City</label>
                                <input type="text" class="form-control" id="city">
                                <div class="mt-1">
                                    <span id="cityError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <label for="zipCode" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zipCode">
                                <div class="mt-1">
                                    <span id="zipCodeError" class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check d-flex gap-1">
                                    <input class="form-check-input mg-2" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" value="Submit" class="btn btn-primary">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Tooltips end -->
            <!-- Custom Styles start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column gap-2">
                        <h5>Custom Styles</h5>
                        <div>
                            <p class="text-secondary">For custom Bootstrap form validation messages, you’ll need to add the
                                <span class="text-danger">
                          novalidate </span>boolean attribute to your <span class="text-danger">

                        </span> This disables the browser default feedback tooltips, but still provides access to the
                                form
                                validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the
                                submit button and relay feedback to you.
                            </p>
                            <p class="text-secondary">When attempting to submit, you’ll see the <span class="text-danger">
                          :invalid and :valid
                        </span>styles applied to your form controls.</p>
                        </div>
                    </div>
                    <div class="card-body">
                        <form class="row g-3 needs-validation" novalidate>
                            <div class="col-md-4">
                                <label for="validationCustom01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustom02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="validationCustomUsername" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                    <input type="text" class="form-control" id="validationCustomUsername"
                                           aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback">
                                        Please choose a username.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationCustom03" required>
                                <div class="invalid-feedback">
                                    Please provide a valid city.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom04" class="form-label">State</label>
                                <select class="form-select" id="validationCustom04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="validationCustom05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationCustom05" required>
                                <div class="invalid-feedback">
                                    Please provide a valid zip.
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check d-flex flex-wrap gap-1">
                                    <input class="form-check-input mg-2" type="checkbox" value="" id="invalidCheck" required>
                                    <label class="form-check-label" for="invalidCheck">
                                        Agree to terms and conditions
                                    </label>
                                    <div class="invalid-feedback">
                                        You must agree before submitting.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Custom Styles end -->
            <!-- Browser Defaults -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column gap-2">
                        <h5>Browser Defaults</h5>
                        <p class="text-secondary">Not interested in custom validation feedback messages or writing
                            JavaScript to change form
                            behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on
                            your browser and OS, you’ll see a slightly different style of feedback.
                            While these feedback styles cannot be styled with CSS, you can still customize the feedback text
                            through JavaScript.</p>
                    </div>
                    <div class="card-body">
                        <form class="row g-3">
                            <div class="col-md-4">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" class="form-control" id="validationDefault01" value="" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" value="" required>
                            </div>
                            <div class="col-md-4">
                                <label for="validationDefaultUsername" class="form-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                    <input type="text" class="form-control" id="validationDefaultUsername"
                                           aria-describedby="inputGroupPrepend2" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="validationDefault03" class="form-label">City</label>
                                <input type="text" class="form-control" id="validationDefault03" required>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault04" class="form-label">State</label>
                                <select class="form-select" id="validationDefault04" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option>...</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label for="validationDefault05" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="validationDefault05" required>
                            </div>
                            <div class="col-12">
                                <div class="form-check d-flex gap-1">
                                    <input class="form-check-input mg-2" type="checkbox" value="" id="invalidCheck2" required>
                                    <label class="form-check-label" for="invalidCheck2">
                                        Agree to terms and conditions
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Browser Defaults -->
            <!-- Supported Elements end -->
            <div class="col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column gap-2">
                        <h5>Supported Elements</h5>
                        <p class="text-secondary">Not interested in custom validation feedback messages or writing
                            JavaScript to change form
                            behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on
                            your browser and OS, you’ll see a slightly different style of feedback.
                            While these feedback styles cannot be styled with CSS, you can still customize the feedback text
                            through JavaScript.</p>
                    </div>
                    <div class="card-body">
                        <form class="was-validated">
                            <div class="mb-3">
                                <label for="validationTextarea" class="form-label">Textarea</label>
                                <textarea class="form-control is-invalid" id="validationTextarea"
                                          placeholder="Required example textarea" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a message in the textarea.
                                </div>
                            </div>

                            <div class="form-check mb-3">
                                <input type="checkbox" class="form-check-input" id="validationFormCheck1" required>
                                <label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
                                <div class="invalid-feedback">Example invalid feedback text</div>
                            </div>

                            <div class="form-check mb-3">
                                <input type="radio" class="form-check-input" id="validationFormCheck3" name="radio-stacked"
                                       required>
                                <label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
                                <div class="invalid-feedback">More example invalid feedback text</div>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" required aria-label="select example">
                                    <option value="">Open this select menu</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                                <div class="invalid-feedback">Example invalid select feedback</div>
                            </div>

                            <div class="mb-3">
                                <input type="file" class="form-control" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Supported Elements start -->
        </div>
        <!-- Form Validation end -->

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

<!--js-->
<script src="{{asset('assets/js/formvalidation.js')}}"></script>
@endsection
