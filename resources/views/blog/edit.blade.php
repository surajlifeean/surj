

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Edit Comment</h4>
        </div>
        <div class="modal-body">

 {!! Form::open(['route'=>['comments.update'], 'method'=>'POST'])!!}



      <!--{{Form::open(array('url' =>'tags/6/', 'method' => 'GET','class'=>'form'))}}-->

           <input class="comment_id" type="hidden" name="comment_id" value="">

            <input class="slug" type="hidden" name="slug" value="">

          {{Form::label('comment','Edit the Comment:')}}
          {{Form::textarea('comment',null,['class'=>'form-control tag-name'])}}
          {{Form::submit('Update Comment',['class'=>'btn btn-primary btn-block form-spacing-top'])}}
      

          {!!Form::close()!!}


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<script>
     function setvalue(id,slug,comment)
      { 
        var com=comment;
        var slu=slug;
        var i=id;
      $(document).ready(function(){
          $('.tag-name').val(com);
      });

      $('.form').attr('action','commentsupdate');

       $('.comment_id').attr('value',i);

      $('.slug').attr('value',slu);
  
    }

</script>
<!--json_encode($tag->name)!!}-->