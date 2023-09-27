<?php


$id = $_GET['room_id'];



delete("rooms", 1, 'room_id');
delete("rooms", 5, 'room_id');
delete("users", 15, 'user_id');


function delete($tablename, $id, $type_id)
{

    require 'database.php';

    $sql  = "DELETE FROM :tablename WHERE :type_id = :id";
    $statement = $conn->prepare($sql);
    $statement->bindParam(":tablename", $tablename);
    $statement->bindParam(":type_id", $type_id);
    $statement->bindParam(":id", $id);

    $statement->execute();
}
