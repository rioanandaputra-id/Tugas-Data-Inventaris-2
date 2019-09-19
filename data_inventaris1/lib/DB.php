<?php
include_once (__DIR__ . '/../conf/Config.php');
class DB {
    private $host  = DB_HOST;
    private $user  = DB_USER;
    private $passwd = DB_PASSWORD;
    private $dbname    = DB_NAME;

    public $db = null;

    function __construct(){
        if ($this->db == null) {
            $conn = new mysqli($this->host,
            $this->user,
            $this->passwd,
            $this->dbname);

            if ($conn->connect_error){
                die ("Gagal melakukan koneksi 
                ke MYSQL".$conn->connect_error);
            } else {
                // echo "koneksi sukses";
                $this->db = $conn;
            }
        }
    }
}