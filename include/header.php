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
		<title>V-Hub.com</title>
		<!-- css includes -->
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link rel='stylesheet' type='text/css' href='/css/bootstrap-theme.min.css'>
		<link rel='stylesheet' type='text/css' href='/css/style.css'>
		<link rel="stylesheet" type="text/css" href="/css/bootstrap.css" />
		<link rel="stylesheet" href="css/social-buttons.css">
   		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
   		<link rel="stylesheet" type="text/css" media="all" href="/css/daterangepicker-bs3.css" />
   		
	
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
		
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
					<form role="form" action="/auth/login/">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel">Login</h4>
						</div>
						<div class="modal-body">					
							<div class="form-group">
								<label for="email">Email address</label>
								<input type="email" class="form-control" id="email" placeholder="E-mail">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" id="password" placeholder="Password">
							</div>
						</div>
						<button type="submit" class="btn btn-facebook"><i class="fa fa-facebook"></i> | Connect with Facebook</button>
				<button type="submit" class="btn btn-twitter"><i class="fa fa-twitter"></i> | Connect with Twitter</button>

						<div class="modal-footer">
							<p><a href="/auth/register/">First time? Sign up!</a></p>
							<button type="submit" class="btn btn-primary">Login</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">V-Hub</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav">
						<li id="menuHome"><a href="/">Home</a></li>
						<li id="menuFindOpportunity"><a  href="/search/opportunity/">Find Opportunity</a></li>
						<li id="menuDashboard"><a href="/dashboard/">My Profile</a></li>
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
