@extends('layouts.frontend.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        @include('blog.alert')
        @foreach($posts as $post)
        <article class="post-item">
            <div class="post-item-image">
                <a href="{{route('blog',$post->slug)}}">
                    <img src="{{asset('img').'/'.$post->image}}" alt="">
                </a>
            </div>
            <div class="post-item-body">
                <div class="padding-10">
                    <h2><a href="{{ url('blog',[$post->slug])}}">{{$post->title}}</a></h2>
                    {!!$post->excerpt_html!!}
                </div>

                <div class="post-meta padding-10 clearfix">
                    <div class="pull-left">
                        <ul class="post-meta-group">
                            <li><i class="fa fa-user"></i><a href="{{route('auther',$post->auther->slug)}}"> {{$post->auther->name}}</a></li>
                            <li><i class="fa fa-clock-o"></i><time> {{$post->date}}</time></li>
                            <li><i class="fa fa-folder"></i><a href="{{route('category',$post->category->slug)}}">{{$post->category->title}}</a></li>
                            <li><i class="fa fa-tag"></i>
                            {!! $post->tags_html !!}
                            </li>
                            <li><i class="fa fa-comments"></i><a href="{{ route('blog.show', $post->slug) }}#post-comments">{{ $post->commentsNumber() }}</a></li>

                        </ul>
                    </div>
                    <div class="pull-right">
                        <a href="{{url('blog',[$post->slug]) }}">Continue Reading &raquo;</a>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
        
        <nav>
           {{$posts->appends(request()->only(['term', 'month', 'year']))->links()}}
       </nav>
   </div>

   @include('layouts.frontend.sidebar')
</div>
</div>
@endsection