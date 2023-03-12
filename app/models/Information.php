<?php
class Information
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getEmail()
    {
        $this->db->query('SELECT i_email FROM db_blog.v_information LIMIT 1');
        $row = $this->db->single();
        return $row;
    }

    public function getMessage()
    {
        $this->db->query('SELECT i_message FROM db_blog.v_information LIMIT 1');
        $row = $this->db->single();
        return $row;
    }

    public function editInformation($data)
    {
        $this->db->query('UPDATE db_blog.t_information SET i_email = :i_email, i_message = :i_message WHERE i_id = 5');
        $this->db->bind(':i_email', $data['email']);
        $this->db->bind(':i_message', $data['message']);
        
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