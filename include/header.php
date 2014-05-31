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
		<script>
		function showLogin()
		{
			$('#loginModal').modal();
		}
		</script>
	</head>
	<body>
		<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form role="form" action="/auth/login/index.php">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Login</h4>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control" id="email" placeholder="E-mail">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
						</div>
						<div class="modal-footer">
							<p><a href="/auth/register/">First time? Sign up!</a></p>
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
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
								echo "<li id=\"menuLogin\"><a href=\"javascript:showLogin();\">Register/Login</a></li>";
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="container">
