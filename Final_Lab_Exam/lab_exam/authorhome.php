<?php
session_start();
$conn = mysqli_connect('127.0.0.1', 'root', '', 'web');
$sql = "select * from users where username ='".$_SESSION['username']."'";
$result = mysqli_query($conn, $sql);
$user 	= mysqli_fetch_assoc($result);
echo "<h1> Welcome Home  ".$user['name']."</h1>";
?>
<html>
<head>
	<title> Online Blog System </title>
</head>
<body>

<a href="viewblog.php">View Blog</a><br>
<a href="updateblog.php">Update Blog</a><br>
<a href="deleteblog.php">Delete Blog</a><br>
<a href="Logout.php">Logout</a><br>
</body>

</html>