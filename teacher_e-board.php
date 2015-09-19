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
						<a class="display-user" href=""><img src=""/>Hi User!</a>
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
								<li><a href="teacher_index.php"><i class="fa fa-user"></i>STUDENTS</a></li>
								<li><a href="teacher_schedule.php" ><i class="fa fa-clipboard"></i>FACULTY SCHEDULE</a></li>
								<li><a href="teacher_e-board.php"   class="menu-selected"><i class="fa fa-list-alt"></i>E-BOARD ANNOUNCEMENTS</a></li>
								<li><a href="teacher_evaluation.php"><i class="fa fa-calendar"></i>EVALUATION</a></li>

							<div class="main-content box-shadow col-md-12">
								<div class="content-block  box-shadow col-md-12">
									<div class="content-block-header"><h4>Update Class Announcements</h4></div>

									<form>
									  <div class="form-group col-sm-offset-2 col-md-8">
									    <label for="ETittle">Title:</label>
									    <input type="text" class="form-control" id="EboardTitle">
									  </div>
									  
									  <div class="form-group col-sm-offset-2 col-md-8">
									    <label for="eContent">Content:</label>
									    <textarea class="form-control" rows="13"></textarea>
									  </div>
									  
									  		
									    <div class="col-sm-offset-2 col-sm-10">
									      <button type="submit" class="btn btn-default">Post</button>
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

		<script type="javascript" src="script.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>

</html>