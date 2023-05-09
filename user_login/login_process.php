<?php

// This would be where you'd normally check the provided credentials against a database

$expected_username = 'admin';
$expected_password = 'password';

if ($_POST['username'] === $expected_username && $_POST['password'] === $expected_password) {
    // Login successful, redirect to account page
    header('Location: account.php');
    exit();
} else {
    // Login failed, redirect back to login page
    header('Location: login.php');
    exit();
}
