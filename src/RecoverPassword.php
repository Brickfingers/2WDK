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
		<img src="photo/logo.png" alt="logo" >
			<br /><br/>
				<h1 style="text-align: center; color: #71db77;">
					Recover Password 
				</h1>
				
		</center>	

		<div class="  text-white">
		
		<div class="card1" style="background: #222222;">

			<div class="card-body p-5">
			
<?php
$goodPass = false;

if ($goodPass == false) {
    echo "<center>
        <form method=\"post\">
            <input type=\"email\" name=\"email\" placeholder=\"Type your email address\">
             
             <br/><br/>
    <br/><br/>
            <button type=\"submit\" class=\"button2\">Recover Password</button><br/><br/>
            ";
}


?>

        </div>
		</div>
	
	<br/><br/><br/><br/><br/><br/><br/>
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



