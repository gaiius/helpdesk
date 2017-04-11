<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Surat Kesepakatan</title>
  <link rel="stylesheet" href="<?php echo base_url(). "assets/";?>css/bootstrap.min.css">
</head>

<body>
<div class="row" align="center">

	<h1>REPORT TECHNITION</h1>


	<table class="table table-striped" id="tableorder" align="center" border="1" cellpadding="10" cellspacing="0" width="100%">


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
</body>
</html>