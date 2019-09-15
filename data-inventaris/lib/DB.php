<?php
include_once(__DIR__ . "/../conf/Config.php");
class DB{
    private $dbHost     = DBHOST;
    private $dbUsername = DBUSERNAME;
    private $dbPassword = DBPASSWORD;
    private $dbName     = DBNAME;
    function __construct()
    {
        if (!isset($this->db)) {
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if ($conn->connect_error) {
                die("Gagal Melakukan Koneksi ke MySQL: " . $conn->connect_error);
            } else {
                $this->db = $conn;
            }
        }
    }     

}