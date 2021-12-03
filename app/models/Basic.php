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
        return $result;
    }


}