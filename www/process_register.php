<?php




if (!isset($_POST['forename']) || !isset($_POST['surname']) || !isset($_POST['email']) || !isset($_POST['password'])) {
    echo "Er is een veld niet aanwezig!";
    exit;
}

if (empty($_POST['forename']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['password'])) {
    echo "Er is een veld niet ingevuld";
    exit;
}

$forename = $_POST['forename'];
$surname  = $_POST['surname'];
$email    = $_POST['email'];
$password = $_POST['password'];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Vul een bestaand emailadres in met @ en een domein";
    exit;
}


$hashed_password = password_hash($password, PASSWORD_DEFAULT);

require 'database.php';

$sql = "INSERT INTO users (forename, lastname, email, password) VALUES (:forename, :surname, :email, :password)";

$stmt = $conn->prepare($sql);

$stmt->bindParam(":forename", $forename);
$stmt->bindParam(":surname", $surname);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":password", $hashed_password);

if ($stmt->execute()) {
    header("location: thank-you-register.php");
}
