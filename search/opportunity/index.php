<?php 
	$page = "FindOpportunity";
	include 'header.php'; 
?>
    <style>
      #map_canvas {
        width: 500px;
        height: 400px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>

<div class="container">
	<div class="row">
		<div class="col-md-offset-4">
			<h1>Find Service Opportunities</h1>
		</div>
	</div>
	<div class="col-md-6">
		<div id="map_canvas"></div>
	</div>
	<div class="col-md-6">
		<h2>Results:</h2>
	</div>
</div>
<?php include 'footer.php'; ?>
