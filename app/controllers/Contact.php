<?php
class Contact extends Controller 
{
    public function __construct()
    {
      $this->feedbackModel = $this->model('Feedback');
    }

    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

            $data = [
                'name' => trim($_POST['name']),
                'email' => trim($_POST['email']),
                'message' => trim($_POST['message'])
            ];

            if($this->feedbackModel->addFeedback($data))
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
            $this->view('contact', $data);      
        }
    }
}