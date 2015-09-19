<html>

	<head>
		<title>GASAP</title>

		<link rel="stylesheet" type="text/css" href="../style.css">
		<link rel="stylesheet" type="text/css" href="teacher.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
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
								<li><a href="teacher_index.php" class="menu-selected"><i class="fa fa-user"></i>STUDENTS</a></li>
								<li><a href="teacher_schedule.php" ><i class="fa fa-clipboard"></i>FACULTY SCHEDULE</a></li>
								<li><a href="teacher_e-board.php"><i class="fa fa-list-alt"></i>E-BOARD ANNOUNCEMENTS</a></li>
								<li><a href="teacher_evaluation.php"><i class="fa fa-calendar"></i>EVALUATION</a></li>
								
							</ul>
							<div class="main-content box-shadow col-md-12">
								<div class="content-block box-shadow col-md-12">
									<div class="content-block-header"><h4>Compute Grade</h4></div>
									<div class="row">
										<div class="col-md-8">
											<div class="col-md-4">
												<ul class="personal-info">
													<li>STUDENT NAME:</li><br>
													<li>YEAR AND SCHEDULE:</li>
												</ul>
											</div>
											<div class="col-md-8">
												<ul class="personal-info">
													<li>DELA CRUZ, JUAN</li><br>
													<li>3ISD SOLID</li>
												</ul>
											</div>
										</div>
										<div class="col-md-4">
											<div class="profile-picture"><img src=""></div>
										</div>
										<!-- END row -->
										<div class="row padding-left-right">
											<div class="col-md-12">
												<!--<ul class="quarter-navigation">
													<li><a href>Q1</a></li>
													<li><a href>Q2</a></li>
													<li><a href>Q3</a></li>
													<li><a href>Q4</a></li>
												</ul>-->

												<div>

									  <!-- Nav tabs -->
									  <ul class="nav nav-tabs" role="tablist">
									    <li role="presentation" class="active"><a href="#q1" aria-controls="q1" role="tab" data-toggle="tab">Q1</a></li>
									    <li role="presentation"><a href="#q2" aria-controls="q2" role="tab" data-toggle="tab">Q2</a></li>
									    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Q3</a></li>
									    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Q4</a></li>
									  </ul>

									  <!-- Tab panes -->
									  <div class="tab-content">
									    <div role="tabpanel" class="tab-pane active" id="q1">
									    	<div class="grades-container white-content-block col-md-12">
													<div class="row">

														<div class="col-md-6">
															<h4>Class Standing</h4>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<label>Attendance:</label>
																			<input type="number" name="" id="">
																		</li>
																		<li>
																			<label>Recitation:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
														<div class="col-md-6">
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Seatwork:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Homework:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
													</div>
													<!-- END row -->
													<div class="row">
														<div class="col-md-6">
															<h4>Exam and Quizzes</h4>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Short Quiz:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
														<div class="col-md-6">
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<label>Major Exam:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Long Quiz:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
													</div>
													<!-- END row -->
												</div>
									    </div>
									    <div role="tabpanel" class="tab-pane" id="q2">
									    	<div class="grades-container white-content-block col-md-12">
													<div class="row">

														<div class="col-md-6">
															<h4>Class Standing</h4>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<label>Attendance:</label>
																			<input type="number" name="" id="">
																		</li>
																		<li>
																			<label>Recitation:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
														<div class="col-md-6">
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Seatwork:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Homework:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
													</div>
													<!-- END row -->
													<div class="row">
														<div class="col-md-6">
															<h4>Exam and Quizzes</h4>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Short Quiz:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
														<div class="col-md-6">
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<label>Major Exam:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
															<div class="border-white-content col-md-12">
																<form>
																	<ul class="input-label">
																		<li>
																			<input type="submit" id="" value="Add">
																			<label>Long Quiz:</label>
																			<input type="number" name="" id="">
																		</li>
																	</ul>
																</form>
															</div>
														</div>
													</div>
													<!-- END row -->
												</div>
									    </div>
									    <div role="tabpanel" class="tab-pane" id="messages">...</div>
									    <div role="tabpanel" class="tab-pane" id="settings">...</div>
									  </div>

									</div>
												
											</div>
										</div>
										<!-- END row -->
									</div>
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

		<script type="javascript" src="../script.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	</body>

</html>