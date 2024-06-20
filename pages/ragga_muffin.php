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
    <title>Ragga Muffin'</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: <?php echo $fontFamily; ?>;
            background-color: <?php echo $backgroundColor; ?>;
            color: <?php echo $textColor; ?>;
        }


        .menu a {
            color: <?php echo $textColor; ?>;
        }

        .ticket-button {
            background-color: <?php echo $primaryColor; ?>;
            color: white;
        }

        .ticket-button:hover {
            background-color: <?php echo $hoverColor; ?>;
        }

        .ticket-button:active {
            background-color: <?php echo $activeColor; ?>;
        }

        .button {
            background-color: <?php echo $primaryColor; ?>;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }

        .button:hover {
            background-color: <?php echo $hoverColor; ?>;
        }

        .button:active {
            background-color: <?php echo $activeColor; ?>;
        }
    </style>
</head>

<body>
    <div class="image-container flex items-center justify-center mb-16">
        <img src=".././images\ragga_muffin3.jpg" alt="Image of children excited on a roller coaster">
    </div>

    <div class="flex justify-center mb-32 gap-x-6">

        <a href=".././index.php" class=" py-4 px-24 bg-blue-600 font-bold text-white rounded rounded-full hover:scale-105 duration-200 ">Home</a>
        <a href="https://buy.stripe.com/test_eVa6pb1lE2551lm4gg" class=" py-4 px-24 bg-green-600 font-bold text-white rounded rounded-full hover:scale-105 duration-200 ">Tickets</a>
    </div>
    <div class="flex items-center justify-center">
        <header class="header-container">
            <img src=".././images\ragga_muffin_title.png" alt="Image displaying Attraction name Ragga muffin'" class="header-image">
        </header>
    </div>

    <!-- Main Content -->

    <div class="container flex flex-col items-center justify-center mt-16 mb-16">
        <div class="text-container">

            <h2 class="text-2xl font-bold text-green-600 mb-8"> Come experience your full range of emotions as you go up down, all the way around and back.</h2>

        </div>

        <div class="image-container flex w-64 h-64">
            <img src=".././images\ragga_muffin2.jpg" alt="Image of children excited on a roller coaster">
        </div>
    </div>

    <!-- Footer -->
    <div class="footer w-full">
        <div class="social-icons flex flex-col items-center justify-center">
            <div class="mb-4 mt-32">
                <p>Vissit us today via Social Media:</p>
            </div>
            <div class="flex">


                <a href="https://facebook.com"><img src=".././images/social_fb.png" alt="Facebook"></a>
                <a href="https://instagram.com"><img src=".././images/social_ig.png" alt="Instagram"></a>
                <a href="https://twitter.com"><img src=".././images/social_twitter.png" alt="Twitter" width="32px" height="32px"></a>
                <a href="https://youtube.com"><img src=".././images/social_youtube.png" alt="YouTube"></a>
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