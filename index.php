<?php
// Load the XML file
$xml = simplexml_load_file('config.xml');

// Extract values from the XML
$primaryColor = (string)$xml->colors->primaryColor;
$secondaryColor = (string)$xml->colors->secondaryColor;
$accentColor = (string)$xml->colors->accentColor;
$darkAccentColor = (string)$xml->colors->darkAccentColor;
$highlightColor = (string)$xml->colors->highlightColor;

$primaryFont = (string)$xml->fonts->primaryFont;
$fontSize = (string)$xml->fonts->fontSize;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdventureLand Theme Park</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Hamburger Menu -->

    <div class="hamburger-menu">
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <nav class="menu">
            <ul>
                <li><a href="index.php">About</a></li>
                <li><a href="pages\login.php">Login</a></li>
                <li><a href="pages\register.php">Register</a></li>
                <li><a href="pages\ragga_muffin.php">Ragga Muffin</a></li>
                <li><a href="pages\kool_runnings.php">Kool Runnings</a></li>
                <li><a href="pages\krazy_karts.php">Krazy Karts</a></li>
                <li><a href="pages\ez_skankin.php">EZ Skankin</a></li>
                <li><a href="pages\arcade.php">Arcade</a></li>
                <li><a href="pages\restaurant_live_music.php">Restaurant and Live Music</a></li>
                <li><a href="pages\faq.php">FAQ</a></li>
                <li><a href="pages\contact_form.php">Contact us</a></li>
            </ul>
        </nav>
    </div>


    <!-- Tickets Button -->
    <a href="https://buy.stripe.com/test_eVa6pb1lE2551lm4gg" class="tickets-button">Tickets</a>

    <div id="bannerimage">
        <img src="images\banner.png">

    </div>
    <!-- Main Content -->


    <div class="text-container mt-32">
        <header class="header-container">
            <img src="images\About_title.png" alt="image displaying word about" class="header-image">
        </header>
        <div class="visitor-info px-16 mb-32">
            <h2 class="text-4xl font-bold mb-4 mt-6">About AdventureLand</h2>
            <p class="text-2xl font-bold mb-32">Welcome to AdventureLand, the ultimate destination for fun and excitement! Our park offers a wide range of attractions and activities for visitors of all ages. From thrilling rides to live entertainment and delicious dining options, there's something for everyone at AdventureLand. Our friendly staff is dedicated to ensuring you have a memorable experience. We look forward to seeing you soon!</p>


            <h2 class="text-4xl font-bold mb-4 mt-6">Visitor Information</h2>
            <p class="text-2xl font-bold">Operating Hours: Tuesday &hyphen; Sunday 9am &hyphen; 9pm</p>
            <p class="text-2xl font-bold">Location: 123 AdventureLand Blvd, Fun City, FC 12345</p>
            <p class="text-2xl font-bold">Parking: Ample parking available with accessibility options for visitors with disabilities.</p>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer w-full">
        <div class="social-icons flex flex-col items-center justify-center">
            <div class="mb-4">
                <p>Vissit us today via Social Media:</p>
            </div>
            <div class="flex">


                <a href="https://facebook.com"><img src="images/social_fb.png" alt="Facebook"></a>
                <a href="https://instagram.com"><img src="images/social_ig.png" alt="Instagram"></a>
                <a href="https://twitter.com"><img src="images/social_twitter.png" alt="Twitter" width="32px" height="32px"></a>
                <a href="https://youtube.com"><img src="images/social_youtube.png" alt="YouTube"></a>
            </div>
        </div>
    </div>


    <script src="js/scripts.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/666f73bf9a809f19fb3e79cd/1i0hlo9au';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>