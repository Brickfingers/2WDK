<html>
<head>
<meta charset="ISO-8859-1">
<title>Recover Credentials</title>
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
			<br> <br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br />
				<br />
				<h1 style="text-align: center; color: #71db77;">Recover Password</h1>
			</center>
			<div class="  text-white">

				<div class="card1" style="background: #222222;">

					<div class="card-body p-5">
						<center>
							<form action="" method="post">
								<input type="text" name="email"
									placeholder="Type your email address"> <br />
								<br />
								<a href="AdminPage2.php">Already have an account? Login.<br/><br/></a>
								<br />
								<button type="submit" name="submit" value="Submit"
									class="button2">Recover Password</button></br></br>
									<button type="submit" name="submit2" value="Submit"
									class="button2">Recover Username</button>
								</form>          
<?php
include ('DB_Connect.php');

//recover password
if (isset($_POST['submit'])) {

    $to = $_POST['email'];
    $subject = "Password Recovery";
    $message = " Please enter to the following URL to recover your password \n\n";

    mail($to, $subject, $message);

    if (! $mail->Send()) {
        $error = "Please try Later, Error Occured while Processing...";
        return $error;
    } else {
        $error = "Thanks You !! Your email is sent.";
        return $error;
    }
}

//recover username
if (isset($_POST['submit2'])) {
    
    $email = $_POST['email'];
    $query = "SELECT * FROM Users1 WHERE EmailAddress='$email'";
    
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query( $conn, $query , $params, $options );
    //echo $stmt;
    $row_count = sqlsrv_num_rows( $stmt );
    //echo $row_count;
    //echo $verifyhash;
    if ($row_count == 0){
        echo "<h1>Email Address not found.</br> Try again or <a href='CreateAccount.php'>Create an Account</a></h1>";
    }
    else{
        echo "<h1>Your username is: </h1>";
}
}
?>

					</div>
				</div>	</br><br><br>		
				<center>
					&copy;
					<script>document.write(new Date().getFullYear());</script>
					Copyright - 2WDK Team
				</center>
				<br /><br>
				<div />
			</div>
	</body>
</html>



