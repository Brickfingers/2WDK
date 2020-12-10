<html>
<head>
<meta charset="ISO-8859-1">
<title>Create Account</title>
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
			
<?php
include ('DB_Connect.php');
$goodPass = false;

$username = $email = $password = $confirm_password = '';
$errors = array(
    'Username' => '',
    'EmailAddress' => '',
    'Password' => '',
    'Password2' => ''
);

if ($goodPass == false) {
    echo "<center>
        <form method=\"post\">
            
            <input type=\"text\" name=\"Username\" placeholder=\"Type username\"><br/>
            <input type=\"email\" name=\"EmailAddress\" placeholder=\"Type email address\">
             <br/><br/>
            
            <input type=\"password\" name=\"Password\" placeholder=\"Type password\"><br/>
            <input type=\"password\" name=\"Password2\" placeholder=\"Type again password\">
             <br/><br/>
    <br/>
            <button type=\"submit\" name=\"submit\" class=\"button2\">Create Account</button><br/><br/>";
    echo '
            <a href="AdminPage.php">Already have an account? Login.<br/><br/></a>';

    if (isset($_POST['submit'])) {

        if (empty($_POST['Username'])) {
            $errors['Username'] = 'A Username is required ';
        } else {
            $username = $_POST['Username'];
        }

        if (empty($_POST['EmailAddress'])) {
            $errors['EmailAddress'] = 'An email is required ';
        } else {
            $email = $_POST['EmailAddress'];
            if (! filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['EmailAddress'] = 'Email must be a valid email address ';
            }
        }

        if (empty($_POST['Password'])) {
            $errors['Password'] = 'A Password is required ';
        } else {
            $password = $_POST['Password'];
        }

        if (empty($_POST['Password2'])) {
            $errors['Password2'] = 'Please confirm your password ';
        } else {
            $confirm_password = $_POST['Password2'];
            if ($password != $confirm_password) {
                $errors['Password2'] = 'Password did not match ';
            }
        }

        if (array_filter($errors)) {
            echo '<h3>Errors in form (see below) </h3><h4>';
            echo $errors['Username'];
            echo '<br>';
            echo $errors['EmailAddress'];
            echo '<br>';
            echo $errors['Password'];
            echo '<br>';
            echo $errors['Password2'];
        } else {
 
            $username = $_POST['Username'];
            $email = $_POST['EmailAddress'];
            $password = $_POST['Password'];
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $query = "SELECT * FROM Users WHERE Username='$username' OR EmailAddress='$email'";

            $params = array();
            $options = array(
                "Scrollable" => SQLSRV_CURSOR_KEYSET
            );
            $stmt = sqlsrv_query($conn, $query, $params, $options);

            $row_count = sqlsrv_num_rows($stmt);

            if ($row_count != 0)
                echo "<h1>Username or Email Addres already exist. Please try again.</h1>";
            else {
                $sql = "INSERT INTO Users(Role, Username, Password, EmailAddress) VALUES(?,?,?,? )";

                $params2 = array(
                    'Admin',
                    $username,
                    $hash,
                    $email
                );

                $stmt2 = sqlsrv_query($conn, $sql, $params2);
                if ($stmt2 === false) {
                    die(print_r(sqlsrv_errors(), true));
                } else {
                    header("Location:AccountCreated.php");
                    exit();
                }
            }
        }
    }

    sqlsrv_close($conn);
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



