<?php
	$sql="select idbaiviet,tenbaiviet,anhminhhoa,tomtat,noidung,loaitin.tenloaitin,baiviet.trangthai,baiviet.thutu
	 from baiviet,loaitin where loaitin.idloaitin=baiviet.idloaitin  order by thutu desc";
	$baiviet=mysqli_query($connect,$sql);
?>
<div class="content-right">
<table width="426" border="1">
  <tr>
    <td>ID</td>
    <td>Tên bài viết</td>
    <td>Ảnh minh họa</td>
    <td>Loại tin</td>
    <td>Trạng thái</td>
    <td>Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <tr>
  <?php
  $i=0;
  while($dong=mysqli_fetch_array($baiviet)){
  ?>
    <td><?php echo $i; ?></td>
    <td style="background:#0FF"><?php echo $dong['tenbaiviet']?></td>
    <td><img src="../<?php echo $dong['anhminhhoa'] ?>" width="30" height="30" /></td>
    <td style="background:#0FF"><?php echo $dong['tenloaitin']?></td>
    <td><?php echo $dong['trangthai']?></td>
    <td><?php echo $dong['thutu']?></td>
    <td><a href="index.php?quanly=baiviet&ac=sua&id=<?php echo $dong['idbaiviet'] ?>">Sửa</a></td>
    <td><a href="modules/baiviet/xuly.php?xoa=baiviet&id=<?php  echo $dong['idbaiviet']?>">Xóa</a></td>
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</div>
<div class="clear"></div>