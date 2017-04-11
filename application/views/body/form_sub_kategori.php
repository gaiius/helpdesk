			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Sub Kategori</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Tambah Data Sub Kategori</a></div>
					<div class="panel-body">
						
					<div class="col-md-6">
					<form method="post" action="<?php echo base_url();?><?php echo $url;?>">

					<input type="hidden" class="form-control" name="id_sub_kategori" value="<?php echo $id_sub_kategori;?>">

					<div class="form-group">
						<label>Nama Sub Kategori</label>
						<input class="form-control" name="nama_sub_kategori" value="<?php echo $nama_sub_kategori;?>" placeholder="Nama Sub Kategori" required>
					</div>

					<div class="form-group">
						<label>Nama Kategori</label>
						<?php echo form_dropdown('id_kategori',$dd_kategori, $id_kategori, 'class="form-control"');?>
					</div>

					<button type="submit" class="btn btn-primary">Simpan</button>
					<a href="<?php echo base_url();?>sub_kategori/sub_kategori_list"  class="btn btn-default">Batal</a>
				    </div>

				     </form>


					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
