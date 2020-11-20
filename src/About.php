<!----------------------------------------------------------------------------- 
* Filename:					About.php
* Version:					4.0
* Team Name:                2WDK
* Student Name:				Fahimeh Karimi 
-------------------------------------------------------------------------------->
<?php
include "DB_Connect.php";

$imagesource= "photo/";

$sql="SELECT [About].[Title],[About].[AboutImage],[About].[Content]
            FROM [dbo].[Layouts]
            INNER JOIN [dbo].[About]
            ON [About].[AboutId] = [Layouts].[AboutId]
            WHERE [Layouts].[isSet] = 1";

$result = sqlsrv_query($conn, $sql);
if (sqlsrv_fetch($result) === false) {
    die(print_r(sqlsrv_errors(), true));
}
$aboutTitle = sqlsrv_get_field($result, 0);
$aboutImage = $imagesource.sqlsrv_get_field($result, 1);
$aboutContent = sqlsrv_get_field($result, 2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel='stylesheet' media='screen' type='text/css' href='pagesCSS/About.css' />

</head>

<body class="body">
<?php include_once "Header.php"; ?>

	<div class="container bootstrap snippet">

		<br>
		<br>
		<div class="container" id="card">
			<h1 class="header1">ABOUT</h1>
		</div>
		<br> 
		<br>		
		<div class="profile card">

			<div class="profile-body">
				<div class="profile-bio">

					<div class="row">
						<div class="col-md-5 text-center">
						<br><br> <img class="img-thumbnail md-margin-bottom-10" <?php echo "src= $aboutImage" ?> alt="">
						</div>
						<div class="col-md-7">
							<h2 class="header2"><?php echo $aboutTitle ?></h2>
							<hr>
							<p class="aboutText"><?php echo $aboutContent ?></p>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>
	<br>
	<?php include_once "Footer.php"; ?>
</body>
</html>
