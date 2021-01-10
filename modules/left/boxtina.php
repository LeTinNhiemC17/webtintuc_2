<?php 
	$sql="select * from loaitin,baiviet 
	where loaitin.idloaitin=baiviet.idloaitin and loaitin.idloaitin='$dong_loaitin[idloaitin]' order by idbaiviet desc limit 5 ";
	$baiviet=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($baiviet); 
?>
<div class="content">
	<div class="boxtin">
	<p style="margin-left:5px;"><a href="index.php?xem=loaitin&id=<?php echo $dong['idloaitin'] ?>"><?php echo $dong['tenloaitin'] ?></a></p>
    </div>
	<div class="content_left " style="width:100%;margin-top:10px;">
    	<div class="box1">
        	<img src="<?php echo $dong['anhminhhoa']?>" width="auto" height="250" />
            <p class="tieude"><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>"><?php echo $dong['tenbaiviet'] ?></a></p>
            <p class="tomtat"><?php echo $dong['tomtat'] ?></p>
        </div>
        <div class="box2 margin">
        	<ul>
            <?php
				while($dong=mysqli_fetch_array($baiviet)){
			?>
            	<img src="<?php echo $dong['anhminhhoa'] ?>" width="50" height="50"  style="float:left;"/>
            	<li style="list-style:none;"><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>"><?php echo $dong['tenbaiviet'] ?></a></li>
                <div class="clear"></div>
                <?php
				}
				?>
                
                
            </ul>
        </div>
    </div>
    <!-- Ket thuc content_left -->
    
   <div class="clear"></div>
</div>

<!-- ket thuc content 2 -->