<?php
namespace config;

 class Connection{
     private $db=null;
     private $stmt=null;
   
     public function open(){
       
        $this->db =new \Mysqli('localhost','root','','emp_manager');
     }
     public function PrepareStatement($sql){
            $this->stmt=$this->db->prepare($sql);
            return $this->stmt;
     }
     public function execute(){
         return $this->stmt->execute();
     }
     public function getResult(){
       return $this->stmt->get_result();  
     }
     public function close(){
         $this->db->close();
     }

 }