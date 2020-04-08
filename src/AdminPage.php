<?php

session_start();
$image1src = "photo/pic2.png";
$image2src = "photo/pic9.png";
$youtube1src = "https://www.youtube.com/embed/2e5zITHhVds?rel=0";
$youtube2src = "https://www.youtube.com/embed/2p2hC--loq4?rel=0";
$insta1src = "https://www.instagram.com/p/B81hkBWHcX8/embed";
$insta2src = "https://www.instagram.com/p/B9Xnus_nTau/embed";

$facebooklink = "http://www.facebook.com";

//password:2wdk
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
        echo "JSON file created successfully...";
        
        
    } else{
        echo "Oops! Error creating json file...";}

        
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
				<h1 style="text-align: center; color: white;">Admin- Gallery-About</h1>
			</div>

		</div>
		<br>
		<div class="card1" style="background: rgba(0, 0, 150, 0.5);">

			<div class="card-body p-5">

<?php 
		$goodPass = false;
		
		if(isset($_POST['pass']) == true){
		    if($pass == "pass"){
		        $goodPass = true;
		        

echo "<form method=\"post\">
			Image1 source:<br/>
			<input type=\"text\" name=\"image1URL\" value=\"". $Image1src .
		        "\">
        <br/><br/>
            Image2 source:<br/>
			<input type=\"text\" name=\"image2URL\"  value=\"". $Image2src .
		        "\">
		<br/><br/>	
            YouTube video1 source:<br/>
			<input type=\"text\" name=\"youTube1URL\"  value=\"". $Youtube1src .
		        "\">
        <br/><br/>
            YouTube video2 source:<br/> 
			<input type=\"text\" name=\"youTube2URL\"  value=\"". $Youtube2src .
		        "\">
			<br/><br/>
            Instagram video1 source:<br/> 
			<input type=\"text\" name=\"instaVideo1URL\"  value=\"". $Insta1src .
		        "\">
		<br/><br/>
            Instagram video2 source:<br/> 
			<input type=\"text\" name=\"instaVideo2URL\"  value=\"". $Insta2src .
		        "\">
        <br/><br/>
            About page content:<br/> 
		    <input type=\"text\" name=\"about\"  />
        <br/><br/>

            Facebook page link:<br/> 
		    <input type=\"text\" name=\"facebooklink\"  />
        <br/><br/>

            Instagram page link:<br/> 
		    <input type=\"text\" name=\"instagramlink\"  />
        <br/><br/>

            SoundCloud page link:<br/> 
		    <input type=\"text\" name=\"soundcloudlink\"  />
        <br/><br/>

            Youtube page link:<br/> 
		    <input type=\"text\" name=\"youtubelink\"  />
        <br/><br/>


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
		<br /> <br />
	</div>
</body>
</html>



