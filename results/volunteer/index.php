<?php 
	$page = "volunteer results";
	include "header.php"; 
?>
<div class="container">
	<!-- format of 1 row and 5 columns, we can change this as neccesarry, I felt it a good start -->
	<div class="row">
		
		<!-- column 1 - far left -->
		<div class="col-md-4">
		</div>

		<!-- column 2 - center -->
		<div class="col-md-4">
			<h1>Volunteer search results</h1>
			
			<div class="vResult">
					
				<h2> <a href="/profile/view"><img class="img-rounded" src="/img/dashboard.jpg">Jane Doe</a></h2>
					<li>
						Skills: Hospice, Computer Skills
					</li>
					
			</div>

		</div>

		<!-- column 3 - right of center -->
		<div class="col-md-4">
		</div>

		<!-- column 4 - far right of center -->
		<div class="col-md-4">
		</div>
	
	<!-- end of row -->
	</div>
</div>
<?php include 'footer.php'; ?>