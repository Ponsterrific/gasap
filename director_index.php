<html>
<?php 
	function errorAccess(){
			print'<script type="text/javascript">alert("Access denied!")</script>';
			print '<script>window.location.assign("index.php");</script>';
		}
		session_start();
		if(isset($_SESSION['administrator']))
		{
			$user = $_SESSION['administrator'];
		}
		else 
		{
			errorAccess();
		}
		
?>
	<head>
		<title>GASAP</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
		
	</head>

	<body>

		<div id="wrapper">
			<header>
				 <div class="row">
					<ul class="main-nav">
					</ul>
				</div>
				<div class="sub-header col-md-12">
					<div class="display-user-container">
						<a class="display-user" href=""><img src=""/>Welcome <?php echo $user ?>!</a>
					</div>
					<div class="user-account-container">
						<a class="user-logout" href="logout.php"><img src=""/>Logout</a>
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
								<li><a href="director_dashboard.php"><i class="fa fa-certificate"></i>DASHBOARD</a></li>
								<li><a href="index_director.php" class="menu-selected"><i class="fa fa-user"></i>DATA MANAGEMENT</a>
								</li>
								<li>
									<a class="dropdown-toggle" href="#!" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									    STUDENT
									    <span class="caret"></span>
									  </a>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									    <li><a href="director_stud_list.php">Grade 1</a></li>
									    <li><a href="director_stud_list.php">Grade 2</a></li>
									    <li><a href="#">Grade 3</a></li>
									  </ul>
								</li>								
								<li><a href="director_e-board.php"><i class="fa fa-clipboard"></i>EVALUATION</a></li>
								<li><a href="director_teacher_list.php"><i class="fa fa-clipboard"></i>TEACHER</a></li>
								
							</ul>
							<div class="main-content box-shadow col-md-12">
								<div class="content-block box-shadow col-md-12">
									<div class="content-block-header"><h4>Student List</h4></div>
									<div class="wrapper">
										<div class="col-md-12">
												<div class="add-button">
														<a href="director_add_stud.php">
														<button type="button" class="btn btn-default">ADD STUDENT</button>
			  											</a>
												</div>
										</div>
									<div class="col-md-12">
										<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
								        <thead>
								            <tr>
								                <th>Student Name</th>
								                <th>Year level</th>
								                <th>Schedule</th>
								            
								            </tr>
								        </thead>
								        <tbody>
								            <tr>
								                <td><a href="edit_page.html">Juan Dela Cruz</a></td>
								                <td>3ISD</td>
								                <td>M 4:00PM - 9:00PM</td>
								               
								                
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