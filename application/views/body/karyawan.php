


			
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
<a href="<?php echo base_url();?>karyawan/add" style="text-decoration:none">Tambah Data Karyawan</a></div>
					<div class="panel-body">
						<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px">No</th>
						        <th data-field="id" data-sortable="true">Nik</th>
						        <th data-field="nama" data-sortable="true">Nama</th>
						        <th data-field="alamat" data-sortable="true">Alamat</th>
						        <th data-field="jenis_kelamin" data-sortable="true">Jenis Kelamin</th>
						        <th data-field="departemen" data-sortable="true">Departemen</th>
						        <th data-field="bagian" data-sortable="true">Bagian</th>
						        <th data-field="jabatan" data-sortable="true">Jabatan</th>
						        <th>Aksi</th>
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($datakaryawan as $row) : $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="nik"><?php echo $row->nik;?></td>
						        <td data-field="nama"><?php echo $row->nama;?></td>
						        <td data-field="alamat"><?php echo $row->alamat;?></td>
						        <td data-field="jk"><?php echo $row->jk;?></td>
						        <td data-field="id_departemen"><?php echo $row->nama_dept;?></td>
						        <td data-field="id_bagian_dept"><?php echo $row->nama_bagian_dept;?></td>
						        <td data-field="nama_jabatan"><?php echo $row->nama_jabatan;?></td>
						        <td> 
<a class="ubah btn btn-primary btn-xs" href="<?php echo base_url();?>karyawan/edit/<?php echo $row->nik;?>"><span class="glyphicon glyphicon-edit" ></span></a>
<a data-toggle="modal"  title="Hapus Kontak" class="hapus btn btn-danger btn-xs" href="#modKonfirmasi" data-id="<?php echo $row->nik;?>"><span class="glyphicon glyphicon-trash"></span></a>
</td>
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
		
		
