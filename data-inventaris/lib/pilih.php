<?php
include_once(__DIR__ . "/../conf/Config.php");
include_once(__DIR__ . "/DB.php");

class pilih
{
    private $dtTbl    = 'tb_inventaris';

    function __construct()
    {
        if (!isset($this->db)) {
            // Connect to the database
            $db = new DB();
            $this->db = $db->db;
        }
    }

    function GetAll()
    {
      
        $prevQuery = "SELECT * FROM " . $this->dtTbl . " ";
        $result = $this->db->query($prevQuery);
        $results_array = array();
        while ($row = $result->fetch_assoc()) {
            $results_array[] = $row;
        }
        return $results_array;
    }
}
