<?php 
require("./db_connection.php");
$sql = "SELECT * FROM courses";
$result= mysqli_query($connect,$sql);
?>

<div class="container">
    
    <div id="mainCourse" class="row courses my-5">
        <?php 
           if($result){
            if(mysqli_num_rows($result) <= 0){
                echo "<h1 class='text-center text-bg-danger'>No Course Added yet !... </h1>";
            }
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $courseTitle = $row['course_title'];
                $image = $row['course_image'];
                $video = $row['course_video'];
                if($_SESSION['name'] == 'Mathurin Wansi'){
                    echo '<div class="col-lg-3">
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
                    echo '<div class="col-lg-3">
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
        ?>
      
    </div>
</div>
