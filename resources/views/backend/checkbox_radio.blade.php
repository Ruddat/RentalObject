@extends('layout.master')
@section('title', 'Checkbox Radio')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">

        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Checkbox & Radio</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                      <span>
                        <i class="ph-duotone  ph-cardholder f-s-16"></i>  Forms elements
                      </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Checkbox & Radio</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- Checkbox & Radio start -->
        <div class="row">
            <!-- Custom Radio start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Radio</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 d-flex flex-column gap-2">
                                <div class="form-check d-flex align-items-center gap-1">
                                    <input class="form-check-input f-s-18 mb-1 m-1" type="radio" name="flexRadioDefault"
                                           id="radio_default1">
                                    <label class="form-check-label" for="radio_default1">
                                        Default
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center gap-1">
                                    <input class="form-check-input f-s-18 mb-1 m-1" type="radio" name="flexRadioDisabled"
                                           id="radio_disabled" disabled>
                                    <label class="form-check-label" for="radio_disabled">
                                        Disabled
                                    </label>
                                </div>
                                <div class="form-check d-flex align-items-center gap-1">
                                    <input class="form-check-input f-s-18 mb-1 m-1" type="radio" name="flexRadioDefault"
                                           id="radio_default2" checked>
                                    <label class="form-check-label" for="radio_default2">
                                        Checked
                                    </label>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Custom Radio end -->
            <!-- Custom Checkbox start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Checkbox</h5>
                    </div>
                    <div class="card-body">
                        <div class="row d-flex flex-wrap gap-2">
                            <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox" id="flexCheck">
                                <label class="form-check-label ms-2" for="flexCheck">
                                    checkbox
                                </label>
                            </div>
                            <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox" id="flexCheckIndeterminate">
                                <label class="form-check-label ms-2" for="flexCheckIndeterminate">
                                    indeterminate checkbox
                                </label>
                            </div>
                            <div class="form-check d-flex">
                                <input class="form-check-input mg-2" type="checkbox" id="flexCheckDisabled" disabled>
                                <label class="form-check-label ms-2" for="flexCheckDisabled">
                                    Disabled checkbox
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Custom Checkbox end -->
            <!-- Radio with States start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Radio with States</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="check-container">
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-primary ms-2"></span>
                                        <span class="text-primary">Primary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-secondary ms-2"></span>
                                        <span class="text-secondary">secondary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-success ms-2"></span>
                                        <span class="text-success">success</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-danger ms-2"></span>
                                        <span class="text-danger">danger</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-warning ms-2"></span>
                                        <span class="text-warning">warning</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-info ms-2"></span>
                                        <span class="text-info">info</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-light ms-2"></span>
                                        <span class="text-light">light</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group">
                                        <span class="radiomark  check-dark ms-2"></span>
                                        <span class="text-dark">dark</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="check-container">
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-primary ms-2"></span>
                                        <span class="text-primary">Primary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-secondary ms-2"></span>
                                        <span class="text-secondary">Secondary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-success ms-2"></span>
                                        <span class="text-success">Success</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-danger ms-2"></span>
                                        <span class="text-danger">Danger</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-warning ms-2"></span>
                                        <span class="text-warning">Warning</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-info ms-2"></span>
                                        <span class="text-info">Info</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-light ms-2"></span>
                                        <span class="text-light">Light</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark outline-dark ms-2"></span>
                                        <span class="text-dark">Dark</span>
                                    </label>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="check-container">
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-primary ms-2"></span>
                                        <span class="text-primary">Primary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-secondary ms-2"></span>
                                        <span class="text-secondary">Secondary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-success ms-2"></span>
                                        <span class="text-success">Success</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-danger ms-2"></span>
                                        <span class="text-danger">Danger</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-warning ms-2"></span>
                                        <span class="text-warning">Warning</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-info ms-2"></span>
                                        <span class="text-info">Info</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-light ms-2"></span>
                                        <span class="text-light">Light</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="radio" name="radio-group1">
                                        <span class="radiomark light-dark ms-2"></span>
                                        <span class="text-dark">Dark</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Radio with States end -->
            <!-- Checkbox with States start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Checkbox with States</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="check-container">
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-primary ms-2"></span>
                                        <span class="text-primary">Primary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-secondary ms-2"></span>
                                        <span class="text-secondary">Secondary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-success ms-2"></span>
                                        <span class="text-success">Success</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-danger ms-2"></span>
                                        <span class="text-danger">Danger</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-warning ms-2"></span>
                                        <span class="text-warning">Warning</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-info ms-2"></span>
                                        <span class="text-info">Info</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-light ms-2"></span>
                                        <span class="text-light">Light</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark check-dark ms-2"></span>
                                        <span class="text-dark">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="check-container">
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-primary ms-2"></span>
                                        <span class="text-primary">Primary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-secondary ms-2"></span>
                                        <span class="text-secondary">Secondary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-success ms-2"></span>
                                        <span class="text-success">Success</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-danger ms-2"></span>
                                        <span class="text-danger">Danger</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-warning ms-2"></span>
                                        <span class="text-warning">Warning</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-info ms-2"></span>
                                        <span class="text-info">Info</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-light ms-2"></span>
                                        <span class="text-light">Light</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark outline-dark ms-2"></span>
                                        <span class="text-dark">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="check-container">
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-primary ms-2"></span>
                                        <span class="text-primary">Primary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-secondary ms-2"></span>
                                        <span class="text-secondary">Secondary</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-success ms-2"></span>
                                        <span class="text-success">Success</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-danger ms-2"></span>
                                        <span class="text-danger">Danger</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-warning ms-2"></span>
                                        <span class="text-warning">Warning</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-info ms-2"></span>
                                        <span class="text-info">Info</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-light ms-2"></span>
                                        <span class="text-light">Light</span>
                                    </label>
                                    <label class="check-box">
                                        <input type="checkbox">
                                        <span class="checkmark light-dark ms-2"></span>
                                        <span class="text-dark">Dark</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Checkbox with States end -->
            <!-- Radio toggle buttons start -->
            <div class="col-md-6 col-xl-4">
                <div class="card equal-card ">
                    <div class="card-header">
                        <h5>Radio Toggle Buttons</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <input type="radio" class="btn-check" name="options" id="option1" checked>
                            <label class="btn btn-primary" for="option1">Checked</label>

                            <input type="radio" class="btn-check" name="options" id="option2">
                            <label class="btn btn-secondary" for="option2">Radio</label>

                            <input type="radio" class="btn-check" name="options" id="option3" disabled>
                            <label class="btn btn-success" for="option3">Disabled</label>

                            <input type="radio" class="btn-check" name="options" id="option4">
                            <label class="btn btn-danger" for="option4">Radio</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Radio toggle buttons end -->
            <!-- Checkbox toggle buttons start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Checkbox Toggle Buttons</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <input type="checkbox" class="btn-check" id="btn-check">
                            <label class="btn btn-primary" for="btn-check">Single toggle</label>
                            <input type="checkbox" class="btn-check" id="btn-check-2" checked>
                            <label class="btn btn-secondary" for="btn-check-2">Checked</label>
                            <input type="checkbox" class="btn-check" id="btn-check-3" checked>
                            <label class="btn btn-success" for="btn-check-3">Checked</label>
                            <input type="checkbox" class="btn-check" id="btn-check-4" disabled>
                            <label class="btn btn-danger" for="btn-check-4">Disabled</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Checkbox toggle buttons end -->
            <!-- Outlined styles start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Outlined Styles</h5>
                    </div>
                    <div class="card-body">
                        <div class="d-flex flex-wrap gap-2">
                            <input type="checkbox" class="btn-check" id="btn-check-outlined">
                            <label class="btn btn-outline-primary" for="btn-check-outlined">Single toggle</label>
                            <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked>
                            <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Checked</label>
                            <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" checked>
                            <label class="btn btn-outline-success" for="success-outlined">Checked success radio</label>
                            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined">
                            <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Outlined styles end -->
            <!-- Selectgroup Checkbox With Icons start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Selectgroup Checkbox With Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-selectgroup">
                            <label class="select-items">
                                <input type="checkbox" class="select-input" checked>
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-instagram"></i> Instagram
                              </span>
                            </span>
                            </label>
                            <label class="select-items">
                                <input type="checkbox" class="select-input">
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-twitter"></i> Twitter
                              </span>
                            </span>
                            </label>
                            <label class="select-items">
                                <input type="checkbox" class="select-input">
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-facebook"></i> Facebook
                              </span>
                            </span>
                            </label>
                            <label class="select-items">
                                <input type="checkbox" class="select-input">
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-snapchat"></i> Snapchat
                              </span>
                            </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Selectgroup Checkbox With Icons end -->
            <!-- Selectgroup radio With Icons start -->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Selectgroup Radio With Icons</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-selectgroup ">
                            <label class="select-items">
                                <input type="radio" class="select-input" name="select-options" checked>
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-instagram"></i> Instagram
                              </span>
                            </span>
                            </label>
                            <label class="select-items">
                                <input type="radio" class="select-input" name="select-options">
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-twitter"></i> Twitter
                              </span>
                            </span>
                            </label>
                            <label class="select-items">
                                <input type="radio" class="select-input" name="select-options">
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-facebook"></i> Facebook
                              </span>
                            </span>
                            </label>
                            <label class="select-items">
                                <input type="radio" class="select-input" name="select-options">
                                <span class="select-box">
                              <span class="selectitem">
                                <i class="ti ti-brand-snapchat"></i> Snapchat
                              </span>
                            </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Selectgroup radio With Icons end -->
            <!-- Images with radio start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Images With Radio</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6 col-xl-4">
                                <label class="form-checkimage">
                                    <input type="radio" value="1" name="radioimage" class="checkimage-input">
                                    <span class="check-box radiobox">
                            <img src="{{asset('../assets/images/bootstrapslider/02.jpg')}}" class="checkbox-image w-100" alt="">
                          </span>
                                </label>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <label class="form-checkimage">
                                    <input type="radio" value="1" name="radioimage" class="checkimage-input">
                                    <span class="check-box radiobox">
                            <img src="{{asset('../assets/images/bootstrapslider/04.jpg')}}" class="checkbox-image w-100" alt="">
                          </span>
                                </label>
                            </div>
                            <div class="col-sm-6 col-xl-4">
                                <label class="form-checkimage">
                                    <input type="radio" value="1" name="radioimage" class="checkimage-input" checked disabled>
                                    <span class="check-box radiobox">
                            <img src="{{asset('../assets/images/bootstrapslider/05.jpg')}}" class="checkbox-image w-100" alt="">
                          </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Images with radio end -->
            <!-- Images with checkbox start -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Images with checkbox</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <label class="form-checkimage">
                                    <input type="checkbox" value="1" class="checkimage-input">
                                    <span class="check-box">
                            <img src="{{asset('../assets/images/bootstrapslider/01.jpg')}}" class="checkbox-image w-100" alt="">
                          </span>
                                </label>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <label class="form-checkimage">
                                    <input type="checkbox" value="2" class="checkimage-input" checked>
                                    <span class="check-box">
                            <img src="{{asset('../assets/images/bootstrapslider/08.jpg')}}" class="checkbox-image w-100" alt="">
                          </span>
                                </label>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <label class="form-checkimage">
                                    <input type="checkbox" value="3" class="checkimage-input" checked disabled>
                                    <span class="check-box">
                            <img src="{{asset('../assets/images/bootstrapslider/03.jpg')}}" class="checkbox-image w-100" alt="">
                          </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Images with checkbox end -->
            <!-- Payment method Select Group start -->
            <div class="col-md-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Payment Methods </h5>
                    </div>
                    <div class="card-body">
                        <div class="form-selectgroup">
                            <div class="select-item">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                <label class="form-check-label" for="inlineRadio1">
                          <span class="d-flex align-items-center">
                            <img src="{{asset('../assets/images/checkbox-radio/logo1.png')}}" class="w-30 h-30" alt="">
                            <span class="ms-2">
                              <span class="fs-6 ">Visa Card</span>
                              <span class="d-block text-secondary">Select Visa card payment method</span>
                            </span>
                          </span>
                                </label>
                            </div>
                            <div class="select-item">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                <label class="form-check-label" for="inlineRadio2">
                          <span class="d-flex align-items-center">
                            <img src="{{asset('../assets/images/checkbox-radio/logo2.png')}}" class="w-30 h-30" alt="">
                            <span class="ms-2">
                              <span class="fs-6">Credit / Debit Card</span>
                              <span class="d-block text-secondary">Select Credit/Debit card payment method</span>
                            </span>
                          </span>
                                </label>
                            </div>
                            <div class="select-item">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
                                <label class="form-check-label" for="inlineRadio3">
                          <span class="d-flex align-items-center">
                            <img src="{{asset('../assets/images/checkbox-radio/logo3.png')}}" class="w-30 h-30" alt="">
                            <span class="ms-2">
                                <span class="fs-6">Paypal</span>
                                <span class="d-block text-secondary">Select Paypal payment method</span>
                            </span>
                          </span>
                                </label>
                            </div>
                            <div class="select-item">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" >
                                <label class="form-check-label" for="inlineRadio4">
                          <span class="d-flex align-items-center">
                            <img src="{{asset('../assets/images/checkbox-radio/logo4.png')}}" class="w-30 h-30" alt="">
                            <span class="ms-2">
                                <span class="fs-6">Other UPI Apps</span>
                                <span class="d-block text-secondary">Select Other UPI Apps for payment</span>
                            </span>
                          </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment method Select Group end -->
            <!-- Project Manager Select Group start -->
            <div class="col-md-6 col-xl-4">
                <div class="card equal-card">
                    <div class="card-header">
                        <h5>Project Manager</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-selectgroup">
                            <div class="select-item">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">
                            <span class="d-flex align-items-center">
                              <span class="bg-secondary h-30 w-30 d-flex-center b-r-50 position-relative">
                                <img src="{{asset('../assets/images/avtar/1.png')}}" alt="" class="img-fluid b-r-50">
                                <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                              </span>
                              <span class="ms-2">
                                  <span class="fs-6">Mark Moen</span>
                                  <span class="d-block text-secondary">UI/UX Designer</span>
                              </span>
                            </span>
                                </label>
                            </div>
                            <div class="select-item">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">
                          <span class="d-flex align-items-center">
                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50 position-relative">
                              <img src="{{asset('../assets/images/avtar/2.png')}}" alt="" class="img-fluid b-r-50">
                              <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                            </span>
                            <span class="ms-2">
                                <span class="fs-6">Johan Moen</span>
                                <span class="d-block text-secondary">Web Designer</span>
                            </span>
                          </span>
                                </label>
                            </div>
                            <div class="select-item">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                                <label class="form-check-label" for="inlineCheckbox3">
                          <span class="d-flex align-items-center">
                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50 position-relative">
                              <img src="{{asset('../assets/images/avtar/3.png')}}" alt="" class="img-fluid b-r-50">
                              <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                            </span>
                            <span class="ms-2">
                                <span class="fs-6">Moen Deo</span>
                                <span class="d-block text-secondary">Web Developer</span>
                            </span>
                          </span>
                                </label>
                            </div>
                            <div class="select-item">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                                <label class="form-check-label" for="inlineCheckbox4">
                          <span class="d-flex align-items-center">
                            <span class="bg-secondary h-30 w-30 d-flex-center b-r-50 position-relative">
                              <img src="{{asset('../assets/images/avtar/16.png')}}" alt="" class="img-fluid b-r-50">
                              <span class="position-absolute top-0 end-0 p-1 bg-success border border-light rounded-circle"></span>
                            </span>
                            <span class="ms-2">
                                <span class="fs-6">Lenora Bogisich</span>
                                <span class="d-block text-secondary">Web Developer</span>
                            </span>
                          </span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Manager Select Group end -->
            <!-- Custom Select Group Card start -->
            <div class="col-md-6 col-xl-4">
                <div class="card">
                    <div class="card-header">
                        <h5>Custom Select Group</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="card shadow-none">
                                    <div class="card-body custom-selection address-content">
                                        <div class="position-relative">
                                            <label class="check-box">
                                                <input type="radio" name="radio-group1">
                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                <span class="ms-4 fs-6">App Development</span>
                                            </label>
                                        </div>
                                        <div>
                                        <!-- <img src="{{asset('../assets/images/form/16.png')}}" alt=""> -->
                                            <i class="ti ti-brand-appstore icon-bg"></i>
                                            <p class="text-muted">Mobile app development is the act or process by which a
                                                mobile app is developed for one or more mobile devices.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="card shadow-none">
                                    <div class="card-body custom-selection address-content">
                                        <div class="position-relative">
                                            <label class="check-box">
                                                <input type="radio" name="radio-group1">
                                                <span class="radiomark outline-secondary position-absolute"></span>
                                                <span class="ms-4 fs-6">Web Development</span>
                                            </label>
                                        </div>
                                        <div>
                                            <i class="ti ti-browser icon-bg"></i>
                                            <p class="text-muted">Web development is the work involved in developing a
                                                website for the Internet or an intranet.Web development can ..
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Custom Select Group Card end -->
        </div>
        <!-- Checkbox & Radio end -->

    </div>
@endsection

@section('script')
<!--customizer-->
<div id="customizer"></div>

@endsection
