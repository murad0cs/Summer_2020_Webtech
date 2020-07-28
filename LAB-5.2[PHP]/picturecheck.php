<?php
	session_start();

	if(isset($_POST['submit'])){

        $picture = $_POST['picture'];
            if(empty($picture))
            {
               echo"Null submission"; 
            }
        else
        {
            $user = [
						'picture'=>$picture,]
                setcookie('picture', $picture, time()+3600, '/');
        }
    }else
        {
            echo"Enter please";
        }