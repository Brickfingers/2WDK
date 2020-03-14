<!-- Author: Daniel Rooke 3/6/2020 -->
 <!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
	<link rel="stylesheet" href="css/home_style.css">
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
			<!-- Info box background image -->
			<div class="col-md-12 spacer" style="height: 480px; background-color:black;" >
				<div class="row">
					<!-- Display over info box -->
					<div class="img-wrapper" style="margin-left: auto;margin-right: auto;">
    					<img class="img-responsive" src="photo/bojacksaxman.gif" >
    					<div class="img-overlay" style="width:35%;margin-left: auto;margin-right: auto;">
    						<!-- Scroll left button -->
	      					<button class="btn btn-md btn-success" onclick="decwrap()" style="float: left; width:20%;"><</button>
	      					<!-- Scroll index view -->
	      					<div style="background-color:orange; height:20px; width:60%; margin-left: auto;margin-right: auto; float:left;">
	      						<div class="container">
	      							<div class="row">
	      								<div class="col-md-1" id="index-1" style="background-color: red; height: 25px; border-radius:100%; padding-left:10px; margin-left:7.5%">
	      								</div>
	      								<div class="col-md-1" id="index-2" style="background-color: blue; height: 25px; border-radius:100%; padding-left:10px; margin-left:20%">
	      								</div>
	      								<div class="col-md-1" id="index-3" style="background-color: blue; height: 25px; border-radius:100%; padding-left:10px; margin-left:20%">
	      								</div>
	      							</div>
	      						</div>
	      					</div>
	      					<!-- Scroll right button -->
	      					<button class="btn btn-md btn-success"  onclick="incwrap()" style="float: right; width:20%;">></button>
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
				<h2 style="text-align: center;">wow, look at all the contact infos</h2>
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

	<!-- Start Social Media Section -->
		<div class="container-fluid" style="height:250px; background-color: fuchsia;">
			<div class="row">
				<div class="col-md-12">
					<h2 style="text-align: center;">Showcase stuff</h2>
				</div>
			</div>
			<div class="row">
				<!-- Gallery Section -->
				<div class="col-md-7 col-xs-12" style="background-color: olive; height:250px;">
				</div>
				<!-- Social Media Section -->
				<div class="col-md-5 col-xs-0" style="background-color: maroon; height:250px;">
				</div>
			</div>
		</div>
	<!-- End Social Media Section -->
	
	<?php include "footer.php"; ?>
	
</body>

</html>
