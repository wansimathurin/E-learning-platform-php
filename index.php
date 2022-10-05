<?php
session_start();
if(isset($_SESSION['name'])){
   header('location: home.php');
}
?>

<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" href="images/e-book.png" type="image/x-icon">
   <title>E-learning</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
   <link rel="stylesheet" href="auth.css">
</head>

<body>
   <main>
      <div class="container">
         <div class="row center-el">
            <div class="main-card center-el">
               <?php 
                  if(isset($_GET['error'])) {
                     $error = $_GET['error'];
                     echo '<div class="alert alert-danger" role="alert">
                     '.$error.'
                  </div>';
                  }elseif(isset($_GET['success'])){
                     $success = $_GET['success'];
                     echo '<div class="alert alert-success" role="alert">
                     '.$success.'
                  </div>';
                  }
               ?>
               <div class="row">
                  <div class="col-lg-6">
                     <form class="form-group center-el h-100" method="POST" action="login.php">
                        <h3><img src="images/e-book.png" alt="logo" width="40px"></h3>
                        <p>Welcome to e-code-taught</p>
                        <div class="div my-3">
                           <label for="email" class="text-capitalize">email</label>
                           <input type="email" id="email" name="email" class="form-control px-3 py-2 my-2" placeholder="enter your email" required>
                           <label for="password" class="text-capitalize">password</label>
                           <input type="password" id="password" name="password" class="form-control px-3 py-2 my-2" placeholder="enter your password" required>
                           <span><a href="#" class="text-italic color">forgot password?</a></span><br>
                           <input type="submit" class="form-btn btn btn-lg border px-3 py-2 my-4" value="SignIn" name="submit">
                           <span>Don't have an account ?<a href="signUp.php" class="text-italic color"> SignUp</a></span><br>
                        </div>
                     </form>

                  </div>
                  <div class="col-lg-6">
                     <img src="images/auth.jpg" alt="" class="card-img" width="100%">
                  </div>
               </div>
            </div>
         </div>
      </div>

   </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>