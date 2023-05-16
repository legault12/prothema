<?php
// start a session
session_start();

// include the database connection file
include_once '../modules/universal/db_connection.php';

// prepare and execute the SQL statement
$stmt = $conn->prepare("SELECT * FROM users WHERE username = :username");
$stmt->bindParam(':username', $_POST['username']);
$stmt->execute();

// check if a user was found
if($stmt->rowCount() > 0) {
    // get the user
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    
    // verify the password
    if(password_verify($_POST['password'], $user['password'])) {
        // store the user's ID in the session
        $_SESSION['user_id'] = $user['id'];

        // redirect to the account page
        header("Location: account.php");
        exit;
    }
}

// if the script hasn't exited by now, the login attempt was unsuccessful
$_SESSION['error'] = "Invalid username or password";
header("Location: ../login.php");
exit;
?>