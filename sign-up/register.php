<?php

require_once '../db_connect.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    try {
     //Inserting data
    $sql = "INSERT INTO Member (firstname, lastname, email, phone, username, password) VALUES (:firstname, :lastname, :email, :phone, :username, :password);";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":password", $password);

    $stmt->execute();

    if ($stmt == true) {
        header("Location: ../index.php");
    }

    $stmt = null;
    $conn = null;
    

    }
    catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        header("Location: signup.php");
    }
}

else {
    header("Location: ../index.php");
}

?>