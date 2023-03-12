<?php
  class Dump extends Controller 
  {
    public function __construct()
    {

    }

    public function index()
    {
      $output = shell_exec('pg_dump -U admin postgres > backups/dbexport.pgsql');
      redirect('success');
    }
  }