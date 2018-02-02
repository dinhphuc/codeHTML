<?php
$host = "share02.vhost.vn";

$username = "automyth_kBz";

$password = "123kBz";	

$dbname = "automyth_kBz";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>