
<!DOCTYPE html>
<html lang="en">
  <head>

          
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>student form</title>
  </head>
  <body>
             <div class="container col-md-6 col-md-offset-1">
              <h1>form</h1>
              
	    				<form role="form" name="register" method="post" enctype="multipart/form-data" action="artstumodel.php">
    				
    						<div class="form-group">
                                <label for="exampleFormControlInput1">surname:</label>
    				    		<input type="text"class="form-control input-lg" id="item" name="surname" required="required"   placeholder="surname">
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlInput1">first name:</label>
    				    		<input type="text"class="form-control input-lg" id="item" name="first_name" required="required" value=""  placeholder="first name">
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlInput1">last name:</label>
    				    		<input type="text"class="form-control input-lg" id="item" name="last_name" required="required" value=""  placeholder="last name">
                  </div>
                  <div class="form-group">
                  <label for="exampleFormControlInput1">Date of birth:</label>
    				  			<input type="date" class="form-control input-lg" id="item" name="date" required="required" placeholder="date of birth">
                              </div>
                              

                              <div class="form-group">
                <label for="exampleFormControlInput1">phone number:</label> 
    				  			<input type="tel" class="form-control input-lg" id="item" name="phone" required="required" value="" placeholder="phone number">
                            </div>
                                    
						  	<div class="form-group">
                <label for="exampleFormControlInput1">email:</label> 
    				  			<input type="email" class="form-control input-lg" id="item" name="email" required="required" value="" placeholder="email">
                            </div>
                            <div class="form-group">
                <label for="exampleFormControlInput1">password:</label> 
    				  			<input type="password" class="form-control input-lg" id="item" name="password" required="required" value="" placeholder="password">
                            </div>      
    				<div class="form-group">
                    <label for="exampleFormControlInput1">sex:</label><br>
    				  			<input type="radio" class="form-check-input" id="gender" name="gender" value="male">male <br>
    				  			<input type="radio" class="form-check-input" id="gender" name="gender" value="female">female
    				     
                        </div>            
    				  	    				  	
    		<div class="form-group">
                
            <label for="exampleFormControlInput1">residential address:</label> 
              <textarea class="form-control" id="" rows="4" placeholder="address"  name= "address"required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                <label for="exampleFormControlInput1">picture</label> 
    				  			<input type="file" class="form-control" id="item" name="picture" required="required" value="" placeholder="picture">
                            </div>                
						

      
      <input type="submit" class="btn btn-primary btn-embossed btn-lg btn-wide" value="register" name="register">
	</form>
    </div>
      
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script.js"></script>
  </body>
</html>