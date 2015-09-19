<html>
<?php 
	function errorAccess(){
			print'<script type="text/javascript">alert("Access denied!")</script>';
			print '<script>window.location.assign("index.php");</script>';
		}
		session_start();
		if(isset($_SESSION[$teacher]))
		{
			$user = $_SESSION[$teacher];
		}
		else 
		{
			errorAccess();
		}
		
?>
	<head>
		<title>GASAP</title>

		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="../css/dataTables.bootstrap.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.4-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		
	</head>

	<body>

		<div id="wrapper">
			<header>
				 <div class="row">
					<ul class="main-nav">
						<li><a class="hidden-xs" href="">Account Settings</a></li>
						<li><a class="hidden-xs" href="">Events</a></li>
						<li><a class="hidden-xs" href="">Announcements</a></li>
						<li><a class="selected-navigation hidden-xs" href="">Home</a></li>
					</ul>
				</div>
				<div class="sub-header col-md-12">
					<div class="display-user-container">
						<a class="display-user" href=""><img src=""/>Hi <?php echo $user ?>!</a>
					</div>
					<div class="user-account-container">
						<a class="user-logout" href="../logout.php"><img src=""/>Logout</a>
					</div>
				</div>
			</header>
			
			<div id="content">
				<div class="container-fluid">
					<!--<div class="left-sidebar-container remove-padding col-md-2">
						<div class="left-sidebar "></div>
					</div>-->
					<div class="main col-md-10">
						<div class="row">
							<ul class="menu-navigation">
								<li><a href="teacher_index.php" class="menu-selected"><i class="fa fa-user"></i>STUDENTS</a></li>
								<li><a href="teacher_schedule.php" ><i class="fa fa-clipboard"></i>FACULTY SCHEDULE</a></li>
								<li><a href="teacher_e-board.php"><i class="fa fa-list-alt"></i>E-BOARD ANNOUNCEMENTS</a></li>
								<li><a href="teacher_evaluation.php"><i class="fa fa-calendar"></i>EVALUATION</a></li>
								
							</ul>
							<div class="main-content box-shadow col-md-12">
								<div class="content-block box-shadow col-md-12">
									<div class="content-block-header"><h4>Student List</h4></div>
									<div class="wrapper">
									<div class="col-md-12">
										<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
								        <thead>
								            <tr>
								                <th>Student Name</th>
								                <th>Year level</th>
								                <th>Schedule</th>
								                <th>Total Grade</th>
								            </tr>
								        </thead>
								        <tbody>
								            <tr>
								                <td><a href="teacher_computegrade.php">Juan Dela Cruz</a></td>
								                <td>3ISD</td>
								                <td>M 4:00PM - 9:00PM</td>
								                <td>95</td>
								                
								            </tr>
								            
								        </tbody>
								    </table>	
									<!--Do Not Remove-->
									</div>
									<div class="col-md-4">
										<div class="col-md-12">
											<div class="col-md-6 remove-padding">
											</div>
										</div>
									</div>
								</div>
								<!-- END content-block -->
								
								
								
								<!-- END content-block -->
							</div>
							</div>
						</div>
					</div>
					<div class="right-sidebar-container remove-padding box-shadow col-md-2">
						<div class="notification-header col-md-12">
							<i class="fa fa-bell"></i>
							<h2>NOTIFICATIONS</h2>
						</div>
					</div>
				</div>
			</div>

	    </div>

		<script type="javascript" src="../js/script.js"></script>
		<script type="javascript" src="../js/jquery-1.11.1.min.js"></script>
		<script type="javascript" src="../js/jquery.dataTables.min.js"></script>
		<script type="javascript" src="../js/dataTables.bootstrap.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>

</html>