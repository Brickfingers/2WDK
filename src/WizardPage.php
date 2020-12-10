<html>
<head>
<meta charset="ISO-8859-1">
<title>Wizard Welcome Page</title>
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
			<br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br />
			</center>
			<div class="  text-white">

				<div style="background: #222222;">
					<div class="card-body p-5">

						<center>
							<form method="post">
								<?php
        session_start();
        
        echo "<h2><br><center>Welcome, ";
        echo $_SESSION['Username'];
        echo "!</h2><br><br><center><h1> Here you will find a wizard to help you edit and customize your website.<br><br> Start now by clicking the button below.<br><br><br></h1>";
        ?>
        <!-- Implementation in Sprint 3 -->
								<button type="submit" class="button1"
									formaction="/WebApp/src/SelectLayout.php">Start Here!</button>
								<br> <br>
								<button type="submit" class="button1"
									formaction="/WebApp/src/AdminPage.php">&nbsp;&nbsp;Log
									Out&nbsp;&nbsp;</button>
							</form>
						</center>
					</div>
				</div>
				</br> </br>
				<center>
					&copy;
					<script>document.write(new Date().getFullYear());</script>
					Copyright - 2WDK Team
				</center>
				</br>
			</div>
		</div>

</div>
</body>
</html>



