<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Smart Parking</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" >Smart Parking System </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                       
                        <ul class="nav pull-right">
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Login
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    
                                    <li class="divider"></li>
                                    <li><a href="Login.php">Login</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="home.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                
                            </ul>
                            <!--/.widget-nav-->
                            
                            
                            <ul class="widget widget-menu unstyled">
                               
                                
                                
                            </ul>
                            <!--/.widget-nav-->
                         
                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                   
                                </div>
                                <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                                
                                                
                                                </a>
                                            </div>
                                        </div>
                                        
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->
                            <div class="module">
                            
                            
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Data Table</h3>
                                </div>
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
    $sql = "SELECT * FROM time";
    $result = mysqli_query($conn, $sql);
 ?>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-striped  display"
                                        width="100%">
                                        <div align="center">
                <input type="text" name="search" id="search" class="form-control" placeholder=""/><!--search bar-->
                </div>
                                        <thead>
                                                                <tr>
                                            
                                            <th>Plate No.</th>
                                            <th>Full Name</th>
                                            <th>Vechicle Model</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
        if (mysqli_num_rows($result) > 0) {
          
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row["plate"] . "</td>";
            echo "<td>" . $row["fullname"] . "</td>";
            echo "<td>" . $row["vechicle"] . "</td>";
            echo "<td>" . $row["timein"] . "</td>";
            echo "<td>" . $row["timeout"] . "</td>";
            
            
            echo "</tr>";
          }
          
          
          
        } else {
          echo "0 results";
        }

        mysqli_close($conn);
      ?>  
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2019 Smart Parking System </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
