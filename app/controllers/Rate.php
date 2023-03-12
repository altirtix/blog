<?php
class Rate extends Controller 
{
    public function __construct()
    {
      $this->markModel = $this->model('Mark');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $ip = $_SERVER['REMOTE_ADDR'];

            $data = [
                'ip' => $ip,
                'state' => trim($_POST['state'])
            ];

            if($this->markModel->addMark($data))
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
            $this->view('rate', $data);      
        }
    }
}