<!-- this file uploads an image for AboutImage and stores data in About page table -->

<!DOCTYPE html>
<html>
<head>
<?php
include "DB_Connect.php";
if (isset($_POST['upload']) && isset($_POST["about"]) && isset($_POST["title"])) {
    $aboutme = $_POST["about"];
    $aboutTitle = $_POST["title"];
    $filename = $_FILES["fileToUpload"]["name"];
    $tempname = $_FILES["fileToUpload"]["tmp_name"];

    $target_dir = "photo/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
	
    //validate file name including single qoute
    if (preg_match("/'/u", $filename)) { 
       echo "file name is not valid.";
       $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
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

            echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>


</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<h4>Upload an image for About page:</h4>
		<input type="file" name="fileToUpload" value="" />
		<h4>About page title:</h4>
		<textarea rows="2" cols="50" type="text" name="title"></textarea>
		<br />
		<br />

		<h4>About page content:</h4>
		<textarea rows="22" cols="50" type="text" name="about"> </textarea>
		<br /> <br />
		<div>
			<button type="submit" name="upload">Submit</button>
		</div>
	</form>

</body>
</html>
