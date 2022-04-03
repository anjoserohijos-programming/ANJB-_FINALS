<?php

require_once "../model/Reservations.php";
$database = new Reservation("localhost:3306", "root", "", "bike_service_reservation_system");
$listNextReservations = null;

if($database->startConnection())
     $listNextReservations = $database->retrieveNextReservations();
else echo "Error: Database failed to start.";
?>