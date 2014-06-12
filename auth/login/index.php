<?php
	session_start();
	$_SESSION['loggedin'] = true;
	if (!is_null($_SESSION['loginRedirect']) && trim($_SESSION['loginRedirect']))
	{
		$temp = $_SESSION['loginRedirect'];
		$_SESSION['loginRedirect']) = "";
		header("Location: ".$temp);
	}
	header("Location: /");
?>