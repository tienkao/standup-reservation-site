<?php
session_start();
include "../classes/staff.php";

$shows = new Shows;
$show_row = $shows->getShowInfo($_GET['list_id']);

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Show Details</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <style>
        img{
            border-radius: 4px;
            box-shadow: 4px 15px 17px grey;
        }
        body{
            background-image: url("../img/curtain.jpg");
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            color: white;
        }
        
        th{
            padding-top:15px;
           
        }
        th.name{
            font-size: 80px;
            padding-top:0;
            text-shadow: 3px, 3px, 3px;
        }
        th.info{
            padding-top:20px;
            margin-bottom:20px;
            
        }
        table{
            margin-left:20px;
        }
        
        button{
            margin-left:250px;
            
        }
        a.btn{
            margin-left:250px;
        }
        
    </style>
  </head>
  <body>
    <?php include "main-menu.php" ?>
    <div class="container">
        <div class="main mt-5">
            <div class="row">
                <div class="col-6">
                    <img src="../img/<?= $show_row['picture'] ?>" alt="picture of <?=$show_row['comedian_name'] ?>" class="w-100">
                </div>
                <div class="col-6 detail">
                    <table>
                       <tr>
                           <th class="name"><?= $show_row['comedian_name']?></th>
                       </tr>
                       <tr>
                           <th class="info"><?= $show_row['information'] ?></th>
                       </tr>
                       <tr>
                           <th class=anounce><p>This standUp show is going to be held on <?= $show_row['show_date'] . " at " . $show_row['start_time'] . ". ". $show_row['comedian_name'] . " is waiting for you at ". $show_row['venue'] . ", " .$show_row['city_state']?>!</p></th>
                       </tr>
                       <tr>
                           <th>
                               <a href="user-seat.php?list_id=<?= $show_row['list_id'] ?>">
                               <button class="btn btn-success py-2 px-3" type="submit">
                                   Get tickets!</button></a>
                           </th>
                       </tr>
                       <tr>
                           <th>
                               <a href="user-show-list.php" class="btn btn-primary py-1 px-4"><i class="fas fa-arrow-circle-left"></i> Back</a>
                               </th>
                           </tr>
                       
                        

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>