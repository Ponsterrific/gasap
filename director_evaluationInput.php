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
								<li data-toggle=""><a href="director_index.php"><i class="fa fa-user"></i>DATA MANAGEMENT</a>
								</li>								
								<li><a href="director_evaluationInput.php"  class="menu-selected"><i class="fa fa-clipboard"></i>EVALUATION</a></li>
								<li><a href="director_stud_list.php"><i class="fa fa-clipboard"></i>STUDENT</a></li>
								<li><a href="director_teacher_list.php"><i class="fa fa-clipboard"></i>TEACHER</a></li>
								
							</ul>
							<div class="main-content box-shadow col-md-12">


									<div class="content-block box-shadow col-md-12">
										<div class="content-block-header"><h4>UPLOAD EVALUATION QUESTIONS</h4></div>		
										
										<table id="evaltable" class="table table-striped table-bordered" cellspacing="0" width="100%">
										        <thead>
										            <tr>
										                <th width="75%">Evaluation Questions</th>
										                <th>Evaluation Score</th>
										                
										            </tr>
										        </thead>
										        <tbody>
										            <tr>
										                <td>
										                	<label for="Question1eval">Question 1:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
										            </tr>

										                 <td>
										                	<label for="Question2eval">Question 2:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
										            </tr>

										                 <td>
										                	<label for="Question3eval">Question 3:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
										            </tr>

										                 <td>
										                	<label for="Question4eval">Question 4:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
										            </tr>

										                 <td>
										                	<label for="Question5eval">Question 5:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
										            </tr>

										                 <td>
										                	<label for="Question6eval">Question 6:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
										            </tr>

										                 <td>
										                	<label for="Question7eval">Question 7:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
										            </tr>

										                 <td>
										                	<label for="Question8eval">Question 8:</label> <input type="text" class="form-control" placeholder="Insert Question here..">
										                	 </td>
										                <td><br>
										                			<select class="form-control">
										                			  <option>Choose Here</option>
																	  <option>Excellent</option>
																	  <option>Good</option>
																	  <option>Fair</option>
																	  <option>Needs Improvement</option>
																	</select>
														</td>
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