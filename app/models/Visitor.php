<?php
class Visitor
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function setVisitor($ip)
    {
        $this->db->query('INSERT INTO db_blog.t_visitors(v_ip) VALUES (:v_ip)');
        $this->db->bind(':v_ip', $ip);
        
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

    public function editVisitor($data)
    {
        $this->db->query('UPDATE db_blog.t_visitors SET v_active = :v_active WHERE v_ip = :v_ip');
        $this->db->bind(':v_ip', $data['ip']);
        $this->db->bind(':v_active', $data['active']);
            
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

    public function getUniqueVisitorsCount()
    {
        $this->db->query('SELECT db_blog.f_unique_visitors_count()');
        
        $row = $this->db->single();

        return $row;
    }

    public function getVisitorsCount()
    {
        $this->db->query('SELECT db_blog.f_visitors_count()');
        
        $row = $this->db->single();

        return $row;
    }
}