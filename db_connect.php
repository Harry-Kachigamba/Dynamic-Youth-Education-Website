<?php 
$servername = "xxxxx";
$username = "xxxxx";
$password = "xxxx";

try {
    $conn = new PDO("xxxxxxxxxxxxxxxxxx", $username, $password);
    //PDO Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
