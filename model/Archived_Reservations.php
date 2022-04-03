<?php
include "database.php";
class ArchivedReservations extends BicyCleanDatabase {

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

    function retrieveArchivedReservations(){
        $sql = "SELECT * FROM archived_reservations order by reservation_id desc";
        $result = mysqli_query($this->conn, $sql);
        $row = array();
        $allRows = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
            array_push($allRows, $row);
        }
        return $allRows;
    }

    
} 
?>