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

    public function edit()
    {
        
    }

    public function delete()
    {
        
    }

    public function store()
    {
        
    }

    public function destroy()
    {
        
    }


}