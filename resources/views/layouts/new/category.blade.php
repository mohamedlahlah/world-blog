@include('layouts.new.index.header')

<body>
@include('layouts.new.index.navbar')

              
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url({{asset('frontend/img/blog-img/bg4.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        
                        @include('layouts.new.index.alert')
                        <!-- Catagory -->
                            {{-- @foreach($posts as $post)
                            <div class="post-cta"><a href="#">{{$post->category->title}}</a></div>
                        @endforeach --}}
                        {{-- <h3>You search for : {{request('term')}}</h3> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            

            <div class="world-latest-articles">
            <div class="row">
                <!-- ============= Post Content Area ============= -->
                  
                      
                    <div class="col-12 col-lg-8 body-article-latest">
                      @if($posts->isEmpty())
                            <div class="alert alert-warning">
                            <p>Nothing to show in 
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
                        @foreach($posts as $post)
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{asset('img').'/'.$post->image}}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="{{ route('frontendblog.show', $post->slug) }}" class="headline">
                                    <h5>{{$post->title}}</h5>
                                </a>
                                {{-- brief of article --}}
                                 <p>{!!$post->excerpt_html!!}</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="{{route('auther',$post->auther->slug)}}" class="post-author">{{$post->auther->name}}</a> on {{$post->date}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

@endif
        
            </div> 

           @include('layouts.new.index.sidebar')
           
            <div class="row col-8 categories-appends">
               {{$posts->appends(request()->only(['term', 'month', 'year']))->links()}}
            </div>

            
           
            </div>
        </div>
    </div>
@include('layouts.new.index.footer')