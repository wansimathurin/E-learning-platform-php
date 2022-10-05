<?php session_start();
if ($_SESSION['name'] == "Mathurin Wansi" ) {
    include "main.admin.php";
}else{
  header('location:/home.php');
}
?>



