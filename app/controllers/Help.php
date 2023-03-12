<?php
  class Help extends Controller 
  {
    public function __construct()
    {
      $this->informationModel = $this->model('Information');
      $this->visitorModel = $this->model('Visitor');
    }
    
    public function index()
    {
      $email = $this->informationModel->getEmail();
      $data = [
          'email' => $email,
      ];
      
      $this->view('help', $data);
    }
  }