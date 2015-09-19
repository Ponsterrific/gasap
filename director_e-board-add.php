<html>

	<head>
		<title>GASAP</title>

		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		
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
						<a class="display-user" href=""><img src=""/>Welcome Registrar!</a>
					</div>
					<div class="user-account-container">
						<a class="user-logout" href=""><img src=""/>Logout</a>
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
								<li><a href="director_index.php"><i class="fa fa-user"></i>DATA MANAGEMENT</a>
								</li>								
								<li><a href="director_evaluatiopnInput.php"  class="menu-selected"><i class="fa fa-clipboard"></i>EVALUATION</a></li>
								<li><a href="director_stud_list.php"><i class="fa fa-clipboard"></i>STUDENT</a></li>
								<li><a href="director_teacher_list.php"><i class="fa fa-clipboard"></i>TEACHER</a></li>
								
							</ul>
							<div class="main-content box-shadow col-md-12">
								<div class="content-block  box-shadow col-md-12">
									<div class="content-block-header"><h4>Update School Announcements</h4></div>

									<form>
									  <div class="form-group col-sm-offset-2 col-md-8">
									    <label for="ETitle">Title:</label>
									    <input type="text" class="form-control" id="EboardTitle">
									  </div>
									  
									  <div class="form-group col-sm-offset-2 col-md-8">
									    <label for="eContent">Content:</label>
									    <textarea class="form-control" rows="13"></textarea>
									  </div>
									  
									  		
									    <div class="col-sm-offset-2 col-sm-10">
									    	
									      <div class="add-button">
														<a href="director_e-board.php">
														<button type="button" class="btn btn-default">POST</button>
			  											</a>
												</div>

									     </div>
									</form>

								</div>
								<!-- END content-block -->

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
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>

</html>