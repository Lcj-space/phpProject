<?php
/**
 * Created by PhpStorm.
 * User: 13675
 * Date: 2016/12/2
 * Time: 22:06
 */
echo "<form style='width: 500px; height: 180px;margin: 100px auto;background: gray ' >";
for ($i=1;$i<=9;$i++){
    if ($i%2==0){
        echo "<tr style='background-color:red'>";
        for ($j=1;$j<=$i;$j++){
            echo $i.'*'.$j.'='.$i*$j;
        }
        echo "</tr>";
    }else{
        echo "<tr style='background-color: aqua'>";
        for ($j=1;$j<=$i;$j++){
            echo $i.'*'.$j.'='.$i*$j;
        }
        echo "</tr>";
    }

    echo "</br>";
}
echo "</from>";
?>