<!-- this file uploads an image for AboutImage and stores all data in About page table -->

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
</style>
</head>
<?php
include "DB_Connect.php";
if (isset($_POST['submit'])) {
    $aboutme = $_POST["about"];
    $aboutTitle = $_POST["title"];
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];
    $errorMsg = "";
    $target_dir = "D:/myphoto/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $errorMsg = "This file is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        $errorMsg = "Sorry, this file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        $errorMsg = "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        $errorMsg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {

        echo "<font color='red'>" . $errorMsg . "</font>";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($tempname, $target_file)) {

            $aboutme = str_replace("'", "''", $aboutme);
            $aboutTitle = str_replace("'", "''", $aboutTitle);
            $filename = str_replace("'", "''", $filename);
            $sql = "INSERT INTO [dbo].[About]
           ([Title]
		   ,[Content]
           ,[AboutImage])
                
            SELECT '$aboutTitle' ,'$aboutme','$filename'";

            sqlsrv_query($conn, $sql);

            echo "<font color='green'>" . "The file  " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . "  has been uploaded." . "</font>";
            echo " <br /> <br />";
            echo "<a href=\"InsertIntoHome.php\" id=\"myBtn\" class=\"next\">Next &raquo;</a>";
        } else {
            $errorMsg = "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<body>

	<form name="myForm" method="POST" enctype="multipart/form-data"
		onchange="return filepreview()" onsubmit="return validateForm()">
		<h4>Upload an image for About page:</h4>
		<span style="color: red" id="error-file"></span> <input type="file"
			id="file" name="fileToUpload" value="  " />
		<!-- Image preview -->
		<br /> <br />
		<div id="imagePreview"></div>

		<h4>About page title:</h4>
		<span style="color: red" id="error-title"></span>
		<textarea rows="2" cols="50" type="text" name="title">Enter your title here</textarea>
		<br /> <br />

		<h4>About page content:</h4>
		<span style="color: red" id="error-content"></span>
		<textarea rows="20" cols="50" type="text" name="about">Enter your text here</textarea>
		<br /> <br />
		<div>
			<button type="submit" name="submit">Submit</button>

		</div>
		<br /> <br />
	</form>
	<script>
function validateForm(){
	var file = document.forms["myForm"]["fileToUpload"].value;
	var title = document.forms["myForm"]["title"].value;
	var content = document.forms["myForm"]["about"].value;


	if (file.length<1) {
        document.getElementById('error-file').innerHTML = " Please select a file to upload *"
    }
    if (title.length<1) {
        document.getElementById('error-title').innerHTML = " Please Enter a title *";
    }
    if (content.length<1) {
        document.getElementById('error-content').innerHTML = " Please Enter your bio *";      
    }
      
    if(file.length<1 || title.length<1 || content.length<1){
       	return false;
    }            
}
</script>
	<script> 
	function filepreview() {
	var fileInput = document.getElementById('file');
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
