<?php

class AdminActivityLogs extends BicyCleanDatabase{

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

    function retrieveActivityLogs(){
        $sql = "SELECT * FROM admin_activity_logs";
        $result = mysqli_query($this->conn, $sql);
        $row = array();
        $allRows = array();
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result))
            array_push($allRows, $row);
        }
        return $allRows;
    }

    function addActivityLog($admin_id, $activity){
        
    }
}



?>