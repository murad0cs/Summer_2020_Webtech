<?php

if(isset($_GET['submit']))
{
    $id=$_GET['id'];
    $file =$_GET['file'];
    echo"Id is : ";
    echo $id;
    echo"<br>";
    echo"Picture file location is: ";
    echo $file;	
}
else
{
	echo"Hi";
	
}
?>