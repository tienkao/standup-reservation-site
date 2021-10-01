<?php
require_once "database.php";

class Seat extends Database{
    //insertnall seats to database
    public function insertSeats(){
        $rows = ['A', 'B', 'C', 'D', 'E', 'F', 'G'];
        foreach($rows as $row){
            for($i = 1; i <= 10; $i++){
                $seat_id = $row . "" . $i;

                $sql = "INSERT INTO seats (seat_id) VALUES ('seat_id);";
                $this->conn->query($sql);
            }
        }
    }

    public function getAllSeats(){
        $sql = "SELECT * FROM seats";
        $result = $this->conn->query($sql);
        return $result;
    }
    
    public function getPrice($seat_id){
        if(substr($seat_id, 0, 1)== 'A'){
             return 130;
        }elseif(substr($seat_id, 0, 1) == 'B'){
            return 120;
        }elseif(substr($seat_id, 0, 1) == 'C'){
            return 110;
        }elseif(substr($seat_id, 0, 1) == 'D'){
            return 100;
        }elseif(substr($seat_id, 0, 1) == 'E'){
            return 90;
        }elseif(substr($seat_id, 0, 1) == 'F'){
            return 80;
        }else{
            return 70;
        }
       
    }
       
    
}




?>