<!-- Trigger the modal with a button 
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sure?</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this comment?.</p>
      </div>
      <div class="modal-footer">

 
<!--
<form class="form" action="comment" method="POST">
                   {{ csrf_field() }}

<input type="hidden" name='slug' value={{$post->slug}}></input> 
<button type="submit">delete</button> 

</form>
-->

 {!! Form::open(['route'=>['comments.destroy'], 'method'=>'POST'])!!}


            <input class="comment_id" type="hidden" name="comment_id" value="">

            <input class="slug" type="hidden" name="slug" value="">

            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}

             <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>

          {!!Form::close()!!}



       

      </div>
    </div>

  </div>
</div>
<script>
     function setvalue(x,z)
      { 
        var y=parseInt(x);
        
        var y=z;

      $('.comment_id').attr('value',x);

      $('.slug').attr('value',y);

      



     // $('.check').hide();
      }

</script>