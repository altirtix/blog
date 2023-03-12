<?php
class Mark
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addMark($data)
    {
        $this->db->query('INSERT INTO db_blog.t_marks (m_ip, m_state) 
        VALUES (:m_ip, :m_state)');

        $this->db->bind(':m_ip', $data['ip']);
        $this->db->bind(':m_state', $data['state']);
        
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

    public function getMarksCount($active)
    {
        $this->db->query('SELECT db_blog.f_marks_count(:active)');
        $this->db->bind(':active', $active);
        
        $row = $this->db->single();

        return $row;
    }
}