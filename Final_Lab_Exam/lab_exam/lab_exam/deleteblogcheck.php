<?php
if(isset($_POST['edit']))
{

	
	
	

	
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
			
				
			$sql1="DELETE FROM blog WHERE username  ='".$_SESSION['username']."'";
            mysqli_query($conn,$sql1);
				
						
			mysqli_close($conn);
            header('location: authorhome.php');
		
	
}

else
{
	
	echo "Something wrong";
}

?>