<?php

	$username = $_POST['username'];

	$conn = mysqli_connect('localhost', 'root', '', 'web');
	$sql= "select * from users where username like '%{$username}%'";

	$result = mysqli_query($conn, $sql);
   

	$data = "<table border=1> 
				<tr>
					<td>Name</td>
					<td>Contact</td>
					<td>User Name</td>
                    <td>Password</td>
                    <td>User type</td>
				</tr>";
                

	while ($row = mysqli_fetch_assoc($result)) {
			$data .= "<tr>
							<td>{$row['name']}</td>
							<td>{$row['contact']}</td>
							<td>{$row['username']}</td>
                            <td>{$row['password']}</td>
                            <td>{$row['usertype']}</td>
					</tr>";
	}

	$data .= "</table>";

	echo $data;
    
   

?>