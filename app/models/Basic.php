<?php 

class Basic{
    private $db;

    // 在建構子將 Database 物件實例化
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getBasicById($id)
    {
        $query = "SELECT * FROM `basic` WHERE cust_no = :id";
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $result = $this->db->execute();
        if ($result){
            return $this->db->getAll();
        }else{
            return $result;
        }
    }


    public function storeBasic($data)
    {
        $query = "INSERT INTO basic VALUES(:cust_no,:name,:id,:address,:tel_no)";
        $this->db->query($query);
        $this->db->bind(':cust_no',$data['cust_no']);
        $this->db->bind(':name',$data['name']);
        $this->db->bind(':id',$data['id']);
        $this->db->bind(':address',$data['address']);
        $this->db->bind(':tel_no',$data['tel_no']);
        return $this->db->execute();           
    }


}