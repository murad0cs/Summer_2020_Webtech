<?php
if(isset($_POST['submit']))
{

	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirmPassword = $_POST['confirmpassword'];
	$usertype = $_POST['usertype'];

	if(empty($name) || empty($contact) || empty($username) || empty($password) || empty($confirmPassword) || empty($usertype))
	{
		echo "null submission".'<a href="add.html"><u>Home</a>';
	}
	else 
	{

		if($password!=$confirmPassword)
		{
			echo "Match Password".'<a href="add.html"><u>Home</a>';
		}
		else
		{

			$conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
			if ($_POST['password'] == $_POST['confirmpassword'])
			{
				
				$sql1="INSERT INTO users (name, contact, username, password, usertype) VALUES ('".$_POST['name']."', '".$_POST['contact']."', '".$_POST['username']."', '".$_POST['password']."', '".$_POST['usertype']."')";
				mysqli_query($conn,$sql1);
				
				header('location: adminhome.php');
			}
			else
			{
				echo "Password doesn't match";
			}
			mysqli_close($conn);
		}
	}
}

else
{
	
	echo "error";
}

?>