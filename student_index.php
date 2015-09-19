<html>

<?php 
	function errorAccess(){
			print'<script type="text/javascript">alert("Access denied!")</script>';
			print '<script>window.location.assign("index.php");</script>';
		}
		session_start();
		
		if(isset($_SESSION['student']))
		{
			$user = $_SESSION['student'];
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
						<a class="display-user" href=""><img src=""/>Hi <?php echo $user ?></a>
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
					<div class="main col-md-10 col-xs-12">
						<div class="row">
							<ul class="menu-navigation hidden-xs">
								<li><a href="student_index.php" class="menu-selected"><i class="fa fa-user"></i>PROFILE</a></li>
								<li><a href="student_grades.php"><i class="fa fa-list-alt"></i>GRADES</a></li>
								<li><a href="student_schedule.php"><i class="fa fa-calendar"></i>SCHEDULE</a></li>
								<li><a href="student_e-board.php"><i class="fa fa-clipboard"></i>E-BOARD</a></li>
								<li><a href="student_evaluation.php"><i class="fa fa-certificate"></i>EVALUATION</a></li>
							</ul>
							<div class="main-content box-shadow col-md-12 col-xs-12">
								<div class="content-block box-shadow col-md-12 col-xs-12">
									<div class="content-block-header"><h4>Personal Information</h4></div>
									<div class="col-md-8 col-xs-12">
										<div class="col-md-4 col-xs-6 remove-padding">
											<ul class="personal-info">
												<li>LAST NAME:</li>
												<li>FIRST NAME:</li>
												<li>MIDDLE NAME:</li>
												<li>BIRTH DATE:</li>
												<li>BIRTH PLACE:</li>
												<li>GENDER:</li>
												<li>RELIGION:</li>
												<li>ADDRESS LINE 1:</li>
												<li>ADDRESS LINE 2:</li>
												<li>CILVIL STATUS:</li>
											</ul>
										</div>
										<div class="col-md-8 col-xs-6 remove-padding">
											<ul class="personal-info">
												<li>DELA CRUZ</li>
												<li>JUAN</li>
												<li>T.</li>
												<li>11/01/1995</li>
												<li>SAMPALOC, MANILA</li>
												<li>MALE</li>
												<li>ROMAN CATHOLIC</li>
												<li>SA PUSO MO</li>
												<li>TAWI-TAWI</li>
												<li>SINGLE</li>
											</ul>
										</div>
									</div>
									<div class="col-md-4 col-xs-12">
										<div class="profile-picture"><img src=""></div>
										<div class="col-md-12 col-xs-12">
											<div class="col-md-6 col-xs-6 remove-padding">
												<ul class="personal-info float-right">
													<li>NATIONALITY:</li>
													<li>LEGAL STATUS:</li>
													<li>POSTAL CODE:</li>
												</ul>
											</div>
											<div class="col-md-6 col-xs-6 remove-padding">
												<ul class="personal-info float-right">
													<li>FILIPINO</li>
													<li>CHERVELOO</li>
													<li>1230</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- END content-block -->
								<div class="content-block box-shadow col-md-12 col-xs-12">
									<div class="content-block-header"><h4>Parent/Guardian Information</h4></div>
									<div class="col-md-6 col-xs-12">
										<div class="col-md-4 col-xs-4 remove-padding">
											<ul class="personal-info">
												<li>FATHER:</li>
												<li>MOTHER:</li>
												<li>ADDRESS:</li><br>
												<li>CONTACT NO:</li>
											</ul>
										</div>
										<div class="col-md-8 col-xs-8 remove-padding">
											<ul class="personal-info">
												<li>JUANCHO DELACRUZ</li>
												<li>JUANNA DELACRUZ</li>
												<li>SMOKEY MOUNTAIN</li><br>
												<li>091234567</li>
											</ul>
										</div>
									</div>
									<div class="col-md-6 col-xs-12">
										<div class="col-md-12 col-xs-12">
											<div class="col-md-6 col-xs-6 remove-padding">
												<ul class="personal-info">
													<li>GUARDIAN:</li>
													<li>ADDRESS:</li><br>
													<li>PHONE (HOME):</li>
													<li>PHONE (WORK):</li>
												</ul>
											</div>
											<div class="col-md-6 col-xs-6 remove-padding">
												<ul class="personal-info">
													<li>MAH NIGGA</li>
													<li>CHERVELOO</li><br>
													<li>1234567</li>
													<li>7654321</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- END content-block -->
								<div class="content-block  box-shadow col-md-12 col-xs-12">
									<div class="content-block-header"><h4>Educational Background</h4></div>
									asdasdasd
								</div>
								<!-- END content-block -->
							</div>
						</div>
					</div>
					<div class="right-sidebar-container remove-padding box-shadow col-md-2 col-xs-12">
						<div class="notification-header col-md-12 col-xs-12">
							<i class="fa fa-bell"></i>
							<h2>NOTIFICATIONS</h2>
						</div>
					</div>
				</div>
			</div>

	    </div>

		<script type="javascript" src="script.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>

</html>