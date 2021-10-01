<?php
include "../classes/staff.php";

$list_id = $_GET['list_id'];

$shows = new Shows;
$shows->deleteShowInfo($list_id);



?>