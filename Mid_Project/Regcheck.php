<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '');
	$result = mysqli_query($conn, 'select * from users');
if(!$conn)
{
    
}
if(!mysqli_select_db($conn,'intern'))
{
    echo"Database is not created !!!!";
}
$Name = $_POST['name'];
$Email = $_POST['email'];
$Uname = $_POST['userName'];
$Password = $_POST['password'];
$Gender = $_POST['gender'];
$DOB = $_POST['birthday'];
$Phone = $_POST['phone'];
$User_Type = $_POST['userType'];
$alphats = array_merge(range('A', 'Z'), range('a', 'z'),array('.','/'));


if(strlen($Name)==null || strlen($Name)<2 || is_numeric($Name[0])==true)
{
    echo"Error Check Name";
    echo "<br>";


if(empty($Email) || !filter_var($Email, FILTER_VALIDATE_EMAIL))
{
    echo"Enter Valid Email";
    echo "<br>";

}
if(empty($Gender))
{
    echo"Gender must be selected";
    echo "<br>";

}
if(empty($Uname))
{
    echo"User name should be";
    echo "<br>";

}
if(empty($Phone))
{
    echo"Phone Number is needed";
    echo "<br>";

}
if(empty($DOB))
{
    echo"DOB must be selected";
    echo "<br>";

}
if(empty($User_Type))
{
    echo"User type must be selected";
    echo "<br>";

}
}

else{
$sql = "INSERT into intern (Name,Email,User_Name,Password,Gender,DOB,Phone,User_Type) VALUES ('$Name','$Email','$Uname','$Password','$Gender','$DOB','$Phone','$User_Type')";
    //echo"Submitted";
}


if(!mysqli_query($conn,$sql))
{
    echo"Not inserted";
    header("refresh:2; url=Reg.html");
}
else
{
    echo"Inserted";
    header("refresh:2; url=log.html");
}
//header("refresh:2; url=log.html");

?>