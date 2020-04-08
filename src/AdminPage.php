<?php
/************************************
 * PASSWORD FOR ADMIN PAGE: PASS    *
 *                                  *
 ***********************************/

session_start();
$image1src = "photo/pic2.png";
$image2src = "photo/pic2.png";
$youtube1src = "https://www.youtube.com/embed/2e5zITHhVds?rel=0";
$youtube2src = "https://www.youtube.com/embed/2p2hC--loq4?rel=0";
$youtube3src = "https://www.youtube.com/embed/2p2hC--loq4?rel=0";
$insta1src = "https://www.instagram.com/p/B81hkBWHcX8/embed";
$insta2src = "https://www.instagram.com/p/B9Xnus_nTau/embed";
$insta3src = "https://www.instagram.com/p/B9Xnus_nTau/embed";
$facebooklink = "https://www.facebook.com/Sax-N-Sip-with-Ben-Joseph-394791691247339/";
$instagramlink = "http://www.instagram.com/saxnsip";
$soundcloudlink = "http://www.soundcloud.com";
$youtubelink = "http://www.youtube.com";
$aboutme = "Ben Joseph is a Haitian American born and raised in Newark,
New Jersey. He is the youngest of 4 brothers who are all
musically gifted. At the age of 8, Ben found his passion for the
saxophone. He studied classical music and played in multiple
symphonies and bands but knew that his love for the sax came
from somewhere else. At the age of 12 he started studying jazz
and instantly knew that it was his calling. Some of his favorite
artists include David Sanbourn, Kenny G, Gerald Albright, and
Warren Hill. Since then, he has been studying music while
mastering multiple genres at the same time. Today he continues
to excel doing live performances, both for private and public
functions in Ottawa, ON where he currently resides. Ben is on a
steady rise and has managed to build a loyal following of
supporters who resonate with his undeniable gift and passion for
music.";

if (isset($_POST['pass']) == true) {
    $pass = $_POST['pass'];
}


if (isset($_POST["image1URL"])) {
    $image1src=$_POST["image1URL"];
}

if (isset($_POST["image2URL"])) {
    $image2src=$_POST["image2URL"];
}


if (isset($_POST["youTube1URL"])) {

    $youtube1src= $_POST["youTube1URL"];
}

if (isset($_POST["youTube2URL"])) {
   
    $youtube2src= $_POST["youTube2URL"];
}

if (isset($_POST["instaVideo1URL"])) {

    $insta1src = $_POST["instaVideo1URL"];
}

if (isset($_POST["instaVideo2URL"])) {
  
    $insta2src = $_POST["instaVideo1URL"];
}



if (isset($_POST["about"])) {
    $aboutme = $_POST["about"];
    $aboutflag=true;
}


if (isset($_POST["facebooklink"])) {
    $facebooklink = $_POST["facebooklink"];
    $facebookflag=true;
}

if (isset($_POST["instagramlink"])) {
    $instagramlink = $_POST["instagramlink"];
    $instagramflag=true;
}

if (isset($_POST["soundcloudlink"])) {
    $soundcloudlink = $_POST["soundcloudlink"];
    $soundcloudflag=true;
}

if (isset($_POST["youtubelink"])) {
    $youtubelink = $_POST["youtubelink"];
    $youtubeflag=true;
}

    $array =  Array (
        "image1src" => "$image1src",
        "image2src" => "$image2src",
        "youtube1src"=> "$youtube1src",
        "youtube2src"=> "$youtube2src",
        "insta1src"=> "$insta1src",
        "insta2src"=> "$insta2src",
    );
    
    // encode array to json
    $json = json_encode( $array);
    
    //write json to file
    if (file_put_contents("test.json", $json)){
        /* echo "JSON file created successfully..."; */
        
        
    } else{
        echo "<br/><h1>Oops! Error creating json file...</h1>";}

        
        $file = "test.json";
        $data = json_decode(file_get_contents($file), true);
        $Image1src = $data['image1src'];
        $Image2src = $data['image2src'];
        $Youtube1src = $data['youtube1src'];
        $Youtube2src = $data['youtube2src'];
        $Insta1src = $data['insta1src'];
        $Insta2src = $data['insta2src'];
        
        
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
</head>
<body>
	<div class="container">
		<br> <br>

		<div class="card bg-dark text-white">
			<div class="card-header">
				<h1 style="text-align: center; color: white;">Sax 'n' Sip <br/>Admin Page</h1><br/>
			</div>

		</div>
		<br>
		<div class="card1" style="background: #A6ACAF;" >
			
			<br/><center><h4>In this page you can edit the content of the website by entering your own information.</h4></center>
			<div class="card-body p-5">
			
