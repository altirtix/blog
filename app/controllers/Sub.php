<?php
class Sub extends Controller 
{
    public function __construct()
    {
      $this->mailModel = $this->model('Mail');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

            $data = [
                'email' => trim($_POST['email'])
            ];

            if($this->mailModel->addMail($data))
            {
                redirect('success');
            }
            else
            {
                redirect('error');
            }  
        }
        else
        {
            $this->view('sub', $data);      
        }
    }
}