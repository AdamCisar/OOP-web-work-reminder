<?php
require_once 'model.php';


class View extends Model{
    
    public function showdata(){
        $this->getTasks();
        
    }
}