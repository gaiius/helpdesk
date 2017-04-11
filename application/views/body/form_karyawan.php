<script language="javascript" type="text/javascript">
    
	$(document).ready(function() {

		$("#id_departemen").change(function(){
	 		// Put an animated GIF image insight of content
		
			var data = {id_departemen:$("#id_departemen").val()};
			$.ajax({
					type: "POST",
					url : "<?php echo base_url().'select/select_bagian_departemen'?>",				
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
				<li class="active">Karyawan</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Tambah Data Karyawan</a></div>
					<div class="panel-body">
						
					<div class="col-md-6">
					<form method="post" action="<?php echo base_url();?><?php echo $url;?>">

					<input type="hidden" class="form-control" name="nik" value="<?php echo $nik;?>">

					<div class="form-group">
						<label>Nama</label>
						<input class="form-control" name="nama" placeholder="Nama" value="<?php echo $nama;?>" required>
					</div>

					<div class="form-group">
						<label>Jenis Kelamin</label>
						<?php echo form_dropdown('id_jk',$dd_jk, $id_jk, ' id="id_jk" required class="form-control"');?>
					</div>

					<div class="form-group">
						<label>Alamat</label>
						<textarea name="alamat" class="form-control" required><?php echo $alamat;?></textarea>
					</div>

					<div class="form-group">
						<label>Departemen</label>
						<?php echo form_dropdown('id_departemen',$dd_departemen, $id_departemen, ' id="id_departemen" required class="form-control"');?>
					</div>

					<div id="div-order">

						<?php if($flag=="edit")
						{

	                     echo form_dropdown('id_bagian_departemen',$dd_bagian_departemen, $id_bagian_departemen, 'required class="form-control"');

						}else{}
					?>

					</div>

					<div class="form-group">
						<label>Jabatan</label>
						<?php echo form_dropdown('id_jabatan',$dd_jabatan, $id_jabatan, 'required class="form-control"');?>
					</div>

					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url();?>karyawan/karyawan_list"  class="btn btn-default">Batal</a>
				    </div>

				     </form>


					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
