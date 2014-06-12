<?php 
	include "header.php"; 
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Frank Frankenbotham</h1>
		</div>	
	</div>
	<hr style="margin: 40px 0;">
	<div class="row" style="min-height:500px">
		<div class="col-md-4">
			<img class="img-responsive img-rounded" src="/img/profile.jpg" alt="Frank Frankenbotham" style="margin:auto; padding:1em;">
			<p><a class="btn btn-lg btn-primary" onclick="alert('upload dialog box')" role="button">Upload Picture</a></p>
		</div>
		<div class="col-md-4" style="text-align:left">
			<h3>Profile</h3>

			<div class="form-group">
					Location: <input class="form-control" type="text" placeholder="zip code">
			</div>
			
			<div class="dropdown">
			  <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
			    Age Range
			  <span class="caret"></span>
			  </a>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
			    <li> 16-20 </li>
			  </ul>
			</div>


			<div class="checkbox">
				    <label>
				      <input type="checkbox"> Volunteer
				    </label>
			    </div>
		    <div class="checkbox">
			    <label>
			      <input type="checkbox"> Organizer
			    </label>
		    </div>
		    <div class="checkbox">
				    <label>
				      <input type="checkbox"> Both
				    </label>
			    </div>


			<p>Member since: Jan 1, 1970</p>
		</div>

		<div class="col-md-4" style="text-align:left">
			<h3>Skills</h3>
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

			    <div class="checkbox">
				    <label>
				      <input type="checkbox"> Web Development
				    </label>
			    </div>

			    <div class="checkbox">
				    <label>
				      <input type="checkbox"> Microsoft Office
				    </label>
			    </div>

			    <div class="checkbox">
				    <label>
				      <input type="checkbox"> Scouting
				    </label>
			    </div>
						    
   			</br>
   			</br>
			<button class="btn btn-primary" type="submit" onclick="alert('Changes have been saved')" formaction="/dashboard/">Save Changes</button>
   		</div>

	</div>
</div>
<?php include 'footer.php'; ?>
