<div class="row">
<ol class="breadcrumb">
<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
<li class="active">Report Teknisi</li>
</ol>
</div><!--/.row-->

<br>


<div class="row">

<div class="col-lg-12">
<div class="panel panel-default">
<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="<?php echo base_url();?>dashboard_teknisi/teknisi_view" style="text-decoration:none">REPORT TEKNISI <a href="<?php echo base_url();?>dashboard_teknisi/pdfreportteknisi/<?php echo $id_teknisi;?>" class="btn btn-danger" target="_blank">Pdf</a></a></div>
<div class="panel-body">


    
<table class="table table-condensed">
  <tr>
  	<th>NO</th>
  	<th>TANGGAL PROSES</th>
  	<th>REPORTED</th>
    <th>DEPARTEMEN</th>
  	<th>PROGRESS</th>
  </tr>

  <?php $no = 0; foreach($datareportteknisi as $row) : $no++;?>
   <tr>
   	<td><?php echo $no;?></td>
  	<td><?php echo $row->tanggal_proses;?></td>
  	<td><?php echo $row->nama;?></td>
  	<td><?php echo $row->nama_dept;?></td>
    <td>
  <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $row->progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row->progress;?>%">
    <span><?php echo $row->progress;?> % Complete (Progress)</span>
  </div>
  </div>
    </td>
  </tr>
<?php endforeach;?>
</table>

  </div>
</div>


</div>
</div>
</div>

</div><!--/.row-->  
