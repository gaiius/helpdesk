<!DOCTYPE html>
<html lang="en">
<head>
	<!--load view header -->
 <?php
 	$this->load->view($header);
 ?>
 <!--/header-->
</head>

<body>

<?php

$this->load->view($navbar);

 ?>	

 <?php

$this->load->view($sidebar);

 ?>	

	
<!--mainbar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			


 <?php

$this->load->view($body);

 ?>	

</div>


 <!--/mainbar-->


</body>
</html>
