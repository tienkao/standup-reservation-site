<?php
include "../classes/user.php";

$username = $_POST['username'];
$password = $_POST['password'];

$user = new User;
$user->signIn($username, $password);


?>