 <!-- Modal -->
  <div class="modal fade" id="modKonfirmasi" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-weight:bold"><span class="glyphicon glyphicon-info-sign" style="color:#FFFFFF; font-size:24px"></span>Konfirmasi </h4>
        </div>
        <div class="modal-body">
		   	Anda yakin akan menghapus data dengan ID  : (<span id="mod"></span>) ?
        </div>
        <div class="modal-footer">
		
		  <button type="button" class="btn btn-primary" id="oke">Ya </button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close </button>
        </div>
      </div>
      
    </div>
  </div>
  
<script>
$(document).ready(function(){
$("#oke").click(function(){
  var id = $("#mod").text();

  var data = 'id='+id;
 
  $.ajax({
  url : "<?php echo base_url();?><?php echo $link;?>",
  type: "POST",
  data: data,
  dataType : 'html',
   cache:false,
 success:function(data){
location.reload();
 }
  });

   });
  });
  </script>