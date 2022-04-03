<?php

require_once "../model/Archived_Reservations.php";
$database = new ArchivedReservations("localhost:3306", "root", "", "bike_service_reservation_system");
$listArchivedReservations = null;

if($database->startConnection())
     $listArchivedReservations = $database->retrieveArchivedReservations();
else echo "Error: Database failed to start.";
?>