@include('layouts.new.index.header')
<body>
    @include('layouts.new.index.navbar')
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url({{asset('frontend/img/blog-img/bg2.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        {{-- @foreach($posts as $post)
                        <div class="post-cta">
                            <a href="#">
                                {{$post->category->title}}
                            </a>
                        </div>
                        @endforeach --}}
                        <h3>
                            You search for : {{request('term')}}
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                        <div class="world-latest-articles">
                            <div class="row">
                                <div class="col-12 ">
                                    <div class="title">
                                        <h5>
                                            @if($posts->isEmpty())
                                            <div class="alert alert-warning">
                                                <p>
                                                    Nothing to show in 
                                                @if(isset($autherName))
                                                {{$autherName}}
                                                @elseif(isset($categoryName))
                                                {{$categoryName}}
                                                @elseif(isset($tagName))
                                                {{$tagName}}
                                                @endif
                                                </p>
                                            </div>
                                            @else
                                            The results:
                                            @endif


                                        </h5>
                                    </div>
                                    <!-- Single Blog Post -->
                                    @foreach($posts as $post)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img alt="" src="{{asset('img').'/'.$post->image}}">
                                            </img>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a class="headline" href="{{ route('frontendblog.show', $post->slug) }}">
                                                <h5>
                                                    {{$post->title}}
                                                </h5>
                                            </a>
                                            <p>
                                                {!!$post->excerpt_html!!}
                                            </p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p>
                                                    <a class="post-author" href="{{route('auther',$post->auther->slug)}}">
                                                        {{$post->auther->name}}
                                                    </a>
                                                    on
                                                    <a class="post-date" href="#">
                                                        {{$post->date}}
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <div class="next-news">
                                        {{$posts->appends(request()->only(['term', 'month', 'year']))->links()}}
                                    </div>
                                </div>
                                <div class="col-12">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.new.index.sidebar')
            </div>
        </div>
    </div>
     @include('layouts.new.index.footer')
</body>