<?php
	session_start();

	if(isset($_POST['submit'])){

		
		        $password1	= $_POST['password1'];
        		$password2 	= $_POST['password2'];
        		$password3	= $_POST['password3'];


        

		if(empty($password1) || empty($password2) ||  empty($password3) ){
			echo "null submission";

		}else if(isset($_COOKIE['password'])){
			
			if($password1 == $_COOKIE['password']){
				

				setcookie('status', "OK", time()+3600, '/');
				header('location: change_password.html');

			}else{
				echo "Invalid password";
			}
			
		}else{
			echo "Record not found!";
		}

	}else{
		header("location: change_password.html?error=test");
	}


?>