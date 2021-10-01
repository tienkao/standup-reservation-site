<?php
session_start();
include "../classes/reservation.php";

$user_id= $_SESSION['user_id'];
$list_id= $_POST['list_id'];
$seat_id= $_POST['seat_id'];
$price= $_POST['price'];
//echo $user_id;
//print_r($_POST);
$reservation = new Reservation;
$reservation->registerReservation($user_id, $list_id, $seat_id, $price);




?>