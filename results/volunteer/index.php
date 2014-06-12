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
				<div class="checkbox">
				 <label>
				      <input type="checkbox"> 
				    </label>
				</div>
					
				<h2> <a href="/profile/view"><img class="img-rounded" src="/img/dashboard.jpg">Jane Doe</a></h2>
					<li>
						Insert Summary Here
					</li>
					<button class="btn btn-primary" type="submit" formaction="/message/send/">Send Message</button>
					
			</div>

			<button class="btn btn-primary" type="submit" formaction="/message/send/">Send Message To Selected Volunteers</button>


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