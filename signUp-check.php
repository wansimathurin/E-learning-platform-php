<?php
session_start();
require('db_connection.php');
if( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit'])) {
    $names = $_POST['name'];
    $image = $_FILES['file']['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    
      //image treating
     $img_extension = pathinfo($image,PATHINFO_EXTENSION); # .jpg , png
     $img_extension_lowercase = strtolower($img_extension); # JPG = jpg
     $file = uniqid('Profile',true).'.'.$img_extension_lowercase; 
      
    //   check if user already exits
    $sql = "SELECT * FROM users WHERE names = '$names' AND email = '$email'";
    $result = mysqli_query($connect,$sql);
    if (mysqli_fetch_assoc($result) > 0 ) {
        header("location:signUp.php?error=user already exist");
    }else{
       $sql2 = "INSERT INTO users(names,user_image,email,password) VALUES ('$names','$file','$email','$password')";
       $result2 = mysqli_query($connect,$sql2);
       if ($result2) {
        // moving the user selected image to the image folder
          $fileDestination = 'users/'.$file;
          move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);
        //   redirecting the user to the login page after success
            $_SESSION['name'] = $names;
            $_SESSION['file'] = $file;
            $_SESSION['email'] = $email;
          header("location:home.php?success=Account created successfully");
          exit();
       }else{
         echo 'something went wrong';
       }
    }
}else{
    echo  "failed to get all the form elements";
}