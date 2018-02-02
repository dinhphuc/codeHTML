<?php
$host = "localhost";

$username = "dinhphuc";

$password = "uha9evuja";	

$dbname = "minhphucpk1997_thutra";



$connection = mysql_connect($host,$username,$password);

if (!$connection)
  {
  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>