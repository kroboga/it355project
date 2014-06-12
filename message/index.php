<?php 
	$page = "template";
	include "header.php"; 
?>
<div class="container">
<div class="row">
		<div class="col-md-12">
			<h1>Message Inbox</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-striped">
					<tr>
						<th>Time</th>
						<th>From</th>
						<th>Subject</th>
						<th>Delete</th>
					</tr>
					<tr>
						<td>May 26, 2013 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">Volunteer into Darkness</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td>Nov 22, 1996 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">Volunteer: First Contact</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td>Nov 18, 1994 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">Volunteer Generations</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td>Jan 26, 1991 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">The Undiscoverd Volunteer</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td>Jun 9, 1989 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">The Final Volunteer</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td>Nov 26, 1986 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">The Voyage to the Volunteer</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td>Jun 1, 1984 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">The Search for Volunteers</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
					<tr>
						<td>Jun 4, 1982 1:23 am</td>
						<td>Frank Frankenbotham</td>
						<td><a href="/message/view/">The Wrath of the Volunteer</a></td>
						<td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
			</table>
		</div>
	</div>
	<div class="row">
		<div class="col-md-10">
			&nbsp;
		</div>
		<div class="col-md-2">
			<a class="btn btn-lg btn-primary " href="/message/send/" role="button">New Message</a>
		</div>
	</div>

</div>
<?php include 'footer.php'; ?>
