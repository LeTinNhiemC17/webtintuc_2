<div class="content">
	<div class="content_left">
    	<?php
		if(isset($_GET['xem'])){
			$tam=$_GET['xem'];
		}else{
			$tam='';
		}
		if($tam=='chitiet'){
			include('modules/left/chitiettin.php');
		}elseif($tam=='loaitin'){
			include('modules/left/chitietloaitin.php');
		}else{
			include('modules/left/tinmoi.php');
			$sql="select * from loaitin where trangthai='Hiển thị'";
			$loaitin=mysqli_query($connect,$sql);
			while($dong_loaitin=mysqli_fetch_array($loaitin)){
			include('modules/left/boxtina.php');
			
			}
		}
		?>
    </div>
    
    
    <div class="content_right">
   		<?php
			include('modules/right/tincapnhap.php');

		?>
  
</div>
<div class="clear"></div>

