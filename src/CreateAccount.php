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
		<br> 

		
		<center>
		<img src="photo/logo.png" alt="logo" >
			<br /><br/>
				<h1 style="text-align: center; color: #71db77;">
					Create an Account 
				</h1>
				
		</center>	

		<div class="  text-white">
		
		<div style="background: #222222;">

			<div class="card-body p-5">
			
<?php
$goodPass = false;

if ($goodPass == false) {
    echo "<center>
        <form method=\"post\">
            <input type=\"text\" name=\"username\" placeholder=\"Type username\"><br/>
            <input type=\"email\" name=\"email\" placeholder=\"Type email address\">
             <br/><br/>
            
            <input type=\"password\" name=\"pass\" placeholder=\"Type password\"><br/>
            <input type=\"password\" name=\"pass\" placeholder=\"Type again password\">
             <br/><br/>
    <br/>
            <button type=\"submit\" class=\"button2\">Create Account</button><br/><br/>";
    echo '
            <a href="AdminPage.php">Already have an account? Login.</a>';
            
}


?>

        </div>
		</div>
	
	
	<center>
		&copy;
		<script>document.write(new Date().getFullYear());</script>
		Copyright - 2WDK Team
	</center>
	<br />
	<div/>
	</div>
</body>
</html>



