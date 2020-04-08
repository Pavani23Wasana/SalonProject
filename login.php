<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <title>Login</title>
</head>
<body>

   <div class="container">
   	 <form name="login" action="#"><!-- action="#"-database eka connect karana -->
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
   	   	 	<h5 class="text-center">Login here</h5>
   	   	 	<label style="font-size: 13px"class="label control-label">Username or E-mail</label>
   	   	 	   <div class="input-group"><!-- radio button/checkbox eva -->
   	   	 	       <span class="input-group-addon"><i class="fas fa-user" style="font-size: 18px"></i></span><!-- fas fa-user-to get icons -->
   	   	 	       <input style="font-size: 13px" type="text" class="form-control" name="username" placeholder="username or E-mail" required>
                   <p class="nameErr"></p>
   	   	 	    </div>
   	   	 	       <label style="font-size: 13px" class="label control-label">Password</label>
   	   	 	       <div class="input-group">
   	   	 	       <span class="input-group-addon"><i class="fas fa-lock" style="font-size: 18px"></i></span>
   	   	 	       <input style="font-size: 13px" type="Password" class="form-control" name="password" id="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
   	   	 	       <p class="passErr"></p>
   	   	 	       </div>
   	   	<div class="row">
   	   	  <div class="col-md-6">
   	   	 	  <input  type="checkbox" onclick="pswrdvisible()"><small>&nbsp Show Password</small><br>
   	   	 	  <input type="checkbox"><small>&nbsp Remember me</small>		
   	      </div>
   	          <div class="col-md-6">
   	            <a href="#"><p style="font-size: 11px; text-align:center;" class="text-right">Forget Password</p></a>
   	          </div>
   	   	      </div>
   	   	      <div class="form-group"> 
   	   	      <input type="submit" name="loginsubmit" class="btn btn-default btn-sm btn-primary" value="LOGIN">
   	   	      </div> 
   	   	      <p id="submission" style="font-size: 12px" class="text-center">Don't have an account yet? <a href="register.php">SIGN UP</a></p>
   	   	      	 	
			  </div>
			  <div class="col-md-3"></div>
   	  </div>	
   	  </form>
   </div>

    <script src="js/bootstrap.js"></script>    
    <script src="js/loginjs.js"></script>    

</body>
</html>