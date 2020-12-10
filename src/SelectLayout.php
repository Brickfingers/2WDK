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
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="wizardCSS/wizard.css" />

</head>

<body>
		<div>
			<br>
			<center>
				<img src="photo/logo.png" alt="logo"> <br /> <br />
				<h1>Set or create a	layout</h1>
			</center>
			<div>
				<div>
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
<label for=\"Layouts\"><h4>Select a Layout:</h4></label>&nbsp;
<select name=\"Layouts\" id=\"Layouts\">";

while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {

    echo "<option value='" . $row['LayoutId'] . "'>" . $row['LayoutName'] . ", " . $row['Created_at']->format('Y-m-d') . "</option>";
}
echo "</select>
<br><br>";

echo "<div>
<button class=\"next\" type=\"submit\" name=\"submit\" onclick=\"return validateForm()\">Set</button>
<a class=\"next\" href=\"HomePage.php\"> Try your website!</a>
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
    echo "<br> <br>";

    echo "<h4 class= \"setLayout\" > Website layout is set to " . $layoutName . "</h4>";
}

sqlsrv_free_stmt($stmt);
sqlsrv_close($conn);

?>
<div>
		<center>
		<br> <br> <br> <br> <a class="next" href="WizardPage.php">&laquo;Previous</a> 
		<a class="next" href="InsertIntoHome.php">Create New Layout &raquo;</a>
		</center>				
</div>
						
	</div>
				</div>
				<center>
					&copy;
					<script>document.write(new Date().getFullYear());</script>
					Copyright - 2WDK Team
				</center>
				<br />
				</div>
			</div>
	
	</body>

</html>