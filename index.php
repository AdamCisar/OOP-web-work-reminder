<?php

include 'view.php';
?>





<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css" >
</head>

<body>
   <div class="container">
       <div class="divInput">
        <form action="grab.php" method="post">

            <input type="text" name="name" placeholder="Meno a priezvisko" > <br>
            <input type="text" name="place" placeholder="Miesto" ><br>
            <input type="date" name="dates" placeholder="Dátum" > <br>
            <input type="submit" name="submit" value="Pridať" >

        </form>
        </div>
    
        <br>
    <div class="divTable">
      <form action="grab.php" method="post">
        <table>
            <th>Meno</th>
            <th>Miesto</th>
            <th>Dátum</th>
         <?php
        $obj = new View();
        $result = $obj->showdata();    
        $row = $result->fetchAll();
        $count = count($row);
        $num = 0;    
        for($i = 0; $i < $count; $i++){   
            
            echo '<tr>';
            echo "<td>".$row[$num]['name'].'</td><td>'.$row[$num]['place'].'</td><td>'.$row[$num]['dates'].'</td>';    

            echo '<td class="button"> 
            <button type="submit" name="id" value="'.$row[$num]['id'].'">Odstrániť</button></td>';
            echo '</tr>';
            $num = $num + 1;
            } 
        
            ?>
        </table>
      </form>    
      </div>
   </div>  
</body>
</html>