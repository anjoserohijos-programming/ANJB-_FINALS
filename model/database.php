<?php 

class BicyCleanDatabase{
    private $url;
    private $username;
    private $password;
    private $dbName;
    private $conn;

    function __construct($urls ,$usernames,$passwords, $dbNames){
        $this->url = $urls;
        $this->username = $usernames;
        $this->password = $passwords;
        $this->dbName = $dbNames;
    }

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
}
?>