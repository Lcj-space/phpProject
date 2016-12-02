<?php
/**
 * Created by PhpStorm.
 * User: 13675
 * Date: 2016/12/2
 * Time: 15:23
 */
if (isset($_POST)){
    $num1 = $_POST["num1"];
    echo $num1;
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        #div1{
            width: 720px;
            height: 30px;
            margin: 100px auto;
            background: gray;

        }
    </style>
</head>
<body>
<div id="div1">
        <form action="05-test.php" method="post">
                    num1:<input type="text" name="num1" value="<echo $num1>">
                        <select name="ysf">
                            <option value="+">+</option>
                            <option value="-">-</option>
                            <option value="*">X</option>
                            <option value="/">/</option>
                        </select>
                    num2:<input type="text" name="num2">
                   num1:<input type="text" name="sum">
            <input type="submit" name="sub" value="提交">
        </form>

</div>
</body>
</html>
