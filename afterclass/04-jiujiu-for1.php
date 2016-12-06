<?php
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "<li style='text-align: center;line-height: 30px;display: inline; 
               border: 1px solid black;
               width: 50px;height: 30px;list-style: none'>";
        echo $i . '*' . $j . '=' . $i * $j;
        echo "</li>";
    }
    echo "</br>";
}