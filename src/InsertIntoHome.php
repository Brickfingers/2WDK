<!-- this file uploads an image for HomePage and stores all data in Home page table -->

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
.myclass{
background-color: #B3EEF5;
padding: 8px 16px;
}
</style>
</head>
<body class="myclass">
<?php
echo "<h2> HomePage Wizard </h2>";
include "DB_Connect.php";
if (isset($_POST['submit'])) {
    $myTitle = $_POST["title"];
    $mySubtitle = $_POST["subtitle"];
    $imagefilename = $_FILES["imageToUpload"]["name"];
    $imagetempname = $_FILES["imageToUpload"]["tmp_name"];
    $audiofilename = $_FILES["audioToUpload"]["name"];
    $audiotempname = $_FILES["audioToUpload"]["tmp_name"];

    $errorMsg = "";
    $target_dir_img = "photo/";
    $target_dir_au = "audio/";
    $target_file_img = $target_dir_img . basename($_FILES["imageToUpload"]["name"]);
    $target_file_au = $target_dir_au . basename($_FILES["audioToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file_img, PATHINFO_EXTENSION));
    $audioFileType = strtolower(pathinfo($target_file_au, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $checkimage = getimagesize($_FILES["imageToUpload"]["tmp_name"]);
    if ($checkimage !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errorMsg = "This file is not an image.";
        $uploadOk = 0;
    }

    // Check image file size
    if ($_FILES["imageToUpload"]["size"] > 5000000) {
        $errorMsg = "Sorry, your Image file is too large.";
        $uploadOk = 0;
    }
    // Check audio file size
    if ($_FILES["audioToUpload"]["size"] > 5000000) {
        $errorMsg = "Sorry, your Audio file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats for image
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $errorMsg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Allow certain file formats for iaudio
    if ($audioFileType != "mp3" && $audioFileType != "m4p" && $audioFileType != "wma" && $audioFileType != "m4a" && $audioFileType != "3gp") {
        $errorMsg = "Sorry, only mp3, m4p, wma , m4a & 3gp files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {

        echo "<font color='red'>" . $errorMsg . "</font>";
        // if everything is ok, try to upload file
    } else {
        if ((move_uploaded_file($imagetempname, $target_file_img)) && (move_uploaded_file($audiotempname, $target_file_au))) {

            $myTitle = str_replace("'", "''", $myTitle);
            $mySubtitle = str_replace("'", "''", $mySubtitle);
            $imagefilename = str_replace("'", "''", $imagefilename);
            $audiofilename = str_replace("'", "''", $audiofilename);
            $sql = "INSERT INTO [dbo].[HomePage]
           ([Title]
		   ,[Subtitle1]
           ,[HomePageImage], [AudioName])
                
            SELECT '$myTitle','$mySubtitle','$imagefilename','$audiofilename'";

            sqlsrv_query($conn, $sql);

            echo "<font color='green'>" . "The files  " . htmlspecialchars(basename($_FILES["imageToUpload"]["name"])) . " and " .htmlspecialchars(basename($_FILES["audioToUpload"]["name"])) . "  has been uploaded." . "</font>";

            echo " <br /> <br />";
            echo "<a href=\"InsertIntoHome.php\" id=\"myBtn\" class=\"next\">Next &raquo;</a>";
        } else {
            $errorMsg = "Sorry, there was an error uploading your files.";
        }
    }
}
?>

	<form name="myForm" method="POST" enctype="multipart/form-data"
		onchange="return filepreview()" onsubmit="return validateForm()">
		<h4>Upload an image for Home page:</h4>
		<span style="color: red" id="error-imagefile"></span> <input
			type="file" id="imagefile" name="imageToUpload" value="  " />
		<!-- Image preview -->
		<br /> <br />
		<div id="imagePreview"></div>

		<h4>Upload an Audio for Home page:</h4>
		<span style="color: red" id="error-audiofile"></span> <input
			type="file" id="audiofile" name="audioToUpload" value="  " />
		<!-- Audio preview -->
		<br /> <br />
		<div id="audioPreview"></div>

		<h4>Home page title:</h4>
		<span style="color: red" id="error-title"></span>
		<textarea rows="2" cols="50" type="text" name="title">Enter your title here</textarea>
		<br /> <br />

		<h4>Home page subtitle:</h4>
		<span style="color: red" id="error-subtitle"></span>
		<textarea rows="2" cols="50" type="text" name="subtitle">Enter your subtitle here</textarea>
		<br /> <br />

		<div>
			<button type="submit" name="submit">Submit</button>

		</div>
		<br /> <br />
	</form>
	<script>
function validateForm(){
	var imagefile = document.forms["myForm"]["imageToUpload"].value;
	var audiofile = document.forms["myForm"]["audioToUpload"].value;
	var title = document.forms["myForm"]["title"].value;
	var subtitle = document.forms["myForm"]["subtitle"].value;


	if ((imagefile.length<1) ) {
        document.getElementById('error-imagefile').innerHTML = " Please select an image file to upload *"
        return false;
         }
	if ((imagefile.length>100)) {
        document.getElementById('error-imagefile').innerHTML = " Please rename your file to less than 100 characters *"
        return false;
         } 

	if ((audiofile.length<1)) {
        document.getElementById('error-audiofile').innerHTML = " Please select an audio file to upload *"
        return false;
         }
	if ((audiofile.length>100)) {
        document.getElementById('error-audiofile').innerHTML = " Please rename your file to less than 100 characters *"
        return false;
         } 
    if (title.length<1) {
        document.getElementById('error-title').innerHTML = " Please Enter a title *";
        return false;
         }
    if (title.length>50) {
        document.getElementById('error-title').innerHTML = " Title length should be less than 50 characters *";
        return false;
        }
    if (subtitle.length<1) {
        document.getElementById('error-subtitle').innerHTML = " Please Enter your bio *";      
        return false;
        }
    if (subtitle.length>50) {
        document.getElementById('error-subtitle').innerHTML = " The Maximum number of characters for content is 4000 *";      
        return false;
        }
          
}
</script>
	<script> 
	function filepreview() {
	var fileInput = document.getElementById('imagefile');
				// Image preview 
				if (fileInput.files && fileInput.files[0]) { 
					var reader = new FileReader(); 
					reader.onload = function(e) { 
						document.getElementById( 
							'imagePreview').innerHTML = 
							'<img style="width: 200px" src="' + e.target.result 
							+ '"/>'; 
					}; 
					
					reader.readAsDataURL(fileInput.files[0]); 
		} 
	}
	</script>

</body>
</html>
