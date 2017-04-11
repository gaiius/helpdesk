			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Kondisi</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Tambah Data Kondisi</a></div>
					<div class="panel-body">
						
					<div class="col-md-6">
					<form method="post" action="<?php echo base_url();?><?php echo $url;?>">

					<input type="hidden" class="form-control" name="id_kondisi" value="<?php echo $id_kondisi;?>">

					<div class="form-group">
						<label>Nama Kondisi</label>
						<input class="form-control" name="nama_kondisi" value="<?php echo $nama_kondisi;?>" placeholder="Nama Kondisi" required>
					</div>

					<div class="form-group">
						<label>Waktu Respon (Hari)</label>
						<input class="form-control" name="waktu_respon" value="<?php echo $waktu_respon;?>" placeholder="Waktu Respon" required>
					</div>

					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url();?>kondisi/kondisi_list"  class="btn btn-default">Batal</a>
				    </div>

				     </form>


					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
