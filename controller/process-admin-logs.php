<?
require_once "../model/Admin_Activity_Logs.php";
$database = new AdminActivityLogs("localhost:3306", "root", "", "bike_service_reservation_system");

if($database->startConnection()){
    
}
?>