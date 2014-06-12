<?php 
	include "header.php"; 
?>
<div class="container">
	<hr style="margin: 40px 0;">
	<div class="row" style="min-height:500px">
		<div class="col-md-4">
			<img class="img-responsive img-rounded" src="/img/profile.jpg" alt="Frank Frankenbotham" style="margin:auto; padding:1em;">
			<p><a class="btn btn-lg btn-primary" onclick="alert('upload dialog box')" role="button">Upload Picture</a></p>
		</div>
		<div class="col-md-4" style="text-align:left">
			<h3>Profile</h3>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
							Name: <input class="form-control" type="text" placeholder="Jane Doe">
					</div>
				</div>	
			</div>
			<div class="form-group">
				Location: <input class="form-control" type="text" placeholder="ZIP Code">
			</div>
			<div class="form-group">
				Age Range:
				<select>
					<option>0-10</option>
					<option>11-20</option>
					<option>21-30</option>
					<option>31-40</option>
					<option>41-50</option>
					<option>51-60</option>
					<option>61-70</option>
				</select>
			</div>
			<div class="form-group">
				Member Type:
				<select>
					<option>Organizer</option>
					<option>Volunteer</option>
					<option>Both</option>
				</select>
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
