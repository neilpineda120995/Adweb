
<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Parking</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="home.php">
			  		Smart Parking
			  	</a>
			
					</form>
				
					<ul class="nav pull-right">
						<li class="dropdown">
							
							
						</li>
						
						
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<img src="images/user.png" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Account Settings</a></li>
								<li class="divider"></li>
								<li><a href="login.php">Logout</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span3">
					<div class="sidebar">

						<ul class="widget widget-menu unstyled">
							<li class="active">
								<a href="home.php">
									<i class="menu-icon icon-dashboard"></i>
									Dashboard
								</a>
							</li>
					</ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
                                
                                <li><a href="Registration.php"><i class="menu-icon icon-paste"></i>Register</a></li>
                                <li><a href="Users.php"><i class="menu-icon icon-table"></i>Tables </a></li>
                                
                            </ul><!--/.widget-nav-->

						<ul class="widget widget-menu unstyled">
						
										</a>
									</li>
								</ul>
							</li>
							
								
								</a>
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->

<?php
include('connect.php');
?>
<?php include('error.php'); ?>
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Register</h3>
							</div>
							<div class="module-body">

									
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div>

									<br />



									<form class="form-horizontal row-fluid" method="post" action="adduser.php">
										<div class="control-group">
											<label class="control-label"  for="basicinput">ID</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">#</span><input class="span8" name="id" type="text" placeholder="ID No." readonly>       
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Plate</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">#</span><input class="span8" name="plate" type="text" placeholder="Plate No."required>       
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Model</label>
											<div class="controls">
												<div class="input-prepend">
													<span class="add-on">#</span><input class="span8" name="model" type="text" placeholder="Vechicle Model" required>       
												</div>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Full Name</label>
											<div class="controls">
												<input type="text" id="basicinput" name="fullname" placeholder="Full Name" class="span8"required>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Course</label>
											<div class="controls">
												<select tabindex="1" name="Course" data-placeholder="Select here.." class="span8"required>
													<option value="">Select here..</option>
													<option value="Information Technology">Information Technology</option>
													<option value="Business Management">Business Management</option>
													<option value="Travel Management">Travel Management</option>
													<option value="Civil Engineering">Civil Engineering</option>
												</select>
											</div>
										</div>

											<div class="control-group">
											<label class="control-label" for="basicinput">Position</label>
											<div class="controls">
												<select tabindex="1" name="position" data-placeholder="Select here.." class="span8"required>
													<option value="">Select here..</option>
													<option value="Student">Student</option>
													<option value="Employee">Employee</option>
													
												</select>
											</div>
										</div>
														
													</ul>
												</div>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button class="btn btn-primary" type="submit">Save</button>

											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2019 - Smart Parking</b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>