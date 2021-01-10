<?php
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
		
	}else{
		$tam='';
	}
	if($tam=='them'){
		include('modules/loaitin/them.php');
		
	}elseif($tam=='sua'){
			include('modules/loaitin/sua.php');
		
	}
	
		include('modules/loaitin/lietke.php');
	
?>