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

    public function edit()
    {

        $this->view('customer/edit');
    }

    public function delete()
    {
        
    }

    public function store()
    {
        if (isset($_POST["cust_no"])){
            $data = [
                'cust_no' => $_POST["cust_no"],
                'name' => $_POST["name"],
                'id' => $_POST["id"],
                'address' => $_POST["address"],
                'tel_no' => $_POST["tel_no"]
            ];
            $this->view('customer/store',['success' => $this->basicModel->storeBasic($data)]);
        }else{
            header('Location: /customer/index');
        }
    }

    public function update()
    {
        $this->view('customer/update');
    }

    public function destroy()
    {
        
    }


}