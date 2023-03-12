<?php
class Feedback
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addFeedback($data)
    {
        $this->db->query('INSERT INTO db_blog.t_feedback (f_name, f_email, f_message) 
        VALUES (:f_name, :f_email, :f_message)');

        $this->db->bind(':f_name', $data['name']);
        $this->db->bind(':f_email', $data['email']);
        $this->db->bind(':f_message', $data['message']);
        
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