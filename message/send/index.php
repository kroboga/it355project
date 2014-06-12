<?php 
	$page = "Dashboard";
	include "header.php"; 
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Send a Message</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<form role="form">
				<div class="form-group">
					<label for="to">To:</label>
					<input type="email" class="form-control" id="to" placeholder="Frank Frankenbotham &lt;frank@frank.com&gt;">
				</div>
				<div class="form-group">
					<label for="subject">Subject:</label>
					<input type="email" class="form-control" id="subject" placeholder="Message Subject">
				</div>
				<div class="form-group">
					<label for="to">Message:</label>
					<textarea class="form-control" rows="3"></textarea>
				</div>
			</form>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<a class="btn btn-lg btn-primary " href="/dashboard/" role="button">Send</a>
			<a class="btn btn-lg btn-primary " href="/dashboard/" role="button">Cancel</a>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
