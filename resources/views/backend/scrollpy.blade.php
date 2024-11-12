@extends('layout.master')
@section('title', 'Scrollpy')
@section('css')

@endsection
@section('main-content')
    <div class="container-fluid">
        <!-- Breadcrumb start -->
        <div class="row m-1">
            <div class="col-12 ">
                <h4 class="main-title">Scrollpy</h4>
                <ul class="app-line-breadcrumbs mb-3">
                    <li class="">
                        <a href="#" class="f-s-14 f-w-500">
                            <span>
                              <i class="ph-duotone  ph-briefcase-metal f-s-16"></i> Advance UI
                            </span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#" class="f-s-14 f-w-500">Scrollpy</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb end -->

        <!-- scrollpy strata  -->

        <!-- Scrollpy in Navbar start -->
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5>Scrollpy in Navbar</h5>
                </div>
                <div class="card-body">
                    <div id="navbar-example2" class="navbar navbar-expand-lg scrollpy-navbar bg-body-tertiary">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="#">
                                <img src="{{asset('../assets/images/logo/1.png')}}" class="w-150" alt="#">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav nav-pills ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link nav-pill-primary" href="#scrollspyHeading1">First</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link nav-pill-primary" href="#scrollspyHeading2">Second</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle nav-pill-primary" data-bs-toggle="dropdown" href="#"
                                           role="button" aria-expanded="false">Dropdown</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item nav-pill-primary" href="#scrollspyHeading3">Third</a></li>
                                            <li><a class="dropdown-item nav-pill-primary" href="#scrollspyHeading4">Fourth</a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item nav-pill-primary" href="#scrollspyHeading5">Fifth</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%"
                         data-bs-smooth-scroll="true" class="scrollspy-example p-3 rounded-2 h-250 overflow-y-scroll app-scroll" tabindex="0">
                        <h5 class="f-w-500 mb-2 text-dark" id="scrollspyHeading1">First paragraph</h5>
                        <p class="f-s-15 text-secondary mg-b-14">Platea platea, sapien rutrum duis adipiscing, dictumst. Arcu nibh. Ligula tellus senectus, penatibus maecenas laoreet. Purus odio sociis phasellus habitasse nulla ligula duis interdum, ultrices aliquam. Convallis odio augue pellentesque inceptos varius fermentum facilisi vel eget porttitor neque, congue suscipit conubia justo nibh. Semper sollicitudin nibh volutpat class. Nisl congue.</p>

                        <h5 class="f-w-500 mb-2 text-dark" id="scrollspyHeading2">Second paragraph</h5>
                        <p class="f-s-15 text-secondary mg-b-14">Lectus torquent sapien placerat bibendum, convallis cras ut nunc senectus ultricies venenatis, sapien. Pellentesque condimentum. Nisl. Nisl primis est rhoncus. Purus massa purus urna, fermentum nec auctor eu ultricies hac. Auctor curabitur dolor faucibus. Sagittis. Fringilla eleifend. Eu mi nam montes odio habitasse mus pede hendrerit. Massa malesuada sit arcu aenean taciti montes etiam facilisi aptent, quisque commodo cubilia nascetur habitasse primis elit ridiculus lectus mus cum sem nibh vivamus.</p>

                        <h5 class="f-w-500 mb-2 text-dark" id="scrollspyHeading3">Third paragraph</h5>
                        <p class="f-s-15 text-secondary mg-b-14">Ligula platea at eleifend vivamus nibh porta auctor ornare pellentesque cras et donec varius quam tempus. Mattis. Sollicitudin diam quisque libero mattis phasellus dui placerat mauris, hymenaeos aliquet fermentum facilisis turpis rhoncus nascetur fusce, tempus ligula mus senectus sociosqu proin donec quis nibh augue etiam quis nunc accumsan dui placerat imperdiet natoque. Erat potenti arcu euismod scelerisque nisi. Netus eget hendrerit facilisis donec risus. Nam fusce lobortis mi leo diam.</p>

                        <h5 class="f-w-500 mb-2 text-dark" id="scrollspyHeading4">Fourth paragraph</h5>
                        <p class="f-s-15 text-secondary mg-b-14">Diam condimentum etiam. In adipiscing dis aliquet nam ipsum etiam per viverra Quam platea posuere quis nunc et, vitae congue natoque lobortis laoreet. Sapien potenti augue litora porta mi vitae conubia natoque justo auctor pretium et convallis habitant potenti sed ridiculus velit mattis quam sociosqu venenatis fames vitae parturient nisl pretium pulvinar eros ultricies massa feugiat sapien sagittis luctus ultrices leo conubia auctor. Lorem sed facilisi donec mollis facilisi. Pulvinar.</p>

                        <h5 class="f-w-500 mb-2 text-dark" id="scrollspyHeading5">Fifth paragraph</h5>
                        <p class="f-s-15 text-secondary">Hymenaeos tincidunt donec vivamus suspendisse condimentum tincidunt vestibulum varius enim, odio gravida pellentesque fames Ac orci bibendum nullam eu posuere natoque tempus blandit lobortis tortor hymenaeos faucibus eleifend faucibus ultrices etiam etiam luctus, volutpat nostra nunc Est sit sodales ad malesuada justo dignissim eget est cum accumsan maecenas tempus orci ipsum a nisl vel porta. Suspendisse gravida placerat vel cursus facilisi parturient justo diam pede conubia vulputate vivamus libero iaculis primis sociosqu mattis non natoque penatibus adipiscing mollis fermentum ac ut feugiat pulvinar Lobortis nibh amet. Adipiscing nec phasellus primis. Pretium urna phasellus mi habitant tellus a ac ornare posuere.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scrollpy in Navbar end -->

        <!-- Scrollpy with nested nav start -->
        <div class="col-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Scrollpy with nested nav</h5>
                        </div>
                        <div class="card-body">
                            <div id="navbar-example3" class="h-100 flex-column align-items-stretch pe-4 scrollpy-nested-nav">
                                <div class="nav nav-pills flex-column">
                                    <a class="nav-link nav-pill-primary" href="#item-1">Item 1</a>
                                    <div class="nav nav-pills flex-column">
                                        <a class="nav-link nav-pill-primary ms-3 my-1" href="#item-1-1">Item 1.1</a>
                                        <a class="nav-link nav-pill-primary ms-3 my-1" href="#item-1-2">Item 1.2</a>
                                    </div>
                                    <a class="nav-link nav-pill-primary" href="#item-2">Item 2</a>
                                    <a class="nav-link nav-pill-primary" href="#item-3">Item 3</a>
                                    <div class="nav nav-pills flex-column">
                                        <a class="nav-link nav-pill-primary ms-3 my-1" href="#item-3-1">Item 3.1</a>
                                        <a class="nav-link nav-pill-primary ms-3 my-1" href="#item-3-2">Item 3.2</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div data-bs-spy="scroll" data-bs-target="#navbar-example3" data-bs-smooth-scroll="true"
                                 class="scrollspy-example-2 h-350 overflow-y-scroll app-scroll" tabindex="0">
                                <div id="item-1">
                                    <h5 class="f-w-500 mb-2 text-dark">Item 1</h5>
                                    <p class="f-s-15 text-secondary mg-b-14">A web designer is a skilled professional who specializes in creating visually appealing and functional websites. They possess a strong understanding of design principles, user experience, and coding languages to develop websites that are both aesthetically pleasing and user-friendly. A web designer is responsible for creating the overall look and feel of a</p>
                                </div>
                                <div id="item-1-1">
                                    <h5 class="f-w-500 mb-2 text-dark">Item 1.1</h5>
                                    <p class="f-s-15 text-secondary mg-b-14">The role of a web designer goes beyond just creating visually appealing websites. They also need to have a deep understanding of user experience (UX) design principles. This involves considering how users will interact with the website, ensuring that it is easy to navigate, and optimizing it for different devices and screen sizes. A web designer needs to have a keen eye for detail and be able to create designs</p>
                                </div>
                                <div id="item-1-2">
                                    <h5 class="f-w-500 mb-2 text-dark"> Item 1.2</h5>
                                    <p class="f-s-15 text-secondary mg-b-14">It is a long-established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                        it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                        here, content here', making it look like readable English. Many desktop publishing
                                        packages and web page editors now use Lorem Ipsum as their default model text, and a
                                        search for 'lorem ipsum' will uncover many websites still in their infancy. Various
                                        versions have evolved over the years, sometimes by accident, sometimes on purpose
                                        injected humour and the like</p>
                                </div>
                                <div id="item-2">
                                    <h5 class="f-w-500 mb-2 text-dark">Item 2</h5>
                                    <p class="f-s-15 text-secondary mg-b-14" >In addition to design skills, a web designer also needs to have a solid understanding of coding languages such as HTML, CSS, and JavaScript. This allows them to bring their designs to life and ensure that the website functions as intended. They need to be able to write clean and efficient code, optimize the website for search engines, and ensure that it is compatible with different browsers and devices.</p>
                                </div>
                                <div id="item-3">
                                    <h5 class="f-w-500 mb-2 text-dark">Item 3</h5>
                                    <p class="f-s-15 text-secondary mg-b-14"> A web designer is a creative professional who specializes in designing and creating visually appealing and user-friendly websites. They have a deep understanding of various design principles, color schemes, typography, and layout techniques to create a visually stunning website that aligns with the client's brand and objectives. A web designer combines their technical skills with their artistic flair to bring a website</p>
                                </div>
                                <div id="item-3-1">
                                    <h5 class="f-w-500 mb-2 text-dark">Item 3.1</h5>
                                    <p class="f-s-15 text-secondary mg-b-14"> The role of a web designer goes beyond just creating a visually appealing website. They also need to have a good understanding of user experience (UX) design principles. This involves considering how users will interact with the website, ensuring that it is easy to navigate, and that the information is presented in a logical and intuitive manner. A web designer will also need to have a good understanding of responsive design, ensuring that the website looks and functions well on different devices and screen sizes.</p>
                                </div>
                                <div id="item-3-2">
                                    <h5 class="f-w-500 mb-2 text-dark">Item 3.2</h5>
                                    <p class="f-s-15 text-secondary mg-b-14"> In addition to their design skills, a web designer also needs to have a good understanding of coding languages such as HTML, CSS, and JavaScript. This allows them to bring their designs to life by coding the website and implementing interactive elements. They may also need to work closely with web developers to ensure that the design is implemented correctly and that any technical issues are resolved. Overall, a web designer plays a crucial role in creating visually appealing and user-friendly websites that effectively communicate the client's message</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scrollpy with nested nav end -->

        <!-- Scrollpy with list-group start -->
        <div class="col-12">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Scrollpy with list-group</h5>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div id="list-example" class="list-group">
                                    <a class="list-group-item nav-pill-primary list-group-item-action" href="#list-item-1">Item 1</a>
                                    <a class="list-group-item nav-pill-primary list-group-item-action" href="#list-item-2">Item 2</a>
                                    <a class="list-group-item nav-pill-primary list-group-item-action" href="#list-item-3">Item 3</a>
                                    <a class="list-group-item nav-pill-primary list-group-item-action" href="#list-item-4">Item 4</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true"
                                 class="scrollspy-example h-215 overflow-y-scroll app-scroll" tabindex="0">
                                <h5 id="list-item-1" class="f-w-500 mb-2 text-dark">Item 1</h5>
                                <p class="f-s-15 text-secondary mg-b-14">A digital artisan, skilled in the art of crafting captivating online experiences, is what one would refer to as a web designer. This master of the virtual realm possesses an innate ability to blend aesthetics with functionality, creating visually stunning websites that leave a lasting impression on the beholder. With a keen eye for detail and an unwavering commitment to perfection, the web designer meticulously weaves together colors, typography, and imagery to construct a virtual masterpiece that not only captivates the senses but also effortlessly guides the user through a seamless digital journey.</p>

                                <h5 id="list-item-2" class="f-w-500 mb-2 text-dark">Item 2</h5>
                                <p class="f-s-15 text-secondary mg-b-14">Picture a modern-day Leonardo da Vinci, armed with a palette of pixels and a canvas of code, and you have the essence of a web designer. This visionary artist possesses an unparalleled understanding of the digital landscape, effortlessly transforming abstract concepts into tangible online realities. With an unwavering dedication to staying ahead of the ever-evolving trends, the web designer is a true pioneer, constantly pushing the boundaries of creativity and innovation. Their work is a testament to their ability to harmonize technology and design, resulting in websites that are not only visually striking but also functionally flawless.
                                </p>

                                <h5 id="list-item-3" class="f-w-500 mb-2 text-dark">Item 3</h5>
                                <p class="f-s-15 text-secondary mg-b-14"> In the realm of the digital realm, the web designer reigns supreme as the virtuoso of the online universe. Armed with an arsenal of technical skills and an insatiable thirst for creativity, this digital maestro orchestrates a symphony of pixels and lines of code to create awe-inspiring websites that are as visually captivating as they are user-friendly. With an acute understanding of user experience and an unwavering commitment to excellence, the web designer meticulously crafts every element of a website, ensuring that it not only reflects the brand's identity but also engages and delights its visitors. </p>

                                <h5 id="list-item-4" class="f-w-500 mb-2 text-dark">Item 4</h5>
                                <p class="f-s-15 text-secondary mg-b-14"> A digital artisan, skilled in the art of crafting captivating online experiences, is what one would refer to as a web designer. This master of the virtual realm possesses an innate ability to blend aesthetics with functionality, creating visually stunning websites that leave a lasting impression on the beholder. With a keen eye for detail and an unwavering commitment to perfection, the web designer meticulously weaves together colors, typography, and imagery to construct a virtual masterpiece that not only captivates the senses but also effortlessly guides the user through a seamless digital journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Scrollpy with list-group end -->

        <!-- Simple anchors start -->
        <div class="col-12">
            <div class="row">

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <h5>Simple anchors</h5>
                        </div>
                        <div class="card-body">
                            <div id="simple-list-example"
                                 class="d-flex flex-column gap-2 simple-list-example-scrollspy text-center">
                                <a class="p-1 rounded border" href="#simple-list-item-1">Item 1</a>
                                <a class="p-1 rounded border" href="#simple-list-item-2">Item 2</a>
                                <a class="p-1 rounded border" href="#simple-list-item-3">Item 3</a>
                                <a class="p-1 rounded border" href="#simple-list-item-4">Item 4</a>
                                <a class="p-1 rounded border" href="#simple-list-item-5">Item 5</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8">
                    <div class="card">
                        <div class="card-body">
                            <div data-bs-spy="scroll" data-bs-target="#simple-list-example" data-bs-offset="0"
                                 data-bs-smooth-scroll="true" class="scrollspy-example h-245 overflow-y-scroll app-scroll" tabindex="0">
                                <h5 id="simple-list-item-1" class="f-w-500 mb-2 text-dark">Item 1</h5>
                                <p class="f-s-15 text-secondary mg-b-14">Are you looking for a creative professional who can bring your website to life? Look no further than a web designer! With their expertise in both design and technology, web designers have the skills to create visually stunning and user-friendly websites that will captivate your audience. They understand the importance of a well-designed website in today's digital age and can tailor their designs to match your brand identity and target audience.
                                </p>

                                <h5 id="simple-list-item-2" class="f-w-500 mb-2 text-dark">Item 2</h5>
                                <p class="f-s-15 text-secondary mg-b-14">A web designer is not just someone who knows how to make a website look good. They are skilled in various programming languages and have a deep understanding of user experience and interface design. They can create a website that not only looks visually appealing but also functions seamlessly across different devices and browsers. From choosing the right color palette to creating intuitive navigation, a web designer pays attention to every detail to ensure your website is both aesthetically pleasing and user-friendly.</p>

                                <h5 id="simple-list-item-3" class="f-w-500 mb-2 text-dark">Item 3</h5>
                                <p class="f-s-15 text-secondary mg-b-14">It is a long-established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now use Lorem Ipsum as their default model text, and a
                                    search for 'lorem ipsum' will uncover many websites still in their infancy. Various
                                    versions have evolved over the years, sometimes by accident, sometimes on purpose
                                    injected humour and the like</p>

                                <h5 id="simple-list-item-4" class="f-w-500 mb-2 text-dark">Item 4</h5>
                                <p class="f-s-15 text-secondary mg-b-14"> In addition to their technical skills, web designers are also great problem solvers. They can analyze your business goals and translate them into a website that not only meets your needs but also exceeds your expectations. They are constantly staying updated with the latest design trends and technologies to ensure your website is modern and competitive in the online landscape. A web designer is a valuable asset to any business or individual looking to establish a strong online presence and make a lasting impression on their audience.</p>

                                <h5 id="simple-list-item-5" class="f-w-500 mb-2 text-dark">Item 5</h5>
                                <p class="f-s-15 text-secondary mg-b-14"> A web designer is a professional who specializes in creating and designing websites. They possess a unique skill set that combines creativity, technical knowledge, and an understanding of user experience. Web designers are responsible for the visual layout, functionality, and overall aesthetics of a website. They work closely with clients to understand their needs and objectives, and then translate those into a visually appealing and user-friendly website.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Simple anchors end -->
    </div>
@endsection

@section('script')
    <!--customizer-->
    <div id="customizer"></div>

@endsection
