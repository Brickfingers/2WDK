<!----------------------------------------------------------------------------- 
* Filename:					Gallery.php
* Version:					4.0
* Team Name:                2WDK
* Student Name:				Nick Wright
----------------------------------------------------------------------------->

<?php
include "DB_Connect.php";

$sql=
    "SELECT
        [Booking].[Question1],[Booking].[Question2],[Booking].[Question3],
        [Booking].[Question4],[Booking].[Question5],[Booking].[Question6],
        [Booking].[Question7],[Booking].[Question8],[Booking].[Question9],
        [Booking].[Question10],[Booking].[Question11],[Booking].[Question12],
        [Booking].[Question13],[Booking].[Question14],[Booking].[Question15]
    FROM [dbo].[Layouts]
    INNER JOIN [dbo].[Booking]
    ON  [Layouts].[BookingId] = [Booking].[BookingId]
    WHERE [Layouts].[isSet] = 1";

$result = sqlsrv_query($conn, $sql);
if (sqlsrv_fetch($result) === false) {
    die(print_r(sqlsrv_errors(), true));
}

$formQuestions = array(
    sqlsrv_get_field($result, 0),sqlsrv_get_field($result, 1),sqlsrv_get_field($result, 2),
    sqlsrv_get_field($result, 3),sqlsrv_get_field($result, 4),sqlsrv_get_field($result, 5),
    sqlsrv_get_field($result, 6),sqlsrv_get_field($result, 7),sqlsrv_get_field($result, 8),
    sqlsrv_get_field($result, 9),sqlsrv_get_field($result, 10),sqlsrv_get_field($result, 11),
    sqlsrv_get_field($result, 12),sqlsrv_get_field($result, 13),sqlsrv_get_field($result, 14)
);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking</title>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel='stylesheet' media='screen' type='text/css' href='pagesCSS/Booking.css' />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</head>
<body class="body">
	<div>
        <?php include "Header.php"; ?>
        <br>
        <div class="form p-3 mx-3">
            <h1 class="header1"> BOOKING </h1>
            <form method="post" action="acknowledge.php" class="mx-5">
            <?php $formCount = 0;
            for ($formCount = 0; $formCount <= 15; $formCount++) {
                echo "<div class=\"form-group\">";
                echo "<label>".$formQuestions[$formCount]."</label><br>";
                echo "<input name=\""."\" type=\"text\" aria-required=\"true\" class=\"form-control\"></input><br>";
                echo "</div>";
            }
            ?>
            </form>
        </div>
    </div>
    <?php include "Footer.php"; ?>
</body>
</html>

