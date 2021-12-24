<?php

$servername = "localhost";
$username = "root"; # MySQL user
$password = ""; # MySQL Server root password
$dbname = 'Contact_db'; # Database name
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    # Display an error mesage if the connection fails
    die("Connection failed: " . $conn->connect_error);
} else {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
}
