<!----------------------------------------------------------------------------- 
* Filename:					HomePage2.php
* Version:					1.4
* Team Name:                2WDK
* Student Name:				David Salazar - 040889786
* Course Name:				CST 8353 - Software design and testing
* Professor:			    Leanne Seaward
* Purpose:                  Home page
-------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sax N Sip</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/HomePage.css" />
<!-- <link rel="stylesheet" type="text/css" href="css/HomePage.css" /> -->
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
    	 <h1 class="display">Ben Joseph</h1>
        	 <div class="container1">
        	 <h1 class="display1">Saxophonist</h1>
    	</div> 
    	
    	<div class= footer_no_selected>    
        <div class="footer-copyright text-center py-3">
      		<ul class="list-unstyled list-inline text-center">
               	
              	<li class="list-inline-item">
                    <a href="<?php
                                $myfile = fopen("Admin/SocialMediaLinks/FacebookLink.txt", "r") or die("Unable to open file!");
                                echo fread($myfile,filesize("Admin/SocialMediaLinks/FacebookLink.txt"));
                                fclose($myfile);
                                ?>" target="_blank"><i class="social fa-facebook "> </i></a>             
              	</li>
              
          		<li class="list-inline-item">              
                    <a href="<?php
                                $myfile = fopen("Admin/SocialMediaLinks/InstagramLink.txt", "r") or die("Unable to open file!");
                                echo fread($myfile,filesize("Admin/SocialMediaLinks/InstagramLink.txt"));
                                fclose($myfile);
                                ?>" target="_blank"><i class="social fa-instagram"> </i></a>        
                </li>
               
                <li class="list-inline-item">             
                    <a href="<?php
                                $myfile = fopen("Admin/SocialMediaLinks/YoutubeLink.txt", "r") or die("Unable to open file!");
                                echo fread($myfile,filesize("Admin/SocialMediaLinks/FacebookLink.txt"));
                                fclose($myfile);
                                ?>" target="_blank"><i class="social fa-youtube"> </i></a>            
                </li>
          	</ul>
		</div>	
  	</div>
  	</div>
    
        <div class="w3-center">
        <img class="img-fluid z-depth-1" src="photo/pic2.png">
        <br/><br/>	
		</div>
         <div class="w3-center">
            <audio <?php
                                $myfile = fopen("Admin/MusicMode.txt", "r") or die("Unable to open file!");
                                echo fread($myfile,filesize("Admin/MusicMode.txt"));
                                fclose($myfile);
                                ?>>
            	<source src="<?php
                                $myfile = fopen("Admin/MusicLink.txt", "r") or die("Unable to open file!");
                                echo fread($myfile,filesize("Admin/MusicLink.txt"));
                                fclose($myfile);
                                ?>" type="audio/mpeg" >
        	</audio>
    	</div>
    
	<?php
    include_once "FooterHome.php";
    ?>
</div>
</html>
