<?php 
$id = $_GET['id'];

require("./db_connection.php");
$sql = "SELECT * FROM courses WHERE id = $id";
$result= mysqli_query($connect,$sql);
?>
<div class="container">
    <div id="mainCourse" class="row courses my-5">
        <?php 
           if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $courseTitle = $row['course_title'];
                $image = $row['course_image'];
                $video = $row['course_video'];
                
                echo $courseTitle;
                echo '<div class="card-img">
                     <img src="/admin/images/'.$image.'" class="card-img">
                 </div>';
            }
           }else{
               echo "nothing gotten from the database";
           }
        ?>
      
    </div>
</div>