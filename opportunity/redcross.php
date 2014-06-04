<?php 
	$page = "nothing";
	include "header.php"; 
?>
<div class="container">
	<div class="row">
		<div class="col-md-offset-4">
			<h1>Red Cross</h1>
			<br />
		</div>
	</div>
	<div class="row">	
		<div>
			<dl class="dl-horizontal">
					<dt>
						Date & Time
						<ul class="list-unstyled">
							<br />
							<br />
							<li>
								<form action="/" method="get">
									<div class="btn-group-vertical">
										<button class="btn btn-primary" type="submit" formaction="/">Share Opportunity</button>
										<button class="btn btn-primary" type="submit" formaction="/">Join Opportunity</button>
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
