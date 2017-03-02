@extends('main')

@section('title','|View Post')

@section('content')

 <script>
 		$(function(){
 			$('#bs-example-navbar-collapse-1').html('');
 		});


 </script>
 <div class="row">
	<div class="col-md-8"

    	<h1>{{$post->title}}</h1>

		<p class="lead"> {{ $post->body}}</p>
	</div>
	<div class="col-md-4">
		<div class="well">
			<dl class="dl-horizontal">
               <dt>created At:</dt>
                <dd>{{date('jS M, Y', strtotime($post->created_at))}}
                </dd>
            </dl>

            <dl class="dl-horizontal">
               <dt>last Updated:</dt>
                <dd>{{date('jS M, Y',strtotime($post->updated_at))}}</dd>
            </dl>

            <div class="row">
                 <div class="col-sm-6">
                  <a href="#" class="btn btn-primary btn-block">Edit</a>
                  </div>
                  <div class="col-sm-6">
                  <a href="#" class="btn btn-danger btn-block">Delete</a>
                  </div>

		</div>
	</div>

  </div>

@endsection