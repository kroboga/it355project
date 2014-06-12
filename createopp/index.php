<?php 
	$page = "template";
	include "header.php"; 
?>
<div class="container">
	<div class="row">
		<div class="col-md-offset-4">
			<h1>Create A Service Opportunity</h1>
			<br />
		</div>
	</div>
	<div class="row">
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Opportunity name:</label>
				<div class="col-sm-10">
					<input id="name" type="text" class="form-control" placeholder="Name">
				</div>
			</div>
			<label for="datetime" class="col-sm-2 control-label">Date &amp; Time: </label>
			<div id="datetime" class="form-group col-sm-10">
				<div class="checkbox col-sm-10">
					<label>
						<input type="checkbox" id="event" value="event"> Reccurring Event
					</label>
				</div>
				<label for="start" class="col-sm-2 control-label">Start Date:</label>
				<div class="col-sm-10"><input class="form-control" type="date" id="start"></div>
				<label for="end" class="col-sm-2 control-label">End Date:</label> 
				<div class="col-sm-10"><input class="form-control" type="date" id="end"></div>
			</div>
			<div class="form-group">
				<label for="address" class="col-sm-2 control-label">Address:</label>
				<div class="col-sm-10">
					<input id="address" type="text" class="form-control" placeholder="Address">
				</div>
				<label for="city" class="col-sm-2 control-label">City:</label>
				<div class="col-sm-10">
					<input id="city" type="text" class="form-control" placeholder="city">
				</div>
				<label for="state" class="col-sm-2 control-label">State: </label>
				<div class="col-sm-10">
					<select class="form-control" id="state" name="state">
						<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select>
				</div>
				<label for="zip" class="col-sm-2 control-label">Zip Code:</label>
				<div class="col-sm-10">
					<input id="zip" type="text" class="form-control" placeholder="Zip Code">
				</div>
			</div>
			<div class="form-group">
				<label for="desc" class="col-sm-2 control-label">Description:</label>
				<div class="col-sm-10">
					<textarea id="desc" class="form-control" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="looking" class="col-sm-2 control-label">What you're looking for:</label>
				<div class="col-sm-10">
					<textarea id="looking" class="form-control" rows="3"></textarea>
				</div>
			</div>
			<div class="form-group">
				<label for="checks" class="col-sm-2 control-label">Required Skills:</label>
				<div id = "computer" class="col-sm-10">
					<label class="checkbox">
						<input type="checkbox" id="computer" value="computer"> Computer
					</label>
					<label class="checkbox">
						<input type="checkbox" id="emt" value="emt"> EMT
					</label>
					<label class="checkbox">
						<input type="checkbox" id="blood" value="blood"> Blood Donation
					</label>
				</div>
			</div>
			<div class="form-group">
				<label for="makepublic" class="col-sm-2 control-label">Security Settings:</label>
				<div id="sec" class="col-sm-10">
					<label class="checkbox">
						<input type="checkbox" id="makepublic" value="public">Make Public
					</label>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="btn-group">
						<button class="btn btn-primary" type="submit" formaction="/opportunity/heartgift.php">Save</button>
						<button class="btn btn-primary" type="submit" formaction="/messaging/allvolunteers.php">Delete</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<?php include 'footer.php'; ?>
