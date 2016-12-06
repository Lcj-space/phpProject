<?php
echo "<div style=' width: 450px;margin: 100px auto; background: yellow'>";
$i=1;
do{
    for($j=1;$j<=$i;$j++){
        echo $i.'*'.$j.'='.$i*$j;
    }
    $i++;
    echo '</br>';
}while($i<10);
echo "</div>";