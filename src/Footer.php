<!----------------------------------------------------------------------------- 
* Filename:					Footer.php
* Version:					1.8
* Team Name:                2WDK
-------------------------------------------------------------------------------->
<?php include "DB_Connect.php";

$sql="SELECT [Footer].[FacebookLink],[Footer].[InstagramLink],[Footer].[YoutubeLink],[Layouts].[ThemeCode]
            FROM [dbo].[Layouts]
            INNER JOIN [dbo].[Footer]
            ON [Footer].[FooterId] = [Layouts].[FooterId]
            WHERE [Layouts].[isSet] = 1";

$result = sqlsrv_query($conn, $sql);
if (sqlsrv_fetch($result) === false) {
    die(print_r(sqlsrv_errors(), true));
}
$facebookLink = sqlsrv_get_field($result, 0);
$instaLink = sqlsrv_get_field($result, 1);
$youtubeLink = sqlsrv_get_field($result, 2);
$cssFolder=sqlsrv_get_field($result, 3);
?>

<footer class="page-footer font-small stylish-color-dark ">
    <div class= footer>
    
        <div class="container text-center text-md-left">	
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
        	#mc_embed_signup{background:#fff; clear:left; font:17px Helvetica,Arial,sans-serif; }
        </style>
        <link rel="stylesheet" type="text/css" href="<?php echo $cssFolder?>/common.css" />
        <link rel="stylesheet" type="text/css" href="pagesCSS/Footer.css">
        <div class="row">
         
            <li class="list-inline-item">
            <div class="w3-container">
        	 
          		<button onclick="document.getElementById('id01').style.display='block'" class="open-button"><b>SIGN UP</b></button>
        			<div id="id01" class="w3-modal">
        
                		<div class="subscribe_box">
            				<div class="popup">
                          		                  	  
                    	  <!-- Begin Mailchimp Signup Form -->
                                                  
                            <div id="mc_embed_signup">
                            <form action="https://algonquinlive.us19.list-manage.com/subscribe/post?u=af5fac3ff4d76b39f763dbb7b&amp;id=7c52c75b83" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                <div class="w3-center"><br/>
                            	<h1 class="subscribe_title">Don't miss out!</h1><br/>
                            	
                                <div class="mc-field-group">
                                	<label for="mce-EMAIL">Sign up to receive our emails and don't miss any of our upcoming events!</label>
                                	<br/>
                                	<input type="email" value="" name="EMAIL" placeholder="Enter your email" class="required email" id="mce-EMAIL">
                                </div>
                            	<div id="mce-responses" class="clear">
                            		<div class="response" id="mce-error-response" style="display:none"></div>
                            		<div class="response" id="mce-success-response" style="display:none"></div>
                            		
                            	</div>    
                            	    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_af5fac3ff4d76b39f763dbb7b_7c52c75b83" tabindex="-1" value=""></div>
                                <div class="clear">
                                <input type="submit" value="Sign Up!" name="subscribe" class="sign_up"></div>
                                </div>
                            </form>
                            </div>
                            <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                            <!--End mc_embed_signup-->
                    	  
                    	  	<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-xlarge w3-hover-red w3-display-topright" title="Close Subscribe Popup">&times;</span>
 
                    	  		
        					 </div>
        					 <div class="w3-center">
        					 <br/>
             				<a class="button subscribe_title" href="#popup1">Privacy Policy</a>                                                                                    
                                            <div id="popup1" class="overlay">
                                            	<div class="popup-privacy">
                                            		<a class="close" href="#">&times;</a>
                                            		<div class="content">
                                                		<div class="policy_text">
                                                		<br/>
                                                		 <h1 class="subscribe_title">Privacy Policy</h1>
                                                		<hr>
                                                			 <h2 class="subscribe_title">Subscribe</h2>
                                                			<br/>
                                                			If you choose to receive emails notifications from Sax 'n' Sip, 
                                                			we will collect your email address. 
                                                			<br/><br/>
                                                			 <h2 class="subscribe_title">Booking an event</h2>
                                                			<br/>
                                                			You are given the opportunity to book an event with Ben Joseph on our Website. Booking an event requires you to enter your email address, first and last name and 
                                                			telephone number.
                                                			<br/><br/><br/>
                                                		</div>
                                            		</div>
                                            	</div>
                                            </div>
                           	 <br/><br/>
                               </div>      
            			</div>
        			</div>
        			
          		</div>
        	</div>
            
        </div>
 	
    <div class= footer_no_selected>    
    <div class="footer-copyright text-center py-3">
  		<ul class="list-unstyled list-inline text-center">
           	</br>
           	<li class="list-inline-item">
          	 	<a href="<?php
                            $myfile = fopen("Admin/SocialMediaLinks/EmailAddress.txt", "r") or die("Unable to open file!");
                            echo fread($myfile,filesize("Admin/SocialMediaLinks/EmailAddress.txt"));
                            fclose($myfile);
                            ?>" ><i class="social fa-envelope"></i></a>
            </li>
          
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
      	<br/>
        <br/>
      	<div class="copyright">
     		&copy; <script>document.write(new Date().getFullYear());</script> Copyright - Sax'n'Sip | Designed by 2WDK
      	</div>
      	
  	</div>
  	</div>
</div>
</div>
</footer>
