<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/Gallery.css">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once "header.php";
?>
<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5">

				<!-- embed youtube video-->
				<div id="myDIV">
					<h1 style="text-align: center;">Ben Joseph</h1>
					<br>
				</div>



				<div id="demo" class="carousel slide" data-ride="carousel">
					<ul class="carousel-indicators">
						<li data-target="#demo" data-slide-to="0" class="active"></li>
						<li data-target="#demo" data-slide-to="1"></li>
						<li data-target="#demo" data-slide-to="2"></li>
					</ul>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="photo/pic1.PNG" alt="Los Angeles" width="1100"
								height="500">
							<div class="carousel-caption">
								<h3>Ben Joseph</h3>
								<p>Sax N Sip!</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="photo/pic2.PNG" alt="Chicago" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Montreal</h3>
								<p>Swaying Souls With Sax N Sip</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="photo/pic3.PNG" alt="Ottawa" width="1100" height="500">
							<div class="carousel-caption">
								<h3>Ottawa Live Music</h3>
								<p>Thank you, Ottawa!</p>
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
				<div class="embed-responsive embed-responsive-16by9">
					<iframe class="embed-responsive-item"
						src="https://www.youtube.com/embed/jpv2tMJJuz0?rel=0"></iframe>
				</div>
				<br> <br> <br>
				<div class="row justify-content-center">
					<div class="col-sx-3  col-centered"
						style="background-color: black;">
						<div class="p-2 border">
							<blockquote class="instagram-media" data-instgrm-version="7">
								<a href="https://www.instagram.com/p/B81hkBWHcX8/"></a>

							</blockquote>
						</div>
						&nbsp;&nbsp;
					</div>
					<div class="col-sx-3  col-centered"
						style="background-color: black;">
						<div class="p-2 border">
							<blockquote class="instagram-media" data-instgrm-version="7">
								<a href="https://www.instagram.com/p/B7ZElq-n4Sm/embed"></a>

							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/instafeed.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script src="//platform.instagram.com/en_US/embeds.js"></script>

<?php
include_once "footer.php";
?>

</body>
</html>

