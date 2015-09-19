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
								<li><a href="director_dashboard.php"><i class="fa fa-certificate"></i>DASHBOARD</a></li>
								<li data-toggle=""><a href="director_index.php" ><i class="fa fa-user"></i>DATA MANAGEMENT</a>
								</li>								
								<li><a href="director_e-board.php"><i class="fa fa-clipboard"></i>EVALUATION</a></li>
								<li><a href="director_stud_list.php"><i class="fa fa-clipboard"></i>STUDENT</a></li>
								<li><a href="director_teacher_list.php" class="menu-selected"><i class="fa fa-clipboard"></i>TEACHER</a></li>
								
							</ul>
							<div class="main-content box-shadow col-md-12">
								
									
									

								




									<div class="content-block box-shadow col-md-12">
										<div class="content-block-header"><h4>List of Teachers</h4></div>
										<form class="form-inline">
											<div class="form-group col-md-12">
											   
											    <input type="text" class="form-control" id="SearchTeacher">
											    <button type="submit" class="btn btn-default">Search</button>
										  	</div>	
										</form>
										<br><br>
										<table id="evaltable" class="table table-striped table-bordered" cellspacing="0" width="100%">
										        <thead>
										            <tr>
										                <th>Teacher's Name</th>
										                <th>Year Handled</th>
										                <th>Schedule</th>
										                <th>Remarks</th>
										                
										                
										            </tr>
												 </thead>
										        <tbody>
										        
										            
										            <tr>
											            <td><a href="director_evaluation.html">Maria Esmeralda Ozawa</a></td>
										                <td>4th year</td>
										                <td>M 7:00PM - 3:00PM</td>
										                <td>Excellent</td>
										            </tr>   .

										            <tr>
											            <td><a href="Profile.html">Sasha Annastacia Grey</a></td>
										                <td>4th year</td>
										                <td>M 7:00PM - 3:00PM</td>
										                <td>Excellent</td>
										            </tr>    

										            <tr>
											            <td><a href="Profile.html">Lexi Emerald Belle</a></td>
										                <td>3rd year</td>
										                <td>M 7:00PM - 3:00PM</td>
										                <td>Excellent</td>
										            </tr>    

										            <tr>
											            <td><a href="Profile.html">Lady Bibi Jones</a></td>
										                <td>5th year</td>
										                <td>M 7:00PM - 3:00PM</td>
										                <td>Excellent</td>
										            </tr>    

										            <tr>
											            <td><a href="Profile.html">Tori Taylor Black</a></td>
										                <td>2nd year</td>
										                <td>M 7:00PM - 3:00PM</td>
										                <td>Excellent</td>
										            </tr>    

										            <tr>
											            <td><a href="Profile.html">Ashley Maria Olsen</a></td>
										                <td>1st year</td>
										                <td>M 7:00PM - 3:00PM</td>
										                <td>Excellent</td>
										            </tr>    

										            <tr>
											            <td><a href="Profile.html">Kimberly Anne West</a></td>
										                <td>1st year</td>
										                <td>M 7:00PM - 3:00PM</td>
										                <td>Excellent</td>
										            </tr>     

										             

										        </tbody>
										    </table>	
																
										
					
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