<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include con PHP</title>
    <link rel="stylesheet" href="css/contact.css">
</head>

<body>
    <?php
        include "components/navtop.php";
        include "components/navmenu.php";

        include "components/submit_request.php";
    ?>
    <div class="container-tittle">
        <h1 class="tittle_1">Request Now</h1>
    </div>

    <div class="content-section">
        <h2>Beautifully designed, print-ready massage gift certificate</h2>
        <p>Leave your personal data, phone, select the desirable service and suitable time. Leave a request and check
            the email.</p>
    </div>

    <div class="form-section">
        <form id="requestForm" action="contact.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email: example@example.com" required>
                <input type="text" name="phone" placeholder="Enter your phone: 1234567890" required>
            </div>
            <div class="form-group">
                <select name="service" required>
                    <option value="" disabled selected>Select services:</option>
                    <option value="Relaxing Massage">Relaxing Massage</option>
                    <option value="Deep Tissue Massage">Deep Tissue Massage</option>
                    <option value="Hot Stone Massage">Hot Stone Massage</option>
                    <option value="Aromatherapy Massage">Aromatherapy Massage</option>
                </select>
                <select name="time" required>
                    <option value="" disabled selected>Select time:</option>
                    <option value="10:00 AM">10:00 AM</option>
                    <option value="12:00 PM">12:00 PM</option>
                    <option value="2:00 PM">2:00 PM</option>
                    <option value="4:00 PM">4:00 PM</option>
                    <option value="6:00 PM">6:00 PM</option>
                </select>
            </div>
            <button type="submit" class="form-button">Leave a Request</button>
            <p id="formMessage" class="form-message"></p>
        </form>
    </div>

    <?php
        include "components/footer.php";
    ?>
    <script src="js/contact.js"></script>
</body>

</html>