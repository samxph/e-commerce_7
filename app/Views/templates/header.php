<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <link rel="stylesheet" href=<?php echo base_url("css\styles.css") ?>>

    <title><?= $title ?></title>
</head>

<body>
    <div class="row topheader">
        <ul>
            <li><a href="#">Shopping cart <i class="fas fa-shopping-cart"></i> |</a></li>
            <li><a href="#">Log in <i class="fas fa-user"></i></a></li>
        </ul>
    </div>

    <div class="row">
        <img src=<?php echo base_url("images\dangerpattern.jpg") ?> class="cover" alt="danger">
    </div>


    <div class="container-fluid">
        <div class="row">

            <div class="logo mt-2 ml-3">
                <a href="frontpage"> <img src=<?php echo base_url("images\headerlogo2.jpg") ?> alt="logo"> </a>
            </div>
            <div class="ml-4 mt-4">
                <input type="text" name="searchbar" class="search" placeholder="Search website..." size="40">
                <button class="btn btn-warning mb-1 ml-1"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="row col">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="frontpage">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PS4 <i class="fab fa-playstation"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Ajopelit</a>
                                <a class="dropdown-item" href="#">Arcade</a>
                                <a class="dropdown-item" href="#">First Person Shooter</a>
                                <a class="dropdown-item" href="#">Kauhu</a>
                                <a class="dropdown-item" href="#">Puzzle</a>
                                <a class="dropdown-item" href="#">RPG</a>
                                <a class="dropdown-item" href="#">Seikkailu</a>
                                <a class="dropdown-item" href="#">Simulaattori</a>
                                <a class="dropdown-item" href="#">Strategia</a>
                                <a class="dropdown-item" href="#">Tasohyppely</a>
                                <a class="dropdown-item" href="#">Toiminta</a>
                                <a class="dropdown-item" href="#">Urheilu</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                XBOX ONE <i class="fab fa-xbox"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Ajopelit</a>
                                <a class="dropdown-item" href="#">Arcade</a>
                                <a class="dropdown-item" href="#">First Person Shooter</a>
                                <a class="dropdown-item" href="#">Kauhu</a>
                                <a class="dropdown-item" href="#">Puzzle</a>
                                <a class="dropdown-item" href="#">RPG</a>
                                <a class="dropdown-item" href="#">Seikkailu</a>
                                <a class="dropdown-item" href="#">Simulaattori</a>
                                <a class="dropdown-item" href="#">Strategia</a>
                                <a class="dropdown-item" href="#">Tasohyppely</a>
                                <a class="dropdown-item" href="#">Toiminta</a>
                                <a class="dropdown-item" href="#">Urheilu</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Switch <i class="fas fa-dice-two"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Ajopelit</a>
                                <a class="dropdown-item" href="#">Arcade</a>
                                <a class="dropdown-item" href="#">First Person Shooter</a>
                                <a class="dropdown-item" href="#">RPG</a>
                                <a class="dropdown-item" href="#">Seikkailu</a>
                                <a class="dropdown-item" href="#">Simulaattori</a>
                                <a class="dropdown-item" href="#">Strategia</a>
                                <a class="dropdown-item" href="#">Tasohyppely</a>
                                <a class="dropdown-item" href="#">Toiminta</a>
                                <a class="dropdown-item" href="#">Urheilu</a>
                                <a class="dropdown-item" href="#">Lapset</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PC <i class="fas fa-mouse"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Ajopelit</a>
                                <a class="dropdown-item" href="#">First Person Shooter</a>
                                <a class="dropdown-item" href="#">Kauhu</a>
                                <a class="dropdown-item" href="#">Puzzle</a>
                                <a class="dropdown-item" href="#">RPG</a>
                                <a class="dropdown-item" href="#">Räiskintä</a>
                                <a class="dropdown-item" href="#">Seikkailu</a>
                                <a class="dropdown-item" href="#">Simulaattori</a>
                                <a class="dropdown-item" href="#">Strategia</a>
                                <a class="dropdown-item" href="#">Toiminta</a>
                                <a class="dropdown-item" href="#">Urheilu</a>
                                <a class="dropdown-item" href="#">Virtual Reality</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Devices and accessories
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Consoles</a>
                                <a class="dropdown-item" href="#">Gaming controllers</a>
                                <a class="dropdown-item" href="#">Gaming displays</a>
                                <a class="dropdown-item" href="#">Gaming chairs</a>
                                <a class="dropdown-item" href="#">Virtual Reality</a>
                                <a class="dropdown-item" href="#">Other accessories</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="container-fluid">