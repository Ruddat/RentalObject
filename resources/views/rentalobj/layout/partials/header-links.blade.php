<ul class="navigation clearfix">
    <li class="dropdown2 home current"><a href="#">Home</a>
        <ul>

            <li class="{{ Request::is('start-page') ? 'current' : '' }}">
                <a href="{{ url('/') }}">Homepage 01</a>
            </li>
            <li class="{{ Request::is('home-02') ? 'current' : '' }}">
                <a href="{{ url('home-02') }}">Homepage 02</a>
            </li>
            <li class="{{ Request::is('home-03') ? 'current' : '' }}">
                <a href="{{ url('home-03') }}">Homepage 03</a>
            </li>
            <li class="{{ Request::is('home-04') ? 'current' : '' }}">
                <a href="{{ url('home-04') }}">Homepage 04</a>
            </li>
            <li class="{{ Request::is('home-05') ? 'current' : '' }}">
                <a href="{{ url('home-05') }}">Homepage 05</a>
            </li>
            <li class="{{ Request::is('home-06') ? 'current' : '' }}">
                <a href="{{ url('home-06') }}">Homepage 06</a>
            </li>
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

    <li class="dropdown2"><a href="#">Dashboard</a>
        <ul>
            <li><a href="dashboard.html">Dashboard</a></li>
            <li><a href="my-property.html">My Properties</a></li>
            <li><a href="message.html">Message</a></li>
            <li><a href="my-favorites.html">My Favorites</a></li>
            <li><a href="reviews.html">Reviews</a></li>
            <li><a href="my-profile.html">My Profile</a></li>
            <li><a href="add-property.html">Add Property</a></li>
        </ul>
    </li>
</ul>
