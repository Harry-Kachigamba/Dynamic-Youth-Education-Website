<?php

require_once '../db_connect.php';

// start a session
session_start();

// functon to check if user is locked out
function isLockedOut($username)
{
    if (isset($_SESSION['lockout'][$username]) && $_SESSION['lockout'][$username] > time()) {
        return true;
    }
    return false;
}

// function to handle login attempt
function handleLogin($username, $password)
{
    // check if the user is locked out
    if (isLockedOut($username)) {
        echo "You are locked out. Please try again later.";
        return;
    }

    global $conn;

try {
    $sql = "SELECT username, password FROM Member WHERE username = :username and password = :password";
    $query = $conn->prepare($sql);

    $query->bindParam(":username", $username);
    $query->bindParam(":password", $password);
    $query->execute();
    $row = $query->fetch(PDO::FETCH_ASSOC);
    $count = $query->rowCount();

    if ($count > 0) {
        // successful login
        echo "Login Successful";
        header("Location: ../home-newsletter.php");
    } else {
        // Failed login
        echo '<script>
    alert("Login failed. Invalid username and password");
    window.location.href = "../index.php";
    </script>';

        //Increment login attempt
        $_SESSION['attempts'][$username] = isset($_SESSION['attempts'][$username]) ? $_SESSION['attempts'][$username] + 1 : 1;
        // Lock out the user for 10 minutes after 3 failed attempts
        if ($_SESSION['attempts'][$username] >= 3) {
            $_SESSION['lockout'][$username] = time() + (10 * 60);
            echo "You are locked out for 10 minutes. Please try again later.";
        }
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Uname"];
    $password = $_POST["Pword"];
    handleLogin($username, $password);
}
