<?php

require_once "../model/Administrator.php";
$database = new Administrator("localhost:3306", "root", "", "bike_service_reservation_system");
    if($database->startConnection()){

        echo "hurray;;";
       $test=  $database->login("administrator1", "adminPassword2022");
        // echo "IS LOGGED IN? : ".$test;
        // echo $database->getAdminId()."<br>";
        // echo $database->getUsername()."<br>";
        // echo $database->getFullName()."<br>";
        // echo $database->getEmail()."<br>";
        // echo $database->getContactNo()."<br>";
        // echo $database->getHomeAddress()."<br>";
    }

?>