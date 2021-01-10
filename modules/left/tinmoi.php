<?php
	$sql=mysqli_query($connect,"select * from baiviet order by idbaiviet desc limit 9");
	$dong=mysqli_fetch_array($sql);
	
?>
<div class="box1">
        	<img src="<?php echo $dong['anhminhhoa'] ?>" width="350" height="250" />
            <p class="tieude"><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>"><?php echo $dong['tenbaiviet'] ?></a></p>
            <p class="tomtat" ><?php echo $dong['tomtat'] ?></p>
        </div>
        <div class="box2">
        	<ul>
            <?php
				while($dong=mysqli_fetch_array($sql)){
			?>
            	<li><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>">
                <?php echo $dong['tenbaiviet'] ?>
                </a></li>
               <?php
				}
			   ?>
            </ul>
        </div>
 <div class="clear"></div>