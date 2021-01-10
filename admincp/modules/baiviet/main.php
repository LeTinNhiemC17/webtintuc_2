<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
		
	}else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/baiviet/them.php');
		
	}elseif($tam=='sua'){
			include('modules/baiviet/sua.php');
		
	}
	
		include('modules/baiviet/lietke.php');
	
?>