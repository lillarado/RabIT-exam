<?php
require "../config/config.php";
require "../model/adModel.php";



/**
 * Retrieves all ads from the database along with their associated user's name.
 *
 * @return array An array of AdModel objects representing the ads.
 */
function getAllAds()
{
    $ads = array();
    $conn = createConnection();
    $sql = "SELECT a.id, a.title, a.user_id, u.name FROM advertisements a left join users u on a.user_id = u.id order by a.id";
    $result = $conn->query($sql);

    // Create AdModel objects from each row in the result set and add them to the $ads array

    while ($row = $result->fetch_assoc()) {
        $ad = new AdModel($row["id"], $row["title"], $row["user_id"]);
        $ad->setUserName($row["name"]);
        array_push($ads, $ad);
    }
    closeConnection($conn);
    return $ads;
}
?>