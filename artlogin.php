<?php

require_once('artloginmodel.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title></title>    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="bootstrap/dist/css/bootstrap.min.css"type="text/css"rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body style="background-color:green">

<?php
    if(isset($_SESSION['student_id']) && $_SESSION['login_status']=1){
        header("location:studentpage.php?student=".$_SESSION['surname']."&student_code=".$_SESSION['student_code']);
    }
    else{

    ?>
      <div class="container mt-5">
        <div class="row">
          <div class="col-lg-5 m-auto">
            <div class="card bg-dark mt-5"> 
              <div class="card-title bg-primary text-white mt-5">
                <h4 class="text-center py-3">student login</h4>
              </div>
                  <?php
                  if(@$_GET['Empty']==true){
 
                ?>
                <div class="alert-light text-danger text-center py-3 ">
                  <?php  echo $_GET['Empty'];?>
                </div>
                <?php
                }
                ?>

                  <?php
                if(@$_GET['invalid']==true){
 
                ?>
                <div class="alert-light text-danger text-center py-3 ">
                  <?php echo $_GET['invalid']?>
                </div>
              <?php
              }
              ?>


                <div class="card-body">
                  <form action="artloginmodel.php"  method="get">
                        <input type="text" class="form-control mb-3" id="email"  placeholder="Email/phone"name="userid">
                        <input type="password" class="form-control mb-3" id="password" placeholder="Password"name="password">
                        <button class="btn btn-primary mt-3" name="login">login</button>
                    </form>   
              </div>
            </div>
          </div>
        </div>
      </div>
    



   

<?php
}
?>
</body>
</html>