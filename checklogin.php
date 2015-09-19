<!DOCTYPE html>
<link rel="icon" type="png" href="images/icon.png">


<?php
	session_start();
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	


	mysql_connect("localhost","root",""); //connect to server
	mysql_select_db("gasap") or die ("Cannot connect to database"); 
	$query = mysql_query("SELECT * FROM user_accounts WHERE username = '$username'");
	$exists = mysql_num_rows($query);
	
	if($exists == 1)
	{
		while($row = mysql_fetch_array($query))
		{
			$table_users = $row['username'];
			$table_password = $row['password'];
			$table_type = $row['usertype'];
		}
		if($username == $table_users)
		{
			if($password == $table_password)
			{
				if($table_type == "administrator")
				{
					$_SESSION['administrator'] = $username;
					header("location: director_index.php");
				}
				else if($table_type == "teacher")
				{
					$_SESSION['teacher'] = $username;
					header("location: teacher_index.php");	
				}
				else if($table_type == "registrar")
				{
					$_SESSION['registrar'] = $username;
					header("location: registrar_index.php");	
				}
				else if($table_type == "student")
				{
					$_SESSION['student'] = $username;
					header("location: student_index.php");	
				}
			}
			else {
				Print '<script>alert("Incorrect username or password.");</script>';
				Print '<script>window.location.assign("index.php");</script>';
			}
		}
		else
		{
			Print '<script>alert("Incorrect username or password.");</script>';
			Print '<script>window.location.assign("index.php");</script>';
		}
	}
	else 
	{
		Print '<script>alert("Account not registered.");</script>';
		Print '<script>window.location.assign("index.php");</script>';
	}
?>