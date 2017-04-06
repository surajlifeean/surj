
@extends('main')

@section('title', '|Edit Post')

@section('stylesheets')

    {!!Html::style('css/parsley.css')!!}

      {!!Html::style('css/select2.css')!!}

      
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"> </script>

    <script>tinymce.init({
     selector:'textarea' ,
     plugins: "link",
     menubar:false
     
     

     });
     </script>

@endsection



@section('content')

@include('partials._kindofnav')


 <link rel="stylesheet" href="css/styles.css">

 <div class="row">
    {!! Form::model($post,['route'=>['posts.update',$post->id],'method'=>'PUT'])!!}

  	<div class="col-md-8">

  	{{Form::label('title', 'Title:')}}
    
  	{{Form::text('title', null, ["class"=>'form-control input-lg'])}}


    {{Form::label('slug', 'Slug:')}}
    
    {{Form::text('slug', null, ["class"=>'form-control','required'=>'','minlength'=>'5', 'maxlength'=>'255'])}}


    {{Form::label('category_id','Category:')}}
    <select class="form-control" name="category_id">
    
       @foreach($categories as $category)
          <option value={{$category->id}}>{{$category->name}}</option>
          
    @endforeach
    </select>



    {{Form::label('tags','Tags:')}}



     <select class="form-control select2-multi" name="tags[]" multiple="multiple">
    
    @foreach($tags as $tag=>$tag_val)

                <?php
                  echo "<option value='".$tag."'>".$tag_val."</option>";
                  ?>
  
    @endforeach
    </select>
   
  

  

  	{{ Form::label('body', 'Body:',['class'=>'form-spacing-top'])
    }}


     {{Form::textarea('body', null, ['class'=>'form-control'])}}

     
	  </div>
  
	<div class="col-md-4">
		<div class="well">
			
      <dl class="dl-horizontal">
               <dt>created At:</dt>
                <dd>{{date('jS M, Y', strtotime($post->created_at))}}
                </dd>
      </dl>

            <dl class="dl-horizontal">
               <dt>last Updated:</dt>
                <dd>{{date('jS M, Y', strtotime($post->updated_at))}}</dd>
            </dl>

            <div class="row">
                 <div class="col-sm-6">
                 {!! Html::LinkRoute('posts.show','Cancel',array($post->id),array('class'=>"btn btn-danger btn-block"))!!}
                 </div>

                  <div class="col-sm-6">
                  {{Form::submit('Save Changes',array('class'=>"btn btn-success btn-block"))}}
                  </div>

		        </div>
	  </div>

  </div>

  {!!Form::close()!!}
</div>


@stop


@section('scripts')
  {!! Html::script('js/parsley.min.js')!!}
  {!! Html::script('js/select2.js')!!}    

<script type="text/javascript">
$(document).ready(function() {
  $(".select2-multi").select2();
});

$('.select2-multi').val({!!json_encode($post->tags()->getRelatedIds())!!}).trigger("change");



</script>

@endsection