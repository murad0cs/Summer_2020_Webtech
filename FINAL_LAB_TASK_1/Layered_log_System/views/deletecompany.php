<?php
	require_once('../php/session_header.php');
	require_once('../service/userService.php');

	if (isset($_GET['id'])) {
		$user1 = getByID1($_GET['id']);	
	}else{
		header('location: allcompany.php');
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete  Comapny</title>
</head>
<body>

	<form action="../php/userController.php" method="post">
		<fieldset>
			<legend>Delete Company</legend>
			<table>
           
            <tr>
					
                <td>Company Name</td>
                <td><input type="text" name="company_name" value="<?=$user1['company_name']?>"></td>

				</tr>
				<tr>
					<td>Profile Description</td>
                    <td><input type="text" name="profile_description" value="<?=$user1['profile_description']?>"></td>

				</tr>
				<tr>
					<td>Industry</td>
                    <td><input type="text" name="industry" value="<?=$user1['industry']?>"></td>

				</tr>
                <tr>
					<td>Company Website</td>
                    <td><input type="text" name="company_website" value="<?=$user1['company_website']?>"></td>

				</tr>
                <tr>
					<td>Company Logo</td>
                    <td><input type="file" name="company_logo" value="<?=$user1['company_logo']?>"></td>

				</tr>
                <tr>
					<td>User Account id</td>
                    <td><input type="text" name="user_account_id" value="<?=$user1['user_account_id']?>"></td>

				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user1['id']?>">
						<input type="submit" name="delete_company" value="Delete"> 
						<a href="allcompany.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>