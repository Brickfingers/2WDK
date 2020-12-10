<!-- this file stores all data in Header and Footer tables -->

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
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="wizardCSS/progressBar.css" />
<link rel="stylesheet" type="text/css" href="wizardCSS/wizard.css" />
</head>

<body>
		<div>
			<br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br /> <br />
				<h1>Header and Footer Wizard</h1>
			</center>
			<div class="row">
				<div class="col-md-12 mx-0">
					<!-- progressbar -->
					<ul id="progressbar" style="text-align: center">
						<li class="active" id="home"><strong>Home Page</strong></li>
						<li class="active" id="headerFooter"><strong>Header and Footer</strong></li>
						<li id="about"><strong>About Page</strong></li>
						<li id="gallery"><strong>Gallery Page</strong></li>
						<li id="booking"><strong>Booking Page</strong></li>
						<li id="layout"><strong>Layout</strong></li>
						<li id="finish"><strong>Finish</strong></li>
					</ul>
				</div>
			</div>
			<div>
				<div>
					<div class="card-body p-5">

<?php
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
    header("Location: InsertToAbout.php");
}
?>

	<form name="myForm" method="POST">

							<!-- Get Header data-->
							<label for="title"><h4>Header's title:</h4></label><br> <span
								style="color: red" id="error-title"></span>
							<textarea rows="2" cols="50" name="title"></textarea>
							<br /> <br /> <label for="subtitle1"><h4>Header's first subtitle:</h4></label><br>
							<span style="color: red" id="error-subtitle1"></span>
							<textarea rows="2" cols="50" name="subtitle1"></textarea>
							<br /> <br /> <label for="subtitle2"><h4>Header's second
									subtitle:</h4></label><br> <span style="color: red"
								id="error-subtitle2"></span>
							<textarea rows="2" cols="50" name="subtitle2"></textarea>
							<br /> <br />

							<!-- Get Footer data-->
							<label for="youtubeLink"><h4>YouTube Link:</h4></label><br> <span
								style="color: red" id="error-youtubeLink"></span> <input
								class="footerLink" type="url" id="youtubeLink"
								name="youtubeLink"></input> <br /> <br /> <label for="instaLink"><h4>Instagram
									Link:</h4></label><br> <span style="color: red"
								id="error-instaLink"></span> <input class="footerLink"
								type="url" id="instaLink" name="instaLink"></input> <br /> <br />
							<label for="facebookLink"><h4>Facebook Link:</h4></label><br> <span
								style="color: red" id="error-facebookLink"></span> <input
								class="footerLink" type="url" id="FacebookLink"
								name="facebookLink"></input> <br /> <br /> <br />
							<div>
								<center>
									<a class="next" href="InsertIntoHome.php">&laquo; Previous</a>
									<button class="next" type="submit" name="submit"
										onclick="return validateForm()">Next &raquo;</button>
								</center>
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
         }else{
        	 document.getElementById('error-title').innerHTML ="";
             }
    if (title.length>100) {
        document.getElementById('error-title').innerHTML = " Title length should be less than 100 characters *";
        return false;
        }else{
       	 document.getElementById('error-title').innerHTML ="";
        }
    if (subtitle1.length<1) {
        document.getElementById('error-subtitle1').innerHTML = " Please Enter Header's first subtitle*";      
        return false;
        }else{
       	 document.getElementById('error-subtitle1').innerHTML ="";
        }
    if (subtitle1.length>100) {
        document.getElementById('error-subtitle1').innerHTML = " The Maximum number of characters for subtitle is 100 *";      
        return false;
        }else{
       	 document.getElementById('error-subtitle1').innerHTML ="";
        }

    if (subtitle2.length<1) {
        document.getElementById('error-subtitle2').innerHTML = " Please Enter Header's second subtitle*";      
        return false;
        }else{
       	 document.getElementById('error-subtitle2').innerHTML ="";
        }
    if (subtitle2.length>100) {
        document.getElementById('error-subtitle2').innerHTML = " The Maximum number of characters for subtitle is 100 *";      
        return false;
        }else{
       	 document.getElementById('error-subtitle2').innerHTML ="";
        }

    if (youtubelink.length<1) {
        document.getElementById('error-youtubeLink').innerHTML = " Please Enter a YouTube link *";
        return false;
         }else{
           	 document.getElementById('error-youtubeLink').innerHTML ="";
         }
    if (instalink.length<1) {
        document.getElementById('error-instaLink').innerHTML = " Please Enter an Instagram link *";
        return false;
         }else{
           	 document.getElementById('error-instaLink').innerHTML ="";
         }
    if (facebooklink.length<1) {
        document.getElementById('error-facebookLink').innerHTML = " Please Enter a Facebook link *";
        return false;
         }else{
           	 document.getElementById('error-facebookLink').innerHTML ="";
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
			</div>
		</div>

	</body>

</html>
