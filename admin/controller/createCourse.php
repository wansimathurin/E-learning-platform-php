<?php
require_once('/mathurin/FormationNkap/session2/E-learning-platform/db_connection.php');
if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['requirements']) && isset($_POST['category']) && isset($_POST['price']) && isset($_POST['submit'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $req = $_POST['requirements'];
  $category = $_POST['category'];
  $price = $_POST['price'];

  $imageOld = $_FILES['image']['name'];
  $pdfOld = $_FILES['coursePdf']['name'];
  $videoOld = $_FILES['courseVideo']['name'];
   //image treating
   $img_extension = pathinfo($imageOld,PATHINFO_EXTENSION); # .jpg , png
   $img_extension_lowercase = strtolower($img_extension); # JPG = jpg
   $image = uniqid('courseImg',true).'.'.$img_extension_lowercase; 
    
   //pdf treating
   $pdf_extension = pathinfo($pdfOld,PATHINFO_EXTENSION); # .pdf , pdf
   $pdf_extension_lowercase = strtolower($pdf_extension); # PDF = pdf
   $pdf = uniqid('coursePDf',true).'.'.$pdf_extension_lowercase;

   //videos  treating
   $video_extension = pathinfo($videoOld,PATHINFO_EXTENSION); # .mp4 , avi
   $video_extension_lowercase = strtolower($video_extension); # MP4 = mp4
   $video = uniqid('courseVideo',true).'.'.$video_extension_lowercase;

   // part 2 queries
    $sql = "INSERT INTO courses(course_title,course_desc,course_requirements,course_image,course_video,pdf,category,price) VALUES ('$title','$description','$req','$image','$video','$pdf','$category','$price')";
    $result = mysqli_query($connect,$sql);
    if($result){
           // moving the user selected image to the image folder
           $fileDestination = '../images/'.$image;
           move_uploaded_file($_FILES['image']['tmp_name'],$fileDestination);
           // moving the user selected video to the image folder
           $fileDestination = '../videos/'.$video;
           move_uploaded_file($_FILES['courseVideo']['tmp_name'],$fileDestination);
           // moving the user selected pdf to the image folder
           $fileDestination = '../pdf/'.$pdf;
           move_uploaded_file($_FILES['coursePdf']['tmp_name'],$fileDestination);

           header("location:/admin/admin.php");
    }else{
      echo "no course added ";
    }
}else{
   echo "Nothing gotten from the add_course form";
}
