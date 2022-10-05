<?php 
require("./db_connection.php");
$sql = "SELECT * FROM courses";
$result= mysqli_query($connect,$sql);
?>

<div class="container">
    <div class="row courses my-5">
        <?php 
           if($result){
            while($row = mysqli_fetch_assoc($result)){
                $courseTitle = $row['course_title'];
                $image = $row['course_image'];
                $video = $row['course_video'];
           
                echo '<div class="col-lg-3">
                <div class="card" style="width: 18rem;">
                  <video poster="/admin/images/'.$image.'" height="190px" controls class="card-img-top">
                    <source src="/admin/videos/'.$video.'" type="video/mp4">
                  </video>
                    <div class="card-body">
                        <h5 class="card-title text-center color">'.$courseTitle.'</h5>
                       
                    </div>
                </div>
            </div>';
            }
           }else{
               echo "nothing gotten from the database";
           }
        ?>
      
    </div>
</div>