<?php
if(isset($_GET['submit']))
{
	$email=$_GET['email'];
	if($email=="")
	{
		echo "Email Can not be empty";
	}
	else
	{
        
		echo $email;
	}

}
else{
    echo"Not inserted";
}
?>