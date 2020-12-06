<!-- this file lets user to select an exisisting layout and set or navigate to first page of the wizard to start creating a new layout -->

<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Wizard Set layout Page</title>
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/Gallery.css" />
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="wizardCSS/wizard.css" />

<style type="text/css">
.next, .link {
	background-color: #4CAF50;
	border: none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
	margin: 4px 2px;
	cursor: pointer;
	border-radius: 5px;
	font-family: Arial, Helvetica, sans-serif;
}

.set {
	background-color: #26B8F6;
	text-decoration: none;
	border: none;
	border-radius: 5px;
	color: white;
	padding: 9px 58px;
	text-align: center;
	display: inline-block;
	font-size: 14px;
	margin: 4px 2px;
	cursor: pointer;
	font-family: Arial, Helvetica, sans-serif;
}

.myclass {
	background-color: #B3EEF5;
	padding: 8px 16px;
}
</style>
</head>

<div class="body">
	<body>
		<div class="container">
			<br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br /> <br />
				<h1 style="text-align: center; color: #71db77;">Set or create a
					layout</h1>

			</center>
			<div class="  text-white">

				<div style="background: #222222;">
					<div class="card-body p-5">
<?php
date_default_timezone_set("America/Toronto");

include "DB_Connect.php";
/* Execute the query with sqlsrv_fetch_array(). */
$sql = "SELECT * FROM Layouts ORDER BY Created_at DESC";
$stmt = sqlsrv_query($conn, $sql);
if ($stmt === false) {
    die(print_r(sqlsrv_errors(), true));
}

echo "<form method=\"post\">
<label for=\"Layouts\">Select a Layout: </label>
<select name=\"Layouts\" id=\"Layouts\">";

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

    echo "<option value='" . $row['LayoutId'] . "'>" . $row['LayoutName'] . ", " . $row['Created_at']->format('Y-m-d') . "</option>";
}
echo "</select>
<br><br>";

echo "<div>

<button class=\"next\" type=\"submit\" name=\"submit\" onclick=\"return validateForm()\">Set</button>
<a class=\"set\" href=\"HomePage.php\"> Try your website!</a>
</div>
</form>";

if (isset($_POST['submit'])) {
    $selectedId = $_POST["Layouts"];
    // echo $selectedId;

    // Unset the current layout (set 'isSet' column of the current set layout to 0)
    $sqlUnset = "UPDATE Layouts
                SET isSet = 0
                WHERE isSet=1";
    sqlsrv_query($conn, $sqlUnset);
    // set the selected layout by user
    $sqlSet = "UPDATE Layouts
                SET isSet = 1
                WHERE LayoutId = $selectedId";
    sqlsrv_query($conn, $sqlSet);
    // name of layout
    $sql = "SELECT LayoutName FROM Layouts
                WHERE LayoutId = $selectedId";
    $result = sqlsrv_query($conn, $sql);
    if (sqlsrv_fetch($result) === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    $layoutName = sqlsrv_get_field($result, 0);
    echo " <br>";

    echo "<p> Website layout is set to " . $layoutName . "</p>";
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

?>

<div>
							<center>
								<br> <br> <br> <br> <a class="link" href="WizardPage.php">&laquo;
									Previous</a> <a class="link" href="InsertIntoHome.php">Create
									New Layout &raquo;</a>
						
						</div>
						</center>
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