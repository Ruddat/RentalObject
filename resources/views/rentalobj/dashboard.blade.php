<?php $page = 'dashboard'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')



<!-- dashboard -->


                <!-- header -->
                <header class="main-header fixed-header header-dashboard">
                    <!-- Header Lower -->
                    <div class="header-lower">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-header">
                                    <div class="inner-header-left">
                                        <div class="logo-box d-flex">
                                            <div class="logo"><a href="index.html"><img src="{{ URL::asset('/build/images/logo/logo@2x.png') }}" alt="logo" width="174" height="44"></a></div>
                                            <div class="button-show-hide">
                                                <span class="icon icon-categories"></span>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                    <ul class="navigation clearfix">
                                                        <li class="dropdown2 home"><a href="#">Home</a>
                                                            <ul>
                                                                <li><a href="index.html">Homepage 01</a></li>
                                                                <li><a href="home-02.html">Homepage 02</a></li>
                                                                <li><a href="home-03.html">Homepage 03</a></li>
                                                                <li><a href="home-04.html">Homepage 04</a></li>
                                                                <li><a href="home-05.html">Homepage 05</a></li>
                                                                <li><a href="home-06.html">Homepage 06</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2"><a href="#">Listing</a>
                                                            <ul>
                                                                <li><a href="property-halfmap-grid.html">Property Half Map Grid</a></li>
                                                                <li><a href="property-halfmap-list.html">Property Half Map List</a></li>
                                                                <li><a href="topmap-grid.html">Find Topmap Grid</a></li>
                                                                <li><a href="topmap-list.html">Find Topmap List</a></li>
                                                                <li><a href="sidebar-grid.html">Find Sidebar Grid</a></li>
                                                                <li><a href="sidebar-list.html">Find Sidebar List</a></li>

                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2"><a href="#">Properties</a>
                                                            <ul>
                                                                <li><a href="property-details-v1.html">Property Details 1</a></li>
                                                                <li><a href="property-details-v2.html">Property Details 2</a></li>
                                                                <li><a href="property-details-v3.html">Property Details 3</a></li>
                                                                <li><a href="property-details-v4.html">Property Details 4</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2"><a href="#">Pages</a>
                                                            <ul>
                                                                <li><a href="about-us.html">About Us</a></li>
                                                                <li><a href="our-service.html">Our Services</a></li>
                                                                <li><a href="pricing.html">Pricing</a></li>
                                                                <li><a href="contact.html">Contact Us</a></li>
                                                                <li><a href="faq.html">FAQs</a></li>
                                                                <li><a href="privacy-policy.html">Privacy Policy</a></li>

                                                            </ul>
                                                        </li>
                                                        <li class="dropdown2"><a href="#">Blog</a>
                                                            <ul>
                                                                <li><a href="blog.html">Blog Default</a></li>
                                                                <li><a href="blog-grid.html">Blog Grid</a></li>
                                                                <li><a href="blog-detail.html">Blog Post Details</a></li>
                                                            </ul>
                                                        </li>

                                                        <li class="dropdown2 current"><a href="#">Dashboard</a>
                                                            <ul>
                                                                <li class="current"><a href="dashboard.html">Dashboard</a></li>
                                                                <li><a href="my-property.html">My Properties</a></li>
                                                                <li><a href="message.html">Message</a></li>
                                                                <li><a href="my-favorites.html">My Favorites</a></li>
                                                                <li><a href="reviews.html">Reviews</a></li>
                                                                <li><a href="my-profile.html">My Profile</a></li>
                                                                <li><a href="add-property.html">Add Property</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            <!-- Main Menu End-->
                                        </div>
                                    </div>


                                    <div class="header-account inner-header-right">
                                        <div class="box-avatar dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="avatar avt-34 round">
                                                <img src="{{ URL::asset('/build/images/avatar/avt-5.jpg') }}" alt="avt">
                                            </div>
                                            <p class="name">Themesflat<span class="icon icon-arr-down"></span></p>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="my-favorites.html">My Properties</a>
                                                <a class="dropdown-item" href="message.html">Message</a>
                                                <a class="dropdown-item" href="my-favorites.html">My Favorites</a>
                                                <a class="dropdown-item" href="reviews.html">Reviews</a>
                                                <a class="dropdown-item" href="my-profile.html">My Profile</a>
                                                <a class="dropdown-item" href="add-property.html">Add Property</a>
                                                <a class="dropdown-item" href="index.html">Logout</a>
                                            </div>
                                        </div>
                                        <div class="flat-bt-top">
                                            <a class="tf-btn primary" href="add-property.html">
                                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M13.625 14.375V17.1875C13.625 17.705 13.205 18.125 12.6875 18.125H4.5625C4.31386 18.125 4.0754 18.0262 3.89959 17.8504C3.72377 17.6746 3.625 17.4361 3.625 17.1875V6.5625C3.625 6.045 4.045 5.625 4.5625 5.625H6.125C6.54381 5.62472 6.96192 5.65928 7.375 5.72834M13.625 14.375H16.4375C16.955 14.375 17.375 13.955 17.375 13.4375V9.375C17.375 5.65834 14.6725 2.57417 11.125 1.97834C10.7119 1.90928 10.2938 1.87472 9.875 1.875H8.3125C7.795 1.875 7.375 2.295 7.375 2.8125V5.72834M13.625 14.375H8.3125C8.06386 14.375 7.8254 14.2762 7.64959 14.1004C7.47377 13.9246 7.375 13.6861 7.375 13.4375V5.72834M17.375 11.25V9.6875C17.375 8.94158 17.0787 8.22621 16.5512 7.69876C16.0238 7.17132 15.3084 6.875 14.5625 6.875H13.3125C13.0639 6.875 12.8254 6.77623 12.6496 6.60041C12.4738 6.4246 12.375 6.18614 12.375 5.9375V4.6875C12.375 4.31816 12.3023 3.95243 12.1609 3.6112C12.0196 3.26998 11.8124 2.95993 11.5512 2.69876C11.2901 2.4376 10.98 2.23043 10.6388 2.08909C10.2976 1.94775 9.93184 1.875 9.5625 1.875H8.625" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                Submit Property
                                            </a>
                                        </div>
                                    </div>

                                    <div class="mobile-nav-toggler mobile-button"><span></span></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Header Lower -->

                    <!-- Mobile Menu  -->
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                    <div class="mobile-menu">
                        <div class="menu-backdrop"></div>
                        <nav class="menu-box">
                            <div class="nav-logo"><a href="index.html"><img src="{{ URL::asset('/build/images/logo/logo@2x.png') }}" alt="nav-logo" width="174" height="44"></a></div>
                            <div class="bottom-canvas">
                                <div class="menu-outer"></div>
                                <div class="button-mobi-sell">
                                    <a class="tf-btn primary" href="add-property.html">Submit Property</a>
                                </div>
                                <div class="mobi-icon-box">
                                    <div class="box d-flex align-items-center">
                                        <span class="icon icon-phone2"></span>
                                        <div>1-333-345-6868</div>
                                    </div>
                                    <div class="box d-flex align-items-center">
                                        <span class="icon icon-mail"></span>
                                        <div>themesflat@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!-- End Mobile Menu -->

                </header>
                <!-- end header -->


                <!-- sidebar dashboard -->

                <!-- end sidebar dashboard -->



                <div class="main-content">
                    <div class="main-content-inner">
                        <div class="button-show-hide show-mb">
                            <span class="body-1">Show Dashboard</span>
                        </div>
                        <div class="flat-counter-v2 tf-counter">
                            <div class="counter-box">
                                <div class="box-icon">
                                    <span class="icon icon-listing"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count text-variant-1">Your listing</div>
                                    <div class="box-count d-flex align-items-end">
                                        <!-- <h3 class="number fw-8" data-speed="2000" data-to="17" data-inviewport="yes">32</h3>       -->
                                        <h3 class="fw-8">32</h3>
                                        <span class="text">/50 remaining</span>
                                    </div>

                                </div>
                            </div>
                            <div class="counter-box">
                                <div class="box-icon">
                                    <span class="icon icon-pending"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count text-variant-1">Pending</div>
                                    <div class="box-count d-flex align-items-end">
                                        <h3 class="fw-8">02</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="counter-box">
                                <div class="box-icon">
                                    <span class="icon icon-favorite"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count text-variant-1">Favorites</div>
                                    <div class="d-flex align-items-end">
                                        <!-- <h6 class="number" data-speed="2000" data-to="1" data-inviewport="yes">1</h6>  -->
                                        <h3 class="fw-8">06</h3>
                                    </div>

                                </div>
                            </div>
                            <div class="counter-box">
                                <div class="box-icon">
                                    <span class="icon icon-review"></span>
                                </div>
                                <div class="content-box">
                                    <div class="title-count text-variant-1">Reviews</div>
                                    <div class="d-flex align-items-end">
                                        <h3 class="fw-8">1.483</h3>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="wrapper-content row">
                            <div class="col-xl-9">
                                <div class="widget-box-2 wd-listing">
                                    <h5 class="title">New Listing</h5>
                                    <div class="wd-filter">
                                        <div class="ip-group icon-left">
                                            <input type="text" placeholder="Search">
                                            <span class="icon icon-search"></span>
                                        </div>
                                        <div class="ip-group icon">
                                            <input type="text" id="datepicker1" class="ip-datepicker icon" placeholder="From Date">
                                        </div>
                                        <div class="ip-group icon">
                                            <input type="text" id="datepicker2" class="ip-datepicker icon" placeholder="To Date">
                                        </div>
                                        <div class="ip-group">
                                            <div class="nice-select" tabindex="0"><span class="current">Select</span>
                                                <ul class="list">
                                                    <li data-value="1" class="option selected">Select</li>
                                                    <li data-value="2" class="option">Today</li>
                                                    <li data-value="3" class="option">Yesterday</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex gap-4"><span class="text-primary fw-7">26</span><span class="fw-6">Results found</span></div>
                                    <div class="wrap-table">
                                        <div class="table-responsive">

                                            <table>
                                            <thead>
                                            <tr>
                                                <th>Listing</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="file-delete">
                                                    <td>
                                                        <div class="listing-box">
                                                            <div class="images">
                                                                <img src="{{ URL::asset('/build/images/home/house-18.jpg') }}" alt="images">
                                                            </div>
                                                            <div class="content">
                                                                <div class="title"><a href="property-details-v1.html" class="link">Gorgeous Apartment Building</a> </div>
                                                                <div class="text-date">Posting date: March 22, 2024</div>
                                                                <div class="text-btn text-primary">$7,500</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-wrap">
                                                            <a href="#" class="btn-status"> Approved</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="list-action">
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Edit</a>
                                                            </li>
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.2427 12.2427C13.3679 11.1175 14.0001 9.59135 14.0001 8.00004C14.0001 6.40873 13.3679 4.8826 12.2427 3.75737C11.1175 2.63214 9.59135 2 8.00004 2C6.40873 2 4.8826 2.63214 3.75737 3.75737M12.2427 12.2427C11.1175 13.3679 9.59135 14.0001 8.00004 14.0001C6.40873 14.0001 4.8826 13.3679 3.75737 12.2427C2.63214 11.1175 2 9.59135 2 8.00004C2 6.40873 2.63214 4.8826 3.75737 3.75737M12.2427 12.2427L3.75737 3.75737" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>

                                                                Sold</a>
                                                            </li>
                                                            <li><a class="remove-file item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <!-- col 2 -->
                                                <tr class="file-delete">
                                                    <td>
                                                        <div class="listing-box">
                                                            <div class="images">
                                                                <img src="{{ URL::asset('/build/images/home/house-33.jpg') }}" alt="images">
                                                            </div>
                                                            <div class="content">
                                                                <div class="title"><a href="property-details-v1.html" class="link">Mountain Mist Retreat, Aspen</a> </div>
                                                                <div class="text-date">Posting date: March 22, 2024</div>
                                                                <div class="text-btn text-primary">$7,500</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-wrap">
                                                            <a href="#" class="btn-status"> Approved</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="list-action">
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Edit</a>
                                                            </li>
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.2427 12.2427C13.3679 11.1175 14.0001 9.59135 14.0001 8.00004C14.0001 6.40873 13.3679 4.8826 12.2427 3.75737C11.1175 2.63214 9.59135 2 8.00004 2C6.40873 2 4.8826 2.63214 3.75737 3.75737M12.2427 12.2427C11.1175 13.3679 9.59135 14.0001 8.00004 14.0001C6.40873 14.0001 4.8826 13.3679 3.75737 12.2427C2.63214 11.1175 2 9.59135 2 8.00004C2 6.40873 2.63214 4.8826 3.75737 3.75737M12.2427 12.2427L3.75737 3.75737" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>

                                                                Sold</a>
                                                            </li>
                                                            <li><a class="remove-file item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <!-- col 3 -->
                                                <tr class="file-delete">
                                                    <td>
                                                        <div class="listing-box">
                                                            <div class="images">
                                                                <img src="{{ URL::asset('/build/images/home/house-15.jpg') }}" alt="images">
                                                            </div>
                                                            <div class="content">
                                                                <div class="title"><a href="property-details-v1.html" class="link">Lakeview Haven, Lake Tahoe</a> </div>
                                                                <div class="text-date">Posting date: March 22, 2024</div>
                                                                <div class="text-btn text-primary">$7,500</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-wrap">
                                                            <a href="#" class="btn-status pending"> Pending</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="list-action">
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Edit</a>
                                                            </li>
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.2427 12.2427C13.3679 11.1175 14.0001 9.59135 14.0001 8.00004C14.0001 6.40873 13.3679 4.8826 12.2427 3.75737C11.1175 2.63214 9.59135 2 8.00004 2C6.40873 2 4.8826 2.63214 3.75737 3.75737M12.2427 12.2427C11.1175 13.3679 9.59135 14.0001 8.00004 14.0001C6.40873 14.0001 4.8826 13.3679 3.75737 12.2427C2.63214 11.1175 2 9.59135 2 8.00004C2 6.40873 2.63214 4.8826 3.75737 3.75737M12.2427 12.2427L3.75737 3.75737" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>

                                                                Sold</a>
                                                            </li>
                                                            <li><a class="remove-file item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <!-- col 4 -->
                                                <tr class="file-delete">
                                                <td>
                                                    <div class="listing-box">
                                                        <div class="images">
                                                            <img src="{{ URL::asset('/build/images/home/house-23.jpg') }}" alt="images">
                                                        </div>
                                                        <div class="content">
                                                            <div class="title"><a href="property-details-v1.html" class="link">Coastal Serenity Cottage</a> </div>
                                                            <div class="text-date">Posting date: March 22, 2024</div>
                                                            <div class="text-btn text-primary">$7,500</div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="status-wrap">
                                                        <a href="#" class="btn-status sold">Sold</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    <ul class="list-action">
                                                        <li><a class="item">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Edit</a>
                                                        </li>
                                                        <li><a class="item">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M12.2427 12.2427C13.3679 11.1175 14.0001 9.59135 14.0001 8.00004C14.0001 6.40873 13.3679 4.8826 12.2427 3.75737C11.1175 2.63214 9.59135 2 8.00004 2C6.40873 2 4.8826 2.63214 3.75737 3.75737M12.2427 12.2427C11.1175 13.3679 9.59135 14.0001 8.00004 14.0001C6.40873 14.0001 4.8826 13.3679 3.75737 12.2427C2.63214 11.1175 2 9.59135 2 8.00004C2 6.40873 2.63214 4.8826 3.75737 3.75737M12.2427 12.2427L3.75737 3.75737" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>

                                                            Sold</a>
                                                        </li>
                                                        <li><a class="remove-file item">
                                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg>
                                                            Delete</a>
                                                        </li>
                                                    </ul>
                                                </td>
                                                </tr>
                                                <!-- col 5 -->
                                                <tr class="file-delete">
                                                    <td>
                                                        <div class="listing-box">
                                                            <div class="images">
                                                                <img src="{{ URL::asset('/build/images/home/house-32.jpg') }}" alt="images">
                                                            </div>
                                                            <div class="content">
                                                                <div class="title"><a href="property-details-v1.html" class="link">Sunset Heights Estate</a> </div>
                                                                <div class="text-date">Posting date: March 22, 2024</div>
                                                                <div class="text-btn text-primary">$7,500</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="status-wrap">
                                                            <a href="#" class="btn-status pending"> Pending</a>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <ul class="list-action">
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.2413 2.9915L12.366 1.86616C12.6005 1.63171 12.9184 1.5 13.25 1.5C13.5816 1.5 13.8995 1.63171 14.134 1.86616C14.3685 2.10062 14.5002 2.4186 14.5002 2.75016C14.5002 3.08173 14.3685 3.39971 14.134 3.63416L4.55467 13.2135C4.20222 13.5657 3.76758 13.8246 3.29 13.9668L1.5 14.5002L2.03333 12.7102C2.17552 12.2326 2.43442 11.7979 2.78667 11.4455L11.242 2.9915H11.2413ZM11.2413 2.9915L13 4.75016" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Edit</a>
                                                            </li>
                                                            <li><a class="item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M12.2427 12.2427C13.3679 11.1175 14.0001 9.59135 14.0001 8.00004C14.0001 6.40873 13.3679 4.8826 12.2427 3.75737C11.1175 2.63214 9.59135 2 8.00004 2C6.40873 2 4.8826 2.63214 3.75737 3.75737M12.2427 12.2427C11.1175 13.3679 9.59135 14.0001 8.00004 14.0001C6.40873 14.0001 4.8826 13.3679 3.75737 12.2427C2.63214 11.1175 2 9.59135 2 8.00004C2 6.40873 2.63214 4.8826 3.75737 3.75737M12.2427 12.2427L3.75737 3.75737" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>

                                                                Sold</a>
                                                            </li>
                                                            <li><a class="remove-file item">
                                                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M9.82667 6.00035L9.596 12.0003M6.404 12.0003L6.17333 6.00035M12.8187 3.86035C13.0467 3.89501 13.2733 3.93168 13.5 3.97101M12.8187 3.86035L12.1067 13.1157C12.0776 13.4925 11.9074 13.8445 11.63 14.1012C11.3527 14.3579 10.9886 14.5005 10.6107 14.5003H5.38933C5.0114 14.5005 4.64735 14.3579 4.36999 14.1012C4.09262 13.8445 3.92239 13.4925 3.89333 13.1157L3.18133 3.86035M12.8187 3.86035C12.0492 3.74403 11.2758 3.65574 10.5 3.59568M3.18133 3.86035C2.95333 3.89435 2.72667 3.93101 2.5 3.97035M3.18133 3.86035C3.95076 3.74403 4.72416 3.65575 5.5 3.59568M10.5 3.59568V2.98501C10.5 2.19835 9.89333 1.54235 9.10667 1.51768C8.36908 1.49411 7.63092 1.49411 6.89333 1.51768C6.10667 1.54235 5.5 2.19901 5.5 2.98501V3.59568M10.5 3.59568C8.83581 3.46707 7.16419 3.46707 5.5 3.59568" stroke="#A3ABB0" stroke-linecap="round" stroke-linejoin="round"/>
                                                                </svg>
                                                                Delete</a>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>


                                            </tbody>
                                            </table>
                                        </div>

                                        <ul class="wd-navigation">
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
                                <div class="widget-box-2 wd-chart">
                                    <h5 class="title">Page Inside</h5>
                                    <div class="wd-filter-date">
                                        <div class="left">
                                            <div class="dates active">Day</div>
                                            <div class="dates">Week</div>
                                            <div class="dates">Month</div>
                                            <div class="dates">Year</div>
                                        </div>
                                        <div class="right">
                                            <div class="ip-group icon">
                                                <input type="text" id="datepicker3" class="ip-datepicker icon" placeholder="From Date">
                                            </div>
                                            <div class="ip-group icon">
                                                <input type="text" id="datepicker4" class="ip-datepicker icon" placeholder="To Date">
                                            </div>
                                        </div>


                                    </div>
                                    <div class="chart-box">
                                        <canvas id="lineChart"></canvas>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="widget-box-2 mess-box mb-20">
                                    <h5 class="title">Messages</h5>
                                    <ul class="list-mess">
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png9.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Themesflat</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean scelerisque vulputate tincidunt. Maecenas lorem sapien </p>
                                        </li>
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png10.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">ThemeMu</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Nullam lacinia lorem id sapien suscipit, vitae pellentesque metus maximus. Duis eu mollis dolor. Proin faucibus eu lectus a eleifend </p>
                                        </li>
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png11.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Cameron Williamson</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>In consequat lacus augue, a vestibulum est aliquam non</p>
                                        </li>
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png12.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Esther Howard</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Cras congue in justo vel dapibus. Praesent euismod, lectus et aliquam pretium </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="widget-box-2 mess-box">
                                    <h5 class="title">Recent Reviews</h5>
                                    <ul class="list-mess">
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png13.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Bessie Cooper</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Maecenas eu lorem et urna accumsan vestibulum vel vitae magna. </p>
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                        </li>
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png14.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Annette Black</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Nullam rhoncus dolor arcu, et commodo tellus semper vitae. Aenean finibus tristique lectus, ac lobortis mauris venenatis ac.  </p>
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                        </li>
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png15.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Ralph Edwards</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra semper convallis. Integer vestibulum tempus tincidunt. </p>
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                        </li>
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png16.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Jerome Bell</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Fusce sit amet purus eget quam eleifend hendrerit nec a erat. Sed turpis neque, iaculis blandit viverra ut, dapibus eget nisi. </p>
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                        </li>
                                        <li class="mess-item">
                                            <div class="user-box">
                                                <div class="avatar">
                                                    <img src="{{ URL::asset('/build/images/avatar/avt-png17.png') }}" alt="avt">
                                                </div>
                                                <div class="content">
                                                    <div class="name fw-6">Albert Flores</div>
                                                    <span class="caption-2 text-variant-3">3 day ago</span>
                                                </div>
                                            </div>
                                            <p>Donec bibendum nibh quis nisl luctus, at aliquet ipsum bibendum. Fusce at dui tincidunt nulla semper venenatis at et magna. Mauris turpis lorem, ultricies vel justo sed.</p>
                                            <ul class="list-star">
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                                <li class="icon icon-star"></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="footer-dashboard">
                        <p>Copyright © 2024 Home Lengo</p>
                    </div>
                </div>

                <div class="overlay-dashboard"></div>

            </div>
        </div>
        <!-- /#page -->

    </div>
    <!-- go top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 286.138;"></path>
        </svg>
    </div>

    @endsection
