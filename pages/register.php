<?php

include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $userRole = "user";
    

    $checkEmail = "SELECT * FROM login WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        header("Location: ../index.php?status=email_exists");
    } else {
        $insertQuery = "INSERT INTO login(firstName, lastName, contact, email, password, userRole) VALUES ('$firstName', '$lastName', '$contact', '$email', '$password', '$userRole')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: ../index.php?status=registration_success");
        } else {
            header("Location: ../index.php?status=error");
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
   

    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION["loggedin"] = TRUE;
        header("Location: ../index.php?status=login_success");
    } else {
        header("Location: ../index.php?status=login_failed");
    }
}
?>
