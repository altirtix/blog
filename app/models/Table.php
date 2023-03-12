<?php
class Table
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getData($table)
    {
        $this->db->query('SELECT * FROM '.$table.'');
        
        $result = $this->db->resultSet();
        
        return $result;
    }

    public function getDataSingle($table)
    {
        $this->db->query('SELECT * FROM '.$table.'');
        $row = $this->db->single();
        return $row;
    }
}