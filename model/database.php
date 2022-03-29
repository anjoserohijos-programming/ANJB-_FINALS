<?php 

abstract class BicyCleanDatabase{
    protected $url;
    protected $username;
    protected $password;
    protected $dbName;
    protected $conn;

    function __construct($urls ,$usernames, $passwords, $dbNames){
        $this->url = $urls;
        $this->username = $usernames;
        $this->password = $passwords;
        $this->dbName = $dbNames;
    }
    abstract function startConnection();
    abstract function closeConnection();
}
?>