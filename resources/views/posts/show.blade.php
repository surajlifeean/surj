@extends('main')

@section('title','|View Post')

@section('content')

@include('partials._kindofnav')


 <div class="row">
	<div class="col-md-8">

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
                 {!! Html::LinkRoute('posts.edit','Edit Post',array($post->id),array('class'=>"btn btn-primary btn-block"))!!}
            
                  </div>
                  <div class="col-sm-6">
                  {!! Html::LinkRoute('posts.destroy','Delete Post',array($post->id),array('class'=>"btn btn-primary btn-block"))!!}
                  </div>

		</div>
	</div>

  </div>

@endsection