<?php 
	$page = "volunteer search";
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
			<h1>Volunteer Search</h1>
			<p>Search for volunteers in specific areas and or with specific skills and contact them about helping out</p>

			<!-- search bar -->
			<form class="form-search">
				<div class="form-group">
					<input class="form-control" type="text">
				</div>
					<a class="btn btn-default" type="button" href="/results/volunteer">Search</a>
			</form>

			<br/>
			<br/>
			<h4> Search Filters </h4>
			<!-- Skills filter -->
			<div class="panel-group" id="accordion">
  				<div class="panel panel-default">
    				<div class="panel-heading">
      					<h4 class="panel-title">
        					<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          						Skill(s)
						    </a>
						  </h4>
						</div>

    <div id="collapseOne" class="panel-collapse collapse in">
      <div class="panel-body">
		<div class="checkbox">
		    <label>
		      <input type="checkbox"> Nunchuck skills
		    </label>
		 </div>
    </div>
    </div>
  </div>
  <div class="panel panel-default">
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