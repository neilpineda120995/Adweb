<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "smartparking";
 
 
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if($conn->connect_error) {
 die("connection failed:" . $conn->connect_error);
 }
 
 if ($result = $conn->query("SELECT count(*) cc FROM registration")) {

     /* fetch the first row as result */
     $row = $result->fetch_assoc();

    printf(" %d \n", $row['cc']);

   /* close result set */
    $result->close();
 }

 /* close connection */
 $conn->close();
?>
