<?php

require_once "../model/Administrator.php";
$database = new Administrator("localhost:3306", "root", "", "bike_service_reservation_system");
    if($database->startConnection()){
        if(isset($_POST["submit"])){
            extract($_POST);
            $test=  $database->login($username,$password);
            if($test == true){
                 header("Location: ../view/admin_dashboard.php");
            } else{
                header("Location: ../view/admin_login.php");
            }
        }
    }

?>