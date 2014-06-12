<?php 
	$page = "Dashboard";
	$checkLogin = true;
	include 'header.php'; 
?>
<div class="container">
	<!-- format of 1 row and 5 columns, we can change this as neccesarry, I felt it a good start -->
	<div class="row">
		<div class="col-md-offset-4">
			<h1>My Profile</h1>
		</div>
	</div>
	<div class="row">
		<!-- column 1 - far left -->
		<div class="col-md-3">
			<ul class="list-unstyled">
				<li><img class="img-rounded" src="/img/dashboard.jpg"></li>
				<li><br /></li>
				<li>
					<form action="/" method="get">
						<div class="btn-group-vertical">
							<button class="btn btn-primary" type="submit" formaction="/profile/edit">Edit Profile</button>
							<button class="btn btn-primary" type="submit" formaction="/createopp/">Create Opportunity</button>
							<button class="btn btn-primary" type="submit" formaction="/messaging/">Inbox</button>
						</div>
					</form>	
				</li>
			</ul>
		</div>
		
		<!-- column 2 - center -->
		<div class="col-md-9">
			
			<div id="signedUp">
				
				<h1>Opportunities You've signed up for:</h1>

				<div class="signedUpOpp">
					
					<h2><a href="/opportunity/special.php">Special Olympics </a></h2>
						<p>There are hundreds of Special Olympics offices around the
						world, and all of them need people at various times during 
						the year. The best way to become a volunteer is to find the 
						Special Olympics office nearest you... <a href="/opportunity/special.php">Read More</a></p>
						<div class="btn-group">
							<button class="btn btn-primary" type="submit" onclick="alert('You have withdrawn from this opportunity')" formaction="#">Withdraw from opportunity</button>
							<button class="btn btn-primary" type="submit" formaction="#">Message Coordinator</button>
							<button class="btn btn-primary" type="submit" onclick="alert('social media share dialog box')" formaction="/#">Share Opportunity</button>
						</div>
				</div>
					
				<div class="signedUpOpp">
				
					 <h2><a href="/opportunity/redcross.php">Red Cross</a></h2>
						<p>The Red Cross responds to approximately 70,000 disasters 
						in the United States every year, ranging from home fires 
						that affect a single family to hurricanes that affect tens 
						of thousands, to earthquakes that impact millions. In these events, 
						the Red Cross provides... <a href="/opportunity/redcross.php">Read More</a></p>
	
					<div class="btn-group">
						<button class="btn btn-primary" type="submit" formaction="#">Withdraw from opportunity</button>
						<button class="btn btn-primary" type="submit" formaction="#">Message Coordinator</button>
						<button class="btn btn-primary" type="submit" formaction="/opportunity/heartgift.php">Share Opportunity</button>
					</div>
				
				</div>	 
					
			</div>
			

			<div id="createdOpps">
		
				<h1>Opportunities You're in Charge of:</h1>
				
				<div class="signedUpOpp">
					<h2><a href="/opportunity/heartgift.php">Gift of the Heart Exchange</a></h2>
						<p>Americans each discard an average of 68 pounds of clothes 
						every year.  By donating your clothing to charity, you can 
						put some of that to good use. Here are some tips on clearing 
						out your closet and helping others enjoy your unwanted clothing 
						and textiles...<a href="/opportunity/heartgift.php">Read More</a></p>
						<p> 
						<form action="/" method="get">
							<div class="btn-group">
								<button class="btn btn-primary" type="submit" formaction="/createopp">Edit Opportunity</button>
								<button class="btn btn-primary" type="submit" formaction="/messaging/allvolunteers.php">Message All Volunteers</button>
								<button class="btn btn-primary" type="submit" formaction="/results/volunteer/">View Volunteers</button>
								<button class="btn btn-primary" type="submit" formaction="/search/volunteer/">Find Volunteers for this Opportunity</button>
							</div>
						</form>
						<br/>
						50/100 Signed Up
						</p>
				</div>
			
			</div>
		
		</div>

	<!-- end of row -->
	</div>
</div>
<?php include 'footer.php'; ?>
