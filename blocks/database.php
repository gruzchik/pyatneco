<?php
$db = mysql_connect("localhost","pyatneco","12345") or die(mysql_error);
mysql_select_db("pyatneco",$db) or die(mysql_error);
$encoding = mysql_query("SET NAMES utf8");
//echo "Connection succesfully";
?>