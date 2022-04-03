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
    function retrieveTodayReservations(){
        $sql = "SELECT * FROM reservations where reservation_date like CURDATE()";
        $result = mysqli_query($this->conn, $sql);
        $row = array();
        $allRows = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
            array_push($allRows, $row);
        }
        return $allRows;
    }

    function retrieveNextReservations(){
        $sql = "SELECT * FROM reservations where reservation_date > CURDATE()";
        $result = mysqli_query($this->conn, $sql);
        $row = array();
        $allRows = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
            array_push($allRows, $row);
        }
        return $allRows;
    }

    function addReservation($fullName, $email, $contactNo, $serviceType, $notes, $reservationDate, $timeslot){
        $availableSlot = "SELECT COUNT(*) as available_slots from reservations where time_slot LIKE '%$timeslot' and reservation_date LIKE '%$reservationDate'";
        $res_available_slot = mysqli_query($this->conn, $availableSlot);
        $slotCount = mysqli_fetch_assoc($res_available_slot);
        echo $availableSlot."<br>";
        echo $slotCount["available_slots"];
         if($slotCount["available_slots"] < 6){
            $sql = "INSERT INTO `reservations` (`reservation_id`, `full_name`, `email_address`, `contact_no`, `service_type`, `notes`, `reservation_date`, `time_slot`, `time`) VALUES (NULL, '$fullName', '$email', '$contactNo', '$serviceType', '$notes',  '$reservationDate', ' $timeslot', CURRENT_TIMESTAMP)";

            if($this->conn == true){
                if (mysqli_query($this->conn, $sql)) {
                    return true;
                  } else {
                    return false;
                  }
            } else {
                return false;
            }
        }else return false;
       
    }

    function addArchivedReservation($reservation_id, $full_name, $email_address, $contact_no, $service_type, $notes, $reservation_date, $time_slot, $admin_id){
        $insertSql = "INSERT INTO `archived_reservations` (`reservation_id`, `full_name`, `email_address`, `contact_no`, `service_type`, `notes`, `reservation_date`, `time_slot`, `time`, `remarks`, `administered_by`) VALUES (NULL, '$full_name', '$email_address', '$contact_no', '$service_type', '$notes', '$reservation_date', '$time_slot', CURRENT_TIMESTAMP, 'ACCEPTED', '$admin_id')";
        $deleteSql = "DELETE FROM `reservations` where reservation_id = $reservation_id";
        if($this->conn == true){
            if (mysqli_query($this->conn, $insertSql)) {
                if(mysqli_query($this->conn, $deleteSql)){
                    return true;
                }
              } else {
                return false;
              }
        } else {
            return false;
        }
    }
}
?>