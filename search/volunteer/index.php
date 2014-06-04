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
			<div class="panel-group" id="accordion">

				<!-- Skills filter -->
  				<div class="panel panel-default">		
    				<div class="panel-heading">
      					<h4 class="panel-title">
        					<a class = "collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          						Skills
						    </a>
						</h4>
					</div>

					<!-- Skill list -->
    				<div id="collapseOne" class="panel-collapse collapse">
						<div class="panel-body">
						
							<div class="checkbox">
							    <label>
							      <input type="checkbox"> Nunchuck skills
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> Nunchuck skills
							    </label>
						    </div>


							<div class="checkbox">
							    <label>
							      <input type="checkbox"> Nunchuck skills
							    </label>
						    </div>

						</div>
   					</div>
  				</div>

  				<!-- distance filter -->
  				<div class="panel panel-default">		
    				<div class="panel-heading">
      					<h4 class="panel-title">
        					<a class = "collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          						Distance
						    </a>
      					</h4>
					</div>

    				<div id="collapseTwo" class="panel-collapse collapse">
    					<div class="panel-body">

    					</div>
					</div>
				</div>

  				<!-- Availability filter -->
  				<div class="panel panel-default">		
    				<div class="panel-heading">
      					<h4 class="panel-title">
        					<a class = "collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          						Availability
						    </a>
      					</h4>
					</div>

    				<div id="collapseThree" class="panel-collapse collapse">
    					<div class="panel-body">
    					</div>
					</div>
				</div>



			</div> <!-- End filters -->


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