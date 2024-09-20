<?php
//Connect to database
require_once '../db_connect.php';

// Get post ID to delete
$messageId = $_POST['messageId'];

try {
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("DELETE FROM Message WHERE messageId=:message");
    $stmt->bindParam(':message', $messageId);
    
    if($stmt->execute()) {
    header("Location: ../contact.php");
    echo "<script>alert(Message Deleted);</sccript>";
    }
    else {
        echo "Error deleting post";
    }
} catch (PDOException $e) {
    echo "Error deleting post: " . $e->getMessage();
}

// Close connection
$pdo = null;
?>
