<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:cookingtime.database.windows.net,1433; Database = cookingTimeDatabase", "CloudSAb52d4cd6", "cgh1357mn@");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSAb52d4cd6", "pwd" => "cgh1357mn@", "Database" => "cookingTimeDatabase", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:cookingtime.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
echo "sd";
?>