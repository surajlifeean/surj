@extends('main')

@section('title','|Create')

@section('stylesheets')

        {!!Html::style('css/parsley.css')!!}

    {!!Html::style('css/select2.css')!!}

@endsection

@section('content')

<div class="row">
 <div class="col-md-8 col-md-offset-2">
   <h1>Add corporate details</h1>
	
	 {!! Form::open(['route' => 'corporates.store','data-parsley-validate'=>'']) !!}
     {!! csrf_field() !!}



    {{ Form::label('company','Name of the company:')}}

    {{ Form::text('company',null,array('class'=>'form-control','required'=>''))}}


    {{Form::label('designation','Designation:')}}

    {{Form::text('designation',null,array('class'=>'form-control','minlength'=>'5', 'maxlength'=>'255'))}}


    {{Form::label('qualification','Highest degree of qualification:')}}

    {{Form::text('qualification',null,array('class'=>'form-control'))}}

    {{ Form::label('college',"Name of the college:",array('class'=>'form-spacing-top'))}}

    {{ Form::text('college',null,array('class'=>'form-control','required'=>''))}}


    {{ Form::submit('Submit',array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px'))}}

    
{!! Form::close() !!}

 </div>
 </div>
@include('partials._kindofnav')

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js')!!}
  {!!Html::script('js/select2.js')!!}

@endsection

