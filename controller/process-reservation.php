<?php 
include "../model/database.php";
$database = new Reservation("localhost:3306", "root", "", "bike_service_reservation_system");
    if($database->startConnection()){

    if(isset($_POST["submit"])){
        header("Location: ../view/confirm_reservation.php");
    }else{
      echo "bruh";
    }
    }
    else{
        echo"NOOOO";
    }
?>
