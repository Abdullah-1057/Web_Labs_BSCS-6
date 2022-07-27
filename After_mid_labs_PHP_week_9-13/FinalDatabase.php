<?php
class Database{
    private $db;
    private $user = "root";
    private $pass = "";
    private $dbname = "birds";
    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=$this->dbname",$this->user,$this->pass);
        if(!$this->db)
        {
            die('connection failed');
        }
        else
        {
           
       

        }
       
    }
    function CheckSignIn($user,$pass) 
    {
        $sql = "SELECT `userid` from `users` WHERE `users`.`username`='$user' AND `users`.`password`='$pass'";
    $st = $this->db->query($sql);
    if($st->rowCount()>0){
        session_start();
        $rows = $st->fetch();

        $_SESSION['userid']=$rows[0];
        echo $_SESSION['userid'];
    }
    

    }
    function signUp($bird,$food,$enter)
   {
    $sql = "INSERT INTO `birdsdetails` (`bird_name`, `food`, `enteredby`) VALUES (?,?,?);";
    $st = $this->db->prepare($sql);
    $st->execute(array($bird,$food,$enter));
    
   }
}