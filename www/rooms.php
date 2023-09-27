<?php

require 'database.php';

$stmt = $conn->prepare("SELECT * FROM rooms");
$stmt->execute();

// set the resulting array to associative
$rooms = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht van kamers</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Kamernummer</th>
                <th>Kamertype</th>
                <th>Aantal bedden</th>
                <th>Badkamer type</th>
                <th>Uitzicht</th>
                <th>Verdieping</th>
                <th>Heeft balkon</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rooms as $room) : ?>

                <tr>
                    <td><?php echo $room['room_number'] ?></td>
                    <td><?php echo $room['room_type'] ?></td>
                    <td><?php echo $room['bed_count'] ?></td>
                    <td><?php echo $room['bathroom_type'] ?></td>
                    <td><?php echo $room['view_type'] ?></td>
                    <td><?php echo $room['floor_level'] ?></td>
                    <td><?php echo $room['has_balcony'] == 1 ? "Ja" : "Nee"; ?></td>
                    <td><a href="rooms_delete.php?room_id=<?php echo $room['room_id'] ?>">delete</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>