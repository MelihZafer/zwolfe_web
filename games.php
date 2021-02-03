<?php
include("connection.php");
include("functions.php");
session_start();
$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Zwolfe</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="bootstrap.css" />
    <link rel="stylesheet" href="index.css" />
</head>
<style>
    .bg-light,
    .btn-light {
        background-color: #e8e8e8;
    }
</style>

<body class="bg-dark">
    <nav class="navbar menunav bg-light navbar-expand-lg navbar-light zindex-sticky sticky-top">
        <div class="container-fluid">
            <button class="navbar-toggler buttonmenu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item text-center">
                        <a class="nav-link" aria-current="page" href="index.php#carouselExampleCaptions">Home</a>
                    </li>
                    <li class="nav-item text-center">
                        <a class="nav-link" href="project.php#f">Contact</a>
                    </li>
                    <li class="nav-item text-center dropdown">
                        <a class="nav-link dropdown-toggle active" href="project.php" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <li>
                                <a class="dropdown-item" href="project.php#games">
                                    <h6>Project</h6>
                                </a>
                                <hr class="m-0" />
                            </li>
                            <li>
                                <a class="dropdown-item" href="project.php#games">Games</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="project.php#designs">Designs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item text-center dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $user_data['user_name']; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Account Setting</a></li>
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                <a class="navbar-brand ms-auto" href="#">
                    <img src="img/logo_black.png" style="height: 39px; margin: 0px 0.5em" alt="" />
                    Melih Zafer
                </a>
            </div>
        </div>
    </nav>
    <!-- projects -->

    <div class="container-fluid">
        <div class="row p-5 align-items-center rows" id="games">
            <div class="col-md-6 col-sm-12 flex-column p-2 align-items-center cols">
                <h2 class="text-success mx-3 my-3">XOXO</h2>
                <hr class="bg-light" />
                <p class="text-light">
                    Xoxo is a paper-and-pencil game for two players, X and O, who take
                    turns marking the spaces in a 3×3 grid. The player who succeeds in
                    placing three of their marks in a diagonal, horizontal, or vertical
                    row is the winner. <br />
                    Designed by Zwolfe. Code by Zwolfe and Deniz Memduev.
                </p>

                <a href="http://melihzafer.epizy.com/xox-main/index.html" class="btn btn-success" style="width: 10em">Play XOXO</a>
            </div>
            <div class="col-md-6 pro-img cols d-flex flex-column col-sm-12 p-2 align-items-center justify-content-center">
                <img src="img/xoxo.png" style="width: 50%" alt="" />
            </div>
        </div>

        <div class="row p-5 align-items-center rows" id="designs">
            <div class="col-md-6 pro-img col-sm-12 flex-column p-2 align-items-center cols">
                <img src="img/rps.png" style="width: 60%" alt="" />
            </div>
            <div class="col-md-6 flex-column col-sm-12 p-2 align-items-center justify-content-center cols">
                <h2 class="text-danger mx-3 my-3">Rock-Paper-Scissor</h2>
                <hr class="bg-light" />
                <p class="text-light">
                    Rock paper scissors (also known by other orderings of the three
                    items, with "rock" sometimes being called "stone", roshambo or
                    ro-sham-bo) is a hand game usually played between two people, in
                    which each player simultaneously forms one of three shapes with an
                    outstretched hand.
                </p>

                <a href="http://melihzafer.epizy.com/rockpaper-main/index.html" class="btn btn-danger" style="width: 10em">Play RPS</a>
            </div>
        </div>
    </div>

    <script src="bootstrap.js"></script>
    <script src="jquery.js"></script>
    <script src="custom.js"></script>
</body>

</html>