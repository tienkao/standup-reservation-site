<?php
session_start();

include "../classes/staff.php";
include "../classes/seat.php";
include "../classes/reservation.php";
$shows = new Shows;
$show_row=$shows->getShowInfo($_GET['list_id']);

$seat = new Seat;
$seats_list = $seat->getAllSeats();

$res = new Reservation;
$reserved_seats_list = $res->getAllReservedSeats($_GET['list_id']);
$reserved_seats_indexed= [];
while($reserved_row = $reserved_seats_list->fetch_assoc()){
    array_push($reserved_seats_indexed, $reserved_row['seat_id']);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Reservation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
    <?php include "main-menu.php" ?>
    <div class="container">
        <div class="main pt-5">
            <h1>Reservation for <?= $show_row['title'] ?></h2>
            <form action="user-confirmation.php" method="post">
            <div class="row">
                <div class="col-8">
                    <p class="text-center lead mb-3 mt-3">Stage</p>
                        <div class="table-responsive-sm">
                            <table class="table table-border">
                            <?php
                                $i = 0;
                                
                                echo "<tr>";
                                while($seat_row = $seats_list->fetch_assoc()){
                                    $i++;
                                
                                    if(in_array($seat_row['seat_id'], $reserved_seats_indexed)){
                                        echo "<td class='bg-danger'>";
                                        echo "<input type='radio' name='seat_id' value='". $seat_row['seat_id']."' disabled>";
                                    } else {
                                        echo "<td>";
                                        echo "<input type='radio' name='seat_id' value='". $seat_row['seat_id']."' required>";
                                    }
                                    echo $seat_row['seat_id'];
                                    echo "</td>";
                                    if($i == 10){
                                        echo "</tr><tr>";
                                        $i = 0;
                                    }     
                                }

                                echo "<input type='hidden' name='list_id' value='". $_GET['list_id']."'>";
                            ?>
                                
                            </table>
                               
                            </div>
                        </div>
                    
                        
                <div class="col-2">
                    <p class="lead mb-3 mt-3">Seat Price</p>
                        <div class="table-responsive-sm">
                            <table class="table table-border">
                                <tbody>
                                    <tr>
                                        <td>Area A: $130</td>
                                    </tr>
                                    <tr>
                                        <td>Area B: $120</td>
                                    </tr>
                                    <tr>
                                        <td>Area C: $110</td>
                                    </tr>
                                    <tr>
                                        <td>Area D: $100</td>
                                    </tr>
                                    <tr>
                                        <td>Area E: $90</td>
                                    </tr>
                                    <tr>
                                        <td>Area F: $80</td>
                                    </tr>
                                    <tr>
                                        <td>Area G: $70</td>
                                    </tr>
                                </tbody>
                            </table>
                            <button type="submit" name="btn_order" class="btn btn-primary">Book a ticket</button>
                                <a href="user-show-detail.php?list_id=<?= $show_row['list_id'] ?>" class="btn btn-secondary">Back</a>
                        </div>
                </div>
            </div>
            </form> 
        </div>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>