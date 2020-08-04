<?php
	session_start();

	if(isset($_POST['submit'])){

		$userid = $_POST['userid'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$Usertype = $_POST['usertype'];
		


		if(empty($userid) || empty($password) || empty($email) || empty($Usertype)){
			echo "null submission";
		}else {

		
			/*$_SESSION['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;*/


			$file = fopen('user.txt', 'a');
			fwrite($file, $userid.'|'.$password.'|'.$email.'|'.$Usertype."/r/n");
			fclose($file);



			header('location: log.html');
		}

	}else{
		header("location: log.html");
	}


?>