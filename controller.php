<?php
require_once 'model.php';
class Controller extends Model{
    
    private $name;
    private $place;
    private $dates;
    
    public function __construct($name,$place,$dates){
        $this->name = $name;
        $this->place = $place;
        $this->dates = $dates;
    }
    
    public function addTask(){    
        $this->add($this->name,$this->place,$this->dates);
    }
    
    
}