<?php
session_start();
include('components/navbar.php');
include('components/footer.php');
include "db_connection.php";
if(isset($_POST['search-item'])){
    $searchItem = $_POST['search-item'];
    $sql = "SELECT * FROM courses WHERE course_title LIKE '%$searchItem%'";
    $result = mysqli_query($connect,$sql);
}
?>
<div class="container search-container my-3">
    <h3 class="search-title">Get a free online Course</h3>
    <div class="search-bar">
        <form action="search-page.php" method="post">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="Search for a course..." value="<?php $searchItem ?>" name="search-item" id="" size="100%">
            <button type="submit" name="search-submit" class="btn btn-md btn-dark">Search</button>
        </form>
    </div>
    <div class="row">
    <?php 
       if(!isset($_POST['search-item'])){
          echo ' <div class="masonry row my-4">
          <div class="grid-item item-1">
             <img src="/admin/images/courseImg633b1a0d1b10c1.31536657.png" alt="" width="100%">
          </div>
          <div class="grid-item item-2">
             <img src="/admin/images/courseImg63406a23099121.92721886.jpg" alt="" width="100%">
          </div>
          <div class="grid-item item-3">
             <img src="/admin/images/courseImg633b1c7cba5d03.10904595.jpg" alt="" width="100%">
          </div>
          <div class="grid-item item-4">
             <img src="/admin/images/courseImg633dc88d4e8bd0.33925588.png" alt="" width="100%">
          </div>
          <div class="grid-item item-5">
             <img src="/admin/images/courseImg63445a66743549.78971411.jpg" alt="" width="100%">
          </div>
          <div class="grid-item item-6">
             <img src="/admin/images/courseImg634844fb3f3e38.87529978.jpg" alt="" width="100%">
          </div>
       </div>';
       }else{
        if($result){
            if(mysqli_num_rows($result) <= 0){
                echo "<h1 class='text-center no-res text-danger'>No Course With title as : ".$searchItem." </h1>" ;
            }
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $courseTitle = $row['course_title'];
                $image = $row['course_image'];
                $video = $row['course_video'];
                if($_SESSION['name'] == 'Mathurin Wansi'){
                    echo '<div class="col-lg-3 my-3 mx-5">
                    <div class="card" style="width: 18rem;">
                      <video poster="/admin/images/'.$image.'" height="190px" controls class="card-img-top">
                        <source src="/admin/videos/'.$video.'" type="video/mp4">
                      </video>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title text-center color">'.$courseTitle.'</h5>
                                <div class="d-flex align-items-center justify-content-between">
                                <a class="text-danger" href="delete.php?id='.$id.'"><i class="fa-solid fa-trash-can"></i></a>
                                <a href="details.php?id='.$id.'"><i class="fa-solid fa-eye"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }else{
                    echo '<div class="col-lg-3 my-3 mx-5">
                    <div class="card" style="width: 18rem;">
                      <video poster="/admin/images/'.$image.'" height="190px" controls class="card-img-top">
                        <source src="/admin/videos/'.$video.'" type="video/mp4">
                      </video>
                        <div class="card-body">
                            <div class="row">
                                <h5 class="card-title text-center color">'.$courseTitle.'</h5>
                                <a href="details.php?id='.$id.'"><i class="fa-solid fa-eye"></i></a>
                            </div>
                        </div>
                    </div>
                </div>';
                }
               
            }
           }else{
               echo "nothing gotten from the database";
           }
       }
     ?>
    </div>
    
</div>