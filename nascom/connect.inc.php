<?php 
$host = 'localhost';
$name = 'root';
$pass = '';
$db = 'pg';
mysql_connect($host,$name,$pass) or die('Could not connect');
mysql_select_db($db) or die(mysql_error());
?>
