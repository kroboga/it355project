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
    zoom: 8
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
				<div class="input-group">
					<span class="input-group-addon">Distance</span>
					<input id="distance" type="number" class="form-control" value="10">
					<span class="input-group-addon">Miles</span>
				</div>
				<div class="input-group">
					<span class="input-group-addon">Opportunity Name:</span>
					<input id="opportunityname" type="text" class="form-control" placeholder="Name">
					<span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<h3>Search Filters</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div id="map-canvas"></div>
		</div>
		<div class="col-md-6">
			<h2>Results:</h2>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
