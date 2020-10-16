<?php

/************************************
 * Fall 2020 Admin Page             *
 * Fall 2020 Admin Page             *
 ***********************************/


$file = "test.json";
$data = json_decode(file_get_contents($file), true);
$image1src = $data['image1src'];
$image1title = $data['image1title'];
$image1caption = $data['image1caption'];

$image2src = $data['image2src'];
$image2title = $data['image2title'];
$image2caption = $data['image2caption'];

$image3src = $data['image3src'];
$image3title = $data['image3title'];
$image3caption = $data['image3caption'];

$image4src = $data['image4src'];
$image4title = $data['image4title'];
$image4caption = $data['image4caption'];

$image5src = $data['image5src'];
$image5title = $data['image5title'];
$image5caption = $data['image5caption'];

$youtube1src = $data['youtube1src'];
$youtube1picsrc = $data['youtube1picsrc'];

$youtube2src = $data['youtube2src'];
$youtube2picsrc = $data['youtube2picsrc'];

$youtube3src = $data['youtube3src'];
$youtube3picsrc = $data['youtube3picsrc'];

$insta1src = $data['insta1src'];
$insta1picsrc = $data['insta1picsrc'];

$insta2src = $data['insta2src'];
$insta2picsrc = $data['insta2picsrc'];

$insta3src = $data['insta3src'];
$insta3picsrc = $data['insta3picsrc'];

$myfile = fopen("Admin/About/AboutText.txt", "r") or die("Unable to open file!");
$aboutme = fread($myfile, filesize("Admin/About/AboutText.txt"));

$myfile2 = fopen("Admin/SocialMediaLinks/FacebookLink.txt", "r") or die("Unable to open file!");
$facebooklink = fread($myfile2, filesize("Admin/SocialMediaLinks/FacebookLink.txt"));

$myfile3 = fopen("Admin/SocialMediaLinks/InstagramLink.txt", "r") or die("Unable to open file!");
$instagramlink = fread($myfile3, filesize("Admin/SocialMediaLinks/InstagramLink.txt"));

$myfile4 = fopen("Admin/SocialMediaLinks/SoundCloudLink.txt", "r") or die("Unable to open file!");
$soundcloudlink = fread($myfile4, filesize("Admin/SocialMediaLinks/SoundCloudLink.txt"));

$myfile5 = fopen("Admin/SocialMediaLinks/YoutubeLink.txt", "r") or die("Unable to open file!");
$youtubelink = fread($myfile5, filesize("Admin/SocialMediaLinks/YoutubeLink.txt"));

$myfile6 = fopen("Admin/MusicMode.txt", "r") or die("Unable to open file!");
$musicmode = fread($myfile6, filesize("Admin/MusicMode.txt"));

$myfile7 = fopen("Admin/MusicLink.txt", "r") or die("Unable to open file!");
$musiclink = fread($myfile7, filesize("Admin/MusicLink.txt"));

$aboutflag = "";
$facebookflag = "";
$instagramflag = "";
$soundcloudflag = "";
$youtubeflag = "";
$musicflag = "";
$musiclinkflag = "";
$username ="";
$password="";

session_start();
if (isset($_POST['pass']) == true) {
    $pass = $_POST['pass'];
}

