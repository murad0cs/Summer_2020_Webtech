<?php

if(isset($_GET['submit']))
{
    $gender=$_GET['gender'];
    if($gender=='')
    {
        echo"Empty";
    }
    else
    {
       echo"Your gender is:";
       echo"<br>";
        echo $gender;


    }
	
}
else
{
	
	
}
?>