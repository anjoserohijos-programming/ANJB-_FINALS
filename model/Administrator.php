<?php
require_once "database.php";
class Administrator extends BicyCleanDatabase{

    protected $admin_id = null;
    protected $username= null;
    protected $password = null;
    protected $full_name = null;
    protected $email_address = null;
    protected $contact_no = null;
    protected $home_address = null;
    protected $date_registered = null;
    protected $isLoggedIn = false;
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

    function addNewAdministrator(){

    }
    function login($username, $password){
        $sql = "SELECT * FROM administrator where username='$username' AND password='$password'";
        $result = mysqli_query($this->conn, $sql);
        $row = array();
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            $this->admin_id = $row["admin_id"];
            $this->username = $row["username"];
            $this->password = $row["password"];
            $this->full_name = $row["full_name"];
            $this->email_address = $row["email_address"];
            $this->contact_no = $row["contact_no"];
            $this->home_address = $row["home_address"];
            $this->date_registered = $row["date_registered"];
            $this->isLoggedIn = true;
        }
        else{
            $this->isLoggedIn = false;
        }
        return  $this->isLoggedIn;
    }
    function getAdminId(){
        if($this->isLoggedIn){
            return $this->admin_id;
        }else{
            return 0;
        }
    }
    function getUsername(){
        if($this->isLoggedIn){
            return $this->username;
        }else{
            return "0";
        }
    }
    function getFullName(){
        if($this->isLoggedIn){
            return $this->full_name;
        }else{
            return "0";
        }
    }
    function getEmail(){
        if($this->isLoggedIn){
            return $this->email_address;
        }else{
            return "0";
        }
    }

    function getContactNo(){
        if($this->isLoggedIn){
            return $this->contact_no;
        }else{
            return "0";
        }
    }

    function getHomeAddress(){
        if($this->isLoggedIn){
            return $this->home_address;
        }else{
            return "0";
        }
    }

    function getDateRegistered(){
        if($this->isLoggedIn){
            return $this->date_registered;
        }else{
            return "0";
        }
    }

    
}
?>