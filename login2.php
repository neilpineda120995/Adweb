   <?php
    
    include("connect.php");

    $username=$_POST['User'];
    $password=$_POST['Password'];
    $_SESSION['user']=$username; 
    
    $check_user=("select * from smartparkingdb WHERE User='$username' AND Password='$password'");
    
    $run=mysqli_query($conn, $check_user);  
  
   if  (mysqli_num_rows($run)==1)
  
    {  
      
        echo "<script>alert('Welcome $username')</script>";
       echo "<script> location.replace('home.php'); </script>";
       

        
    }else{  
      
      echo "<script>alert('Email or password is incorrect!') </script>";
      echo "<script> location.replace('indexx.php'); </script>";
   } 
        
?>