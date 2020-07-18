<?php
 session_start();
 require('conect.php');
function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
 
   return $data;
  }
if(isset($_REQUEST['login'])){
  $student_id=input($_REQUEST['userid']);
  $password=input(md5($_REQUEST['password']));
   if(filter_var($student_id,FILTER_VALIDATE_EMAIL)){
        $query="SELECT * from student where email='$student_id' and password='$password'";
        }
    else{
        $query="SELECT * from student where phone='$student_id' and password='$password'";
    }
 $execute=mysqli_query($con,$query);
 $rows=mysqli_num_rows($execute);
if($rows==1){
  $data=mysqli_fetch_assoc($execute);
  $student_id=$data['student_id'];
 
 $updatequery=mysqli_query($con,"UPDATE student set login_status=1 where student_id='$student_id'"); 
 
 $_SESSION['student_id']=$data['student_id'];
 $_SESSION['surname']=$data['surname'];
 $_SESSION['first_name']=$data['first_name'];
 $_SESSION['last_name']=$data['last_name'];
 $_SESSION['pictures']=$data['pictures'];
 $_SESSION['token']=$data['token'].$data['student_id'];
 $_SESSION['login_status']=$data['login_status'];
 $_SESSION['email']=$data['email'];
 $_SESSION['student_code']=($data['student_code']);

 //redirect user
header("location: studentpage.php");
}
if(empty($student_id) || empty($password)){
  header("location:artlogin.php?Empty=Please fill in the Blanks");
}

else{
  header("location:artlogin.php?invalid=please enter correct email or password");
}
}

?>