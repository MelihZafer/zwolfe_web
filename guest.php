<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Guest | Zwolfe</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="guestt.css">
</head>

<body class="back ">
  <nav class="navbar menunav bg-dark navbar-expand-lg navbar-dark zindex-sticky sticky-top">
    <div class="container-fluid">

      <button class="navbar-toggler buttonmenu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item text-center">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Projects
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>





  <!-- Modal for Projects -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Projects are unaviable!</h5>

        </div>
        <div class="modal-body">
          Please log in to see the projects!
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>




  <!-- Carusel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="user-select: none;">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner vh-100 ">
      <div class="carousel-item car-item active vh-100">
        <div class="img w-100 vh-100 pt-2 "></div>
        <div class="carousel-caption boxx ">


          <div class="container-fluid  logotext">
            <h1 class="text-light display-1 text-center">ZWOLFE</h1>
          </div>
          <div class="loginandsignup">
            <a class=" btn btn-light my-1 mx-2" href="login.php">Log In</a>
            <a class=" btn btn-light my-1 mx-2" href="signup.php">Sign Up</a>
          </div>




        </div>
      </div>

      <div class="carousel-item car-item   vh-100">
        <div class="img w-100 vh-100 pt-2 "></div>
        <div class="carousel-caption boxx ">


          <div class="container-fluid  logotext">
            <h1 class="text-light display-1 text-center">WELCOME!</h1>
          </div>
          <div class="loginandsignup">
            <h5>
              This website's made by ZWOLFE. <br> If you wanna to see what kinda site is it, you must login or sign up!
            </h5>
          </div>

        </div>
      </div>
      <div class="carousel-item car-item vh-100">
        <div class="img w-100 vh-100 pt-2 "></div>
        <div class="carousel-caption boxx ">

          <div class="container-fluid  logotext">
            <h1 class="text-light display-1 text-center">Wanna see my old websites?</h1>
          </div>
          <div class="loginandsignup">
            <a class=" btn btn-light my-1 mx-2" target="_blank" href="http://melihzafer.free.bg">First One</a>
            <a class=" btn btn-light my-1 mx-2" target="_blank" href="http://melihzafer.epizy.com">Second One</a>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>


    <script src="bootstrap.js"></script>
    <script src="jquery.js"></script>
    <script src="custom.js"></script>
</body>

</html>