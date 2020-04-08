<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/navbarstyle.css">
  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #262626; height: 70px;">
  <a class="navbar-brand" href="index.php" style="color:#ff1ac6; font-style: oblique; font-variant: small-caps; font-size: 25px; text-shadow: 1px 1px aliceblue;"><img class="logo" src="images/logo.png" style="width:80px;height: 50px;">SALON MANORI</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><b>
        <a class="nav-link" href="#">Home</a></b>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Book an Appointment</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
        <div class="input-group">
           <input class="form-control input-sm" id="inputsm" type="text" placeholder="search" size="15" arial-label="search"  style="margin-right: 0px;">
             <div class="input-group-append">

      <button class="btn btn-secondary mr-sm-2 btn-search" type="button"><i class="fa fa-search"></i></button>
    </div>
    </div>&#160;

        <ul class="navbar-nav ml-auto" style="border: 1px;">
      <li class="nav-item dropdown" style="margin-right: 20px;">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="background:  #a6a6a6;" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user" style="font-size: 20px"></i>&nbsp;Login
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" routerLink="/donee-login">Customer Login</a>
          <a class="dropdown-item" routerLink="/donor-login">Beautician Login</a>
          <a class="dropdown-item" routerLink="/admin-login">Admin Login</a>
        </div>
      </li>
    </ul>
    </form>


     
      
         

  </div>
</nav>

<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>      
</body>
</html>
