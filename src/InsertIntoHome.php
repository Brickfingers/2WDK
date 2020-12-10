<!-- this file uploads an image for HomePage and stores all data in Home page table -->

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
			<h1>HomePage Wizard</h1>

		</center>
		<div class="row">
			<div class="col-md-12 mx-0">
				<!-- progressbar -->
				<ul id="progressbar" style="text-align: center">
					<li class="active" id="home"><strong>Home Page</strong></li>
					<li id="headerFooter"><strong>Header and Footer</strong></li>
					<li id="about"><strong>About Page</strong></li>
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
        header("Location: InsertToHeaderFooter.php");
    } else {
        echo "Sorry, there was an error uploading your files.";
    }
}

?>

	<form name="myForm" method="POST" enctype="multipart/form-data">
						<h4>Upload an image for Home page:</h4>
						<input type="file" id="imagefile"
							onchange="return image_validate()" name="imageToUpload"
							accept="image/*" value="  " /> <span style="color: red"
							id="error-imagefile"></span>
						<!-- Image preview -->
						<br /> <br />
						<div id="imagePreview"></div>
						<br />
						<h4>Upload an Audio for Home page:</h4>
						<input type="file" id="audiofile"
							onchange="return audio_validate()" name="audioToUpload"
							accept="audio/*" value="  " /> <span style="color: red"
							id="error-audiofile"></span>
						<!-- Audio preview -->
						<br /> <br />
						<div id="audioPreview"></div>
						<br />
						<h4>Home page title:</h4>
						<span style="color: red" id="error-title"></span>
						<textarea rows="2" cols="50" name="title"></textarea>
						<br /> <br />

						<h4>Home page subtitle1:</h4>
						<span style="color: red" id="error-subtitle1"></span>
						<textarea rows="2" cols="50" name="subtitle1"></textarea>
						<br /> <br />

						<h4>Home page subtitle2:</h4>
						<span style="color: red" id="error-subtitle2"></span>
						<textarea rows="2" cols="50" name="subtitle2"></textarea>
						<br /> <br /> <br />

						<div>
							<center>
								<a class="next" href="SelectLayout.php">&laquo; Previous</a>
								<button class="next" type="submit" name="submit"
									onclick="return validateForm()">Next &raquo;</button>
							</center>
						</div>
						<br />
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
         }else{
        	 document.getElementById('error-title').innerHTML ="";
         }
    if (title.length>50) {
        document.getElementById('error-title').innerHTML = " Title length should be less than 50 characters *";
        return false;
        }else{
       	 document.getElementById('error-title').innerHTML ="";
        }
    if (subtitle1.length<1) {
        document.getElementById('error-subtitle1').innerHTML = " Please Enter a subtitle *";      
        return false;
        }else{
       	 document.getElementById('error-subtitle1').innerHTML ="";
        }
    if (subtitle1.length>50) {
        document.getElementById('error-subtitle1').innerHTML = " subtitle length should be less than 50 characters *";      
        return false;
        }else{
       	 document.getElementById('error-subtitle1').innerHTML ="";
        }

    if (subtitle2.length<1) {
        document.getElementById('error-subtitle2').innerHTML = " Please Enter a subtitle *";      
        return false;
        }else{
       	 document.getElementById('error-subtitle2').innerHTML ="";
        }
    if (subtitle2.length>50) {
        document.getElementById('error-subtitle2').innerHTML = " subtitle length should be less than 50 characters *";      
        return false;
        }else{
       	 document.getElementById('error-subtitle2').innerHTML ="";
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
                        	'<img style="width: 400px" src="' + e.target.result  
                        + '"/>'; 
                }; 
                  
                reader.readAsDataURL(file.files[0]); 
            } 
            document.getElementById('error-imagefile').innerHTML = "";
		return true;
	}
}
</script>

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
                        	'<audio style="width: 30%" controls src="' + e.target.result  
                        + '"/>'; 
                }; 
                  
                reader.readAsDataURL(file.files[0]); 
            } 
            document.getElementById('error-audiofile').innerHTML = "";
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
		</div>
	</div>
</body>
</html>
