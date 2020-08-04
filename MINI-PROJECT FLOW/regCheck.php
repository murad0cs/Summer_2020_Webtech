<?php
	session_start();

	if(isset($_POST['submit'])){

		$uname = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$Usertype = $_POST['usertype'];
		


		if(empty($uname) || empty($password) || empty($email) || empty($Usertype)){
			echo "null submission";
		}else {

		
			/*$_SESSION['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;*/


			$file = fopen('user.txt', 'a');
			fwrite($file, $uname.'|'.$password.'|'.$email.'|'.$Usertype."/r/n");
			fclose($file);



			header('location: log.html');
		}

	}else{
		header("location: log.html");
	}


?>