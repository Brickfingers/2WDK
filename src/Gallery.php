<!----------------------------------------------------------------------------- 
* Filename:					Gallery.php
* Version:					4.0
* Team Name:                2WDK
* Student Name:				Nick Wright & Fahimeh Karimi
----------------------------------------------------------------------------->

<?php
include "DB_Connect.php";

$imagesource= "photo/";

$sql=
    "SELECT 
        [Gallery].[ReferenceImage1],[Gallery].[ReferenceImage2],
        [Gallery].[ReferenceImage3],[Gallery].[ReferenceImage4],
        [Gallery].[ReferenceImage5]
    FROM [dbo].[Layouts]
    INNER JOIN [dbo].[Gallery]
    ON  [Layouts].[GalleryId] =[Gallery].[GalleryId]
    WHERE [Layouts].[isSet] = 1";

$result = sqlsrv_query($conn, $sql);
if (sqlsrv_fetch($result) === false) {
    die(print_r(sqlsrv_errors(), true));
}
/*
 * [Gallery].[ReferenceThumbNail1],[Gallery].[ReferenceVideo2],
   [Gallery].[ReferenceThumbNail2],[Gallery].[ReferenceVideo3],
   [Gallery].[ReferenceThumbNail3]
 */
$image1src = $imagesource.sqlsrv_get_field($result, 0);
$image2src = $imagesource.sqlsrv_get_field($result, 1);
$image3src = $imagesource.sqlsrv_get_field($result, 2);
$image4src = $imagesource.sqlsrv_get_field($result, 3);
$image5src = $imagesource.sqlsrv_get_field($result, 4);

echo $image1src;
echo $image2src;
echo $image3src;
echo $image4src;
echo $image5src;

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Gallery</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
<link rel='stylesheet' media='screen' type='text/css' href='pagesCSS/Gallery.css' />

<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body class="body">
<?php
include_once "Header.php";
?>
	<div class="container">
		<br> <br>
		<div class="container" id="card">
			<h1 class="header1">GALLERY</h1>
		</div>
		<br> <br>
		<div class="card1">

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
							<img class="img-fluid z-depth-1" <?php echo "src=$image1src"?>>
							<div class="carousel-caption">
								<!-- <h3><?php echo $image1title?></h3>
								<p><?php echo $image1caption?></p> -->

							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image2src"?>>
							<div class="carousel-caption">
								<h3><?php echo $image2title?></h3>
								<p><?php echo $image2caption?></p>
							</div>
						</div>

						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image3src"?>>
							<div class="carousel-caption">
								<h3><?php echo $image3title?></h3>
								<p><?php echo $image3caption?></p>
							</div>
						</div>
						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image4src"?>>
							<div class="carousel-caption">
							<h3><?php echo $image4title?></h3>
							<p><?php echo $image4caption?></p>
							</div>
						</div>

						<div class="carousel-item">
							<img class="img-fluid z-depth-1" <?php echo "src=$image5src"?>>
							<div class="carousel-caption">
								<h3><?php echo $image5title?></h3>
								<p><?php echo $image5caption?></p>
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
			</div>
		</div>
	</div>

	<br>
	<br>	
	
<?php
include_once "Footer.php";
?>

</body>
</html>