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
    <title>FAQ - AdventureLand</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>

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
    <div class="flex flex-col items-center mb-28">
        <a href="../index.php"><img src=".././images\FAQ_title.png" alt="Image display FAQ" class="header-image"></a>

        <a href="../index.php">
            <p class="text-2xl font-bold">Home</p>
        </a>
    </div>


    <!-- Main Content -->
    <div class="flex flex-col items-left px-16">


        <div>
            <class="faq-item1">
                <h3 class="text-2xl font-bold text-green-500">What are the park’s operating hours?</h3>
                <div class="answer1">
                    <p class="mb-6">Our park is open from 9:00 AM to 9:00 PM on weekdays and 9:00 AM to 10:00 PM on weekends.</p>
                </div>
        </div>
        <div class="faq-item2">
            <h3 class="text-2xl font-bold text-green-500">Do you offer any discounts for groups or families?</h3>
            <div class="answer2">
                <p class="mb-6">Yes, we offer special rates for groups of 15 or more and family passes for up to 4 family members.</p>
            </div>
        </div>
        <div class="faq-item3">
            <h3 class="text-2xl font-bold text-green-500">What should I bring to the park?</h3>
            <div class="answer3">
                <p class="mb-6">We recommend bringing sunscreen, hats, comfortable shoes, swimwear and a camera to capture all the fun moments!</p>
            </div>
        </div>
        <div class="faq-item4">
            <h3 class="text-2xl font-bold text-green-500">Are there any height or age restrictions for the rides?</h3>
            <div class="answer4">
                <p class="mb-6">Yes, some rides have height and age restrictions for safety reasons. Please check our website or inquire at the park entrance for specific details.</p>
            </div>
        </div>
        <div class="faq-item5">
            <h3 class="text-2xl font-bold text-green-500">Can I bring my own food and drinks?</h3>
            <div class="answer5">
                <p class="mb-6">Outside food and drinks are not permitted, but we have a variety of dining options available throughout the park.</p>
            </div>
        </div>
        <div class="faq-item6">
            <h3 class="text-2xl font-bold text-green-500">What measures are in place for guest safety?</h3>
            <div class="answer6">
                <p class="mb-6">Guest safety is our top priority. We have trained medical staff on-site, and all rides are inspected daily.</p>
            </div>
        </div>
        <div class="faq-item7">
            <h3 class="text-2xl font-bold text-green-500">Is there a lost and found?</h3>
            <div class="answer7">
                <p class="mb-6">Yes, lost items are kept at our Guest Services office. Please report any lost items as soon as possible.</p>
            </div>
        </div>
        <div class="faq-item8">
            <h3 class="text-2xl font-bold text-green-500">Are pets allowed in the park?</h3>
            <div class="answer8">
                <p class="mb-6">Only service animals are allowed in the park. Pets can be accommodated at our on-site kennel service.</p>
            </div>
        </div>
        <div class="faq-item9">
            <h3>What happens if it rains?</h3>
            <div class="answer9">
                <p class="mb-6">Most attractions remain open in the rain. In case of severe weather, some outdoor attractions may temporarily close.</p>
            </div>
        </div>
        <div class="faq-item10">
            <h3 class="text-2xl font-bold text-green-500">How can I buy tickets?</h3>
            <div class="answer10">
                <p class="mb-6">Tickets can be purchased online through our website or at the park’s ticket booths upon arrival.</p>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div>
        <div class="">
            <img src=".././images\AdventureLand_map.png" alt="Map of AdventureLand Parks">
        </div>

        <!-- Footer -->
        <div class="footer bg-green-300 py-8 mt-28 w-full">
            <div class="social-icons flex flex-col items-center justify-center">
                <div class="mb-4">
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