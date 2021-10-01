<?php
require_once "db.php";

class Show extends Database {
    public function getAllShows(){
        $sql = "SELECT * FROM shows";
        $result = $this->conn->query($sql);
        return $result;
    }

    public function getShow($list_id){
        $sql = "SELECT * FROM shows WHERE id = $list_id";
        $result = $this->conn->query($sql);
        return $result->fetch_assoc();
    }