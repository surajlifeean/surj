@extends('main')

@section('title', 'ALL Posts')

@section('content')
<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>

     <div class="col-md-2">
		<a href="{{ route('posts.create')}}"
		class="btn btn-lg btn-block btn-primary">Create new post</a>
	</div>
</div>
<table class="table table-striped">
  	<div class="col-md-12">
  	<thead>
  		<th>#</th>
  		<th>Title</th>
  		<th>Body</th>
  		<th>Posted at</th>
  	</thead>

  	<tbody>

  	@foreach($posts as $post)
  		<tr>
  			<th>{{$post->id}}</th>
  			<td>{{$post->title}}</td>
  			<td>{{$post->body}}</td>
  			<td>{{$post->created_at}}</td>
  			<td><a href="#" class="btn btn-default">View</a>
  			<a href="#" class="btn btn-default">Edit</a>
  			</td>
  			
  		</tr>
  	@endforeach

  	</tbody>
  	</div>
</table>
@stop