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
				<li><img class="img-rounded" src="http://lorempixel.com/150/150/people/9"></li>
				<li><br /></li>
				<li>
					<form action="/" method="get">
						<div class="btn-group-vertical">
							<button class="btn btn-primary" type="submit" formaction="/editprofile/">Edit Profile</button>
							<button class="btn btn-primary" type="submit" formaction="/createopp/">Create Opportunity</button>
							<button class="btn btn-primary" type="submit" formaction="/messaging/">Inbox</button>
						</div>
					</form>	
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
				
			<h1>Opportuntities You're in Charge of:</h1>
			 <h2>Gift of the Heart Exchange</h2>
				<p>Americans each discard an average of 68 pounds of clothes 
				every year.  By donating your clothing to charity, you can 
				put some of that to good use. Here are some tips on clearing 
				out your closet and helping others enjoy your unwanted clothing 
				and textiles...<a href="/opportunity/heartgift.php">Read More</a></p></p>
				<p> 
				<form action="/" method="get">
					<div class="btn-group">
						<button class="btn btn-primary" type="submit" formaction="/opportunity/heartgift.php">Edit Opportunity</button>
						<button class="btn btn-primary" type="submit" formaction="/messaging/allvolunteers.php">Message Volunteers</button>
						<button class="btn btn-primary" type="submit" formaction="/search/volunteer/">Find Volunteers for this Opportunity</button>
					</div>
				</form>
				</p>
		</div>

	<!-- end of row -->
	</div>
</div>
<?php include 'footer.php'; ?>
