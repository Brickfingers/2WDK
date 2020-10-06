<?php

$image1src = "photo/pic8.jpg";
$image1title = "Ben Joseph";
$image1caption = "Saxophonist";

$image2src = "photo/pic9.png";
$image2title = "Montreal";
$image2caption = "Swaying Souls With Sax N Sip";

$image3src = "photo/pic9.jpg";
$image3title ="Toronto" ;
$image3caption ="Trying Something New" ;

$image4src = "photo/pic3.jpg";
$image4title = "title";
$image4caption ="caption" ;

$image5src = "photo/pic1.png";
$image5title = "Ottawa";
$image5caption = "Nothing But Love";

$image6src = "photo/pic10.jpg";
$image6title = "title";
$image6caption = "caption";

/*$youtube1src = "https://www.youtube.com/embed/2e5zITHhVds?rel=0";
$youtube1picsrc ="photo/pic12.png" ;

$youtube2src = "https://www.youtube.com/embed/2p2hC--loq4?rel=0";
$youtube2picsrc ="photo/pic10.png" ;

$youtube3src = "https://www.youtube.com/embed/jpv2tMJJuz0?rel=0";
$youtube3picsrc = "photo/pic11.png";*/

$insta1src = "https://www.instagram.com/p/B81hkBWHcX8/embed";
$insta1picsrc = "photo/insta2.png";

$insta2src = "https://www.instagram.com/p/B9Xnus_nTau/embed";
$insta2picsrc = "photo/insta3.png" ;

$insta3src = "https://www.instagram.com/p/B7ZElq-n4Sm/embed";
$insta3picsrc ="photo/insta1.png" ;

// read json file to get the sources of pics and vids
$file = "test.json";
$data = json_decode(file_get_contents($file), true);
$image1src = $data['image1src'];
$image1title = $data['image1title'];
$image1caption = $data['image1caption'];

$image2src = $data['image2src'];
$image2title = $data['image2title'];
$image2caption = $data['image2caption'];

$image3src = $data['image3src'];
$image3title = $data['image3title'];
$image3caption = $data['image3caption'];

$image4src = $data['image4src'];
$image4title = $data['image4title'];
$image4caption = $data['image4caption'];

$image5src = $data['image5src'];
$image5title = $data['image5title'];
$image5caption = $data['image5caption'];

$image6src = $data['image6src'];
$image6title = $data['image6title'];
$image6caption = $data['image6caption'];

/*$youtube1src = $data['youtube1src'];
$youtube1picsrc = $data['youtube1picsrc'];

$youtube2src = $data['youtube2src'];
$youtube2picsrc = $data['youtube2picsrc'];

$youtube3src = $data['youtube3src'];
$youtube3picsrc = $data['youtube3picsrc'];*/

$insta1src = $data['insta1src'];
$insta1picsrc = $data['insta1picsrc'];

$insta2src = $data['insta2src'];
$insta2picsrc = $data['insta2picsrc'];

$insta3src = $data['insta3src'];
$insta3picsrc = $data['insta3picsrc'];
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
<body style="background-color: #393f4d;">
<?php
include_once "Header2.php";
?>
	<div class="container">
		<br> <br>
		<div class="container" id="card">
			<h1
				style="text-align: center; color: #d4d4dc; font-family: 'Poppins';">GALLERY</h1>
		</div>
		<br> <br>
		<div class="card1" style="background: #393f4d;">

			<div class="card-body p-5">

				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
						<li data-target="#demo" data-slide-to="3"></li>
						<li data-target="#demo" data-slide-to="4"></li>
						<li data-target="#demo" data-slide-to="5"></li>
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="img-fluid z-depth-1" <?php echo "src=$image1src"?>
								style="width: 650px">
							<div class="carousel-caption">
								<h3><?php echo $image1title?></h3>
								<p><?php echo $image1caption?></p>

							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image2src"?>
								style="width: 650px">
							<div class="carousel-caption">
								<h3><?php echo $image2title?></h3>
								<p><?php echo $image2caption?></p>
							</div>
						</div>

						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image3src"?>
								style="width: 650px">
							<div class="carousel-caption">
								<h3><?php echo $image3title?></h3>
								<p><?php echo $image3caption?></p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image4src"?>
								style="width: 650px">
							<div class="carousel-caption">
							<h3><?php echo $image4title?></h3>
							<p><?php echo $image4caption?></p>
							</div>
						</div>

						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image5src"?>
								style="width: 650px">
							<div class="carousel-caption">
								<h3><?php echo $image5title?></h3>
								<p><?php echo $image5caption?></p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image6src"?>
								style="width: 650px">
							<div class="carousel-caption">
								<h3><?php echo $image6title?></h3>
								<p><?php echo $image6caption?></p>
							</div>
						</div>

					</div>
					<a class="carousel-control-prev" href="#demo" data-slide="prev"> <span
						class="carousel-control-prev-icon"></span>
					</a> <a class="carousel-control-next" href="#demo"
						data-slide="next"> <span class="carousel-control-next-icon"></span>
					</a>
				</div>
				

				<br/><br/><br/>

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
												href="<?php
            $myfile = fopen("Admin/SocialMediaLinks/InstagramLink.txt", "r") or die("Unable to open file!");
            echo fread($myfile, filesize("Admin/SocialMediaLinks/InstagramLink.txt"));
            fclose($myfile);
            ?>"
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

							<a><img class="img-fluid z-depth-1"
								<?php echo "src=$insta1picsrc"?> alt="video" data-toggle="modal"
								data-target="#modal2"></a>

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
												href="<?php
            $myfile = fopen("Admin/SocialMediaLinks/InstagramLink.txt", "r") or die("Unable to open file!");
            echo fread($myfile, filesize("Admin/SocialMediaLinks/InstagramLink.txt"));
            fclose($myfile);
            ?>"
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

							<a><img class="img-fluid z-depth-1"
								<?php echo "src=$insta2picsrc"?> alt="video"
								data-toggle="modal" data-target="#modal3"></a>

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
													<?php echo "src=$insta3src"?> width="500" height="550"
													frameborder="0" scrolling="no" allowtransparency="true"></iframe>
											</div>

										</div>

										<!--Footer-->
										<div class="modal-footer justify-content-center">
											<span class="mr-4">Whatch more videos on Instagram!</span> <a
												href="<?php
            $myfile = fopen("Admin/SocialMediaLinks/InstagramLink.txt", "r") or die("Unable to open file!");
            echo fread($myfile, filesize("Admin/SocialMediaLinks/InstagramLink.txt"));
            fclose($myfile);
            ?>"
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

							<a><img class="img-fluid z-depth-1"
								<?php echo "src=$insta3picsrc"?> alt="video" data-toggle="modal"
								data-target="#modal5"></a>

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

