<?php
/**
 * Created by PhpStorm.
 * User: 13675
 * Date: 2016/12/2
 * Time: 14:17
 */
//sting->int
$num="1999";
var_dump($num);
echo "<br/>";
$bb = settype($num,'int');
if ($bb){
    var_dump($num);
}

//array->string
$str = array('a','b','c');
$arr;
for($i=0;$i<strlen($str);$i++){
    $arr.=$str[$i];
}
var_dump($arr);
?>