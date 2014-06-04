<?php 
	$page = "FindOpportunity";
	include 'header.php'; 
?>
    <style>
      #map-canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
<script>
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see a blank space instead of the map, this
// is probably because you have denied permission for location sharing.

var map;

function initialize() {
  var mapOptions = {
    zoom: 10
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,
                                       position.coords.longitude);

      var infowindow = new google.maps.InfoWindow({
        map: map,
        position: pos,
        content: 'Current Location'
      });

      map.setCenter(pos);
    }, function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>

<div class="container">
	<div class="row">
		<div class="col-md-offset-4">
			<h1>Find Service Opportunities</h1>
			<br />
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" role="form">
				<div class="input-group">
					<span class="input-group-addon">Location:</span>
					<input id="location"type="text" class="form-control" placeholder="Location">
					<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
				</div>
				<br />
				<div class="input-group">
					<span class="input-group-addon">Distance</span>
					<input id="distance" type="number" class="form-control" value="10" min="1" step="1" pattern="\d+">
					<span class="input-group-addon">Miles</span>
				</div>
				<br />
				<div class="input-group">
					<span class="input-group-addon">Opportunity Name:</span>
					<input id="opportunityname" type="text" class="form-control" placeholder="Name">
					<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
				</div>
			</form>
			<br />
		</div>
		<div class="col-md-6">
			<h4>Search Filters</h4>
			<label class="checkbox">
				<input type="checkbox" id="Computer" value="option1"> Computer
			</label>
			<label class="checkbox">
				<input type="checkbox" id="EMT" value="option2"> EMT
			</label>
			<label class="checkbox">
				<input type="checkbox" id="Blood Donation" value="option3"> Blood Donation
			</label>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div id="map-canvas"></div>
		</div>
		<div class="col-md-6">
			<h2>Results:</h2>
			<dl class="dl-horizontal">
				<dt>Special Olympics</dt>
				<dd>There are hundreds of Special Olympics offices around the
				world, and all of them need people at various times during 
				the year. The best way to become a volunteer is to find the 
				Special Olympics office nearest you... <a href="/opportunity/special.php">Read More</a></dd>
				
				<dt>Red Cross</dt>
				<dd>The Red Cross responds to approximately 70,000 disasters 
				in the United States every year, ranging from home fires 
				that affect a single family to hurricanes that affect tens 
				of thousands, to earthquakes that impact millions. In these events, 
				the Red Cross provides... <a href="/opportunity/redcross.php">Read More</a></dd>
				
			 <dt>Gift of the Heart Exchange</dt>
				<dd>Americans each discard an average of 68 pounds of clothes 
				every year.  By donating your clothing to charity, you can 
				put some of that to good use. Here are some tips on clearing 
				out your closet and helping others enjoy your unwanted clothing 
				and textiles...<a href="/opportunity/heartgift.php">Read More</a></dd>
			</dl>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
