<?php

require 'database.php';

$role = "guest";

$stmt = $conn->prepare("SELECT * FROM users WHERE role = :role");
$stmt->bindParam(":role", $role);
$stmt->execute();

// set the resulting array to associative
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht van gebruikers</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>

                <tr>
                    <td><?php echo $user['user_id'] ?></td>
                    <td><?php echo $user['forename'] ?></td>
                    <td><?php echo $user['lastname'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><a href="users_delete.php?user_id=<?php echo $user['user_id'] ?>">delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>