<?php
/**
 * Created by PhpStorm.
 * User: 13675
 * Date: 2016/12/2
 * Time: 10:44
 */
//echo  只输出标量

// 类型的转换 string->int int->string
//四个标量：int float string bool
//两个复合类型： array object
//两个特殊类型： resource null
if(isset($_GET['sub'])){
    $year = $_GET['year'];
    var_dump($year);
}
var_dump($_GET['year']);
//echo "hello";
?>
<meta charset="utf-8">
<form action="" method="">
    year:<input type="text" name="year">
    <input type="submit" name="sub" value="提交">
</form>