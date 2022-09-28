<?php

    include 'dbh.php';
    include 'model.php';
    include 'controller.php';

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $place = $_POST['place'];
    $dates = $_POST['dates'];
    

    $addrow = new Controller($name,$place,$dates);
    
    $addrow->addtask();
    
    header("location: index.php?error=none");
    

}