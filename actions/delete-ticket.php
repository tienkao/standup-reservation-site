<?php
 include "../classes/reservation.php";

 $id = $_GET['id'];
 $reservation = new Reservation;
 $reservation->cancelTicket($id);



?>