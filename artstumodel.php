<?php
   error_reporting(0);
    require('conect.php');

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
     
       return $data;
      }

  if(isset($_POST['register'])){
    $surname=input($_REQUEST['surname']);
    $first_name=input($_REQUEST['first_name']);
    $last_name=input($_REQUEST['last_name']);
    $date=input($_REQUEST['date']);
    $phone=input($_REQUEST['phone']);
    $email=input($_REQUEST['email']); 
    $password=input(md5($_REQUEST['password']));
    $sex=input($_REQUEST['gender']);
    $address=input($_REQUEST['address']);
    $file=$_FILES['picture']['name'];
    $extension=end(explode('.',$file));
    $file=$phone.".".$extension;
    $selquary=mysqli_query($con,"SELECT * from student where phone='$phone' or email='$email'");
    $count=mysqli_num_rows($selquary);
	    if($count>0){
			echo "<h3> you have registered click on</h3> <a href='artlogin.php'>log in</a>";
        }
        else{
        $token=md5(uniqid(rand(),true));
        $student_code="mat".rand(000, 1000);
        $query="INSERT into 
                student (student_code,surname,first_name,last_name,date_birth,sex,address,phone,email,password,pictures,login_status,token) 
                values('$student_code','$surname','$first_name','$last_name','$date','$sex','$address','$phone','$email','$password','$file','false','$token')";
        $executeq=mysqli_query($con,$query);
        $dir='uploads/';
        if (!$executeq) {
          printf("Error: %s\n", mysqli_error($con));
          exit();
      }
		//use to upload files from form to another deftination
        move_uploaded_file($_FILES['picture']['tmp_name'],$dir.$file);
        if($executeq){
            
            echo"<h2>registration sucesful</h2><a href='artlogin.php'>log in</a>";
          } 
        
          }
          
            
             
         }
             
  ?>
