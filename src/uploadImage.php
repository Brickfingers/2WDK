<!-- this file uploads an image for AboutImage and stores data in About page table -->

<!DOCTYPE html>
<html>
<head>
<?php
include "DB_Connect.php";
if (isset($_POST['upload'])) {

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
	
    //validate file name inclusing single qoute
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

            // save file name to database
            // $sql = "INSERT INTO image (Filename) SELECT('$filename')";
            // sqlsrv_query($conn, $sql);

            $sql = "INSERT INTO [dbo].[About]
           ([Title]
		   ,[Content]
           ,[AboutImage])
                
            SELECT 'Ben Joseph' ,'This is me...','$filename'";
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
		<input type="file" name="fileToUpload" value="" />

		<div>
			<button type="submit" name="upload">UPLOAD</button>
		</div>
	</form>


</body>
</html>
