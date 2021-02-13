<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Tabla</title>
    </head>
        <body>
            
                <?php

                $a["Datos"]["Nombre"] = "Luis";
                $a["Datos"]["Apellido"] = "Quintero";
                $a["Datos"]["Cedula"] = "25152235";
                $a["Datos"]["Sueldo"] = "5000";
                $a["Datos"]["Departamento"] = "Informatica";
                $a["Datos"]["Direccion"] = "La Florida";

              $keys =  array_keys($a["Datos"]);

              $table = "<table border='1\'>";
              $table .= "<tr>";
              foreach($keys as $i){
                $table .= "<th>" .$i ."</th>";
              }

              foreach($keys as $i){
                  $table .= "<td>".$a["Datos"]["${i}"]."</td>";
              }

              $table .= "</table>";
              echo $table;

                 //  echo "<pre>";var_dump(null);  echo"</pre>"         
                     ?>
                
        </body>
        </html>