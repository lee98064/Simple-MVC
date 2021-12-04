<?php 

class Customer extends Controller{


    public function __construct()
    {
        $this->basicModel = $this->model('Basic');
    }

    public function index()
    {
        $this->view('basic/index');
    }

    public function show()
    {
        $this->view('customer/show');
    }

    public function new()
    {
        $this->view('customer/new');
    }

    public function edit_search()
    {
        $this->view('customer/edit_search');
    }

    public function edit()
    {
        if(isset($_POST["cust_no"])){
            $basic = $this->basicModel->getBasicById($_POST["cust_no"]);
            $this->view('customer/edit',$basic);
        }else{
            header("Location: /customer/edit_search");
        }
    }

    public function delete()
    {
        $this->view('customer/delete');
    }

    public function store()
    {
        if (isset($_POST["cust_no"])){
            $this->view('customer/store',['success' => $this->basicModel->storeBasic($this->getdata())]);
        }else{
            header('Location: /customer/edit');
        }
    }

    public function update()
    {
        if (isset($_POST["cust_no"])){
            $this->view('customer/update',['success' => $this->basicModel->updateBasic($this->getdata())]);
        }else{
            header('Location: /customer/edit');
        }
    }

    public function destroy()
    {
        if (isset($_POST["cust_no"])){
            $this->view('customer/destroy',['success' => $this->basicModel->destroyBasicById($_POST["cust_no"])]);
        }else{
            header('Location: /customer/delete');
        }
    }

    public function getdata()
    {
        return [
            'cust_no' => $_POST["cust_no"],
            'name' => $_POST["name"],
            'id' => $_POST["id"],
            'address' => $_POST["address"],
            'tel_no' => $_POST["tel_no"]
        ];
    }


}