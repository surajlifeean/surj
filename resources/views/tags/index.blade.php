@extends('main')

@section('title','|Manage Tags')

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<table class="table">
			<h1> My Tags</h1>
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
				</tr>
			</thead>


            @foreach($tags as $tag)

			<tbody>
				<tr>
					<th> {{$tag->id}} </th>
					<th>
						{{$tag->name}}
					</th>
					
					<th>


                    {!! Form::open(['route'=>['tags.destroy',$tag->id], 'method'=>'DELETE'])!!}

			 			{{Form::submit('Delete',['class'=>'btn btn-default btn-sm'])}}


					{!!Form::close()!!}
  			      
					</th>
					<th>
						<a href="{{route('tags.edit',$tag->id)}}" class="btn btn-default btn-sm">Edit</a>
					</th>
				</tr>
			</tbody>

			@endforeach





			</table>
		</div><!-- end of col-md-8 -->

		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route'=>'tags.store', 'method'=>'POST'])!!}
				<h2>New Tags</h2>
					{{ Form::label('name',' Name:')}}
					{{Form::text('name',null,['class'=>'form-control'])}}
					{{Form::submit('Add Tags',['class'=>'btn btn-primary form-spacing-top'])}}
					

					{!!Form::close()!!}
			</div>
		</div>
	</div>

@endsection