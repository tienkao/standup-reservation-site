<?php
require "database.php";
class Shows extends Database{
    public function registerShows($show_date, $picture_name, $picture_tmp, $comedian_name, $title, $venue, $city_state, $country, $start_time, $information){

        $title = $this->conn->real_escape_string($title);
        $venue = $this->conn->real_escape_string($venue);
        $city_state = $this->conn->real_escape_string($city_state);
        $information = $this->conn->real_escape_string($information);

        $sql = "INSERT INTO shows (`show_date`,`comedian_name`, `title`, `venue`, `city_state`, `country`, `start_time`, `information`)
        VALUES ('$show_date', '$comedian_name', '$title', '$venue', '$city_state', '$country', '$start_time', '$information')";

        //execution
        if($this->conn->query($sql)){
            if(!empty($picture_name)){
                $list_id = $this->conn->insert_id;

                $sql_picture = "UPDATE shows SET picture = '$picture_name' WHERE list_id = '$list_id'";

                $this->conn->query($sql_picture);
            
                if($this->conn->error){
                    die("Error: " . $this->conn->error);
                }
                $destination = "../img/$picture_name";
                move_uploaded_file($picture_tmp, $destination);
            }

            header("location: ../views/staff-dashboard.php");
            exit;
        }else{
            die("Error register show's information: " . $this->conn->error);
        }
    }

    public function getAllShows(){
        $sql = "SELECT * FROM shows";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die("Error retrieving all shows: " . $this->conn->error);
        }
    }

    public function getShowInfo($list_id){
        $sql = "SELECT * FROM shows WHERE `list_id` = '$list_id'";

        if($result = $this->conn->query($sql)){
           return $result->fetch_assoc();
        }else{
            die("Error retrieving the show information" . $this->conn->error);
        }
    }

    public function updateShowInfo($list_id, $show_date,$picture_name, $picture_tmp, $comedian_name, $title, $venue, $city_state, $country, $start_time, $information){
        
        $comedian_name = $this->conn->real_escape_string($comedian_name);
        $title = $this->conn->real_escape_string($title);
        $venue = $this->conn->real_escape_string($venue);
        $city_state = $this->conn->real_escape_string($city_state);
        $information = $this->conn->real_escape_string($information);
        
        $sql = "UPDATE shows SET `show_date` = '$show_date', `comedian_name` = '$comedian_name', `title` = '$title', `venue`= '$venue', `city_state`= '$city_state', `country`= '$country', `start_time`= '$start_time', `information`= '$information' WHERE `list_id` = $list_id";

        if($this->conn->query($sql)){
            if(!empty($picture_name)){

                $sql_picture = "UPDATE shows SET picture = '$picture_name' WHERE list_id = '$list_id'";

                $this->conn->query($sql_picture);
            
                if($this->conn->error){
                    die("Error: " . $this->conn->error);
                }
                $destination = "../img/$picture_name";
                move_uploaded_file($picture_tmp, $destination);
            }
            header("location: ../views/staff-dashboard.php");
            exit;
        }else{
            die("Error updating show information: " . $this->conn->error);
        }
    }

    public function deleteShowInfo($list_id){

        $sql = "DELETE FROM shows WHERE `list_id` = '$list_id'";

        if($this->conn->query($sql)){
            header("location: ../views/staff-dashboard.php");
            exit;
        }else{
            die("Error deleting show information" . $this->conn->error);
        }
    }

   

}



?>