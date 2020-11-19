<?php
$serverName = "localhost\SQLEXPRESS"; // serverName\instanceName

// The connection will be attempted using Windows Authentication.
$connectionInfo = array(
    "Database" => "2WDK-Database"
);
$conn = sqlsrv_connect($serverName, $connectionInfo);

if ($conn) {
//      echo "Connection established.\n";
} else {
    echo "Connection could not be established";
    die(print_r(sqlsrv_errors(), true));
}



?>