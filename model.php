<?php
require_once 'dbh.php';
class Model extends Dbh {
    
    protected function add($name,$place,$dates){
        $stmt = $this->connect()->prepare('INSERT INTO tasks (name,place,dates) VALUES (?,?,?);');
        
        if(!$stmt->execute(array($name,$place,$dates))){
            $stmt = null;
            header("location: index.php?error=stmtfailed");
            exit();
        }
        
        
    }

    public function getTasks(){
        
     $stmt = $this->connect()->query("SELECT * FROM tasks");
     while($row = $stmt->fetchAll()){
         $name = $row[0]['name'];
         $place = $row[0]['place'];
         $dates = $row[0]['dates'];
         $result = $name.$place.$dates;
         return $stmt;
     }
 }
}
 