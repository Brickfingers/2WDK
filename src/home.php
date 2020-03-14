<!-- Author: Daniel Rooke -->
 <!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
	<link rel="stylesheet" href="css/home_style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script>
		var scrollController={
			counter: 1,
			inc: function(){
			    this.counter = this.counter + 1;
			    if(this.counter > 3){
				    this.counter = 1;
			    }
			},
			dec: function(){
				this.counter = this.counter - 1;
			    if(this.counter < 1){
				    this.counter = 3;
			    }
			},
			updateView: function(){
				if(this.counter === 1){
				    document.getElementById("index-1").style.backgroundColor = "red";
				    document.getElementById("index-2").style.backgroundColor = "blue";
				    document.getElementById("index-3").style.backgroundColor = "blue";
		    	}
		    	else if(this.counter === 2){
				    document.getElementById("index-2").style.backgroundColor = "red";
				    document.getElementById("index-1").style.backgroundColor = "blue";
				    document.getElementById("index-3").style.backgroundColor = "blue";
			    }
			    else if(this.counter === 3){
				    document.getElementById("index-3").style.backgroundColor = "red";
				    document.getElementById("index-2").style.backgroundColor = "blue";
				    document.getElementById("index-1").style.backgroundColor = "blue";
			    }
			}
		}
		function incwrap(){
			scrollController.inc();
			scrollController.updateView();
		}
		function decwrap(){
			scrollController.dec();
			scrollController.updateView();
		}	
	</script>
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

	<!-- Info Box Section -->
	<div class="container-fluid infobox" id="infobox" style="background-color: purple;">
		<!-- Info Box Content -->
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
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Info Box Section -->
	
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

</body>

</html>
