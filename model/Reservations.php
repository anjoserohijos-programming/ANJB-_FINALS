<?
include "database.php"
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
    function addReservation(){

    }
}
?>