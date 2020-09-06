<!DOCTYPE html>
<html>
<head>
	<title>Delete User</title>
</head>
<body>

	<form action="deletecheck.php" method="post">
		<fieldset>
			<legend>Delete User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
                
				<tr>
					<td></td>
					<td>
						<input type="submit" name="edit" value="Delete"> 
						<a href="adminhome.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>