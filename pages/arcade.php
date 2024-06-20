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

$buttonDefaultColor = (string)$xml->buttonStyles->defaultColor;
$buttonHoverColor = (string)$xml->buttonStyles->hoverColor;
$buttonActiveColor = (string)$xml->buttonStyles->activeColor;
$buttonTextColor = (string)$xml->buttonStyles->textColor;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arcade</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            font-family: <?php echo $primaryFont; ?>;
            font-size: <?php echo $fontSize; ?>;
            background-color: <?php echo $secondaryColor; ?>;
        }
        .visitor-info h2 {
            color: <?php echo $primaryColor; ?>;
        }
        .visitor-info p {
            color: <?php echo $accentColor; ?>;
        }
    </style>
</head>
<body>
    <!-- Header Image -->
    <img src="\adventureland\images\Arcade_title.png" alt="Image displaying text Arcade" class="header-image">

    <!-- Hamburger Menu -->
    <div class="hamburger-menu">
        <input type="checkbox" id="menu-toggle">
        <label for="menu-toggle" class="menu-icon">&#9776;</label>
        <nav class="menu">
            <ul>
                <li><a href="index.php">About</a></li>
                <li><a href="\adventureland\pages\login.php">Login</a></li>
                <li><a href="\adventureland\pages\register.php">Register</a></li>
                <li><a href="\adventureland\pages\ragga_muffin.php">Ragga Muffin</a></li>
                <li><a href="\adventureland\pages\kool_runnings.php">Kool Runnings</a></li>
                <li><a href="\adventureland\pages\krazy_karts.php">Krazy Karts</a></li>
                <li><a href="\adventureland\pages\ez_skankin.php">EZ Skankin</a></li>
                <li><a href="\adventureland\pages\arcade.php">Arcade</a></li>
                <li><a href="\adventureland\pages\restaurant_live_music.php">Restaurant and Live Music</a></li>
                <li><a href="\adventureland\pages\faq.php">FAQ</a></li>
                <li><a href="\adventureland\pages\contact_form.php">Contact us</a></li>
            </ul>
        </nav>
    </div>

    <!-- Tickets Button -->
    <a href="tickets.php" class="tickets-button">Tickets</a>

    <!-- Main Content -->
    <div class="container">
        <div class="text-container">
            <p>This is the text that will be displayed to the left of the image. The text container is positioned 30 pixels higher than the image container.</p>
        </div>
        <div class="image-container">
            <img src="\adventureland\images\arcade1.jpeg" alt="Children playing arcade games">
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <div class="social-icons">
            <a href="https://facebook.com"><img src="images/social_fb.png" alt="Facebook"></a>
            <a href="https://instagram.com"><img src="images/social_ig.png" alt="Instagram"></a>
            <a href="https://twitter.com"><img src="images/social_twitter.png" alt="Twitter"></a>
            <a href="https://youtube.com"><img src="images/social_youtube.png" alt="YouTube"></a>
        </div>
    </div>

    <script src="js/scripts.js"></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/666f73bf9a809f19fb3e79cd/1i0hlo9au';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
