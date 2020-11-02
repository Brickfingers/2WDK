<?php
include "DB_Connect.php";

$query = "SELECT * FROM About WHERE AboutId=3";
$result = sqlsrv_query($conn, $query);

if (sqlsrv_fetch($result) === false) {
    die(print_r(sqlsrv_errors(), true));
}
/* The column number of image in About page is 2(starts from 0)"*/
$myImage = sqlsrv_get_field($result, 2);
echo "image name is:  $myImage \n";

/* photo folder that used to store images*/
echo "<img src='photo/" . $myImage . "' height='280' width='220'> ";
sqlsrv_free_stmt($result);
sqlsrv_close($conn);

?>

"photo/"
