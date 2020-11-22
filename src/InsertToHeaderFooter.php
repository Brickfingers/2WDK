<!-- this file stores all data in Header and Footer tables -->

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.next {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
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
echo "<h2> Header and Footer Wizard </h2>";
include "DB_Connect.php";
if (isset($_POST['submit'])) {
    $headertitle = $_POST["title"];
    $subTitle1 = $_POST["subtitle1"];
    $subTitle2 = $_POST["subtitle2"];
    $youTube = $_POST["youtubeLink"];
    $instagram = $_POST["instaLink"];
    $facebook = $_POST["facebookLink"];

    $headertitle = str_replace("'", "''", $headertitle);
    $subTitle1 = str_replace("'", "''", $subTitle1);
    $subTitle2 = str_replace("'", "''", $subTitle2);
    $youTube = str_replace("'", "''", $youTube);
    $instagram = str_replace("'", "''", $instagram);
    $facebook = str_replace("'", "''", $facebook);

    $sql = "INSERT INTO [dbo].[Header]
           ([Title]
           ,[Subtitle1]
           ,[Subtitle2])    
            SELECT '$headertitle' ,'$subTitle1','$subTitle2'
            
            INSERT INTO [dbo].[Footer]
           ([FacebookLink]
           ,[InstagramLink]
           ,[YoutubeLink])
            SELECT '$facebook' ,'$instagram','$youTube'
            ";

    sqlsrv_query($conn, $sql);

    echo "<font color='green'>" . "Header and Footer is set." . "</font>";
    echo " <br /> <br />";
    header("Location: InsertToAbout.php");
}
?>

	<form name="myForm" method="POST" onsubmit="return validateForm()">

		<!-- Get Header data-->
		<label for="title">Header's title:</label><br> <span
			style="color: red" id="error-title"></span>
		<textarea rows="2" cols="50" name="title"></textarea>
		<br /> <br /> <label for="subtitle1">Header's first subtitle:</label><br>
		<span style="color: red" id="error-subtitle1"></span>
		<textarea rows="2" cols="50" name="subtitle1"></textarea>
		<br /> <br /> <label for="subtitle2">Header's second subtitle:</label><br>
		<span style="color: red" id="error-subtitle2"></span>
		<textarea rows="2" cols="50" name="subtitle2"></textarea>
		<br /> <br />

		<!-- Get Footer data-->
		<label for="youtubeLink">YouTube Link:</label><br> 
		<span style="color: red" id="error-youtubeLink"></span> 
		<input type="url" id="youtubeLink" name="youtubeLink"></input> 
		<br /> <br /> 
		<label for="instaLink">Instagram Link:</label><br> 
		<span style="color: red" id="error-instaLink">
		</span> <input type="url" id="instaLink" name="instaLink"></input> 
		<br /> <br /> 
		<label for="facebookLink">Facebook Link:</label><br> 
		<span style="color: red" id="error-facebookLink"></span>
		<input type="url" id="FacebookLink" name="facebookLink"></input> 
		<br /><br />
		<div>
			<button class="next" type="submit" name="submit">Next &raquo;</button>
		</div>
		<br /> <br />
	</form>

<script>
function validateForm(){

	var title = document.forms["myForm"]["title"].value;
	var subtitle1 = document.forms["myForm"]["subtitle1"].value;
	var subtitle2 = document.forms["myForm"]["subtitle2"].value;
	var youtubelink = document.forms["myForm"]["youtubeLink"].value;
	var instalink = document.forms["myForm"]["instaLink"].value;
	var facebooklink = document.forms["myForm"]["facebookLink"].value;

    if (title.length<1) {
        document.getElementById('error-title').innerHTML = " Please Enter a title *";
        return false;
         }
    if (title.length>100) {
        document.getElementById('error-title').innerHTML = " Title length should be less than 100 characters *";
        return false;
        }
    if (subtitle1.length<1) {
        document.getElementById('error-subtitle1').innerHTML = " Please Enter Header's first subtitle*";      
        return false;
        }
    if (subtitle1.length>100) {
        document.getElementById('error-subtitle1').innerHTML = " The Maximum number of characters for subtitle is 100 *";      
        return false;
        }

    if (subtitle2.length<1) {
        document.getElementById('error-subtitle2').innerHTML = " Please Enter Header's second subtitle*";      
        return false;
        }
    if (subtitle2.length>100) {
        document.getElementById('error-subtitle2').innerHTML = " The Maximum number of characters for subtitle is 100 *";      
        return false;
        }

    if (youtubelink.length<1) {
        document.getElementById('error-youtubeLink').innerHTML = " Please Enter a YouTube link *";
        return false;
         }
    if (instalink.length<1) {
        document.getElementById('error-instaLink').innerHTML = " Please Enter an Instagram link *";
        return false;
         }
    if (facebooklink.length<1) {
        document.getElementById('error-facebookLink').innerHTML = " Please Enter a Facebook link *";
        return false;
         }
          
}
</script>
</body>
</html>
