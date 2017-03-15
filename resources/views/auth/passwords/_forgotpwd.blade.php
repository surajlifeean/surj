
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

          @if(session('status'))
           <div class="alert alert-success">
            {{ session('status') }}

           </div>
           @endif

          {!!Form::open(['url'=>'password/email', 'method'=>"POST"])!!}

          {{Form::label('email','Enter Your Email Address:')}}
          {{Form::email('email',null,['class'=>'form-control'])}}
          {{Form::submit('Send Password Reset Link',['class'=>'btn btn-primary btn-block form-spacing-top'])}}

          {!!Form::close()!!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

