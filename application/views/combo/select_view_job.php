<table class="table" width="100%">
<tr>
<th><php echo </th>
<th>Kategori</th>
<th>Sub Kategori</th>
<th>Reported</th>
<th>Progress</th>
</tr>
<?php $no = 0; foreach($dataassigment->result() as $row) { $no++;?>
<tr>
<td><?php echo $no;?></td>
<td><?php echo $row->nama_kategori;?></td>
<td><?php echo $row->nama_sub_kategori;?></td>
<td><?php echo $row->nama;?></td>
<td><?php echo $row->progress;?></td>
</tr>
<?php }?>

</table>