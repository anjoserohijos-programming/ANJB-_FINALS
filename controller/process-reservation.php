<?php 
require_once "../model/Reservations.php";
$database = new Reservation("localhost:3306", "root", "", "bike_service_reservation_system");
    if($database->startConnection()){
        if(isset($_POST["submit"])){
            extract($_POST);
            $database->addReservation($fullName, $email, $contactNo, $serviceType, $notes, $reservation_date, $timeslot);
            header("Location: ../view/confirm_reservation.php");
        }else{
            echo "Error: Dataset does not match to reservation paramters. Please try again.";
        }
    }
    else{
        echo "Error: Database failed to start.";
    }
?>
