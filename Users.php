<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Smart Parking System</title>
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

					<ul class="nav pull-right">
						<li class="dropdown">
							
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

						
							</li>
						</ul>

					</div><!--/.sidebar-->
				</div><!--/.span3-->
<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "smartparking";
 
 
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if($conn->connect_error) {
 die("connection failed:" . $conn->connect_error);
 }
$sql = "SELECT * FROM registration";
    $result = mysqli_query($conn, $sql);
 ?>

				<div class="span9">
					<div class="content">

						
						<div class="module">
							<div class="module-head">
								<h3>User Table</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									<thead>
										<tr>
											<th>ID No.</th>
											<th>Plate No.</th>
											<th>Full Name</th>
											<th>Course</th>
											<th>Position</th>
										</tr>
									</thead>
									<tbody>
										<?php
        									if (mysqli_num_rows($result) > 0) {
          
         									 while($row = mysqli_fetch_assoc($result)) {
           									 echo "<tr>";
           									 echo "<td>" . $row["id"] . "</td>";
            								 echo "<td>" . $row["plate"] . "</td>";
            								 echo "<td>" . $row["fullname"] . "</td>";
            								 echo "<td>" . $row["Course"] . "</td>";
           									 echo "<td>" . $row["position"] . "</td>";
            
           									 echo "</tr>";
         								 }
          
          
          
        } else {
          echo "0 results";
        }

        mysqli_close($conn);
      ?>  
										
									</tfoot>
								</table>
							</div>
						</div><!--/.module-->

					<br />
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2019 - Smart Parking </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="scripts/datatables/jquery.dataTables.js"></script>
	<script>
		$(document).ready(function() {
			$('.datatable-1').dataTable();
			$('.dataTables_paginate').addClass("btn-group datatable-pagination");
			$('.dataTables_paginate > a').wrapInner('<span />');
			$('.dataTables_paginate > a:first-child').append('<i class="icon-chevron-left shaded"></i>');
			$('.dataTables_paginate > a:last-child').append('<i class="icon-chevron-right shaded"></i>');
		} );
	</script>
</body>