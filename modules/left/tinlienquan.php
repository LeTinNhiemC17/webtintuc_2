<?php
	$sql="select * from baiviet where idloaitin='$dong[idloaitin]' and idbaiviet not in('$_GET[id]')";
	$baiviet=mysqli_query($connect,$sql);
	
?>
<p style="color:#960;font-size:16px;">Tin liên quan</p>
<ul style="list-style:none;margin-left:20px;">
<?php
	while($dong=mysqli_fetch_array($baiviet)){ 
?>
	<li style="margin-top:10px;"><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>"><?php echo $dong['tenbaiviet'] ?></a></li>
    <?php
	}
	?>
</ul>