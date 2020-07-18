<?php
session_start();
require('conect.php');
error_reporting(0);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="title icon" href="images/title-img.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="acess/style.css">


        <title>student landing</title>
    </head>

    <body>
        <?php
  if(!isset($_SESSION['student_id'])){
    header("location: artlogin.php");
  } 
  else{

  ?>
            <nav class="navbar navbar-expand-md navbar-light">
                <button class="navbar-toggler ml-auto mb-2 bg" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- sidebar -->
                            <div class="col-xl-2 col-lg-3 col-md sidebar fixed-top">
                                <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-4 mb bottom-border"> matric num: <?php echo $_SESSION['student_code'] ?></a>
                                <div class="bottom-border pb-2">
                                    <img src="uploads/<?php echo $_SESSION['pictures'] ?>" alt="" class="rounded mr-4">
                                    <a href="#" class="text-white"></a>
                                </div>
                                <ul class="navbar-nav flex-column mt-4">

                                    <li class="nav-item"><a href="studentpage.php" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Profile</a></li>


                            
                            <div class="nav-item" id="assignment"><a href="course.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>subject registration</a></div>

                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </nav>
            <!-- sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
                <div class="row align-items-center">

                    <?php 
                  echo "<h5 class='text-light text-uppercase mb-0'>". $_SESSION['surname']." ". $_SESSION['first_name']."</h5> ";?>
                  
                    <div class="move">
                        <a class=" move text-uppercase nav-link text-white mb-0 icon-bullet" href='logout.php'>logout</a>
                    </div>


                </div>

            </div>

            <!-- end of top-nav -->



            <?php
            if(isset($_POST['register'])){
              $mathes=$_POST['mathes'];
              $english=$_POST['english'];
              $literature=$_POST['literature'];
              $government=$_POST['government'];
              $i_r_s=$_POST['i_r_s'];
              $civic=$_POST['civic'];
              $economics=$_POST['economics'];
              $agriculture=$_POST['agriculture'];
              $food=$_POST['food'];
              $yoruba=$_POST['yoruba'];
              $student_id=$_SESSION['student_id'];
              $surname=$_SESSION['surname'];
              $first_name=$_SESSION['first_name'];
              $last_name=$_SESSION['last_name'];
              $class=$_SESSION['class'];
              $student_id=$_SESSION['student_id'];
              $selquary=mysqli_query($con,"SELECT * from course_reg where student_id='$student_id'");
              $count=mysqli_num_rows($selquary);
             
	            if($count>0){
			          echo "<h4 class='container regsuccess'> you have registered for first semester courses.</h4>";
               }

              else{
             
                $query="INSERT into course_reg
                (student_id,surname,first_name,last_name,mathematics,english_language,literature,government,i_r_s,civic_education,econimics,agriculture,food_nutrition,yoruba) 
                value('$student_id','$surname','$first_name','$last_name','$mathes','$english','$literature','$government','$i_r_s','$civic','$economics','$agriculture','$food','$yoruba')";
                $mqsqli=mysqli_query($con,$query);
              if($mqsqli){
               echo" <h4 class='container regsuccess'>registration successful</h4>";
              }
  }
              
              
}
          
            ?>
                <div class="container mt-3" style="padding-left: 125px;">

                    <div class="d-flex justify-content-around bg-secondary mb-4">
                        <div class="p-2 bg-info">
                            <h6>courses</h6>

                            <form method="post">

                                <div class="form-check">
                                    <label class="form-check-label" for="check1">
        <input type="checkbox" class="form-check-input" id="check1" name="mathes" value="0">mathemathics
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="check2">
        <input type="checkbox" class="form-check-input" id="check2" name="english" value="0">English language
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check3" name="literature" value="0">literature
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check4" name="government" value="0">government
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check5" name="I_r_s[]" value="0">i_r_s
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check6" name="civic" value="0">civic_education
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check7" name="economics" value="0">economics
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check8" name="agriculture" value="0">agriculture
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check9" name="food" value="0">food_nutrition
      </label>
                                </div>
                                <div class="form-check">
                                    <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="check0" name="yoruba" value="0">yoruba
      </label>
                                </div>
                                <input type="submit" class="btn btn-primary btn-embossed btn-lg btn-wide" value="register" name="register">
                        </div>

                        </form>
                    </div>
                </div>






                <?php
  
}
      ?>
                    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
                    <script src="script.js"></script>
    </body>

    </html>