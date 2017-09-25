<?php
    echo "<table>";
    for($r = 0; $r <= 100; $r++){
        if($r == 0){
            echo "<tr>";
            for($c = 0; $c <= 100; $c++){
                if($c == 0){
                    echo "<td></td>";
                }
                else{
                    echo "<td>".$c."</td>";
                }
            }
            echo "</tr>";
        }
        else{
            echo "<tr>";
            echo "<td>".$r."</td>";
            for($c = 1; $c <= 100; $c++){
                echo "<td>";
                echo $r * $c;
                echo "</td>";
            }
            echo "</tr>";
        }
        
    }
    echo "</table>";
?>