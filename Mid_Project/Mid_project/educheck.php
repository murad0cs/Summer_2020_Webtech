<?php
session_start();

	if(isset($_POST['submit'])){

		$uname = $_POST['name'];
		$Inst = $_POST['inst'];
		$date = $_POST['acm'];

		

		if(empty($uname) || empty($Inst) || empty($date)){
			echo "null submission";
		}else {

			$user = [
						'name'=>$uname,
						'inst'=>$Inst,
						'acm'=>$date
					];

			

			setcookie('name', $uname, time()+3600, '/');
			setcookie('inst', $Inst, time()+3600, '/');
			setcookie('acm', $date, time()+3600, '/');
            echo"Inserted Information";
            echo "<br>";
            
            
            
            echo "Name of the Degree : " . $_COOKIE['name']; 
            echo "<br>";
            echo "Instituition       :     " . $_COOKIE['inst'];
            echo "<br>";
            echo "Date of accomplish : " . $_COOKIE['acm'];
            echo "<br>";

			header("refresh:10; url= eduqua.html");
		}

	}else{
		header("location: login.html");
        echo"Error";
	}


?>