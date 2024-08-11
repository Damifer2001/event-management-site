<?php
    // Initialize the session
    session_start();
    $divarea = false;

    // If user is not logged in then redirect him to login page
    if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
        $divarea = true;
    } else {
        $divarea = false;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Creative Management- Your Premier Event Partner</title>
    <link rel="stylesheet" href="css/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <style>
        .header {
            min-height: 100vh;
            width: 100%;
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(images/banner.jpg);
            background-position: center;
            background-size: cover;
            position: relative;
        }

        /* Popup Style */
        .popup {
            display: none;
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background: #55b38f;
            border: 1px solid #d1b5b5;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            z-index: 1000;
        }
        .popup.active {
            display: block;
        }
        .popup p {
            margin: 0;
        }
        .popup .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <!-- Popup for messages -->
    <div id="popup" class="popup">
        <span class="close" onclick="closePopup()">&times;</span>
        <p id="popupMessage"></p>
    </div>

    <section class="header">
        <nav>
            <a href="index.php"><img src="images/logo.png" width="100px" height="100px" /></a>
            <div class="nav-links">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="./pages/aboutus.php">About Us</a></li>
                    <li><a href="./pages/service.php">Services</a></li>
                    <li><a href="./pages/events.php">Events</a></li>
                    <li><a href="./pages/contactus.php">Contact Us</a></li>
                    <li><a href="./pages/logout.php">Log Out</a></li>
                </ul>
            </div>
        </nav>

        <div class="text-box">
            <h1>Welcome to Your Premier Event Management Partner</h1>
            <p>
                Experience exceptional event planning in Sri Lanka. From weddings to
                corporate gatherings, we bring your vision to life with creativity and
                precision. <br />
                Let us make your special occasion unforgettable.
            </p>
            <a href="" class="hero-btn">Visit Us To know More</a>
        </div>
    </section>

    <!-- events -->
    <section class="events">
        <h1>Our Event Services</h1>
        <p>
            We specialize in creating unforgettable weddings, corporate events, and
            private parties. Let us bring your vision to life with our expertise and
            creativity.
        </p>
        <div class="row">
            <div class="event-col">
                <h3>weddings</h3>
                <p>
                    Turn your dream wedding into a reality with our meticulous planning and creative touch. From intimate ceremonies to grand celebrations, we ensure every detail is perfect for your special day.
                </p>
            </div>
            <div class="event-col">
                <h3>Corporate Events</h3>
                <p>
                    Elevate your business gatherings with our expertly planned corporate events. From conferences to product launches, we deliver professional and seamless experiences that leave a lasting impression on your clients and team.
                </p>
            </div>
            <div class="event-col">
                <h3>Birthday Parties</h3>
                <p>
                    Celebrate your special day with a memorable birthday party planned to perfection. From themed decor to engaging activities, we ensure a fun and unforgettable experience for you and your guests.
                </p>
            </div>
        </div>
    </section>

    <!-- Featured Events -->
    <section class="Featured_Events">
        <h1>Featured Events</h1>
        <p>
            Take a glimpse at some of our standout events, showcasing our creativity
            and attention to detail. From elegant weddings to impactful corporate
            gatherings, our featured events highlight the exceptional experiences we
            create for our clients.
        </p>
        <div class="row">
            <div class="Featured_Events-col">
                <img src="images/birthday.jpg" />
                <div class="layer">
                    <h3>BIRTHDAYS</h3>
                </div>
            </div>
            <div class="Featured_Events-col">
                <img src="images/dj.jpg" />
                <div class="layer">
                    <h3>MUSICAL EVENTS</h3>
                </div>
            </div>
            <div class="Featured_Events-col">
                <img src="images/table.jpg" />
                <div class="layer">
                    <h3>WEDDINGS</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- testimonials -->
    <section class="testimonials">
        <h1>What Our Clients Say</h1>
        <p>
            Hear from our delighted clients about their experiences with our event management services. Their testimonials highlight our commitment to excellence, attention to detail, and ability to create unforgettable events.
        </p>
        <div class="row">
            <div class="testimonials-col">
                <img src="images/customer1.jpg" />
                <div>
                    <p>
                        "Working with this team was an absolute dream! They made my wedding day perfect in every way. The attention to detail and personal touch were incredible. I couldn't have asked for a better experience!"
                        <h3>Emma Watson</h3>
                    </p>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="images/customer2.jpg" />
                <div>
                    <p>
                        "Our corporate event was a huge success thanks to their exceptional planning and execution. The professionalism and creativity of the team exceeded our expectations. Highly recommend their services!"
                        <h3>Joan Snow</h3>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- call to action -->
    <?php
        if ($divarea) {
            echo '<section class="cta">
                    <h1>Sign Up Now</h1>
                    <a href="pages/login.php" class="hero-btn">Login Now</a>
                  </section>';
        } else {
            echo '<section class="cta">
                    <h1>Sign Up Now</h1>
                    <a href="/" class="hero-btn">Enjoy with us</a>
                  </section>';
        }
    ?>

    <!-- Footer -->
    <button class="go-top-button" onclick="goToTop()" style="display:flex; justify-content:end; margin-right:10px;">
        <img src="images/arrow.png" alt="Go to top" style="height:40px; width:40px;">
    </button>
    <div class="footer">
        <p>&copy; 2024 Creative Management. All rights reserved.</p>
    </div>

    <script>
        // Popup Handling
        function closePopup() {
            document.getElementById('popup').classList.remove('active');
        }

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

        // Display popup based on URL parameters
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const status = urlParams.get('status');
            const popup = document.getElementById('popup');
            const popupMessage = document.getElementById('popupMessage');

            if (status) {
                switch (status) {
                    case 'registration_success':
                        popupMessage.textContent = 'Registration successful! You can now log in.';
                        popup.classList.add('active');
                        break;
                    case 'login_success':
                        popupMessage.textContent = 'Login successful!';
                        popup.classList.add('active');
                        break;
                    case 'login_failed':
                        popupMessage.textContent = 'Incorrect email or password. Please try again.';
                        popup.classList.add('active');
                        break;
                    case 'email_exists':
                        popupMessage.textContent = 'Email address already exists.';
                        popup.classList.add('active');
                        break;
                    case 'error':
                        popupMessage.textContent = 'An error occurred. Please try again.';
                        popup.classList.add('active');
                        break;
                }
            }
        });
    </script>
</body>
</html>
