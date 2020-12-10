<!----------------------------------------------------------------------------- 
* Filename:					InsertIntoGallery.php
* Version:					4.0
* Team Name:                2WDK
* Student Name:				Nick Wright
-------------------------------------------------------------------------------->

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
<link rel="stylesheet" type="text/css" href="pagesCSS/Gallery.css" />
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
				<img src="photo/logo.png" alt="logo"> <br /> <br />
				<h1 style="text-align: center; color: #71db77;">Gallery Wizard</h1>

			</center>
			<div class="row">
				<div class="col-md-12 mx-0">
					<!-- progressbar -->
					<ul id="progressbar" style="text-align: center">
						<li class="active" id="home"><strong>Home Page</strong></li>
						<li class="active" id="headerFooter"><strong>Header and Footer</strong></li>
						<li class="active" id="about"><strong>About Page</strong></li>
						<li class="active" id="gallery"><strong>Gallery Page</strong></li>
						<li id="booking"><strong>Booking Page</strong></li>
						<li id="layout"><strong>Layout</strong></li>
						<li id="finish"><strong>Finish</strong></li>
					</ul>
				</div>
			</div>
			<div class="text-white">

				<div style="background: #222222;">
					<div class="card-body p-5">



<?php
// echo "<h2> Gallery Wizard </h2>";
include "DB_Connect.php";
if (isset($_POST['submit'])) {
    $referenceImageName1 = $_FILES["referenceImage1"]["name"];
    $referenceImageName2 = $_FILES["referenceImage2"]["name"];
    $referenceImageName3 = $_FILES["referenceImage3"]["name"];
    $referenceImageName4 = $_FILES["referenceImage3"]["name"];
    $referenceImageName5 = $_FILES["referenceImage5"]["name"];

    $target_dir_img = "photo/";
    $target_file_img1 = $target_dir_img . basename($_FILES["referenceImage1"]["name"]);
    $target_file_img2 = $target_dir_img . basename($_FILES["referenceImage2"]["name"]);
    $target_file_img3 = $target_dir_img . basename($_FILES["referenceImage3"]["name"]);
    $target_file_img4 = $target_dir_img . basename($_FILES["referenceImage4"]["name"]);
    $target_file_img5 = $target_dir_img . basename($_FILES["referenceImage5"]["name"]);

    if ((move_uploaded_file($_FILES["referenceImage1"]["tmp_name"], $target_file_img1)) &&
        (move_uploaded_file($_FILES["referenceImage2"]["tmp_name"], $target_file_img2)) &&
        (move_uploaded_file($_FILES["referenceImage3"]["tmp_name"], $target_file_img3)) &&
        (move_uploaded_file($_FILES["referenceImage4"]["tmp_name"], $target_file_img4)) &&
        (move_uploaded_file($_FILES["referenceImage5"]["tmp_name"], $target_file_img5))) {

        $referenceImageName1 = str_replace("'", "''", $referenceImageName1);
        $referenceImageName2 = str_replace("'", "''", $referenceImageName2);
        $referenceImageName3 = str_replace("'", "''", $referenceImageName3);
        $referenceImageName4 = str_replace("'", "''", $referenceImageName4);
        $referenceImageName5 = str_replace("'", "''", $referenceImageName5);

        $sql = "INSERT INTO [dbo].[Gallery]
           ([ReferenceImage1],[ReferenceImage2],
            [ReferenceImage3],[ReferenceImage4],
            [ReferenceImage5])
                
            SELECT '$referenceImageName1','$referenceImageName2','$referenceImageName3',
                    '$referenceImageName4','$referenceImageName5'";

        $result = sqlsrv_query($conn, $sql);

        if ($result === false) {
            if (($errors = sqlsrv_errors()) != null) {
                foreach ($errors as $error) {
                    echo "SQLSTATE: " . $error['SQLSTATE'] . "<br />";
                    echo "code: " . $error['code'] . "<br />";
                    echo "message: " . $error['message'] . "<br />";
                }
            }
        }

        echo "<font color='green'>" . "Gallery page is set." . "</font>";

        echo " <br /> <br />";
        header("Location: InsertIntoBooking.php");
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

?>

<form name="myForm" method="POST" enctype="multipart/form-data">
	<h4>Upload the first image:</h4>
	<input type="file" id="referenceImage1"
		onchange="return image_validate(this)" name="referenceImage1"
		accept="image/*" value="1" /> <span style="color: red"
		id="error-imagefile1"></span>
	<!-- Image preview -->
	<br /> <br />
	<div id="imagePreview1"></div>
	<br />

	<h4>Upload the second image:</h4>
	<input type="file" id="referenceImage2"
		onchange="return image_validate(this)" name="referenceImage2"
		accept="image/*" value="2" /> <span style="color: red"
		id="error-imagefile2"></span>
	<!-- Image preview -->
	<br /> <br />
	<div id="imagePreview2"></div>
	<br />

	<h4>Upload the third image:</h4>
	<input type="file" id="referenceImage3"
		onchange="return image_validate(this)" name="referenceImage3"
		accept="image/*" value="3" /> <span style="color: red"
		id="error-imagefile3"></span>
	<!-- Image preview -->
	<br /> <br />
	<div id="imagePreview3"></div>
	<br />

	<h4>Upload the fourth image:</h4>
	<input type="file" id="referenceImage4"
		onchange="return image_validate(this)" name="referenceImage4"
		accept="image/*" value="4" /> <span style="color: red"
		id="error-imagefile4"></span>
	<!-- Image preview -->
	<br /> <br />
	<div id="imagePreview4"></div>
	<br />

	<h4>Upload the fifth image:</h4>
	<input type="file" id="referenceImage5"
		onchange="return image_validate(this)" name="referenceImage5"
		accept="image/*" value="5" /> <span style="color: red"
		id="error-imagefile5"></span>
	<!-- Image preview -->
	<br /> <br />
	<div id="imagePreview5"></div>
	<br /> <br />

	<div>
		<center>
			<a class="next" href="InsertToLayout.php">&laquo; Previous</a>
			<button class="next" type="submit" name="submit"
				onclick="return validateForm()">Next &raquo;</button>
		</center>
	</div>
	<br />
</form>
<script>
function validateForm(){
	var imagefile1 = document.forms["myForm"]["referenceImage1"].value;
	var imagefile2 = document.forms["myForm"]["referenceImage2"].value;
	var imagefile3 = document.forms["myForm"]["referenceImage3"].value;
	var imagefile4 = document.forms["myForm"]["referenceImage4"].value;
	var imagefile5 = document.forms["myForm"]["referenceImage5"].value;
	
	if ((imagefile1.length<1)) {
        document.getElementById('error-imagefile1').innerHTML = " Please select an image file to upload *"
        return false;
    }
	if ((imagefile1.length>100)) {
        document.getElementById('error-imagefile1').innerHTML = " Please rename your file to less than 100 characters *"
        return false;
    }
	if ((imagefile2.length<1)) {
        document.getElementById('error-imagefile2').innerHTML = " Please select an image file to upload *"
        return false;
    }
	if ((imagefile2.length>100)) {
        document.getElementById('error-imagefile2').innerHTML = " Please rename your file to less than 100 characters *"
        return false;
    }
	if ((imagefile3.length<1)) {
        document.getElementById('error-imagefile3').innerHTML = " Please select an image file to upload *"
        return false;
    }
	if ((imagefile3.length>100)) {
        document.getElementById('error-imagefile3').innerHTML = " Please rename your file to less than 100 characters *"
        return false;
    }
	if ((imagefile4.length<1)) {
        document.getElementById('error-imagefile4').innerHTML = " Please select an image file to upload *"
        return false;
    }
	if ((imagefile4.length>100)) {
        document.getElementById('error-imagefile4').innerHTML = " Please rename your file to less than 100 characters *"
        return false;
    }
	if ((imagefile5.length<1)) {
        document.getElementById('error-imagefile5').innerHTML = " Please select an image file to upload *"
        return false;
    }
	if ((imagefile5.length>100)) {
        document.getElementById('error-imagefile5').innerHTML = " Please rename your file to less than 100 characters *"
        return false;
    }
          
}
</script>
						<script type="text/javascript">
function image_validate(input){
	var valid = true;
	var file_name = "";
	var file_type = "";
	var file_size = "";
	var valid_size = 5*1000*1000;
	var file = document.getElementById("referenceImage"+input.defaultValue);
	var photo =document.getElementById("imagePreview"+input.defaultValue);
	var error=document.getElementById("error-imagefile"+input.defaultValue);
	
	if(file.files.length != 0)
	{
		file_name = file.files[0].name;
		file_size = file.files[0].size;
		file_type = file.files[0].type;
		
		if(file_type!="image/png" && file_type!="image/jpeg" && file_type!="image/gif")
		{
			valid = false;
			error.innerHTML = "* Only 'PNG', 'JPG/JPEG' and 'GIF' file type supported."
			file.value="";
		}
		if(file_size > valid_size)
		{
			valid = false;
			error.innerHTML = "* File size should be upto 5MB.";
			file.value="";
		}
	}
	else
	{
		valid = false;
		// No Image preview  
        photo.innerHTML = ""; 
	}
	if(valid==true)
	{
		// Image preview 
        if (file.files && file.files[0]) { 
            var reader = new FileReader(); 
            reader.onload = function(e) { 
                photo.innerHTML =  
                    	'<img style="width: 200px" src="' + e.target.result  
                    + '"/>'; 
            }; 
              
            reader.readAsDataURL(file.files[0]); 
        } 
        document.getElementById('error-imagefile1').innerHTML = "";
		return true;
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
