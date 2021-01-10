<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
 
 $sql="select * from baiviet where idbaiviet='$_GET[id]'";
 $baiviet=mysqli_query($connect,$sql);
 $dong=mysqli_fetch_array($baiviet);
?>

<form action="modules/baiviet/xuly.php?id=<?php echo $dong['idbaiviet'] ?>" method="post" enctype="multipart/form-data">
<div class="content-left">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa bài viết</div></td>
  </tr>
  <tr>
    <td>Tên bài viết</td>
    <td><label>
      <input type="text" name="tenbaiviet" id="tenbaiviet" value="<?php echo $dong['tenbaiviet'] ?>">
    </label></td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td><label>
      <input type="file" name="anhminhhoa" id="anhminhhoa" />
      <img src="../<?php echo $dong['anhminhhoa'] ?>" width="85" height="85" />
    </label></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><label>
      <textarea name="tomtat" id="tomtat" cols="45" rows="5" >
      	<?php  echo $dong['tomtat']?>
      </textarea>
    </label></td>
  </tr>
  <tr>
    <td>Nội dụng</td>
    <td><label>
      <textarea name="noidung" id="noidung" cols="45" rows="5">
      	<?php echo $dong['noidung'] ?>
      </textarea>
    </label></td>
  </tr>
  <tr>
    <td>Loại tin</td>
    <td><label>
      <select name="loaitin" id="loaitin">
      <?php
	  $sql="select * from loaitin";
	 $loaitin= mysqli_query($connect,$sql);
	  while($dong_loaitin=mysqli_fetch_array($loaitin)){
		  if($dong_loaitin['idloaitin']==$dong['idloaitin']){
	  ?>
      
      <option value="<?php echo $dong_loaitin['idloaitin'] ?>" selected="selected"><?php echo $dong_loaitin['tenloaitin'] ?></option>
     <?php
	  }else{
	 ?>
     <option value="<?php echo $dong_loaitin['idloaitin'] ?>"><?php echo $dong_loaitin['tenloaitin']?></option>
     <?php
	  }
	  }
	 ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td><label>
      <select name="trangthai" id="trangthai">
      <?php
	  if($dong['trangthai']=='Hiển thị'){
	  ?>
        <option value="Hiển thị" selected>Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>
        <?php
	  }else{
		?>
         <option value="Hiển thị" >Hiển thị</option>
        <option value="Không hiển thị" selected>Không hiển thị</option>
        <?php
	  }
		?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><label>
      <input type="text" name="thutu" id="thutu" value="<?php echo $dong['thutu'] ?>">
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="sua" id="sua" value="Sửa">
    </div></td>
  </tr>
</table>
</div>
</form>