if (isset($_POST["image1URL"])) {
    $image1src = $_POST["image1URL"];}
    
    if (isset($_POST["image1TITLE"])) {
        $image1title = $_POST["image1TITLE"];}
        
        if (isset($_POST["image1Caption"])) {
            $image1caption = $_POST["image1Caption"];}
            
            
            if (isset($_POST["image2URL"])) {
                $image2src = $_POST["image2URL"];
            }
            
            if (isset($_POST["image2TITLE"])) {
                $image2title = $_POST["image2TITLE"];}
                
                if (isset($_POST["image2Caption"])) {
                    $image2caption = $_POST["image2Caption"];}
                    
                    if (isset($_POST["image3URL"])) {
                        $image3src = $_POST["image3URL"];
                    }
                    if (isset($_POST["image3TITLE"])) {
                        $image3title = $_POST["image3TITLE"];}
                        
                        if (isset($_POST["image3Caption"])) {
                            $image3caption = $_POST["image3Caption"];}
                            
                            if (isset($_POST["image4URL"])) {
                                $image4src = $_POST["image4URL"];
                            }
                            if (isset($_POST["image4TITLE"])) {
                                $image4title = $_POST["image4TITLE"];}
                                
                                if (isset($_POST["image4Caption"])) {
                                    $image4caption = $_POST["image4Caption"];}
                                    
                                    
                                    if (isset($_POST["image5URL"])) {
                                        $image5src = $_POST["image5URL"];
                                    }
                                    if (isset($_POST["image5TITLE"])) {
                                        $image5title = $_POST["image5TITLE"];}
                                        
                                        if (isset($_POST["image1Caption"])) {
                                            $image5caption = $_POST["image5Caption"];}
                                            
                                            
                                            if (isset($_POST["youTube1URL"])) {
                                                
                                                $youtube1src = $_POST["youTube1URL"];
                                            }
                                            if (isset($_POST["youTube1PIC"])) {
                                                
                                                $youtube1picsrc = $_POST["youTube1PIC"];
                                            }
                                            
                                            if (isset($_POST["youTube2URL"])) {
                                                
                                                $youtube2src = $_POST["youTube2URL"];
                                            }
                                            if (isset($_POST["youTube2PIC"])) {
                                                
                                                $youtube2picsrc = $_POST["youTube2PIC"];
                                            }
                                            
                                            if (isset($_POST["youTube3URL"])) {
                                                
                                                $youtube3src = $_POST["youTube3URL"];
                                            }
                                            if (isset($_POST["youTube3PIC"])) {
                                                
                                                $youtube3picsrc = $_POST["youTube3PIC"];
                                            }
                                            
                                            
                                            if (isset($_POST["instaVideo1URL"])) {
                                                
                                                $insta1src = $_POST["instaVideo1URL"];
                                            }
                                            if (isset($_POST["instaVideo1PIC"])) {
                                                
                                                $insta1picsrc = $_POST["instaVideo1PIC"];
                                            }
                                            
                                            
                                            if (isset($_POST["instaVideo2URL"])) {
                                                
                                                $insta2src = $_POST["instaVideo1URL"];
                                            }
                                            if (isset($_POST["instaVideo2PIC"])) {
                                                
                                                $insta2picsrc = $_POST["instaVideo2PIC"];
                                            }
                                            
                                            if (isset($_POST["instaVideo3URL"])) {
                                                
                                                $insta3src = $_POST["instaVideo3URL"];
                                            }
                                            if (isset($_POST["instaVideo3PIC"])) {
                                                
                                                $insta3picsrc = $_POST["instaVideo3PIC"];
                                            }
                                            
                                            if (isset($_POST["about"])) {
                                                $aboutme = $_POST["about"];
                                                $aboutflag = true;
                                            }
                                            
                                            if (isset($_POST["facebooklink"])) {
                                                $facebooklink = $_POST["facebooklink"];
                                                $facebookflag = true;
                                            }
                                            
                                            if (isset($_POST["instagramlink"])) {
                                                $instagramlink = $_POST["instagramlink"];
                                                $instagramflag = true;
                                            }
                                            
                                            if (isset($_POST["soundcloudlink"])) {
                                                $soundcloudlink = $_POST["soundcloudlink"];
                                                $soundcloudflag = true;
                                            }
                                            
                                            if (isset($_POST["youtubelink"])) {
                                                $youtubelink = $_POST["youtubelink"];
                                                $youtubeflag = true;
                                            }
                                            
                                            if (isset($_POST["musicmode"])) {
                                                $musicmode = $_POST["musicmode"];
                                                $musicflag = true;
                                            }
                                            
                                            if (isset($_POST["musiclink"])) {
                                                $musiclink = $_POST["musiclink"];
                                                $musiclinkflag = true;
                                            }
                                            
                                            $array = Array(
                                                "image1src" => "$image1src",
                                                "image1title"=> "$image1title",
                                                "image1caption" => "$image1caption",
                                                "image2src" => "$image2src",
                                                "image2title"=> "$image2title",
                                                "image2caption" => "$image2caption",
                                                "image3src" => "$image3src",
                                                "image3title"=> "$image3title",
                                                "image3caption" => "$image3caption",
                                                "image4src" => "$image4src",
                                                "image4title"=> "$image4title",
                                                "image4caption" => "$image4caption",
                                                "image5src" => "$image5src",
                                                "image5title"=> "$image5title",
                                                "image5caption" => "$image5caption",
                                                "youtube1src" => "$youtube1src",
                                                "youtube1picsrc" => "$youtube1picsrc",
                                                "youtube2src" => "$youtube2src",
                                                "youtube2picsrc" => "$youtube2picsrc",
                                                "youtube3src" => "$youtube3src",
                                                "youtube3picsrc" => "$youtube3picsrc",
                                                
                                                "insta1src" => "$insta1src",
                                                "insta1picsrc" => "$insta1picsrc",
                                                "insta2src" => "$insta2src",
                                                "insta2picsrc" => "$insta2picsrc",
                                                "insta3src" => "$insta3src",
                                                "insta3picsrc" => "$insta3picsrc",
                                                );
                                            
                                            // encode array to json
                                            $json = json_encode($array);
                                            
                                            // write json to file
                                            if (file_put_contents("test.json", $json)) {
                                                /* echo "JSON file created successfully..."; */
                                            } else {
                                                echo "<br/><h1>Oops! Error creating json file...</h1>";
                                            }
                                            
                                            ?>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Admin Login</title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Gallery.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/Admin.css" />
