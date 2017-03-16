 <!-- Modal HTML -->


 <script type="text/javascript">
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal2").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal2").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});
</script>

    <div id="myModal2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">Let's Begin! 
                    </h4>
                </div>
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="560" height="315" src="https://www.youtube.com/embed/jSiMLRRFzsE" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>