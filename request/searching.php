<?php

require_once '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Check if the textbox is empty
    if (empty($_GET['query'])) {
        echo "<script type='text/javascript'>alert('Search bar cannot be empty!');</script>";
    } else {

        //retrieving search item
        $query = $_GET['query'];

        //querying sql command
        $searchQuery = "SELECT * FROM LatestTechniques WHERE SocialMedia LIKE :searchinput OR Technique LIKE :searchinput";

        // Execute SQL query
        $result = $conn->prepare($searchQuery);

        //bind parameters
        $searchParam = "%$query%";
        $result->bindParam(':searchinput', $searchParam);
  

        //Execute query
        $result->execute();

        // Check if any results were found
        if ($result->rowCount() > 0) {
            // Output data of each row
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo " SocialMedia: " . $row["SocialMedia"] . " Technique: " . $row["Technique"] . "<br>";
            }
        } else {
            echo "0 results found";
        }
    }

    // Close connection
    $conn = null;
}
else {
    header("Location: popular.php");
}
