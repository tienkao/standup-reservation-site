<?php
session_start();
include "../classes/staff.php";

$shows = new Shows;
$show_row = $shows->getShowInfo($_GET['list_id']);
$show_info = $show_row['comedian_name'] . "'s " . $show_row['title'];
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Delete Show Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
      <?php include "menu-for-staff.php"?>
      <div class="container w-50 mx-auto mt-5">
        <div class="card ">
            <div class="card-header border-0">
                <h2>Delete Show Information</h2>
            </div>
        </div>
        <div class="card-body">
            <p class="h3">Are you sure you want to delete <span class="text-decoration-underline"><?= $show_info ?></span>?</p>
        </div>
        <div class="row">
            <div class="col">
                <a href="staff-dashboard.php" class="btn btn-secondary w-50">CANCEL</a>
            </div>
            <div class="col">
            <a href="../actions/staff-delete-show.php?list_id=<?= $_GET['list_id'] ?>" class="btn btn-danger w-50">DELETE</a>
            </div>
        </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>