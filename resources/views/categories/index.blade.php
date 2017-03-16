@extends('main')

@section('title','|All Categories')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<table class="table">
			<h1> My Categories</h1>
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>
            @foreach($categories as $category)
			<tbody>
				<tr>
					<th> {{$category->id}} </th>
					<th>
						{{$category->name}}
					</th>
					
				</tr>
			</tbody>
			@endforeach

			</table>
		</div><!-- end of col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route'=>'categories.store', 'method'=>'POST'])!!}
				<h2>New Category</h2>
					{{ Form::label('name',' Name:')}}
					{{Form::text('name',null,['class'=>'form-control'])}}
					{{Form::submit('Add Category',['class'=>'btn btn-primary form-spacing-top'])}}
					
					{!!Form::close()!!}
			</div>
		</div>
	</div>

@endsection