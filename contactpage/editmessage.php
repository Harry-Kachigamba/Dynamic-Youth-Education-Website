<?php
//connect to database
require_once '../db_connect.php';

// Get form data
$messageId = $_POST['messageId'];
$username = $_POST['username'];
$message = $_POST['message'];


try {
    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("UPDATE Message SET Username=:username, Message=:message WHERE MessageId=:messageId");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':messageId', $messageId);

    if($stmt->execute()) {
        header("Location: ../contact.php");
        echo "<script>alert(Message Updated);</sccript>";
        }
        else {
            echo "Error deleting post";
        }
} catch (PDOException $e) {
    echo "Error updating post: " . $e->getMessage();
}

// Close connection
$pdo = null;
?>
