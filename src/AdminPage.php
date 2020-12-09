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
				<h1 style="text-align: center; color: #71db77;">Login into an Account</h1>

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
session_start();
$errors = array(
    'Username' => '',
    'Password' => ''
);

if (isset($_POST['submit'])) {

    if (isset($_POST['Username'])) {
        $username = $_POST['Username'];
    }
    if (isset($_POST['Password'])) {
        $password = $_POST['Password'];
    }

    if (empty($_POST['Username'])) {
        $errors['Username'] = 'A Username is required ';
    } else {
        $username = $_POST['Username'];
    }

    if (empty($_POST['Password'])) {
        $errors['Password'] = 'A Password is required ';
    } else {
        $password = $_POST['Password'];
    }

    if (array_filter($errors)) {

        echo '<h3>Errors in form (see below) </h3><h4>';
        echo $errors['Username'];
        echo '<br>';
        echo $errors['Password'];
    } else {

        $query = "SELECT * FROM Users WHERE Username='$username'";

        $params = array();
        $options = array(
            "Scrollable" => SQLSRV_CURSOR_KEYSET
        );
        $stmt = sqlsrv_query($conn, $query, $params, $options);

        /* *********TO GET PASSWORD FROM DATABASE************************ */
        $sql = "SELECT Password FROM Users WHERE Username='$username'";
        $stmt1 = sqlsrv_query($conn, $sql);
        if ($stmt1 === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        if (sqlsrv_fetch($stmt1) === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        $pass = sqlsrv_get_field($stmt1, 0);

        $verify_pass = $pass;

        /* *********TO DISPLAY THE USERNAME IN THE WIZARD PAGE*********** */
        $sql1 = "SELECT Username FROM Users WHERE Username='$username'";
        $stmt2 = sqlsrv_query($conn, $sql1);
        if ($stmt2 === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        if (sqlsrv_fetch($stmt2) === false) {
            die(print_r(sqlsrv_errors(), true));
        }

        $name1 = sqlsrv_get_field($stmt2, 0);

        if (password_verify($password, $verify_pass)) {
            header('Location:WizardPage.php');
        } else {
            echo "<h1><center>Username and/or Email Addres incorrect. Please verify and try again.<center></h1>";
        }
    }
}

?>
        </div>
				</br>
				</br>
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



