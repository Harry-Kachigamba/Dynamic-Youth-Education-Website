<?php

require_once '../db_connect.php';

// Step 2: Query the Database
$sql = "SELECT * FROM Newsletter";

//execute sql query
$result = $conn->prepare($sql);

//execute query
$result->execute();

// Step 3: Retrieve Data
if ($result->rowCount() > 0) {
    // Step 4: Display Data
    echo "<ul>";
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>" . $row["ID"] . " - " . $row["News"] . "</li>";
        // You can display other columns as well
    }
    echo "</ul>";
} else {
    echo "0 results";
}

// Close connection
$conn = null;

?>