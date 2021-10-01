<?php

session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <title>Complete reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">

    <style>
        i{
            font-size:200px;
        }
    </style>
  </head>
  <body>
    <?php include "main-menu.php"?>
    <div class="containter text-center mt-5">
    <h2 class="mt-3">Successfully Reserved!</h2>
    <i class="far fa-check-circle text-success mt-3"></i>
    <h3 class="mt-3">Thank you for your order!</h3>
    <a href="user-ticket.php" class="btn btn-outline-success mt-5">See your ticket information</a>
    <a href="user-show-list.php" class="btn btn-outline-primary mt-5">Explore more shows!</a>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>