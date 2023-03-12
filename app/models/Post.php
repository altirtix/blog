<?php
class Post 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPosts()
    {
        $this->db->query('SELECT * FROM db_blog.v_posts WHERE p_active = :p_active');
        
        $this->db->bind(':p_active', true);

        $result = $this->db->resultSet();
        
        return $result;
    }

    public function getPostById($id)
    {
        $this->db->query('SELECT * FROM db_blog.v_posts WHERE p_id = :id');
        
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function addPost($data)
    {
        $this->db->query('INSERT INTO db_blog.t_posts (p_name, p_desc, p_img, p_category, p_type, p_user, p_text, p_resource) 
        VALUES (:p_name, :p_desc, :p_img, :p_category, :p_type, :p_user, :p_text, :p_resource)');
        
        $this->db->bind(':p_name', $data['name']);
        $this->db->bind(':p_desc', $data['desc']);
        $this->db->bind(':p_img', $data['img']);
        $this->db->bind(':p_category', $data['category']);
        $this->db->bind(':p_type', $data['type']);
        $this->db->bind(':p_user', $data['user']);
        $this->db->bind(':p_text', $data['text']);
        $this->db->bind(':p_resource', $data['resource']);
        
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

    public function editPost($data)
    {
        $this->db->query('UPDATE db_blog.t_posts SET p_active = :p_active WHERE p_name = :p_name');
        $this->db->bind(':p_name', $data['name']);
        $this->db->bind(':p_active', $data['active']);
            
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

    public function getPostsByQuery($query)
    {
        $this->db->query('SELECT * FROM db_blog.f_find_posts_by_query(:query)');
        $this->db->bind(':query', $query);
        
        $result = $this->db->resultSet();
        
        return $result;
    }

    public function getPostsByUser($user)
    {
        $this->db->query('SELECT * FROM db_blog.f_find_posts_by_user(:user)');
        $this->db->bind(':user', $user);
        
        $result = $this->db->resultSet();
        
        return $result;
    }

    public function getPostsCount($active)
    {
        $this->db->query('SELECT db_blog.f_posts_count(:active)');
        $this->db->bind(':active', $active);
        
        $row = $this->db->single();

        return $row;
    }

    public function getPostsByFilters($category, $type)
    {
        $this->db->query('SELECT * FROM db_blog.f_filter_posts(:category, :type)');
        $this->db->bind(':category', $category);
        $this->db->bind(':type', $type);
        
        $result = $this->db->resultSet();
        
        return $result;
    }

    public function getPostsByPaginator($start, $perPage)
    {
        $this->db->query('SELECT * FROM db_blog.v_posts LIMIT :start OFFSET :perPage;');
        $this->db->bind(':start', $start);
        $this->db->bind(':perPage', $perPage);
        
        $result = $this->db->resultSet();
        
        return $result;
    }
}