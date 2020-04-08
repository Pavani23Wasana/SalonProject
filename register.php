<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>Login</title>
</head>
<body>

  <div class="container">
   	<form name="login" action="#">
   	<div class="row">
		  <div class="col-md-3"></div>
   	   	<div class="col-md-5">
          <div class="row">
   	   	  	<div class="col-md-6">
				    <img src="images/logo.png" class="img-fluid" alt="">
				    </div>
			      <div class="col-md-6">
				    <p style="color:#cc0066" class="salon-logo">SALON MANORI</P>
				    </div>
				    </div>

            <div class="row">
   	   	  	<div class="col-md-7">
            <p id="logo" style="font-size: 16px; text-align:right;">Sign Up!</p>
            </div>
            <!-- <div class="col-md-4">
            <p id="logo" style="font-size: 10px; color:red; text-align:right;" >All fields are required</p>
            </div> -->
            </div>

            <p style="font-size: 10px;">Note: If you have been to this location before, Use the same first name, last name and email you provided</p>

            <div class="row">
   	   	  		<div class="col-md-6">
              <label style="font-size: 12px"class="label control-label">First Name</label>
   	   	 	    <div class="input-group">
   	   	 	    <span class="input-group-addon"><i class="fas fa-user" style="font-size: 13px"></i></span>
   	   	 	    <input style="font-size: 12px" type="text" class="form-control" name="FirstName" placeholder="Fist Name" required>
              <p class="nameErr"></p>
              </div>

              <label style="font-size: 12px"class="label control-label">E-mail</label>
   	   	 	    <div class="input-group">
   	   	 	    <span class="input-group-addon"><i class="fas fa-envelope" style="font-size: 13px"></i></span>
   	   	 	    <input style="font-size: 12px" type="text" class="form-control" name="Email" placeholder="E-mail" required>
              <p class="nameErr"></p>
              </div>

              <label style="font-size: 13px" class="label control-label">Password</label>
   	   	 	    <div class="input-group">
   	   	 	    <span class="input-group-addon"><i class="fas fa-lock" style="font-size: 13px"></i></span>
   	   	 	    <input style="font-size: 13px" type="Password" class="form-control" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
   	   	 	    <p class="passErr"></p>
   	   	 	    </div>
                 
              <div class="input-group">
              <label style="font-size: 12px;" class="label control-label">Gender</label>
              <input style="font-size: 12px;" type="radio" name="gender" id="male" class="radio" value="male">&nbsp<label id="rd"><small>Male</small></label>
              <input style="font-size: 12px; color:white;" type="radio" name="gender" id="female" class="radio" value="female">&nbsp<label id="rd"><small>Female</small></label></div>
              </div>

   	   	  		<div class="col-md-6">
              <label style="font-size: 12px"class="label control-label">Last Name</label>
   	   	 	    <div class="input-group">
   	   	 	    <span class="input-group-addon"><i class="fas fa-user" style="font-size: 13px"></i></span>
   	   	 	    <input style="font-size: 12px" type="text" class="form-control" name="LastName" placeholder="Last Name" required>
              <p class="nameErr"></p>
              </div>

              <label style="font-size: 12px"class="label control-label">Mobile No</label>
   	   	 	    <div class="input-group">
   	   	 	    <span class="input-group-addon"><i class="fas fa-phone" style="font-size: 13px"></i></span>
   	   	 	    <input style="font-size: 12px" type="text" class="form-control" name="MobileNo" placeholder="Mobile No" required>
              <p class="nameErr"></p>
              </div>

              <label style="font-size: 13px" class="label control-label">Re-type Password</label>
   	   	 	    <div class="input-group">
   	   	 	    <span class="input-group-addon"><i class="fas fa-lock" style="font-size: 13px"></i></span>
   	   	 	    <input style="font-size: 13px" type="Password" class="form-control" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                 <p class="passErr"></p>
                 </div>
                 <input  type="checkbox" onclick="pswrdvisible()"><small>&nbsp I agree with Terms and conditions</small><br>
   	          
              </div>
              
              <div class="form-group"> 
   	   	      <input type="submit" name="loginsubmit" class="btn btn-default btn-primary" value="Sign me up and Log me in">
                </div> 
                
			  <div class="col-md-3"></div>
   	  </div>	
   	</form>
   </div>

  <script src="js/bootstrap.js"></script>    
  <script src="js/loginjs.js"></script>    

</body>
</html>