<?php 
		$goodPass = false;
		
		if(isset($_POST['pass']) == true){
		    if($pass == "pass"){
		        $goodPass = true;
		        

echo "<form method=\"post\">
			<h6>Gallery Image #1:</h6>
			<textarea rows=\"1\" cols=\"30\" type=\"text\" name=\"image1URL\" >$Image1src</textarea>
        <br/><br/>
            <h6>Gallery Image #2:</h6>
			<textarea rows=\"1\" cols=\"30\" type=\"text\" name=\"image2URL\" >$Image2src</textarea>
		<br/><br/>		
            <h6>Youtube Video Link #1:</h6>
			<textarea rows=\"1\" cols=\"70\" type=\"text\" name=\"youTube1URL\" >$Youtube1src</textarea>
        <br/><br/>
            <h6>Youtube Video Link #2:</h6>
			<textarea rows=\"1\" cols=\"70\" type=\"text\" name=\"youTube2URL\" >$Youtube2src</textarea>
			<br/><br/>
            <h6>Instagram Video Link #1:</h6>
			<textarea rows=\"1\" cols=\"70\" type=\"text\" name=\"instaVideo1URL\" >$Insta1src</textarea>
		<br/><br/>
            <h6>Instagram Video Link #2:</h6>
			<textarea rows=\"1\" cols=\"70\" type=\"text\" name=\"instaVideo2URL\" >$Insta2src</textarea>
        <br/><br/>
            <h6>About page content:</h6>
		    <textarea rows=\"16\" cols=\"70\" type=\"text\" name=\"about\" >$aboutme</textarea>
        <br/><br/>

            <h6>Facebook Page Link:</h6>
		    <textarea rows=\"1\" cols=\"80\" type=\"text\" name=\"facebooklink\" >$facebooklink</textarea>
        <br/><br/>

            <h6>Instagram Page Link:</h6> 
		    <textarea rows=\"1\" cols=\"80\" type=\"text\" name=\"instagramlink\" >$instagramlink</textarea>
        <br/><br/>

            <h6>SoundCloud Page Link:</h6>
		    <textarea rows=\"1\" cols=\"80\" type=\"text\" name=\"soundcloudlink\" >$soundcloudlink</textarea>
        <br/><br/>

           <h6>Youtube Page Link:</h6>
		    <textarea rows=\"1\" cols=\"80\" type=\"text\" name=\"youtubelink\" >$youtubelink</textarea>
        <br/><br/><br/>


<input type=\"submit\" value=\"Submit Information\"/>


		</form>
<br/><br />
</div>";
		    }
		}
		
		if($goodPass == false){
		    echo "<div class=\"card-body p-3\"><form method=\"post\"><label>Password:</label><input type=\"password\" name=\"pass\">&nbsp;<button type=\"submit\" class=\"btn btn-info\">Login</button></form></div>";
		}

		
		
if($aboutflag==true){
    $filename = "Admin\About\AboutText.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $aboutme);
    fclose($filehandle);}

if($facebookflag==true){
    $filename = "Admin\SocialMediaLinks\FacebookLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $facebooklink);
    fclose($filehandle);}
    
if($instagramflag==true){
    $filename = "Admin\SocialMediaLinks\InstagramLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $instagramlink);
    fclose($filehandle);}
    
if($soundcloudflag==true){
    $filename = "Admin\SocialMediaLinks\SoundCloudLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $soundcloudlink);
    fclose($filehandle);}
    
if($youtubeflag==true){
    $filename = "Admin\SocialMediaLinks\YoutubeLink.txt";
    $filehandle = fopen($filename, 'w');
    fwrite($filehandle, $youtubelink);
    fclose($filehandle);}
?>

        </div>
		</div>
		
	</div>
	<br/>
      	<center>
     		&copy; <script>document.write(new Date().getFullYear());</script> Copyright - Sax n Sip
      	</center>
      	<br/>
</body>
</html>



