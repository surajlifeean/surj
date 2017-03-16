@extends('main')

@section('title','|Homepage')
@section('content')
    <div class="row">
     <div class="col-md-12 ">

         <div class="jumbotron darkslateblue bs-example">
            
              <h1 class="animated infinite bounce" >Techie'sfoo</h1>
            
              
              <p>
              <a class="btn btn-primary btn-lg form-spacing-top" href="#myModal2" data-toggle="modal" role="button">How To Start?</a>
              </p>
              @include('partials._demovideo')

        </div>
      </div>
    </div>
    <div class="row">

         @foreach($posts as $post)
            
    
       <div class="col-md-8">
         <div class="post">
           <h1 id="process">{{ucwords($post->title)}}  </h1>
             <p>{{substr($post->body,0,200)}}{{strlen($post->body)>200? "...":""}}</p>
              <p><a class="btn btn-primary" href="{{url('blog/'.$post->slug)}}" role="button">read more</a></p>
              <hr>
         </div>
       </div>
       
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
