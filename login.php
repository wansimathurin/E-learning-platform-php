<?php
 session_start();
 require('db_connection.php');
 if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect,$sql);
   if (mysqli_num_rows($result) == 1 ) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['name'] = $row['names'];
    $_SESSION['file'] = $row['user_image'];
    $_SESSION['email'] = $row['email'];
    header('location:home.php');
    exit();
   }else{
    header('location:index.php?error=no user found');
   }
 }