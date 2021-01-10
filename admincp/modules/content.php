<div class="content">
	
    	<?php
		if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam='';
		}
		if($tam=='loaitin'){
			include('modules/loaitin/main.php');
		}elseif($tam=='baiviet'){
			include('modules/baiviet/main.php');
		}
		?>
   
   
</div>