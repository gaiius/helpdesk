		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">News</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Informasi</h1>
			</div>
		</div><!--/.row-->
		
		
		


		<div class="row">

			<div class="col-xs-12 col-md-12">


				<div class="panel panel-default chat">
					<div class="panel-heading" id="accordion"><svg class="glyph stroked two-messages"><use xlink:href="#stroked-two-messages"></use></svg> News</div>
				
					<div class="panel-body">
						<ul>

							<?php $no = 0; foreach($datainformasi as $row) : $no++;?>
							<li class="left clearfix">
								<span class="chat-img pull-left">
									<?php echo $row->nama;?>
								</span>
								<div class="chat-body clearfix">
									<div class="header">
										<strong class="primary-font"></strong> <small class="text-muted"><?php echo $row->tanggal;?></small>
									</div>
									<b><?php echo $row->subject;?></b>
									<p>
										<?php echo $row->pesan;?>. 
									</p>
								</div>
							</li>

						<?php endforeach;?>
							
						</ul>
					</div>
				

			</div>



		</div><!--/.row-->
								
		
								
			</div><!--/.col-->
		</div><!--/.row-->
	</div>	<!--/.main-->