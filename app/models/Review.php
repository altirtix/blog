<?php
class Review 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getReviewsByPost($id)
    {
        $this->db->query('SELECT * FROM db_blog.v_reviews WHERE p_id = :p_id AND r_active = :r_active LIMIT 5');
        
        $this->db->bind(':p_id', $id);
        $this->db->bind(':r_active', true);

        $result = $this->db->resultSet();
        
        return $result;
    }

    public function addReview($data)
    {
        $this->db->query('INSERT INTO db_blog.t_reviews (r_user, r_post, r_message) 
        VALUES (:r_user, :r_post, :r_message)');
        
        $this->db->bind(':r_user', $data['user']);
        $this->db->bind(':r_post', $data['post']);
        $this->db->bind(':r_message', $data['message']);
        
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

    public function editReview($data)
    {
        $this->db->query('UPDATE db_blog.t_reviews SET r_active = :r_active WHERE r_message = :r_message');
        $this->db->bind(':r_message', $data['message']);
        $this->db->bind(':r_active', $data['active']);
            
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