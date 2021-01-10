<?php
	$sql="select * from loaitin order by thutu desc";
	$loaitin=mysqli_query($connect,$sql);
	
?>

<div class="menu">
	<ul>
    	<li><a href="index.php">Trang chủ</a></li>
        <?php
		while($dong=mysqli_fetch_array($loaitin)){
		?>
        <li><a href="index.php?xem=loaitin&id=<?php echo $dong['idloaitin'] ?>">
		<?php
		echo $dong['tenloaitin']
        ?></a></li>
       <?php
		}
	   ?>
    </ul>
</div>

<!-- ket thuc menu -->