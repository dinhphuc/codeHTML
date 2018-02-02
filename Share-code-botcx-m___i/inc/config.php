<?php
$dm = 'http://testcodesite.ga'; // không có / ở cuối

$host = "localhost";
$username = "tuan_1";
$password = "Tuan123456";
$dbname = "tuan_1";
$connection = mysql_connect($host,$username,$password);
if (!$connection)
{
die('Không Thể Kết Nối Tới CSDL => Config CSDL Sai Rồi');
}
mysql_select_db($dbname) or die('Không Kết Nối Được Tới Database => Config Sai Database');
mysql_query("SET NAMES utf8");
?>