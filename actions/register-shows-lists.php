<?php

include "../classes/staff.php";

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


//object
$shows = new Shows;

//call the method
$shows->registerShows($show_date, $picture_name, $picture_tmp, $comedian_name, $title, $venue, $city_state, $country, $start_time, $information);



?>