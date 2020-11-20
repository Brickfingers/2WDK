<!----------------------------------------------------------------------------- 
* Filename:					HomePage2.php
* Version:					1.4
* Team Name:                2WDK
-------------------------------------------------------------------------------->
<?php
include "DB_Connect.php";

$imagesource= "photo/";
$audiosource= "audio/";

$sql="SELECT [HomePage].[Title],[HomePage].[Subtitle1],[HomePage].[Subtitle2],[HomePage].[HomePageImage],[HomePage].[AudioName]
            ,[Footer].[FacebookLink],[Footer].[InstagramLink],[Footer].[YoutubeLink]
            FROM [dbo].[Layouts]
            INNER JOIN [dbo].[HomePage]
            ON  [Layouts].[HomePageId] =[HomePage].[HomePageId] 
            INNER JOIN [dbo].[Footer]
            ON  [Layouts].[FooterId] =[Footer].[FooterId]
            WHERE [Layouts].[isSet] = 1";

$result = sqlsrv_query($conn, $sql);
if (sqlsrv_fetch($result) === false) {
    die(print_r(sqlsrv_errors(), true));
}
$homeTitle = sqlsrv_get_field($result, 0);
$homeSubtitle1 = sqlsrv_get_field($result, 1);
$homeSubtitle2 = sqlsrv_get_field($result, 2);
$homeImage = $imagesource.sqlsrv_get_field($result, 3);
$homeAudio = $audiosource.sqlsrv_get_field($result, 4);
$facebookLink = sqlsrv_get_field($result, 5);
$instaLink = sqlsrv_get_field($result, 6);
$youtubeLink = sqlsrv_get_field($result, 7);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" media='screen' type="text/css" href="pagesCSS/HomePage.css" />

<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<div class="body">
<br>
	<?php
        include_once "HeaderHome.php";
    ?>
           
     <br/><br/>    
 	<div class="text-center">
    	 <h1 class="display"><?php echo $homeTitle ?></h1>
        	 <div class="container1">
        	 <h1 class="display1"><?php echo $homeSubtitle1 ?></h1>
    	</div> 
    	
    	<div class= footer_no_selected>    
        <div class="footer-copyright text-center py-3">
      		<ul class="list-unstyled list-inline text-center">
               	
              	<li class="list-inline-item">
                    <a href="<?php echo $facebookLink ?>" target="_blank"><i class="social fa-facebook "> </i></a>             
              	</li>
              
          		<li class="list-inline-item">              
                    <a href="<?php echo $instaLink ?>" target="_blank"><i class="social fa-instagram"> </i></a>        
                </li>
               
                <li class="list-inline-item">             
                    <a href="<?php echo $youtubeLink ?>" target="_blank"><i class="social fa-youtube"> </i></a>            
                </li>
          	</ul>
		</div>	
  	</div>
  	</div>
    
        <div class="w3-center">
        <img class="img-fluid z-depth-1" src="<?php echo $homeImage ?>" width ="500">
        <br/><br/>	
		</div>
         <div class="w3-center">
            <audio <?php
                                $myfile = fopen("Admin/MusicMode.txt", "r") or die("Unable to open file!");
                                echo fread($myfile,filesize("Admin/MusicMode.txt"));
                                fclose($myfile);
                                ?>>
            	<source src="<?php echo $homeAudio ?>" >
        	</audio>
    	</div>
    
	<?php
    include_once "FooterHome.php";
    ?>
</div>
</html>
