<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include con PHP</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
        include "components/navtop.php";
        include "components/navmenu.php";
    ?>
    <div class="hero">
        <div class="hero-content">
            <h1>Relaxation</h1>
            <p>come to us right now</p>
            <a href="#" class="btn">Book Now</a>
        </div>
    </div>
    <div class="services">
        <div class="services-header">
            <h2>Plunge into the world of relaxation with us</h2>
            <p>We invite you to visit the spa paradise and feel the power of relaxation. The unique experts will do
                their best for you.</p>
        </div>
        <div class="services-content">
            <div class="service-item">
                <img src="img/foto1.jpg" alt="High-quality services">
                <h3>High-quality services</h3>
                <p>The best receptionists will put you through the world of politeness, professionalism, deep calmness,
                    and high-quality services.</p>
            </div>
            <div class="service-item">
                <img src="img/foto2.jpg" alt="Paradise atmosphere">
                <h3>Paradise atmosphere</h3>
                <p>Feel the wonderful atmosphere of beauty, pleasant colors, tasty aromas, and feel free to have a
                    relax.</p>
            </div>
            <div class="service-item">
                <img src="img/foto3.jpg" alt="Massage to any taste">
                <h3>Massage to any taste</h3>
                <p>Get the qualified treatment in a most preferable way. Trust our experts and experience the best
                    massage.</p>
            </div>
        </div>
    </div>
    <?php
        include "components/footer.php";
    ?>
</body>

</html>