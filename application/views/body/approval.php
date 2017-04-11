			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Approal Ticket</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Approval Ticket</a></div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px"> No</th>
						        <th data-field="idd" data-sortable="true">Id Ticket</th>
						        <th data-field="iddd" data-sortable="true">Tanggal</th>
						        <th data-field="idd" data-sortable="true">Reported</th>
						        <th data-field="idddd" data-sortable="true">Nama Kategori</th>
						        <th data-field="iddddd" data-sortable="true">Nama Sub Kategori</th>
						        <th data-field="idddddd" data-sortable="true">Status</th>
						        <th data-field="iddddddD" data-sortable="true">AKSI</th>
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($dataapproval as $row) : $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="id"><a href="<?php echo base_url();?>myticket/myticket_detail"><?php echo $row->id_ticket;?></a></td>
						        <td data-field="id"><?php echo $row->tanggal;?></td>
						        <td data-field="id"><?php echo $row->nama;?></td>
						        <td data-field="id"><?php echo $row->nama_kategori;?></td>
						        <td data-field="id"><?php echo $row->nama_sub_kategori;?></td>
						        <td data-field="idS"><?php 
						            if($row->status==1) { 
						        	echo "MENUNGGU APPROVAL";}
						        	else if($row->status==0)
						        		{ echo "TIDAK APPROVAL";}
						        	
						        	?></td>
						          
						         	<?php if($row->status == 1)
						         	{?>
						         	<td>
<a class="ubah btn btn-success btn-xs" href="<?php echo base_url();?>approval/approval_yes/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-thumbs-up" ></span></a>
<a title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="<?php echo base_url();?>approval/approval_no/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-thumbs-down"></span></a>
</td>
<?php } else if($row->status == 2) {?>
<td>
<a title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="<?php echo base_url();?>approval/approval_no/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-thumbs-down"></span></a>
</td>
<?php } else if($row->status == 0) {?>
<td>
<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>approval/approval_reaction/<?php echo $row->id_ticket;?>"><span class="glyphicon glyphicon-retweet" ></span></a>
</td>
<?php }?>
						    </tr>
						    <?php endforeach;?>
						    </tbody>
						    
						</table>
					</div>
				</div>
			</div>
		</div><!--/.row-->	


		<?php echo $this->session->flashdata("msg");?>

	
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>


<?php $this->load->view('konfirmasi');?>

<script type="text/javascript">
$(document).ready(function(){

$(".hapus").click(function(){
var id = $(this).data('id');

$(".modal-body #mod").text(id);

});

});
</script>







					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
