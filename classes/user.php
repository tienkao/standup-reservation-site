<?php
require "database.php";
class User extends Database{
    public function signUp($first_name, $last_name, $username, $email_address, $phone_number, $password){
    $password = password_hash($password, PASSWORD_DEFAULT);
    //sql query
    $sql = "INSERT INTO users (`first_name`, `last_name`, `username`, `email_address`, `phone_number`, `password`) VALUES ('$first_name', '$last_name', '$username', '$email_address', '$phone_number', '$password')";

    //execution
    if($this->conn->query($sql)){
        header("location: ../views/signin.php");
        exit;
    }else{
        die("Error signing up: " . $this->conn->error);
    }
}

    public function signIn($username, $password){
        $sql= "SELECT * FROM users WHERE username = '$username'";
        
        if($result = $this->conn->query($sql)){
            if($result->num_rows == 1){
                $user_row = $result->fetch_assoc();
                print_r($user_row);
                if(password_verify($password, $user_row['password'])){
                    session_start();

                    $_SESSION['user_id'] = $user_row['user_id'];
                    $_SESSION['username'] = $user_row['username'];
                    $_SESSION['role'] =$user_row['role'];

                    if($user_row['role'] == 'customer'){
                        header("location: ../views/show-lists.php");
                        exit;
                    }else{
                        header("location: ../views/staff-show-lists.php");
                        exit;
                    }
                    
                }else{
                    echo "<p> Incorrect Password.</p>";
                }
            }else{
                echo "<p> Incorrect username or email address.";
            }
        }else{
            die("Error: ". $this->conn->error);
        }
    }

}




?>