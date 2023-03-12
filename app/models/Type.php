<?php
class Type 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addType ($data)
    {
        $this->db->query('INSERT INTO db_blog.t_types (t_name, t_user) 
        VALUES (:t_name, :t_user)');
        
        $this->db->bind(':t_name', $data['name']);
        $this->db->bind(':t_user', $data['user']);
        
        //execute 
        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}