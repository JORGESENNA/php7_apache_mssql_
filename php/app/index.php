<?php

$serverName = "mssql";
$connectionOptions = array(
    "Database" => "php-app",
    "Uid" => "sa",
    "PWD" => "YourStrong!Password"
);

// Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);

if (!$conn) {
    die(print_r(sqlsrv_errors(), true));
}

echo "Connected successfully!";
?>