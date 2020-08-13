<?php
if(isset($_POST['submit']))
{
    $host="localhost";
    $user="root";
    $pass="";
    $db="intern";
    $username = $_POST['userName'];
    $password = $_POST['password'];
    $conn= mysqli_connect($host,$user,$pass,$db);
    
    $result = mysqli_query($conn,"select * from intern where User_Name ='$username' and Password ='$password'");
    
    $rows = mysqli_num_rows($result);
    echo $rows;
    if(!empty($rows))
    {
        session_start();
        $_SESSION['intern']='true';
        $_SESSION['userName']= $username;
    
        echo"Correct User name and password";
        
        header("refresh:1; url=home.php");
        
    }
    else{
        echo"User Name or Password is Wrong ";
        header("refresh:2; url=log.html");

    }
    
}
?>