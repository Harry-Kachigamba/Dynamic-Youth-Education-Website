<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Acme&family=Alike&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <title>SMC Ltd</title>
</head>

<body>
    <div class="hamburger-nav">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <header class="navigation">
        <section class="logo-wrapper">
            <h1 class="logo">SMC Ltd.</h1>
        </section>
        <nav>
            <ul>
                <li><a href="information.php">Information</a></li>
                <li><a href="popular.php">Popular</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="livestreaming.php">Livestreaming</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="conduct.php">Conduct</a></li>
                <li><input type="search" placeholder="Search" class="search-input"></li>
            </ul>
        </nav>
    </header>

    <main>

        <div class="container">
            <span class="big-circle"></span>
            <img src="img/shape.png" class="square" alt="" />
            <div class="form">
                <div class="contact-info">
                    <h3 class="title">Social Media Campaign Ltd.</h3>
                    <p class="text">
                        Contact Us with details below
                    </p>

                    <div class="info">
                        <div class="information">
                            <p><i class="fa-solid fa-file"></i> Post Office Box 300</p>
                        </div>
                        <div class="information">
                            <p><i class="fa-solid fa-envelope"></i> socialmediacampaignltd@gmail.com</p>
                        </div>
                        <div class="information">
                            <p><i class="fa-solid fa-phone"></i> 260-400-711</p>
                        </div>
                    </div>

                    <div class="social-media">
                        <p>Connect with us :</p>
                        <div class="social-icons">
                            <a href="https://web.facebook.com/?_rdc=1&_rdr">
                                <i class="fa-brands fa-facebook"></i>
                            </a>
                            <a href="https://twitter.com/">
                                <i class="fa-brands fa-square-x-twitter"></i>
                            </a>
                            <a href="https://www.instagram.com/">
                                <i class="fa-brands fa-square-instagram"></i>
                            </a>
                        </div>
                        <p class="contact-privacy-p">By submitting this form you agree to our <a href="privacy&policy.html" class="contact-privacy-a"> Privacy Policy</a></p>
                    </div>
                </div>

                <div class="contact-form">
                    <form action="contactpage/contact_sent.php" autocomplete="off" method="post">
                        <h3 class="title">Contact us</h3>
                        <div class="input-container">
                            <input type="text" name="firstname" id="firstname" class="input" placeholder="Firstname" />
                        </div>
                        <div class="input-container">
                            <input type="text" name="lastname" class="input" placeholder="Lastname" />
                        </div>
                        <div class="input-container">
                            <input type="email" name="email" class="input" placeholder="Email" />
                        </div>
                        <div class="input-container">
                            <input type="text" name="username" class="input" placeholder="Username" />
                        </div>
                        <div class="input-container textarea">
                            <textarea name="message" class="input" placeholder="Message"></textarea>
                        </div>
                        <input type="submit" value="Send" class="btn" />
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php

    //connect to database
    require_once 'db_connect.php';

    $execute = $conn->query("SELECT * FROM Message ORDER BY created_at DESC");

    if ($execute->rowCount() > 0) {
        while ($row = $execute->fetch(PDO::FETCH_ASSOC)) {
        echo "<div>";
        echo "<h2>Username: " . $row['Username'] . "</h2>";
        echo "<p>Message: " . $row['Message'] . "</p>";
        echo "<form action='contactpage/editmessage.php' method='post'>";
        echo "<input type='hidden' name='messageId' value='" . $row['messageId'] . "'>";
        echo "<input type='hidden' name='username' value='" . $row['Username'] . "'>";
        echo "<input type='hidden' name='message' value='" . $row['Message'] . "'>";
        echo "<input type='submit' value='Edit'>";
        echo "</form>";
        echo "<form action='contactpage/deletemessage.php' method='post'>";
        echo "<input type='hidden' name='messageId' value='" . $row['messageId'] . "'>";
        echo "<input type='submit' value='Delete'>";
        echo "</form>";
        echo "</div>";
        echo "<hr>";
    } }
    else {
        echo "No posts found";
    }
    
    ?>

    <a>
        <image src="images/gotopIcon.png" alt="scroll top icon" id="pageslidetotop" />
    </a>

    <!--Footer-->
    <footer>

        <div class="footersocialmedialinks">
            <h3>Social Media Links</h3>
            <ul>
                <li> <a href="https://www.instagram.com/"><i class="fa-brands fa-square-instagram"></i> Instagram</a>
                </li>
                <li> <a href="https://web.whatsapp.com/"><i class="fa-brands fa-square-whatsapp"></i> Whatsapp</a>
                </li>
                <li> <a href="https://web.facebook.com/?_rdc=1&_rdr"><i class="fa-brands fa-facebook"></i> Facebook</a>
                </li>
                <li> <a href="https://twitter.com/"><i class="fa-brands fa-square-x-twitter"></i> Twitter</a>
                </li>
                <li> <a href="https://web.telegram.org/k/"><i class="fa-brands fa-telegram"></i> Telegram</a>
                </li>
                <li> <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"></i> TikTok</a> </li>
                </li>
            </ul>
        </div>

        <p>Privacy & Cookies</p>
        <p>&copy Social Media Campaign Ltd.</p>

    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>