<?php
class User 
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query('SELECT * FROM db_blog.t_users WHERE u_id = :id');
        
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    //register new user
    public function setUser($data)
    {
        $this->db->query('INSERT INTO db_blog.t_users (u_name, u_email, u_login, u_password) 
        VALUES (:u_name, :u_email, :u_login, :u_password)');

        $this->db->bind(':u_name', $data['name']);
        $this->db->bind(':u_email', $data['email']);
        $this->db->bind(':u_login', $data['login']);
        $this->db->bind(':u_password', $data['password']);

        if($this->db->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function getUser($login, $password)
    {
        $this->db->query('SELECT * FROM db_blog.t_users where u_login = :login and u_active = :active');

        $this->db->bind(':login', $login);
        $this->db->bind(':active', true);
       
        $row = $this->db->single();

        $hash_password = $row->u_password;

        if(password_verify($password, $hash_password))
        {
            return $row;
        }
        else
        {
            return false;
        }
    }

    public function isAdmin($login)
    {
        $this->db->query('SELECT * FROM db_blog.t_users where u_login = :login and u_admin = :admi');

        $this->db->bind(':login', $login);
        $this->db->bind(':admi', true);
       
        $row = $this->db->single();

        if($row != null)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function editUser($data)
    {
        $this->db->query('UPDATE db_blog.t_users SET u_admin = :u_admin, u_active = :u_active WHERE u_login = :u_login');
        $this->db->bind(':u_login', $data['login']);
        $this->db->bind(':u_admin', $data['admin']);
        $this->db->bind(':u_active', $data['active']);

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

    public function getUsersCount($active)
    {
        $this->db->query('SELECT db_blog.f_users_count(:active)');
        $this->db->bind(':active', $active);
        
        $row = $this->db->single();

        return $row;
    }

}