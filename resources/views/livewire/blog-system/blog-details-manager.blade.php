<div>
    <!-- Section Blog Detail -->
    <section class="flat-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="flat-blog-detail">
                        <div class="mb-30 pb-30 line-b">
                            <h3 class="title fw-8">{{ $post->title }}</h3>
                            <ul class="meta-blog">
                                <li class="item">
                                    <span class="text-primary fw-6">{{ $post->author }}</span>
                                </li>
                                <li class="item">
                                    <span class="text-primary fw-6">{{ $post->category->name }}</span>
                                </li>
                                <li class="item">
                                    <span class="text-variant-1">{{ $post->created_at->format('F j, Y') }}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="pb-30 line-b">
                            <p class="text-black-2 fw-6">{{ $post->short_title }}</p>
                            <div class="my-30 round-30 o-hidden">
                                <img class="lazyload w-100" src="{{ Storage::url($post->image_large) }}" alt="img-blog">
                            </div>
                            <p class="text-black-2 fw-6">{!! $post->content !!}</p>
                        </div>

                        <div class="mt-16 d-flex justify-content-between flex-wrap gap-16">
                            <div class="d-flex flex-wrap align-items-center gap-12">
                                <span class="text-black fw-6">Tags:</span>
                                <ul class="d-flex flex-wrap gap-9">
                                    @foreach($post->tags as $tag)
                                        <li><a href="#" class="blog-tag">{{ $tag->name }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="d-flex flex-wrap align-items-center gap-16">
                                <span class="font-rubik text-variant-1">Share this post:</span>
                                <ul class="d-flex flex-wrap gap-12">
                                    <li><a href="#" class="box-icon line w-44 round">
                                        <i class="icon icon-fb"></i>
                                    </a></li>
                                    <li><a href="#" class="box-icon line w-44 round">
                                        <i class="icon icon-x"></i>
                                       </a></li>
                                    <li><a href="#" class="box-icon line w-44 round">
                                        <i class="icon icon-in"></i>
                                    </a></li>
                                    <li><a href="#" class="box-icon line w-44 round">
                                        <i class="icon icon-instargram"></i>
                                    </a></li>

                                </ul>
                            </div>
                        </div>

                        @livewire('blog-system.blog-comments-manager', ['postId' => $post->id])



                </div>
            </div>




                <!-- Sidebar -->
                <div class="col-lg-4">
                    <aside class="sidebar-blog fixed-sidebar">
                        <div class="widget-search">
                            <h5 class="text-black-2 text-capitalize">Search Blog</h5>
                            <div class="search-box">
                                <input class="search-field" type="text" placeholder="Search...">
                                <a href="#" class="icon icon-search"></a>
                            </div>
                        </div>

                        <div class="widget-box categories">
                            <h5 class="text-black-2 text-capitalize">Categories</h5>
                            <ul class="mt-20">
                                @foreach($categories as $category)
                                    <li><a href="{{ route('blog-grid-manager', ['categoryId' => $category->id]) }}" class="categories-item link">
                                        <span>{{ $category->name }}</span>
                                        <span>({{ $category->posts_count }})</span>
                                    </a></li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="widget-box recent">
                            <h5 class="text-black-2 text-capitalize">Featured listings</h5>
                            <ul>
                                @foreach($featuredPosts as $featured)
                                    <li>
                                        <a href="{{ route('blog.show', $featured->slug) }}" class="recent-post-item not-overlay hover-img">
                                            <div class="img-style">
                                                <img src="{{ Storage::url($featured->image_small) }}" alt="post-recent">
                                            </div>
                                            <div class="content">
                                                <div class="title">{{ $featured->title }}</div>
                                                <div class="subtitle">
                                                    <span>{{ $featured->created_at->format('F j, Y') }}</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
</div>

