<?php
    echo "<form style='background: cornflowerblue;width: 450px ;margin: 100px auto'>";
    $i=0;
//    $j=1;
    while ($i<=9){
        for($j=1;$j<=$i;$j++){
            echo $i.'*'.$j.'='.$i*$j;
        }
//        while ($j<=$i){
//            echo $i.'*'.$j.'='.$i*$j;
////            $j++;
////            echo  $j;
//        }
        $i++;
        echo "</br>";
    }
    echo "</form>";