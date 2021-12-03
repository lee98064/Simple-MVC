<?php 

class Search extends Controller{


    public function __construct()
    {
        $this->basicModel = $this->model('Basic');
    }

    public function index()
    {
        $this->view('search/index');
    }


    public function show()
    {
        if(isset($_POST["cust_no"])){
            $basic = $this->basicModel->getBasicById($_POST["cust_no"]);
            $this->view('search/show', $basic);
        }else{
            header("Location: /search");
        }
    }

}