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
							      <input type="checkbox"> Computer Skills
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> Manual Labor Experience
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> Theater Sound Tech
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> EMT
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> Hospice
							    </label>
						    </div>

						</div>
   					</div>
  				</div>

  				<!-- distance filter -->
  				<div class="panel panel-default">		
    				<div class="panel-heading">
      					<h4 class="panel-title">
        					<a class = "collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          						Distance
						    </a>
      					</h4>
					</div>

					<!-- distance list -->
    				<div id="collapseTwo" class="panel-collapse collapse">
    					<div class="panel-body">
    						<div class="checkbox">
							    <label>
							      <input type="checkbox"> 5 miles
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> 10 miles
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> 15 miles
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> 25 miles
							    </label>
						    </div>

							<div class="checkbox">
							    <label>
							      <input type="checkbox"> 50 miles
							    </label>
						    </div>
    					</div>
					</div>
				</div>

  				<!-- Availability filter -->
  				<div class="panel panel-default">		
    				<div class="panel-heading">
      					<h4 class="panel-title">
        					<a class = "collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          						Availability
						    </a>
      					</h4>
					</div>

					<!-- Magical Calendar -->
    				<div id="collapseThree" class="panel-collapse collapse">
    					<div class="panel-body">
			               <form class="form-horizontal">
				               	<fieldset>
	                  				<div class="control-group">
					                    <label class="control-label" for="reservationtime">Choose your check-in and check-out times:</label>
				                    	<div class="controls">
				                    		<div class="input-prepend input-group">
				                    			<span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
				                    			<input type="text" style="width: auto" name="reservation" id="reservationtime" class="form-control" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM"  class="span4"/>
			                    			</div>
				                    	</div>
				                  	</div>
				               </fieldset>
			               </form>
			               <script type="text/javascript">
			               $(document).ready(function() {
			                  $('#reservationtime').daterangepicker({
			                    timePicker: true,
			                    timePickerIncrement: 30,
			                    format: 'MM/DD/YYYY h:mm A'
			                  }, function(start, end, label) {
			                    console.log(start.toISOString(), end.toISOString(), label);
			                  });
			               });
			               </script>
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