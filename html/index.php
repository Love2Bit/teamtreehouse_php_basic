<?php

$name = "JustAo";
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document<?php echo $name; ?></title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.min.css">
    <style>

    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar col-lg-4 border bg-dark">
                <div class="d-flex flex-column mt-5">
                    <img class="d-flex align-self-center" src="images/kawaii.png" alt="gambar" width="70px"> 
                </div>
            
                <div class="d-flex flex-column mt-5">
                    <div class="d-flex align-self-center">
                        <p class="h2 text-light"><?php echo $name; ?></p>
                    </div>
                </div>
            </div>
            <div class="content col-lg-9 vh-100">
                <div class="d-flex flex-column">
                <p class="h2">My First Practice</p>
                <section class="pl-5">
                    <p class="h2">unit</p>
                    <?php include "inc/units.php";?>
                    <p class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                </section>
                
                <section class="pl-5">
                    <p class="h2">string</p>
                    <?php include "inc/string.php";?>
                    <p class="lead"><?php echo askName("AhmAd dHani"); ?></p>
                </section>
            </div>
            
            <div class="d-flex flex-column border">
                <p class="h2">Body Element</p>
            </div>

            <div class="d-flex border position-absolute fixed-bottom">
                <p class="font-weight-normal mx-auto">&copy; <?php echo $name; echo "Last Modified: "
                .date("F d Y H:i:s".getLastmod()); ?></p>
            </div>
            </div>
        </div>
    </div>
    
    <script src="asset/js/jquery-3.5.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
</body>
</html>