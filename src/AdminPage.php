<?php
/*******************************************************************************
 * 

 * 
 * PLEASE READ PLEASE READP
 * NOT WORKING PHP PAGE GO TO  ADMIGPAGE.PHP  
 * 
 * NOT WORKING PHP PAGE GO TO  ADMIGPAGE.PHP  
 *                                  
 ************************************************************************************/
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

$facebooklink = "https://www.facebook.com/Sax-N-Sip-with-Ben-Joseph-394791691247339/";
$instagramlink = "http://www.instagram.com/saxnsip";
$soundcloudlink = "http://www.soundcloud.com";
$youtubelink = "http://www.youtube.com";

$myfile = fopen("Admin/About/AboutText.txt", "r") or die("Unable to open file!");
$aboutme = fread($myfile, filesize("Admin/About/AboutText.txt"));

session_start();
if (isset($_POST['pass']) == true) {
    $pass = $_POST['pass'];
}

if (isset($_POST["image1URL"])) {
    $image1src = $_POST["image1URL"];
}

if (isset($_POST["image1TITLE"])) {
    $image1title = $_POST["image1TITLE"];
}

if (isset($_POST["image1Caption"])) {
    $image1caption = $_POST["image1Caption"];
}

if (isset($_POST["image2URL"])) {
    $image2src = $_POST["image2URL"];
}

if (isset($_POST["image2TITLE"])) {
    $image2title = $_POST["image2TITLE"];
}

if (isset($_POST["image2Caption"])) {
    $image2caption = $_POST["image2Caption"];
}

if (isset($_POST["image3URL"])) {
    $image3src = $_POST["image3URL"];
}
if (isset($_POST["image3TITLE"])) {
    $image3title = $_POST["image3TITLE"];
}

if (isset($_POST["image3Caption"])) {
    $image3caption = $_POST["image3Caption"];
}

if (isset($_POST["image4URL"])) {
    $image4src = $_POST["image4URL"];
}
if (isset($_POST["image4TITLE"])) {
    $image4title = $_POST["image4TITLE"];
}

if (isset($_POST["image4Caption"])) {
    $image4caption = $_POST["image4Caption"];
}

if (isset($_POST["image5URL"])) {
    $image5src = $_POST["image5URL"];
}
if (isset($_POST["image5TITLE"])) {
    $image5title = $_POST["image5TITLE"];
}

if (isset($_POST["image1Caption"])) {
    $image5caption = $_POST["image5Caption"];
}

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

    $insta2src = $_POST["instaVideo2URL"];
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

