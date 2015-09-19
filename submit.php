<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="png" href="images/icon.png">
	<script src="sweetalert-master/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="sweetalert-master/dist/sweetalert.css">
</head>
<body>
<?php
	include_once 'database.php';
	session_start();
	$announcement = $_POST['announcement'];
 	$recipient = $_POST['recipient'];
 	$announcer_name = $_POST['announcer_name'];
	

mysql_query("INSERT INTO announcements (announcement,recipient,announcer_name) VALUES ('$announcement','$recipient','$announcer_name')") or die("Cannot add");
 	
	Print '<script>
			window.location.assign("announcements.php")
		   </script>';
			
?>

</body>
</html>