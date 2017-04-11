			

<div class="row">
<ol class="breadcrumb">
<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
<li class="active">Update Progress</li>
</ol>
</div><!--/.row-->

<br>


<div class="row">

<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="<?php echo base_url();?>departemen/add" style="text-decoration:none">Update Progress</a></div>
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

	<div class="col-lg-6">

<form method="post" action="<?php echo base_url();?><?php echo $url;?>">

	<input type="hidden" class="form-control" name="id_ticket" value="<?php echo $id_ticket;?>">

		<div class="form-group">
			<label>Up Progress</label>
			<select name="progress" class="form-control">
				<?php for ($i=$progress; $i<=100; $i+=10){?>
			<option value="<?php echo $i;?>">PROGRESS <?php echo $i;?> %</option>
			<?php }?>
			</select>
		</div>

		<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $progress;?>%">
    <span class="sr-only"><?php echo $progress;?> % Complete (Progress)</span>
  </div>
</div>

		<div class="form-group">
		<label>Deskripsi Progress</label>
		<textarea name="deskripsi_progress" class="form-control" rows="10"></textarea>
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


