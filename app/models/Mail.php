<?php
class Mail 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addMail($data)
    {
        $this->db->query('INSERT INTO db_blog.t_mails (m_email) 
        VALUES (:m_email)');
        
        $this->db->bind(':m_email', $data['email']);
        
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