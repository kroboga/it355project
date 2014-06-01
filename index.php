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
.carousel-inner > .item > img {
	position: absolute;
	top: 0;
	left: 0;
	min-width: 100%;
	height: 500px;
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
			<div class="container">
				<div class="carousel-caption">
					<h1>People are Awesome</h1>
					<p>500,000 people did some awesome volunteering May 31, 2014 by waking up and getting ready for the day.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn More</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="container">
				<div class="carousel-caption">
					<h1>Tips for Volunteering</h1>
					<p>Read what Professor James T. Kirk calls the 393 essential steps to volunteering</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<div class="container">
				<div class="carousel-caption">
					<h1>Results of Why Volunteer Survery are in</h1>
					<p>A few weeks ago, we asked you why you volunteer. See what we found out, and how it affects you.</p>
					<p><a class="btn btn-lg btn-primary pull-right" href="#" role="button">Learn more</a></p>
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
			<p><a class="btn btn-lg btn-primary" href="/auth/register/" role="button">Sign Up</a></p>
		</div>
	<hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
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
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" data-src="/js/holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">
</div>
<?php include 'footer.php'; ?>