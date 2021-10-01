<?php
session_start();
include "../classes/staff.php";

$shows = new Shows;
$show_row = $shows->getShowInfo($_GET['list_id']);

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Edit Show List</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      button{
        margin-left: 130px;
      }
    </style>
  </head>
  <body>
      <?php include "menu-for-staff.php" ?>
      <main class="container">
          <div class="card m-5 w-75 mx-auto">
              <div class="card-header bg-info">
                  <h2>Edit Show's Information</h2>
              </div>
              <div class="card-body">
                <form action="../actions/staff-edit-show.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="list_id" value="<?= $show_row['list_id'] ?>">

                  <label for="show-date" class="form-label">Show's date</label>
                  <input type="date" class="form-control mb-3" name="show_date" value="<?= $show_row['show_date'] ?>">

                  <label for="picture" class="form-label d-block">Picture</label>
                  <img src="../img/<?= $show_row['picture'] ?>" alt="" width="30%">
                  <input type="file" name="picture" id="picture" class="form-control mb-3">
                  
                  <label for="comedian-name" class="form-label">Comedian</label>
                  <input type="text" name="comedian_name" class="form-control mb-3" id="comedian-name" value="<?= $show_row['comedian_name'] ?>">

                  <label for="title" class="form-label">Title of the show</label>
                  <input type="text" name="title" class="form-control mb-3" value="<?= $show_row['title']?>">

                  <label for="venue" class="form-label">Venue</label>
                  <input type="text" name="venue" class="form-control mb-3" value="<?= $show_row['venue'] ?>">

                  <label for="city-state" class="form-label">City, State</label>
                  <input type="text" name="city_state" class="form-control mb-3" value="<?= $show_row['city_state'] ?>">

                  <label for="country" class="form-label">Country</label>
                  <input type="text" name="country" class="form-control mb-3" value="<?= $show_row['country'] ?>">

                  <label for="start_time" class="form-label">Set the time of the beginning</label>
                  <input type="time" name="start_time" class="form-control mb-3" value="<?= $show_row['start_time'] ?>">

                  <label for="information" class="form-label">Details of the show</label>
                  <textarea name="information" cols="50" rows="10" class="mb-3 form-control"><?= $show_row['information'] ?></textarea>


                  <div class="row">
                    <div class="col-6">
                      <a href="staff-dashboard.php" class="btn btn-warning py-2 fs-5 w-50">Cancel</a>
                    </div>
                    <div class="col-6">
                     <button type="submit" name="btn_save" class="btn btn-success py-2 fs-5 w-50">Save</button>
                    </div>
                  </div>
                  
                </form>
              </div>
          </div>
      </main>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>