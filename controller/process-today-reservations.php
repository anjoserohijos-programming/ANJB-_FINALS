<?php

require_once "../model/Reservations.php";
$database = new Reservation("localhost:3306", "root", "", "bike_service_reservation_system");
$listTodayReservations = null;

if($database->startConnection())
     $listTodayReservations = $database->retrieveTodayReservations();
else echo "Error: Database failed to start.";
?>