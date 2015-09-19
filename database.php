<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "gasap";
mysql_connect($host,$user,$password) or die("Walang database!");
mysql_select_db($datbase);
?>