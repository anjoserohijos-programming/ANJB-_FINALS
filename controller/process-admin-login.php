<?php
session_start();
require_once "../model/Administrator.php";

$database = new Administrator("localhost:3306", "root", "", "bike_service_reservation_system");
    if($database->startConnection()){
        if(isset($_POST["submit"])){
            extract($_POST);
            $test= $database->login($username,$password);
            if($test == true){
                $_SESSION["s_AdminId"] = $database->getAdminId();
                $_SESSION["s_Username"] = $database->getUsername();
                $_SESSION["s_FullName"] = $database->getFullName();
                $_SESSION["s_Email"] = $database->getEmail();
                $_SESSION["s_ContactNo"] = $database->getContactNo();
                $_SESSION["s_HomeAddress"] = $database->getHomeAddress();
                $_SESSION["s_DateRegistered"] = $database->getDateRegistered();
                $_SESSION["isLoggedIn"] = true;
                 header("Location: ../view/admin_dashboard.php");
            } else{
                header("Location: ../view/admin_login.php");
            }
        }
    }

?>