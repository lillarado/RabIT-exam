<?php
require "../config/config.php";
require "../model/userModel.php";



/**
 * Retrieves all users from the database and returns an array of UserModel objects.
 * 
 * @return array An array of UserModel objects.
 */
function getAllUsers()
{
    $users = array();
    $conn = createConnection();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    // Retrieve all users from the database and create UserModel objects for each one.
    // Store the objects in an array and return the array.

    while ($row = $result->fetch_assoc()) {
        $user = new UserModel($row["id"], $row["name"]);
        array_push($users, $user);
    }

    closeConnection($conn);

    return $users;
}
?>