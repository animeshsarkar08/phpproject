<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href = "contactus-styles.css">
</head>
<body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <div class="quote-container">
        "We're here to listen, innovate, and collaborate for a brighter, sustainable future." - BCCL Team
    </div>
    <div class="background-heading">Get in touch with BCCL</div>
    <div class="container">
        <div class="contact-form-container">
            <h2>Contact Us</h2>
            <form action="/submit_contact" method="post">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                <label for="message">Write a Message</label>
                <textarea id="message" name="message" required></textarea>
                <input type="submit" value="Send">
            </form>
        </div>
        <div class="right-column">
            <div class="info-container">
                <h3>Contact Info</h3>
                <div class="contact-info">
                    <div class="icon"><ion-icon name="location-outline"></ion-icon></div>
                    <div class="text">
                        Bharat Coking Coal Limited<br>
                        Koyla Bhawan, Koyla Nagar,<br>
                        Dhanbad-826005<br>
                        CIN-U10101JH1972GOI000918
                    </div>
                </div>
                <div class="contact-info">
                    <div class="icon"><ion-icon name="mail-outline"></ion-icon></div>
                    <div class="text">www.bcclweb.in</div>
                </div>
                <div class="contact-info">
                    <div class="icon"><ion-icon name="call-outline"></ion-icon></div>
                    <div class="text">
                        STD Code: 0326<br>
                        EPABX Nos.:2230028, 2230133-149
                    </div>
                </div>
            </div>
            <div class="info-container third-container">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3761739717615!2d86.46097737497767!3d23.80521887863299!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f6bc63448d53d1%3A0x9686b267150f15a6!2sKoyla%20Bhawan!5e0!3m2!1sen!2sin!4v1719566044595!5m2!1sen!2sin" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</body>
</html>
