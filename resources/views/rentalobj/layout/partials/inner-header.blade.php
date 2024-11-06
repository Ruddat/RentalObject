                <!-- header -->
                <header class="main-header fixed-header header-dashboard">
                    <!-- Header Lower -->
                    <div class="header-lower">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="inner-header">
                                    <div class="inner-header-left">
                                        <div class="logo-box d-flex">
                                            <div class="logo"><a href="{{ url('/') }}"><img src="{{ URL::asset('/build/images/logo/logo@2x.png') }}" alt="logo" width="174" height="44"></a></div>
                                            <div class="button-show-hide">
                                                <span class="icon icon-categories"></span>
                                            </div>
                                        </div>
                                        <div class="nav-outer flex align-center">
                                            <!-- Main Menu -->
                                            <nav class="main-menu show navbar-expand-md">
                                                <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                                    @include('rentalobj.layout.partials.header-links')
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
                                            <a class="tf-btn primary" href="{{ url('add-property') }}">
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
