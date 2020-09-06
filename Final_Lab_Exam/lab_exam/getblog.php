<?php

	$username = $_POST['username'];

	$conn = mysqli_connect('localhost', 'root', '', 'web');
	$sql= "select * from blog where username like '%{$username}%'";

	$result = mysqli_query($conn, $sql);
   

	$data = "<table border=1> 
				<tr>
					<td>User Name</td>
					<td>Blog</td>
					
				</tr>";
                

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
							<td>{$row['username']}</td>
							<td>{$row['blog']}</td>
							
					</tr>";
	}

	$data .= "</table>";

	echo $data;
    
   

?>