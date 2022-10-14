<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-learning : <?php if (isset($_GET['success'])) {
                            echo $_GET['success'];
                        } else {
                            echo 'Home';
                        } ?></title>
    <link rel="shortcut icon" href="images/e-book.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="responsive.css">
</head>

<body>
    <nav class="nav-bar">
        <div class="container">
            <div class="brand-e">
                <a href="/">
                    <h3>e-learning<span>.</span></h3>
                </a>
            </div>
            <ul class="mainNavs">
                <a href="">
                    <li>Home</li>
                </a>
                <a href="">
                    <li>About Us</li>
                </a>
                <a href="/courses.php">
                    <li>Courses</li>
                </a>
                <?php
                if ($_SESSION['name'] == 'Mathurin Wansi') {
                    echo '<a href="/admin/main.admin.php" class="btn btn-sm rounded-pill bg-dark"><li>Dashboard</li></a>';
                } else {
                    echo '<a href=""><li>Programs</li></a>';
                }
                ?>
            </ul>

            <div class="side-bar">
               <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                <button class="navbar-toggler btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <div class="brand-e">
                            <a href="/" style="color: #F27137 ;">
                                <h3 style="font-size:30px !important;">e-learning<span>.</span></h3>
                            </a>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul>
                            <a href="/" class="text-primary">
                                <li>Home</li>
                            </a>
                            <a href="">
                                <li>About Us</li>
                            </a>
                            <a href="/courses.php">
                                <li>Courses</li>
                            </a>
                            <?php
                            if ($_SESSION['name'] == 'Mathurin Wansi') {
                                echo '<a href="/admin/main.admin.php" class="btn btn-sm rounded-pill bg-dark"><li>Dashboard</li></a>';
                            } else {
                                echo '<a href=""><li>Programs</li></a>';
                            }
                            ?>
                        </ul>
                        <form class="d-flex mt-3" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>

                <div class="profile">
                    <img src="users/<?php echo $_SESSION['file'] ?>" alt="">
                </div>
                <a href="logout.php">
                    <li><i class="fa-solid fa-right-from-bracket"></i></li>
                </a>
            </div>
        </div>

    </nav>