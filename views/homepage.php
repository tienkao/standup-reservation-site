<!doctype html>
<html lang="en">
  <head>
    <title>StandUp Reservation Homepage
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap" rel="stylesheet">
<style>
  body{
    background-image: url("../img/standup.jpg");
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
  }
  h1{
    color: white
  }
  p{
    color: white;
  }
  h1.special{
    font-family: 'Merriweather', serif;
    font-size: 110px;
    margin-top: 60px
    
  }
  h1.standup{
    font-size:70px;
    font-family: 'Merriweather', serif;
  }
 
  p.sentence{
   padding-left: 70px;

  }
  .sign-in{
    padding-top: 280px;
    padding-left: 80px;
  }
  
  button{
    margin-left:180px;
    padding: 10px 15px;
    font-size: 25px;
    border-radius: 15px;
    border: black;
    background: white;
  }
  a.button{
    text-decoration: none;
    color:black;
    font-family: 'Merriweather', serif;

  }
  p.create{
    padding-left: 90px;
  }
</style>
  </head>
  <body>
    
  <?php include "main-menu-1.php" ?>
  <div class="container">
    <div class="row" style="height: 500px">
      <div class="col-7 mt-5">
        <h1 class=" special">Special Night </h1>
        <h1 class="standup text-end mt-4">with Standup</h1>
      </div>
      <div class="col-5 sign-in">
        <button type="submit"><a href="signin.php" class="button">Sign in</a></button>

       <p class="text-center fs-5"> create an <a href="signup.php">account?</a></p>
      </div>
        <div class="w-50">
          <p class="lead mt-3  sentence"> Open the door to the special fun night with standup comedy! We have great standup comedy shows' lists. You'll definetely find shows you wanna go! Get a ticket for a greatest night! </p>
        </div>
    </div>
  </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>