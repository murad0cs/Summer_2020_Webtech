<?php
session_start();
if(isset($_POST['edit']))
{

	$blog = $_POST['blog'];

	
	

	if(empty($blog))
	{
		echo "null submission".'<a href="update.html"><u>Home</a>';
	}
	else 
	{
			$conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
			
				
			$sql1="update blog set blog = '$blog' where  username ='".$_SESSION['username']."'";
				
			mysqli_query($conn,$sql1);			
			mysqli_close($conn);
            header('location: adminhome.php');
		
	}
}

else
{
	
	echo "error";
}

?>