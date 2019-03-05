<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $dbname = "smartparking";
 $error = array();
 $id=$_POST['id'];
 $plate=$_POST['plate'];
 $model=$_POST['model'];
 $fullname=$_POST['fullname'];
 $course=$_POST['Course'];
 $position=$_POST['position'];


 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 if($conn->connect_error) {
 die("connection failed:" . $conn->connect_error);
 }

$sql = "INSERT INTO registration (id, plate, fullname, Course, position, model)
VALUES ('$id','$plate', '$model', '$fullname', '$course', '$position')";
$comment = trim( $fullname);
$comment2 = trim ($id);
if( empty( $comment ) || empty($comment2)){
    echo "<script>alert('Fill up everything!!')</script>";
     echo "<script> location.replace('Registration.php'); </script>";
}
     else if (mysqli_query($conn, $sql)){
        echo "<script>alert('User registered succesfully!')</script>";
	echo "<script> location.replace('home.php'); </script>";
	 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "<script> location.replace('home.php'); </script>";

}
mysqli_close($conn);

?>