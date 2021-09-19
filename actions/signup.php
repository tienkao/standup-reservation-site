<?php
include "../classes/user.php"; 

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$username = $_POST['username'];
$email_address = $_POST['email_address'];
$phone_number = $_POST['phone_number'];
$password = $_POST['password'];


//object
$user = new User;

//call the method
$user->signUp($first_name, $last_name, $username, $email_address, $phone_number, $password);


?>