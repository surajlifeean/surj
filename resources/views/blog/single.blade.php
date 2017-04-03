@extends('main')

@section('title',"|$post->title")

@include('blog.delete')

@include('blog.edit')



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
				  		<button class="btn btn-default">      Comments 
				         <span class="badge">{{$count}}</span>
				  		</button>
				    </div>
				</div>

 				<div class="row comments">
 						<div class="col-md-9">

				     {!!Form::open(['route'=>['comments.store',$post->id],'method'=>'POST'])!!}


				     <input type="hidden" name='slug' value={{$post->slug}}></input>


				     	<br>
 						@foreach($comments as $comment)
 							<div class="author-info row">
 								<div class="col-md-3">
 							  <img src="{{'https://www.gravatar.com/avatar/'.md5(strtolower(trim($comment->email)))."?s=50&d=wavatar"}}" class="author-image">

 							  	</div>
 							  	<div class="col-md-6">
 							  
  							 	<b style="color:blue">
  							 	{{$comment->name}} 
  							 		says:</b>
 							 	{{$comment->comment}}
 							 	</div>
 							 	<div class="col-md-3 author-time">
 							 		on {{date('jS M, Y', strtotime($post->created_at))}}
 							 	
 							  @if(Auth::check())
 							  		@if(Auth::user()->email == $comment->email)


 							 	<a href="#" class="btn" data-toggle="modal" data-target="#myModal2" onclick='setvalue({!!json_encode($comment->id)!!},{!!json_encode($post->slug)!!},{!!json_encode($comment->comment)!!})'> <span class="glyphicon glyphicon-pencil" data-toggle="tooltip" title="Edit!"> </span> </a>


 							 			<a href="" class="btn" data-toggle="modal" data-target="#myModal" onclick='setvalue({!!json_encode($comment->id)!!},{!!json_encode($post->slug)!!})'> <span class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete!" > </span> </a>

 							 	    @endif


 							 @endif

 							 	</div>

 							 </div>
                            
 

 						@endforeach
 						
				     
				    @if(Auth::check())
	
				    <div class="row">
				    	
                    	<div class="col-xs-8 col-md-10">
				     	

				     <i>{{ ucwords(Auth::user()->name)}} has to say</i>

				     {{Form::text('comment',null,['class'=>'form-control','style'=>'height:20px','style'=>'height:30px','placeholder'=>'write your comment','id'=>'comment'])}}

				        </div>

				        <div class="col-xs-4 col-md-2">
				
					   
				     {{Form::submit('post',array('class'=>'btn','style'=>'margin-top:20px','id'=>'post'))}}

				     	
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

		

    $('[data-toggle="tooltip"]').tooltip();   


	});
</script>

@endsection
