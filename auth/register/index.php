<?php 
	$page = "template";
	include "header.php"; 
	$_SESSION['loggedin'] = true;
?>
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form role="form" action="/profile/edit/">
				<div class="modal-header">
					<h4 class="modal-title" id="myModalLabel">Register</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="exampleInputEmail1">Name</label>
						<input type="email" class="form-control" id="email" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
						<input type="email" class="form-control" id="email" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Confirm</label>
						<input type="password" class="form-control" id="confirm" placeholder="Confirm">
					</div>
				</div>

				<button type="submit" class="btn btn-facebook"><i class="fa fa-facebook"></i> | Connect with Facebook</button>
				<button type="submit" class="btn btn-twitter"><i class="fa fa-twitter"></i> | Connect with Twitter</button>

				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Register</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>$('#registerModal').modal();</script>
<?php include 'footer.php'; ?>
