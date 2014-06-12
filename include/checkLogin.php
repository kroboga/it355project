<?php
	session_start();
	if (is_null($_SESSION['loggedin']) || !$_SESSION['loggedin'])
	{
		$_SESSION['loginRedirect'] = $_SERVER['REQUEST_URI'];
		header("Location: /auth/login/");
		exit();
	}
?>