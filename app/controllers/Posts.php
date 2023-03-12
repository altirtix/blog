<?php 
class Posts extends Controller
{
    public function __construct()
    {
        //new model instance
        $this->userModel = $this->model('User');
        $this->postModel = $this->model('Post');
        $this->reviewModel = $this->model('Review');
        $this->tableModel = $this->model('Table');
    }

    public function read_posts()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET')
        {
            if (isset($_GET['category']) and isset($_GET['type']))
            {
                $category = $_GET['category'];
                $type = $_GET['type'];

                $posts = $this->postModel->getPostsByFilters($category, $type);
    
                $data = [
                    'category' => $category,
                    'type' => $type,
                    'posts' => $posts
                ];
    
                $this->view('posts/read_posts', $data);
            }
            else if (isset($_GET['query'])) 
            {
                $query = $_GET['query'];
    
                $posts = $this->postModel->getPostsByQuery($query);
    
                $data = [
                    'query' => $query,
                    'posts' => $posts
                ];
    
                $this->view('posts/read_posts', $data);
            }
            else if (isset($_GET['user'])) 
            {
                $user = $_GET['user'];
    
                $posts = $this->postModel->getPostsByUser($user);
    
                $data = [
                    'user' => $user,
                    'posts' => $posts
                ];
    
                $this->view('posts/read_posts', $data);
            }
            else
            {
                $posts = $this->postModel->getPosts();
                $count = $this->postModel->getPostsCount(true);
                $categories = $this->tableModel->getData('db_blog.t_categories');
                $types = $this->tableModel->getData('db_blog.t_types');
        
                $data = [
                    'posts' => $posts,
                    'count' => $count,
                    'categories' => $categories,
                    'types' => $types
                ];
        
                $this->view('posts/read_posts', $data);
            }
        }
    }

    //show single post 
    public function read_post($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

            $post = $this->postModel->getPostById($id);
            $reviews = $this->reviewModel->getReviewsByPost($id);

            $data = [
                'user' => $_SESSION['id'],
                'post' => $id,
                'message' => trim($_POST['message'])
            ];

            if($this->reviewModel->addReview($data))
            {
                redirect('posts/read_post/'.$id.'');
            }
            else
            {
                redirect('posts/read_post/'.$id.'');
            }     
        }
        else
        {
            //init data
            $post = $this->postModel->getPostById($id);
            $reviews = $this->reviewModel->getReviewsByPost($id);
    
            $data = [
                'post' => $post,
                'reviews' => $reviews
            ];
    
            $this->view('posts/read_post', $data);
        }
    }
}                            
                        