<!---------------------------------------------------------------------------  
* Filename:					Gallery.php
* Version:					3.0
* Team Name:                2WDK
* Student Name:				Fahimeh Karimi - 40900086
* Course Name:				CST 8353 - Software design and testing
* Professor:			    Leanne Seaward
* Purpose:                  This page includes photos and video links to
                            instagram and youtube of Ben Joseph.
                            Two pictures ,2 youtube videos and 2 Instagram 
                            video can be updated by admin using Admin Page.
---------------------------------------------------------------------------->


<?php
session_start();
$image1src = "photo/pic2.png";
$image2src = "photo/pic9.png";
$youtube1src = "https://www.youtube.com/embed/2e5zITHhVds?rel=0";
$youtube2src = "https://www.youtube.com/embed/2p2hC--loq4?rel=0";
$insta1src = "https://www.instagram.com/p/B81hkBWHcX8/embed";
$insta2src = "https://www.instagram.com/p/B9Xnus_nTau/embed";


//read json file
$file = "test.json";
$data = json_decode(file_get_contents($file), true);
$image1src = $data['image1src'];
$image2src = $data['image2src'];
$youtube1src = $data['youtube1src'];
$youtube2src = $data['youtube2src'];
$insta1src = $data['insta1src'];
$insta2src = $data['insta2src'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Gallery.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body style="background-color: #83677B;">
<?php
include_once "Header2.php";
?>
	<div class="container">
		<br> <br>

		<div class="card bg-dark text-white">
			<div class="card-header">
				<h1 style="text-align: center; color: white;">GALLERY</h1>
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
							<img class="img-fluid z-depth-1" <?php echo "src=$image1src"?>
								style="width: 650px">
							<div class="carousel-caption">
								<h3>Ben Joseph</h3>
								<p>Musician</p>

							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image2src"?>
								style="width: 650px">
							<div class="carousel-caption">
								<h3>Montreal</h3>
								<p>Swaying Souls With Sax N Sip</p>
							</div>
						</div>

						<div class="carousel-item">
							<img class="img-fluid z-depth-1" src="photo/pic8.png"
								style="width: 650px">
							<div class="carousel-caption">
								<h3>Toronto</h3>
								<p>Trying Something New</p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid z-depth-1" src="photo/pic3.jpg"
								style="width: 650px">
							<div class="carousel-caption"></div>

						</div>


						<div class="carousel-item">
							<img class="img-fluid z-depth-1" src="photo/pic1.png"
								style="width: 650px">
							<div class="carousel-caption">
								<h3>Ottawa</h3>
								<p>Nothing But Love</p>


							</div>
						</div>

					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span
						class="carousel-control-prev-icon"></span>
					</a> <a class="carousel-control-next" href="#demo"
						data-slide="next"> <span class="carousel-control-next-icon"></span>
					</a>
				</div>

				<br> <br> <br>
				<!-- youtube------------------------------------------------------------------------------->
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
											<?php echo "<iframe class=\"embed-responsive-item\"
												src=$youtube1src></iframe>"?>
										</div>

									</div>

									<!--Footer-->
									<div class="modal-footer justify-content-center">
										<span class="mr-4"> Whatch more videos on YouTube!</span> <a
											href="https://www.YouTube.com/saxnsip/?hl=en"
											class="fa fa-youtube"
											style="padding: 10px; font-size: 30px; text-align: center; border-radius: 50%; background: red;"></a>
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
											<?php echo "<iframe class=\"embed-responsive-item\"
												src=$youtube2src></iframe>"?>
										</div>

									</div>

									<!--Footer-->
									<div class="modal-footer justify-content-center">
										<span class="mr-4">Whatch more videos on YouTube!</span> <a
											href="https://www.YouTube.com/saxnsip/?hl=en"
											class="fa fa-youtube"
											style="padding: 10px; font-size: 30px; text-align: center; border-radius: 50%; background: red;"></a>
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
												src="https://www.youtube.com/embed/jpv2tMJJuz0?rel=0"></iframe>
										</div>

									</div>

									<!--Footer-->
									<div class="modal-footer justify-content-center">
										<span class="mr-4">Whatch more videos on YouTube!</span> <a
											href="https://www.YouTube.com/saxnsip/?hl=en"
											class="fa fa-youtube"
											style="padding: 10px; font-size: 30px; text-align: center; border-radius: 50%; background: red;"></a>
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



				<br> <br>

				<!--INSTAGRAM-------------------------------------------------------------------------- -->

				<div>
					<!-- Grid row -->
					<div class="row">

						<!-- Grid column -->
						<div class="col-lg-4 col-md-12 mb-4">

							<!--Modal: Name-->
							<div class="modal fade" id="modal2" tabindex="-1" role="dialog"
								aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">

									<!--Content-->
									<div class="modal-content">

										<!--Body-->
										<div class="modal-body mb-0 p-0">

											<div
												class="embed-responsive embed-responsive-1by1 z-depth-1-half">
												<iframe class="embed-responsive-item"
													<?php echo "src=$insta1src"?> width="500" height="550"
													frameborder="0" scrolling="no" allowtransparency="true"></iframe>

											</div>

										</div>

										<!--Footer-->
										<div class="modal-footer justify-content-center">
											<span class="mr-4"> Whatch more videos on Instagram!</span> <a
												href="https://www.instagram.com/saxnsip/?hl=en"
												class="fa fa-instagram"
												style="padding: 20px; font-size: 20px; text-align: center; border-radius: 50%; background: #125688;"></a>
											<button type="button"
												class="btn btn-outline-primary btn-rounded btn-md ml-4"
												data-dismiss="modal">Close</button>
										</div>

									</div>
									<!--/.Content-->

								</div>
							</div>
							<!--Modal: Name-->

							<a><img class="img-fluid z-depth-1" src="photo/insta2.png"
								alt="video" data-toggle="modal" data-target="#modal2"></a>

						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-lg-4 col-md-6 mb-4">

							<!--Modal: Name-->
							<div class="modal fade" id="modal3" tabindex="-1" role="dialog"
								aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">

									<!--Content-->
									<div class="modal-content">

										<!--Body-->
										<div class="modal-body mb-0 p-0">

											<div
												class="embed-responsive embed-responsive-1by1 z-depth-1-half">
												<iframe class="embed-responsive-item"
													<?php echo "src=$insta2src"?> width="500" height="550"
													frameborder="0" scrolling="no" allowtransparency="true"></iframe>

											</div>

										</div>

										<!--Footer-->
										<div class="modal-footer justify-content-center">
											<span class="mr-4">Whatch more videos on Instagram!</span> <a
												href="https://www.instagram.com/saxnsip/?hl=en"
												class="fa fa-instagram"
												style="padding: 20px; font-size: 20px; text-align: center; border-radius: 50%; background: #125688;"></a>
											<button type="button"
												class="btn btn-outline-primary btn-rounded btn-md ml-4"
												data-dismiss="modal">Close</button>

										</div>

									</div>
									<!--/.Content-->

								</div>
							</div>
							<!--Modal: Name-->

							<a><img class="img-fluid z-depth-1" src="photo/insta3.png"
								alt="video" data-toggle="modal" data-target="#modal3"></a>

						</div>
						<!-- Grid column -->

						<!-- Grid column -->
						<div class="col-lg-4 col-md-6 mb-4">

							<!--Modal: Name-->
							<div class="modal fade" id="modal5" tabindex="-1" role="dialog"
								aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">

									<!--Content-->
									<div class="modal-content">

										<!--Body-->
										<div class="modal-body mb-0 p-0">

											<div
												class="embed-responsive embed-responsive-1by1 z-depth-1-half">
												<iframe class="embed-responsive-item"
													src="https://www.instagram.com/p/B7ZElq-n4Sm/embed"
													width="500" height="550" frameborder="0" scrolling="no"
													allowtransparency="true"></iframe>
											</div>

										</div>

										<!--Footer-->
										<div class="modal-footer justify-content-center">
											<span class="mr-4">Whatch more videos on Instagram!</span> <a
												href="https://www.instagram.com/saxnsip/?hl=en"
												class="fa fa-instagram"
												style="padding: 20px; font-size: 20px; text-align: center; border-radius: 50%; background: #125688;"></a>
											<button type="button"
												class="btn btn-outline-primary btn-rounded btn-md ml-4"
												data-dismiss="modal">Close</button>

										</div>

									</div>
									<!--/.Content-->

								</div>
							</div>
							<!--Modal: Name-->

							<a><img class="img-fluid z-depth-1" src="photo/insta1.png"
								alt="video" data-toggle="modal" data-target="#modal5"></a>

						</div>
						<!-- Grid column -->

					</div>
					<!-- Grid row -->
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<script>

		$('#modal1').on('hidden.bs.modal', function (e) {
		    // do something...
		    $('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
		});

		$('#modal2').on('hidden.bs.modal', function (e) {
		    // do something...
		    $('#modal2 iframe').attr("src", $("#modal2 iframe").attr("src"));
		});
		$('#modal3').on('hidden.bs.modal', function (e) {
		 	// do something...
		   $('#modal3 iframe').attr("src", $("#modal3 iframe").attr("src"));
		});

		$('#modal4').on('hidden.bs.modal', function (e) {
			// do something...
			$('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
		});

		$('#modal5').on('hidden.bs.modal', function (e) {
			// do something...
			$('#modal5 iframe').attr("src", $("#modal5 iframe").attr("src"));
		});
		$('#modal6').on('hidden.bs.modal', function (e) {
		    // do something...
		    $('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
		});


	</script>
	
	
<?php
include_once "Footer2.php";
?>

</body>
</html>

