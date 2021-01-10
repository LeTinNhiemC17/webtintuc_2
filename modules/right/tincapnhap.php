<?php
 $sql="select * from baiviet order by idbaiviet desc limit 10";
 $baiviet=mysqli_query($connect,$sql);
 
?>
 <div class="boxtin " style="margin:0 0 2px 0">
	<p>Tin cập nhật</p>
    </div>
    	<ul>
        <?php
		while($dong=mysqli_fetch_array($baiviet)){
		?>
            	<img src="<?php echo $dong['anhminhhoa'] ?>" width="50" height="50"  style="float:left;"/>
            	<li style="list-style:none;margin-left:55px;"><a href="index.php?xem=chitiet&id=<?php echo $dong['idbaiviet'] ?>">
                <?php
					echo $dong['tenbaiviet'];
				?>
                </a></li>
                <div class="clear"></div>
                	           	            <?php
		}
											?>
            </ul>
    </div>
    
    <div class="clear"></div>
     <div class="scroll-to-top" style="position:fixed;bottom:20%;left:80%;cursor:pointer;display:none;">
    	<img src="imgs/Scroll to top.gif" width="40" height="40" />
    </div>