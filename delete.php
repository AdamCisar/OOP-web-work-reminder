<?php
require_once 'model.php';
class Delete extends Model{
    

    public function deleteTask($id){
//        $this->id = $id;
        $this->delete($id);
        
    }
    
}