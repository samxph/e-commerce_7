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
            <li><?= anchor('shoppingcart/', 'Shopping cart <i class="fas fa-shopping-cart"></i>') ?> <?php echo ('<span class="text-light"> (' . count($_SESSION['cart'])) . ') </span>'; ?> </li>

            <?php if (isset($_SESSION['user'])) { ?>
                <li class="ml-3"><?= anchor('login/logout', 'Sign out <i class="fas fa-user"></i>') ?></li>
                <li class="ml-3"><?= anchor('addproduct', 'Add product <i class="fas fa-folder-plus"></i>') ?></li>
            <?php } else { ?>
                <!-- <li class="ml-3"><?= anchor('login/', 'Sign in <i class="fas fa-user"></i>') ?></li> -->
            <?php } ?>
            <li class="ml-3"><?= anchor('review/', 'Reviews <i class="fas fa-book"></i>') ?></li>
        </ul>
    </div>

    <div class="row">
        <img src=<?php echo base_url("images/dangerpattern.jpg") ?> class="cover" alt="danger">
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="logo mt-2 ml-3">
                <a href="/"> <img src=<?php echo base_url("images/QG_Logo.png") ?> alt="logo"> </a>
            </div>
            <form action="<?= site_url('search/title/'); ?>" method="get">
                <div class="ml-4 mt-4 input-group">
                    <select class="custom-select" name="searchby">
                        <option value="1">Game title</option>
                        <option value="2">Game publisher</option>
                        <option value="3">Game developer</option>
                        <option value="4">Device Name</option>
                    </select>
                    <input type="text" name="searchtitle" value="" class="search" placeholder=" Search for ..." size="40">
                    <button class="btn btn-warning mb-1 ml-1 "><i class="fas fa-search"></i></button>
                </div>
            </form>
        </div>

        <div class="row col">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a class="navbar-brand" href="\">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php foreach ($allPlatforms as $platform) : ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <?= $platform['name']; ?> <i class=" <?= $platform['logo']; ?>"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if ($platform['id'] < 5) { ?>
                                        <a class="dropdown-item" href="<?= site_url('frontpage/searchplatform/' . $platform['name']);  ?>">All Games</a>
                                        <?php foreach (array_slice($allGenres, 0, 14) as $genre) : ?>
                                            <a class="dropdown-item" href="<?= site_url('frontpage/searchgenre/' . $platform['name'] . '/' . $genre['name']); ?>"><?= $genre['name'] ?></a>
                                        <?php endforeach;
                                    } else {
                                        foreach (array_slice($allGenres, 14, 20) as $genre) : ?>
                                            <a class="dropdown-item" href="<?= site_url('frontpage/searchgenre/' . $platform['name'] . '/' . $genre['name']); ?>"><?= $genre['name'] ?></a>
                                    <?php endforeach;
                                    } ?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

<div class="container-fluid">

                 
