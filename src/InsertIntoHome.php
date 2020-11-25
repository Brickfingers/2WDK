<!-- this file uploads an image for HomePage and stores all data in Home page table -->

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
echo "<h2> HomePage Wizard </h2>";
include "DB_Connect.php";
if (isset($_POST['submit'])) {
    $myTitle = $_POST["title"];
    $mySubtitle1 = $_POST["subtitle1"];
    $mySubtitle2 = $_POST["subtitle2"];
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
        $mySubtitle1 = str_replace("'", "''", $mySubtitle1);
        $mySubtitle2 = str_replace("'", "''", $mySubtitle2);
        $imagefilename = str_replace("'", "''", $imagefilename);
        $audiofilename = str_replace("'", "''", $audiofilename);
        $sql = "INSERT INTO [dbo].[HomePage]
           ([Title]
		   ,[Subtitle1]
           ,[Subtitle2]
           ,[HomePageImage], [AudioName])
                
            SELECT '$myTitle','$mySubtitle1','$mySubtitle2','$imagefilename','$audiofilename'";

        sqlsrv_query($conn, $sql);

        echo "<font color='green'>" . "Home page is set." . "</font>";

        echo " <br /> <br />"; 
        header("Location: InsertToLayout.php");
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
		<textarea rows="2" cols="50"  name="title"></textarea>
		<br /> <br />

		<h4>Home page subtitle1:</h4>
		<span style="color: red" id="error-subtitle1"></span>
		<textarea rows="2" cols="50" name="subtitle1"></textarea>
		<br /> <br />

		<h4>Home page subtitle2:</h4>
		<span style="color: red" id="error-subtitle2"></span>
		<textarea rows="2" cols="50"  name="subtitle2"></textarea>
		<br /> <br />
		
		<div>
			<button class="next" type="submit" name="submit">Next &raquo;</button>

		</div>
		<br /> <br />
	</form>
	<script>
function validateForm(){
	var imagefile = document.forms["myForm"]["imageToUpload"].value;
	var audiofile = document.forms["myForm"]["audioToUpload"].value;
	var title = document.forms["myForm"]["title"].value;
	var subtitle1 = document.forms["myForm"]["subtitle1"].value;
	var subtitle2 = document.forms["myForm"]["subtitle2"].value;

	
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
    if (subtitle1.length<1) {
        document.getElementById('error-subtitle1').innerHTML = " Please Enter a subtitle *";      
        return false;
        }
    if (subtitle1.length>50) {
        document.getElementById('error-subtitle1').innerHTML = " subtitle length should be less than 50 characters *";      
        return false;
        }

    if (subtitle2.length<1) {
        document.getElementById('error-subtitle2').innerHTML = " Please Enter a subtitle *";      
        return false;
        }
    if (subtitle2.length>50) {
        document.getElementById('error-subtitle2').innerHTML = " subtitle length should be less than 50 characters *";      
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
	var valid_size = 5*1000*1000;
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
			file.value="";
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
	var valid_size = 5*1000*1000;
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
			file.value="";
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
                        	'<audio style="width: 20%" controls src="' + e.target.result  
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
