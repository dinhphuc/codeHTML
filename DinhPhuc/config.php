<?php
$host = "share17.vhost.vn";

$username = "automyth_token";

$password = "automyth_token123";	

$dbname = "automyth_token";



$connection = mysql_connect($host,$username,$password);

if (!$connection)
  {
  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>