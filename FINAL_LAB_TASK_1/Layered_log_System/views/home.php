<?php
	require_once('../php/session_header.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome Home!<?=$_SESSION['username']?></h1> 
	<a href="../views/create.php">Create New User</a> |
	<a href="../views/all_user_list.php">User List</a> |
	<a href="../php/logoutController.php">Logout</a>
    <a href="../views/ccreate.php">Create Company Info</a><br> 
    <a href="../views/allcompany.php"> Company Info</a><br> 

</body><?php
	require_once('../php/session_header.php');
?>

