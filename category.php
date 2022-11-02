<?php 
session_start();
$category = $_GET['name'];
include "./components/navbar.php";
include "./components/footer.php";


require("./db_connection.php");
$sql = "SELECT * FROM courses WHERE category = '$category'";
$result= mysqli_query($connect,$sql);
?>
<div class="container">
    <div class="row catBanner mt-2">
        <img src="images/banners/catbanns/<?php echo $category ?>.jpg" alt="<?php echo $category ?>">
    </div>
    <div id="mainCourse" class="row courses my-3 d-flex align-items-center justify-content-center">
        <?php 
           if($result){
             if(mysqli_num_rows($result)>1){
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
                   
                };
             }else{
                echo '
                   <h1 class="text-danger text-center">No course yet for this category</h1>
                ';
             }
           }else{
               echo "nothing gotten from the database";
           }
        ?>
      
    </div>
</div>