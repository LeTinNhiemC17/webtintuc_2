<?php
	include('../config.php');
	$tenloaitin=$_POST['tenloaitin'];
	$trangthai=$_POST['trangthai'];
	$thutu=$_POST['thutu'];
	$id=$_GET['id'];
	if(isset($_POST['them'])){
		//them loai tin
		$sql="insert into loaitin(tenloaitin,trangthai,thutu) values('$tenloaitin','$trangthai','$thutu')";
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=loaitin&ac=them');
	}elseif(isset($_POST['sua'])){
		//sua loai tin
		$sql="update loaitin set tenloaitin='$tenloaitin',trangthai='$trangthai',thutu='$thutu' 
		where idloaitin='$_GET[id]'";
		mysqli_query($connect,$sql);
		header('location:../../index.php?quanly=loaitin&ac=sua&id='.$id);
	}else{
		//xoa loai tin
		$sql="delete from loaitin where idloaitin='$id'";
		mysqi_query($connect,$sql);
		header('location:../../index.php?quanly=loaitin&ac=them');
	}
?>