<?php
	$sql="select * from baiviet where idbaiviet='$_GET[id]'";
	$baiviet=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($baiviet);
 ?>
<div class="content_left row" style="width:100%; text-align:justify" >
	<?php
	echo $dong['tenbaiviet']	?>
    <?php
		echo $dong['noidung']
	?>
    <?php
		include('modules/left/tinlienquan.php');
	?>
   <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
    	<img src="imgs/Scroll to top.gif" width="40" height="40" />
    </div>
</div>