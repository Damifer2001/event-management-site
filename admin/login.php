<?php

require '../pages/connect.php';

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password' AND userRole = 'admin'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION["loggedin"] = TRUE;
        header("Location: ./event.php?status=login_success");
    } else {
        header("Location: ./login.php?status=login_failed");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="../css/styles_login.css">
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon">
</head>
<body>
    <div class="container" id="signIn">
        <h1 class="form-title">Admin Login</h1>
        <form method="post" action="login.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required name="password">
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>
