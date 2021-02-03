<?php

include("connection.php");
include("functions.php");
session_start();
$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zwolfe</title>
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="bootstrap.css">
  <link rel="stylesheet" href="index.css">
</head>

<body>


  <nav class="navbar menunav bg-dark navbar-expand-lg navbar-dark zindex-sticky sticky-top">
    <div class="container-fluid">

      <button class="navbar-toggler buttonmenu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item text-center">
            <a class="nav-link active" aria-current="page" href="index.php#carouselExampleCaptions">Home</a>
          </li>
          <li class="nav-item text-center">
            <a class="nav-link" href="index.php#f">Contact</a>
          </li>
          <li class="nav-item text-center dropdown">
            <a class="nav-link dropdown-toggle" href="project.php" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Projects
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown1">
              <li><a class="dropdown-item" href="project.php#games">
                  <h6>Project</h6>
                </a>
                <hr class="m-0">
              </li>
              <li><a class="dropdown-item" href="project.php#games">Games</a></li>
              <li><a class="dropdown-item" href="project.php#designs">Designs</a></li>
            </ul>
          </li>
          <li class="nav-item text-center dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php echo $user_data['user_name']; ?>
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">

              <li><a class="dropdown-item" href="#">Account Setting</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <!-- Carusel -->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="user-select: none;">
    <ol class="carousel-indicators">
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
      <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
    </ol>
    <div class="carousel-inner  ">
      <div class="carousel-item car-item active ">
        <div class="img w-100 " style=" background-image: url(img/gradient1.jpg); background-repeat: no-repeat; background-size: cover;"></div>
        <div class="carousel-caption boxx ">
          <h5>Welcome, <?php echo $user_data['user_name']; ?>!</h5>
          <p>My first website with PHP, JQUERY and BS.</p>
        </div>
      </div>
      <div class="carousel-item car-item">
        <div class="img d-block w-100" style=" background-image: url(img/gradient2.jpg); background-repeat: no-repeat; background-size: cover;"></div>
        <div class="carousel-caption  boxx ">
          <h5>Projects</h5>
          <p>
            Zwolfe's applications, websites and projects. <br>
            Also here you may find projects <br>
            done with the Zwolfe's teammates.
            <a class="text-light" href="http://dsoftwares.epizy.com/">Deniz Memduev's website</a>
          </p>
          <a href="project.php" class="btn btn-primary" style="width: 5em;"> Projects</a>
        </div>
      </div>
      <div class="carousel-item car-item ">
        <div class="img d-block w-100" style=" background-image: url(img/gradient3.jpg); background-repeat: no-repeat; background-size: cover;"></div>
        <div class="carousel-caption boxx d-flex flex-column align-items-center ">
          <h5>My Old Website</h5>
          <p>Made with CSS, HTML and JS</p>
          <a href="http://melihzafer.epizy.com/" class="btn btn-primary" style="width: 10em;"> Old Website</a>
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
  <!-- Sections -->
  <div class="container-fluid section1  py-4 text-light">
    <div class="row p-2 text-center py-4">
      <div class="header">
        <h1>Git Hub Repositories</h1>
      </div>
    </div>
    <!-- row 1 -->
    <div class="row gy-4 text-dark">
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Zwolfe - Website</h5>
            <p class="card-text">The repository of this website in Git Hub. <br> <br></p>
            <a href="https://github.com/melihzafer/zwolfe_web" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Darkchat - Zwolfe</h5>
            <p class="card-text">The chat system created for close friends. <br> That's why he's been called 'Darkchat'.</p>
            <a href="https://github.com/melihzafer/darkchat_zwolfe" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">XOXO - TicTacToe</h5>
            <p class="card-text">The XOXO game that has been created by Zwolfe and Deniz Memduev.</p>
            <a href="https://github.com/melihzafer/xoxo" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Traffic Racer - Car Game</h5>
            <p class="card-text">A car race game known as 'Traffic racer' created by Zwolfe with jQuery.</p>
            <a href="https://github.com/melihzafer/traffic_racer_game" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
      <!-- row 2 -->
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Melih Zafer - Website</h5>
            <p class="card-text">The repository of my old website in Git Hub. <br> <br></p>
            <a href="https://github.com/melihzafer/melihzafer_web" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">My First App - Website</h5>
            <p class="card-text">The repository of my first website in Git Hub. </p>
            <a href="https://github.com/melihzafer/my_first_Web_App" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Doner - PHP App</h5>
            <p class="card-text">My first PHP and MySql app. Doner order website. </p>
            <a href="https://github.com/melihzafer/doner" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
      <!--  -->
      <div class="col-sm-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">ToDo - JS</h5>
            <p class="card-text">ToDo list created with JavaScript by Zwolfe. <br> <br></p>
            <a href="https://github.com/melihzafer/traffic_racer_game" target='_blank' class="btn btn-secondary">Go to Git Hub</a>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- Footer -->
  <div class="container-fluid bg-dark pt-5 text-light " id="f">
    <div class="row gy-3 ">
      <div class="col-4  d-flex justify-content-center ">
        <a href="https://www.youtube.com/c/melihzafer" target="_blank" class="btn btn-danger ">YouTube</a>
      </div>
      <div class="col-4  d-flex justify-content-center ">
        <a href="https://www.facebok.com/melih3afer" target="_blank" class="btn btn-primary ">Facebook</a>
      </div>
      <div class="col-4  d-flex justify-content-center">
        <a href="https://www.instagram.com/melihzafer_" target="_blank" class="btn instabtn ">Instagram</a>
      </div>
    </div>
    <div class="row text-center py-4">
      <h5>
        About Me
      </h5>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis, exercitationem totam quis vero doloribus corporis rem voluptatem dolore ipsum consequuntur!</p>
    </div>
  </div>




  <script src="bootstrap.js"></script>
  <script src="jquery.js"></script>
  <script src="custom.js"></script>
</body>

</html>