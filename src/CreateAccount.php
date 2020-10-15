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
				<img src="photo/logo.png" alt="logo"> <br />
				<br />
				<h1 style="text-align: center; color: #71db77;">Create an Account</h1>

			</center>
			<div class="  text-white">

				<div style="background: #222222;">

					<div class="card-body p-5">
			
<?php
include ('DB_Connect.php');
$goodPass = false;

$userid = $role = $username = $email = $password = '';
$errors = array(
    'UserId' => '',
    'Role' => '',
    'Username' => '',
    'EmailAddress' => '',
    'Password' => ''
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

        /*
         * if(empty($_POST['UserId'])){
         * $errors['UserId'] = 'An User Id is required';
         * } else{
         * $userid = $_POST['UserId'];
         * if(!preg_match('/^[a-zA-Z\s]+$/', $userid)){
         * $errors['UserId'] = 'User Id must be valid';
         * }
         * }
         *
         * if(empty($_POST['Role'])){
         * $errors['Role'] = 'A Role is required';
         * } else{
         * $role = $_POST['Role'];
         * if(!preg_match('/^[a-zA-Z\s]+$/', $role)){
         * $errors['Role'] = 'Role must be letters only';
         * }
         * }
         *
         * if(empty($_POST['Username'])){
         * $errors['Username'] = 'A Username is required';
         * } else{
         * $username = $_POST['Username'];
         * if(!preg_match('/^[a-zA-Z\s]+$/', $username)){
         * $errors['Username'] = 'Username must be letters and spaces only';
         * }
         * }
         *
         * if(empty($_POST['EmailAddress'])){
         * $errors['EmailAddress'] = 'An email is required';
         * } else{
         * $email = $_POST['EmailAddress'];
         * if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         * $errors['EmailAddress'] = 'Email must be a valid email address';
         * }
         * }
         *
         * if(empty($_POST['Password'])){
         * $errors['Password'] = 'A Password is required';
         * } else{
         * $password = $_POST['Password'];
         * if(!preg_match('/^[a-zA-Z\s]+$/', $password)){
         * $errors['Password'] = 'Password must be letters and spaces only';
         * }
         * }
         */

        if (array_filter($errors)) {
            // echo 'Errors in form';
        } else {
         
            $username = $_POST['Username'];
            $email = $_POST['EmailAddress'];
            $password = $_POST['Password'];

            // create sql
            $sql = "INSERT INTO Users1(UserId, Role, Username, Password, EmailAddress) VALUES(?,?,?,?,? )";
            // $params = array(mysqli_insert_id(1),'Admin',$username, $password , $email);
            $params = array(
                '1',
                'Admin',
                $username,
                $password,
                $email
            );

            $stmt = sqlsrv_query($conn, $sql, $params);
            if ($stmt === false) {
                die(print_r(sqlsrv_errors(), true));
            } else {

                header("Location:AccountCreated.php");
                exit();
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



