<?php
$marks = array(
    "mohammad" => array (
       "physics" => 35,
       "maths" => 30,	
       "chemistry" => 39
    ),
    
    "qadir" => array (
       "physics" => 30,
       "maths" => 32,
       "chemistry" => 29
    ),
    
    "zara" => array (
       "physics" => 31,
       "maths" => 22,
       "chemistry" => 39
    )
 );
 echo "<table border='2px' cellpadding='5px'>
         <tr>
        <th>Student name</th>
        <th>mohammad</th>
        <th>qadir</th>
        <th>zara</th>
        </tr>
 ";

    foreach($marks as $key => $v1){
        echo "<tr>
        <td>$key</td>";
        foreach($v1 as $v2){
            echo  "<td>$v2</td>";
        }
        echo "</tr>";
    

    }
     echo "</table>";











?>