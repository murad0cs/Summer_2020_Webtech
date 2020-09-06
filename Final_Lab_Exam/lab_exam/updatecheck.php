<?php
if(isset($_POST['edit']))
{

	$name = $_POST['name'];
	$contact = $_POST['contact'];
	$password = $_POST['password'];
	$username = $_POST['username'];
	

	if(empty($name) || empty($contact) || empty($password) || empty($username))
	{
		echo "null submission".'<a href="update.html"><u>Home</a>';
	}
	else 
	{
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
			
				
				$sql1="update users set name=''".$_POST['name']."'', password=''".$_POST['password']."'', email='{$user['email']}' where username={$user['username']}";
				
				
			
				
			
			mysqli_close($conn);
            header('location: adminhome.php');
		
	}
}

else
{
	
	echo "error";
}

?>