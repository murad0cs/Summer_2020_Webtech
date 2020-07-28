<?php
	session_start();

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$email = $_POST['email'];
		
        
        $gender = $_POST['gender'];
        $D = $_POST['date'];
        $M = $_POST['month'];
        $Y = $_POST['year'];
      
        
		


			$user = [
						'name'=>$name,
						'email'=>$email,
						
               
                'gender'=>$gender,
                'date'=>$D,
                'month'=>$M,
                'year'=>$Y,
               
					];

			/*$_COOKIE['uname'] 		= $uname;
			$_SESSION['email'] 		= $email;
			$_SESSION['password'] 	= $password;
			$_SESSION['user'] 		= $user;*/

			
			setcookie('email', $email, time()+3600, '/');
			
            setcookie('gender', $gender, time()+3600, '/');
            setcookie('date', $D, time()+3600, '/');
            setcookie('month', $M, time()+3600, '/');
            setcookie('year', $Y, time()+3600, '/');
            setcookie('name', $name, time()+3600, '/');

            

			header('location: login.html');
		}

	else{
		
        echo"Please enter the values";
	}


?>