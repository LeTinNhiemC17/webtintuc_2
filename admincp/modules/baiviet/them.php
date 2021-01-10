
<form action="modules/baiviet/xuly.php" method="post" enctype="multipart/form-data">
<div class="content-left">
<script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
<table width="200" border="1">
  <tr>
    <td colspan="2"><div align="center">Thêm bài viết</div></td>
  </tr>
  <tr>
    <td>Tên bài viết</td>
    <td><label>
      <input type="text" name="tenbaiviet" id="tenbaiviet">
    </label></td>
  </tr>
  <tr>
    <td>Ảnh minh họa</td>
    <td><label>
      <input type="file" name="anhminhhoa" id="anhminhhoa" />
    </label></td>
  </tr>
  <tr>
    <td>Tóm tắt</td>
    <td><label>
      <textarea name="tomtat" id="tomtat" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Nội dụng</td>
    <td><label>
      <textarea name="noidung" id="noidung" cols="45" rows="5"></textarea>
    </label></td>
  </tr>
  <tr>
    <td>Loại tin</td>
    <td><label>
      <select name="loaitin" id="loaitin">
      <?php
	  $sql="select * from loaitin";
	 $loaitin= mysqli_query($connect,$sql);
	  while($dong=mysqli_fetch_array($loaitin)){
	  ?>
      
      <option value="<?php echo $dong['idloaitin'] ?>"><?php echo $dong['tenloaitin'] ?></option>
     <?php
	  }
	 ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Trạng thái</td>
    <td><label>
      <select name="trangthai" id="trangthai">
        <option value="Hiển thị" selected>Hiển thị</option>
        <option value="Không hiển thị">Không hiển thị</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td>Thứ tự</td>
    <td><label>
      <input type="text" name="thutu" id="thutu">
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="them" id="them" value="Thêm">
    </div></td>
  </tr>
</table>
</div>
</form>
