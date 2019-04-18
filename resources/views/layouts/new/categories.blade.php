@include('layouts.new.index.header')

<body>
@include('layouts.new.index.navbar')

              
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-600 bg-img background-overlay" style="background-image: url({{asset('frontend/img/blog-img/bg4.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                     
                           
                            <table class="containertable">
                            <thead>
                                <tr>
                                    <th><h1 >Category</h1></th>
                                    <th><h1>Number of articles</h1></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($category1 as $category)
                             
                                <tr>
                                <td><a class="name_of_category" href="{{route('category',$category->slug)}}">{{$category->title}}</a></td>
                                <td>{{$category->posts->count()}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                            </table>
                <br><br>


                <div class="justify-content-center">
                    <h3 style="padding-bottom: 5px;" class="text-center" >Tags</h3>
                </div>
                    
                   
                             <div class="col-12 justify-content-center">
                            @foreach($tag as $tags)
                                
                                <a class="name_of_tags" href="{{route('tag',$tags->slug)}}">  {{  $tags->name  }}  </a>
                                
                            @endforeach
</div>
                            
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

   
@include('layouts.new.index.footer')