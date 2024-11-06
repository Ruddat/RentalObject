<?php $page = 'dashboard'; ?>
@extends('rentalobj.layout.mainlayout')
@section('content')



<!-- dashboard -->



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
