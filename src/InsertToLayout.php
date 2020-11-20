<!-- this file stores all data in layouts table -->

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.next {
	background-color: #4CAF50;
	color: white;
}

a {
	text-decoration: none;
	display: inline-block;
	padding: 8px 16px;
}

.myclass {
	background-color: #B3EEF5;
	padding: 8px 16px;
}
</style>
</head>

<body class="myclass">
<?php

date_default_timezone_set("America/Toronto");

echo "<h2> Layout Wizard </h2>";
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
    echo "<a href=\"Homepage.php\" id=\"myBtn\" class=\"next\">Try your website!</a>";
    echo " <br /> <br />";
}
?>

		<form name="myForm" method="POST" onsubmit="return validateForm()">

		<!-- Get Layout's name-->
		<label for="layoutName">Layout Name:</label><br> 
		<span style="color: red" id="error-layoutName"></span> 
		<input type="text" id="layoutName" name="layoutName"></input> 
		<br /> <br />
		<p>Please select your preferred Theme:</p>
		<div>
		
  		<input type="radio" id="dark" name="theme" value="darkTheme" checked>
  		<label for="dark"> Dark Theme </label><br /> 
  		<img src="photo/darkTheme.PNG" width="200"></img>
		</div>
		<br /> 
		<div>
 		 <input type="radio" id="light" name="theme" value="lightTheme">
 		 <label for="light">Light Theme</label><br /> 
 		 <img src="photo/lightTheme.PNG" width="200"></img>
		</div>
		<br /> <br />
		<div>
			<button type="submit" name="submit">Submit</button>

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
</body>
</html>
