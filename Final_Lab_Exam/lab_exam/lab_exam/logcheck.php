<?php
	session_start();

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];

		if(empty($username) || empty($password)){
			echo "null submission";

		}
		else
		{
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
			$sql = "select * from users where username='".$username."' and password='".$password."'";
			$result = mysqli_query($conn, $sql);
			$user 	= mysqli_fetch_assoc($result);
			
			if(!empty($user)){
				$_SESSION['status']  = "Ok";
				$_SESSION['username']=$username;
				echo $user['usertype'];
				if($user['usertype']=="admin")
				{
					header('location: adminhome.php');
				}
				else
				{
					header('location: authorhome.php');
				}
			}
			else
			{
				echo "Null submission".'<a href="log.html"><u>Home</a>';
			}
			
		}

	}
	else{
		header("location: login.html");
	}


?>