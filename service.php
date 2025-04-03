<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include con PHP</title>
    <link rel="stylesheet" href="css/service.css">
</head>

<body>
    <?php
        include "components/navtop.php";
        include "components/navmenu.php";
    ?>
    <div class="container-tittle">
        <h1 class="tittle_1">We bring the best massages to You</h1>
    </div>

    <div class="content-section">
        <h2>Easy online bookings and redemption</h2>
        <p>If you don’t have any time to book the service on the phone, then use our marvelous online booking.
            All you need is just pick the available and appropriate service, the free time and a therapist. Then fill
            the contact form and that’s all.</p>
        <p>The redemption is pretty simple, you can call off the service or adjourn it in a 1 day before the
            procedure. Use it for your comfort.</p>

        <h2>Beautifully designed, print-ready massage gift certificate</h2>
        <p>Are you bored of the usual gifts and something brand-new? Check-out our stunning gift certificates
            that are designed in a few variations and can fit any needs. The certificates are oriented on the
            various prices and services. Enjoy the opportunities.</p>
    </div>

    <div class="cta-section">
        <h2>Are You a Qualified Massage Therapist?</h2>
        <p>Become a high-quality therapist with SpaNiol</p>
        <button class="cta-button">Book Now</button>
    </div>

    <?php
        include "components/footer.php";
    ?>
</body>

</html>