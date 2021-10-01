<?php
session_start();

include "../classes/staff.php";
include "../classes/reservation.php";

$reservation = new Reservation;
$reservation_list = $reservation->getReservations($_SESSION['user_id']);
echo $_SESSION['user_id'];
print_r($reservation_list);
//$shows = new Shows;
//$ticket_info = $shows->getShowInfo($list_id);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Ticket information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <?php include "main-menu.php"?>
    <div class="container">
        <h2 class="mt-5">Here's your ticket information</h2>
    </div>
    <form action="">
    <table class="mx-auto">
    <?php
    while($reservation_row = $reservation_list->fetch_assoc()){
        print_r($reservation_row);
    ?>
        <tr>
            <td class="text-lead">Comedian: <?= $show_row['comedian_name'] ?> </td>
        </tr> 
        <tr>
            <td class="text-lead">Title: <?= $show_row['title'] ?></td>
        </tr>
        <tr>
            <td class="text-lead">Date & Time: <?= $show_row['show_date'] . ", " . $show_row['start_time'] ?></td>
        </tr>
        <tr>
            <td class="text-lead">Venue: <?= $show_row['venue'] ?></td>
        </tr>
        <tr>
            <td class="text-lead">Your seat: <?= $show_row['seat_id'] ?></td>
        </tr>
        <?php
         }
        ?>
        <tr>
            <td>Have a great night!</td>
        </tr>
    </table>
    </form>
    <a href="ticket-delete.php?list_id=<?= $show_row['list_id'] ?>" class="btn btn-outline-danger">Cancel the ticket</a>
    <a href="ticket-edit.php?list_id=<?= $show_row['list_id'] ?>" class="btn btn-outline-success">Change the seat</a>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>