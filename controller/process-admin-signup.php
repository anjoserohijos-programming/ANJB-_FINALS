<?php
require_once "../model/Administrator.php";
$database = new Administrator("localhost:3306", "root", "", "bike_service_reservation_system");
    if($database->startConnection()){
        if(isset($_POST["submit"])){
            extract($_POST);
            $database->addNewAdministrator($username, $password, $full_name, $email_address, $contact_no, $home_address);
            header("Location: ../view/admin_login.php");
        }
    }
?>