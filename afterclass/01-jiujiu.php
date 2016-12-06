<?php
echo "<form style='background: gray;height: 200px;width: 450px; margin: 100px auto'>";
for ($i = 1; $i <= 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . '*' . $j . '=' . $i * $j;
    }
    echo "</br>";
}
echo "</form>"
?>