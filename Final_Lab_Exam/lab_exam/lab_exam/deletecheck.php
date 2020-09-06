<?php
if(isset($_POST['edit']))
{

	
	$username = $_POST['username'];
	

	
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
			
				
			$sql1="DELETE FROM users WHERE username = '$username' ";
            mysqli_query($conn,$sql1);
				
						
			mysqli_close($conn);
            header('location: adminhome.php');
		
	
}

else
{
	
	echo "error";
}

?>