<html>
<head>
<meta charset="ISO-8859-1">
<title>Wizard Main Page</title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Gallery.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="pagesCSS/Admin.css" />
</head>
<div class="body">
	<body>
		<div class="container">
			</center>
			<div class="  text-white">

				<div style="background: #222222;">
					<div class="card-body p-5">

	<center>
		<img src="photo/logo.png" alt="logo"> <br />
		<br />
		<div class="text">
		<br/><br/>
			<?php  
			session_start();
			echo "<h2><center>Welcome, ";
			echo  $_SESSION['name'];
			echo "!</h2><br><center><h1> Here you will find a wizard to help you edit and customize your website.<br><br> Start now by clicking the button below.<br><br><br></h1>";
			// Use od this links is provitional and will be swithched to button in Sprint 3
			echo "<a
            href=\"SelectLayout.php\"><h2>Start!</h2></a>";
			echo "<a
            href=\"AdminPage.php\"><h2>Log Out</h2></a>";
        ?>
    		
	<!-- Implementation in Sprint 3 
	<button type="submit" class="button1"
					formaction="/WebApp/src/InsertIntoHome.php">Start!</button><br><br>
	<button type="submit" class="button1"
					formaction="/WebApp/src/InsertIntoHome.php">Log Out</button>-->
	<div class="  text-white">

	<div class="card1" style="background: #222222;">

	<div class="card-body p-5">

		</div>
				</div><br>
					<center>
						&copy;
						<script>document.write(new Date().getFullYear());</script>
						Copyright - Sax n Sip
					</center>
				</div>		
	</div>
	<br />
</div>
</body>
</html>