</head>
<div class="body">
	<body>
		<div class="container">
			<br> <br>


			<center>
				<img src="photo/logo.png" alt="logo"> <br />
				<br />
				<h1 style="text-align: center; color: #71db77;">Log into the Website
					Platform</h1>

			</center>

			<div class="  text-white">

				<div class="card1" style="background: #222222;">


					<!-- 
			<center>
				<h4>In this page you can edit the following content of the website by entering
					your own information.</h4>
					<a href="Admin\AdminHelp.txt" target="_blank"><h3>Help!</h3></a>
			</center>
			 -->
					<div class="card-body p-5">
				
<?php

include ('DB_Connect.php');
$goodPass = false;

if ($goodPass == false) {
    echo "<center>
        <form method=\"post\">
            <input type=\"text\" name=\"Username\" placeholder=\"Username\">
             <br/><br/>
     
            <input type=\"password\" name=\"Password\" placeholder=\"Password\">
             <br/><br/>";
    echo '
            <a href="RecoverCredentials.php">Recover Password or Username</a>';
    echo "        <br/><br/>
            <button type=\"submit\" class=\"button\">Log in</button><br/><br/>
            <button type=\"submit\" class=\"button1\" formaction=\"/WebApp/src/CreateAccount.php\">Create Account</button></form><center\>";
    
    
    if (isset($_POST['submit'])) {
        
    
        if(isset($_POST['Username'])){
            $username = $_POST['Username'];
        }
        if(isset($_POST['Password'])){
            $password = $_POST['Password'];
        }
        
        $hash = password_hash($password, PASSWORD_DEFAULT);
        
        $query = "SELECT * FROM Users1 WHERE Username='$username' AND Password='$hash'";
        
        $params = array();
        $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
        $stmt = sqlsrv_query( $conn, $query , $params, $options );
        echo $stmt;
        $row_count = sqlsrv_num_rows( $stmt );
        echo $row_count;
        if ($row_count == 0){
            echo "<h1>Username and/or Email Addres incorrect. Please verify and try again.</h1>";
        }
        else{
            echo "good";
            
        }
    }
}

if ($aboutflag == true) {
    $filename = "Admin\About\AboutText.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $aboutme);
    fclose($filehandle);
}

if ($facebookflag == true) {
    $filename = "Admin\SocialMediaLinks\FacebookLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $facebooklink);
    fclose($filehandle);
}

if ($instagramflag == true) {
    $filename = "Admin\SocialMediaLinks\InstagramLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $instagramlink);
    fclose($filehandle);
}

if ($soundcloudflag == true) {
    $filename = "Admin\SocialMediaLinks\SoundCloudLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $soundcloudlink);
    fclose($filehandle);
}

if ($youtubeflag == true) {
    $filename = "Admin\SocialMediaLinks\YoutubeLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $youtubelink);
    fclose($filehandle);
}
?>
</div>
<center>
		&copy;
		<script>document.write(new Date().getFullYear());</script>
		Copyright - Sax n Sip
	</center>
        </div>
		</div>

	
	
	<br />
</body>
</html>



