<?php
session_start();

include "../classes/staff.php";

$shows = new Shows;
$show_list = $shows->getAllShows();

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Show List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <style>
      body{
      background-image: url("../img/red-curtain.jpg");
      background-size: cover;
      background-attachment: fixed;
      background-position: center center;
    }
    .contents{
      background:white;
      border-radius:4px;
    }
   
  </style>
  </head>
  <body>
    <?php include "main-menu.php" ?>
    <main class="container pt-5">
      <div class="contents p-3">
        <h2 class="mb-5 mt-3">Show Lists</h2>
        <div class="row">
            <table class="table table-hover align-middle">
                <thead>
                <tr>
                    <th></th>
                    <th>Date</th>
                    <th style=width:200px;>Picture</th>
                    <th>Comedian</th>
                    <th>Title</th>
                    <th>Venue</th>
                    <th>Start at</th>
                    <th></th>
                  </thead>
                <?php
                while($show_row = $show_list->fetch_assoc()){
                ?>
                <tr>
                    <td><input type="hidden" name="list_id" value="<?= $show_row['list_id'] ?>"></td>
                    <td><?= $show_row['show_date'] ?></td>
                    <td><img src="../img/<?= $show_row['picture']?>" alt="" width=100%></td>
                    <td><?= $show_row['comedian_name'] ?></td>
                    <td><?= $show_row['title'] ?></td>
                    <td><?= $show_row['venue'] . ", " . $show_row['city_state']?></td>
                    <td><?= $show_row['start_time'] ?></td>
                    <td><a href="user-show-detail.php?list_id=<?= $show_row['list_id'] ?>" class="btn btn-danger">Show Details</a></td>
                   
                </tr>
                <?php
                    }
                ?>
                    
              </div>
            </table>
        </div>
      </div>
    </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>