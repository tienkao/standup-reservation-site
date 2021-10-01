<?php

session_start();
include "../classes/staff.php";
include "../classes/seat.php";
include "../classes/reservation.php";

$list_id = $_POST['list_id'];
$seat_id = $_POST['seat_id'];

$shows = new Shows;
$show_row = $shows->getShowInfo($list_id);

$seat = new Seat;
$price = $seat->getPrice($seat_id);




?>



<!doctype html>
<html lang="en">
  <head>
    <title>Confirmation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <?php include "main-menu.php"?>
      <div class="container mx-auto mt-5">
      <h2>Seat Confirmation</h2>
      
          <div class="text-center lead">
            <form action="../actions/complete-reservation.php" method="post">
              <input type="hidden" name="list_id" value="<?= $show_row['list_id'] ?>">
              <input type="hidden" name="seat_id" value="<?= $seat_id ?>">
              <input type="hidden" name="price" value="<?= $price ?>">

              <p class="mt-5">Show : <?= $show_row['title'] ?> </p>
              <p>Date : <?= $show_row['show_date'] ?></p>
              <p>Time : <?= $show_row['start_time'] ?></p>
              <p class="fw-bold">Seat : <?= $seat_id ?></p>
              <p class="fw-bold">Price : <?= $price ?></p>
              <button class="btn btn-primary px-5" type="submit">Confirm</button>   
              <a class="btn btn-danger" href="user-seat.php?list_id=<?= $show_row['list_id'] ?>">Cancel</a>
            </form>

          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>