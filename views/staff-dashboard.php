<?php
session_start();

include "../classes/staff.php";

$shows = new Shows;
$show_list = $shows->getAllShows();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <style>
   
  </style>
  </head>
  <body>
    <?php include "menu-for-staff.php" ?>
    <main class="container">
        <h2 class="mt-3">Show Lists</h2>
        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th>ID</th>
                    <th style="width: 120px;">Date</th>
                    <th style="width:170px;">Picture</th>
                    <th>Comedian</th>
                    <th>Title</th>
                    <th>Venue</th>
                    <th>Start at</th>
                    <th>Information</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                <?php
                while($show_row = $show_list->fetch_assoc()){
                ?>
                <tr>
                    <td><?= $show_row['list_id'] ?></td>
                    <td><?= $show_row['show_date'] ?></td>
                    <td><img src="../img/<?= $show_row['picture']?>" alt="" width="100%"></td>
                    <td><?= $show_row['comedian_name'] ?></td>
                    <td><?= $show_row['title'] ?></td>
                    <td><?= $show_row['venue'] . ", " . $show_row['city_state']?></td>
                    <td><?= $show_row['start_time'] ?></td>
                    <td><?= $show_row['information'] ?></td>
                    <td><a href="staff-edit-show.php?list_id=<?= $show_row['list_id'] ?>" class="btn btn-outline-primary"><i class="fas fa-pencil-alt"></i></a></td>
                    <td><a href="staff-delete-show.php?list_id=<?= $show_row['list_id'] ?>" class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php
                    }
                ?>
                    
                    
            </table>
        </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>