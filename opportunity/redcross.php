<?php 
	$page = "nothing";
	include "header.php"; 
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
			<h1>Red Cross</h1>
			<br />
		</div>
	</div>
	<div class="row">	
		<div class="col-md-offset-2">
			<dl class="dl-horizontal">
					<dt>
						Date & Time
						<ul class="list-unstyled">
							<br />
							<br />
							<li>
								<form action="/dashboard/" method="get">
									<div class="btn-group-vertical">
										<button class="btn btn-primary" type="submit" formaction="/">Share Opportunity</button>
										<button class="btn btn-primary" type="submit" formaction="/dashboard/">Join Opportunity</button>
									</div>
								</form>	
							</li>
						</ul>
					</dt>
					<dd><iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showTabs=0&amp;showCalendars=0&amp;height=300&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FDenver" style=" border-width:0 " 
						width="400" height="300" frameborder="0" scrolling="no"></iframe></dd>
					<br />
					<dt>Volunteers</dt>
					<dd>33/100</dd>
					<br />
				<dt>Location:</dt>
					<dd><div id="map_canvas"></div></dd><br />
				<dt>About:</dt>
					<dd>The Red Cross responds to approximately 70,000 disasters 
				in the United States every year, ranging from home fires 
				that affect a single family to hurricanes that affect tens 
				of thousands, to earthquakes that impact millions. In these events, 
				the Red Cross provides. Brooklyn tattooed meh XOXO Tonx swag. Kogi Etsy put a bird on it brunch pop-up, direct trade mustache flexitarian sartorial. Sartorial kale chips fanny pack fap literally shabby chic, cardigan messenger bag keffiyeh food truck put a bird on it pug ennui Brooklyn. Cosby sweater art party stumptown High Life twee Marfa Truffaut Helvetica. Carles DIY farm-to-table typewriter whatever craft beer, fashion axe sartorial next level kale chips dreamcatcher four loko. Beard brunch master cleanse, single-origin coffee chambray chillwave slow-carb YOLO Shoreditch cray 90's freegan actually whatever Etsy. Tousled PBR&B tote bag +1 four loko kale chips.</dd><br />
				<dt>What we need:</dt>
					<dd>Pug craft beer blog, umami lo-fi cornhole gluten-free ennui bicycle rights messenger bag. Flannel fingerstache cardigan, keytar selvage Pinterest Schlitz authentic Thundercats organic actually. Letterpress bespoke Vice XOXO, meggings meh Bushwick authentic American Apparel kogi seitan. Street art forage Schlitz, put a bird on it Brooklyn Bushwick wolf messenger bag PBR&B food truck hella cred. IPhone Wes Anderson before they sold out normcore. Kogi readymade actually sriracha kale chips, literally Marfa farm-to-table Portland church-key 8-bit. Kickstarter leggings chambray, flexitarian sartorial tousled photo booth Marfa.</dd><br />
			</dl>			
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>
