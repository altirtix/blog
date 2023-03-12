<?php
  class Excel extends Controller 
  {
    public function __construct()
    {
        $this->tableModel = $this->model('Table');
    }
    
    public function index()
    {
        header("Content-Type: application/xls");    
        header("Content-Disposition: attachment; filename=export.xls");  
        header("Pragma: no-cache"); 
        header("Expires: 0");

        $table = $this->tableModel->getData('db_blog.v_mails');
        $data = [
            'mails' => $table
        ];

        echo '<body style="border: 0.1pt solid #ccc">';
        echo '<table class="table table-striped">';
        echo '<tr>';
        echo '<th>Email</th>';
        echo '<th>Active</th>';
        echo '<th>Date</th>';
        echo '</tr>';
        foreach ($data['mails'] as $table)
        {
            echo '<tr>';
            echo '<td>'.$table->m_email.'</td>';
            echo '<td>'.$table->m_active.'</td>';
            echo '<td>'.$table->m_date.'</td>';
            echo '</tr>';
        }
        echo '</table>';
        echo '</body>';
    }
  }