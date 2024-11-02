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
                <div class="sidebar-menu-dashboard">
                    <a href="index.html" class="logo-box">
                        <img src="{{ URL::asset('/build/images/logo/logo-footer@2x.png') }}" alt="">
                    </a>
                    <div class="user-box">
                        <p class="fw-6">Profile</p>
                        <div class="user">
                            <div class="icon-box">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_13487_13661)">
                                    <path d="M10.0007 9.99947C10.9357 9.99947 11.8496 9.72222 12.627 9.20278C13.4044 8.68334 14.0103 7.94504 14.3681 7.08124C14.7259 6.21745 14.8196 5.26695 14.6372 4.34995C14.4547 3.43295 14.0045 2.59063 13.3434 1.92951C12.6823 1.26839 11.84 0.81816 10.923 0.635757C10.006 0.453354 9.05546 0.54697 8.19166 0.904766C7.32787 1.26256 6.58957 1.86847 6.07013 2.64586C5.55069 3.42326 5.27344 4.33723 5.27344 5.2722C5.27469 6.52556 5.77314 7.72723 6.65941 8.6135C7.54567 9.49976 8.74734 9.99821 10.0007 9.99947ZM10.0007 2.12068C10.624 2.12068 11.2333 2.30551 11.7516 2.65181C12.2699 2.9981 12.6738 3.4903 12.9123 4.06616C13.1509 4.64203 13.2133 5.27569 13.0917 5.88702C12.9701 6.49836 12.6699 7.05991 12.2292 7.50065C11.7884 7.9414 11.2269 8.24155 10.6155 8.36315C10.0042 8.48476 9.37054 8.42235 8.79468 8.18382C8.21881 7.94528 7.72661 7.54135 7.38032 7.02308C7.03403 6.50482 6.8492 5.89551 6.8492 5.2722C6.8492 4.43636 7.18123 3.63476 7.77225 3.04374C8.36328 2.45271 9.16488 2.12068 10.0007 2.12068Z" fill="white"/>
                                    <path d="M10.0011 11.5762C8.12108 11.5783 6.31869 12.326 4.98934 13.6554C3.65999 14.9847 2.91224 16.7871 2.91016 18.6671C2.91016 18.876 2.99316 19.0764 3.14092 19.2242C3.28868 19.372 3.48908 19.455 3.69803 19.455C3.90699 19.455 4.10739 19.372 4.25515 19.2242C4.4029 19.0764 4.48591 18.876 4.48591 18.6671C4.48591 17.2044 5.06697 15.8016 6.10126 14.7673C7.13555 13.733 8.53835 13.1519 10.0011 13.1519C11.4638 13.1519 12.8666 13.733 13.9009 14.7673C14.9352 15.8016 15.5162 17.2044 15.5162 18.6671C15.5162 18.876 15.5992 19.0764 15.747 19.2242C15.8947 19.372 16.0951 19.455 16.3041 19.455C16.513 19.455 16.7134 19.372 16.8612 19.2242C17.009 19.0764 17.092 18.876 17.092 18.6671C17.0899 16.7871 16.3421 14.9847 15.0128 13.6554C13.6834 12.326 11.881 11.5783 10.0011 11.5762Z" fill="white"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0_13487_13661">
                                    <rect width="18.9091" height="18.9091" fill="white" transform="translate(0.546875 0.544922)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <div class="content">
                                <div class="caption-2 text">Account</div>
                                <div class="text-white fw-6">themesflat@gmail...</div>
                            </div>
                        </div>
                    </div>
                    <div class="menu-box">
                        <div class="title fw-6">Menu</div>
                        <ul class="box-menu-dashboard">
                            <li class="nav-menu-item active">
                                <a class="nav-menu-link" href="dashboard.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <path d="M6.75682 9.35156V15.64" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M11.0342 6.34375V15.6412" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M15.2412 12.6758V15.6412" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.2939 1.83398H6.70346C3.70902 1.83398 1.83203 3.95339 1.83203 6.95371V15.0476C1.83203 18.0479 3.70029 20.1673 6.70346 20.1673H15.2939C18.2971 20.1673 20.1654 18.0479 20.1654 15.0476V6.95371C20.1654 3.95339 18.2971 1.83398 15.2939 1.83398Z" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    Dashboards
                                </a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="my-profile.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.987 14.0684C7.44168 14.0684 4.41406 14.6044 4.41406 16.7511C4.41406 18.8979 7.42247 19.4531 10.987 19.4531C14.5323 19.4531 17.5591 18.9162 17.5591 16.7703C17.5591 14.6245 14.5515 14.0684 10.987 14.0684Z" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9866 11.0056C13.3132 11.0056 15.1989 9.11897 15.1989 6.79238C15.1989 4.46579 13.3132 2.58008 10.9866 2.58008C8.66005 2.58008 6.77346 4.46579 6.77346 6.79238C6.7656 9.11111 8.6391 10.9977 10.957 11.0056H10.9866Z" stroke="#F1FAEE" stroke-width="1.42857" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="reviews.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                            <path d="M16.4076 8.11328L12.3346 11.4252C11.5651 12.0357 10.4824 12.0357 9.71285 11.4252L5.60547 8.11328" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.4985 19.25C18.2864 19.2577 20.1654 16.9671 20.1654 14.1518V7.85584C20.1654 5.04059 18.2864 2.75 15.4985 2.75H6.49891C3.711 2.75 1.83203 5.04059 1.83203 7.85584V14.1518C1.83203 16.9671 3.711 19.2577 6.49891 19.25H15.4985Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    Reviews
                                </a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="message.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4808 17.4814C14.6793 20.2831 10.531 20.8885 7.13625 19.3185C6.6351 19.1167 6.22423 18.9537 5.83362 18.9537C4.74565 18.9601 3.39143 20.015 2.68761 19.3121C1.98379 18.6082 3.03952 17.2529 3.03952 16.1583C3.03952 15.7677 2.88291 15.3641 2.68116 14.862C1.11046 11.4678 1.71663 7.31811 4.5181 4.51726C8.09433 0.939714 13.9045 0.939714 17.4808 4.51634C21.0635 8.09941 21.057 13.9047 17.4808 17.4814Z" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.6105 11.3802H14.6187" stroke="#F1FAEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.9347 11.3802H10.9429" stroke="#F1FAEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.2589 11.3802H7.26715" stroke="#F1FAEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    Message
                                </a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="my-property.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <path d="M10.533 2.55664H7.10561C4.28686 2.55664 2.51953 4.55222 2.51953 7.37739V14.9986C2.51953 17.8237 4.27861 19.8193 7.10561 19.8193H15.1943C18.0222 19.8193 19.7813 17.8237 19.7813 14.9986V11.3062" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.09012 10.0111L14.9404 3.16086C15.7938 2.30836 17.177 2.30836 18.0305 3.16086L19.146 4.27644C19.9995 5.12986 19.9995 6.51403 19.146 7.36653L12.2628 14.2498C11.8897 14.6229 11.3837 14.8328 10.8557 14.8328H7.42188L7.50804 11.3678C7.52087 10.8581 7.72896 10.3723 8.09012 10.0111Z" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.8984 4.21875L18.0839 8.40425" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    My properties
                                </a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="my-favorites.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.63385 10.6318C1.65026 7.56096 2.79976 4.05104 6.02368 3.01246C7.71951 2.46521 9.59135 2.78788 11.0012 3.84846C12.3349 2.81721 14.2755 2.46888 15.9695 3.01246C19.1934 4.05104 20.3503 7.56096 19.3676 10.6318C17.8368 15.4993 11.0012 19.2485 11.0012 19.2485C11.0012 19.2485 4.21601 15.5561 2.63385 10.6318Z" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.668 6.14258C15.6488 6.45974 16.3418 7.33516 16.4252 8.36274" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    My favorite
                                </a>
                            </li>
                            <!-- <li class="nav-menu-item">
                                <a class="nav-menu-link" href="save-search.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <circle cx="10.7864" cy="10.7864" r="8.23951" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M16.5156 16.9453L19.746 20.1673" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    Save search
                                </a>
                            </li> -->
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="message.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.4808 17.4814C14.6793 20.2831 10.531 20.8885 7.13625 19.3185C6.6351 19.1167 6.22423 18.9537 5.83362 18.9537C4.74565 18.9601 3.39143 20.015 2.68761 19.3121C1.98379 18.6082 3.03952 17.2529 3.03952 16.1583C3.03952 15.7677 2.88291 15.3641 2.68116 14.862C1.11046 11.4678 1.71663 7.31811 4.5181 4.51726C8.09433 0.939714 13.9045 0.939714 17.4808 4.51634C21.0635 8.09941 21.057 13.9047 17.4808 17.4814Z" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.6105 11.3802H14.6187" stroke="#F1FAEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10.9347 11.3802H10.9429" stroke="#F1FAEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7.2589 11.3802H7.26715" stroke="#F1FAEE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    Message
                                </a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="add-property.html">
                                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                            <path d="M19.5 3H4.5C4.10218 3 3.72064 3.15804 3.43934 3.43934C3.15804 3.72064 3 4.10218 3 4.5V19.5C3 19.8978 3.15804 20.2794 3.43934 20.5607C3.72064 20.842 4.10218 21 4.5 21H19.5C19.8978 21 20.2794 20.842 20.5607 20.5607C20.842 20.2794 21 19.8978 21 19.5V4.5C21 4.10218 20.842 3.72064 20.5607 3.43934C20.2794 3.15804 19.8978 3 19.5 3ZM19.5 19.5H4.5V4.5H19.5V19.5ZM16.5 12C16.5 12.1989 16.421 12.3897 16.2803 12.5303C16.1397 12.671 15.9489 12.75 15.75 12.75H12.75V15.75C12.75 15.9489 12.671 16.1397 12.5303 16.2803C12.3897 16.421 12.1989 16.5 12 16.5C11.8011 16.5 11.6103 16.421 11.4697 16.2803C11.329 16.1397 11.25 15.9489 11.25 15.75V12.75H8.25C8.05109 12.75 7.86032 12.671 7.71967 12.5303C7.57902 12.3897 7.5 12.1989 7.5 12C7.5 11.8011 7.57902 11.6103 7.71967 11.4697C7.86032 11.329 8.05109 11.25 8.25 11.25H11.25V8.25C11.25 8.05109 11.329 7.86032 11.4697 7.71967C11.6103 7.57902 11.8011 7.5 12 7.5C12.1989 7.5 12.3897 7.57902 12.5303 7.71967C12.671 7.86032 12.75 8.05109 12.75 8.25V11.25H15.75C15.9489 11.25 16.1397 11.329 16.2803 11.4697C16.421 11.6103 16.5 11.8011 16.5 12Z" fill="#F1FAEE"></path>
                                        </g>
                                    </svg>

                                    Add Property
                                </a>
                            </li>
                            <li class="nav-menu-item">
                                <a class="nav-menu-link" href="index.html">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g opacity="0.2">
                                        <path d="M13.7627 6.77418V5.91893C13.7627 4.05352 12.2502 2.54102 10.3848 2.54102H5.91606C4.05156 2.54102 2.53906 4.05352 2.53906 5.91893V16.1214C2.53906 17.9868 4.05156 19.4993 5.91606 19.4993H10.394C12.2539 19.4993 13.7627 17.9914 13.7627 16.1315V15.2671" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M19.9907 11.0208H8.95312" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M17.3047 8.34766L19.9887 11.0197L17.3047 13.6927" stroke="#F1FAEE" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                    </svg>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
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
