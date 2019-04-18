 <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">
                                About World
                            </h5>
                            <div class="widget-content">
                                <p>
                                    The mango is perfect in that it is always yellow and if it’s not, I don’t want to hear about it. The mango’s only flaw, and it’s a minor one, is the effort it sometimes takes to undress the mango, carve it up in a way that makes sense, and find its way to the mouth.
                                </p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">
                                Top Stories
                            </h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                @foreach($popularpost as $post)
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <a href="{{route('frontendblog.show',$post->slug)}}">
                                        <img alt="" src="{{asset('img').'/'.$post->image_thumb_url}}">
                                        </img>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a class="headline" href="{{route('frontendblog.show',$post->slug)}}">
                                            <h5 class="mb-0">
                                                {{$post->title}}
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Single Blog Post -->
         {{--                        <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img alt="" src="img/blog-img/b13.jpg">
                                        </img>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a class="headline" href="#">
                                            <h5 class="mb-0">
                                                How Did van Gogh’s Turbulent Mind Depict One of the Most
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img alt="" src="img/blog-img/b14.jpg">
                                        </img>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a class="headline" href="#">
                                            <h5 class="mb-0">
                                                How Did van Gogh’s Turbulent Mind Depict One of the Most
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                                Single Blog Post
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img alt="" src="img/blog-img/b10.jpg">
                                        </img>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a class="headline" href="#">
                                            <h5 class="mb-0">
                                                How Did van Gogh’s Turbulent Mind Depict One of the Most
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img alt="" src="img/blog-img/b12.jpg">
                                        </img>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a class="headline" href="#">
                                            <h5 class="mb-0">
                                                How Did van Gogh’s Turbulent Mind Depict One of the Most
                                            </h5>
                                        </a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">
                                Stay Connected
                            </h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#">
                                        <i class="fa fa-facebook">
                                        </i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-twitter">
                                        </i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-pinterest">
                                        </i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-vimeo">
                                        </i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-instagram">
                                        </i>
                                    </a>
                                    <a href="#">
                                        <i class="fa fa-google">
                                        </i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">
                                Today’s Pick
                            </h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img alt="" src="{{asset('frontend/img/blog-img/b22.jpg')}}">
                                        </img>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a class="headline" href="#">
                                            <h5>
                                                How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?
                                            </h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>