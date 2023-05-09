<?php

$host = 'localhost'; // example database host
$dbname = 'prothemadb'; // example database name
$username = 'myusername'; // example database username
$password = 'mypassword'; // example database password

// create a new PDO connection
try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    // handle the exception here (e.g. log the error message)
    echo 'Connection failed: ' . $e->getMessage();
}

?>
