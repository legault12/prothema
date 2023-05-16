<?php
// define database connection parameters
$host = "localhost";
$db_username = "frontend";
$db_password = ".Zfb_oMsA8EgvFZTYqr9";
$db_name = "prothemadb";

try {
    // create a new PDO instance
    $conn = new PDO("mysql:host=$host;dbname=$db_name", $db_username, $db_password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>