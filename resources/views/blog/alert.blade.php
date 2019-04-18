 @if(!$posts->count())
         <div class="alert alert-Wearing">
            <p>Nothing to show in Category : <strong>{{$categoryName}}</strong></p>

        </div> 
@else
@if(isset($categoryName))
        <div class="alert alert-info">
            <p>Category : <strong>{{$categoryName}}</strong> </p>
        </div>
@endif
@if(isset($tagName))
        <div class="alert alert-info">
            <p>tagged : <strong>{{$tagName}}</strong> </p>
        </div>
@endif


@if(isset($autherName))
        <div class="alert alert-info">
            <p>Auther : <strong>{{$autherName}}</strong> </p>
        </div>
        @endif
        @if($term=request('term'))
        <div class="alert alert-info">
            <p>Auther : <strong>{{$term}}</strong> </p>
        </div>
        @endif
        @endif