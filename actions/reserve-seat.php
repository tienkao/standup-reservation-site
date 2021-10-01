<?php
session_start();

include "../classes/reservation.php";

$user_id = $_SESSION['user_id'];
$show_id = $_POST['list_id'];
$seat_id = $_POST['seat_id'];

$res = new Reservation;
$res->createReservation($user_id, $list_id, $seat_id);