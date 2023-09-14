<?php
require 'database.php';

if (!isset($_POST['email']) || empty($_POST['email'])) {
    echo 'something went wrong';
    exit;
}

if (!isset($_POST['password']) || empty($_POST['password'])) {
    echo 'something went wrong';
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM guests WHERE email = :email");
$stmt->bindParam(':email', $email);
$stmt->execute();

// set the resulting array to associative
$guest = $stmt->fetch(PDO::FETCH_ASSOC);

if ($stmt->rowCount() == 0) {
    echo "We do not know you! Please Stay away!!!";
    exit;
}

if (password_verify($password, $guest['password'])) {

    session_start();

    $_SESSION['isLoggedIn'] = true;
    
    header("location: dashboard.php");
    exit;
}
