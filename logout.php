<?php
session_start();
require('conect.php');
if(isset($_SESSION['student_id']) and $_SESSION['login_status']==1){
    $student_id=$_SESSION['student_id'];
    $execute=mysqli_query($con,"UPDATE student set login_status=0 where student_id='$student_id'");
session_destroy();

}
header("location:artlogin.php");
?>