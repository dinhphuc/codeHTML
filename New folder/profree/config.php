<?php
$host = "localhost";

$username = "ezyro_20655092";

$password = "ndm94557@sjuaq.com";	

$dbname = "	ezyro_20655092_kBz";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>