$array = Array(
    "image1src" => "$image1src",
    "image1title" => "$image1title",
    "image1caption" => "$image1caption",
    "image2src" => "$image2src",
    "image2title" => "$image2title",
    "image2caption" => "$image2caption",
    "image3src" => "$image3src",
    "image3title" => "$image3title",
    "image3caption" => "$image3caption",
    "image4src" => "$image4src",
    "image4title" => "$image4title",
    "image4caption" => "$image4caption",
    "image5src" => "$image5src",
    "image5title" => "$image5title",
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
    "insta3picsrc" => "$insta3picsrc"
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
<title>Admin Page</title>
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
            <a href="RecoverPassword.php">Recover Password</a>';
    echo "        <br/><br/>
            <button type=\"submit\" class=\"button\">Log in</button><br/><br/>
            <button type=\"submit\" class=\"button1\" formaction=\"/WebApp/src/CreateAccount.php\">Create Account</button></form><center\>";

    $username = $_POST['Username'];
    $password = $_POST['Password'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $query = "SELECT * FROM Users1 WHERE Username='$username' AND Password='$hash'";
    
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query( $conn, $query , $params, $options );
    
    $row_count = sqlsrv_num_rows( $stmt );
    
    if ($row_count == 0){
        echo "<h1>Username and/or Email Addres incorrect. Please verify and try again.</h1>";
    }
        else{

            if (isset($_POST['pass']) == true) {
                if ($pass == "pass") {
                    $goodPass = true;
                    
                    echo "<form method=\"post\">
                        <h6>Gallery Image #1:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image1URL\" >$image1src</textarea>
                        <br/><br/>
                        
                        <h6>Gallery Image #1 Title:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image1TITLE\" >$image1title</textarea>
                        <br/><br/>
                        <h6>Gallery Image #1 Caption:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image1Caption\" >$image1caption</textarea>
                        <br/><br/>
                        
                        <h6>Gallery Image #2:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image2URL\" >$image2src</textarea>
            		    <br/><br/>
                        <h6>Gallery Image #2 Title:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image2TITLE\" >$image2title</textarea>
                        <br/><br/>
                        <h6>Gallery Image #2 Caption:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image2Caption\" >$image2caption</textarea>
                        <br/><br/>
                        
                        <h6>Gallery Image #3:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image3URL\" >$image3src</textarea>
                        <br/><br/>
                        <h6>Gallery Image #3 Title:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image3TITLE\" >$image3title</textarea>
                        <br/><br/>
                        <h6>Gallery Image #3 Caption:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image3Caption\" >$image3caption</textarea>
                        <br/><br/>
                        
                        
                        <h6>Gallery Image #4:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image4URL\" >$image4src</textarea>
            		    <br/><br/>
                        <h6>Gallery Image #4 Title:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image4TITLE\" >$image4title</textarea>
                        <br/><br/>
                        <h6>Gallery Image #4 Caption:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image4Caption\" >$image4caption</textarea>
                        <br/><br/>
                        
                        <h6>Gallery Image #5:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image5URL\" >$image5src</textarea>
            		    <br/><br/>
                        <h6>Gallery Image #5 Title:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image5TITLE\" >$image5title</textarea>
                        <br/><br/>
                        <h6>Gallery Image #5 Caption:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"image5Caption\" >$image5caption</textarea>
                        <br/><br/>
                        
                        <h6>Youtube Video Link #1:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"youTube1URL\" >$youtube1src</textarea>
                        <br/><br/>
                        <h6>Youtube Video Thumbnail Picture #1:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"youTube1PIC\" >$youtube1picsrc</textarea>
            			<br/><br/>
            			
                        <h6>Youtube Video Link #2:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"youTube2URL\" >$youtube2src</textarea>
            			<br/><br/>
                        <h6>Youtube Video Thumbnail Picture #2:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"youTube2PIC\" >$youtube2picsrc</textarea>
            			<br/><br/>
            			
                        <h6>Youtube Video Link #3:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"youTube3URL\" >$youtube3src</textarea>
            			<br/><br/>
                        <h6>Youtube Video Thumbnail Picture #3:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"youTube3PIC\" >$youtube3picsrc</textarea>
            			<br/><br/>
            			
                        <h6>Instagram Video Link #1:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"instaVideo1URL\" >$insta1src</textarea>
            		    <br/><br/>
                        <h6>Instagram Video Thumbnail Picture #1:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"instaVideo1PIC\" >$insta1picsrc</textarea>
                        <br/><br/>
                        <h6>Instagram Video Link #2:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"instaVideo2URL\" >$insta2src</textarea>
                        <br/><br/>
                        <h6>Instagram Video Thumbnail Picture #2:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"instaVideo2PIC\" >$insta2picsrc</textarea>
                        <br/><br/>
                        <h6>Instagram Video Link #3:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"instaVideo3URL\" >$insta3src</textarea>
                        <br/><br/>
                        <h6>Instagram Video Thumbnail Picture #3:</h6>
            			<textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"instaVideo3PIC\" >$insta3picsrc</textarea>
                        <br/><br/>
                        
                        <h6>About page content:</h6>
            		    <textarea rows=\"22\" cols=\"50\" type=\"text\" name=\"about\" >$aboutme</textarea>
                        <br/><br/>
                        
                        <h6>Facebook Page Link:</h6>
            		    <textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"facebooklink\" >$facebooklink</textarea>
                    <br/><br/>
                    
                        <h6>Instagram Page Link:</h6>
            		    <textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"instagramlink\" >$instagramlink</textarea>
                    <br/><br/>
                    
                        <h6>SoundCloud Page Link:</h6>
            		    <textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"soundcloudlink\" >$soundcloudlink</textarea>
                    <br/><br/>
                    
                       <h6>Youtube Page Link:</h6>
            		    <textarea rows=\"2\" cols=\"50\" type=\"text\" name=\"youtubelink\" >$youtubelink</textarea>
                    <br/><br/><br/>
                    
                    
                        <input type=\"submit\" value=\"Submit Information\"/>
            
            
            		</form>
            <br/><br />
            </div>";
                }
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
				</div>

				<br />
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



