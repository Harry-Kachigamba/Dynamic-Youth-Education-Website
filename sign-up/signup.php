<?php
require_once '../db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="../style.css" />
    <title>SMC Ltd</title>
  </head>
  <body>
    <main class="signup-register-form">
      <form action="register.php" method="post" id="signup-form" name="Form" onsubmit="return checking_empty()">

        <h2>Register</h2><br>
        <label for="firstname">Firstname</label><br>
        <input type="text" name="firstname" placeholder="enter firstname" /><br>
        <br>
        <label for="lastname">Lastname</label><br>
        <input type="text" name="lastname" placeholder="enter lastname" /><br>
        <br>
        <label for="email">Email</label><br>
        <input type="text" name="email" placeholder="enter email" /><br>
        <br>
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone" placeholder="enter phone" /><br>
        <br>
        <label for="username">Username</label><br>
        <input type="text" name="username" placeholder="enter username" /><br>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="password" placeholder="enter password" /><br>

        <input type="submit" value="Sign Up">
      </form>

    </main>

  <script src="../script.js"></script>
  </body>
</html>

