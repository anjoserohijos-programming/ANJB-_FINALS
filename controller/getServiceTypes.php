<?php
require_once "model/database.php";
$database = new BicyCleanDatabase("localhost:3306", "root", "", "bike_service_reservation_system");
$listServiceTypes = null;

if($database->startConnection()){
    $listServiceTypes = $database->getServiceTypes();
}
else{
    echo "Error.";
}

?>