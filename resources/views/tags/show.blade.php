@extends('main')

@section('title',"|$tag->name Tag")

@section('content')
<div class="row">
	<div class="col-md-8">
			<h1> {{$tag->name}} Tag <small>{{$tag->posts()->count()}} Posts</small></h1>
	</div>
	<div class="col-md-4">
			 <a href="" class="btn btn-md btn-primary pull-right" style="margin-top: 20px;">Edit</a>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<table class="table">
		 	<thead>
		 	<tr>
		 		<th>#</th>
		 		<th>Title</th>
		 		<th>Tags</th>
		 		<th>Post</th>
		 	</tr>
		 	</thead>
		 	<tbody>
		 		@foreach($tag->posts as $post)
		 	<tr>
		 		 <td>{{$post->id}}</td>
		 		 <td>{{$post->title}}</td>
		 		 <td> 
		 		 @foreach($post->tags as $tag)
		 		 
		 		 		<span class="label label-default" style="margin-right: 1.5px;">{{$tag->name}}
		 		 		</span>
		 		 @endforeach
		 	     </td>
		 	     <td>
		 	     	<a href="{{route('posts.show',$post->id)}}" class="btn btn-default ">view</a>
		 	     </td>
		 	 </tr>
		 	     @endforeach
		 	</tbody>
		</table>
	</div>
</div>

@endsection