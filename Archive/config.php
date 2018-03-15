<?php
$host = "localhost";

$username = "automytho2";

$password = "ehe8ateqa";	

$dbname = "minhphucpk1997_automytho1";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>