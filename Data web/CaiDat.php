<!DOCTYPE html>
<html lang="en">
<head>
  <title>Phúc binz | Cài Token</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
 <div class="row">
   <form action="" method="POST">
    <div class="form-group col-md-12">
      <label for="text">Token Đình Phúc : </label>
      <input type="text" class="form-control" id="tkDinhPhuc" placeholder="Enter Token " name="tkDinhPhuc">
    </div>
    <div class="form-group col-md-12">
      <label for="text">Token Thanh Hằng :</label>
      <input type="text" class="form-control"  id="tkThanhHang" placeholder="Enter Token " name="tkThanhHang">
    </div>
    <div class="form-group col-md-12">
      <label for="text">Token Duyên Mỹ:</label>
      <input type="text" class="form-control"  id="tkDuyenMy" placeholder="Enter Token " name="tkDuyenMy">
    </div> 
    <div class="form-group col-md-12">
      <label for="text">Token Thương Thanh Nguyễn:</label>
      <input type="text" class="form-control"  id="TTN" placeholder="Enter Token " name="TTN">
    </div> 
    <div class="form-group col-md-12">
      <label for="text">Token Đồng Đức Chung:</label>
      <input type="text" class="form-control"  id="TTN" placeholder="Enter Token " name="DDC">
    </div> 
    <div class="form-group col-md-12">
      <label for="text">Thao Tác</label>
    <button type="submit" class="btn btn-default ">Cập Nhật</button>
    </div>  
  </form>
</div>
</div>
</body>
</html>

<?php
session_start();
include'config.php';
$user_check = $_SESSION['login_user'];
$query  = "SELECT * FROM `admin` WHERE username='$user_check' ";
	  $result = mysql_query($query);
      echo  mysql_num_rows($result)  ;
      if( mysql_num_rows($result) == 1 ) 
      {     
      }else{
        header("location: Login.php");
       }
$tk1=$_POST[tkDinhPhuc];
$tk2=$_POST[tkThanhHang];
$tk3=$_POST[tkDuyenMy];
$tk4=$_POST[TTN];
$tk5=$_POST[DDC];

if($tk1!="")
{
	mysql_query(
       "UPDATE
			`Account` 
		SET 
			`ID` = 1,
			`Name` = 'Đình Phúc',
			 `Token` = '" .$tk1 . "'
                 WHERE
            `id` =1
      ");
	  echo "\nThành Công Token Đình Phúc";
}
if($tk2!="")
{
	mysql_query(
       "UPDATE
			`Account` 
		SET 
			`ID` = 2,
			`Name` = 'Thanh Hằng',
		 `Token` = '" .$tk2 . "'
         WHERE
            `id` = 2
      ");
	echo "\nThành Công Token Thanh Hằng";
}
if($tk3!="")
{
	mysql_query(
          "UPDATE 
            `Account` 
         SET
            `ID` = '3',            
            `Name` = 'Duyên',
            `Token` = '" .$tk3 . "'
         WHERE
            `id` = 3
      ");
	echo "\nThành Công Token Duyên Mỹ";
}
if($tk4!="")
{
    mysql_query(
          "UPDATE 
            `Account` 
         SET
            `ID` = '4',            
            `Name` = 'TTN',
            `Token` = '" .$tk4 . "'
         WHERE
            `id` = 4
      ");
	echo "Thành Công Token Thanh Thương Nguyên";
}
if($tk5!="")
{
    mysql_query(
          "UPDATE 
            `Account` 
         SET
            `ID` = '5',            
            `Name` = 'DDC',
            `Token` = '" .$tk5 . "'
         WHERE
            `id` = 5
      ");
    echo "Thành Công Token Đồng Đức Chung";
}
?>				