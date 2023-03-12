<?php
class Category 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addCategory($data)
    {
        $this->db->query('INSERT INTO db_blog.t_categories (c_name, c_user) 
        VALUES (:c_name, :c_user)');
        
        $this->db->bind(':c_name', $data['name']);
        $this->db->bind(':c_user', $data['user']);
        
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