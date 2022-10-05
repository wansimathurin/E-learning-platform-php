<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-learning</title>
    <link rel="shortcut icon" href="images/e-book.png" type="image/x-icon">
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
                       <form method="POST" action="signUp-check.php" class="form-group center-el h-100" enctype="multipart/form-data">
                           <h3><img src="images/e-book.png" alt="logo" width="40px"></h3>
                           <p>SignUp to  e-code-taught</p>
                           <div class="div my-3">
                               <label for="email" class="text-capitalize">names</label>
                               <input type="text" id="name" name="name" class="form-control px-3 py-2 my-2" placeholder="enter your name" required>
                               <label for="file" class="text-capitalize">image</label>
                               <input type="file" id="file" name="file" class="form-control px-3 py-2 my-2" placeholder="choose an image" required accept="image/*">
                               <label for="email" class="text-capitalize">email</label>
                               <input type="email" id="email" name="email" class="form-control px-3 py-2 my-2" placeholder="enter your email" required>
                               <label for="password" class="text-capitalize">password</label>
                               <input type="password" id="password" name="password" class="form-control px-3 py-2 my-2" placeholder="enter your password" required>
                  
                               <input type="submit" class="form-btn btn btn-lg border px-3 py-2 my-4" value="SignUp" name="submit">
                               <span>already have an account ?<a href="index.php" class="text-italic color"> SignIn</a></span><br>
                           </div>
                       </form>
                     
                   </div>
                   <div class="col-lg-6">
                      <img src="images/auth1.jpg" alt="" class="card-img" width="100%">
                   </div>
                  </div>
               </div>
           </div>
        </div>

     </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>
