			
<script language="javascript" type="text/javascript">
    
	$(document).ready(function() {

		$("#id_teknisi").change(function(){
	 		// Put an animated GIF image insight of content	 		
		
			var data = {id_teknisi:$("#id_teknisi").val()};
			$.ajax({
					type: "POST",
					url : "<?php echo base_url().'select/select_view_job'?>",				
					data: data,
					success: function(msg){
						$('#div-order').html(msg);
					}
			});
		});   

	});

</script>


<div class="row">
<ol class="breadcrumb">
<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
<li class="active">Pembagian Tugas</li>
</ol>
</div><!--/.row-->

<br>


<div class="row">

<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="<?php echo base_url();?>departemen/add" style="text-decoration:none">Pembagian Tugas</a></div>
<div class="panel-body">

<div class="list-group">
<a href="#" class="list-group-item active">
<?php echo $id_ticket;?>
</a>
<a href="#" class="list-group-item"><span class="glyphicon glyphicon-calendar"></span> &nbsp;<?php echo $tanggal;?></a>
<a href="#" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> &nbsp;<?php echo $nama_kategori;?></a>
<a href="#" class="list-group-item"><span class="glyphicon glyphicon-briefcase"></span> &nbsp;<?php echo $nama_sub_kategori;?></a>
<a href="#" class="list-group-item"><span class="glyphicon glyphicon-user"></span> &nbsp;<?php echo $reported;?></a>
</div>

<div class="row">

	<div class="col-lg-3">

<form method="post" action="<?php echo base_url();?><?php echo $url;?>">

	<input type="hidden" class="form-control" name="id_ticket" value="<?php echo $id_ticket;?>">

		<div class="form-group">
			<label>Nama Teknisi</label>
			<?php echo form_dropdown('id_teknisi',$dd_teknisi, $id_teknisi, 'id="id_teknisi" class="form-control"');?>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>

	</div>

	<div class="col-lg-9">

		<div id="div-order">

			

		</div>
		

	</div>

</div>

</form>


</div>
</div>
</div>

</div><!--/.row-->	


