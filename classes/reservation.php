<?php
require_once "database.php";

class Reservation extends Database {

    public function getAllReservedSeats($list_id){
        $sql = "SELECT seat_id FROM reservations WHERE list_id = $list_id";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function registerReservation($user_id, $list_id, $seat_id, $price){
        $sql = "INSERT INTO reservations (`user_id`, `list_id`, `seat_id`, `price`) 
        VALUES ('$user_id', '$list_id', '$seat_id', '$price')";

        if($this->conn->query($sql)){
            header("location: ../views/complete-reservation.php");
            exit;
        }else{
            die("Error reserving the show: " . $this->conn->error);
        }
    }
   
    public function getReservations($user_id){
        $sql="SELECT shows.comedian_name AS comedian_name, shows.title AS title, shows.start_time AS start_time, shows.show_date AS date, shows.venue AS venue, reservations.list_id AS list_id, reservations.seat_id AS seat_id, reservations.price AS price
        FROM reservations
        INNER JOIN shows
        ON shows.list_id = reservations.list_id
        WHERE reservations.user_id = 1";
    
        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving the ticket information" . $this->conn->error);
        }
    }

    public function cancelTicket($id){

        $sql = "DELETE FROM reservations WHERE `id` = '$id'";

        if($this->conn->query($sql)){
            header("location: ../views/user-show-list.php");
            exit;
        }else{
            die("Error deleting your ticket reservation." . $this->conn->error);
        }
    }
}
