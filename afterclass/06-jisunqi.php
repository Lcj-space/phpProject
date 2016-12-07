<?php
if (isset($_POST['sub'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    echo $num1;
    $ysf = $_POST['ysf'];
    $sum = 0;
    switch ($ysf) {
        case '+':
            $sum = $num1 + $num2;
            break;
        case '-':
            $sum = $num1 - $num2;
            break;

        case '*':
            $sum = $num1 * $num2;
            break;

        case '/':
            $sum = $num1 / $num2;
            break;

    }
    echo $sum;
}
?>
<html>
<head>
    <meta charset="utf-8">
    <style>
        * {
            padding: 0;
            margin: 0;
        }

        #container {
            margin: 100px;
        }
    </style>
</head>
<body>
<div id="container">
    <form action="06-jisunqi.php" method="post">
        <input type="text" name="num1">
        <select name="ysf">
            <option value="+">+</option>

            <option value="-">-</option>

            <option value="X">*</option>

            <option value="/">/</option>

        </select>
        <input type="text" name="num2">
        <input type="button" name="sub" value="计算">
    </form>
    <input type="text" value="计算结果">
</div>
</body>
</html>
