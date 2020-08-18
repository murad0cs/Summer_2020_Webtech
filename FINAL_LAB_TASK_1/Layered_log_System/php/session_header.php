<?php
	session_start();

	if(!isset($_SESSION['username'])){
        session_start();
		header('location: ../views/login.php?error=invalid_request');
	}
?>