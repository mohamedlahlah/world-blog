
@if(isset($categoryName))
        <div class="post-cta">
            <p><h3> Category </h3> : <strong>  <a href="#">{{$categoryName}}</a></strong> </p>
        </div>
@endif
@if(isset($tagName))
        <div class="post-cta">
            <p style="font-size: 1.4em; color:#fff; ">Tagged : <strong>{{$tagName}}</strong> </p>
        </div>
@endif


@if(isset($autherName))
        <div class="post-cta">
            <p style="font-size: 1.4em; color:#fff; "> Author  : <strong><a href="#">{{$autherName}}</a></strong> </p>
        </div>
@endif

@if($term=request('term'))
        <div class="post-cta">
            <p>Auther : <strong>{{$term}}</strong> </p>
        </div>
@endif
       