<!doctype html>
<html lang="en">
  <head>
    <title>Sign In</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body{
      background-image: url("../img/laugh.jpg");
      background-size: 1500px;
      background-attachment: fixed;
      background-position: center center;
    }
  </style>
  </head>
  <body>
  <?php include "main-menu-1.php" ?>
      <div class="container w-25 mx-auto mt-5 text-light">
          <div class="card ">
              <div class="card-body">
                  <div class="pb-5">
                      <h1 class="text-dark">Sign In</h1>
                  </div>
          <form action="../actions/signin.php" method="post">
              
              
                  <input type="text" name="username" class="form-control mb-3 border-top-0 border-end-0 border-start-0 rounded-0" placeholder="Username">
                     
                  <input type="password" name="password" class="form-control mb-3 border-top-0 border-end-0 border-start-0 rounded-0" placeholder="Password" minlength="8" maxlenght="15">
            
              <button type="submit" class="btn btn-danger w-100">Sign In</button>
             </form>
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>