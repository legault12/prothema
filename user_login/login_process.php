<?php
// start a session
session_start();

// include the database connection file
include_once '../modules/universal/db_connection.php';

// open a log file
$logFile = fopen("log.txt", "w");

// prepare and execute the SQL statement
$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();

// check if a user was found
if($stmt->rowCount() > 0) {
    // get the user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    fwrite($logFile, "User found in database.\n");

    // verify the password
    if ($_POST['password'] === $user['password']) {
        // store the user's ID in the session
        $_SESSION['user_id'] = $user['id'];
        fwrite($logFile, "Password verified.\n");
        
        // redirect to the account page
        fclose($logFile);
        header("Location: account.php");
        exit;
    } else {
        fwrite($logFile, "Password verification failed.\n");
        fclose($logFile);
    }
} else {
    fwrite($logFile, "User not found in database.\n");
    fclose($logFile);
}

// if the script hasn't exited by now, the login attempt was unsuccessful
$_SESSION['error'] = "Invalid username or password";
header("Location: ../login.php");
exit;
?>
