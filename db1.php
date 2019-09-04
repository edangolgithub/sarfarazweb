<?php
class database
{
    public $host;
    public $user;
    public $pass;
    public $database;
    public $port;
    public $con;

   function __construct($server="localhost",$user="root",$pass="",$database="school",$port=3306)
   {
   $this->host=$server;
   $this->user=$user;
   $this->pass=$pass;
   $this->database=$database;
   $this->port=$port;
   $this->con=new mysqli($this->host,$this->user,$this->pass,$this->database,$this->port);
   }
   function GetConnection()
   {
      return $this->con;
   }
   function GetResult($sql,$param="",...$array)
   {
     $stmt=$this->con->prepare($sql);
     $stmt->bind_param($param,...$array);
     $stmt->execute();
     return $stmt->get_result();
    
   }
}

?>