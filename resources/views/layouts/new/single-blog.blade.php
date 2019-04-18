@include('layouts.new.index.header')

<body>
@include('layouts.new.index.navbar')

              
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url({{asset('img').'/'.$post->image}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                            {{-- @foreach($posts as $post) --}}
                        @include('layouts.new.index.alert')

                        

                        <h3>{{$post->title}}</h3>
                         {{-- @endforeach --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area ============= -->
                <div class="col-12 col-lg-8">
                    <div class="single-blog-content mb-100">
                        <!-- Post Meta -->
                        {{-- <div class="post-meta">
                            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                        </div> --}}
                        <!-- Post Content -->
                        <div class="post-content">
                            {!!$post->Bodyhtml!!}
                          
                             

                            
                            <!-- Post Meta -->
                            <div class="post-meta second-part ">
                              
                               <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="{{route('auther',$post->auther->slug)}}"> {{$post->auther->name}}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{$post->date}}</time></li>
                                    <li><i class="fa fa-folder"></i><a href="{{route('category',$post->category->slug)}}">{{$post->category->title}}</a></li>
                                    <li><i class="fa fa-tag"></i>{!!$post->tags_html !!}</li>
                                    <li><i class="fa fa-comments"></i><a href="#post-comments">{{$post->commentsNumber('comment')}}</a></li>

                                </ul>
                                
                            </div>
                        </div>
                    </div>

                    {{-- author information --}}
                <article class="post-author padding-10">
                    <div class="media">
                      <div class="media-left">
                        <a href="{{route('auther',$post->auther->slug)}}">
                          <img alt="{{$post->auther->name}}" width=100 src="{{$post->auther->gravatar()}}" class="media-object">
                        </a>
                      </div>
                      <div class="media-body">
                        <h4 class="media-heading"><a href="{{route('auther',$post->auther->slug)}}">{{$post->auther->name}}</a></h4>
                        <div class="post-author-count">
                          <a href="{{route('auther',$post->auther->slug)}}">
                              <i class="fa fa-clone"></i>
                            <?php $postcount=$post->auther->posts()->published()->count(); ?>   

                             {{$postcount}} : {{str_plural('post',$postcount)}} 
                          </a>
                        </div>
                       {!!$post->auther->bio!!}
                      </div>
                    </div>
                </article>
                {{-- End author information --}}


        <div class="row">
                <div class="col-12 col-lg-12">
                    <div class="post-a-comment-area mt-70">
                        <h5>Leave a comment</h5>
                         
                         @if(session('message'))
                         <div class="alert alert-info">
                         {{ session('message') }}
                         </div>
                         @endif
                        <!-- Contact Form -->
                        {!! Form::open(['route' => ['blog.comments', $post->slug]]) !!}
            <div class="form-group required {{ $errors->has('author_name') ? 'has-error' : '' }}">
                <label for="name">Name</label>
                {!! Form::text('author_name', null, ['class' => 'form-control']) !!}
                @if($errors->has('author_name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('author_name') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group required {{ $errors->has('author_email') ? 'has-error' : '' }}">
                <label for="email">Email</label>
                {!! Form::text('author_email', null, ['class' => 'form-control']) !!}
                @if($errors->has('author_email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('author_email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="website">Website</label>
                {!! Form::text('author_url', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group required {{ $errors->has('body') ? 'has-error' : '' }}">
                <label for="comment">Comment</label>
                {!! Form::textarea('body', null, ['row' => 6, 'class' => 'form-control']) !!}
                @if($errors->has('body'))
                    <span class="help-block">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @endif
            </div>
            <div class="clearfix">
                <div class="pull-left">
                    <button type="submit" class="btn btn-lg btn-success">Submit</button>
                </div>
                <div class="pull-right">
                    <p class="text-muted">
                        <span class="required">*</span>
                        <em>Indicates required fields</em>
                    </p>
                </div>
            </div>
        {!! Form::close() !!}
                        {{-- <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your comment</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Post comment</button>
                                </div>

                            </div>
                        </form> --}}
                    </div>
                </div>

                <div class="col-12 col-lg-12 Comment-Area-Start">
                    <!-- Comment Area Start -->
                    <div class="comment_area clearfix mt-70">
                        <ol>
                            @foreach($postComments as $comment)
                            <!-- Single Comment Area -->
                            <li class="single_comment_area">
                                <!-- Comment Content -->
                                <div class="comment-content">
                                    <!-- Comment Meta -->
                                    <div class="comment-meta d-flex align-items-center justify-content-between">
                                        <p><a href="#" class="post-author">{{ $comment->author_name }}</a> on <a href="#" class="post-date">{{ $comment->date }}</a></p>
                                        {{-- <a href="#" class="comment-reply btn world-btn">Reply</a> --}}
                                    </div>
                                    <p>{!! $comment->body_html !!}</p>
                                </div>  
                            </li>
                            @endforeach
                                {{-- <ol class="children">
                                    <li class="single_comment_area">
                                        <!-- Comment Content -->
                                        <div class="comment-content">
                                            <!-- Comment Meta -->
                                            <div class="comment-meta d-flex align-items-center justify-content-between">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                <a href="#" class="comment-reply btn world-btn">Reply</a>
                                            </div>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                        </div>
                                    </li>
                                </ol> --}}
                          
                            
                            
                            
                        </ol>
                    </div>
                </div>
            </div>



                </div>

                @include('layouts.new.index.sidebar')
            </div>

           


            

 {{-- ============== Related Post ============== --}}
          {{--   <div class="row">
                 @foreach($relatedposts as $relatedpost)

                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Single Blog Post -->
                    <div class="single-blog-post">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img src="{{asset('img').'/'.$relatedpost->image}}" alt="">
                            <!-- Catagory -->
                            <div class="post-cta"><a href="#">{{$relatedpost->category->title}}</a></div>
                        </div>
                        <!-- Post Content -->
                        <div class="post-content">
                            <a href="#" class="headline">
                                <h5>{{$relatedpost->title}}</h5>
                            </a>
                            <p>{!!$relatedpost->excerpt_html!!}...</p>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <p><a href="#" class="post-author">{{$relatedpost->auther->name}}</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach


                
            </div> --}}
            {{-- ============== End  Related Post ============== --}}


        </div>
    </div>
@include('layouts.new.index.footer')