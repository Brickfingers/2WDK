<!-- this file lets user to select an exisisting layout and set or navigate to first page of the wizard to start creating a new layout -->

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
.next-prev {
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
}

a {
	text-decoration: none;
	display: inline-block;
	padding: 8px 16px;
}

.myclass {
	background-color: #B3EEF5;
	padding: 8px 16px;
}
</style>
</head>

<body class="myclass">
<?php
date_default_timezone_set("America/Toronto");
echo "<h2> Select or create a layout </h2>";
include "DB_Connect.php";
?>

    <div>
    <form>
		<button formaction="WizardPage.php" class="next-prev" name="previous">&laquo;Previous</button>
		<button formaction="InsertIntoHome.php" class="next-prev" name="next">Next &raquo;</button>
	</form>
	</div>
</body>
</html>