<?php

include 'grab.php';
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
         
        </table>
      </form>    
      </div>
   </div>  

   

</body>
</html>