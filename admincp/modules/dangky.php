<?php
session_start();
?>
 <?php
 include('../modules/config.php');
 if (isset($_POST["btn_submit"])) {
   $username = $_POST["username"];
   $password = $_POST["password"];
    //$type = $_POST["type"];
   if ($username == "" || $password == "" || $type == "" ) {
    echo "bạn vui lòng nhập đầy đủ thông tin";
   }else{
   $sql="SELECT * FROM `usernew` WHERE  username='$username'";
 $kt=mysqli_query($connect, $sql);
 
 if(mysqli_num_rows($kt)  > 0){
 echo "Tài khoản đã tồn tại";
 }else{
 
      $sql = "INSERT INTO `usernew`(`username`, `password`, `type`) VALUES ('$username','$password','$type')";
     
   mysqli_query($connect,$sql);
    echo "chúc mừng bạn đã đăng ký thành công"; 
   
 }
      
   }
 }
 
 ?>

<form action="#" method="post">
   
    
 <table>
 <tr>
 <td colspan="2">Thêm Thành Viên</td>
 </tr> 
 <tr>
 <td>Username :</td>
 <td><input type="text" id="username" name="username"></td>
 </tr>
 <tr>
 <td>Password :</td>
 <td><input type="password" id="pass" name="password"></td>
 </tr>
 <tr>
 <td>Type :</td>
 <td><input type="text" id="type" name="Type"></td>
 </tr>
 
 <tr>
 <td colspan="2" align="center"><input type="submit" name="btn_submit" value="Thêm Mới"></td>
 
 </tr>
 
 
 
 </table>
   Quay về trang  <a href="../../modules/login.php">Đăng Nhập </a>
 </form>
 