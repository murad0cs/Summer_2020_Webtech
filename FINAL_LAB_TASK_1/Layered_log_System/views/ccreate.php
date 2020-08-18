<?php
	require_once('../php/session_header.php');
	if (isset($_GET['error'])) {
		
		if($_GET['error'] == 'db_error'){
			echo "Something went wrong...please try again";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add user</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Create Company Info</legend>
			<table>
				<tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name"></td>
				</tr>
				<tr>
					<td>Profile Description</td>
					<td><input type="text" name="profile_description"></td>
				</tr>
				<tr>
					<td>Industry</td>
					<td><input type="text" name="iindustry"></td>
				</tr>
                <tr>
					<td>Company Website</td>
					<td><input type="text" name="company_website"></td>
				</tr>
                <tr>
					<td>Company Logo</td>
					<td><input type="file" name="company_logo"></td>
				</tr>
                <tr>
					<td>User Account id</td>
					<td><input type="number" name="user_account_id"></td>
				</tr>
                
				<tr>
					<td></td>
					<td>
						<input type="submit" name="create_company" value="Create"> 
						<a href="home.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>