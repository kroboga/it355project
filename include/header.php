<?php
	session_start();
	if (array_key_exists('loggedin', $_SESSION) && $_SESSION['loggedin'])
		$loggedin = true;
	else
		$loggedin = false;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="/assets/ico/favicon.ico">
		<title>IT355-Lab4</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<style>
			body {
				padding-top: 50px;
			}
			.starter-template {
				padding: 40px 15px;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">V-Hub</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li id="menuHome"><a href="/">Home</a></li>
						<li id="menuFindOpportunity"><a  href="/search/opportunity/">Find Opportunity</a></li>
						<li id="menuDashboard"><a href="/dashboard/">Dashboard</a></li>
						<li id="menuAbout"><a href="/about/">About Us</a></li>
						<?php
							if ($loggedin)
								echo "<li id=\"menuLogin\"><a href=\"/auth/logout/\">Logout</a></li>";
							else
								echo "<li id=\"menuLogin\"><a href=\"/auth/login\">Register/Login</a></li>";
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
