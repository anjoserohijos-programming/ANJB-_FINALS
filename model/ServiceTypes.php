<?php
include "database.php";

class ServiceTypes extends BicyCleanDatabase{

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

    function retrieveServiceTypes(){
        $sql = "SELECT * FROM service_types";
        $result = mysqli_query($this->conn, $sql);
        $row = array("service_id"=>"0", "service_name"=>"N/A", "service_description"=>"N/A");
        $allRows = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
            array_push($allRows, $row);
        }
        return $allRows;
    }

    function addServiceType($serviceName, $serviceDescription){
        $sql = "INSERT INTO `service_types` (`service_id`, `service_name`, `service_description`) VALUES (NULL, '$serviceName', '$serviceDescription')";
        if($this->conn == true){
            if (mysqli_query($this->conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              echo "TRUE WHAHAHHA ";
        } else {
            echo "False";
        }
    }
}
?>