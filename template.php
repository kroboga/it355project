<?php 
	$page = "template";
	include 'header.php'; 
?>

<!-- head didn't work in the header.php, put it in the template instead -->
<head>
	<!-- css includes -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme-min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/JJstyle.css">
	<link rel="stylesheet" type="text/css" href="css/SethStyle.css">
	<link rel="stylesheet" type="text/css" href="css/KirkStyle.css">

	<!-- Javascript includes -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" href="js/bootstrap.js"></script>
</head>


<!-- even though our amazing desing will be to awesome to be contatined, this div tries to anyway -->
<div class="container">

	<!-- format of 1 row and 5 columns, we can change this as neccesarry, I felt it a good start -->
	<div class="row">
		
		<!-- column 1 - far left -->
		<div class="col-md-5">

		</div>

		<!-- column 2 - left of center -->
		<div class="col-md-5">

		</div>

		<!-- column 3 - center -->
		<div class="col-md-5">
			<h1>This is a page title</h1>
			<p>This is some page content</p>
		</div>

		<!-- column 4 - right of center -->
		<div class="col-md-5">

		</div>

		<!-- column 5 - far right -->
		<div class="col-md-5">

		</div>
	
	<!-- end of row -->
	</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>