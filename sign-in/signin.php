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
    <main class="signin-login-form">
      <form action="login.php" method="post" id="signin-form" name="Form" onsubmit="return checking_empty_login()">

        <h2>Login</h2><br>
        <label for="username">Username</label><br>
        <input type="text" name="Uname" placeholder="enter username" /><br>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="Pword" placeholder="enter password" /><br>

        <input type="submit" value="Sign In">
      </form>
    </main>

    <script src="../script.js"></script>
  </body>
</html>
