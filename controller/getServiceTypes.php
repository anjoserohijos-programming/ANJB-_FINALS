<?php
require_once "model/ServiceTypes.php";
$database = new ServiceTypes("localhost:3306", "root", "", "bike_service_reservation_system");
$listServiceTypes = null;

if($database->startConnection()){
    $listServiceTypes = $database->retrieveServiceTypes();
    $database->addServiceType("Linkages Repacking","Repacks some links.");
}
else{
    echo "Error.";
}
?>