<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Creative Management</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet"/>
</head>

<body>
    <section class="header">
        <img src="../images/services-cover.jpg" alt="Services Cover" class="cover-img">
        <nav>
          <a href="../index.php"><img src="../images/logo.png" width="100px" height="100px"/></a>
          <div class="nav-links">
            <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="/event-management-site/pages/aboutus.php">About Us</a></li>
              <li><a href="">Services</a></li>
              <li><a href="/event-management-site/pages/events.php">Events</a></li>
              <li><a href="/event-management-site/pages/contactus.php">Contact Us</a></li>
            </ul>
          </div>
        </nav>
  
        <div class="text-box">
          <h1 style="color: rgb(202, 194, 194);">Our Services</h1>
          <p>What We Offer</p>
          <a href="https://www.facebook.com" target="_blank" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>
    
    <div class="container">
        <div class="services-section">
            <h3 style="text-align: center;">Our Services</h3>
            <div class="row">
                <div class="service-col">
                    <h3>Wedding Planning</h3>
                    <p>We offer comprehensive wedding planning services, ensuring your special day is flawless.</p>
                </div>
                <div class="service-col">
                    <h3>Corporate Events</h3>
                    <p>Our team excels in organizing professional corporate events, from meetings to large conferences.</p>
                </div>
                <div class="service-col">
                    <h3>Birthday Parties</h3>
                    <p>Celebrate your birthday with us and enjoy a memorable party tailored to your preferences.</p>
                </div>
            </div>
            <div class="row">
                <div class="service-col">
                    <h3>Private Parties</h3>
                    <p>Our private party services guarantee an exclusive and intimate experience for you and your guests.</p>
                </div>
                <div class="service-col">
                    <h3>Catering Services</h3>
                    <p>We provide top-notch catering services to make your event deliciously unforgettable.</p>
                </div>
                <div class="service-col">
                    <h3>Decoration Services</h3>
                    <p>Our decoration services will transform your event space into a beautiful and themed venue.</p>
                </div>
            </div>
        </div>
    </div>

    <button class="go-top-button" onclick="goToTop()">
        <img src="../images/arrow.png" alt="Go to top">
    </button>

    <div class="footer">
        <p>&copy; 2024 Creative Management. All rights reserved.</p>
    </div>

    <script>
        window.onscroll = function() {
            var button = document.querySelector(".go-top-button");
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                button.style.display = "block";
            } else {
                button.style.display = "none";
            }
        };

        function goToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>
