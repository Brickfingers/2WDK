<?php

session_start();

//$pass = "pass";
if(isset($_POST['pass']) == true){
    $pass = $_POST['pass'];
}

if(isset($_POST["image1URL"]))
{
    $_SESSION["image1"] = $_POST["image1URL"];
    header("Location: Gallery.php");
    
}
if(isset($_POST["image2URL"]))
{
    $_SESSION["image2"] = $_POST["image2URL"];
    header("Location: Gallery.php");
   
}

if(isset($_POST["youTube1URL"]))
{
    $_SESSION["youtube1"] = $_POST["youTube1URL"];
    header("Location: Gallery.php");
    
}

if(isset($_POST["youTube2URL"]))
{
    $_SESSION["youtube2"] = $_POST["youTube2URL"];
    header("Location: Gallery.php");
   
}
 
if(isset($_POST["instaVideo1URL"]))
{
    $_SESSION["instavid1"] = $_POST["instaVideo1URL"];
    header("Location: Gallery.php");
    
}
                       
if(isset($_POST["instaVideo2URL"]))
{
    $_SESSION["instavid2"] = $_POST["instaVideo2URL"];
    header("Location: Gallery.php");
    exit;
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

<style>
table {
	border: 2px solid black;
	border-collapse: collapse;
}

td {
    width:400px;
	border: 2px solid black;
    padding: 25px;
}
</style>
</head>
<body>
        
<div class="container">
		<br> <br>

		<div class="card bg-dark text-white">
			<div class="card-header">
				<h1 style="text-align: center; color: white;">Admin GALLERY</h1>
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
echo
		"<form method=\"post\">
			Image1 source:<br/>
			<input type=\"text\" name=\"image1URL\"  />
        <br/><br/>
            Image2 source:<br/>
			<input type=\"text\" name=\"image2URL\"  />
		<br/><br/>	
            YouTube video1 source:<br/>
			<input type=\"text\" name=\"youTube1URL\"  />
        <br/><br/>
            YouTube video2 source:<br/> 
			<input type=\"text\" name=\"youTube2URL\"  />
			<br/><br/>
            Instagram video1 source:<br/> 
			<input type=\"text\" name=\"instaVideo1URL\"  />
		<br/><br/>
            Instagram video2 source:<br/> 
			<input type=\"text\" name=\"instaVideo2URL\"  />

<br/><br/>
<input type=\"submit\" value=\"Submit Information\"/>


		</form>
		<br />
</div>";
	}
		}
		
		if($goodPass == false){
		    echo "<div class=\"card-body p-3\"><form method=\"post\"><label>Password:</label><input type=\"password\" name=\"pass\">&nbsp;<button type=\"submit\" class=\"btn btn-info\">Login</button></form></div>";
		}
		
        ?>
        </div>
        </div>
        <br/><br/>
        </div>
</body>
</html>



