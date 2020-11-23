<?php

/************************************
 * Fall 2020 Admin Page             *
 * Fall 2020 Admin Page             *
 ***********************************/
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
<link rel="stylesheet" type="text/css" href="pagesCSS/Admin.css" />
</head>
<div class="body">
	<body>
		<div class="container">
			<br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br /> <br />
				<h1 style="text-align: center; color: #71db77;">Create an Account</h1>

			</center>
			<div class="  text-white">

				<div style="background: #222222;">
					<div class="card-body p-5">

						<center>
							<form method="post">
								<input type="text" name="Username" placeholder="Username"> <br />
								<br /> <input type="password" name="Password"
									placeholder="Password"> <br /> <br /> <a
									href="RecoverCredentials.php">Recover Password or Username</a>
								<br /> <br />
								<button type="submit" name="submit" class="button">Log in</button>
								<br /> <br />
								<button type="submit" class="button1"
									formaction="/WebApp/src/CreateAccount.php">Create Account</button>
							</form>
						</center>
					</div>

<?php
include ('DB_Connect.php');

if (isset($_POST['submit'])) {

    if (isset($_POST['Username'])) {
        $username = $_POST['Username'];
    }
    if (isset($_POST['Password'])) {
        $password = $_POST['Password'];
    }

    // $verifyhash = password_verify($password, $hash); //Needs improvement

    $query = "SELECT * FROM Users1 WHERE Username='$username' AND Password='$password'";

    $params = array();
    $options = array(
        "Scrollable" => SQLSRV_CURSOR_KEYSET
    );
    $stmt = sqlsrv_query($conn, $query, $params, $options);

    $sql = "SELECT Username FROM Users1 WHERE Username='$username'";
    $stmt1 = sqlsrv_query($conn, $sql);
    if ($stmt1 === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    if (sqlsrv_fetch($stmt1) === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    $name = sqlsrv_get_field($stmt1, 0);

    session_start();
    $_SESSION['name'] = $name;

    // echo $stmt;
    $row_count = sqlsrv_num_rows($stmt);
    // echo $row_count;
    // echo $verifyhash;

    if ($row_count == 0) {
        echo "<h1>Username and/or Email Addres incorrect. Please verify and try again.</h1>";
    } else {
        header('Location:WizardPage.php');
    }
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
			<div />
		</div>
	</body>
</html>




