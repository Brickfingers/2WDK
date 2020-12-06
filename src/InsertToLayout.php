<!-- this file stores all data in layouts table -->

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Wizard Home Page</title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Gallery.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="wizardCSS/progressBar.css" />
<link rel="stylesheet" type="text/css" href="wizardCSS/wizard.css" />
</head>

<div class="body">
	<body>
		<div class="container">
			<br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br />
				<br />
				<h1 style="text-align: center; color: #71db77;"> Layout Wizard </h1>
			</center>
						<div class="row" >
				<div class="col-md-12 mx-0">
					<!-- progressbar -->
					<ul id="progressbar" style="text-align: center">
						<li class="active" id="home"><strong>Home Page</strong></li>
						<li class="active" id="headerFooter"><strong>Header and Footer</strong></li>
						<li class="active" id="about"><strong>About Page</strong></li>
						<li class="active" id="layout"><strong>Layout</strong></li>
					</ul>
				</div>
			</div>
			<div class="  text-white">

				<div style="background: #222222;">
					<div class="card-body p-5">


<?php

date_default_timezone_set("America/Toronto");

include "DB_Connect.php";
if (isset($_POST['submit'])) {
    $LayoutName = $_POST["layoutName"];
    $LayoutName = str_replace("'", "''", $LayoutName);
    
    //Theme code would be set to 1 or 2 or 3
    $themeCode = $_POST["theme"];
    //Unset the current layout (set 'isSet' column of the current set layout to 0)
    $layoutSql="UPDATE Layouts
                SET isSet = 0
                WHERE isSet=1";
    sqlsrv_query($conn, $layoutSql);
    
    $homeSql = "SELECT Max(HomePageId) FROM HomePage";
    $homeResult = sqlsrv_query($conn, $homeSql);
    if (sqlsrv_fetch($homeResult) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $homePageId = sqlsrv_get_field($homeResult, 0);
    
    $aboutSql = "SELECT Max(AboutId) FROM About";
    $aboutResult = sqlsrv_query($conn, $aboutSql);
    if (sqlsrv_fetch($aboutResult) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $aboutId = sqlsrv_get_field($aboutResult, 0);
    
    $gallerySql = "SELECT Max(GalleryId) FROM Gallery";
    $galleryResult = sqlsrv_query($conn, $gallerySql);
    if (sqlsrv_fetch($galleryResult) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $galleryId = sqlsrv_get_field($galleryResult, 0);
    
    $bookingSql = "SELECT Max(BookingId) FROM Booking";
    $bookingResult = sqlsrv_query($conn, $bookingSql);
    if (sqlsrv_fetch($bookingResult) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $bookingId = sqlsrv_get_field($bookingResult, 0);
    
    $headerSql = "SELECT Max(HeaderId) FROM Header";
    $headerResult = sqlsrv_query($conn, $headerSql);
    if (sqlsrv_fetch($headerResult) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $headerId = sqlsrv_get_field($headerResult, 0);
    
    $footerSql = "SELECT Max(FooterId) FROM Footer";
    $footerResult = sqlsrv_query($conn, $footerSql);
    if (sqlsrv_fetch($footerResult) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $footerId = sqlsrv_get_field($footerResult, 0);
      
    $todayDate = date("Y-m-d");
       
    $sql = "INSERT INTO [dbo].[Layouts]
           ([LayoutName]
           ,[HomePageId]
           ,[AboutId]
           ,[GalleryId]
           ,[BookingId]
           ,[HeaderId]
           ,[FooterId]
           ,[Created_at]
           ,[IsSet]
           ,[ThemeCode])    
            SELECT '$LayoutName',$homePageId ,$aboutId,$galleryId,$bookingId,$headerId,$footerId
                    ,'$todayDate', 1 ,'$themeCode'
            ";

    sqlsrv_query($conn, $sql);
    echo "<font color='green'>" . "Layout is set.  " . "</font>";
    echo "<a href=\"HomePage.php\" id=\"myBtn\" class=\"next\">Try your website! </a>";
    echo " <br /> <br />";
}
?>

		<form name="myForm" method="POST">

		<!-- Get Layout's name-->
		<label for="layoutName"><h4>Layout Name:</h4></label><br> 
		<span style="color: red" id="error-layoutName"></span> 
		<input class="layoutName" type="text" id="layoutName" name="layoutName"></input> 
		<br /> <br />
		<h4>Please select your preferred Theme:</h4>
		
		<br />
		<center>
		<table>
    		<tr>
                <th>
                    <div>
              		<input type="radio" id="dark" name="theme" value="darkTheme" checked>
              		<label for="dark"><h5>Dark Theme </h5></label><br /> 
              		<img src="photo/darkTheme.PNG" width="300"></img>
              		&nbsp;
            		</div>
				</th>
                <th>
                	<div>
             		<input type="radio" id="light" name="theme" value="lightTheme">
             		<label for="light"><h5>Light Theme</h5></label><br /> 
             		<img src="photo/lightTheme.PNG" width="300"></img>
             		&nbsp;
            		</div>
				</th>
                <th>
                	<div>
             		 <input type="radio" id="blue" name="theme" value="blueTheme">
             		 <label for="light"><h5>Blue Theme</h5></label><br /> 
             		 <img src="photo/BlueTheme.PNG" width="300"></img>
            		</div>
				</th>
     		</tr>
		
		</table>	
		</center>	
		<br /> <br /><br />
		
		<div>
		<center>
		<a class="next" href="InsertToAbout.php">&laquo; Previous</a>		
		<button class="next" type="submit" name="submit" onclick="return validateForm()">Next &raquo;</button>
		</center>
		</div>
		
		<br /> <br />
	</form>

	<script>
function validateForm(){

	var name = document.forms["myForm"]["layoutName"].value;

    if (name.length<1) {
        document.getElementById('error-layoutName').innerHTML = " Please Enter a Name *";
        return false;
         }
    if (name.length>100) {
        document.getElementById('error-layoutName').innerHTML = " Name length should be less than 100 characters *";
        return false;
        }
}
</script>
 </div>
				</div>
				<center>
					&copy;
					<script>document.write(new Date().getFullYear());</script>
					Copyright - 2WDK Team
				</center>
				<br />
				<div />
			</div>
	
</body>
</html>
