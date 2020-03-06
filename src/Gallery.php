<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script
	src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
/* Make the image fully responsive */
.carousel-inner img {
	width: 100%;
	height: 100%;
}

h1   {color:#20B2AA;}
table, th, td {
	border: 1px solid black;
	padding: 50px;
}

table {
	border-spacing: 200px;
}

body {
	background: url("photo/forest.jpg") no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
	-o-background-size: cover;
}
#myDIV {
  animation: mymove 5s infinite;
}

@keyframes mymove {
  50% {text-shadow: 10px 20px 30px blue;}
}

.center {
	position: absolute;
	left: 0;
	top: 50%;
	width: 100%;
	text-align: center;
	font-size: 18px;
}

.card-body {
	background-color: black;
}
</style>
</head>
<body>
<?php
// include_once "header.php";
?>
<div class="container">
		<div class="card border-0 shadow my-4">
			<div class="card-body p-4">

				<!-- embed youtube video-->
				<div id="myDIV">
				 <h1 style="text-align:center;">Ben Joseph</h1> <br>
				 </div>
				<p align="center">
				 
					<iframe width="860" height="615"
						src="https://www.youtube.com/embed/wOnWIXlXxwI" frameborder="0"
						allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
						allowfullscreen></iframe>
				</p>

				<br> <br> <br>

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
				<table>
					<tr>

						<td>
							<!-- embed Instagram -one post-->
							<blockquote class="instagram-media" data-instgrm-version="7">
								<a href="https://www.instagram.com/p/B81hkBWHcX8/"></a>
								<script src="//platform.instagram.com/en_US/embeds.js"></script>
							</blockquote>

						</td>
						<td>
							<!-- embed Instagram -another way-->
							<blockquote class="instagram-media" data-instgrm-version="7">
								<a href="https://www.instagram.com/p/B7ZElq-n4Sm/"></a>
							<script src="//platform.instagram.com/en_US/embeds.js"></script>
							</blockquote>

						</td>
					</tr>

				</table>
			</div>


		</div>

	</div>

<?php
// include_once "footer.php";
?>
<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/instafeed.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	
</body>
</html>






