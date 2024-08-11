<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Creative Management</title>
    <link rel="stylesheet" href="../css/index.css" />
    <link rel="stylesheet" href="../css/contact.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet"/>
    <style>
        .header{
            min-height: 70vh;
            width: 100%; 
            background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(../images/contact_us\ header.jpg);
            background-position: center;
            background-size:cover ;
            position: relative;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
    <section class="header">
        <nav>
          <a href="../index.php"
            ><img src="../images/logo.png" width="100px" height="100px"
          /></a>
          <div class="nav-links">
          <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="/event-management-site/pages/aboutus.php">About Us</a></li>
              <li><a href="/event-management-site/pages/service.php">Services</a></li>
              <li><a href="/event-management-site/pages/events.php">Events</a></li>
              <li><a href="">Contact Us</a></li>
            </ul>
          </div>
        </nav>
  
        <div class="text-box">
          <h1 style="color: rgb(221, 218, 218);">Contact US</h1>
          <p>
            Get in touch with Us
          </p>
          <a href="https://www.facebook.com" target="_blank" class="hero-btn">Visit Us To know More</a>
        </div>
      </section>
      <div class="message-container">
          <div class="center-content">
          <?php
              // Include the database connection file
              require_once("connect.php");

              if (isset($_POST['submit'])) {
            
                // Escape special characters in string for use in SQL statement	
                $fname = mysqli_real_escape_string($conn, $_POST['fname']);
                $lname = mysqli_real_escape_string($conn, $_POST['lname']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $subject = mysqli_real_escape_string($conn, $_POST['subject']);
                $message = mysqli_real_escape_string($conn, $_POST['message']);

                 //validation 
                if (empty($fname) || empty($lname) || empty($email) || empty($subject) || empty($message)) {
                  echo "<div class='errormessage'>Fill all fields</div>";
                } else { 
                  $result = mysqli_query($conn, "INSERT INTO contact (`fname`, `lname`, `email`, `subject`, `message`) VALUES ('$fname', '$lname', '$email', '$subject', '$message')");
                  
                  echo "<div class='successmessage'>Data inserted successfully</div>";
                }
              }
          ?>
          <h2 class="topic">Feel Free to Ask Anything</h2>
          <h5 class="topic mot">We love to here you and you are our motivation.</h5>
          <form class="form" method="post" name="add">
              <div class="input-group">
                <label for="email">First Name</label>
                <input type="text" name="fname" id="email" placeholder="first name">
            </div>
            <div class="input-group">
                <label for="email">Last Name</label>
                <input type="text" name="lname" id="email" placeholder="last name">
            </div>
              <div class="input-group">
                  <label for="email">Your Email</label>
                  <input type="email" name="email" id="email" placeholder="email">
              </div>
              <div class="input-group">
                  <label for="email">Subject</label>
                  <input type="text" name="subject" id="email" placeholder="subject" >
              </div>
              <div class="input-group">
                  <label for="email">Subject</label>
                  <textarea type="text" name="message" id="email"></textarea>
              </div>
              <button type="submit" name="submit" class="submit-button">Submit</button>
          </form>
        </div>
    </div>

</body>
</html>