<?php
session_start();

include "../classes/staff.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Register Shows Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <?php include "menu-for-staff.php" ?>
      <div class="container">
          <div class="card w-50 mx-auto my-5">
              <div class="card-header bg-info">
                  <h2 >Shows information</h2>
              </div>
              <div class="card-body">
                <form action="../actions/register-shows-lists.php" method="post" enctype="multipart/form-data">

                  <label for="date" class="form-label">Date</label>
                  <input type="date" class="form-control mb-3" name="show_date">

                  <label for="picture" class="form-label">Upload picture</label>
                  <input type="file" name="picture" id="picture" class="form-control mb-3">

                  <label for="comedian_name" class="form-label">Comedian</label>
                  <input type="text" name="comedian_name" class="form-control mb-3" placeholder="Comedian's name">

                  <label for="title" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control mb-3" placeholder="Title of the show">

                  <label for="venue" class="form-label">Venue</label>
                  <input type="text" name="venue" class="form-control mb-3" placeholder="Venue">

                  <label for="city&state" class="form-label">city_state</label>
                  <input type="text" name="city_state" class="form-control mb-3" placeholder="City and state">

                  <label for="country" class="form-label">Country</label>
                  <input type="text" name="country" class="form-control mb-3" placeholder="Country">

                  <label for="start_time" class="form-label">Set the time of the beginning</label>
                  <input type="time" name="start_time" class="form-control mb-3">

                  <label for="information" class="form-label">Information</label>
                  <textarea name="information" cols="50" rows="10" class="mb-3 form-control" placeholder="Information of the show"></textarea>
                  <button type="submit" name="btn_register" class="btn btn-success py-2 fs-5 w-100">Register</button>
                </form>
                
              </div>
          </div>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>