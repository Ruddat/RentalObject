<?php $page = 'search-results'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')







<section class="flat-section flat-recommended flat-sidebar">
    <div class="container">
        <div class="box-title-listing">
            <div class="box-left">
                <h3 class="fw-8">Property Listing</h3>
                <p class="text">There are currently 164,814 properties.</p>
            </div>
            <div class="box-filter-tab">
                <ul class="nav-tab-filter" role="tablist">
                    <li class="nav-tab-item" role="presentation">
                        <a href="#gridLayout" class="nav-link-item active"  data-bs-toggle="tab">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.54883 5.90508C4.54883 5.1222 5.17272 4.5 5.91981 4.5C6.66686 4.5 7.2908 5.12221 7.2908 5.90508C7.2908 6.68801 6.66722 7.3101 5.91981 7.3101C5.17241 7.3101 4.54883 6.68801 4.54883 5.90508Z" stroke="#A3ABB0"/>
                                <path d="M10.6045 5.90508C10.6045 5.12221 11.2284 4.5 11.9755 4.5C12.7229 4.5 13.3466 5.1222 13.3466 5.90508C13.3466 6.68789 12.7227 7.3101 11.9755 7.3101C11.2284 7.3101 10.6045 6.68794 10.6045 5.90508Z" stroke="#A3ABB0"/>
                                <path d="M19.4998 5.90514C19.4998 6.68797 18.8757 7.31016 18.1288 7.31016C17.3818 7.31016 16.7578 6.68794 16.7578 5.90508C16.7578 5.12211 17.3813 4.5 18.1288 4.5C18.8763 4.5 19.4998 5.12215 19.4998 5.90514Z" stroke="#A3ABB0"/>
                                <path d="M7.24249 12.0098C7.24249 12.7927 6.61849 13.4148 5.87133 13.4148C5.12411 13.4148 4.5 12.7926 4.5 12.0098C4.5 11.2268 5.12419 10.6045 5.87133 10.6045C6.61842 10.6045 7.24249 11.2267 7.24249 12.0098Z" stroke="#A3ABB0"/>
                                <path d="M13.2976 12.0098C13.2976 12.7927 12.6736 13.4148 11.9266 13.4148C11.1795 13.4148 10.5557 12.7928 10.5557 12.0098C10.5557 11.2266 11.1793 10.6045 11.9266 10.6045C12.6741 10.6045 13.2976 11.2265 13.2976 12.0098Z" stroke="#A3ABB0"/>
                                <path d="M19.4516 12.0098C19.4516 12.7928 18.828 13.4148 18.0807 13.4148C17.3329 13.4148 16.709 12.7926 16.709 12.0098C16.709 11.2268 17.3332 10.6045 18.0807 10.6045C18.8279 10.6045 19.4516 11.2266 19.4516 12.0098Z" stroke="#A3ABB0"/>
                                <path d="M4.54297 18.0945C4.54297 17.3116 5.16709 16.6895 5.9143 16.6895C6.66137 16.6895 7.28523 17.3114 7.28523 18.0945C7.28523 18.8776 6.66139 19.4996 5.9143 19.4996C5.16714 19.4996 4.54297 18.8771 4.54297 18.0945Z" stroke="#A3ABB0"/>
                                <path d="M10.5986 18.0945C10.5986 17.3116 11.2227 16.6895 11.97 16.6895C12.7169 16.6895 13.3409 17.3115 13.3409 18.0945C13.3409 18.8776 12.7169 19.4996 11.97 19.4996C11.2225 19.4996 10.5986 18.8772 10.5986 18.0945Z" stroke="#A3ABB0"/>
                                <path d="M16.752 18.0945C16.752 17.3115 17.376 16.6895 18.1229 16.6895C18.8699 16.6895 19.4939 17.3115 19.4939 18.0945C19.4939 18.8776 18.8702 19.4996 18.1229 19.4996C17.376 19.4996 16.752 18.8772 16.752 18.0945Z" stroke="#A3ABB0"/>
                            </svg>

                        </a>
                    </li>
                    <li class="nav-tab-item" role="presentation">
                        <a href="#listLayout" class="nav-link-item" data-bs-toggle="tab">
                            <svg class="icon" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2016 17.8316H8.50246C8.0615 17.8316 7.7041 17.4742 7.7041 17.0332C7.7041 16.5923 8.0615 16.2349 8.50246 16.2349H19.2013C19.6423 16.2349 19.9997 16.5923 19.9997 17.0332C19.9997 17.4742 19.6426 17.8316 19.2016 17.8316Z" fill="#A3ABB0"/>
                                <path d="M19.2016 12.8199H8.50246C8.0615 12.8199 7.7041 12.4625 7.7041 12.0215C7.7041 11.5805 8.0615 11.2231 8.50246 11.2231H19.2013C19.6423 11.2231 19.9997 11.5805 19.9997 12.0215C20 12.4625 19.6426 12.8199 19.2016 12.8199Z" fill="#A3ABB0"/>
                                <path d="M19.2016 7.80913H8.50246C8.0615 7.80913 7.7041 7.45173 7.7041 7.01077C7.7041 6.5698 8.0615 6.2124 8.50246 6.2124H19.2013C19.6423 6.2124 19.9997 6.5698 19.9997 7.01077C19.9997 7.45173 19.6426 7.80913 19.2016 7.80913Z" fill="#A3ABB0"/>
                                <path d="M5.0722 8.1444C5.66436 8.1444 6.1444 7.66436 6.1444 7.0722C6.1444 6.48004 5.66436 6 5.0722 6C4.48004 6 4 6.48004 4 7.0722C4 7.66436 4.48004 8.1444 5.0722 8.1444Z" fill="#A3ABB0"/>
                                <path d="M5.0722 13.0941C5.66436 13.0941 6.1444 12.6141 6.1444 12.0219C6.1444 11.4297 5.66436 10.9497 5.0722 10.9497C4.48004 10.9497 4 11.4297 4 12.0219C4 12.6141 4.48004 13.0941 5.0722 13.0941Z" fill="#A3ABB0"/>
                                <path d="M5.0722 18.0433C5.66436 18.0433 6.1444 17.5633 6.1444 16.9711C6.1444 16.379 5.66436 15.8989 5.0722 15.8989C4.48004 15.8989 4 16.379 4 16.9711C4 17.5633 4.48004 18.0433 5.0722 18.0433Z" fill="#A3ABB0"/>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div class="nice-select select-filter list-page" tabindex="0"><span class="current">Show: 50</span>
                    <ul class="list">
                        <li data-value="1" class="option">Show: 50</li>
                        <li data-value="2" class="option">Show: 30</li>
                        <li data-value="3" class="option selected">Show: 10</li>
                    </ul>
                </div>
                <div class="nice-select select-filter list-sort" tabindex="0"><span class="current">Sort by (Default)</span>
                    <ul class="list">
                        <li data-value="default" class="option selected">Sort by (Default)</li>
                        <li data-value="new" class="option">Newest</li>
                        <li data-value="old" class="option">Oldest</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="widget-sidebar fixed-sidebar">
                    <div class="flat-tab flat-tab-form widget-filter-search widget-box">
                        <ul class="nav-tab-form" role="tablist">
                            <li class="nav-tab-item" role="presentation">
                                <a href="#forRent" class="nav-link-item active"  data-bs-toggle="tab">For Rent</a>
                            </li>
                            <li class="nav-tab-item" role="presentation">
                                <a href="#forSale" class="nav-link-item" data-bs-toggle="tab">For Sale</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade active show" role="tabpanel">
                                <div class="form-sl">
                                    <form method="post">
                                        <div class="wd-filter-select">
                                            <div class="inner-group">
                                                <div class="box">
                                                    <div class="form-style">
                                                        <input type="text" class="form-control" placeholder="Type keyword...." value="" name="s" title="Search for" required="">
                                                    </div>
                                                    <div class="form-style">
                                                        <div class="group-ip ip-icon">
                                                            <input type="text" class="form-control" placeholder="Location" value="" name="s" title="Search for" required="">
                                                            <a href="#" class="icon-right icon-location"></a>
                                                        </div>
                                                    </div>
                                                    <div class="form-style">

                                                        <div class="group-select">
                                                            <div class="nice-select" tabindex="0"><span class="current">Property type</span>
                                                                <ul class="list">
                                                                    <li data-value="villa" class="option">Villa</li>
                                                                    <li data-value="studio" class="option">Studio</li>
                                                                    <li data-value="office" class="option">Office</li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-style box-select">
                                                        <div class="nice-select" tabindex="0"><span class="current">Room</span>
                                                            <ul class="list">
                                                                <li data-value="2" class="option">1</li>
                                                                <li data-value="2" class="option selected">2</li>
                                                                <li data-value="3" class="option">3</li>
                                                                <li data-value="4" class="option">4</li>
                                                                <li data-value="5" class="option">5</li>
                                                                <li data-value="6" class="option">6</li>
                                                                <li data-value="7" class="option">7</li>
                                                                <li data-value="8" class="option">8</li>
                                                                <li data-value="9" class="option">9</li>
                                                                <li data-value="10" class="option">10</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-style box-select">
                                                        <div class="nice-select" tabindex="0"><span class="current">Bathrooms</span>
                                                            <ul class="list">
                                                                <li data-value="all" class="option">All</li>
                                                                <li data-value="1" class="option">1</li>
                                                                <li data-value="2" class="option">2</li>
                                                                <li data-value="3" class="option">3</li>
                                                                <li data-value="4" class="option selected">4</li>
                                                                <li data-value="5" class="option">5</li>
                                                                <li data-value="6" class="option">6</li>
                                                                <li data-value="7" class="option">7</li>
                                                                <li data-value="8" class="option">8</li>
                                                                <li data-value="9" class="option">9</li>
                                                                <li data-value="10" class="option">10</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="form-style box-select">
                                                        <div class="nice-select" tabindex="0"><span class="current">Bedroomsrooms</span>
                                                            <ul class="list">
                                                                <li data-value="1" class="option">All</li>
                                                                <li data-value="1" class="option">1</li>
                                                                <li data-value="2" class="option">2</li>
                                                                <li data-value="3" class="option">3</li>
                                                                <li data-value="4" class="option selected">4</li>
                                                                <li data-value="5" class="option">5</li>
                                                                <li data-value="6" class="option">6</li>
                                                                <li data-value="7" class="option">7</li>
                                                                <li data-value="8" class="option">8</li>
                                                                <li data-value="9" class="option">9</li>
                                                                <li data-value="10" class="option">10</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="form-style widget-price">
                                                        <div class="box-title-price">
                                                            <span class="title-price fw-6">Price:</span>
                                                                <div class="caption-price">
                                                                    <span id="slider-range-value1" class="fw-6"></span>
                                                                    <span class="fw-6">-</span>
                                                                    <span id="slider-range-value2" class="fw-6"></span>
                                                                </div>
                                                        </div>
                                                        <div id="slider-range"></div>
                                                        <div class="slider-labels">
                                                            <input type="hidden" name="min-value" value="">
                                                            <input type="hidden" name="max-value" value="">
                                                        </div>
                                                    </div>
                                                    <div class="form-style widget-price wd-price-2">
                                                        <div class="box-title-price">
                                                            <span class="title-price fw-6">Size:</span>
                                                            <div class="caption-price">
                                                                <span id="slider-range-value01" class="fw-6"></span>
                                                                <span class="fw-6">to</span>
                                                                <span id="slider-range-value02" class="fw-6"></span>
                                                            </div>
                                                        </div>
                                                        <div id="slider-range2"></div>
                                                        <div class="slider-labels">
                                                            <input type="hidden" name="min-value2" value="">
                                                            <input type="hidden" name="max-value2" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="box">
                                                    <div class="form-style wd-amenities">
                                                        <div class="group-checkbox">
                                                            <h6 class="title text-black-2">Amenities:</h6>
                                                            <div class="group-amenities">
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb1" checked>
                                                                    <label for="cb1" class="text-cb-amenities">Air Condition</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb2">
                                                                    <label for="cb2" class="text-cb-amenities">Disabled Access</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb3">
                                                                    <label for="cb3" class="text-cb-amenities">Ceiling Height</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb4" checked>
                                                                    <label for="cb4" class="text-cb-amenities">Floor</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb5">
                                                                    <label for="cb5" class="text-cb-amenities">Heating</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb6">
                                                                    <label for="cb6" class="text-cb-amenities">Renovation</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb7">
                                                                    <label for="cb7" class="text-cb-amenities">Window Type</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb8">
                                                                    <label for="cb8" class="text-cb-amenities">Cable TV</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb9" checked>
                                                                    <label for="cb9" class="text-cb-amenities">Elevator</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb10">
                                                                    <label for="cb10" class="text-cb-amenities">Furnishing</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb11">
                                                                    <label for="cb11" class="text-cb-amenities">Intercom</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb12">
                                                                    <label for="cb12" class="text-cb-amenities">Security</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb13">
                                                                    <label for="cb13" class="text-cb-amenities">Search property</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb14">
                                                                    <label for="cb14" class="text-cb-amenities">Ceiling Height</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb15">
                                                                    <label for="cb15" class="text-cb-amenities">Fence</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb16">
                                                                    <label for="cb16" class="text-cb-amenities">Fence</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb17" checked>
                                                                    <label for="cb17" class="text-cb-amenities">Garage</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb18">
                                                                    <label for="cb18" class="text-cb-amenities">Parking</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb19">
                                                                    <label for="cb19" class="text-cb-amenities">Swimming Pool</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb20">
                                                                    <label for="cb20" class="text-cb-amenities">Construction Year</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb21">
                                                                    <label for="cb21" class="text-cb-amenities">Fireplace</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb22">
                                                                    <label for="cb22" class="text-cb-amenities">Garden</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb23">
                                                                    <label for="cb23" class="text-cb-amenities">Pet Friendly</label>
                                                                </fieldset>
                                                                <fieldset class="amenities-item">
                                                                    <input type="checkbox" class="tf-checkbox style-1" id="cb24">
                                                                    <label for="cb24" class="text-cb-amenities">WiFi</label>
                                                                </fieldset>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-style">
                                                    <button type="submit" class="tf-btn btn-view primary hover-btn-view">Find Properties <span class="icon icon-arrow-right2"></span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="widget-box box-latest-property">
                        <h5 class="fw-6 title">Latest Propeties</h5>
                        <ul>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-8.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                    <ul class="meta-list mt-6">
                                        <li class="item">
                                            <i class="icon icon-bed"></i>
                                            <span class="text-variant-1">Beds:</span>
                                            <span class="fw-6">3</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-bath"></i>
                                            <span class="text-variant-1">Baths:</span>
                                            <span class="fw-6">2</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-sqft"></i>
                                            <span class="text-variant-1">Sqft:</span>
                                            <span class="fw-6">1150</span>
                                        </li>
                                    </ul>
                                    <div class="mt-10 text-btn">$7250,00</div>
                                </div>
                            </li>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-3.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                    <ul class="meta-list mt-6">
                                        <li class="item">
                                            <i class="icon icon-bed"></i>
                                            <span class="text-variant-1">Beds:</span>
                                            <span class="fw-6">3</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-bath"></i>
                                            <span class="text-variant-1">Baths:</span>
                                            <span class="fw-6">2</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-sqft"></i>
                                            <span class="text-variant-1">Sqft:</span>
                                            <span class="fw-6">1150</span>
                                        </li>
                                    </ul>
                                    <div class="mt-10 text-btn">$7250,00</div>
                                </div>
                            </li>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-28.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                    <ul class="meta-list mt-6">
                                        <li class="item">
                                            <i class="icon icon-bed"></i>
                                            <span class="text-variant-1">Beds:</span>
                                            <span class="fw-6">3</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-bath"></i>
                                            <span class="text-variant-1">Baths:</span>
                                            <span class="fw-6">2</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-sqft"></i>
                                            <span class="text-variant-1">Sqft:</span>
                                            <span class="fw-6">1150</span>
                                        </li>
                                    </ul>
                                    <div class="mt-10 text-btn">$7250,00</div>
                                </div>
                            </li>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-29.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                    <ul class="meta-list mt-6">
                                        <li class="item">
                                            <i class="icon icon-bed"></i>
                                            <span class="text-variant-1">Beds:</span>
                                            <span class="fw-6">3</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-bath"></i>
                                            <span class="text-variant-1">Baths:</span>
                                            <span class="fw-6">2</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-sqft"></i>
                                            <span class="text-variant-1">Sqft:</span>
                                            <span class="fw-6">1150</span>
                                        </li>
                                    </ul>
                                    <div class="mt-10 text-btn">$7250,00</div>
                                </div>
                            </li>
                            <li class="latest-property-item">
                                <a href="property-details-v1.html" class="images-style">
                                    <img src="images/home/house-19.jpg" alt="img">
                                </a>
                                <div class="content">
                                    <div class="text-capitalize text-btn"><a href="property-details-v1.html" class="link">Casa Lomas de Machalí Machas</a></div>
                                    <ul class="meta-list mt-6">
                                        <li class="item">
                                            <i class="icon icon-bed"></i>
                                            <span class="text-variant-1">Beds:</span>
                                            <span class="fw-6">3</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-bath"></i>
                                            <span class="text-variant-1">Baths:</span>
                                            <span class="fw-6">2</span>
                                        </li>
                                        <li class="item">
                                            <i class="icon icon-sqft"></i>
                                            <span class="text-variant-1">Sqft:</span>
                                            <span class="fw-6">1150</span>
                                        </li>
                                    </ul>
                                    <div class="mt-10 text-btn">$7250,00</div>
                                </div>
                            </li>
                        </ul>


                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-7 flat-animate-tab">
                <div class="tab-content">
                    <div class="tab-pane active show" id="gridLayout" role="tabpanel">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-7.jpg" src="images/home/house-7.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png1.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-8.jpg" src="images/home/house-8.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png2.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-11.jpg" src="images/home/house-11.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-9.jpg" src="images/home/house-9.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png4.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-3.jpg" src="images/home/house-3.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png5.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-30.jpg" src="images/home/house-30.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png6.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-2.jpg" src="images/home/house-2.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png6.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-5.jpg" src="images/home/house-5.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png6.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-31.jpg" src="images/home/house-31.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png6.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="homelengo-box">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-7.jpg" src="images/home/house-7.jpg" alt="img">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>

                                            </div>
                                            <div class="bottom">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                145 Brooklyn Ave, Califonia, New York
                                            </div>
                                        </a>

                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link"> Casa Lomas de Machalí Machas</a></h6>
                                                <ul class="meta-list">
                                                    <li class="item">
                                                        <i class="icon icon-bed"></i>
                                                        <span class="text-variant-1">Beds:</span>
                                                        <span class="fw-6">3</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-bath"></i>
                                                        <span class="text-variant-1">Baths:</span>
                                                        <span class="fw-6">2</span>
                                                    </li>
                                                    <li class="item">
                                                        <i class="icon icon-sqft"></i>
                                                        <span class="text-variant-1">Sqft:</span>
                                                        <span class="fw-6">1150</span>
                                                    </li>
                                                </ul>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png1.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="wd-navigation mt-20">
                            <li><a href="#" class="nav-item"><i class="icon icon-arr-l"></i></a></li>
                            <li><a href="#" class="nav-item">1</a></li>
                            <li><a href="#" class="nav-item">2</a></li>
                            <li><a href="#" class="nav-item active">3</a></li>
                            <li><a href="#" class="nav-item">4</a></li>
                            <li><a href="#" class="nav-item">...</a></li>
                            <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="listLayout" role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-11.jpg" src="images/home/house-sm-11.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Ritma Perdana (Townhouse), LBS Alam Perdana</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>
                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-12.jpg" src="images/home/house-sm-12.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-13.jpg" src="images/home/house-sm-13.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-14.jpg" src="images/home/house-sm-14.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-15.jpg" src="images/home/house-sm-15.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-16.jpg" src="images/home/house-sm-16.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-17.jpg" src="images/home/house-sm-17.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-18.jpg" src="images/home/house-sm-18.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-19.jpg" src="images/home/house-sm-19.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="homelengo-box list-style-1 list-style-2 line">
                                    <div class="archive-top">
                                        <a href="property-details-v1.html" class="images-group">
                                            <div class="images-style">
                                                <img class="lazyload" data-src="images/home/house-sm-11.jpg" src="images/home/house-sm-11.jpg" alt="img-property">
                                            </div>
                                            <div class="top">
                                                <ul class="d-flex gap-6 flex-wrap">
                                                    <li class="flag-tag primary">Featured</li>
                                                    <li class="flag-tag style-1">For Sale</li>
                                                </ul>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="archive-bottom">
                                        <div class="content-top">
                                            <h6 class="text-capitalize"><a href="property-details-v1.html" class="link text-line-clamp-1"> Casa Lomas de Machalí Machas</a></h6>
                                            <ul class="meta-list">
                                                <li class="item">
                                                    <i class="icon icon-bed"></i>
                                                    <span class="text-variant-1">Beds:</span>
                                                    <span class="fw-6">3</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-bath"></i>
                                                    <span class="text-variant-1">Baths:</span>
                                                    <span class="fw-6">2</span>
                                                </li>
                                                <li class="item">
                                                    <i class="icon icon-sqft"></i>
                                                    <span class="text-variant-1">Sqft:</span>
                                                    <span class="fw-6">1150</span>
                                                </li>
                                            </ul>
                                            <div class="location">
                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 7C10 7.53043 9.78929 8.03914 9.41421 8.41421C9.03914 8.78929 8.53043 9 8 9C7.46957 9 6.96086 8.78929 6.58579 8.41421C6.21071 8.03914 6 7.53043 6 7C6 6.46957 6.21071 5.96086 6.58579 5.58579C6.96086 5.21071 7.46957 5 8 5C8.53043 5 9.03914 5.21071 9.41421 5.58579C9.78929 5.96086 10 6.46957 10 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M13 7C13 11.7613 8 14.5 8 14.5C8 14.5 3 11.7613 3 7C3 5.67392 3.52678 4.40215 4.46447 3.46447C5.40215 2.52678 6.67392 2 8 2C9.32608 2 10.5979 2.52678 11.5355 3.46447C12.4732 4.40215 13 5.67392 13 7Z" stroke="#A3ABB0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <span class="text-line-clamp-1"> 145 Brooklyn Ave, Califonia, New York </span>
                                            </div>
                                            <p class="description mt-20 text-line-clamp-2 text-variant-1">Sited on the 470-acre township of LBS Alam Perdana, Ritma Perdana is...</p>

                                        </div>

                                        <div class="content-bottom">
                                            <div class="d-flex gap-8 align-items-center">
                                                <div class="avatar avt-40 round">
                                                    <img src="images/avatar/avt-png3.png" alt="avt">
                                                </div>
                                                <span>Arlene McCoy</span>
                                            </div>
                                            <h6 class="price">$7250,00</h6>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <ul class="wd-navigation mt-20">
                            <li><a href="#" class="nav-item"><i class="icon icon-arr-l"></i></a></li>
                            <li><a href="#" class="nav-item">1</a></li>
                            <li><a href="#" class="nav-item">2</a></li>
                            <li><a href="#" class="nav-item active">3</a></li>
                            <li><a href="#" class="nav-item">4</a></li>
                            <li><a href="#" class="nav-item">...</a></li>
                            <li><a href="#" class="nav-item"><i class="icon icon-arr-r"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



    </div>
</section>










@endsection
