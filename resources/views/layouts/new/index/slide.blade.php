    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url({{asset('frontend/img/blog-img/bg2.jpg')}});"></div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url({{asset('frontend/img/blog-img/bg1.jpg')}});"></div>
            
            <div class="single-hero-slide bg-img background-overlay" style="background-image: url({{asset('frontend/img/blog-img/bg3.jpg')}});"></div>
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- post on the image slide -->
                        
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            <?php $i=1?>
                            @foreach($posts as $post)
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>{{$i++}}</p>
                                </div>
                                <div class="post-title">
                                    <a href="{{ route('frontendblog.show', $post->slug) }}">{{$post->title}}</a>
                                </div>
                            </div>
                            @endforeach
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->
