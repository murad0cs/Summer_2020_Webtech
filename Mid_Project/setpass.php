<?php
if(isset($_POST['submit']))
{
    $Email = $_COOKIE['email'];
    $password = $_POST['password'];
    if(empty($password))
    {
        echo"Please Insert password";
    }
    else
    {
    $host="localhost";
    $user="root";
    $pass="";
    $db="intern";
    
  
    $conn= mysqli_connect($host,$user,$pass,$db);
    
    $result = mysqli_query($conn,"UPDATE intern SET Password = '$password'  where Email ='$Email'");
    
   
        if(!empty($result)){
            header('location: log.html' );
        }
    }
}
?>
