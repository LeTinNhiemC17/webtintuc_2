<?php
	$sql="select * from baiviet where idloaitin='$_GET[id]'";
	$baiviet=mysqli_query($connect,$sql);
	
 ?>
<div class="content_left" style="width:auto;">
	<div class="box2 widthloaitin">
        	<ul>
            <?php
			while($dong=mysqli_fetch_array($baiviet)){
			?>
            	<img src="<?php echo $dong['anhminhhoa']  ?>" width="80" height="80"  style="float:left;"/>
            	<li style="list-style:none; font-size:16px"><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>"><?php echo $dong['tenbaiviet'] ?></a></li>
               	<p class="tomtatloaitin"><?php echo $dong['tomtat'] ?></p>
                <div class="clear"></div>
                <?php
			}
				?>
               
               
               
                	
                
                
            </ul>
        </div>
</div>