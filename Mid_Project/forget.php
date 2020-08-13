<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    if(empty($email))
    {
        echo"Please Insert email";
    }
    else
    {
        setcookie("email",$email,time()+5000,'/');
        header('location: setpass.html' );
    }
}
?>
