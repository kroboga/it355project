<?php
	session_start();
	$_SESSION['loggedin'] = true;
	header("Location: ".$_SERVER['HTTP_REFERER']);
?>