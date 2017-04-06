@extends('main')

@section('title','|View Post')

@section('content')

@include('partials._kindofnav')


 <div class="row">
  	<div class="col-md-8">

    	<h1>{{$post->title}}</h1>


		<p class="lead">{!!$post->body!!}</p>
      <div class="tags">
      
        @foreach($post->tags as $tag)
          <span class="label label-default">
          {{$tag->name}}</span>
        @endforeach
      </div>

	  </div>
  
	<div class="col-md-4">
		<div class="well">
      



      <dl class="dl-horizontal">

              <label> Url:</label>
              <p><a href="{{route('blog.single',$post->slug)}}">{{url('blog/'.$post->slug)}} 
              </a>
              </p>
      </dl>



            <dl class="dl-horizontal">

              <label> Category:</label>
              <p>
                 {{$post->category->name}}
              </p>
           </dl>


      <dl class="dl-horizontal">

               <label>created At:</label>
                  <p>{{date('jS M, Y', strtotime($post->created_at))}}
                  </p>
              
              
      </dl>

            <dl class="dl-horizontal">
               <label>last Updated:</label>
                <p>{{date('jS M, Y',strtotime($post->updated_at))}}</p>
            </dl>

            <div class="row">
                 <div class="col-sm-6">
                 {!! Html::LinkRoute('posts.edit','Edit Post',array($post->id),array('class'=>"btn btn-primary btn-block form-spacing-top"))!!}
                 </div>

                  <div class="col-sm-6">
                        {!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}


                           {!!Form::submit('Delete',array('class'=> 'btn btn-danger btn-block form-spacing-top'))!!}

                    {!!Form::close()!!}
                  </div>

		        </div>
            <div class="row">
                <div class="col-sm-12">
                      {!! Html::LinkRoute('posts.index','View All Post','',array('class'=>"btn btn-default btn-block form-spacing-top"))!!}

                </div>
            </div>
	  </div>

  </div>
</div>

@endsection