<?php
class Success extends Controller 
{
    public function __construct()
    {
    }
    
    public function index()
    {
        $this->view('success');
    }
}