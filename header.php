<?php

declare(strict_types=1);
require __DIR__ . "/data.php";
require __DIR__ . "/catsdata.php";
require __DIR__ . "/functions.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/container.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    <title>Cute Cats Adoption</title>
</head>

<body>
    <div class="container">
        <header>
            <nav>
                <div class="navigation">
                    <img src="photos/logo.png">
                    <h1><?php echo $company['name']; ?></h1>
                    <ul>
                        <li><a href="index.php#contents">Home</a></li>
                        <li><a href="gallery.php">Our Cats</a></li>
                        <li><a href="stories.php">Stories</a></li>
                        <li><a href="form.php">Contact us</a></li>

                    </ul>
                </div>
            </nav>
        </header>
        <div class="banner"></div>
        <div class="contents" id="contents">
