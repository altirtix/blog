<?php
  class Panel extends Controller 
  {
    public function __construct()
    {
      $this->tableModel = $this->model('Table');
      $this->userModel = $this->model('User');
      $this->visitorModel = $this->model('Visitor');
      $this->categoryModel = $this->model('Category');
      $this->typeModel = $this->model('Type');
      $this->postModel = $this->model('Post');
      $this->reviewModel = $this->model('Review');
      $this->informationModel = $this->model('Information');
      $this->markModel = $this->model('Mark');
    }
    
    public function list_of_funcs()
    {
      if ($this->userModel->isAdmin($_SESSION['name']))
      {
        $a_posts = $this->postModel->getPostsCount(true);
        $d_posts = $this->postModel->getPostsCount(false);
        $a_marks = $this->markModel->getMarksCount(true);
        $d_marks = $this->markModel->getMarksCount(false);
        $a_users = $this->userModel->getUsersCount(true);
        $d_users = $this->userModel->getUsersCount(false);
        $u_visitors = $this->visitorModel->getUniqueVisitorsCount();
        $a_visitors = $this->visitorModel->getVisitorsCount();
        

        $data = [
          'a_posts' => $a_posts,
          'd_posts' => $d_posts,
          'a_marks' => $a_marks,
          'd_marks' => $d_marks,
          'a_users' => $a_users,
          'd_users' => $d_users,
          'u_visitors' => $u_visitors,
          'a_visitors' => $a_visitors
        ];

        $this->view('panel/list_of_funcs', $data);
      }
      else
      {
        $this->view('error');
      }
    }

    public function create_category()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

            $data = [
                'name' => trim($_POST['name']),
                'user' => $_SESSION['id']
            ];

            if($this->categoryModel->addCategory($data))
            {
                redirect('panel/read_categories');
            }
            else
            {
                $this->view('panel/create_category', $data);     
            }     
        }
        else
        {
            //init data
            $data = [
                'name' => '',
                'user' => '',
            ];
            //load view
            $this->view('panel/create_category', $data);      
        }
    }

    public function create_type()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            // process form
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

            $data = [
                'name' => trim($_POST['name']),
                'user' => $_SESSION['id']
            ];

            if($this->typeModel->addType($data))
            {
                redirect('panel/read_types');
            }
            else
            {
                $this->view('panel/create_type', $data);     
            }     
        }
        else
        {
            //init data
            $data = [
                'name' => '',
                'user' => '',
            ];
            //load view
            $this->view('panel/create_type', $data);      
        }
    }

    public function create_post()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $target_dir = '/public/uploads/img/';
            $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

            $categories = $this->tableModel->getData('db_blog.t_categories');
            $types = $this->tableModel->getData('db_blog.t_types');

            $data = [
                'name' => trim($_POST['name']),
                'desc' => trim($_POST['desc']),
                'img' => $target_dir . basename($_FILES["fileToUpload"]["name"]),
                'category' => trim($_POST['category']),
                'type' => trim($_POST['type']),
                'user' => $_SESSION['id'],
                'text' => trim($_POST['text']),
                'resource' => trim($_POST['resource']),
                'categories' => $categories,
                'types' => $types
            ];

            if($this->postModel->addPost($data))
            {
                redirect('posts/read_posts');
            }
            else
            {
                die('something went wrong');
            }
        }
        else
        {
            $categories = $this->tableModel->getData('db_blog.t_categories');
            $types = $this->tableModel->getData('db_blog.t_types');
            
            $data = [
                'name' => (isset($_POST['name']) ? trim($_POST['name']) : ''),
                'desc' => (isset($_POST['desc']) ? trim($_POST['desc']) : ''),
                'img' => (isset($_POST['img']) ? trim($_POST['img']) : ''),
                'category' => (isset($_POST['category']) ? trim($_POST['category']) : ''),
                'type' => (isset($_POST['type']) ? trim($_POST['type']) : ''),
                'user' => (isset($_POST['user']) ? trim($_POST['user']) : ''),
                'text' => (isset($_POST['text']) ? trim($_POST['text']) : ''),
                'resource' => (isset($_POST['resource']) ? trim($_POST['resource']) : ''),
                'categories' => $categories,
                'types' => $types
            ];

            $this->view('panel/create_post', $data);
        }
    }

    public function update_information()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $data = [
              'email' => trim($_POST['email']),
              'message' => trim($_POST['message'])
          ];

          if($this->informationModel->editInformation($data))
          {
              redirect('panel/read_information');
          }
          else
          {
            $this->view('panel/list_of_funcs', $data);
          }
      }
      else
      {
        $information = $this->tableModel->getDataSingle('db_blog.v_information');
        
        $data = [
          'information' => $information
        ];

        $this->view('panel/update_information', $data);
      }
    }

    public function update_user()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $data = [
              'login' => trim($_POST['login']),
              'admin' => trim($_POST['admin']),
              'active' => trim($_POST['active'])
          ];

          if($this->userModel->editUser($data))
          {
              redirect('panel/read_users');
          }
          else
          {
            $this->view('panel/list_of_funcs', $data);
          }
      }
      else
      {
        $this->view('panel/update_user', $data);
      }
    }

    public function update_visitor()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $data = [
              'ip' => trim($_POST['ip']),
              'active' => trim($_POST['active'])
          ];

          if($this->visitorModel->editVisitor($data))
          {
              redirect('panel/read_visitors');
          }
          else
          {
            $this->view('panel/list_of_funcs', $data);
          }
      }
      else
      {
        $this->view('panel/update_visitor', $data);
      }
    }

    public function update_post()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $data = [
              'name' => trim($_POST['name']),
              'active' => trim($_POST['active'])
          ];

          if($this->postModel->editPost($data))
          {
              redirect('panel/read_posts');
          }
          else
          {
            $this->view('panel/list_of_funcs', $data);
          }
      }
      else
      {
        $this->view('panel/update_post', $data);
      }
    }

    public function update_review()
    {
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {
          $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
          $data = [
              'message' => trim($_POST['message']),
              'active' => trim($_POST['active'])
          ];

          if($this->reviewModel->editReview($data))
          {
              redirect('panel/read_reviews');
          }
          else
          {
            $this->view('panel/list_of_funcs', $data);
          }
      }
      else
      {
        $this->view('panel/update_review', $data);
      }
    }

    public function read_information()
    {
      $table = $this->tableModel->getData('db_blog.v_information');
      $data = [
          'information' => $table
      ];

      $this->view('panel/read_information', $data);
    }

    public function read_categories()
    {
      $table = $this->tableModel->getData('db_blog.v_categories');
      $data = [
          'categories' => $table
      ];

      $this->view('panel/read_categories', $data);
    }

    public function read_types()
    {
      $table = $this->tableModel->getData('db_blog.v_types');
      $data = [
          'types' => $table
      ];

      $this->view('panel/read_types', $data);
    }

    public function read_posts()
    {
      $table = $this->tableModel->getData('db_blog.v_posts');
      $data = [
          'posts' => $table
      ];

      $this->view('panel/read_posts', $data);
    }

    public function read_users()
    {
      $table = $this->tableModel->getData('db_blog.v_users');
      $data = [
          'users' => $table
      ];

      $this->view('panel/read_users', $data);
    }

    public function read_reviews()
    {
      $table = $this->tableModel->getData('db_blog.v_reviews');
      $data = [
          'reviews' => $table
      ];

      $this->view('panel/read_reviews', $data);
    }

    public function read_visitors()
    {
      $table = $this->tableModel->getData('db_blog.v_visitors');
      $data = [
          'visitors' => $table
      ];

      $this->view('panel/read_visitors', $data);
    }

    public function read_mails()
    {
      $table = $this->tableModel->getData('db_blog.v_mails');
      $data = [
          'mails' => $table
      ];

      $this->view('panel/read_mails', $data);
    }

    public function read_marks()
    {
      $table = $this->tableModel->getData('db_blog.v_marks');
      $data = [
          'marks' => $table
      ];

      $this->view('panel/read_marks', $data);
    }

    public function read_feedback()
    {
      $table = $this->tableModel->getData('db_blog.v_feedback');
      $data = [
          'feedback' => $table
      ];

      $this->view('panel/read_feedback', $data);
    }

  }