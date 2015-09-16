<?php
require_once 'dbset.php';
$db = mysql_connect($db_host,$db_user,$db_pass) or die(mysql_error);
mysql_select_db($db_name,$db) or die(mysql_error);
$encoding = mysql_query("SET NAMES utf8");
//echo "Connection succesfully";
?>