@extends('main')

@section('title','|Homepage')
@section('content')
    <div class="row">
       <div class="col-md-12">
         <div class="jumbotron">
            
              <h1 class="animated infinite bounce">Techie'sfoo</h1>
            
              
              <p><a class="btn btn-primary btn-lg form-spacing-top" href="posts/create" role="button">Post Content</a></p>
            </div>
        </div>
    </div>
    <div class="row">

         @foreach($posts as $post)
            
    
       <div class="col-md-8">
         <div class="post">
           <h1 id="process">{{$post->title}}  </h1>
             <p>{{substr($post->body,0,200)}}{{strlen($post->body)>200? "...":""}}</p>
              <p><a class="btn btn-primary" href="#" role="button">read more</a></p>
         </div>
       </div>
       <hr>
       @endforeach
      
     <!-- <div class="col-md-3 col-md-offset-1">
         <div class="post">
           <h1>Notification</h1>
             <p>.............</p>
              <p><a class="btn btn-primary" href="#" role="button">more</a></p>
         </div>
       </div> -->
             
 
    </div>
    @endsection
