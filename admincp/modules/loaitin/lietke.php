<?php
	$sql="select * from loaitin order by thutu desc";
	$loaitin=mysqli_query($connect,$sql);
?>
<div class="content-right">
<table width="426" border="1">
  <tr>
    <td>ID</td>
    <td>Tên loại tin</td>
    <td>Trạng thái</td>
    <td>Thứ tự</td>
    <td colspan="2">Quản lý</td>
  </tr>
  <tr>
  <?php
  $i=0;
  while($dong=mysqli_fetch_array($loaitin)){
  ?>
    <td><?php echo $i; ?></td>
    <td style="background:#0FF"><?php echo $dong['tenloaitin']?></td>
    <td><?php echo $dong['trangthai']?></td>
    <td><?php echo $dong['thutu']?></td>
    <td><a href="index.php?quanly=loaitin&ac=sua&id=<?php echo $dong['idloaitin'] ?>">Sửa</a></td>
    
  </tr>
  <?php
  $i++;
  }
  ?>
</table>
</div>
<div class="clear"></div>