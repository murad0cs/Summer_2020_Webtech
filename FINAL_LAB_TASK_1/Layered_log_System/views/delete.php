<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user = getByID($_GET['id']);	
	}else{
		header('location: all_user_list.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete  User</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$user['username']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$user['password']?>"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?=$user['email']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['id']?>">
						<input type="submit" name="delete" value="Delete"> 
						<a href="all_user_list.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>