<?php
  class Error extends Controller 
  {
    public function __construct()
    {
    }
    
    public function index()
    {
        $this->view('error');
    }
  }