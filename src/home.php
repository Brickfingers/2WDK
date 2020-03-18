<!-- Author: Daniel Rooke 3/6/2020 -->
 <!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
	<link rel="stylesheet" href="home_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

	<?php include "header.php"; ?>

	<!-- Header Section -->
	<!-- 
		<div class="mainview container-fluid">
		<div class="row">
			<div class="header col-md-12" id="header">SAX 'N SIP
			</div>
		</div>
	</div>
	-->
	<!-- End Header Section -->
	
	
	<div class="container-fluid">
		<div class="row">
			<div id="thumbnailIndicators" class="carousel slide" data-ride="carousel" style="width:100%; height:640px; background-image:url(bojacksaxman.gif); background-repeat: no-repeat; background-size: auto 100%; background-position:center; ">
					<ol class="carousel-indicators">
	    				<li data-target="#thumbnailIndicators" data-slide-to="0" class="active"></li>
    					<li data-target="#thumbnailIndicators" data-slide-to="1"></li>
					    <li data-target="#thumbnailIndicators" data-slide-to="2"></li>
  					</ol>
  					<div class="carousel-inner">
    					<div class="carousel-item active" style="align-content:center; height:640px;">
    						<h1>Example Page Title</h1>
    						<h4 style="position: absolute; left:60%; top:70%;">Example Sub Title</h4>
    						<p style="position: absolute; left:60%; top:75%;">Example brief that describes this example page.</p>
    					</div>
	   					<div class="carousel-item" style="align-content:center; height:640px;">
							<h1>Example Page Title</h1>
    						<h4 style="position: absolute; left:60%; top:70%;">Example Sub Title</h4>
    						<p style="position: absolute; left:60%; top:75%;">Example brief that describes this example page.</p>
	    				</div>
    					<div class="carousel-item" style="align-content:center; height:640px;">
							<h1>Example Page Title</h1>
    						<h4 style="position: absolute; left:60%; top:70%;">Example Sub Title</h4>
    						<p style="position: absolute; left:60%; top:75%;">Example brief that describes this example page.</p>
	    				</div>
					</div>
					<a class="carousel-control-prev" href="#thumbnailIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#thumbnailIndicators" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
  				</div>
    	</div>				
	</div>
 
	
	
	
	
	
	<!-- Booking and Email signup links -->
	<div class="container-fluid" style="height:125px; background-color: red;">
		<div class="row">
			<!-- Form brief header -->
			<div class="col-md-12" style="height:50px; background-color:blue;">
				<h2 style="text-align: center;">Get In Touch</h2>
			</div>
		</div>
		<div class="row">
			<!-- Contact method  -->
			<div class="col-md-6" style="height:75px; background-color:yellow;">
				<button class="btn btn-md btn-success" style="width:100%; position:relative; top: 45%; ">Book Now</button>
			</div>
			<div class="col-md-6" style="height:75px; background-color:orange;">
				<button class="btn btn-md btn-success" style="width:100%; position:relative; top: 45%;">Newsletter Signup</button>
			</div>
		</div>
	</div>
	<!-- End Booking and Email signup links -->
	
	
	<!-- Start Gallery Section -->
		<div class="container-fluid" style="height:300px; background-color: fuchsia;">
			<div class="row">
				<div class="col-md-12" style="height:50px;">
					<h2 style="text-align: center;">Gallery</h2>
				</div>
			</div>
			<div class="row">
				<!-- Gallery Section -->
				<div class="col-md-12 col-xs-12" style="background-color: olive; height:250px;">
				</div>
			</div>
		</div>
	<!-- End Social Media Section -->
	

	<!-- Second Carousel -->
	<div class="container-fluid" style="height:350px; backgorund-color: yellow;">
		<div class="row">
			<button class="btn btn-md btn-success col-md-5 col-xs-5" style="z-index: 2;">social media</button>
			<div class="col-md-2 col-xs-2"></div>
			<button class="btn btn-md btn-success col-md-5 col-xs-5" style="z-index: 2;">upcoming events</button>
		</div>
		<div class="row">
			<div id="secondCarousel" class="carousel slide" data-ride="carousel" style="width:100%; height:320px;">
				<ol class="carousel-indicators">
	    			<li data-target="#thumbnailIndicators" data-slide-to="0" class="active"></li>
    				<li data-target="#thumbnailIndicators" data-slide-to="1"></li>
  				</ol>
  				<div class="carousel-inner">
   					<div class="carousel-item active" style="align-content:center; height:320px;">
   						<h1 style="position: absolute; left:40%; top:50%;">Social Media</h1>
   					</div>
   					<div class="carousel-item" style="align-content:center; height:320px;">
						<h1 style="position: absolute; left:40%; top:50%;">Upcoming Events</h1>
	    			</div>
				</div>
			</div>
		</div>
	</div>

	
	<?php include "footer.php"; ?>
	
</body>

</html>
