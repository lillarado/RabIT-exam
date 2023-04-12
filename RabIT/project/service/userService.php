<?php
require "../config/config.php";
require "../model/userModel.php";


function getAllUsers(){
    $users = array();
    $conn = createConnection();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    // Display the user data
    
    while ($row = $result->fetch_assoc()) {
        $user = new UserModel($row["id"],$row["name"]);
        array_push($users,$user);
    }
   
    closeConnection($conn);
    
    return $users;
}
?>