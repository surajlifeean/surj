@extends('main')

@section('title','|Blog')

@section('content')



<div class="row">
<div class="col-md-8 col-md-offset-2">

<h1>
	BlogS
</h1>

</div>
</div>

@foreach($posts as $post)
<div class="row">
	<div class="col-md-8 col-md-offset-2">
    <hr>
	<h2>{{ $post->title}}</h2>


	<h5 class="green"><b>Posted By:{{$post->name}}</b><br>Published on:{{ date('M j,Y', strtotime($post->created_at)) }} <br><i>Category:{{$post->category->name}}</i></h5>

	<p class="blogbody animated bounceInLeft">
	{!!substr($post->body,0,250)!!}  {{strlen($post->body)>250?"...":""}}
	</p>

	<a href="{{route('blog.single', $post->slug)}}">Read More</a>


	</div>

</div>
@endforeach

<div class="row">
<div class="col-md-12">
<div class="text-center">
{!!$posts->links()!!}

</div>
</div>
</div>

<script>
  $(function(){
  	     $('.blogbody').hide();
    
         $('.green').on('mouseover',function(){
             $('.blogbody').show();
         });
  });
</script>
@endsection
