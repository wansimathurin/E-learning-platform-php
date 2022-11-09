<?php
session_start();
require('db_connection.php');
if (isset($_POST['email']) && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $email_from = 'wansimath123@gmail.com';
        $email_subject = 'Forgot Password';
        $email_body = "Your code is 1234567451 \n";
        $to = "wansimath123@gmail.com";
        $headers = "From:$email \r\n";
        $headers = "Reply-To:$email \r\n";
        mail($to, $email_subject, $email_body, $headers);
        header('location:index.php');
        exit();
    } else {
        header('location:forget-password.php?error=no user found');
    }
}
