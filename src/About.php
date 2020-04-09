<!----------------------------------------------------------------------------- 
* Filename:					About.php
* Version:					3.0
* Team Name:                2WDK
* Student Name:				Fahimeh Karimi - 40900086
* Course Name:				CST 8353 - Software design and testing
* Professor:			    Leanne Seaward
* Purpose:                  This page includes a Photo and Biography of Ben Joseph
                            the Bio can be updated by admin using Admin page.
-------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/About.css" />
<!-- <link rel="stylesheet" type="text/css" href="css2/About2.css" /> -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<div class="body">
	<?php
include_once "Header.php";
?>
	
	<div class="container bootstrap snippet">

		<br>
		<br>
		<div class="card bg-dark text-white">
			<div class="card-header">
				<h1 style="text-align: center; color: white;">ABOUT</h1>
			</div>

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
							<p align="justify"><?php
                            $myfile = fopen("Admin/About/AboutText.txt", "r") or die("Unable to open file!");
                            echo fread($myfile,filesize("Admin/About/AboutText.txt"));
                            fclose($myfile);
                            ?></p>
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
include_once "Footer.php";
?>
</div>
</html>
