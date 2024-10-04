<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\PostsModel;
use App\Models\CategoriesModel;
use App\Models\NewsletterModel;

class Dashboard extends BaseController
{
    public function index(){
        // $model= new UsersModel();
        // $id = $model->insert([
        //     "name"=>"David",
        //     "username"=>"davidnavarro26",
        //     "password"=>"1234",
        //     "role"=>"1"

        // ]);

        // // $model=new PostsModel();
        // // $model->insert([
        // //     "banner"=>"img1.png",
        // //     "title"=>"My first post",
        // //     "intro"=>"Hello this is me",
        // //     "content"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. ",
        // //     "category"=>"1",
        // //     "tags"=>"sports",
        // //     "created_at"=>date("Y-m-d"),
        // //     "created_by"=>"1"
        // // ]);
        $data['view']="index";
        $this->loadViews("index",$data);

    }

    public function uploadPost(){

        //load categories
        $model=new CategoriesModel();
        $data['categories']=$model->findAll();
        //print_r($data);

        $postmodel=new PostsModel();

        helper(["url","form"]);
        $validation= \Config\Services::validation();

        //$validation->setRule("title","title","required");
        // OTRAS REGLAS PARA IMAGEN max_size o is_image, max_size[5000] son 5MB, max_dims[200,200]
        $validation->setRules([
            "title"=>"required",
            "intro"=>"required",
            "content"=>"required|min_length[50]",
            "category"=>"required",

        ],
        [
            "title"=>[
                "required"=>"The title is required, please check it"
            ],
            "intro"=>[
                "required"=>"The intro is required, please check it"
            ],
            "content"=>[
                "required"=>"The content is required, please check it",
                "min_length"=>"Min 50 characters please"
            ],
            "category"=>[
                "required"=>"The intro is required, please check it"
            ]
        ]
    
    );

        if($_POST){

            
            if(!$validation->withRequest($this->request)->run()){
                //form validation error
                $errors=$validation->getErrors();
                //print_r($errors);
                $data['error']=true;
            
            }else{
                $file = $this->request->getFile("banner");
                $filename=$file->getRandomName();
                if($file->isValid()){
                    // $file->move(WRITEPATH."uploads",$filename);
                    $file->move(ROOTPATH."public/uploads",$filename);
                }
                // else{
                //     echo "Not valid";
                // }

                $_POST['banner']=$filename;
                $_POST['slug']=url_title($_POST['title']);
                $_POST['created_at']=date('Y-m-d');

                $postmodel->insert($_POST);

            }
            
            
        }
        // echo view("uploadPost",$data);
        $this->loadViews("uploadPost",$data);
    }


    public function category(){
        $this->loadViews("category");
    }

    public function add_newsletter(){
        if(isset($_POST['email'])){
            $newslettermodel=new NewsletterModel();
            $newslettermodel->insert($_POST);
        }else{
            echo "hola";
        }
    }


    public function loadViews($view=null,$data=null){
        if ($data) {
            $data['view']=$view;
            echo view("includes/header",$data);
            echo view($view,$data);
            echo view("includes/footer",$data);
        } else {
            
            echo view("includes/header");
            echo view($view);
            echo view("includes/footer");
        }
        
    }


    // public function index()
    // {
    //     // echo "Dentro del Dashboard";
    //     // $this->helloworld("dashboard-slug",123);
    //     $data['mydata1']="testing1";
    //     $data['mydata2']="testing2";

    //     return view('form',$data);
    // }
    // //PAra no poder acceder desde la url  http://localhost/projectCI4/public/Dashboard/helloworld
    // protected function helloworld($slug=null,$id=null) {
    //     echo $slug."<br>";
    //     echo $id."<br>";
    // }
    // //No puede usar php las vistas
    // public function template(){
    //     $parser = \Config\Services::parser();
    //     $data=[
    //         'title' => 'My website title',
    //         'content' => 'Lorem ipsun',
    //         'footer' => 'goodby!!!'

    //     ];
    //     echo $parser->setData($data)->render('template');
    // }

}
