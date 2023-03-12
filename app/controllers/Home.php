<?php
  class Home extends Controller 
  {
    public function __construct()
    {
      $this->informationModel = $this->model('Information');
      $this->visitorModel = $this->model('Visitor');
    }
    
    public function index()
    {
      $message = $this->informationModel->getMessage();
      $data = [
          'message' => $message
      ];
      
      $ip = $_SERVER['REMOTE_ADDR'];
      $visitor = $this->visitorModel->setVisitor($ip);
      
      $this->view('home', $data);
    }
  }