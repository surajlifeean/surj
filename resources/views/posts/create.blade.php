@extends('main')

@section('title','|Create')

@section('stylesheets')

		{!!Html::style('css/parsley.css')!!}

@endsection

@section('content')

<div class="row">
 <div class="col-md-8 col-md-offset-2">
   <h1> create new post</h1>
    {!! Form::open(['route' => 'posts.store','data-parsley-validate'=>'']) !!}


    {{ Form::label('title','Title:')}}

    {{ Form::text('title',null,array('class'=>'form-control','required'=>''))}}

    {{ Form::label('body',"Post Body:")}}
    {{ Form::textarea('body',null,array('class'=>'form-control','required'=>''))}}


    {{ Form::submit('create post',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

    
{!! Form::close() !!}
  </div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 <script>
 		$(function(){
 			$('#bs-example-navbar-collapse-1').html('');
 		});


 </script>

@endsection

@section('scripts')
	{!! Html::script('js/parsley.min.js')!!}
@endsection

