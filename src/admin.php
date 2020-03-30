<?php 

    session_start();
    $instanum = 0;
    $youtubenum = 0;
    $eventsnum = 0;
    $aboutstring = 0;
    
    //$pass = "pass";
    if(isset($_POST['pass']) == true){
        $pass = $_POST['pass'];
    }
    $checkInputInsta = false;
    $checkInputYT = false;
    $checkInputEvent = false;
    $checkInputAbout = false;
    if(isset($_POST['instainput']) == true){
        //echo "instanum is set";
        $instanum = $_POST['instainput'];
        $checkInputInsta = true;
    }
    else{
        //echo "instanum is not set";
        $checkInputInsta = false;
    }
    if(isset($_POST['youtubeinput']) == true){
        //echo "youtube is set";
        $youtubenum = $_POST['youtubeinput'];
        $checkInputYT = true;
    }
    else{
        $checkInputYT = false;
    }
    if(isset($_POST['eventsinput']) == true){
        //echo "instanum is set";
        $eventsnum = $_POST['eventsinput'];
        $checkInputEvent = true;
    }
    else{
        $checkInputEvent = false;
    }
    if(isset($_POST['aboutInput']) == true){
        //echo "about input is set";
        $aboutstring = $_POST['aboutInput'];
        $checkInputAbout = true;
    }
    else{
        $checkInputAbout = false;
    }
    
    if($checkInputAbout == true && $checkInputEvent == true && $checkInputInsta == true && $checkInputYT == true){
        //update json
        //echo "writing json file".$instanum;
        $file = "settings.json";
        $json = json_decode(file_get_contents($file), true);
        $json["instagramPosts"] = array("num" => $instanum);
        $json['youtubePosts'] = array("num" => $youtubenum);
        $json['eventPosts'] = array("num" => $eventsnum);
        $json['aboutSection'] = array("string" => $aboutstring);
        file_put_contents($file, json_encode($json));
        $instanum = $json['instagramPosts']['num'];
        $youtubenum = $json['youtubePosts']['num'];
        $eventsnum = $json['eventPosts']['num'];
        $aboutstring = $json['aboutSection']['string'];
    }
    else{
        //read json
        $file = "settings.json";
        $json = json_decode(file_get_contents($file), true);
        $instanum = $json['instagramPosts']['num'];
        $youtubenum = $json['youtubePosts']['num'];
        $eventsnum = $json['eventPosts']['num'];
        $aboutstring = $json['aboutSection']['string'];
    }

?>


<html>

	<body>
		<?php 
		$goodPass = false;
		
		if(isset($_POST['pass']) == true){
		    if($pass == "pass"){
		        $goodPass = true;
		        
		        echo "<form method=\"post\"><label>Instagram Posts:</label><input type=\"number\" name=\"instainput\" value=\"". $instanum .
		        "\"><br> <label>YouTube Posts:</label><input type=\"number\" name=\"youtubeinput\" value=\"". $youtubenum .
		        "\"><br> <label>Event Posts:</label><input type=\"number\" name=\"eventsinput\" value=\"". $eventsnum .
		        "\"><br> <label>About Section:</label><input type=\"text\" name=\"aboutInput\" value=\"". $aboutstring .
		        "\"><br> <input type=\"submit\" value=\"Save Changes\"> </form>";
		        
		    }
		}
		
		if($goodPass == false){
		    echo "<form method=\"post\"><label>Password:</label><input type=\"password\" name=\"pass\"><input type=\"submit\" value=\"login\"></form>";
		}
		
        ?>
        
        
        
        
        
	</body>

</html>