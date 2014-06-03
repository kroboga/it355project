<?php 
	$page = "Dashboard";
	include 'header.php'; 
?>
<div class="container">
	<!-- format of 1 row and 5 columns, we can change this as neccesarry, I felt it a good start -->
	<div class="row">
		<div class="col-md-offset-4">
			<h1>User Dashboard</h1>
		</div>
	</div>
	<div class="row">
		<!-- column 1 - far left -->
		<div class="col-md-4">
			<img src="http://placehold.it/150x150">
			<button type="button" class="btn btn-primary">Edit Profile</button>
			<button type="button" class="btn btn-primary">Create Opportunity</button>
			<button type="button" class="btn btn-primary">Inbox</button>
		</div>

		<!-- column 2 - center -->
		<div class="col-md-4">
			<h1>This is a page title</h1>
			<p>This is some page content</p>
		</div>

		<!-- column 3 - right of center -->
		<div class="col-md-4">
			<h1>This is a page title</h1>
			<p>This is some page content</p>
		</div>
	
	<!-- end of row -->
	</div>
</div>
<?php include 'footer.php'; ?>
