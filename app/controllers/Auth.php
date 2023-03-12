<?php
class Auth extends Controller
{
    public function __construct()
    {
        if(isLoggedIn())
        {
          redirect('posts/read_posts');
        }
        $this->userModel = $this->model('User');
    }

    public function sign_up()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

            $data = [
                'name' => trim($_POST['name']),
                'login' => trim($_POST['login']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];
            
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
            
            if($this->userModel->setUser($data))
            {
                redirect('auth/sign_in');
            }
            else
            {
                $this->view('auth/sign_up', $data);     
            }     
        }
        else
        {
            //init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '', 
            ];
            //load view
            $this->view('auth/sign_up', $data);      
        }
    }

    public function sign_in()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
           // process form
           $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

           $data = [
               'login' => trim($_POST['login']),
               'password' => trim($_POST['password']),
           ];
            
            $loggedInUser = $this->userModel->getUser($data['login'], $data['password']);

            if($loggedInUser)
            {
                //create session
                $this->createUserSession($loggedInUser);
            }
            else
            {
                $this->view('error');
            }
        }
        else
        {
            //init data
            $data = [
                'login' => '',
                'password' => '',
            ];
            //load view
            $this->view('auth/sign_in', $data);          
        }
    }



    //setting user section variable
    public function createUserSession($user)
    {
        $_SESSION['id'] = $user->u_id;
        $_SESSION['name'] = $user->u_name;
        $_SESSION['email'] = $user->u_email;
        $_SESSION['admin'] = $user->u_admin;

        if ($_SESSION['admin'] == true)
        {

            redirect('panel/list_of_funcs');
        }
        else
        {
            redirect('posts/read_posts');
        }
    }

    //logout and destroy user session
    public function logout()
    {
        unset($_SESSION['id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['admin']);

        session_destroy();

        redirect('auth/sign_in');
    }
}