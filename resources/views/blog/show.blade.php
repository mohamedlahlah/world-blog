@extends('layouts.frontend.main')

@section('content')
    <div class="container">
       {{-- <div class="row"> --}}
         <div class="col-md-8">
                <article class="post-item post-detail">
                    <div class="post-item-image">
                      {{-- @if(is_null($post->image)) --}}

                            <img src="{{asset('img').'/'.$post->image}}" alt="{{$post->title}}">
                        {{-- @endif --}}
                    </div>

                    <div class="post-item-body">
                        <div class="padding-10">
                            <h1>{{$post->title}}</h1>

                            <div class="post-meta no-border">
                                <ul class="post-meta-group">
                                    <li><i class="fa fa-user"></i><a href="{{route('auther',$post->auther->slug)}}"> {{$post->auther->name}}</a></li>
                                    <li><i class="fa fa-clock-o"></i><time> {{$post->date}}</time></li>
                                    <li><i class="fa fa-folder"></i><a href="{{route('category',$post->category->slug)}}">{{$post->category->title}}</a></li>
                                    <li><i class="fa fa-tag"></i>{!!$post->tags_html !!}</li>
                                    <li><i class="fa fa-comments"></i><a href="#post-comments">{{$post->commentsNumber('comment')}}</a></li>

                                </ul>
                            </div>
            {!!$post->Bodyhtml!!}
                        </div>
                    </div>
                </article>
 
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
 @include('blog.comment')
        {{--comment here --}}
            </div>
        @include('layouts.frontend.sidebar')
        </div>
    {{-- </div> --}}
@endsection