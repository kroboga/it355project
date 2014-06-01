<?php
	$page = "Home";
	include 'header.php';
?>
<style>
/* GLOBAL STYLES
-------------------------------------------------- */
/* Padding below the footer and lighter body text */

body {
	padding-bottom: 40px;
	color: #5a5a5a;
}



/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
	position: absolute;
	top: 0;
	right: 0;
	left: 0;
	z-index: 20;
}

/* Flip around the padding for proper display in narrow viewports */
.navbar-wrapper .container {
	padding-right: 0;
	padding-left: 0;
}
.navbar-wrapper .navbar {
	padding-right: 15px;
	padding-left: 15px;
}


/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
	height: 500px;
	margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
	z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
	height: 500px;
	background-color: #777;
}

/* MARKETING CONTENT
-------------------------------------------------- */

/* Pad the edges of the mobile views a bit */
.marketing {
	padding-right: 15px;
	padding-left: 15px;
}

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
	margin-bottom: 20px;
	text-align: center;
}
.marketing h2 {
	font-weight: normal;
}
.marketing .col-lg-4 p {
	margin-right: 10px;
	margin-left: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
	margin: 80px 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
	font-weight: 300;
	line-height: 1;
	letter-spacing: -1px;
}



/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {

	/* Remove the edge padding needed for mobile */
	.marketing {
		padding-right: 0;
		padding-left: 0;
	}

	/* Navbar positioning foo */
	.navbar-wrapper {
		margin-top: 20px;
	}
	.navbar-wrapper .container {
		padding-right: 15px;
		padding-left:  15px;
	}
	.navbar-wrapper .navbar {
		padding-right: 0;
		padding-left:  0;
	}

	/* The navbar becomes detached from the top, so we round the corners */
	.navbar-wrapper .navbar {
		border-radius: 4px;
	}

	/* Bump up size of carousel content */
	.carousel-caption p {
		margin-bottom: 20px;
		font-size: 21px;
		line-height: 1.4;
	}

	.featurette-heading {
		font-size: 50px;
	}
}

@media (min-width: 992px) {
	.featurette-heading {
		margin-top: 120px;
	}
}
</style>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item active">
			<img src="/img/carousel/1.jpg" alt="Third slide" style="margin:auto;">
			<div class="container">
				<div class="carousel-caption">
					<h1>People are Awesome</h1>
					<p>500,000 people did some awesome volunteering May 31, 2014 by waking up and getting ready for the day.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/img/carousel/2.jpg" alt="Third slide" style="margin:auto;">
			<div class="container">
				<div class="carousel-caption">
					<h1>Steps for Volunteering</h1>
					<p>Read what Professor James T. Kirk calls the 393 essential steps to volunteering</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="/img/carousel/3.jpg" alt="Third slide" style="margin:auto;">
			<div class="container">
				<div class="carousel-caption">
					<h1>Results of "Why Volunteer?" survey are in</h1>
					<p>A few weeks ago, we asked you why you volunteer. See what we found out, and how it affects you.</p>
					<p><a class="btn btn-lg btn-primary " href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>What is V-Hub.com?</h1>
			<p>V-Hub.com is the premiere site for doing awesome stuff. Namely, volunteering. Lots of people want to help, and lots of people need help. So why is it so darn difficult to find each other? V-Hub.com is the answer. With a few simple clicks, you can find volunteering opportunities that match exactly what you are looking for. Have an hour between appointments, and want to kill some time? Done. Want to volunteer regularly at your local hospital? Done. Need 500 people to help clean up a creek? Done. </p>
			<p><a class="btn btn-lg btn-primary pull-right" href="/auth/register/" role="button">Sign Up</a></p>
		</div>
	</div>
	
	<hr class="featurette-divider">
	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading">I got tired of making stuff. <span class="text-muted">So the rest is bacon ipsum.</span></h2>
			<p class="lead">Bacon ipsum dolor sit amet drumstick short ribs ground round turducken ham short loin pork loin. Flank fatback meatball hamburger chuck landjaeger sirloin shank capicola ham hock tail tongue beef jerky pork. Pork belly capicola pork chop, pig jerky strip steak corned beef ham hock fatback drumstick flank. Venison frankfurter jerky short ribs chuck biltong, ribeye meatloaf pork shankle kevin tongue bacon salami cow. Short loin cow pork belly, bresaola beef tri-tip tenderloin.</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive" data-src="/js/holder.js/500x500/auto" alt="Generic placeholder image">
		</div>
	</div>

	<hr class="featurette-divider">
	<div class="row featurette">
		<div class="col-md-5">
			<img class="featurette-image img-responsive" data-src="/js/holder.js/500x500/auto" alt="Generic placeholder image">
		</div>
		<div class="col-md-7">
			<h2 class="featurette-heading">And yet, you're still reading. <span class="text-muted">Even now.</span></h2>
			<p class="lead">Bacon ipsum dolor sit amet drumstick short ribs ground round turducken ham short loin pork loin. Flank fatback meatball hamburger chuck landjaeger sirloin shank capicola ham hock tail tongue beef jerky pork. Pork belly capicola pork chop, pig jerky strip steak corned beef ham hock fatback drumstick flank. Venison frankfurter jerky short ribs chuck biltong, ribeye meatloaf pork shankle kevin tongue bacon salami cow. Short loin cow pork belly, bresaola beef tri-tip tenderloin.</p>
		</div>
	</div>

	<hr class="featurette-divider">
	<div class="row featurette">
		<div class="col-md-7">
			<h2 class="featurette-heading">The good news is, <span class="text-muted">this is the last one.</span></h2>
			<p class="lead">Bacon ipsum dolor sit amet drumstick short ribs ground round turducken ham short loin pork loin. Flank fatback meatball hamburger chuck landjaeger sirloin shank capicola ham hock tail tongue beef jerky pork. Pork belly capicola pork chop, pig jerky strip steak corned beef ham hock fatback drumstick flank. Venison frankfurter jerky short ribs chuck biltong, ribeye meatloaf pork shankle kevin tongue bacon salami cow. Short loin cow pork belly, bresaola beef tri-tip tenderloin.</p>
		</div>
		<div class="col-md-5">
			<img class="featurette-image img-responsive" data-src="/js/holder.js/500x500/auto" alt="Generic placeholder image">
		</div>
	</div>

	<hr class="featurette-divider">
</div>
<?php include 'footer.php'; ?>