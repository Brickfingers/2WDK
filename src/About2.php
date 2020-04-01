<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<?php
include_once "Header.php";
?>

<style>
/* body { */
/* 	background: url("wallpaper/gold1.jpg") no-repeat center center fixed; */
/* 	-webkit-background-size: cover; */
/* 	-moz-background-size: cover; */
/* 	background-size: cover; */
/* 	-o-background-size: cover; */
/* } */

.card {
	-moz-border-radius: 2%;
	-webkit-border-radius: 2%;
	border-radius: 2%;
	box-shadow: 5px 5px 0 rgba(0, 0, 0, 0.5);
	
}

.profile .profile-body {
	padding: 20px;
	background: #f7f7f7;
	
}

.profile .profile-bio {
	background: #fff;
	position: relative;
	padding: 15px 10px 5px 15px;
}

.profile .profile-bio a {
	left: 50%;
	bottom: 20px;
	margin: -62px;
	text-align: center;
	position: absolute;
}

.profile .profile-bio h2 {
	margin-top: 0;
	font-weight: 200;
}

h1, h2, h3, h4, h5, h6 {
	color: black;
	margin-top: 5px;
	text-shadow: none;
	font-weight: normal;
	font-family: 'Open Sans', sans-serif;
}

h2 {
	font-size: 24px;
	line-height: 33px;
}

p, li, li a {
	color:black;
}


</style>

</head>
<body style="background-color: #83677B;">

	<div class="container bootstrap snippet">
	
	<br><br>
			<div class="card bg-dark text-white">
			 <div class="card-header"><h1 style="text-align: center; color:white;">ABOUT</h1></div>
			 
			</div>
			<br> <br>
		<div class="profile card">

			<div class="profile-body">
				<div class="profile-bio" style="background-color: #E3E2DF;">
				
				
					<div class="row">
						<div class="col-md-5 text-center">
							<br> <img class="img-thumbnail md-margin-bottom-10"
								src="photo/pic4.jpg" alt="">
						</div>
						<div class="col-md-7">
							<h2>Ben Joseph</h2>
							<hr>
							<p>Ben Joseph is a Haitian American born and raised in Newark,
								New Jersey. He is the youngest of 4 brothers who are all
								musically gifted. At the age of 8, Ben found his passion for the
								saxophone. He studied classical music and played in multiple
								symphonies and bands but knew that his love for the sax came
								from somewhere else. At the age of 12 he started studying jazz
								and instantly knew that it was his calling. Some of his favorite
								artists include David Sanbourn, Kenny G, Gerald Albright, and
								Warren Hill. Since then, he has been studying music while
								mastering multiple genres at the same time. Today he continues
								to excel doing live performances, both for private and public
								functions in Ottawa, ON where he currently resides. Ben is on a
								steady rise and has managed to build a loyal following of
								supporters who resonate with his undeniable gift and passion for
								music.</p>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>
	<?php
include_once "footer.php";
?>
</body>
</html>