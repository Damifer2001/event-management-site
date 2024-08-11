<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Creative Management</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet"/>
</head>

<body>
    <section class="header">
        <img src="../images/events-cover.jpg" alt="Events Cover" class="cover-img">
        <nav>
          <a href="../index.php"><img src="../images/logo.png" width="100px" height="100px"/></a>
          <div class="nav-links">
            <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="/event-management-site/pages/aboutus.php">About Us</a></li>
              <li><a href="/event-management-site/pages/service.php">Services</a></li>
              <li><a href="">Events</a></li>
              <li><a href="/event-management-site/pages/contactus.php">Contact Us</a></li>
            </ul>
          </div>
        </nav>
  
        <div class="text-box">
          <h1 style="color: rgb(202, 194, 194);">Our Events</h1>
          <p>Highlighting Our Major Events</p>
          <a href="https://www.facebook.com" target="_blank" class="hero-btn">Visit Us To Know More</a>
        </div>
    </section>
    
    <div class="container">
        <div class="events-section">
            <h3 style="text-align: center;">Featured Events</h3>
            <div class="row">
                <div class="event-col">
                    <img src="../images/event1.jpg" alt="Event 1">
                    <h3>Annual Gala</h3>
                    <p>Join us for our Annual Gala, an evening of elegance and celebration.</p>
                </div>
                <div class="event-col">
                    <img src="../images/event2.jpg" alt="Event 2">
                    <h3>Charity Ball</h3>
                    <p>Our Charity Ball is a night dedicated to giving back and making a difference.</p>
                </div>
                <div class="event-col">
                    <img src="../images/event3.jpg" alt="Event 3">
                    <h3>Music Festival</h3>
                    <p>Experience the joy of music with our yearly Music Festival featuring top artists.</p>
                </div>
            </div>
            <div class="row">
                <div class="event-col">
                    <img src="../images/event4.jpg" alt="Event 4">
                    <h3>Food Expo</h3>
                    <p>Indulge in culinary delights at our annual Food Expo showcasing local and international cuisines.</p>
                </div>
                <div class="event-col">
                    <img src="../images/event5.jpg" alt="Event 5">
                    <h3>Art Exhibition</h3>
                    <p>Discover stunning artworks at our Art Exhibition featuring talented artists.</p>
                </div>
                <div class="event-col">
                    <img src="../images/event6.jpg" alt="Event 6">
                    <h3>Technology Conference</h3>
                    <p>Stay ahead in the tech world with insights from experts at our Technology Conference.</p>
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
