<!DOCTYPE html>
<?php	
			session_start();
			if(isset($_SESSION['administrator']))
			{
				$user = $_SESSION['administrator'];
				Print '<script>window.location.assign("director_index.php");</script>';
			} 
			else if(isset($_SESSION['registrar']))
			{
				$user = $_SESSION['registrar'];
				Print '<script>window.location.assign("registrar_index.php");</script>';
			}
			else if(isset($_SESSION['teacher']))
			{
				$user = $_SESSION['teacher'];
				Print '<script>window.location.assign("teacher_index.php");</script>';
			}
			else if(isset($_SESSION['student']))
			{
				$user = $_SESSION['student'];
				Print '<script>window.location.assign("student_index.php");</script>';
			}
?>

<html>
<head>
	<link rel="icon" type="png" href="images/icon.png">
	<title>GASAP</title>
	<link rel="stylesheet" href="css/index.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>

<div class="container">

		<div class="text-center"> GASAP </div>
		
</div>

<div class="container-fluid">

	<form class="form-signin" method="POST" action="checklogin.php">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
    </form>

</div>

</body>
</html>
