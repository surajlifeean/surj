@extends('main')

@section('title',"|$post->title")

@section('content')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
				<h1>{{$post->title}}
				</h1>
				<p>{{$post->body}}
				</p>
                 <hr>
				<p>Posted in:{{ $post->category->name }}
				</p>
				<div class="row">
					<div class="col-md-2">
				  		<button class="btn btn-default"> Comments 
				  		</button>
				    </div>
				</div>

 					<div class="row comments">
 						<div class="col-md-6">

				     {!!Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])!!}


				     	<br>
 						@foreach($comments as $comment)
 							
 							    <i style="color:blue">{{$comment->name}} says:</i><br>{{$comment->comment}}
                                
 							    <hr>
 							
 						@endforeach
				     
				    @if(Auth::check())
	
				    <div class="row">
				    	
                    	<div class="col-md-8"
				     	

				     <input type="hidden" name='slug' value={{$post->slug}}>
				     <i>{{ ucwords(Auth::user()->name)}} has to say</i>

				     {{Form::textarea('comment',null,['class'=>'form-control','style'=>'height:50px','placeholder'=>'write your comment'])}}

				     </div>

				     <div class="col-sm-3">
				
					   
				     {{ Form::submit('post',array('class'=>'btn btn-primary btn-block','style'=>'margin-top:20px'))}}
				     	</div>
				     </div>

				     @else
				     <a href="/auth/login">Login</a> or <a href="/auth/register">Register</a> to comment!
				     @endif
				     {!!Form::close()!!}
				     </div>
				</div>

		</div>
	</div>
<script type="text/javascript">

	$(function(){
		$(".comments").hide();
		$("button").click(function(){
			$(".comments").toggle();
		});
	});
</script>

@endsection
