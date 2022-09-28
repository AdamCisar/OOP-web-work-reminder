<?php

    include 'dbh.php';
    include 'model.php';
    include 'controller.php';
    include 'delete.php';

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $place = $_POST['place'];
    $dates = $_POST['dates'];
    

    $addrow = new Controller($name,$place,$dates);
    
    $addrow->addTask();
    
    header("location: index.php?error=none");
}

if(isset($_POST['delete'])){
    
    $id = $_POST['delete'];
    

    $deleterow = new Delete();
    
    $deleterow->deleteTask($id);
    
    header("location: index.php?error=none");
    

}