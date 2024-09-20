<?php

//connect to database
require_once '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //entering data to database
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $message = $_POST['message'];

    try {
        //inserting query
        $messageInsertQuery = "INSERT INTO Message (Firstname, Lastname, Email, Username, Message) VALUES ('$firstname', '$lastname', '$email', '$username', '$message')";
        $message_store = $conn->prepare($messageInsertQuery);
        
        $message_store->execute();

        if ($message_store == true) {
            echo '<script>alert("Message Sent!");</script>';
            header("Location: ../contact.php");
        }

        $stmt = null;
        $conn = null;

    }

    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        header("Location: ../contact.php");
    }
}
else {
    header("Location: ../contact.php");
}

?>