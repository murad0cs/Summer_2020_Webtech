<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname 		= $_POST['userName'];
		$password 	= $_POST['password'];

		if(empty($uname) || empty($password)){
			echo "null submission";

		}else if( isset($_COOKIE['userName']) && isset($_COOKIE['password'])){
			
			if($uname == $_COOKIE['userName'] && $password == $_COOKIE['password']){
				

				setcookie('status', "OK", time()+3600, '/');
				header('location: DashBoard.php');

			}else{
				echo "Invalid username/password";
			}
			
		}else{
			echo "Record not found!";
		}

	}else{
		header("location: login.html?error=test");
	}


?>