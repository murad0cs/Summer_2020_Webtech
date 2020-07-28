<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
        $cpass = $_POST["confirmPassword"];
        $gender = $_POST['gender'];
        $D = $_POST['date'];
        $M = $_POST['month'];
        $Y = $_POST['year'];
        $uname = $_POST['userName'];
        

		//$enc = md5($password);
        //$enc = md5($cpass);

		if(empty($name) || empty($password) || empty($cpass) || empty($uname) || empty($email) || empty($gender) || empty($D) || empty($M) || empty($Y)){
			echo "null submission";
		}else {

			$user = [
						'name'=>$name,
						'email'=>$email,
						'password'=>$password,
                'confirmPassword'=> $cpass,
                'gender'=>$gender,
                'date'=>$D,
                'month'=>$M,
                'year'=>$Y,
                'userName'=>$uname,
					];

			/*$_COOKIE['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;*/

			setcookie('userName', $uname, time()+3600, '/');
			setcookie('email', $email, time()+3600, '/');
			setcookie('password', $password, time()+3600, '/');
            setcookie('confirmPassword', $cpass, time()+3600, '/');
            setcookie('gender', $gender, time()+3600, '/');
            setcookie('date', $D, time()+3600, '/');
            setcookie('month', $M, time()+3600, '/');
            setcookie('year', $Y, time()+3600, '/');
            setcookie('name', $name, time()+3600, '/');

            

			header('location: login.html');
		}

	}else{
		
        echo"Please enter the values";
	}


?>