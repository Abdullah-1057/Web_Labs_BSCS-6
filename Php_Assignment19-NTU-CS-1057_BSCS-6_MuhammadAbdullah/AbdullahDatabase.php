<?php
//Muhammad Abdullah BSCS-6 19-NTU-CS-1057 @ All rights reserved 
class Database{
    private $user = "root";
    private $pass = "";
    private $dbname = "xyz";
    private $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=$this->dbname",$this->user,$this->pass);
        if(!$this->db)
        {
            die('connection failed');
        }
       
    }
    
    public function FetchItemsByID($id)
    {
        //try{
            $sql = $this->db->prepare("SELECT * FROM products WHERE pid = ?");
            $sql->execute([$id]);
            return $sql->fetch();
       // }
        //catch(exception $e)
        //{
          //  $e->get_error_message();
        //}
       
    }
    public function FetchAllItems()
    {
        $sql = $this->db->query("SELECT * FROM products");
        return $sql->fetchAll();
    }
    public function AddItem($ProductName, $ProductPrice)
    {
        $sql = $this->db->prepare("INSERT INTO products(pname, pprice) VALUE(?, ?)");
        $sql->execute([$ProductName, $ProductPrice]);
    }
    public function DeleteStoreItems($ProductID)
    {
        $sql = $this->db->prepare("DELETE FROM products WHERE `products`.`pid` = ?");
        $sql->execute([$ProductID]);
    }
    //UPDATE table_name
    //SET column1 = value1, column2 = value2, ...
    //WHERE condition;
}
