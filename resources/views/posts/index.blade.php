@extends('main')

@section('title', 'ALL Posts')

@section('content')

@include('partials._messages')

@include('partials._kindofnav')

<div class="row">
	<div class="col-md-10">
		<h1>All Posts</h1>
	</div>

     <div class="col-md-3">
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
  			<td>
  			{{substr($post->body,0,50)}} 
  			{{(strlen($post->body))>50? '...':''}}
  			</td>
  			<td>{{date('jS F,Y', strtotime($post->created_at))}}</td>
  			<td><a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm">View</a>
  			<a href="{{route('posts.edit',$post->id)}}" class="btn btn-default btn-sm">Edit</a>
  			</td>
  			
  		</tr>
  	@endforeach

  	</tbody>
  	</div>
</table>
@stop