<?php
$host = "localhost";

$username = "k1403xine_design";

$password = "design";	

$dbname = "k1403xine_kbz";



$connection = mysql_connect($host,$username,$password);

if (!$connection)

  {

  die('Could not connect: ' . mysql_error());

  }

mysql_select_db($dbname) or die(mysql_error());

mysql_query("SET NAMES utf8");
?>