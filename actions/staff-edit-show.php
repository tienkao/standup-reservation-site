<?php
include "../classes/staff.php";

$list_id = $_POST['list_id'];
$show_date = $_POST['show_date'];
$picture_name = $_FILES['picture']['name'];
$picture_tmp = $_FILES['picture']['tmp_name'];
$comedian_name = $_POST['comedian_name'];
$title = $_POST['title'];
$venue = $_POST['venue'];
$city_state = $_POST['city_state'];
$country = $_POST['country'];
$start_time = $_POST['start_time'];
$information = $_POST['information'];
//print_r($_POST);
$shows = new Shows;
$shows->updateShowInfo($list_id, $show_date, $picture_name, $picture_tmp, $comedian_name, $title, $venue, $city_state, $country, $start_time, $information);




?>