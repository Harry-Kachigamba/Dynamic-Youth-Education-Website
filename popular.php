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
                <li>
                    <input type="search" placeholder="Search" class="search-input">
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <!--Hero Section-->
        <section class="popular-header">
            <img src="images/headerimage.png" alt="headerImage" height="300" width="300" class="informationheaderimage" />

            <div class="popular-header-text">
                <h3>Social Media Campaign Ltd.</h3>
                <p>We are here to help and support teenagers to encourage them to stay online.</p>
            </div>
        </section>


        <!-- Details -->
        <section class="popular-header-text">
            <h3>Latest Techniques!</h3>
            <p>Search for latest techniques of how to stay safe online.</p>
        </section>

        <form action="request/searching.php" method="get" id="searchform" name="Form">
            <div class="search">
                <span><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="search" name="search-input" id="query" placeholder="Search...">
            </div>
            <input type="submit" value="Search" id="popularSearch">
        </form>

        <section id="searcheddata"></section>

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
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>