<?php 
session_start();
include "../classes/reservation.php";

$reservation = new Reservation;
//$ticket_info = $reservation->getTicketInfo($_GET['id']);


?>

<!doctype html>
<html lang="en">
<head>
    <title>Cancel the ticket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <style>
     p.h4{
       margin-top: 50px;
     }
   </style>
  </head>
  <body>
      <?php include "main-menu.php"?>
      <div class="contaier mt-5 w-50 mx-auto">
        <h1>Cancel your ticket</h2>
        <p class="h4">Your ticket: </p>
        <p class="h3">
            Are you sure you want to cancel your ticket?
        </p>
        <div class="row">
            <div class="col">
                <a href="user-show-list.php" class="btn btn-primary w-50">CANCEL</a>
            </div>
            <div class="col">
            <a href="../actions/delete-ticket.php?id=<?= $_GET['id'] ?>" class="btn btn-danger w-50">DELETE</a>
            </div>
        </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>