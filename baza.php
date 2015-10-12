<?php

class Baza {
    private $pdo;
    public function __construct() {
        $this->pdo = new pdo ('mysql:dbname=baza;host=localhost' , 'root', 'test');
        }
        public function getUser() {
            $users = array();
            $sql = "SELECT *
                    FROM `tabela1` ";
            $result = $this->pdo->query($sql);
                if($result->rowCount()>0){
                while($rs = $result->fetch(pdo::FETCH_ASSOC)){
                    $users[]=$rs;                    
                    }
                }  
                return $users;
                 
                
        } 
        
        public function addUser($login, $password, $email) {
            $login=$_POST['login'];
            $password= $_POST['password'];
            $email= $_POST['email'];           
            $sql = "INSERT INTO `tabela1` (`login`, `password`, `email`)
                       VALUES ('$login','$password','$email')";
            $result = $this->pdo->query($sql);
            
                
        }
        public function deleteUser() {
            if (!empty($_POST['id'])) {
                 $id = $_POST['id'];
                
            $sql = "DELETE FROM `baza`.`tabela1` WHERE `tabela1`.`id` = '$id'";
            $result = $this->pdo->query($sql);
            
            }
        }
            
        
}
?>
