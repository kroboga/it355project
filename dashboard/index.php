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
		<div class="col-md-3">
			<ul class="list-unstyled">
				<li><img src="http://placehold.it/150x150"></li>
				<li> </li>
				<li> </li>
				<li>
					<div class="btn-group-vertical">			
						<button type="button" class="btn btn-primary" type="submit" formaction="http://goparakeet.com">Edit Profile</button>
						<button type="button" class="btn btn-primary" type="submit" formaction="/createopp/">Create Opportunity</button>
						<button type="button" class="btn btn-primary" type="submit" formaction="/messaging/">Inbox</button>
					</div>
				</li>
			</ul>
		</div>
		
		<!-- column 2 - center -->
		<div class="col-md-9">
			
			<h1>Opportunities You're Going To:</h1>
			<h2>Special Olympics</h2>
				<p>There are hundreds of Special Olympics offices around the
				world, and all of them need people at various times during 
				the year. The best way to become a volunteer is to find the 
				Special Olympics office nearest you... <a href="/opportunity/special.php">Read More</a></p>
			 
			 <h2>Red Cross</h2>
				<p>The Red Cross responds to approximately 70,000 disasters 
				in the United States every year, ranging from home fires 
				that affect a single family to hurricanes that affect tens 
				of thousands, to earthquakes that impact millions. In these events, 
				the Red Cross provides... <a href="/opportunity/redcross.php">Read More</a></p>
				
			<h1>Opportuntities You're in Charge of</h1>
			 <h2>Gift of the Heart Exchange</h2>
				<p>Americans each discard an average of 68 pounds of clothes 
				every year.  By donating your clothing to charity, you can 
				put some of that to good use. Here are some tips on clearing 
				out your closet and helping others enjoy your unwanted clothing 
				and textiles... <a href="/opportunity/heartgift.php">Edit Opportunity</a>
				<a href="/messaging/allvolunteers.php">Message</a>
				<a href="/opportunity/heartgift.php">Read More</a>
				</p>
		</div>

	<!-- end of row -->
	</div>
</div>
<?php include 'footer.php'; ?>
