<?php
class Database{
    private $db;
    private $user = "root";
    private $pass = "";
    private $dbname = "bscs";
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=$this->dbname",$this->user,$this->pass);
        if(!$this->db)
        {
            die('connection failed');
        }
       
    }

    function fetchAllColumns($tbl){
        return $this->db->query("SELECT * FROM $tbl");
        
    }
    function CheckSignIn($user,$password) 
    {
        $sql = "SELECT `uid` FROM `users` WHERE uname = \"$user\" AND password=\"$password\"";
        $st = $this->db->query($sql);
        if($st->rowCount()>0)
        { 
        $row = $st->fetch();
        return $row[0]; 
        }
        else
        {
            return false;
        }
    }
    
    function signUp($user,$pass)
    {
    try{
    $sql = "INSERT INTO `users` (`uname`, `password`) VALUES (?,?);";
    $st = $this->db->prepare($sql);
    $res =  $st->execute(array($user,$pass));
   // if($res==1)
    //{INSERT INTO `table` (`id`, `email`) VALUES (NULL, 'abc@gmail.com');
        header('location:userhome.php?uid='.$this->db->lastInsertId());
    //}
    }
    
    catch(Exception $e) 
    {
        header('location:SignUp_Form.php?e='.$e->getCode());
        
        //print_r($e);
        //print($e->getCode());
       // print($e->getMessage()); 
    }
    }
}

