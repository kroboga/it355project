<?php 
	$page = "template";
	include 'header.php'; 
?>
<!DOCTYPE html>
<html>
<!-- all your includes are belong to me! -->
<head>
	<title>V-Hub</title>

	<!-- css includes -->
	<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='css/bootstrap-theme-min.css'>
	<link rel='stylesheet' type='text/css' href='css/style.css'>
	<link rel='stylesheet' type='text/css' href='css/JJstyle.css'>
	<link rel='stylesheet' type='text/css' href='css/SethStyle.css'>
	<link rel='stylesheet' type='text/css' href='css/KirkStyle.css'>

	<!-- Javascript includes -->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js'></script>
	<script type='text/javascript' href='js/bootstrap.js'></script>

</head>

<!-- end of body tag is in the footer -->
<body>
	<!-- the top navbar should go here, this is just from my old project, we'll need to spruce this up -->
	<div class='navbar navbar-default navbar-fixed-top'>

		<div class='container'>
	      
	      	<div class='row'>
			
				<!-- left header -->
				<div class='col-md-3'>
				</div>

				<!-- center header -->
				<div class='col-md-3'>
				    
				    <div class='navbar-header'>
				    
				      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
				        <span class='icon-bar'></span>
				        <span class='icon-bar'></span>
				        <span class='icon-bar'></span>
				      </button>
			    	
			    	</div>
				
				</div>

				<!-- right header -->
				<div class='col-md-3'>	
				</div>


		        <!-- yeah, I'm not actually sure what this is, but we had it in there -->
		        <div class='navbar-collapse collapse'></div>
		        <!--/.nav-collapse -->

			</div> <!-- end of row -->

	    <!-- end containter -->
    	</div>

   	<!-- end navbar fixed top-->
    </div>

    <!-- navbar content needs to be cleaned up something fierce-->
    <div id="headerwrap" class="container" style="background-color: #3498db; color: white">
 		
 		<div class="row clearfix">
    		
    		<div class="col-md-12 column">

      			<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation" style="background-color: #3498db;">
        			<div class="navbar-header">
           				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button> <a class="navbar-brand" href="VounteerLoggedIn.html">V-Hub</a>
        			</div>
        
		        	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		          		
		          		<ul class="nav navbar-nav">
		            		<li>
		            			<a href="inbox.jpg">Inbox</a>
				            </li>
		          		</ul>
		          
		          		<ul class="nav navbar-nav navbar-center">
		            		<li>
		             
		            		</li>
		            	</ul>

		          		<ul class="nav navbar-nav navbar-right">
		            		<li>
		            			<a href="index.html" class="btn btn-default btn-warning btn-lg">Log Out   </a>
				            </li>
			            </ul>

		            </div>

		        <!-- end nav class -->
        		</nav>
    		
    		</div>
  		
  		</div>
	
	</div> <!-- End Navbar -->

<!-- even though our amazing desing will be to awesome to be contatined, this div tries to anyway -->
<div class="container">

	<!-- format of 1 row and 5 columns, we can change this as neccesarry, I felt it a good start -->
	<div class="row">
		
		<!-- column 1 - far left -->
		<div class="col-md-5">

		</div>

		<!-- column 2 - left of center -->
		<div class="col-md-5">

		</div>

		<!-- column 3 - center -->
		<div class="col-md-5">
			<h1>This is a page title</h1>
			<p>This is some page content</p>
		</div>

		<!-- column 4 - right of center -->
		<div class="col-md-5">

		</div>

		<!-- column 5 - far right -->
		<div class="col-md-5">

		</div>
	
	<!-- end of row -->
	</div>

<!-- end of container -->
</div>

<?php include 'footer.php'; ?>