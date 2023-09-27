<?php

require 'database.php';
session_start();

if (!isset($_SESSION['isLoggedIn']) || !$_SESSION['isLoggedIn'] || !isset($_SESSION['id'])) {
    echo "Jij bent niet geautoriseerd";
    exit;
}

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM users WHERE user_id = :user_id";
$stmt = $conn->prepare($sql);
$stmt->bindParam(":user_id", $user_id);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);


include 'header.php';
include 'navigatie.php';
?>
<div class="container m-3">
    <div class="row">
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <div>
                        <label for="voornaam">Voornaam</label>
                        <input type="text" value="<?php echo $user['forename']; ?>" name="voornaam">
                    </div>
                    <div>
                        <label for="achternaam">achternaam</label>
                        <input type="text" value="<?php echo $user['lastname']; ?>" name="achternaam">
                    </div>
                    <div>
                        <label for="geboortedatum">geboortedatum</label>
                        <input type="text" value="<?php echo $user['dob']; ?>" name="geboortedatum">
                    </div>
                    <div>
                        <label for="email">email adres</label>
                        <input type="text" value="<?php echo $user['email']; ?>" name="email">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php' ?>