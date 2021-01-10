<?php 
	$sql="select * from loaitin where idloaitin='$_GET[id]'";
	$loaitin=mysqli_query($connect,$sql);
	$dong=mysqli_fetch_array($loaitin); 
?>
<form action="modules/loaitin/xuly.php?id=<?php echo $dong['idloaitin'] ?>" method="post">
<div class="content-left">
<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Sửa loại tin</div></td>
  </tr>
  <tr>
    <td>Tên loại tin</td>
    <td><label>
      <input type="text" name="tenloaitin" id="tenloaitin" value="<?php echo $dong['tenloaitin'] ?>">
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