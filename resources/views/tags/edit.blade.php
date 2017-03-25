

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<div class="container">

  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Reset Password</h4>
        </div>
        <div class="modal-body">

  <form class="form" action=""  method="POST">
                  <input type="hidden" name="_method" value="put" />
                   {{ csrf_field() }}


      <!--{{Form::open(array('url' =>'tags/6/', 'method' => 'GET','class'=>'form'))}}-->

          {{Form::label('tag','Edit the Tag:')}}
          {{Form::text('tag',null,['class'=>'form-control tag-name'])}}
          {{Form::submit('Update Tag',['class'=>'btn btn-primary btn-block form-spacing-top'])}}
      
      </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<script>
     function setvalue(x,z)
      { 
        var y=x;
        var w=parseInt(z);
      $(document).ready(function(){
          $('.tag-name').val(y);
      });

      $('.form').attr('action','tags/'+w);
      
    }

</script>
<!--json_encode($tag->name)!!}-->