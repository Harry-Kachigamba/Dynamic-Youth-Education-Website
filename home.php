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
    <!--Navigation Icon-->
    <div class="hamburger-nav">
        <i class="fas fa-bars fa-2x"></i>
    </div>

    <!--Navigation Bar-->
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

    <!--Main Page Content-->
    <main class="home-main">

        <!--Hero Section-->
        <section class="home-main-hero">
            <img src="images/newsletter.png" alt="newsletter" height="300" width="300" class="home-main-hero-image" />

            <div class="home-main-text">
                <h3>Sign Up</h3>
                <p>Register your account for <span>free </span>monthly<br> newsletter.</p>
            </div>
        </section>

        <section class="home-introduction-text">
            <h3>Social Media Campaign Ltd.</h3>
            <p class="homeText">A newly established campaign aiming to provide help to teenagers to encourage them to stay safe online.</p>
        </section>

        <h4 class="mostpopular-title">Most popular social media platforms</h4>

        <!--Social Media Cards-->
        <section class="socialmedia-home-cards">
            <div class="media-card">
                <image src="images/instagramlogo.png" alt="instagram" width=200 class="medialogo" />
                <h3>Instagram</h3>
                <p>Instagram is one of the popular Social Media apps used for sharing photos, videos and post status updates.</p>
                <a href="https://www.instagram.com/" class="link-button">Instagram <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="media-card">
                <image src="images/whatsapplogo.png" alt="whatsapp" width=200 class="medialogo" />
                <h3>Whatsapp</h3>
                <p>Whatsapp, a very widely used Social Media app used for messaging in many forms; text messaging, voice messaging, sharing images, videos, documents, and on top of that video calling.</p>
                <a href="https://web.whatsapp.com/" class="link-button">Whatsapp <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="media-card">
                <image src="images/facebooklogo.png" alt="facebook" width=200 class="medialogo" />
                <h3>Facebook</h3>
                <p>Facebook a very popular Social Media app back in the day, used for text messaging, sharing videos and photos and also posying status updates.</p>
                <a href="https://web.facebook.com/?_rdc=1&_rdr" class="link-button">Facebook <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="media-card">
                <image src="images/twitterlogo.png" alt="twitter" width=200 class="medialogo" />
                <h3>Twitter</h3>
                <p>Twitter (X) is another widely used Social Media application, used for various purposes; sharing news, current affairs, advertising businesses and also posting portofolios.</p>
                <a href="https://twitter.com/" class="link-button">Twitter <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="media-card">
                <image src="images/telegramlogo.png" alt="telegram" width=200 class="medialogo" />
                <h3>Telegram</h3>
                <p>Telegram is a cloud based messaging application used for messaging, sharing photos and videos, group chatting, accessing channels being broadcasted.</p>
                <a href="https://web.telegram.org/k/" class="link-button">Telegram <i class="fas fa-chevron-right"></i></a>
            </div>

            <div class="media-card">
                <image src="images/tiktoklogo.png" alt="tiktok" width=200 class="medialogo" />
                <h3>TikTok</h3>
                <p>Tiktok is the most popular and over used social media platform of them all, this is a social media platfrom for sharing short-form videos, livestreaming and also has text messaging capabilities.</p>
                <a href="https://www.tiktok.com/" class="link-button">TikTok <i class="fas fa-chevron-right"></i></a>
            </div>
        </section>

        <!---Online Safety Banner-->
        <section class="home-info-banner">
            <img src="images/infobannermessage.png" alt="newsletter" width="300" class="safetyImageOnline" />

            <div class="home-info-banner-text">
                <h3>Online Safety</h3>
                <p>Online safety is a very important topic to talk about, with the ongoing cyber bullying and harrassment cases.
                    It is very important to keep ourselves safe when browsing online or any other activity more especially you the Teenagers!</p>
            </div>
        </section>

        <!--How to stay safe online-->
        <section class="home-info-how">
            <h3>How to stay safe online</h3>

            <div class="home-info-cards">

                <div class="info-one">
                    <image src="images/secureinfo.png" alt="secure" width=200 class="secureinfoImage" />
                    <p>Be midnful with personal details and information, avoid sharing sensitive infomation like name, phone number or financial infomation to unknown people.</p>
                </div>

                <div class="info-one">
                    <image src="images/sharing.png" alt="sharing" width=200 class="secureinfoImage" />
                    <p>Be cautious with what you share online, videos and pictures shared online can never be removed permanently, this might be seen by unintened people.</p>
                </div>

                <div class="info-one">
                    <image src="images/criticalthink.png" alt="critical" width=200 class="secureinfoImage" />
                    <p>Have a critical approach to what information is being shared online, as this might be misleading false infomation.</p>
                </div>

                <div class="info-one">
                    <image src="images/witness.png" alt="witness" width=200 class="secureinfoImage" />
                    <p>Acknowledge cyberbullying, if you are a victim or witness any case of cyberbullying take action by reporting the bullies to end such cases.</p>
                </div>

            </div>
        </section>

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