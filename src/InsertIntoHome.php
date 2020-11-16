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

.myclass {
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

    $target_dir_img = "photo/";
    $target_dir_au = "audio/";
    $target_file_img = $target_dir_img . basename($_FILES["imageToUpload"]["name"]);
    $target_file_au = $target_dir_au . basename($_FILES["audioToUpload"]["name"]);

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

        echo "<font color='green'>" . "Home page is set." . "</font>";

        echo " <br /> <br />";
        echo "<a href=\"InsertIntoHome.php\" id=\"myBtn\" class=\"next\">Next &raquo;</a>";
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

?>

	<form name="myForm" method="POST" enctype="multipart/form-data"
		onsubmit="return validateForm()">
		<h4>Upload an image for Home page:</h4>
		<input type="file" id="imagefile" onchange="return image_validate()"
			name="imageToUpload" accept="image/*" value="  " /> <span
			style="color: red" id="error-imagefile"></span>
		<!-- Image preview -->
		<br /> <br />
		<div id="imagePreview"></div>
		<h4>Upload an Audio for Home page:</h4>
		<input type="file" id="audiofile" onchange="return audio_validate()"
			name="audioToUpload" accept="audio/*" value="  " /> <span
			style="color: red" id="error-audiofile"></span>
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


	
	if ((imagefile.length<1)) {
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
	<script type="text/javascript">
function image_validate()
{
	var valid = true;
	var file_name = "";
	var file_type = "";
	var file_size = "";
	var valid_size = 3*1000*1000;
	var file = document.getElementById("imagefile");
	if(file.files.length != 0)
	{
		file_name = file.files[0].name;
		file_size = file.files[0].size;
		file_type = file.files[0].type;
		
		if(file_type!="image/png" && file_type!="image/jpeg" && file_type!="image/gif")
		{
			valid = false;
			document.getElementById('error-imagefile').innerHTML = "* Only 'PNG', 'JPG/JPEG' and 'GIF' file type supported."
				file.value="";
				}
		if(file_size > valid_size)
		{
			valid = false;
			document.getElementById('error-imagefile').innerHTML = "* File size should be upto 3MB.";
		}
	}
	else
	{
		valid = false;
			// No Image preview  
	                document.getElementById('imagePreview').innerHTML = ""; 
	}
	if(valid==true)
	{
		// Image preview 
            if (file.files && file.files[0]) { 
                var reader = new FileReader(); 
                reader.onload = function(e) { 
                    document.getElementById( 
                        'imagePreview').innerHTML =  
                        	'<img style="width: 200px" src="' + e.target.result  
                        + '"/>'; 
                }; 
                  
                reader.readAsDataURL(file.files[0]); 
            } 
            document.getElementById('error-imagefile').innerHTML = "";
		return true;
	}
}</script>

	<script type="text/javascript">
function audio_validate()
{
	var valid = true;
	var file_name = "";
	var file_type = "";
	var file_size = "";
	var valid_size = 3*1000*1000;
	var file = document.getElementById("audiofile");
	var filePath = file.value; 
	var allowedExtensions =  
        /(\.mp3|\.m4a|\.wma|\.mpeg|\.m4p|\.3gp|\.au)$/i;
    
	if(file.files.length != 0)
	{
		file_name = file.files[0].name;
		file_size = file.files[0].size;
		file_type = file.files[0].type;
		
		//if(file_type!="audio/mp3" && file_type!="audio/m4a" && file_type!="audio/wma")
		if (!allowedExtensions.exec(filePath)) {
			valid = false;
			document.getElementById('error-audiofile').innerHTML = "* Only 'mp3', 'm4a' and 'wma' file type supported."
				file.value="";
				}
		if(file_size > valid_size)
		{
			valid = false;
			document.getElementById('error-audiofile').innerHTML = "* File size should be upto 3MB.";
		}
	}
	else
	{
		valid = false;
			// No audio preview  
	                document.getElementById('audioPreview').innerHTML = ""; 
	}
	if(valid==true)
	{
		// Audio preview 
            if (file.files && file.files[0]) { 
                var reader = new FileReader(); 
                reader.onload = function(e) { 
                    document.getElementById( 
                        'audioPreview').innerHTML =  
                        	'<audio style="width: 50%" controls src="' + e.target.result  
                        + '"/>'; 
                }; 
                  
                reader.readAsDataURL(file.files[0]); 
            } 
            document.getElementById('error-audiofile').innerHTML = "";
		return true;
	}
}</script>

</body>
</html>
