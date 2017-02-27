@extends('main')
@section('content')

<div class="row">
 <div class="col-md-8 col-md-offset-2">
   <h1> create new post</h1>
    {!! Form::open(['route' => 'posts.store']) !!}
    {{ Form::label('title','Title:')}}
    {{ Form::text('title',null,array('class'=>'form-control'))}}

    {{ Form::label('body',"Post Body:")}}
    {{ Form::textarea('body',null,array('class'=>'form-control'))}}


    {{ Form::submit('create post',null,array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

    
    
{!! Form::close() !!}
@endsection