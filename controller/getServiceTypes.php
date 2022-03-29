<?php
require_once "model/database.php";
$database = new BicyCleanDatabase("localhost:3306", "root", "", "bike_service_reservation_system");
$listServiceTypes = null;
//SELECT * FROM `service_types`
if($database->startConnection()){
    $listServiceTypes = $database->getServiceTypes();
}
else{
    echo "Error.";
}

?>