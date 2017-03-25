@extends('main')

@section('title','|Manage Tags')

@include('tags.edit')

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
						<a href="{{route('tags.show',$tag->id)}}">{{$tag->name}}</a>
					</th>
					
					<th>


                    {!! Form::open(['route'=>['tags.destroy',$tag->id], 'method'=>'DELETE'])!!}

			 			{{Form::submit('Delete',['class'=>'btn btn-default btn-sm'])}}


					{!!Form::close()!!}
  			      
					</th>
					<th>
						<button type="button" class="btn btn-default btn-sm " data-toggle="modal" data-target="#myModal2"  onclick='setvalue({!!json_encode($tag->name)!!},{!!json_encode($tag->id)!!})'>Edit</a>
						

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