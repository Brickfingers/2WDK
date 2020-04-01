<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<!-- Add icon library -->

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
<?php
include_once "Header.php";
?>

<style>
/* Make the image fully responsive */
.carousel-inner img {
	width: 100%;
	height: 100%;
}

.img-fluid {
	cursor: pointer;
}

.fa {
	padding: 20px;
	font-size: 20px;
	text-align: center;
	border-radius: 50%;
}

.fa:hover {
	opacity: 0.5;
}

.fa-instagram {
	background: #125688;
	color: white;
}

h1 {
	color: white;
}

.mr-4 {
	color: black;
}

#demo {
	margin: auto;
	width: 100%;
	height: 100%;
}

.row {
	margin: auto;
	text-align: center;
}

.p-2 {
	background-color: black;
}

/* body { */
/*     background: url("Wallpaper/maroon4.jpg") no-repeat center center fixed; */
	
/* 	-webkit-background-size: cover; */
/* 	-moz-background-size: cover; */
/* 	background-size: cover; */
/* 	-o-background-size: cover; */
/* } */

iframe {
	position: relative;
	text-align: center;
}

.card {
	-moz-border-radius: 2%;
	-webkit-border-radius: 2%;
	border-radius: 2%;
	box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.5);
}
</style>
</head>
<body style="background-color: #83677B;">

<div class="container">
		<br> <br>

		<div class="card bg-dark text-white">
			<div class="card-header">
				<h1 style="text-align: center; color: white;">GALLARY</h1>
			</div>

		</div>
		<br> <br>
		<div class="card1" style="background: rgba(0, 0, 0, 0.5);">

			<div class="card-body p-5">

				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
						<li data-target="#demo" data-slide-to="3"></li>
						<li data-target="#demo" data-slide-to="4"></li>
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="photo/pic2.PNG" alt="" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Ben Joseph</h3>

							</div>
						</div>
						<div class="carousel-item">
							<img src="photo/pic9.PNG" alt="" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Montreal</h3>
								<p>Swaying Souls With Sax N Sip</p>
							</div>
						</div>

						<div class="carousel-item">
							<img src="photo/pic8.png" alt="" width="1100" height="500">
							<div class="carousel-caption"></div>
						</div>
						<div class="carousel-item">
							<img src="photo/pic3.jpg" alt="" width="1100" height="500">
							<div class="carousel-caption"></div>
						</div>


						<div class="carousel-item">
							<img src="photo/pic1.png" alt="Ottawa" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Ottawa</h3>


							</div>
						</div>
						<div class="carousel-item">

							<img src="photo/pic7.jpg" alt="Ottawa" width="1100" height="500">
							<div class="carousel-caption"></div>
						</div>
					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span
						class="carousel-control-prev-icon"></span>
					</a> <a class="carousel-control-next" href="#demo"
						data-slide="next"> <span class="carousel-control-next-icon"></span>
					</a>
				</div>

				<br> <br> <br>
				<!-- Grid row -->
				<div class="row">

					<!-- Grid column -->
					<div class="col-lg-4 col-md-12 mb-4">

						<!--Modal: Name-->
						<div class="modal fade" id="modal1" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">

								<!--Content-->
								<div class="modal-content">

									<!--Body-->
									<div class="modal-body mb-0 p-0">

										<div
											class="embed-responsive embed-responsive-16by9 z-depth-1-half">
											<iframe class="embed-responsive-item"
												src="https://www.youtube.com/embed/Z6quNMT8mMM"
												allowfullscreen></iframe>
										</div>

									</div>

									<!--Footer-->
									<div class="modal-footer justify-content-center">
										<span class="mr-4"> Whatch more videos on Instagram!</span> <a
											href="https://www.instagram.com/saxnsip/?hl=en"
											class="fa fa-instagram"></a>
										<button type="button"
											class="btn btn-outline-primary btn-rounded btn-md ml-4"
											data-dismiss="modal">Close</button>
									</div>

								</div>
								<!--/.Content-->

							</div>
						</div>
						<!--Modal: Name-->

						<a><img class="img-fluid z-depth-1" src="photo/pic12.png"
							alt="video" data-toggle="modal" data-target="#modal1"></a>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-lg-4 col-md-6 mb-4">

						<!--Modal: Name-->
						<div class="modal fade" id="modal6" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">

								<!--Content-->
								<div class="modal-content">

									<!--Body-->
									<div class="modal-body mb-0 p-0">

										<div
											class="embed-responsive embed-responsive-16by9 z-depth-1-half">
											<iframe class="embed-responsive-item"
												src="https://www.youtube.com/embed/2p2hC--loq4?rel=0"
												allowfullscreen></iframe>
										</div>

									</div>

									<!--Footer-->
									<div class="modal-footer justify-content-center">
										<span class="mr-4">Whatch more videos on Instagram!</span> <a
											href="https://www.instagram.com/saxnsip/?hl=en"
											class="fa fa-instagram"></a>
										<button type="button"
											class="btn btn-outline-primary btn-rounded btn-md ml-4"
											data-dismiss="modal">Close</button>

									</div>

								</div>
								<!--/.Content-->

							</div>
						</div>
						<!--Modal: Name-->

						<a><img class="img-fluid z-depth-1" src="photo/pic10.png"
							alt="video" data-toggle="modal" data-target="#modal6"></a>

					</div>
					<!-- Grid column -->

					<!-- Grid column -->
					<div class="col-lg-4 col-md-6 mb-4">

						<!--Modal: Name-->
						<div class="modal fade" id="modal4" tabindex="-1" role="dialog"
							aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-lg" role="document">

								<!--Content-->
								<div class="modal-content">

									<!--Body-->
									<div class="modal-body mb-0 p-0">

										<div
											class="embed-responsive embed-responsive-16by9 z-depth-1-half">
											<iframe class="embed-responsive-item"
												src="https://www.youtube.com/embed/jpv2tMJJuz0?rel=0"
												allowfullscreen></iframe>
										</div>

									</div>

									<!--Footer-->
									<div class="modal-footer justify-content-center">
										<span class="mr-4">Whatch more videos on Instagram!</span> <a
											href="https://www.instagram.com/saxnsip/?hl=en"
											class="fa fa-instagram"></a>
										<button type="button"
											class="btn btn-outline-primary btn-rounded btn-md ml-4"
											data-dismiss="modal">Close</button>

									</div>

								</div>
								<!--/.Content-->

							</div>
						</div>
						<!--Modal: Name-->

						<a><img class="img-fluid z-depth-1" src="photo/pic11.png"
							alt="video" data-toggle="modal" data-target="#modal4"></a>

					</div>
					<!-- Grid column -->

				</div>
				<!-- Grid row -->


			</div>

		</div>
		<br> <br>
	</div>


	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script
		src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>	
		
		<script
		src="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/master/bootstrap-4-latest.min.js"></script>
		
		
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/instafeed.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script src="//platform.instagram.com/en_US/embeds.js"></script>
	<script>

	$('#modal1').on('hidden.bs.modal', function (e) {
		  // do something...
		  $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
		});

		$('#modal6').on('hidden.bs.modal', function (e) {
		  // do something...
		  $('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
		});

		$('#modal4').on('hidden.bs.modal', function (e) {
		  // do something...
		  $('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
		});
	</script>
	
	
<?php
include_once "footer.php";
?>

</body>
</html>
