<?php
include "database.php";
class Reservation extends BicyCleanDatabase{
    
    function startConnection(){
        $this->conn=mysqli_connect($this->url,$this->username,$this->password,$this->dbName);
            if (!$this->conn) {
                return false;
            }else{
                return true;
            }
    }
    function closeConnection(){
        mysqli_close($this->conn);
    }
    function retrieveReservations(){

    }
    function addReservation($fullName, $email, $contactNo, $serviceType, $notes, $reservationDate, $timeslot){
        $sql = "INSERT INTO `reservations` (`reservation_id`, `full_name`, `email_address`, `contact_no`, `service_type`, `notes`, `reservation_date`, `time_slot`, `time`) VALUES (NULL, '$fullName', '$email', '$contactNo', '$serviceType', '$notes',  '$reservationDate', ' $timeslot', CURRENT_TIMESTAMP)";

        if($this->conn == true){
            if (mysqli_query($this->conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
              }
              echo "TRUE WHAHAHHA ";
        } else {
            echo "False";
        }
    }
}
?>