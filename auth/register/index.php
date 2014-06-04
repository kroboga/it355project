<?php 
	$page = "template";
	include "header.php"; 
?>
<div class="container">
	
<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" role="form" _lpchecked="1" action="/dashboard/" method="post">
				<div class="input-group">
					<span class="input-group-addon">Name:</span>
					<input id="name" type="text" class="form-control" placeholder="Location">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Email:</span>
					<input id="email" type="number" class="form-control" value="10" min="1" step="1" pattern="\d+">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Password:</span>
					<input id="password" type="password" class="form-control" placeholder="Name">
				</div>
				<br>
				<div class="input-group">
					<span class="input-group-addon">Confirm:</span>
					<input id="confirm" type="password" class="form-control" placeholder="Name">
				</div>
				<div class="input-group">
					<button class="btn btn-primary" type="submit">Edit Profile</button>
				</div>
			</form>
			<br>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
