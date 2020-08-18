<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Company List</title>
</head>
<body>

	<a href="home.php">Back</a> |
	<a href="../php/logoutController.php">Logout</a> 
	
	<h3>Company list</h3>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>Company Name</td>
			<td>Profile Description</td>
			<td>Industry</td>
			<td>Comapany Websites</td>
			<td>Company logo</td>
            <td>User Account id</td>
            <td>Action</td>
		</tr>

		<?php  
			$user1 = getAllUser1();
			for ($i=0; $i != count($user1); $i++) {  ?>
		<tr>
			<td><?=$user1[$i]['id']?></td>
			<td><?=$user1[$i]['company_name']?></td>
			<td><?=$user1[$i]['profile_description']?></td>
			<td><?=$user1[$i]['industry']?></td>
			<td><?=$user1[$i]['company_website']?></td>
            <td><img src ="<?=$user1[$i]['company_logo']?>" width ='100',height ='100'></td>
            <td><?=$user1[$i]['user_account_id']?></td>
			<td>
				<a href="editcompany.php?id=<?=$user1[$i]['id']?>">Edit</a> |
				<a href="deletecompany.php?id=<?=$user1[$i]['id']?>">Delete</a> 
			</td>
		</tr>

		<?php } ?>
		
	</table>
</body>
</html>