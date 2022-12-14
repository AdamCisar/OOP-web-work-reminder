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

    protected function getTasks(){
        
     $stmt = $this->connect()->query("SELECT * FROM tasks");
     return $stmt;
 }
    protected function delete($id){
        $stmt = $this->connect()->prepare("DELETE FROM tasks WHERE id = '$id'");
        
        if(!$stmt->execute(array($id))){
        $stmt = null;
        header("location: index.php?error=stmtfailed");
        exit();
        }

    }
}
 