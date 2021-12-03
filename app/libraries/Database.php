<?php

class Database
{
    // 設定資料庫的常數來自於 config/config.php
    private $host = DB_HOST;
    private $dbname = DB_NAME;
    private $user = DB_USER;
    private $pass = DB_PASS;

    // 定義一些操作 Database 的變數，例如：
    private $dbh;
    private $query_string;
    private $stmt;
    private $error;

    public function __construct()
    {
        $this->dbh = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4",$this->user,$this->pass);
    }

    // Prepare statement with query
    public function query($query){
        $this->query_string = $this->dbh->prepare($query);
    }

    // Bind values
    public function bind($param, $value, $type = null){
        $this->query_string->bindParam($param,$value);
    }

    // 執行 prepared statement
    public function execute(){
        $result = $this->query_string->execute();
       
        return $this->query_string->fetchAll();
    }

    // 以下是 Model 可以操作資料庫的幾個預設方法
    // 可以自行定義更多需要的或常用的
    
    // 取得資料表的所有資料
    public function getAll(){
        
    }

    // 取得資料表的單一筆資料
    public function getSingle(){
        
    }

    // 取得資料表中資料的筆數
    public function getRowCount(){
        
    }
}