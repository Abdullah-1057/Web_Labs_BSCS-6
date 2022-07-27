<?php
class Database{
    private $db;
    private $user = "root";
    private $pass = "";
    private $dbname = "bscs3";
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=$this->dbname",$this->user,$this->pass);
        if(!$this->db)
        {
            die('connection failed');
        }
        else
        {
            echo "yoooooooo";
        }
       
    }
    function signUp($mail)
    {
    try{
    $sql = "INSERT INTO `table` (`id`, `email`) VALUES (NULL, ?);";
    $st = $this->db->prepare($sql);
    $res =  $st->execute(array($mail));
   // if($res==1)
    //{
      //  header('location:userhome.php?uid='.$this->db->lastInsertId());
    //}
    }
    
    catch(Exception $e) 
    {
        //header('location:SignUp_Form.php?e='.$e->getCode());
        //print_r($e);
        //print($e->getCode());
       // print($e->getMessage()); 
    }
    }

    function fetchAllColumns($table)
    {
        return $this->db->query("SELECT * FROM `table`;");    
    }
    function Update($mail,$ID)
    {
        try{
            $sql = "UPDATE `table` SET `email` = ? WHERE `table`.`id` = ?";
            $st = $this->db->prepare($sql);
            $res =  $st->execute(array($mail,$ID));
            }
        catch(Exception $e) 
        {
        
        }
    }
    function Delete()
    {
        try{
            $sql = "DELETE FROM `table` WHERE `table`.`id` = 2";
            $st = $this->db->prepare($sql);
            $res =  $st->execute();
            }
        catch(Exception $e) 
        {
        
        }
    }

    function CheckSignIn($id,$email) 
    {
        $sql = "SELECT * FROM `table` WHERE `table`.`id` = ?";
        $st = $this->db->prepare($sql);
        $res =  $st->execute(array($id));
        if($res->rowCount()>0)
        { 
        $row = $res->fetch();
        return $row[0]; 
        }
        else
        {
            return false;
        }
    }

}